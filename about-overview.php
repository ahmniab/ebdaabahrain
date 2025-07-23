<?php
require_once 'lang/init.php';

$translations = GetTranslations(basename(__FILE__, '.php'));
?>

<!DOCTYPE html>
<html lang="<?php echo $translations['lang'] ?>"
    dir="<?php echo $translations['dir'] ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="موقع بنك الإبداع البحرين - فرص وظيفية، خدمات تمويلية، دعم المشاريع الصغيرة والمتوسطة.">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>من نحن</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/about-overview.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="header">
        <h1><?php echo $translations['main_title'] ?></h1>
    </div>
    <div class="img-container">
        <img loading="lazy" src="assets/img/main-about-us-overflew.webp" alt="main img" class="main-img">
    </div>
    <div class="text-section container">
        <h5><?php echo $translations['sub_title_1'] ?></h5>
        <p><?php echo nl2br(htmlspecialchars($translations['paragraph_1'])) ?></p>
        <img loading="lazy" src="assets/img/secon-img-overview.webp" alt="ebdaa building">
        <br>
        
        <h5><?php echo $translations['mission']['title'] ?></h5>
        <p><?php echo nl2br(htmlspecialchars($translations['mission']['content'])) ?></p>

        <h5><?php echo $translations['vision']['title'] ?></h5>
        <p><?php echo nl2br(htmlspecialchars($translations['vision']['content'])) ?></p>

        <h5><?php echo $translations['about_ebdaa']['title'] ?></h5>
        <p><?php echo nl2br(htmlspecialchars($translations['about_ebdaa']['content'])) ?></p>

        <h5><?php echo $translations['goals']['title'] ?></h5>
        <ul>
            <?php foreach ($translations['goals']['items'] as $item) : ?>
                <li><?php echo $item; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>


    <?php include "footer.php"; ?>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>