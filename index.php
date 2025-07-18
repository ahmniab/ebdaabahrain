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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" async defer />
  <link rel="stylesheet" href="css/home.css">

</head>

<body>

  <?php 
    include 'navbar.php'; 
    require_once 'index-landing.php';
  
  ?>


    <!-- <div class="container"> -->



  <!-- Header Section End -->

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
    <div class="container container-fluid--mobile">
      <div class="section-header">
        <h2 class="section-title"><?= $translations['contact']; ?></h2>
        <hr class="lines" />
        <p class="section-subtitle"><?= $translations['contact-us2']; ?>
          <br /><?= $translations['ur-opn']; ?></p>
      </div>
      <div class="contact-form text-nowrap" id="contactUs">
        <div class="row ar-dir">
          <div class="col-lg-7 mb-4 ">
            <div class="contact-address">
              <div class="row contact-boxes-container">
                <!-- الادارة العامة -->
                <div class="col-lg-6 col-lg-6">
                  <div class="contact-box container-fluid--mobile">
                    <h5><?= $translations['manama-tit']; ?></h5>
                    <hr />
                    <ul>
                      <li><a href="tel:+973 17381000"><i class="fa fa-phone"></i>+973 17381000</a></li>
                      <li><a href="mailto:info@ebdaabahrain.com"><i class="fa fa-envelope"></i>info@ebdaabahrain.com</a></li>
                      <li><a href="https://goo.gl/maps/M64LjU9m4v32" target="_blank"><i class="fa fa-map-marker"></i><?= $translations['manama']; ?></a></li>
                    </ul>
                  </div>
                </div>

                <!-- فرع العاصمة -->
                <div class="col-lg-6 col-lg-6">
                  <div class="contact-box container-fluid--mobile">
                    <h5><?= $translations['manama-tit2']; ?></h5>
                    <hr />
                    <ul>
                      <li><a href="tel:+973 17381003"><i class="fa fa-phone"></i>+973 17381003</a></li>
                      <li><a href="mailto:almanama@ebdaabahrain.com"><i class="fa fa-envelope"></i><span>almanama@ebdaabahrain.com</span></a></li>
                      <li><a href="https://goo.gl/maps/M64LjU9m4v32" target="_blank"><i class="fa fa-map-marker"></i><?= $translations['manama']; ?></a></li>
                    </ul>
                  </div>
                </div>

                <!-- فرع عالي -->
                <div class="col-lg-6 col-lg-6 ">
                  <div class="contact-box container-fluid--mobile">
                    <h5><?= $translations['aali-tit']; ?></h5>
                    <hr />
                    <ul>
                      <li><a href="tel:+973 17381013"><i class="fa fa-phone"></i>+973 17381013</a></li>
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
                <div class="col-lg-6 col-lg-6">
                  <div class="contact-box container-fluid--mobile">
                    <h5><?= $translations['hamad-tit']; ?></h5>
                    <hr />
                    <ul>
                      <li><a href="tel:+973 17381018"><i class="fa fa-phone"></i>+973 17381018</a></li>
                      <li><a href="mailto:hamad.town@ebdaabahrain.com"><i class="fa fa-envelope"></i><span>hamad.town@ebdaabahrain.com</span></a></li>
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
                <div class="col-sm-12">
                  <div class="box_shadow">
                    <p><b><?= $translations['proc1']; ?></b></p>
                    <p><?= $translations['proc-mng']; ?></p>
                    <p><?= $translations['mob']; ?></p>
                    <p><?= $translations['email-comp']; ?></p>
                  </div>
                </div>
                <div class="col-sm-12">
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
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      autoWidth: false,
      loop: true,
      responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        }
    }
    }
  );
  // html[dir="rtl"] .cta-button{
  //     flex-direction: row-reverse;
  //   }
  </script>
</body>

</html>