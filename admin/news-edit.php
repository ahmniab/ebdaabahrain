<?php
// Check if user is logged in
session_start();
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    http_response_code(403);
    header('Location: ../admin/index.php');
    exit;
}

require_once '../services/news-service.php';
$success = $error = '';
$id = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
}elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'] ?? '';
}else{
    http_response_code(404);
    echo '<h2>الخبر غير موجود</h2>';
    exit;
}
$news = getNewsById($id);
$news_en = getNewsById($id, 'en'); // Fetch English news
$news_data = getNews();
$success = $error = '';
if (!$news) {
    http_response_code(404);
    echo '<h2>الخبر غير موجود</h2>';
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = [
        'title' => $_POST['title'] ?? '',
        'summary' => $_POST['summary'] ?? '',
        'content' => $_POST['content'] ?? '',
        'image' => $news['image'],
        'images' => $news['images'] ?? [],
    ];
    $fields_en = [
        'title' => $_POST['title_en'] ?? '',
        'summary' => $_POST['summary_en'] ?? '',
        'content' => $_POST['content_en'] ?? '',
        'image' => $news_en['image'] ?? $news['image'],
        'images' => $news_en['images'] ?? $news['images'] ?? [],
    ];
    // Handle main image upload
    if (isset($_FILES['image_upload']) && $_FILES['image_upload']['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES['image_upload']['name'], PATHINFO_EXTENSION);
        if (!move_uploaded_file($_FILES['image_upload']['tmp_name'], __DIR__ . '/../' . $fields['image'])){
            $error = 'لم يتم تغيير الصورة الرئيسية';
        }
    }
    // Handle gallery images upload
    if (!empty($_FILES['gallery_upload']['name'][0])) {
        foreach ($_FILES['gallery_upload']['tmp_name'] as $idx => $tmp_name) {
            if ($_FILES['gallery_upload']['error'][$idx] === UPLOAD_ERR_OK) {
                $ext = pathinfo($_FILES['gallery_upload']['name'][$idx], PATHINFO_EXTENSION);
                $gallery_target = 'uploads/news_gallery_' . $id . '_' . time() . '_' . $idx . '.' . $ext;
                if (move_uploaded_file($tmp_name, __DIR__ . '/../' . $gallery_target)) {
                    $fields['images'][] = $fields_en['images'][] = $gallery_target;
                }
            }
        }
    }
    if ($fields['title'] && $fields['content'] && $fields_en['title'] && $fields_en['content']) {
        updateNews($id, $fields); // Arabic
        updateNews($id, $fields_en, 'en'); // English
        header('Location: news-manage.php?success=1');
        exit;
    } else {
        $error = 'يرجى تعبئة جميع الحقول المطلوبة (بالعربية والإنجليزية)';
    }
}


?>
<!DOCTYPE html>
<html dir="<?php echo $news_data['metadata']['direction']; ?>"
    lang="<?php echo $news_data['metadata']['lang'] ?? 'ar'; ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل الخبر</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin-news.css">
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css " rel="stylesheet">
</head>

<body>
    <?php include 'includes/admin-nav.php'; ?>
    <div class="container admin-news-container py-4">
        <h2 class="mb-4">تعديل الخبر</h2>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div><?php endif; ?>
        <form method="post" action="news-edit.php" enctype="multipart/form-data" class="card p-4">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label>العنوان</label>
                <input type="text" name="title" class="form-control"
                    value="<?php echo htmlspecialchars($news['title']); ?>" required>
            </div>
            <div class="form-group">
                <label>Title (English)</label>
                <input type="text" dir="ltr" name="title_en" class="form-control"
                    value="<?php echo htmlspecialchars($news_en['title'] ?? ''); ?>" required>
            </div>
            <div class="form-group">
                <label>النص المختصر</label>
                <input type="text" name="summary" class="form-control"
                    value="<?php echo htmlspecialchars($news['summary']); ?>">
            </div>
            <div class="form-group">
                <label>Summary (English)</label>
                <input type="text" dir="ltr" name="summary_en" class="form-control"
                    value="<?php echo htmlspecialchars($news_en['summary'] ?? ''); ?>">
            </div>
            <div class="form-group">
                <label>المحتوى</label>
                <textarea name="content" class="form-control" rows="4"
                    required><?php echo htmlspecialchars($news['content']); ?></textarea>
            </div>
            <div class="form-group">
                <label>Content (English)</label>
                <textarea name="content_en" dir="ltr" class="form-control" rows="4"
                    required><?php echo htmlspecialchars($news_en['content'] ?? ''); ?></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>الصورة الرئيسية الحالية</label><br>
                    <?php if ($news['image']): ?>
                        <img src="../<?php echo htmlspecialchars($news['image']); ?>" class="img-fluid mt-2 rounded">
                    <?php endif; ?>
                    <label class="mt-2">رفع صورة جديدة</label>
                    <input type="file" name="image_upload" class="form-control-file">
                </div>
                <div class="form-group col-md-6">
                    <label>صور المعرض الحالية</label><br>
                    <?php if (!empty($news['images'])): ?>
                        <div class="row">
                            <?php foreach ($news['images'] as $img): ?>
                                <div class="col-4 mb-2"><img src="../<?php echo htmlspecialchars($img); ?>"
                                        class="img-fluid rounded" style="max-height:60px;"></div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <label class="mt-2">رفع صور جديدة للمعرض (يمكن اختيار عدة صور)</label>
                    <input type="file" name="gallery_upload[]" class="form-control-file" multiple>
                </div>
            </div>


            <button type="submit" class="btn btn-primary" style="background:#bfa046;border:none;">حفظ التعديلات</button>
            <a href="news-manage.php" class="btn btn-secondary">إلغاء</a>
        </form>
    </div>
</body>

</html>