<?php
require_once 'helper.php';
// Check if user is logged in
session_start();
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    http_response_code(403);
    header('Location: ../admin/index.php');
    exit;
}

require_once '../services/stories-service.php';
$stories_data = getStories();
$success = $error = '';

// Handle create
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'create') {
    // Prepare Arabic fields
    $video_url = getYouTubeEmbedUrl($_POST['video_url']);
    if(!$video_url){
        $error = 'رابط الفيديو غير صالح';
    }
    $fields_ar = [
        'name' => $_POST['name'] ?? '',
        'type' => $_POST['type'] ?? 'stories',
        'image' => '',
        'modal' => [
            'title' => $_POST['modal_title'] ?? '',
            'video' => $video_url ?? '',
            'images' => [],
            'content' => []
        ]
    ];
    
    // Prepare English fields
    $fields_en = [
        'name' => $_POST['name_en'] ?? '',
        'type' => $_POST['type'] ?? 'stories',
        'image' => '',
        'modal' => [
            'title' => $_POST['modal_title_en'] ?? '',
            'video' => $video_url ?? '',
            'images' => [],
            'content' => []
        ]
    ];
    
    // Handle main image upload
    if (isset($_FILES['image_upload']) && $_FILES['image_upload']['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES['image_upload']['name'], PATHINFO_EXTENSION);
        $main_target = '../uploads/story_main_' . time() . '.' . $ext;
        if (move_uploaded_file($_FILES['image_upload']['tmp_name'], $main_target)) {
            $clean_path = preg_replace('#^\.\./#', '', $main_target);
            $fields_ar['image'] = $fields_en['image'] = $clean_path;
        }
    }
    
    // Handle gallery images upload
    if (!empty($_FILES['gallery_upload']['name'][0])) {
        foreach ($_FILES['gallery_upload']['tmp_name'] as $idx => $tmp_name) {
            if ($_FILES['gallery_upload']['error'][$idx] === UPLOAD_ERR_OK) {
                $ext = pathinfo($_FILES['gallery_upload']['name'][$idx], PATHINFO_EXTENSION);
                $gallery_target = '../uploads/story_gallery_' . time() . '_' . $idx . '.' . $ext;
                if (move_uploaded_file($tmp_name, $gallery_target)) {
                    $clean_gallery_path = preg_replace('#^\.\./#', '', $gallery_target);
                    $fields_ar['modal']['images'][] = $fields_en['modal']['images'][] = $clean_gallery_path;
                }
            }
        }
    }
    
    // Handle content paragraphs
    if (!empty($_POST['content_ar'])) {
        $content_ar = array_filter(array_map('trim', explode("\n", $_POST['content_ar'])));
        $fields_ar['modal']['content'] = $content_ar;
    }
    
    if (!empty($_POST['content_en'])) {
        $content_en = array_filter(array_map('trim', explode("\n", $_POST['content_en'])));
        $fields_en['modal']['content'] = $content_en;
    }
    
    if ($fields_ar['name'] && $fields_ar['modal']['title'] && $fields_ar['image'] && 
        $fields_en['name'] && $fields_en['modal']['title']) {
        // Add to Arabic and English stories files with the same id
        $id = addStory($fields_ar, 'ar');
        $story_ar_added = getStoryById($id, 'ar');
        $fields_en['id'] = $id;
        
        // Save to English file
        $data_en = getStories('en');
        if (!isset($data_en['stories'])) $data_en['stories'] = [];
        array_push($data_en['stories'], $fields_en);
        saveStories($data_en, 'en');
        $success = 'تمت إضافة القصة بنجاح (عربي وإنجليزي)';
        header('Location: added.php?type=success&link=stories-manage.php');
        exit;
    } else {
        $error = 'يرجى تعبئة جميع الحقول المطلوبة ورفع صورة رئيسية (بالعربية والإنجليزية)';
    }
}

// Handle delete
if (isset($_GET['delete'])) {
    if (deleteStory($_GET['delete'], 'ar') && deleteStory($_GET['delete'], 'en')) {
        $success = 'تم حذف القصة بنجاح';
        header('Location: deleted.php?type=success&link=stories-manage.php');
    } else {
        $error = 'تعذر حذف القصة';
    }
}

// Handle update (simple inline form)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'update') {
    $id = $_POST['id'] ?? '';
    $fields = [
        'name' => $_POST['name'] ?? '',
        'type' => $_POST['type'] ?? 'stories',
        'image' => $_POST['image'] ?? '',
        'modal' => [
            'title' => $_POST['modal_title'] ?? '',
            'video' => $_POST['video_url'] ?? '',
            'images' => [],
            'content' => []
        ]
    ];
    
    if (!empty($_POST['gallery'])) {
        $fields['modal']['images'] = array_map('trim', explode(',', $_POST['gallery']));
    }
    
    if (!empty($_POST['content'])) {
        $content = array_filter(array_map('trim', explode("\n", $_POST['content'])));
        $fields['modal']['content'] = $content;
    }
    
    if ($id && $fields['name'] && $fields['modal']['title']) {
        updateStory($id, $fields);
        $success = 'تم تحديث القصة بنجاح';
        $stories_data = getStories();
    } else {
        $error = 'يرجى تعبئة جميع الحقول المطلوبة';
    }
}
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة قصص النجاح</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin-news.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'includes/admin-nav.php'; ?>
    <div class="container admin-news-container py-4">
        <h2 class="mb-4">إدارة قصص النجاح</h2>
        <?php if ($success): ?><div class="alert alert-success"><?php echo $success; ?></div><?php endif; ?>
        <?php if ($error): ?><div class="alert alert-danger"><?php echo $error; ?></div><?php endif; ?>
        
        <div class="card mb-4">
            <div class="card-header">إضافة قصة نجاح جديدة</div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="create">
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>اسم صاحب القصة (عربي)</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Story Owner Name (English)</label>
                            <input type="text" dir="ltr" name="name_en" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>عنوان القصة (عربي)</label>
                            <input type="text" name="modal_title" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Story Title (English)</label>
                            <input type="text" dir="ltr" name="modal_title_en" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>نوع القصة</label>
                            <select name="type" class="form-control" id="storyType">
                                <option value="stories">قصة نجاح نصية</option>
                                <option value="stories_video">قصة نجاح مصورة</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>الصورة الرئيسية</label>
                            <input type="file" name="image_upload" class="form-control-file" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>رابط الفيديو (للقصص المصورة)</label>
                            <input type="url" dir="ltr" name="video_url" class="form-control" id="videoUrl" placeholder="https://www.youtube.com/embed/...">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>محتوى القصة (عربي) - كل سطر فقرة منفصلة</label>
                            <textarea name="content_ar" class="form-control" rows="4" id="contentAr"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Story Content (English) - Each line is a separate paragraph</label>
                            <textarea dir="ltr" name="content_en" class="form-control" rows="4" id="contentEn"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>صور إضافية (يمكن اختيار عدة صور)</label>
                            <input type="file" name="gallery_upload[]" class="form-control-file" multiple>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-success">إضافة قصة</button>
                </form>
            </div>
        </div>
        
        <div class="row">
            <?php foreach ($stories_data['stories'] as $story): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card news-card h-100">
                        <img src="../<?php echo htmlspecialchars($story['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($story['name']); ?>">
                        <div class="card-body">
                            <span class="badge badge-<?php echo $story['type'] === 'stories_video' ? 'primary' : 'success'; ?> mb-2">
                                <?php echo $story['type'] === 'stories_video' ? 'قصة مصورة' : 'قصة نجاح'; ?>
                            </span>
                            <h5 class="card-title"><?php echo htmlspecialchars($story['name']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($story['modal']['title']); ?></p>
                            <div class="admin-controls mt-3">
                                <a href="stories-edit.php?id=<?php echo urlencode($story['id']); ?>" class="btn btn-sm btn-outline-info"><i class="fa fa-edit"></i> تعديل</a>
                                <a href="?delete=<?php echo urlencode($story['id']); ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('هل أنت متأكد من الحذف؟');"><i class="fa fa-trash"></i> حذف</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <script>
        // Show/hide video URL field based on story type
        // document.getElementById('storyType').addEventListener('change', function() {
        //     const videoUrl = document.getElementById('videoUrl');
        //     const contentAr = document.getElementById('contentAr');
        //     const contentEn = document.getElementById('contentEn');
            
        //     if (this.value === 'stories_video') {
        //         videoUrl.required = true;
        //         contentAr.required = false;
        //         contentEn.required = false;
        //     } else {
        //         videoUrl.required = false;
        //         contentAr.required = true;
        //         contentEn.required = true;
        //     }
        // });
    </script>
</body>

</html> 