<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<div dir="ltr" class="splide" aria-label="Fullscreen Carousel">
    <div class="splide__track">
        <ul class="splide__list">
            <li dir="<?php echo $dir ?>" class="splide__slide">
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
                                            <a href="application-form.php" class="btn btn-primary btn-lg">
                                                <i class="fa-solid fa-rocket ml-2"></i>
                                                <?= $translations['apply-loan']; ?>
                                            </a>
                                            <a href="services.php" class="btn btn-outline-primary btn-lg">
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

            </li>
            <li dir="<?php echo $dir ?>" class="splide__slide" style="background: url('assets/img/second-slide-bg.jpeg') center/cover;">
                <div class="d-flex align-items-center justify-content-center h-50">
                    <div class="text-center text-white">
                        <h1 class="display-4">إستثمر فى احلامك..وحولها
                            <strong>لمشاريع ناجحة</strong>
                        </h1>
                        <h2>مع قروض الابداع</h2>
                        <a href="application-form.php" class="btn btn-primary">
                            اطلب قرضك الآن
                        </a>
                    </div>
                </div>
            </li>
            <li class="splide__slide" dir="<?php echo $dir ?>">
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

            </li>
        </ul>
    </div>
</div>

<script>
    new Splide('.splide', {
        type: 'fade',
        rewind: true,
        autoplay: true,
        interval: 3000,
        height: '100vh',
        cover: true,
    }).mount();
</script>