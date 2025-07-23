<!-- <?php
 require_once 'lang/init.php';
 $navbar_translations = GetTranslations(basename(__FILE__,".php"));
?> -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="navbar-brand">
    <a href="index.php" class="logo">
      <img loading="lazy" src="<?= $navbar_translations['logo']; ?>" alt="">
    </a>
  </div>
  <ul class="navbar-nav mr-auto" id="navbarItems" style>
    <?php foreach ($navbar_translations['items'] as $key => $value) { ?>
      <?php if (isset($value['submenu']) && is_array($value['submenu'])) { ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown<?= $key ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= $value['name']; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown<?= $key ?>">
            <?php foreach ($value['submenu'] as $submenu) { ?>
              <a class="dropdown-item" href="<?= $submenu['href']; ?>"><?= $submenu['name']; ?></a>
            <?php } ?>
          </div>
        </li>
      <?php } else { ?>
        <li class="nav-item"><a class="nav-link <?= isset($value['active']) && $value['active'] ? 'active' : ''; ?>" href="<?= $value['href']; ?>"><?= $value['name']; ?></a></li>
      <?php } ?>
    <?php } ?>
    <li class="nav-item"><a class="nav-link lang-switch" 
        <?php 
          
          $lang_url ='?lang=' . ($lang === 'ar' ? 'en' : 'ar');
          foreach($_GET as $key => $value) {
            if($key === 'lang') continue;
            $lang_url .= '&' . $key . '=' . $value;
          }
        ?>
      href="<?= $lang_url; ?>"><img src="<?= $navbar_translations['lang-flag']; ?>" alt="flag" > &nbsp; <?= $navbar_translations['lang']; ?></a></li>
  </ul>
  <div class="collapse-button" >
    <i class="fa-solid fa-bars"></i>
  </div>
  </div>
</nav>
<script>
  document.querySelector('.collapse-button').addEventListener('click', function() {
    const navbarItems = document.getElementById('navbarItems');
    // navbarItems.classList.toggle('show');
    if (navbarItems.style.display === 'block') {
      navbarItems.style.display = 'none';
    } else {
      navbarItems.style.display = 'block';
    }
  });
</script>
<!-- Navbar End  -->