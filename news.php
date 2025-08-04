<?php
require_once 'lang/init.php';
require_once 'services/news-service.php';
$news_data = getNews($lang);
?>
<!DOCTYPE html>
<html dir="<?php echo $dir; ?>" lang="<?php echo $lang; ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="موقع بنك الإبداع البحرين - فرص وظيفية، خدمات تمويلية، دعم المشاريع الصغيرة والمتوسطة.">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title><?php echo $news_data['metadata']['title']; ?></title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js "></script>
    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/news.css">
    <!-- Font Awesome -->
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css " rel="stylesheet">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <!-- <div class="container"> -->
        <!-- Modern News Section -->
        <section class="section news-section" id="blog">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title"><?php echo $news_data['news_section']['title']; ?></h2>
                    <p class="section-subtitle">
                        <?php echo nl2br(htmlspecialchars($news_data['news_section']['subtitle'])); ?>
                    </p>
                </div>

                <ul class="news-list">
                    <?php foreach ($news_data['news_items'] as $item): ?>
                        <li>
                            <div class="card news-card">
                                <div class="position-relative">
                                    <img loading="lazy" src="<?php echo htmlspecialchars($item['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['title']); ?>">

                                </div>
                                <div class="card-body">
                                    <small><?php echo htmlspecialchars($item['date']); ?></small>
                                    <h5 class="card-title">
                                        <a href="news-details.php?id=<?php echo urlencode($item['id']); ?>" >
                                            <?php echo htmlspecialchars($item['title']); ?>
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo nl2br(htmlspecialchars($item['summary'])); ?>
                                    </p>
                                    <a href="news-details.php?id=<?php echo urlencode($item['id']); ?>" class="btn">
                                        <?php echo $lang === 'ar'?
                                     'تفاصيل الخبر<i class="fa fa-arrow-left mr-2"></i>'
                                     : '<i class="fa fa-arrow-right ml-2"></i>MORE DETAILS' 
                                     ?>
                                    </a>
                                </div>
                            </div>

                        </li>
                <?php endforeach; ?>
                </ul>
                <div class="text-center mt-5">
                    <button class="btn btn-lg" id="showMoreBtn">
                       <?php echo $lang === 'ar'?
                        ' لمزيد من الاخبار<i class="fa fa-arrow-left mr-2"></i>'
                        : '<i class="fa fa-arrow-right ml-2"></i> MORE NEWS' 
                        ?>
                    </button>
                </div>
            </div>
        </section>
    <!-- </div> -->
    <!-- Modals -->
     <script>
        const itemList = document.querySelector('.news-list');
        const items = itemList.querySelectorAll('li');
     </script>
    <script src="js/main.js"></script>



    <?php include 'footer.php'; ?>

</body>

</html>