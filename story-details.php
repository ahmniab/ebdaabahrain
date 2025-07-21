<?php
require_once 'lang/init.php';
require_once 'services/stories-service.php';
$id = $_GET['id'] ?? '';
$story = getStoryById($id, $lang);
$stories_data = getStories($lang);

if (!$story) {
    http_response_code(404);
    echo '<h2>القصة غير موجودة</h2>';
    exit;
}
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($story['modal']['title']); ?> - <?php echo htmlspecialchars($stories_data['pageTitle']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($stories_data['metaDescription']); ?>">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha512-iceXjjbmB2rwoX93Ka6HAHP+B76IY1z0o3h+N1PeDtRSsyeetU3/0QKJqGyPJcX63zysNehggFwMC/bi7dvMig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/news-details.css">
    <link rel="stylesheet" href="css/story-details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container news-details-container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-12">
                <div class="card news-details-card mb-4">
                    <img src="<?php echo htmlspecialchars($story['image']); ?>" class="card-img-top img-fluid" alt="<?php echo htmlspecialchars($story['name']); ?>">

                    <div class="card-body">
                        <div class="story-type-badge mb-2">
                            <?php if ($story['type'] === 'stories_video'): ?>
                                <span class="badge badge-primary">
                                    <i class="fa fa-video mr-1"></i> قصة مصورة
                                </span>
                            <?php else: ?>
                                <span class="badge badge-success">
                                    <i class="fa fa-file-text mr-1"></i> قصة نجاح
                                </span>
                            <?php endif; ?>
                        </div>
                        
                        <h2 class="card-title mb-3"><?php echo htmlspecialchars($story['modal']['title']); ?></h2>
                        <h4 class="story-author mb-3 text-muted"><?php echo htmlspecialchars($story['name']); ?></h4>
                        
                        <?php if ($story['type'] === 'stories_video' && isset($story['modal']['video'])): ?>
                            <!-- Video Story -->
                            <div class="video-container mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" 
                                            src="<?php echo htmlspecialchars($story['modal']['video']); ?>" 
                                            allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (isset($story['modal']['content']) && is_array($story['modal']['content'])): ?>
                            <!-- Text Story Content -->
                            <div class="story-content mb-4">
                                <?php foreach ($story['modal']['content'] as $paragraph): ?>
                                    <p class="mb-3"><?php echo htmlspecialchars($paragraph); ?></p>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (isset($story['modal']['images']) && is_array($story['modal']['images']) && count($story['modal']['images']) > 1): ?>
                            <!-- Image Gallery -->
                            <div class="owl-carousel owl-theme news-owl-carousel mb-4">
                                <?php foreach ($story['modal']['images'] as $img): ?>
                                    <div class="item">
                                        <img src="<?php echo htmlspecialchars($img); ?>" class="d-block w-100 img-fluid rounded" alt="">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        
                        <a href="success-stories.php" class="btn btn-outline-primary mt-3">
                            <i class="fa fa-arrow-right ml-2"></i> عودة لقصص النجاح
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
    
    <?php if (isset($story['modal']['images']) && is_array($story['modal']['images']) && count($story['modal']['images']) > 1): ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.news-owl-carousel').owlCarousel({
                    rtl: true,
                    items: 1,
                    loop: true,
                    margin: 10,
                    nav: true,
                    dots: true,
                    navText: [
                        '<span class="fa fa-chevron-right"></span>',
                        '<span class="fa fa-chevron-left"></span>'
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                });
            });
        </script>
    <?php endif; ?>
</body>

</html> 