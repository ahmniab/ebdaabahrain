<?php
require_once 'lang/init.php';
$file = $_GET['page'] ?? basename(__FILE__, '.php');
if($file !== 'board-members' && $file !== 'about-board'){
    http_response_code(404);
    echo '<h1>Page not found</h1>';
    exit;
}
$translations = GetTranslations($file);  // Force the translation folder
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $dir; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['page-title']; ?></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/min/main.css">
    <!-- Font Awesome -->
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css " rel="stylesheet">

    <link rel="stylesheet" href="css/min/team.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="header">
        <h1><?php echo $translations['title']; ?></h1>
    </div>
    <div class="stuff-item leader" data-toggle="modal" data-target="#<?php echo $translations['leader']['id']; ?>">
        <div class="img-container">
            <img loading="lazy" src="<?php echo $translations['leader']['image']; ?>" alt="stuff img">
        </div>
        <div class="info-container text-nowrap">
            <h3><?php echo $translations['leader']['name']; ?></h3>
            <p><?php echo $translations['leader']['title']; ?></p>
        </div>
    </div>
    <div class="stuff-container">
        <?php for ($i=0; $i < count($translations['members']);) {
            ?>
            <div class="d-flex justify-content-around flex-wrap">
            <?php for ($j=0; $j < 3 && $i < count($translations['members']); $j++, $i++) { 
                ?>
                <div class="stuff-item" data-toggle="modal" data-target="#<?php echo $translations['members'][$i]['id']; ?>">
                    <div class="img-container">
                        <img loading="lazy" src="<?php echo $translations['members'][$i]['image']; ?>" alt="stuff img">
                    </div>
                    <div class="info-container">
                        <h3><?php echo $translations['members'][$i]['name']; ?></h3>
                        <p><?php echo $translations['members'][$i]['title']; ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        <?php } ?>
        </div>
    
    <!-- Modals for Team Bios -->
     
     <?php foreach ($translations['members'] as $member) { ?>
         <div class="modal fade team-modal" id="<?php echo $member['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $member['id']; ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" dir="ltr">
                    <h5 class="modal-title" id="<?php echo $member['id']; ?>Label"><?php echo $member['name']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $lang === 'ar'? 'إغلاق':'close'; ?>">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo nl2br(htmlspecialchars($member['bio'])); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal"><?php echo $lang === 'ar'? 'إغلاق':'close'; ?></button>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="modal fade team-modal" id="<?php echo $translations['leader']['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $translations['leader']['id']; ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" dir="ltr">
                    <h5 class="modal-title" id="<?php echo $translations['leader']['id']; ?>Label"><?php echo $translations['leader']['name']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $lang === 'ar'? 'إغلاق':'close'; ?>">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo nl2br(htmlspecialchars($translations['leader']['bio'])); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal"><?php echo $lang === 'ar'? 'إغلاق':'close'; ?></button>
                </div>
            </div>
        </div>
    </div>
    
    
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>