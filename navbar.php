<?php
  require_once 'lang/init.php';
  $navbar_translations = GetTranslations(basename(__FILE__, ".php"));
  $lang_url = '?lang=' . ($lang === 'ar' ? 'en' : 'ar');
  foreach ($_GET as $key => $value) {
    if ($key === 'lang') continue;
    $lang_url .= '&' . $key . '=' . $value;
  }
  $is_arabic = ($lang === 'ar');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top p-0 m-0 w-100">
  <div class="container-fluid">

    <!-- Logo -->
    <a class="navbar-brand" href="index.php">
      <img src="<?= $navbar_translations['logo']; ?>" alt="Logo">
    </a>

    <!-- Mobile language + hamburger -->
    <div class="d-flex d-lg-none align-items-center">
      <a class="nav-link lang-switch me-2" href="<?= $lang_url; ?>">
        <img src="<?= $navbar_translations['lang-flag']; ?>" alt="flag">
        <?= $navbar_translations['lang']; ?>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarItems">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <!-- Navbar Items -->
    <div class="collapse navbar-collapse" id="navbarItems">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <?php foreach ($navbar_translations['items'] as $key => $value): ?>
          <?php if (isset($value['submenu']) && is_array($value['submenu'])): ?>
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
              <a class="nav-link <?= isset($value['active']) && $value['active'] ? 'active' : ''; ?>" href="<?= $value['href']; ?>">
                <?= $value['name']; ?>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>

      <!-- Desktop language switcher -->
      <div class="d-none d-lg-flex <?= $is_arabic ? 'me-auto' : 'ms-auto' ?>">
        <a class="nav-link lang-switch" href="<?= $lang_url; ?>">
          <?= $navbar_translations['lang']; ?>
          <img src="<?= $navbar_translations['lang-flag']; ?>" alt="flag">
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
