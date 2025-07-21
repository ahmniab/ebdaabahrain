<?php
require_once 'includes/news-service.php';
$news_data = getNews();
?>
<!DOCTYPE html>
<html dir="<?php echo $news_data->metadata->direction; ?>" lang="<?php echo $news_data->metadata->lang; ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="موقع بنك الإبداع البحرين - فرص وظيفية، خدمات تمويلية، دعم المشاريع الصغيرة والمتوسطة.">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title><?php echo $news_data->metadata->title; ?></title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js "></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com ">
    <link rel="preconnect" href="https://fonts.gstatic.com " crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css " rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Local CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/news.css">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container">
        <!-- Modern News Section -->
        <section class="section news-section" id="blog">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title"><?php echo $news_data->news_section->title; ?></h2>
                    <p class="section-subtitle">
                        <?php echo nl2br(htmlspecialchars($news_data->news_section->subtitle)); ?>
                    </p>
                </div>

                <ul class="news-list">
                    <?php foreach ($news_data->news_items as $item): ?>
                        <li>
                            <div class="card news-card">
                                <div class="position-relative">
                                    <img loading="lazy" src="<?php echo htmlspecialchars($item->image); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item->title); ?>">
                                    <span class="badge badge-<?php echo htmlspecialchars($item->badge->type); ?> news-badge">
                                        <?php echo htmlspecialchars($item->badge->text); ?>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <small><?php echo htmlspecialchars($item->date); ?></small>
                                    <h5 class="card-title">
                                        <a href="#" data-target="#<?php echo htmlspecialchars($item->id); ?>" data-toggle="modal">
                                            <?php echo htmlspecialchars($item->title); ?>
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo nl2br(htmlspecialchars($item->summary)); ?>
                                    </p>
                                    <a href="#" data-target="#News23" data-toggle="modal" class="btn">
                                        تفاصيل الخبر <i class="fa fa-arrow-left mr-2"></i>
                                    </a>
                                </div>
                            </div>

                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </div>
    <!-- Modals -->
    <?php foreach ($news_data->news_items as $item): ?>
        <div aria-hidden="true" class="modal fade ar-dir" id="<?php echo $item->id; ?>" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body ar-txt">
                        <button aria-label="Close" class="close" data-dismiss="modal" style="float:left" type="button">
                            <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
                        </button>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <h4><?php echo nl2br($item->title); ?></h4>
                                <hr />
                                <img loading="lazy"
                                    src="<?php echo htmlspecialchars($item->image); ?>"
                                    alt="<?php echo htmlspecialchars($item->title); ?>">


                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="box_shadow">
                                <?php echo nl2br($item->content); ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-common fadeInUp animated" data-dismiss="modal" type="button">إغلاق</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <?php endforeach; ?>


    <?php include 'footer.php'; ?>

</body>

</html>