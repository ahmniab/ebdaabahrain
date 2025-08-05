<?php
require_once 'services/stories-service.php';
require_once 'lang/init.php';
$stories_data = getStories($lang);
?>
<!DOCTYPE html>
<html dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>" lang="<?php echo $lang ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo htmlspecialchars($stories_data['metaDescription']); ?>">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <title><?php echo htmlspecialchars($stories_data['pageTitle']); ?></title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="css/min/main.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/min/success-stories.css">
</head>

<body>
  <?php include "navbar.php"; ?>

  <!-- <div class="container"> -->
  <!-- Modern Success Stories Section -->
  <section class="section success-stories-section" id="portfolios">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title"><?php echo htmlspecialchars($stories_data['sectionHeader']['title']); ?></h2>
        <p class="section-subtitle">
          <?php echo nl2br(htmlspecialchars($stories_data['sectionHeader']['subtitle'])); ?>
        </p>
      </div>

      <!-- Filter Controls -->
      <div class="stories-controls">
        <?php foreach ($stories_data['filterControls'] as $filter): ?>
          <?php
          $filterValue = $filter['filter'] === 'all' ? 'all' : $filter['filter'];
          ?>
          <a class="stories-filter <?php echo ((isset($filter['active'])) && $filter['active']) ? 'active' : ''; ?>"
            href="javascript:void(0);"
            data-filter="<?php echo htmlspecialchars($filterValue); ?>">
            <?php echo htmlspecialchars($filter['text']); ?>
          </a>
        <?php endforeach; ?>
      </div>

      <!-- Stories Grid -->
      <div class="row" id="portfolio">
        <?php foreach ($stories_data['stories'] as $story): ?>
          <div class="col-sm-6 col-md-4 col-lg-4 mix <?php echo htmlspecialchars($story['type']); ?>">
            <div class="story-card">
              <div class="story-image">
                <img src="<?php echo htmlspecialchars($story['image']); ?>" alt="<?php echo htmlspecialchars($story['name']); ?>">
                <?php if ($story['type'] === 'stories_video'): ?>
                  <div class="video-indicator">
                    <i class="fa fa-play"></i>
                  </div>
                <?php endif; ?>
                <a class="story-overlay" href="story-details.php?id=<?php echo htmlspecialchars($story['id']); ?>">
                  <h3 class="story-name"><?php echo htmlspecialchars($story['name']); ?></h3>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="text-center mt-5">
        <button class="btn btn-lg" id="showMoreBtn">
          <?php echo $lang === 'ar' ?
            ' لمزيد من القصص الناجحة<i class="fa fa-arrow-left mr-2"></i>'
            : ' MORE SUCCESS STORIES <i class="fa fa-arrow-right ml-2"></i>'
          ?>
        </button>
      </div>
    </div>
  </section>
  <!-- </div> -->
  <script>
    const itemList = document.getElementById('portfolio');
    const items = itemList.querySelectorAll('#portfolio .mix');
    const showLessText = '<?php echo $lang === 'ar' ? 'أقل' : 'LESS'; ?>';
  </script>
  <script src="js/main.js"></script>
  <?php include "footer.php"; ?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.stories-filter').forEach(function(btn) {
        btn.addEventListener('click', function(e) {

          document.querySelectorAll('.stories-filter').forEach(b => b.classList.remove('active'));
          btn.classList.add('active');

          const filterValue = btn.getAttribute('data-filter');
          console.log('Filter value:', filterValue);
          filterStories(filterValue);
        });
      });
    });


    // Custom filter function
    function filterStories(filterType) {
      const stories = document.querySelectorAll('.mix');
      console.log(`${stories.length} stories found`);
      stories.forEach(function(story) {
        console.log(story.classList);
        if (filterType === 'all') {
          story.style.display = 'block';
        } else {
          if (story.classList.contains(filterType)) {
            story.style.display = 'block';
          } else {
            story.style.display = 'none';
          }
        }
      });
    }
  </script>
</body>

</html>