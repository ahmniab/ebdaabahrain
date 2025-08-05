<?php
require_once 'lang/init.php';
$translations = GetTranslations(basename(__FILE__, '.php'));

?>

<!DOCTYPE html>
<html dir="<?php echo $dir; ?>" lang="<?php echo $lang; ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="موقع بنك الإبداع البحرين - فرص وظيفية، خدمات تمويلية، دعم المشاريع الصغيرة والمتوسطة.">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    
    <title><?php echo $translations['page_title']; ?></title>

    <!-- Favicon -->
    <link rel="stylesheet" href="css/bootstrap-4.1.1.min.css">
    <link rel="stylesheet" href="css/min/main.css">
    <style>
        :lang(ar) {
            text-align: right;
        }
        :lang(en) {
            text-align: left;
        }
        .card-text {
            font-size: 1.2rem;
        }
        ol {
            list-style-type: decimal;
            font-size: 1rem;
        }
        ol li {
            margin: 10px 0;
            padding-bottom: 20px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-11">
                <div class="card shadow-sm border-0" dir="<?php echo $dir; ?>">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4" style="color:#2E8F36; font-weight:700;"><?php echo $translations['title']; ?></h2>
                        <div class="card-text">
                            <?php echo $translations['intro']; ?>
                        </div>
                        <ol>
                            <?php foreach($translations['clauses'] as $clause){ ?>
                                <li><?php echo $clause; ?></li>
                            <?php } ?>
                        </ol>
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>