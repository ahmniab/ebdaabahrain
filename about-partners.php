<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="موقع بنك الإبداع البحرين - فرص وظيفية، خدمات تمويلية، دعم المشاريع الصغيرة والمتوسطة.">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>شركاؤنا</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-4.1.1.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/about-us.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<main class="container py-5" style="background: linear-gradient(135deg, #f8fff8 0%, #e9f9f7 100%); border-radius: 24px; box-shadow: 0 4px 32px rgba(59,168,162,0.07);">
    
    <section class="tab-content about-tab-content">
        <div class="tab-pane fade show active" id="tabs-3">
            <div class="row">
                <!-- Partner 1 -->
                <div class="col-md-3 mb-4">
                    <a href="http://www.agfund.org/" target="_blank">
                        <img src="assets/img/partners/agfund.png" alt="AGFUND" class="img-fluid rounded shadow-sm">
                    </a>
                </div>
                <!-- Partner 2 -->
                <div class="col-md-3 mb-4">
                    <a href="http://www.bdb-bh.com/en/home" target="_blank">
                        <img src="assets/img/partners/bdb.png" alt="BDB" class="img-fluid rounded shadow-sm">
                    </a>
                </div>
                <!-- Partner 3 -->
                <div class="col-md-3 mb-4">
                    <a href="http://www.cbb.gov.bh/" target="_blank">
                        <img src="assets/img/partners/cbb.png" alt="CBB" class="img-fluid rounded shadow-sm">
                    </a>
                </div>
                <!-- Partner 4 -->
                <div class="col-md-3 mb-4">
                    <a href="http://www.eskanbank.com/" target="_blank">
                        <img src="assets/img/partners/eskanbank.png" alt="Eskan Bank" class="img-fluid rounded shadow-sm">
                    </a>
                </div>
                <!-- Partner 5 -->
                <div class="col-md-3 mb-4">
                    <a href="https://www.tamkeen.bh/ " target="_blank">
                        <img src="assets/img/partners/tamkeen.png" alt="Tamkeen" class="img-fluid rounded shadow-sm">
                    </a>
                </div>
                <!-- Partner 6 -->
                <div class="col-md-3 mb-4">
                    <a data-toggle="modal" data-target="#women" href="#">
                        <img src="assets/img/partners/woman.png" alt="Women's Council" class="img-fluid rounded shadow-sm">
                    </a>
                </div>
            </div>
        </div>
        <!-- Modal for Women's Council -->
        <div class="modal fade ar-dir" id="women" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-body ar-txt">
                        <button type="button" class="close" data-dismiss="modal" style="float:left;">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <img src="assets/img/partners/sabika.jpg" alt="Sabika bint Ibrahim Al Khalifa" class="img-fluid">
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <h4>المجلس الأعلى للمرأة</h4>
                                <hr />
                                <div class="box_shadow">
                                    <p>بمبادرة ودعم من المجلس الأعلى للمرأة وبتمويل من صندوق العمل "تمكين"... [shortened for brevity]</p>
                                    <p>وقعت الشركة وبتاريخ 26 أبريل من عام 2010 اتفاقية مع المجلس وتمكين لإنشاء محفظة...</p>
                                    <p>وتتراوح قيمة القروض بين 200 دينار و7000 دينار بحريني تسدد على فترات تصل إلى 3 سنوات.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <a class="btn btn-common" href="https://www.scw.bh/ " target="_blank">الموقع الإلكتروني</a>
                        <button class="btn btn-common" data-dismiss="modal">إغلاق</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>
</body>
</html> 