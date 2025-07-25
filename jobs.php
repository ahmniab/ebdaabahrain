<?php
require_once 'lang/init.php';
$translations = getTranslations(basename(__FILE__, '.php'));
?>
<!DOCTYPE html>
<html dir="<?php echo $dir; ?>" lang="<?php echo $lang; ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title><?php echo $translations['page_title']; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/jobs.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" >
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section class="jobs-section mt-5 mb-5">
        <h2><i class="fa fa-briefcase ml-2"></i><?php echo $translations['title']; ?></h2>
        <div class="container">
            <div class="col-md-12 mb-4 mb-md-0">
                <div id="accordion">
                    <?php foreach($translations['jobs'] as $job){ ?>
                        <button name="<?php echo $job['id']; ?>" type="button" class="collapsible"><?php echo $job['title']; ?></button>
                        <div class="content">
                            <?php foreach($job['sections'] as $section){ ?>
                                <?php if($section['type'] == 'paragraph'){ ?>
                                    <p><strong><?php echo $section['title']; ?>:</strong><br><?php echo $section['content']; ?></p>
                                <?php }elseif($section['type'] == 'list'){ ?>
                                    <p><strong><?php echo $section['title']; ?>:</strong></p>
                                    <ol>
                                        <?php foreach($section['content'] as $item){ ?>
                                            <li><?php echo $item; ?></li>
                                        <?php } ?>
                                    </ol>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                
            </div>
            <div class="row ar-txt">
                <div class="col-md-12">
                    <div class="contact-form">
                        <form method="POST" id="jobsForm" action="php/jobs-process.php" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="name_job" class="col-sm-3 col-form-label"><?php echo $translations['form']['name']; ?></label>
                                <div class="col-sm-9">
                                    <input type="text" id="name_job" name="name_job" class="form-control" placeholder="<?php echo $translations['form']['name_palceholder']; ?>" required pattern="[A-Za-z؀-ۿ\s]{3,30}" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_job" class="col-sm-3 col-form-label"><?php echo $translations['form']['email']; ?></label>
                                <div class="col-sm-9">
                                    <input type="email" id="email_job" name="email_job" class="form-control" placeholder="<?php echo $translations['form']['email_palceholder']; ?>" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cv_job" class="col-sm-3 col-form-label"><?php echo $translations['form']['cv']; ?></label>
                                <div class="col-sm-9">
                                    <input type="file" id="cv_job" name="file_attach[]" class="form-control" accept=".pdf" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="custom_position" class="col-sm-3 col-form-label"><?php echo $translations['form']['jop_name']; ?></label>
                                <div class="col-sm-9">
                                    <input type="text" id="custom_position" name="custom_position" class="form-control" placeholder="<?php echo $translations['form']['jop_name_palceholder']; ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="job_type" class="col-sm-3 col-form-label"><?php echo $translations['form']['job_type']; ?></label>
                                <div class="col-sm-9">
                                    <select id="job_type" name="job_type" class="form-control" required>
                                        <option value=""><?php echo $translations['form']['jop_type_palceholder']; ?></option>
                                        <?php foreach($translations['form']['jop_type_options'] as $key => $value){ ?>
                                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="message_job" name="message_job" class="form-control" rows="5" placeholder="<?php echo $translations['form']['msg_placeholder']; ?>"></textarea>
                            </div>
                            <div id="alert" style="display:none" class="alert alert-danger" role="alert">
                                <p>الرجاء الضغط على زر التحقق الأمني أدناه</p>
                            </div>
                            <div class="form-group text-center">
                                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                            </div>
                            <div class="text-center">
                                <div class="g-recaptcha" data-sitekey="6LetsOQZAAAAANG2gbEt7vMzNEFNHMry4QKYdVJ5"></div>
                                <button type="submit" class="btn btn-primary btn-lg"><?php echo $translations['form']['submit']; ?></button>
                            </div>
                            <div id="msgSubmit-job" class="h3 text-center hidden"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
    <script>
        // Accordion functionality
        document.querySelectorAll('.collapsible').forEach(function(btn) {
            btn.addEventListener('click', function() {
                this.classList.toggle('active');
                var content = this.nextElementSibling;
                if (content.style.display === 'block') {
                    content.style.display = 'none';
                } else {
                    content.style.display = 'block';
                }
            });
        });
        // Bootstrap validation for jobs form
        (function() {
            'use strict';
            var form = document.getElementById('jobsForm');
            if (form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            }
        })();
    </script>
    <script>
  document.getElementById("job_type").addEventListener("change", function() {
    const value = this.value;
    const section = document.querySelector(`[data-job="${value}"]`);
    if (section) {
      document.querySelectorAll('#jobAccordion .collapse').forEach(el => el.classList.remove('show'));
      const targetId = section.querySelector('.collapse').id;
      $('#' + targetId).collapse('show');
      section.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
      });
    }
  });
</script>
</body>

</html>