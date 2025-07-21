<?php
require_once 'lang/init.php';
$translations = GetTranslations(basename(__FILE__,".php"));
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" async defer />


  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/main.css">

</head>

<body>
  <!-- Navbar Start -->
  <?php include 'navbar.php'; ?>
  <!-- Navbar End -->

  <!-- Modern Landing Section Start -->
  <section class="section landing-section" id="landing">
    <div id="landingCarousel" class="carousel slide" data-ride="carousel">
      <!-- Carousel Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#landingCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#landingCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Carousel Items -->
      <div class="carousel-inner">
        <!-- First Slide -->
        <div class="carousel-item active">
          <div class="slide-background lazy-bg" data-bg="assets/img/bahrain.webp">
            <div class="slide-overlay"></div>
          </div>
          <div class="carousel-caption">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                  <div class="slide-content">
                    <div class="slide-badge">
                      <i class="fa-solid fa-star"></i>
                      <span><?= $translations['des']; ?></span>
                    </div>

                    <h1 class="slide-title text-nowrap">
                      <?= ($lang == 'en') 
                          ? '<span class="highlight">' . $translations['ebdaa'] . '</span>' . $translations['bank'] . $translations['bahrain']
                          : $translations['bank'] . '<span class="highlight">' . $translations['ebdaa'] . '</span>' . $translations['bahrain'];
                      ?>
                  </h1>
                  
                    <p class="slide-description">
                      <?= $translations['header-des']; ?>
                    </p>

                    <div class="slide-features">
                      <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span><?= $translations['bullet1']; ?></span>
                      </div>
                      <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span><?= $translations['bullet2']; ?></span>
                      </div>
                      <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span><?= $translations['bullet3']; ?></span>
                      </div>
                    </div>

                    <div class="slide-actions ">
                      <a href="#application" class="btn btn-primary btn-lg">
                        <i class="fa-solid fa-rocket ml-2"></i>
                        <?= $translations['apply-loan']; ?>
                      </a>
                      <a href="#services" class="btn btn-outline-primary btn-lg">
                        <i class="fa-solid fa-info-circle ml-2"></i>
                        <?= $translations['services']; ?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Second Slide -->
        <div class="carousel-item">
          <div class="slide-background" style="background-image: url('assets/img/counter3.webp');">
            <div class="slide-overlay"></div>
          </div>
          <div class="carousel-caption">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                  <div class="slide-content">
                    <div class="slide-badge">
                      <i class="fa-solid fa-chart-line"></i>
                      <span><?= $translations['our-succ']; ?></span>
                    </div>

                    <h1 class="slide-title text-nowrap">
                      <?= ($lang == 'en') 
                          ? $translations['cunt'] . '<span class="highlight">' . $translations['succ'] . '</span>'
                          : '<span class="highlight">' . $translations['succ'] . '</span>' . $translations['cunt'];
                      ?>
                    </h1>

                    <p class="slide-description"><?= $translations['header']; ?></p>

                    <div class="slide-stats">
                      <div class="stat-item">
                        <div class="stat-number">16,300+</div>
                        <div class="stat-label"><?= $translations['sts-cust']; ?></div>
                      </div>
                      <div class="stat-item">
                        <div class="stat-number">19.4</div>
                        <div class="stat-label"><?= $translations['mili-dinar']; ?></div>
                      </div>
                      <div class="stat-item">
                        <div class="stat-number">94%</div>
                        <div class="stat-label"><?= $translations['rate']; ?></div>
                      </div>
                    </div>
                    <div class="slide-actions text-nowrap">
                      <a href="success-stories.php" class="btn btn-primary btn-lg">
                        <i class="fa-solid fa-users ml-2"></i>
                        <?= $translations['suc-story']; ?>
                      </a>
                      <a href="#contact" class="btn btn-outline-primary btn-lg">
                        <i class="fa-solid fa-phone ml-2"></i>
                        <?= $translations['contact']; ?> 
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Carousel Controls -->
      <a class="carousel-control-prev" href="#landingCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#landingCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section>
  <!-- Landing Section End -->

  <!-- Modern Counters Section -->
  <section class="counters-section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="update-info">
        <i class="fa fa-calendar-alt ml-2"></i>
        <span><?= $translations['last-update']; ?></span>
      </div>

      <div class="row">
        <!-- Clients Counter -->
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="counter-card">
            <div class="counter-icon">
              <i class="fa-solid fa-user"></i>
            </div>
            <div class="counter-number">
              <span class="counter">20,704</span>
            </div>
            <div class="counter-label"><?= $translations['customer']; ?></div>

            <!-- Hover Details -->
            <div class="counter-details">
              <div class="detail-item">
                <div class="detail-icon">
                  <i class="fa fa-male"></i>
                </div>
                <div class="detail-content">
                  <div class="detail-number">11,585</div>
                  <div class="detail-label"><?= $translations['man']; ?></div>
                </div>
              </div>
              <div class="detail-item">
                <div class="detail-icon">
                  <i class="fa fa-female"></i>
                </div>
                <div class="detail-content">
                  <div class="detail-number">9,119</div>
                  <div class="detail-label"><?= $translations['woman']; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Loans Counter -->
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="counter-card">
            <div class="counter-icon">
              <i class="fa-solid fa-briefcase"></i>
            </div>
            <div class="counter-number">
              <span class="counter">20,704</span>
            </div>
            <div class="counter-label"><?= $translations['loan']; ?></div>

            <!-- Hover Details -->
            <div class="counter-details">
              <div class="detail-item">
                <div class="detail-icon">
                  <i class="fa fa-folder-open"></i>
                </div>
                <div class="detail-content">
                  <div class="detail-number">2,697</div>
                  <div class="detail-label"><?= $translations['pending']; ?></div>
                </div>
              </div>
              <div class="detail-item">
                <div class="detail-icon">
                  <i class="fa fa-folder"></i>
                </div>
                <div class="detail-content">
                  <div class="detail-number">18,007</div>
                  <div class="detail-label"><?= $translations['paid']; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Loan Value Counter -->
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="counter-card">
            <div class="counter-icon">
              <i class="fa-solid fa-layer-group"></i>
            </div>
            <div class="counter-number">
              <span class="counter">23,312,089</span>
            </div>
            <div class="counter-label"><?= $translations['disbursed-value']; ?></div>

            <!-- Hover Details -->
            <div class="counter-details">
              <div class="detail-item">
                <div class="detail-icon">
                  <i class="fa fa-folder-open"></i>
                </div>
                <div class="detail-content">
                  <div class="detail-number">1,566,396</div>
                  <div class="detail-label"><?= $translations['pending']; ?></div>
                </div>
              </div>
              <div class="detail-item">
                <div class="detail-icon">
                  <i class="fa fa-folder"></i>
                </div>
                <div class="detail-content">
                  <div class="detail-number">21,745,693</div>
                  <div class="detail-label"><?= $translations['paid']; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Repayment Rate Counter -->
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="percentage-counter">
            <div class="percentage-icon">
              <i class="fa-solid fa-chart-pie"></i>
            </div>
            <div class="percentage-number">
              <span class="counter">94</span>%
            </div>
            <div class="percentage-label"><?= $translations['rate']; ?></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Counter Section End -->

  <!-- <div class="container"> -->



  <!-- Header Section End -->

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
            <button class="service-btn" data-target="#sayedaty" data-toggle="modal">
              <i class="fa fa-info-circle ml-2"></i>
              <?= $translations['det']; ?>
            </button>
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
            <button class="service-btn" data-target="#ebdaaLoan" data-toggle="modal">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </button>
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
            <button class="service-btn" data-target="#hopeLoan" data-toggle="modal">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </button>
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
            <button class="service-btn" data-target="#exellenceLoan" data-toggle="modal">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </button>
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
            <button class="service-btn" data-target="#seasonalLoan" data-toggle="modal">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </button>
          </div>
        </div>

        <!-- قرض التفوق -->
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="service-card secondary">
            <div class="service-icon">
              <i class="fa-solid fa-star"></i>
            </div>
            <h4 class="service-title"><?= $translations['tafawoq-tit']; ?></h4>
            <p class="service-description">
              <?= $translations['tafawoq-des']; ?>
            </p>
            <button class="service-btn" data-target="#TafawoqLoan" data-toggle="modal">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </button>
          </div>
        </div>

        <!-- قرض النجاح -->
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="service-card dark">
            <div class="service-icon">
              <i class="fa-solid fa-rocket"></i>
            </div>
            <h4 class="service-title"><?= $translations['najah-tit']; ?></h4>
            <p class="service-description">
              <?= $translations['najah-des']; ?>
            </p>
            <button class="service-btn" data-target="#NajahLoan" data-toggle="modal">
              <i class="fa fa-info-circle ml-2"></i>
               <?= $translations['det']; ?>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services popup start -->
  <!-- Services 1 -->
  <div aria-hidden="true" class="modal fade ar-dir" id="sayedaty" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body ar-txt">
          <button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
            <span aria-hidden="true">×</span>
          </button>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <img src="assets/img/loan/syedaty-new.webp" loading="lazy" style="width:100%;" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h4><?= $translations['saydati-tit']; ?></h4>
              <hr />
              <p><?= $translations['saydati-des2']; ?></p>
              <div class="box_shadow">
                <p><b><?= $translations['loan-terms']; ?></b></p>
                <li><?= $translations['term1']; ?></li>
                <li>
                  <?= ($lang == 'en') 
                          ? $translations['term2'] 
                          : $translations['term2w']; ?>
                </li>
                <li>
                  <?= ($lang == 'en') 
                          ? $translations['term3'] 
                          : $translations['term3w']; ?>
                </li>
              </div>
              <div class="box_shadow">
                <p><b><?= $translations['reqs']; ?></b></p>
                <li><?= $translations['req1']; ?></li>
                <li><?= $translations['req2']; ?></li>
                <li>
                    <?= ($lang == 'en') 
                          ? $translations['req3'] 
                          : $translations['req3w']; ?>
                </li>
                <li><?= $translations['req4']; ?></li>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <a class="btn btn-common" href="application-form.php"><?= $translations['apply-now']; ?>
        </a>
          <button class="btn btn-common" data-dismiss="modal" style="visibility: visible; -webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;" type="button"><?= $translations['close']; ?></button>
        </div>

      </div>
    </div>
  </div>
  <!-- Services 2 -->
  <div aria-hidden="true" class="modal fade ar-dir" id="ebdaaLoan" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body ar-txt">
          <button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
            <span aria-hidden="true">×</span>
          </button>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <img src="assets/img/loan/ebdaa-new.webp" loading="lazy" style="width:100%;" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h4><?= $translations['ebdaa-tit']; ?></h4>
              <hr />
              <p><?= $translations['ebdaa-des2']; ?></p>
              <div class="box_shadow">
                <p><b><?= $translations['loan-terms']; ?></b></p>
                <li><?= $translations['term1']; ?></li>
                <li><?= $translations['term2']; ?></li>
                <li><?= $translations['term3']; ?></li>
              </div>
              <div class="box_shadow">
                <p><b><?= $translations['reqs']; ?></b></p>
                <li><?= $translations['req1']; ?></li>
                <li><?= $translations['req2']; ?></li>
                <li><?= $translations['req3']; ?></li>
                <li><?= $translations['req4']; ?></li>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <a class="btn btn-common" href="application-form.php"><?= $translations['apply-now']; ?></a>
          <button class="btn btn-common" data-dismiss="modal" style="visibility: visible; -webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;" type="button"><?= $translations['close']; ?></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Services 3 -->
  <div aria-hidden="true" class="modal fade ar-dir" id="hopeLoan" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body ar-txt">
          <button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
            <span aria-hidden="true">×</span>
          </button>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <img src="assets/img/loan/hope-new.webp" loading="lazy" style="width:100%;" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h4><?= $translations['amal-tit']; ?></h4>
              <hr />
              <p><?= $translations['amal-des2']; ?></p>
              <div class="box_shadow">
                <p><b><?= $translations['loan-terms']; ?></b></p>
                <li><?= $translations['term1']; ?></li>
                <li><?= $translations['term2']; ?></li>
                <li><?= $translations['term3']; ?></li>
              </div>
              <div class="box_shadow">
                <p><b><?= $translations['reqs']; ?></b></p>
                <li><?= $translations['req1']; ?></li>
                <li><?= $translations['req2']; ?></li>
                <li><?= $translations['req3']; ?></li>
                <li><?= $translations['req4']; ?></li>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <a class="btn btn-common" href="application-form.php"><?= $translations['apply-now']; ?></a>
          <button class="btn btn-common" data-dismiss="modal" style="visibility: visible; -webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;" type="button"><?= $translations['close']; ?></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Services 4 -->
  <div aria-hidden="true" class="modal fade ar-dir" id="exellenceLoan" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body ar-txt">
          <button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
            <span aria-hidden="true">×</span>
          </button>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <img src="assets/img/loan/excell-new.webp" loading="lazy" style="width:100%;" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h4><?= $translations['tamayouz-tit']; ?></h4>
              <hr/>
              <p><?= $translations['tamayouz-des2']; ?></p>
              <div class="box_shadow">
                <p><b><?= $translations['loan-terms']; ?></b></p>
                <li><?= $translations['term4']; ?></li>
                <li><?= $translations['term5']; ?></li>
                <li><?= $translations['term6']; ?></li>
                <li><?= $translations['term3'] ?></li>
              </div>
              <div class="box_shadow">
                <p><b><?= $translations['reqs']; ?></b></p>
                <li><?= $translations['req1-1']; ?></li>
                <li><?= $translations['req2']; ?></li>
                <li><?= $translations['req5']; ?></li>
                <li><?= $translations['req6']; ?></li>
                <li><?= $translations['req7']; ?></li>
                <li><?= $translations['req8']; ?></li>
                <li><?= $translations['req4']; ?></li>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <a class="btn btn-common" href="application-form.html"><?= $translations['apply-now']; ?></a>
          <button class="btn btn-common" data-dismiss="modal" style="visibility: visible; -webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;" type="button"><?= $translations['close']; ?></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Services 5 -->
  <div aria-hidden="true" class="modal fade ar-dir" id="seasonalLoan" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body ar-txt">
          <button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
            <span aria-hidden="true">×</span>
          </button>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <img src="assets/img/loan/madares-new.webp" loading="lazy" style="width:100%;" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h4><?= $translations['mawsimi-tit']; ?></h4>
              <hr />
              <p><?= $translations['mawsimi-des2']; ?></p>
              <div class="box_shadow">
                <p><b><?= $translations['loan-terms']; ?></b></p>
                <li><?= $translations['term3-2']; ?></li>
                <li><?= $translations['term7']; ?></li>
                <li><?= $translations['term8']; ?></li>
              </div>
              <div class="box_shadow">
                <p><b><?= $translations['reqs']; ?></b></p>
                <li><?= $translations['req1']; ?></li>
                <li><?= $translations['req2']; ?></li>
                <li><?= $translations['req9']; ?></li>
                <li><?= $translations['req10']; ?></li>
                <li><?= $translations['req11']; ?></li>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <a class="btn btn-common" href="application-form.php"><?= $translations['apply-now']; ?></a>
          <button class="btn btn-common" data-dismiss="modal" style="visibility: visible; -webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;" type="button"><?= $translations['close']; ?></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Services 6 -->
  <div aria-hidden="true" class="modal fade ar-dir" id="TafawoqLoan" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body ar-txt">
          <button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
            <span aria-hidden="true">×</span>
          </button>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <img src="assets/img/loan/tafawoq-new.webp" loading="lazy" style="width:100%;" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h4><?= $translations['tafawoq-tit']; ?></h4>
              <hr />
              <p><?= $translations['tafawoq-des2']; ?></p>
              <div class="box_shadow">
                <p><b><?= $translations['loan-terms']; ?></b></p>
                <li><?= $translations['term4']; ?></li>
                <li> <?= $translations['term5']; ?></li>
                <li> <?= $translations['term6']; ?></li>
                <li><?= $translations['term3-1']; ?></li>
              </div>
              <div class="box_shadow">
                <p><b><?= $translations['reqs']; ?></b></p>
                <li><?= $translations['req1']; ?></li>
                <li><?= $translations['req2']; ?></li>
                <li><?= $translations['req5']; ?></li>
                <li><?= $translations['req6']; ?></li>
                <li><?= $translations['req7']; ?></li>
                <li><?= $translations['req8']; ?></li>
                <li><?= $translations['req4']; ?></li>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <a class="btn btn-common" href="application-form.html"><?= $translations['apply-now']; ?></a>
          <button class="btn btn-common" data-dismiss="modal" style="visibility: visible; -webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;" type="button"><?= $translations['close']; ?></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Services 7 -->
  <div aria-hidden="true" class="modal fade ar-dir" id="NajahLoan" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body ar-txt">
          <button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
            <span aria-hidden="true">×</span>
          </button>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <img src="assets/img/loan/najah-new.webp" loading="lazy" style="width:100%;" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h4><?= $translations['najah-tit']; ?></h4>
              <hr />
              <p><?= $translations['najah-des2']; ?></p>
              <div class="box_shadow">
                <p><b><?= $translations['loan-terms']; ?></b></p>
                <li><?= $translations['term1']; ?></li>
                <li><?= $translations['term2']; ?></li>
                <li><?= $translations['term3']; ?></li>
              </div>
              <div class="box_shadow">
                <p><b><?= $translations['reqs']; ?></b></p>
                <li><?= $translations['req1']; ?></li>
                <li><?= $translations['req2']; ?></li>
                <li><?= $translations['req3']; ?></li>
                <li><?= $translations['req4']; ?></li>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <a class="btn btn-common" href="application-form.html"><?= $translations['apply-now']; ?></a>
          <button class="btn btn-common" data-dismiss="modal" style="visibility: visible; -webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;" type="button"><?= $translations['close']; ?></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Services popup End -->
  <!-- Services Section End -->
  <!-- application Section Start  -->
  <section class="section" data-stellar-background-ratio="0.09" id="application">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title"><?= ($lang == 'en') 
                          ? $translations['apply2']
                          : $translations['apply']; ?></h2>
        <p class="section-subtitle">
          <?= $translations['get-needs']; ?>
          <br class="d-none d-md-block" />
          <?= $translations['simp-steps']; ?>
      </p>
      </div>

      <div class="text-center">
        <div class="application-cta">
          <div class="cta-content">
            <div class="cta-icon">
              <i class="fa-solid fa-handshake"></i>
            </div>
            <h3 class="cta-title"><?= $translations['str-succ']; ?></h3>
            <p class="cta-description">
              <?= $translations['apply-req']; ?>
          </p>
            <a href="application-form.php" class="cta-button">
              <?= ($lang == 'en') 
                          ? $translations['apply'] . '<i class="fa-solid fa-arrow-right ml-2"> </i>'
                          : $translations['apply2'] . '<i class="fa-solid fa-arrow-left ml-2"> </i>'; ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Application Section End -->

  <!-- Team Section - Redirect to About Us -->
  <!-- <section class="section team-section" id="team">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">فريق الإبداع</h2>
          <hr class="lines" />
        <p class="section-subtitle ar-dir">نكون معا، هذه هي البداية، والبقاء معا هو التقدم، والعمل معا هو النجاح.</p>
        </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 text-center">
          <div class="team-cta-card">
            <div class="team-cta-content">
              <h3 style="color: #2E8F36; margin-bottom: 20px;">تعرف على فريق العمل</h3>
              <p style="color: #5DA930; font-size: 1.1rem; margin-bottom: 30px;">
                اكتشف المزيد عن فريق الإبداع المتميز وأعضاء مجلس الإدارة في صفحة "من نحن"
              </p>
              <a href="about-us.php#tabs-6" class="cta-button">
                <i class="fa fa-users"></i>
                عرض فريق العمل
              </a>
                </div>
              </div>
            </div>
          </div>
                </div>
  </section> -->

  <!-- Modern Static Testimonials Section -->
  <div class="owl-container">
    <div class="container-theme">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="item-img-container">
            <img src="assets/img/team/Khaled.webp" alt="dr Khaled Image">
          </div>
          <p class="item-text">
            <i class="fa fa-quote-right"></i>
            <?= $translations['khaled-ph']; ?>
            <i class="fa fa-quote-left"></i>
          </p>
          <h4 class="item-name"><?= $translations['khaled']; ?></h4>
          <h4 class="item-jop"><?= $translations['khaled-pos']; ?></h4>
        </div>
        <div class="item">
          <div class="item-img-container">
            <img src="assets/img/board/Mona.webp" alt="dr Khaled Image">
          </div>
          <p class="item-text">
            <i class="fa fa-quote-right"></i>
            <?= $translations['mona-ph']; ?>
            <i class="fa fa-quote-left"></i>
          </p>
          <h4 class="item-name"><?= $translations['mona']; ?></h4>
          <h4 class="item-jop"><?= $translations['mona-pos']; ?></h4>
        </div>
        <div class="item">
          <div class="item-img-container">
            <img src="assets/img/team/mohd_alhadad.webp" alt="dr Khaled Image">
          </div>
          <p class="item-text">
            <i class="fa fa-quote-right"></i>
            <?= $translations['mo-ph']; ?>
            <i class="fa fa-quote-left"></i>
          </p>
          <h4 class="item-name"><?= $translations['mo']; ?></h4>
          <h4 class="item-jop"><?= $translations['mo-pos']; ?></h4>
        </div>
      </div>

    </div>
  </div>
  </div>
  <!-- Contact Us Section Start -->
  <section class="section contact-section" id="contact">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title"><?= $translations['contact']; ?></h2>
        <hr class="lines" />
        <p class="section-subtitle"><?= $translations['contact-us2']; ?>
          <br /><?= $translations['ur-opn']; ?></p>
      </div>
      <div class="contact-form" id="contactUs">
        <div class="row ar-dir">
          <div class="col-lg-7 col-sm-12 col-xs-12">
            <div class="contact-address">
              <div class="row">
                <!-- الادارة العامة -->
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <div class="contact-box">
                    <h5><?= $translations['manama-tit']; ?></h5>
                    <hr />
                    <ul>
                      <li><a href="tel:+973 17381000"><i class="fa fa-phone"></i>973 17381000+</a></li>
                      <li><a href="mailto:info@ebdaabahrain.com"><i class="fa fa-envelope"></i>info@ebdaabahrain.com</a></li>
                      <li><a href="https://goo.gl/maps/M64LjU9m4v32" target="_blank"><i class="fa fa-map-marker"></i><?= $translations['manama']; ?></a></li>
                    </ul>
                  </div>
                </div>

                <!-- فرع العاصمة -->
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <div class="contact-box">
                    <h5><?= $translations['manama-tit2']; ?></h5>
                    <hr />
                    <ul>
                      <li><a href="tel:+973 17381003"><i class="fa fa-phone"></i>973 17381003+</a></li>
                      <li><a href="mailto:almanama@ebdaabahrain.com"><i class="fa fa-envelope"></i>almanama@ebdaabahrain.com</a></li>
                      <li><a href="https://goo.gl/maps/M64LjU9m4v32" target="_blank"><i class="fa fa-map-marker"></i><?= $translations['manama']; ?></a></li>
                    </ul>
                  </div>
                </div>

                <!-- فرع عالي -->
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <div class="contact-box">
                    <h5><?= $translations['aali-tit']; ?></h5>
                    <hr />
                    <ul>
                      <li><a href="tel:+973 17381013"><i class="fa fa-phone"></i>973 17381013+</a></li>
                      <li><a href="mailto:aali@ebdaabahrain.com"><i class="fa fa-envelope"></i>aali@ebdaabahrain.com</a></li>
                      <li><a href="https://goo.gl/maps/Xgobw4hn6qM2" target="_blank"><i class="fa fa-map-marker"></i><?= $translations['aali']; ?></a></li>
                    </ul>
                  </div>
                </div>

                <!-- فرع سار -->
                <!-- <div class="col-lg-6 col-sm-6 col-xs-12">
                  <div class="contact-box">
                    <h5>فرع سار</h5>
                    <hr />
                    <ul>
                      <li><a href="tel:+973 17381018"><i class="fa fa-phone"></i>973 17381012+</a></li>
                      <li><a href="mailto:ٍsaar@ebdaabahrain.com"><i class="fa fa-envelope"></i>Saar@ebdaabahrain.com</a></li>
                      <li><a href="https://goo.gl/maps/azWzNzyXwCNmLyEv7" target="_blank"><i class="fa fa-map-marker"></i> سار -البحرين</a></li>
                    </ul>
                  </div>
                </div> -->

                <!-- فرع مدينة حمد -->
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <div class="contact-box">
                    <h5><?= $translations['hamad-tit']; ?></h5>
                    <hr />
                    <ul>
                      <li><a href="tel:+973 17381018"><i class="fa fa-phone"></i>973 17381018+</a></li>
                      <li><a href="mailto:hamad.town@ebdaabahrain.com"><i class="fa fa-envelope"></i>hamad.town@ebdaabahrain.com</a></li>
                      <li><a href="https://goo.gl/maps/qShfUw1tMhk" target="_blank"><i class="fa fa-map-marker"></i><?= $translations['hamad']; ?></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-sm-12 col-xs-12">
            <div class="contact-block">
              <form id="contactForm">
                <div class="form-group">
                  <input data-error="<?= $translations['f-name-err']; ?>" id="name_contact" name="name_contact" pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF\s]{3,30}" placeholder="<?= $translations['f-name-plch']; ?>" required="" type="text" />
                  <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                  <input data-error="<?= $translations['f-phone-err']; ?>" id="mobile_contact" name="mobile_contact" pattern="[0-9-]{8,15}" placeholder="<?= $translations['f-phone-plch']; ?>" required="" type="text" />
                  <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                  <input data-error="<?= $translations['f-email-err']; ?>" id="email_contact" name="email_contact" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="<?= $translations['f-email-plch']; ?>" required="" type="email" />
                  <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                  <select form="contactForm" id="subject_contact" name="subject_contact">
                    <option value=""><?= $translations['f-message-plch']; ?></option>
                    <option value="Enquiry"><?= $translations['enquiry']; ?></option>
                    <option value="Suggestion"><?= $translations['sugg']; ?></option>
                    <option value="Complaint"><?= $translations['complaint']; ?></option>
                  </select>
                  <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                  <textarea data-error="<?= $translations['f-mess-err']; ?>" id="message_contact" pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF1-9-\,\.\?\!\@\s]{3,200}" placeholder="<?= $translations['f-mess-plch']; ?>" required="" rows="8"></textarea>
                  <div class="help-block with-errors"></div>
                </div>

                <div class="submit-button text-center">
                  <!-- رسالة الإرسال -->
                  <div id="loadingMessage" style="display:none;" class="text-center my-3">
                    <?= $translations['sending']; ?>
                </div>

                  <!-- reCAPTCHA -->
                  <div class="form-group text-center mt-3">
                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                  </div>

                  <!-- زر الإرسال -->
                  <div class="text-center mt-3">
                    <div class="g-recaptcha" data-sitekey="6LetsOQZAAAAANG2gbEt7vMzNEFNHMry4QKYdVJ5"></div>
                    <button type="submit" class="btn btn-primary btn-lg" id="submitBtn"><?= $translations['submit']; ?></button>
                  </div>
                  <div class="h3 text-center hidden" id="msgSubmit-form"></div>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="contact-info-text">
        <p><?= $translations['cont-info1']; ?> <a href="#contact"><?= $translations['cont-info2']; ?></a><?= $translations['cont-info3']; ?><a data-target="#complain" data-toggle="modal" href="#"><?= $translations['cont-info4']; ?></a><?= $translations['cont-info5']; ?></p>
        <p><?= $translations['jobs-dis']; ?> <a href="jobs.php"><?= $translations['click']; ?></a>.</p>
      </div>

      <!-- complain Modal -->
      <div aria-hidden="true" class="modal fade ar-dir complaint-modal" id="complain" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><?= $translations['compls-proc']; ?></h4>
              <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row ar-txt">
                <div class="col-sm-12">
                  <p><?= $translations['compls-ph']; ?></p>
                  <div class="box_shadow">
                    <p><b><?= $translations['follow']; ?></b></p>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="box_shadow">
                    <p><b><?= $translations['proc1']; ?></b></p>
                    <p><?= $translations['proc-mng']; ?></p>
                    <p><?= $translations['mob']; ?></p>
                    <p><?= $translations['email-comp']; ?></p>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="box_shadow">
                    <p><b><?= $translations['proc2']; ?></b></p>
                    <p><?= $translations['proc2-res']; ?></p>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="box_shadow">
                    <p><b><?= $translations['proc3']; ?></b></p>
                    <p><?= $translations['proc3-1']; ?></p>
                    <p><?= $translations['proc3-adr1']; ?></p>
                    <p><?= $translations['proc3-adr2']; ?></p>
                    <p><?= $translations['proc3-adr3']; ?></p>
                    <p><?= $translations['proc3-adr4']; ?></p>
                    <p><?= $translations['proc3-adr5']; ?></p>
                    <p><?= $translations['email-comb2']; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-common" data-dismiss="modal" type="button"><?= $translations['close']; ?></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact us end-->
</div>
  <?php include "footer.php" ?>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Wait until CSS is loaded (DOMContentLoaded is usually enough)
      document.querySelectorAll('.slide-background.lazy-bg').forEach(function(el) {
        var bg = el.getAttribute('data-bg');
        if (bg) {
          var img = new Image();
          img.src = bg;
          img.onload = function() {
            el.style.backgroundImage = 'url(' + bg + ')';
            el.classList.remove('lazy-bg');
          };
        }
      });
    });
  </script>
  <script>
    $('.owl-carousel').owlCarousel({
      autoplay: true,
      autoplayTimeout: 1500,
      autoplayHoverPause: true,
      autoWidth: true,
      loop: true,
      margin: 330,
      items: 2,
    }
  );
  // html[dir="rtl"] .cta-button{
  //     flex-direction: row-reverse;
  //   }
  </script>
</body>

</html>