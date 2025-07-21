<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="موقع بنك الإبداع البحرين - طلب قرض، خدمات تمويلية، دعم المشاريع الصغيرة والمتوسطة.">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>طلب قرض - بنك الإبداع البحرين</title>

    <!-- fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/application-form.css">

</head>

<body>

    <?php include "navbar.php"; ?>
    <!-- <form action="php/application-process.php" id="applicationForm" method="post"> -->
    <!-- Application Form Section -->
    <section class="section" data-stellar-background-ratio="0.09" id="application">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"> ترغب في الحصول على قرض؟ </h2>
                <p class="section-subtitle"> ألرجاء ترك الرجاء ترك بياناتك وسيقوم أحد <br /> موضفي خدمة العملاء بالتواصل معكم في أسرع <br /> وقت ممكن لأستكمال أجرءات طلب القرض</p>
            </div>
            <div class="row ar-dir justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="application-form-card">
                        <form action="php/application-process.php" id="applicationForm" method="post" class="form-vertical" data-toggle="validator">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name_apply">الاسم الرباعي <span class="text-danger">*</span></label>
                                    <input
                                        class="form-control application-input"
                                        data-error="الرجاء قم بإدخال الاسم بالحروف فقط بدون أرقام أو رموز"
                                        id="name_apply"
                                        name="name_apply"
                                        pattern="^[A-Za-z\u0600-\u06FF\s]{3,60}$"
                                        title="الرجاء إدخال حروف فقط (عربية أو إنجليزية) بدون أرقام أو رموز، وبطول من 3 إلى 60 حرف"
                                        placeholder="الاسم الرباعي"
                                        required
                                        type="text"
                                        onkeypress="return preventNumbers(event);" />
                                    <div class="help-block with-errors"></div>
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="email">البريد الإلكتروني<span class="text-danger">*</span></label>
                                    <input
                                        class="form-control application-input"
                                        data-error="الرجاء ادخال البريد الالكترونى"
                                        id="email"
                                        name="email"
                                        placeholder="البريد الإلكتروني"
                                        required type="email" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="mobile_apply">رقم المحمول<span class="text-danger">*</span></label>
                                    <input
                                        class="form-control application-input"
                                        data-error="الرجاء ادخال رقم المحمول"
                                        id="mobile_apply"
                                        name="mobile_apply"
                                        placeholder="رقم المحمول"
                                        required
                                        type="text"
                                        onkeypress="return preventCharacters(event);" />
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="purpose_apply">الغاية من القرض<span class="text-danger">*</span></label>
                                    <input class="form-control application-input" data-error="الرجاء ادخال الغاية من القرض " id="purpose_apply" name="purpose_apply" placeholder="الغاية من القرض" required type="text" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="type_apply">نوع القرض<span class="text-danger">*</span></label>
                                <select class="form-control application-input" data-error="الرجاء اختيار نوع القرض" id="type_apply" name="type_apply" required>
                                    <option value="">اختر نوع القرض المطلوب</option>
                                    <option value="قرض الموسمي"> قرض الموسمي (100-900) دينار</option>
                                    <option value="قرض سيدتي">قرض سيدتي (200-1000) دينار</option>
                                    <option value="قرض الابداع">قرض الابداع (200-1000) دينار</option>
                                    <option value="قرض النجاح">قرض النجاح (600-1400) دينار</option>
                                    <option value="قرض الأمل">قرض الامل (1000-2400) دينار</option>
                                    <option value="قرض التميز">قرض التميز (1500-7000) دينار</option>
                                    <option value="قرض التفوق">قرض التفوق (3000-7000) دينار</option>
                                    <option value="قرض التميز بلس">قرض التميز بلس (7500-10000) دينار</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <hr>
                            <div class="text-right mb-2">
                                لمعرفة شروط تقديم الطلب يرجى
                                <a href="terms.php" target="_blank" style="color:#3BA8A2; font-size:0.98rem; text-decoration:underline;">
                                    الضغط هنا
                                </a>
                            </div>
                            <div class="text-right mb-2">
                                للتعرف على رسوم تقديم طلبات القروض ورسوم الخدمات الاخرى التي يقدمها الإبداع الرجاء
                                <a href="UserFiles/files/Service%20Fees_new%202020-Ar22.pdf#toolbar=0&amp;navpanes=0scrollbar=0" target="_blank" type="application/pdf" class="ml-1" style="color:#3BA8A2; text-decoration:underline;">
                                    الضغط هنا
                                </a>
                            </div>
                            <hr>
                            <div class="container mt-5">
                                <div class="arabic-checkbox">
                                    <input class="form-check-input" type="checkbox" id="arabicCheckbox2">
                                    <label class="form-check-label" for="arabicCheckbox2">
                                        أقر
                                    </label>
                                </div>
                                <label class="form-check-label" for="arabicCheckbox2">
                                    أننى قرأت وتفهمت كافة شروط تقديم الطلب وتعتبر موافقتي عليها بمثابة إقرار نهائي غير قابل للطعن أو الرجوع فيه مستقبلا .
                                </label>
                            </div>

                            <div id="loadingMessage" style="display:none;" class="text-center text-info my-3">
                                ⏳ جارٍ إرسال الطلب... الرجاء الانتظار.
                            </div>
                            <div class="form-group text-center mt-3">
                                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                            </div>
                            <div class="text-center mt-3">
                                <div class="g-recaptcha" data-sitekey="6LetsOQZAAAAANG2gbEt7vMzNEFNHMry4QKYdVJ5"></div>
                                <button type="submit" class="btn btn-primary btn-lg px-5" id="submitBtn">قدّم الآن</button>
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