<?php
require_once 'lang/init.php';
$translations = GetTranslations(basename(__FILE__, '.php'));
?>
<!DOCTYPE html>
<html dir="<?php echo $dir; ?>" lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $translations['meta-description']; ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title><?php echo $translations['title']; ?></title>

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/min/main.css">
    <link rel="stylesheet" href="css/min/application-form.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>

<body>

    <?php include "navbar.php"; ?>
    <!-- <form action="php/application-process.php" id="applicationForm" method="post"> -->
    <!-- Application Form Section -->
    <section class="section" data-stellar-background-ratio="0.09" id="application">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"> <?php echo $translations['section-title']; ?> </h2>
                <p class="section-subtitle"> <?php echo $translations['section-subtitle']; ?> </p>
            </div>
            <div class="row ar-dir justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="application-form-card">
                        <form action="php/application-process.php" id="applicationForm" method="post" class="form-vertical" data-toggle="validator">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name_apply"> <?php echo $translations['name-apply']; ?> <span class="text-danger">*</span></label>
                                    <input
                                        class="form-control application-input"
                                        data-error="<?php echo $translations['name-apply-error']; ?>"
                                        id="name_apply"
                                        name="name_apply"
                                        pattern="^[A-Za-z\u0600-\u06FF\s]{3,60}$"
                                        title="<?php echo $translations['name-apply-title']; ?>"
                                        placeholder="<?php echo $translations['name-apply-placeholder']; ?>"
                                        required
                                        type="text"
                                        onkeypress="return preventNumbers(event);" />
                                    <div class="help-block with-errors"></div>
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="email"> <?php echo $translations['email']; ?> <span class="text-danger">*</span></label>
                                    <input
                                        class="form-control application-input"
                                        data-error="<?php echo $translations['email-error']; ?>"
                                        id="email"
                                        name="email"
                                        placeholder="<?php echo $translations['email-placeholder']; ?>"
                                        required type="email" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="mobile_apply"> <?php echo $translations['mobile-apply']; ?> <span class="text-danger">*</span></label>
                                    <input
                                        class="form-control application-input"
                                        data-error="<?php echo $translations['mobile-apply-error']; ?>"
                                        id="mobile_apply"
                                        name="mobile_apply"
                                        placeholder="<?php echo $translations['mobile-apply-placeholder']; ?>"
                                        required
                                        type="text"
                                        onkeypress="return preventCharacters(event);" />
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="purpose_apply"> <?php echo $translations['purpose-apply']; ?> <span class="text-danger">*</span></label>
                                    <select class="form-control application-input" data-error="<?php echo $translations['purpose-apply-error']; ?>" id="purpose_apply" name="purpose_apply" placeholder="<?php echo $translations['purpose-apply-placeholder']; ?>" required>
                                        <option value=""><?php echo $translations['purpose-apply-placeholder']; ?></option>
                                        <?php foreach ($translations['purpose-apply-options'] as $key => $value) { ?>
                                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="type_apply"> <?php echo $translations['type-apply']; ?> <span class="text-danger">*</span></label>
                                <select class="form-control application-input" data-error="<?php echo $translations['type-apply-error']; ?>" id="type_apply" name="type_apply" required>
                                    <option value=""><?php echo $translations['type-apply-placeholder']; ?></option>
                                    <?php foreach ($translations['type-apply-options'] as $key => $value) { ?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                    <?php } ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <hr>
                            <div class="mb-2">
                                <?php if($lang == 'ar'){ ?>
                                لمعرفة شروط تقديم الطلب يرجى
                                <?php } else{ ?>
                                    To view the terms and conditions, please
                                    <?php } ?>
                                <a href="terms.php" target="_blank" style="color:#3BA8A2; font-size:0.98rem; text-decoration:underline;">
                                    <?php if($lang == 'ar'){ ?>
                                        الضغط هنا
                                    <?php } else{ ?>
                                        Click here
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="mb-2">
                                <?php if($lang == 'ar'){ ?>
                                    للتعرف على رسوم تقديم طلبات القروض ورسوم الخدمات الاخرى التي يقدمها الإبداع الرجاء
                                <?php } else{ ?>
                                    To know about loan application fees and fees for other services offered by Elbdaa, please
                                <?php } ?>
                                <a href="UserFiles/files/Service%20Fees_new%202020-Ar22.pdf#toolbar=0&amp;navpanes=0scrollbar=0" target="_blank" type="application/pdf" class="ml-1" style="color:#3BA8A2; text-decoration:underline;">
                                    <?php if($lang == 'ar'){ ?>
                                        الضغط هنا
                                    <?php } else{ ?>
                                        Click here
                                    <?php } ?>
                                </a>
                            </div>
                            <hr>
                            <div class="container mt-5">
                                <div class="arabic-checkbox">
                                    <input class="form-check-input" type="checkbox" id="arabicCheckbox2">
                                    <label class="form-check-label" for="arabicCheckbox2">
                                     <strong>
                                        <?php
                                            if($lang == 'ar'){ ?>
                                           أقر
                                           <?php } else{ ?>
                                            I acknowledge
                                           <?php } ?>
                                        </strong>
                                        <?php if($lang == 'ar'){ ?>
                                            أننى قرأت وتفهمت كافة شروط تقديم الطلب وتعتبر موافقتي عليها بمثابة إقرار نهائي غير قابل للطعن أو الرجوع فيه مستقبلا .
                                        <?php } else{ ?>
                                             that I have read and understood all the terms and conditions of Loan Applications and will not challenge this acknowledgement or revoke it in the future.
                                            <?php } ?>
                                    </label>
                                </div>
                                <label class="form-check-label" for="arabicCheckbox2">
                                </label>
                            </div>

                            <div id="loadingMessage" style="display:none;" class="text-center text-info my-3">
                                <?php if($lang == 'ar'){ ?>
                                    ⏳ جارٍ إرسال الطلب... الرجاء الانتظار.
                                <?php } else{ ?>
                                    Sending the request... please wait.
                                <?php } ?>
                            </div>
                            <div class="form-group text-center mt-3">
                                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                            </div>
                            <div class="text-center mt-3">
                                <div class="g-recaptcha" data-sitekey="6LetsOQZAAAAANG2gbEt7vMzNEFNHMry4QKYdVJ5"></div>
                                <button type="submit" class="btn btn-primary btn-lg px-5" id="submitBtn">
                                    <?php if($lang == 'ar'){ ?>
                                        قدّم الآن
                                    <?php } else{ ?>
                                        Submit
                                    <?php } ?>
                                </button>
                            </div>
                            <div class="h3 text-center hidden" id="msgSubmit-apply"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Application Form Section End -->
    <!-- Google reCAPTCHA + إرسال تفاعلي -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function verifyRecaptchaCallback(response) {
            document.getElementById('g-recaptcha-response').value = response;
        }

        function expiredRecaptchaCallback() {
            document.getElementById('g-recaptcha-response').value = '';
        }

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('#jobsForm');
            const loading = document.getElementById('loadingMessage');
            const submitBtn = document.getElementById('submitBtn');

            if (form && loading && submitBtn) {
                form.addEventListener('submit', function() {
                    loading.style.display = 'block';
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '📤 يتم الإرسال...';
                });
            }
        });
    </script>
    <script src="js/application-form-validator.js"></script>

    <?php include "footer.php"; ?>
</body>

</html>