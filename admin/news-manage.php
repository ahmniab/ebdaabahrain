<?php
// Check if user is logged in
session_start();
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    http_response_code(403);
    header('Location: ../admin/index.php');
    exit;
}

require_once '../services/news-service.php';
$news_data = getNews();
$success = $error = '';

// Handle create
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'create') {
    // Prepare Arabic fields
    $fields_ar = [
        'title' => $_POST['title'] ?? '',
        'summary' => $_POST['summary'] ?? '',
        'content' => $_POST['content'] ?? '',
        'image' => '',
        'images' => [],
    ];
    // Prepare English fields
    $fields_en = [
        'title' => $_POST['title_en'] ?? '',
        'summary' => $_POST['summary_en'] ?? '',
        'content' => $_POST['content_en'] ?? '',
        'image' => '',
        'images' => [],
    ];
    // Handle main image upload
    if (isset($_FILES['image_upload']) && $_FILES['image_upload']['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES['image_upload']['name'], PATHINFO_EXTENSION);
        $main_target = '../uploads/news_main_' . time() . '.' . $ext;
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
                $gallery_target = '../uploads/news_gallery_' . time() . '_' . $idx . '.' . $ext;
                if (move_uploaded_file($tmp_name, $gallery_target)) {
                    $clean_gallery_path = preg_replace('#^\.\./#', '', $gallery_target);
                    $fields_ar['images'][] = $fields_en['images'][] = $clean_gallery_path;
                }
            }
        }
    }
    if ($fields_ar['title'] && $fields_ar['content'] && $fields_ar['image'] && $fields_en['title'] && $fields_en['content']) {
        // Add to Arabic and English news files with the same id
        $id = addNews($fields_ar, 'ar');
        $news_ar_added = getNewsById($id, 'ar');
        $fields_en['id'] = $id;
        $fields_en['date'] = $news_ar_added['date'] ?? date('Y-m-d');
        // Save to English file
        $data_en = getNews('en');
        if (!isset($data_en['news_items'])) $data_en['news_items'] = [];
        array_unshift($data_en['news_items'], $fields_en);
        saveNews($data_en, 'en');
        header('Location: added.php?type=news&link=news-manage.php');
        exit;

    } else {
        $error = 'يرجى تعبئة جميع الحقول المطلوبة ورفع صورة رئيسية (بالعربية والإنجليزية)';
    }
}
// Handle delete
if ($_SERVER['REQUEST_METHOD'] !== 'POST' && isset($_GET['delete'])) {
    $deleted_ar = deleteNews($_GET['delete'], 'ar');
    $deleted_en = deleteNews($_GET['delete'], 'en');
    if ($deleted_ar || $deleted_en) {
        header('Location: deleted.php?type=news&link=news-manage.php');
        exit;
    } else {
        $error = 'تعذر حذف الخبر';
    }
}

?>
<!DOCTYPE html>
<html dir="<?php echo $news_data['metadata']['direction']; ?>" lang="<?php echo $news_data['metadata']['lang'] ?? 'ar'; ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الأخبار</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin-news.css">
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css " rel="stylesheet">
</head>

<body>
    <?php include 'includes/admin-nav.php'; ?>
    <div class="container admin-news-container py-4">
        <h2 class="mb-4">إدارة الأخبار</h2>
        <?php if ($success): ?><div class="alert alert-success"><?php echo $success; ?></div><?php endif; ?>
        <?php if ($error): ?><div class="alert alert-danger"><?php echo $error; ?></div><?php endif; ?>
        <div class="card mb-4">
            <div class="card-header">إضافة خبر جديد</div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="create">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>العنوان (عربي)</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Title (English)</label>
                            <input type="text" dir="ltr" name="title_en" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>النص المختصر (عربي)</label>
                            <input type="text" name="summary" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Summary (English)</label>
                            <input type="text" dir="ltr" name="summary_en" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>المحتوى (عربي)</label>
                            <textarea name="content" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Content (English)</label>
                            <textarea dir="ltr" name="content_en" class="form-control" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>الصورة الرئيسية</label>
                            <input type="file" name="image_upload" class="form-control-file" required>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label>صور إضافية (يمكن اختيار عدة صور)</label>
                            <input type="file" name="gallery_upload[]" class="form-control-file" multiple>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">إضافة</button>
                </form>
            </div>
        </div>
        <div class="row">
            <?php foreach ($news_data['news_items'] as $item): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card news-card h-100">
                        <img src="../<?php echo htmlspecialchars($item['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['title']); ?>">
                        <div class="card-body">
                            <small class="text-muted d-block mb-2"><?php echo htmlspecialchars($item['date']); ?></small>
                            <h5 class="card-title"><?php echo htmlspecialchars($item['title']); ?></h5>
                            <p class="card-text"><?php echo nl2br(htmlspecialchars($item['summary'])); ?></p>
                            <div class="admin-controls mt-3">
                                <a href="news-edit.php?id=<?php echo urlencode($item['id']); ?>" class="btn btn-sm btn-outline-info"><i class="fa fa-edit"></i> تعديل</a>
                                <a href="?delete=<?php echo urlencode($item['id']); ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('هل أنت متأكد من الحذف؟');"><i class="fa fa-trash"></i> حذف</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>