<?php
require_once 'lang/init.php';
$footer_translations = GetTranslations(basename(__FILE__,".php"));
?>
<!-- Footer Section Start -->
<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-section">
        <div class="footer-brand">
          <img src="assets/img/ebdaa2.webp" alt="إبداع البحرين" loading="lazy" class="footer-logo">
          <p class="footer-description"><?= $footer_translations['footer-ph']; ?></p>
        </div>
        <div class="footer-contact">
          <div class="footer-contact-item">
            <i class="fa fa-phone"></i>
            <a href="tel:+973 17381000">973 17381000+</a>
          </div>
          <div class="footer-contact-item">
            <i class="fa fa-envelope"></i>
            <a href="mailto:info@ebdaabahrain.com">info@ebdaabahrain.com</a>
          </div>
          <div class="footer-contact-item">
            <i class="fa fa-map-marker"></i>
            <a href="https://goo.gl/maps/M64LjU9m4v32" target="_blank"><?= $footer_translations['manama']; ?></a>
          </div>
        </div>
      </div>

      <div class="footer-section text-nowrap">
        <ul class="footer-links text-nowrap">
          <li><a href="index.php"><?= $footer_translations['main']; ?></a></li>
          <li><a href="index.php#services"><?= $footer_translations['service']; ?></a></li>
          <li><a href="about-us.php"><?= $footer_translations['about']; ?></a></li>
          <li><a href="index.php#contact"><?= $footer_translations['contact']; ?></a></li>
          <li><a href="jobs.php"><?= $footer_translations['career']; ?></a></li>
        </ul>

        <div class="footer-social">
          <a href="https://www.facebook.com/Ebdaabahrain/" class="social-link" title="فيسبوك">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://twitter.com/ebdaabahrain" class="social-link" title="تويتر">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="social-link" title="لينكد إن">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="https://www.instagram.com/ebdaabahrain/" class="social-link" title="إنستغرام">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.youtube.com/channel/UCE5TCNCvV9D86TLo4nwFyrQ?view_as=subscriber" class="social-link" title="يوتيوب">
            <i class="fa-brands fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="copyright">
        <p><?= $footer_translations['copy-rt']; ?><a href="index.php" rel="nofollow"><?= $footer_translations['ebda-bh']; ?></a><br /><?= $footer_translations['license']; ?></p>
      </div>

      <div class="footer-whatsapp">
        <a href="https://wa.me/97333539666" target="_blank" rel="noopener noreferrer"
          class="whatsapp-button" aria-label="تواصل معنا عبر واتساب">
          <i class="fab fa-whatsapp"></i>
          <span class="whatsapp-text"><?= $footer_translations['cont-whts']; ?></span>
        </a>
      </div>
    </div>
  </div>
</footer>
<!-- Footer Section End -->
<!-- Go To Top Link -->
<a class="back-to-top" style="text-decoration: none; color: #fff;" href="#">
  <i class="fa-solid fa-circle-chevron-up"></i>
</a>
<div id="loader">
  <div class="spinner">
    <div class="double-bounce1"></div>
    <div class="double-bounce2"></div>
  </div>
</div>
<!-- jQuery first, then Bootstrap Bundle JS -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" async defer></script>

<?php //include "includes/footer.php"; ?>

<!-- Video modal handlers -->
<script>
  $(function() {
    $('#Bank_Video1').on('show.bs.modal', function() {
      const iframe = document.getElementById('ebdaaVideoFrame');
      if (iframe) iframe.src = iframe.getAttribute('data-src');
    }).on('hidden.bs.modal', function() {
      const iframe = document.getElementById('ebdaaVideoFrame');
      if (iframe) iframe.src = '';
    });
  });
</script>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/97333539666" target="_blank" rel="noopener noreferrer"
    class="whatsapp-floating" aria-label="تواصل معنا عبر واتساب">
    <i class="fab fa-whatsapp"></i>
  </a>





<!-- Statistics Counter Animation - Simplified for Performance -->
<script>
  // Display statistics numbers directly without animation for better performance
  document.addEventListener('DOMContentLoaded', async function() {
    // Hide loader when page is loaded
    document.getElementById('loader').classList.add('hidden');

  });


  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(async anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
</script>

<!-- Custom JavaScript -->
<script>
  $(document).ready(function() {
    // Back to top button
    $(window).scroll(function() {
      if ($(this).scrollTop() > 300) {
        $('.back-to-top').addClass('show');
      } else {
        $('.back-to-top').removeClass('show');
      }
    });

    $('.back-to-top').click(function(e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, 800);
    });

    // Hide loader after 3 seconds if load event doesn't fire
    setTimeout(function() {
      $('#loader').addClass('hidden');
    }, 3000);

    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(e) {
      var target = $(this.getAttribute('href'));
      if (target.length) {
        e.preventDefault();
        $('html, body').stop().animate({
          scrollTop: target.offset().top - 80
        }, 1000);
      }
    });


  });
</script>