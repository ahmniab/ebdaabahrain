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
$id = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';

}elseif($_SERVER['REQUEST_METHOD'] === 'GET'){
    $id = $_GET['id'] ?? '';
}

$story = getStoryById($id);
$story_en = getStoryById($id, 'en'); // Fetch English story
$stories_data = getStories();
$success = $error = '';

if (!$story) {
    http_response_code(404);
    echo '<h2>القصة غير موجودة</h2>';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $video_url = getYouTubeEmbedUrl($_POST['video_url']);
    if(!$video_url){
        $error = 'رابط الفيديو غير صالح';
    }
    $fields = [
        'name' => $_POST['name'] ?? '',
        'type' => $_POST['type'] ?? 'stories',
        'image' => $story['image'],
        'modal' => [
            'title' => $_POST['modal_title'] ?? '',
            'video' => $video_url ?? '',
            'images' => $story['modal']['images'] ?? [],
            'content' => []
        ]
    ];
    
    $fields_en = [
        'name' => $_POST['name_en'] ?? '',
        'type' => $_POST['type'] ?? 'stories',
        'image' => $story_en['image'] ?? $story['image'],
        'modal' => [
            'title' => $_POST['modal_title_en'] ?? '',
            'video' => $video_url ?? '',
            'images' => $story_en['modal']['images'] ?? $story['modal']['images'] ?? [],
            'content' => []
        ]
    ];
    
    // Handle main image upload
    if (isset($_FILES['image_upload']) && $_FILES['image_upload']['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES['image_upload']['name'], PATHINFO_EXTENSION);
        $main_target = '../' . $story['image'];
        if (!move_uploaded_file($_FILES['image_upload']['tmp_name'], $main_target)) {
            $error = 'لم يتم تحديث الصورة';
        }
    }
    
    // Handle gallery images upload
    if (!empty($_FILES['gallery_upload']['name'][0])) {
        foreach ($_FILES['gallery_upload']['tmp_name'] as $idx => $tmp_name) {
            if ($_FILES['gallery_upload']['error'][$idx] === UPLOAD_ERR_OK) {
                $ext = pathinfo($_FILES['gallery_upload']['name'][$idx], PATHINFO_EXTENSION);
                $gallery_target = '../uploads/story_gallery_' . $id . '_' . time() . '_' . $idx . '.' . $ext;
                if (move_uploaded_file($tmp_name, $gallery_target)) {
                    $fields['modal']['images'][] = $fields_en['modal']['images'][] = ltrim($gallery_target, '../');
                }
            }
        }
    }
    
    // Handle content paragraphs
    if (!empty($_POST['content_ar'])) {
        $content_ar = array_filter(array_map('trim', explode("\n", $_POST['content_ar'])));
        $fields['modal']['content'] = $content_ar;
    }
    
    if (!empty($_POST['content_en'])) {
        $content_en = array_filter(array_map('trim', explode("\n", $_POST['content_en'])));
        $fields_en['modal']['content'] = $content_en;
    }
    
    if ($fields['name'] && $fields['modal']['title'] && $fields_en['name'] && $fields_en['modal']['title']) {
        updateStory($id, $fields); // Arabic
        updateStory($id, $fields_en, 'en'); // English
        header('Location: stories-manage.php?success=1');
        exit;
    } else {
        $error = 'يرجى تعبئة جميع الحقول المطلوبة (بالعربية والإنجليزية)';
    }
}
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل قصة النجاح</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin-news.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'includes/admin-nav.php'; ?>
    <div class="container admin-news-container py-4">
        <h2 class="mb-4">تعديل قصة النجاح</h2>
        <?php if ($error): ?><div class="alert alert-danger"><?php echo $error; ?></div><?php endif; ?>
        
        <form method="post" action="stories-edit.php" enctype="multipart/form-data" class="card p-4">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label>اسم صاحب القصة (عربي)</label>
                    <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($story['name']); ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Story Owner Name (English)</label>
                    <input type="text" dir="ltr" name="name_en" class="form-control" value="<?php echo htmlspecialchars($story_en['name'] ?? ''); ?>" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>عنوان القصة (عربي)</label>
                    <input type="text" name="modal_title" class="form-control" value="<?php echo htmlspecialchars($story['modal']['title']); ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Story Title (English)</label>
                    <input type="text" dir="ltr" name="modal_title_en" class="form-control" value="<?php echo htmlspecialchars($story_en['modal']['title'] ?? ''); ?>" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>نوع القصة</label>
                    <select name="type" class="form-control" id="storyType">
                        <option value="stories" <?php if ($story['type'] === 'stories') echo 'selected'; ?>>قصة نجاح نصية</option>
                        <option value="stories_video" <?php if ($story['type'] === 'stories_video') echo 'selected'; ?>>قصة نجاح مصورة</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label>رابط الفيديو (للقصص المصورة)</label>
                    <input type="url" dir="ltr" name="video_url" class="form-control" id="videoUrl" value="<?php echo htmlspecialchars($story['modal']['video'] ?? ''); ?>" placeholder="https://www.youtube.com/embed/...">
                </div>
                <div class="form-group col-md-4">
                    <label>الصورة الرئيسية الحالية</label><br>
                    <?php if ($story['image']): ?>
                        <img src="../<?php echo htmlspecialchars($story['image']); ?>" class="img-fluid mt-2 rounded" style="max-height: 100px;">
                    <?php endif; ?>
                    <label class="mt-2">رفع صورة جديدة</label>
                    <input type="file" name="image_upload" class="form-control-file">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>محتوى القصة (عربي) - كل سطر فقرة منفصلة</label>
                    <textarea name="content_ar" class="form-control" rows="4" id="contentAr"><?php echo htmlspecialchars(implode("\n", $story['modal']['content'] ?? [])); ?></textarea>
                </div>
                <div class="form-group col-md-12">
                    <label>Story Content (English) - Each line is a separate paragraph</label>
                    <textarea dir="ltr" name="content_en" class="form-control" rows="4" id="contentEn"><?php echo htmlspecialchars(implode("\n", $story_en['modal']['content'] ?? [])); ?></textarea>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>صور المعرض الحالية</label><br>
                    <?php if (!empty($story['modal']['images'])): ?>
                        <div class="row">
                            <?php foreach ($story['modal']['images'] as $img): ?>
                                <div class="col-4 mb-2">
                                    <img src="../<?php echo htmlspecialchars($img); ?>" class="img-fluid rounded" style="max-height:60px;">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <label class="mt-2">رفع صور جديدة للمعرض (يمكن اختيار عدة صور)</label>
                    <input type="file" name="gallery_upload[]" class="form-control-file" multiple>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary" style="background:#bfa046;border:none;">حفظ التعديلات</button>
            <a href="stories-manage.php" class="btn btn-secondary">إلغاء</a>
        </form>
    </div>
    
    <script>
        // Show/hide video URL field based on story type
        function toggleFields() {
            const storyType = document.getElementById('storyType');
            const videoUrl = document.getElementById('videoUrl');
            const contentAr = document.getElementById('contentAr');
            const contentEn = document.getElementById('contentEn');
            
            if (storyType.value === 'stories_video') {
                videoUrl.required = true;
                contentAr.required = false;
                contentEn.required = false;
            } else {
                videoUrl.required = false;
                contentAr.required = true;
                contentEn.required = true;
            }
        }
        
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', toggleFields);
        
        // Update on change
        document.getElementById('storyType').addEventListener('change', toggleFields);
    </script>
</body>

</html> 