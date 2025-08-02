<?php
require_once 'lang/init.php';
$footer_translations = GetTranslations(basename(__FILE__, ".php"));
?>
<!-- Footer Section Start -->
<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-section">
        <div class="footer-brand">
          <img src="assets/img/logo-ar-en-white.webp" alt="إبداع البحرين" loading="lazy" class="footer-logo">
          <p class="footer-description"><?= $footer_translations['footer-ph']; ?></p>
        </div>
        <div class="footer-contact">
          <div class="footer-contact-item">
            <i class="fa fa-phone"></i>
            <a href="tel:+973 17381000"><span dir="ltr">+973 17381000</span></a>
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
      <!-- <div class="d-flex flex-column justify-content-between"> -->
        <div class="footer-section">
          <div class="footer-social">
            <a href="https://www.facebook.com/Ebdaabahrain/" class="social-link" title="فيسبوك">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/ebdaabahrain" class="social-link" title="تويتر">
              <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/company/ebdaa-microfinance-bank---bahrain" class="social-link" title="لينكد إن">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://www.instagram.com/ebdaabahrain/" class="social-link" title="إنستغرام">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCE5TCNCvV9D86TLo4nwFyrQ?view_as=subscriber" class="social-link" title="يوتيوب">
              <i class="fa-brands fa-youtube"></i>
            </a>
          </div>
          <div class="mt-2 text-center">
            <p><a class="footer-link" href="jobs.php"><?php echo nl2br($footer_translations['click']); ?></a></p>
          </div>



        </div>

      </div>

    <!-- </div> -->
    <div class="footer-bottom">
      <div class="copyright">
        <p>
          <?php echo nl2br($footer_translations['copy-rt']); ?>
          <a href="index.php" rel="nofollow">
            <?php echo $footer_translations['ebda-bh']; ?>
          </a><br /><?php echo $footer_translations['license']; ?>
        </p>
      </div>

      <div class="footer-whatsapp">
        <!-- <a href="https://wa.me/97333539666" target="_blank" rel="noopener noreferrer"
        class="whatsapp-button" aria-label="تواصل معنا عبر واتساب">
        <i class="fab fa-whatsapp"></i>
        <span class="whatsapp-text"><?= $footer_translations['cont-whts']; ?></span>
      </a> -->
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
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/97333539666" target="_blank" rel="noopener noreferrer"
    class="whatsapp-floating" aria-label="تواصل معنا عبر واتساب">
    <i class="fab fa-whatsapp"></i>
  </a>
<!-- زر فتح الشات -->
<button id="chatbot-toggle" onclick="toggleChat()" aria-label="فتح شات البوت">
  <i class="fas fa-comments"></i>
</button>

<!-- نافذة الشات -->
<div id="chatbot-box" role="dialog" aria-labelledby="chatbot-header">
  <div class="chatbot-header" id="chatbot-header">
    <span><i class="fas fa-robot"></i> <?= $footer_translations['bot-title']; ?></span>
    <button onclick="toggleChat()" aria-label="<?= $footer_translations['bot-close']; ?>">×</button>
  </div>

  <div class="chatbot-body" id="chatbot-body">
    <!-- المحادثة تظهر هنا -->
  </div>

  <div class="chatbot-input">
    <input type="text" id="user-input" placeholder="<?= $footer_translations['bot-input']; ?>"
      onkeypress="if(event.key === 'Enter') sendMessage()" aria-label="<?= $footer_translations['bot-input']; ?>">

    <button onclick="startListening()" aria-label="<?= $footer_translations['bot-microphone']; ?>">
      <i class="fas fa-microphone"></i>
    </button>

    <button onclick="sendMessage()" aria-label="<?= $footer_translations['bot-send']; ?>">
      <i class="fas fa-paper-plane"></i>
    </button>
  </div>
</div>


<script src="js/main.js"></script>
<script src="js/chatbot-<?php echo $lang; ?>.js"></script>