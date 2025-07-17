<?php
  require_once 'lang/init.php';
  $navbar_translations = GetTranslations(basename(__FILE__, ".php"));

  $lang_url = '?lang=' . ($lang === 'ar' ? 'en' : 'ar');
  foreach ($_GET as $key => $value) {
    if ($key === 'lang') continue;
    $lang_url .= '&' . $key . '=' . $value;
  }

  $is_arabic = ($lang === 'ar');
  $dir = $is_arabic ? 'rtl' : 'ltr';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" dir="<?= $dir ?>">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <a class="navbar-brand" href="index.php">
      <img src="<?= $navbar_translations['logo']; ?>" alt="Logo">
    </a>

    <!-- only visible on small screens -->
    <div class="d-flex d-lg-none align-items-center">
      <!-- Language Switcher -->
      <a class="nav-link d-flex align-items-center ms-2 lang-switch" href="<?= $lang_url; ?>">
        <?= $navbar_translations['lang']; ?>
        <img src="<?= $navbar_translations['lang-flag']; ?>" alt="flag">
      </a>
      
      <!-- Toggler icon -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>

    <!-- Collapsible Navbar items -->
    <div class="collapse navbar-collapse justify-content-center justify-content-lg-between" id="navbarSupportedContent">

      <!-- Navbar Items -->
      <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
        <?php foreach ($navbar_translations['items'] as $key => $value): ?>
          <?php if (isset($value['submenu'])): ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown<?= $key ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $value['name']; ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown<?= $key ?>">
                <?php foreach ($value['submenu'] as $submenu): ?>
                  <li><a class="dropdown-item" href="<?= $submenu['href']; ?>"><?= $submenu['name']; ?></a></li>
                <?php endforeach; ?>
              </ul>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link <?= isset($value['active']) && $value['active'] ? 'active' : '' ?>" href="<?= $value['href']; ?>">
                <?= $value['name']; ?>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>

      <!-- Language Switcher: only shown on large screens -->
      <div class="d-none d-lg-flex <?= $dir === 'rtl' ? 'me-lg-0' : 'ms-lg-0' ?>">
        <a class="nav-link d-flex align-items-center lang-switch" href="<?= $lang_url; ?>">
          <?= $navbar_translations['lang']; ?>
          <img src="<?= $navbar_translations['lang-flag']; ?>" alt="flag">
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Bootstrap Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>