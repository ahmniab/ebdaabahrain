<?php
require_once 'lang/init.php';
$translations = GetTranslations(basename(__FILE__, '.php'));
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $dir; ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="موقع بنك الإبداع البحرين - فرص وظيفية، خدمات تمويلية، دعم المشاريع الصغيرة والمتوسطة.">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title><?php echo $translations['title']; ?></title>
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/min/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/min/about-us.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <main class="container py-5" style="background: linear-gradient(135deg, #f8fff8 0%, #e9f9f7 100%); border-radius: 24px; box-shadow: 0 4px 32px rgba(59,168,162,0.07);">

        <section class="tab-content about-tab-content">
            <div class="tab-pane fade show active" id="tabs-3">
                <div class="row">
                    <!-- Partner 1 -->
                    <div class="col-md-3 mb-4 rounded shadow-sm d-flex justify-content-center align-items-center">
                        <a href="http://www.agfund.org/" target="_blank">
                            <img src="assets/img/partners/png-logos-17-e1721555549988.png" alt="AGFUND" class="img-fluid">
                        </a>
                    </div>
                    <!-- Partner 2 -->
                    <div class="col-md-3 mb-4 rounded shadow-sm d-flex justify-content-center align-items-center">
                        <a href="http://www.bdb-bh.com/en/home" target="_blank">
                            <img src="assets/img/partners/logo-03.png" alt="BDB" class="img-fluid">
                        </a>
                    </div>
                    <!-- Partner 3 -->
                    <div class="col-md-3 mb-4 rounded shadow-sm d-flex justify-content-center align-items-center">
                        <a href="http://www.cbb.gov.bh/" target="_blank">
                            <img src="assets/img/partners/logo-06.png" alt="CBB" class="img-fluid">
                        </a>
                    </div>
                    <!-- Partner 4 -->
                    <div class="col-md-3 mb-4 rounded shadow-sm d-flex justify-content-center align-items-center">
                        <a href="http://www.eskanbank.com/" target="_blank">
                            <img src="assets/img/partners/logo-02.png" alt="Eskan Bank" class="img-fluid">
                        </a>
                    </div>
                    <!-- Partner 5 -->
                    <div class="col-md-3 mb-4 rounded shadow-sm d-flex justify-content-center align-items-center">
                        <a href="https://www.tamkeen.bh/ " target="_blank">
                            <img src="assets/img/partners/logo-05.png" alt="Tamkeen" class="img-fluid">
                        </a>
                    </div>
                    <!-- Partner 6 -->
                    <div class="col-md-3 mb-4 rounded shadow-sm d-flex justify-content-center align-items-center">
                        <a data-toggle="modal" data-target="#women" href="#">
                            <img src="assets/img/partners/logo-04.png" alt="Women's Council" class="img-fluid">
                        </a>
                    </div>
                    <!-- Partner 7 -->
                    <div class="col-md-3 mb-4 rounded shadow-sm d-flex justify-content-center align-items-center">
                        <a href="https://uabonline.org/" target="_blank">
                            <img src="assets/img/partners/logo-07.png" alt="Tamkeen" class="img-fluid">
                        </a>
                    </div>
                    <!-- Partner 7 -->
                    <div class="col-md-3 mb-4 rounded shadow-sm d-flex justify-content-center align-items-center">
                        <a href="https://wuab.org/" target="_blank">
                            <img src="assets/img/partners/logo-08.png" alt="Tamkeen" class="img-fluid">
                        </a>
                    </div>

                </div>
            </div>
            <!-- Modal for Women's Council -->
            <div class="modal fade team-modal" id="women" tabindex="-1" role="dialog" aria-labelledby="wemenLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" dir="ltr">
                            <h5 class="modal-title" id="womenLabel"><?php echo $translations['modal']['title']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $lang === 'ar' ? 'إغلاق' : 'close'; ?>">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php echo nl2br(htmlspecialchars($translations['modal']['description'])); ?>
                            <br>
                            <p>
                                <a href="https://www.scw.bh/" class="btn btn-info" target="_blank"><?php echo $translations['modal']['title']; ?></a>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal"><?php echo $lang === 'ar' ? 'إغلاق' : 'close'; ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>