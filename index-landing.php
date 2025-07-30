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
                                            <i class="fa-solid fa-star text-nowrap"></i>
                                            <span><?= $translations['des']; ?></span>
                                        </div>

                                        <h1 class="slide-title mb-3">
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

                                        <div class="slide-actions text-nowrap">
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
                        <h1 class="display-4"><?= $translations['header-des2']; ?>
                        </h1>
                        <h2 calass="m-2"><?= $translations['ebdaa-loans']; ?></h2>
                        <a href="application-form.php" class="btn btn-primary">
                            <?= $lang === 'ar' ? $translations['apply-loans'] : $translations['apply-now'] ; ?>
                         </a>
                    </div>
                </div>
            </li>
            <li class="splide__slide">
                <div class="success-elements-container" dir="ltr">
                    <a class="success-element" href="story-details.php?id=story_1753293846">
                        <img src="assets/img/home-s3-slides/s1.jpeg" alt="success image">
                        <div class="success-filter"></div>
                    </a>
                    <a class="success-element" href="story-details.php?id=story_1753306253">
                        <img src="assets/img/home-s3-slides/s2.jpeg" alt="success image">
                        <div class="success-filter"></div>
                    </a>
                    <a class="success-element" href="story-details.php?id=story_1753306079">
                        <img src="assets/img/home-s3-slides/s3.jpeg" alt="success image">
                        <div class="success-filter"></div>
                    </a>
                    <a class="success-element" href="story-details.php?id=story_1753306543">
                        <img src="assets/img/home-s3-slides/s4.jpeg" alt="success image">
                        <div class="success-filter"></div>
                    </a>
                    <a class="success-element" href="story-details.php?id=story_1753280152">
                        <img src="assets/img/home-s3-slides/s5.jpeg" alt="success image">
                        <div class="success-filter"></div>
                    </a>

                </div>
                <div class="success-text">
                    <h1><?= $translations['header-des3']; ?>
                        <strong class="bold"><?= $lang === 'ar' ? 'الإبداع' : 'Ebdaa\'s financing' ?></strong>
                    </h1>
                    <h2><?= $translations['header-des3-1']; ?></h2>
                    <a href="success-stories.php" class="btn btn-info"><?= $translations['know-succ']; ?>                    </a>
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
                                        <span class="counter">23,868</span>
                                    </div>
                                    <div class="counter-label"><?= $translations['customer']; ?></div>

                                    <!-- Hover Details -->
                                    <div class="counter-details">
                                        <div class="detail-item">
                                            <div class="detail-icon">
                                                <i class="fa fa-male"></i>
                                            </div>
                                            <div class="detail-content">
                                                <div class="detail-number">13,573</div>
                                                <div class="detail-label"><?= $translations['man']; ?></div>
                                            </div>
                                        </div>
                                        <div class="detail-item">
                                            <div class="detail-icon">
                                                <i class="fa fa-female"></i>
                                            </div>
                                            <div class="detail-content">
                                                <div class="detail-number">10,295</div>
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
                                        <span class="counter">23,690</span>
                                    </div>
                                    <div class="counter-label"><?= $translations['loan']; ?></div>

                                    <!-- Hover Details -->
                                    <div class="counter-details">
                                        <div class="detail-item">
                                            <div class="detail-icon">
                                                <i class="fa fa-folder-open"></i>
                                            </div>
                                            <div class="detail-content">
                                                <div class="detail-number">1,936</div>
                                                <div class="detail-label"><?= $translations['pending']; ?></div>
                                            </div>
                                        </div>
                                        <div class="detail-item">
                                            <div class="detail-icon">
                                                <i class="fa fa-folder"></i>
                                            </div>
                                            <div class="detail-content">
                                                <div class="detail-number">21,753</div>
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
                                        <span class="counter">28,535,871</span>
                                    </div>
                                    <div class="counter-label"><?= $translations['disbursed-value']; ?></div>

                                    <!-- Hover Details -->
                                    <div class="counter-details">
                                        <div class="detail-item">
                                            <div class="detail-icon">
                                                <i class="fa fa-folder-open"></i>
                                            </div>
                                            <div class="detail-content">
                                                <div class="detail-number">2,264,512</div>
                                                <div class="detail-label"><?= $translations['pending']; ?></div>
                                            </div>
                                        </div>
                                        <div class="detail-item">
                                            <div class="detail-icon">
                                                <i class="fa fa-folder"></i>
                                            </div>
                                            <div class="detail-content">
                                                <div class="detail-number">26,271,359</div>
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
                                        <span class="counter">94.4</span>%
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