<?php
require_once 'lang/init.php';
$translations = GetTranslations('index', $lang);
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= $dir ?>">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $translations['meta-des']; ?>">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <title><?= $translations['title']; ?></title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" async defer />
  <link rel="stylesheet" href="css/home.css">

</head>

<body>
<?php include 'navbar.php'; ?>
<!-- Modern Services Section -->
  <section class="section services-section" id="services">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title"><?= $translations['ebdaa-serv']; ?></h2>
        <p class="section-subtitle">
          <?= $translations['serv-tit1']; ?>
          <br class="d-none d-md-block" />
          <?= $translations['serv-tit2']; ?>
        </p>
      </div>

      <div class="row g-4">
        <!-- قرض سيدتي -->
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="service-card primary">
            <div class="service-icon">
              <i class="fa fa-female"></i>
            </div>
            <h4 class="service-title"><?= $translations['saydati-tit']; ?></h4>
            <p class="service-description">
              <?= $translations['saydati-des']; ?>
            </p>
            <a class="service-btn" href="loan-details.php?id=saydati">
              <i class="fa fa-info-circle ml-2"></i>
              <?= $translations['det']; ?>
            </a>
          </div>
        </div>

        <!-- قرض الإبداع -->
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="service-card success">
            <div class="service-icon">
              <i class="fa-solid fa-wand-magic-sparkles"></i>
            </div>
            <h4 class="service-title"><?= $translations['ebdaa-tit']; ?></h4>
            <p class="service-description">
              <?= $translations['ebdaa-des']; ?>
            </p>
            <a class="service-btn" href="loan-details.php?id=ebdaa">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </a>
          </div>
        </div>

        <!-- قرض النجاح -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="service-card dark">
            <div class="service-icon">
              <i class="fa-solid fa-rocket"></i>
            </div>
            <h4 class="service-title"><?= $translations['najah-tit']; ?></h4>
            <p class="service-description">
              <?= $translations['najah-des']; ?>
            </p>
            <a class="service-btn" href="loan-details.php?id=najah">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </a>
          </div>
        </div>

        <!-- قرض الأمل -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="service-card danger">
            <div class="service-icon">
              <i class="fa-solid fa-heart"></i>
            </div>
            <h4 class="service-title"><?= $translations['amal-tit']; ?></h4>
            <p class="service-description">
              <?= $translations['amal-des']; ?>
            </p>
            <a class="service-btn" href="loan-details.php?id=amal">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </a>
          </div>
        </div>

        <!-- قرض التفوق -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="service-card secondary">
            <div class="service-icon">
              <i class="fa-solid fa-star"></i>
            </div>
            <h4 class="service-title"><?= $translations['tafawoq-tit']; ?></h4>
            <p class="service-description">
              <?= $translations['tafawoq-des']; ?>
            </p>
            <a class="service-btn" href="loan-details.php?id=tafawoq">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </a>
          </div>
        </div>

        <!-- قرض التميز -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="service-card warning">
            <div class="service-icon">
              <i class="fa-solid fa-check"></i>
            </div>
            <h4 class="service-title"><?= $translations['tamayouz-tit']; ?></h4>
            <p class="service-description">
              <?= $translations['tamayouz-des']; ?>
            </p>
            <a class="service-btn" href="loan-details.php?id=tamayouz">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </a>
          </div>
        </div>

        <!--  قرض التميز بلس -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="service-card warning">
            <div class="service-icon">
              <i class="fa-solid fa-plus"></i>
            </div>
            <h4 class="service-title"><?= $translations['tamayouzp-tit']; ?></h4>
            <p class="service-description">
              <?= $translations['tamayouzp-des']; ?>
            </p>
            <a class="service-btn" href="loan-details.php?id=tamayouz-plus">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </a>
          </div>
        </div>

        <!-- القرض الموسمي -->
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="service-card info">
            <div class="service-icon">
              <i class="fa-solid fa-sun"></i>
            </div>
            <h4 class="service-title"><?= $translations['mawsimi-tit']; ?></h4>
            <p class="service-description">
              <?= $translations['mawsimi-des']; ?>
            </p>
            <a class="service-btn" href="loan-details.php?id=mawsimi">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section End -->
    <?php include 'footer.php'; ?>
</body>
</html> 
