<?php
require_once 'lang/init.php';
require_once 'services/news-service.php';
$id = $_GET['id'] ?? '';
$news = getNewsById($id, $lang);
$news_data = getNews($lang);
if (!$news) {
    http_response_code(404);
    echo '<h2>الخبر غير موجود</h2>';
    exit;
}
?>
<!DOCTYPE html>
<html dir="<?php echo $news_data['metadata']['direction']; ?>" lang="<?php echo $news_data['metadata']['lang'] ?? 'ar'; ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($news['title']); ?> - <?php echo $news_data['metadata']['title']; ?></title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha512-iceXjjbmB2rwoX93Ka6HAHP+B76IY1z0o3h+N1PeDtRSsyeetU3/0QKJqGyPJcX63zysNehggFwMC/bi7dvMig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/min/main.css">
    <link rel="stylesheet" href="css/min/news-details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css " rel="stylesheet">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container news-details-container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-12">
                <div class="card news-details-card mb-4">
                    <img src="<?php echo htmlspecialchars($news['image']); ?>" class="card-img-top img-fluid" alt="<?php echo htmlspecialchars($news['title']); ?>">


                    <div class="card-body">
                        <small class="text-muted d-block mb-2"><?php echo htmlspecialchars($news['date']); ?></small>
                        <h2 class="card-title mb-3"><?php echo htmlspecialchars($news['title']); ?></h2>
                        <div class="card-text mb-3">
                            <?php echo nl2br(htmlspecialchars($news['content'])); ?>
                        </div>
                        
                        <?php
                        $all_images = [$news['image']];
                        if (!empty($news['images']) && is_array($news['images'])) {
                            foreach ($news['images'] as $img) {
                                if ($img && $img !== $news['image']) $all_images[] = $img;
                            }
                        }
                        if (count($all_images) > 1) {
                        ?>
                            <div class="owl-carousel owl-theme news-owl-carousel mb-3">
                                <?php foreach ($all_images as $img): ?>
                                    <div class="item">
                                        <img src="<?php echo htmlspecialchars($img); ?>" class="d-block w-100 img-fluid rounded" alt="">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php } ?>
                    </div>
                        <a href="news.php" class="btn btn-outline-primary mt-3"><i class="fa fa-arrow-right ml-2"></i> <?php echo $lang === 'ar' ? 'عودة للأخبار' : 'Back to News'; ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php include 'footer.php'; ?>
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
</body>

</html>