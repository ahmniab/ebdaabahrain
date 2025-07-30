<?php
require_once 'lang/init.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $dir; ?>">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="موقع بنك الإبداع البحرين - فرص وظيفية، خدمات تمويلية، دعم المشاريع الصغيرة والمتوسطة.">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>
        <?php if($lang == 'ar'){ ?>
            التقارير المالية
        <?php } else{ ?>
            Financial Reports
        <?php } ?>
    </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/about-us.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<main class="container py-5" style="background: linear-gradient(135deg, #f8fff8 0%, #e9f9f7 100%); border-radius: 24px; box-shadow: 0 4px 32px rgba(59,168,162,0.07);">
    
    <section class="tab-content about-tab-content">
        <div class="tab-pane fade show active" id="tabs-4">
            <h4 class="financial-title">
                <?php if($lang == 'ar'){ ?>
                    القوائم المالية المدققة   
                <?php } else{ ?>
                    Audited Financial Statements to Elbdaa Bahrain
                <?php } ?>
            </h4>
            <hr>

            <ul class="report-list d-flex flex-row justify-content-between align-items-center flex-wrap">
                <li>
                    <a href="assets/fainancial _report/FS2024EN.pdf" target="_blank"> 2024</a>
                </li>
                <li>
                    <a href="assets/fainancial _report/FS2023EN.pdf" target="_blank"> 2023</a>
                </li>
                <li>
                    <a href="assets/fainancial _report/FS2022EN.pdf" target="_blank"> 2022</a>
                </li>
                <li>
                    <a href="assets/fainancial _report/FS2021EN.pdf" target="_blank"> 2021</a>
                </li>
                <li>
                    <a href="assets/fainancial _report/FS2020EN.pdf" target="_blank"> 2020</a>
                </li>
                
            </ul>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>
</body>
</html> 