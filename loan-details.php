<?php
require_once 'lang/init.php';
require_once 'services/loans-service.php';
$translations = GetTranslations('index');

$lang = isset($_GET['lang']) ? $_GET['lang'] : (isset($lang) ? $lang : 'ar');
$id = isset($_GET['id']) ? $_GET['id'] : null;
$loan = $id ? getLoanById($id, $lang) : null;

?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= $dir ?>">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $loan ? htmlspecialchars($loan['title']) : $translations['ebda-bh'] ?></title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/min/main.css">
  <link rel="stylesheet" href="css/min/loan-details.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" />
</head>

<body>
  <?php include 'navbar.php'; ?>
  <main>
    <div class="loan-details-container">
      <?php if ($loan) { ?>
        <div class="loan-title"> <?= htmlspecialchars($loan['title']) ?> </div>
        <?php if (!empty($loan['image'])) { ?>
          <div style="text-align:center; margin-bottom: 18px;">
            <img loading="lazy" src="<?= htmlspecialchars($loan['image']) ?>" alt="<?= htmlspecialchars($loan['title']) ?>" style="max-width: 220px; width: 100%; height: auto; border-radius: 18px; box-shadow: 0 2px 16px rgba(46,143,54,0.08);" />
          </div>
        <?php } ?>
        <!-- <div class="loan-description"> <?= htmlspecialchars($loan['description']) ?> </div> -->
        <div class="loan-details-body"> <?= nl2br(htmlspecialchars($loan['details'])) ?> </div>
        <div class="loan-details-section">
          <h3><?= $translations['loan-terms'] ?? ($lang === 'ar' ? 'شروط القرض:' : 'Eligibility Criteria:') ?></h3>
          <ul>
            <?php foreach ($loan['terms'] as $term) { ?>
              <li><?= htmlspecialchars($term) ?></li>
            <?php } ?>
          </ul>
        </div>
        <div class="loan-details-section">
          <h3><?= $translations['reqs'] ?? ($lang === 'ar' ? 'المستندات المطلوبة:' : 'Required Documents:') ?></h3>
          <ul>
            <?php foreach ($loan['requirements'] as $req) { ?>
              <li><?= htmlspecialchars($req) ?></li>
            <?php } ?>
          </ul>
        </div>
        <a class="loan-apply-btn" href="application-form.php">
          <i class="fa fa-paper-plane"></i> <?= $translations['apply-now'] ?? ($lang === 'ar' ? 'قدم الآن' : 'Apply Now') ?>
        </a>
        <a class="btn btn-outline-info" href="index.php" style="margin-top: 20px;">
          <i class="fa-solid fa-arrow-right"></i> 
          <?php echo $lang === 'ar' ? 'الرجوع للصفحه الرئيسية' : 'back to main page'; ?>
        </a>
      <?php } else { ?>
        <div class="loan-title" style="color:#c00;">
          <?= $lang === 'ar' ? 'القرض غير موجود أو الرقم غير صحيح.' : 'Loan not found or invalid ID.' ?>
        </div>
      <?php } ?>
    </div>
  </main>
  <?php include 'footer.php'; ?>
</body>

</html>