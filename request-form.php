<?php
// request-form.php
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تقديم طلب جديد | بنك الإبداع البحرين</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" async defer>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <style>
        body {
            background: linear-gradient(135deg, #f8fff8 0%, #e9f9f7 50%, #f0fdfa 100%);
            color: #222;
        }

        .form-section {
            background: rgba(255, 255, 255, 0.97);
            border-radius: 22px;
            box-shadow: 0 10px 32px 0 rgba(59, 168, 162, 0.10);
            padding: 2.5rem 2rem 2rem 2rem;
            margin: 40px auto;
            max-width: 540px;
            border: 1.5px solid rgba(126, 181, 93, 0.18);
            position: relative;
            overflow: hidden;
        }

        .form-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #7EB55D, #B7C639, #5DA930, #2E8F36, #3BA8A2);
            border-radius: 22px 22px 0 0;
            z-index: 2;
        }

        .form-section h2 {
            color: #2E8F36;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
            position: relative;
            z-index: 3;
        }

        .form-label {
            color: #2E8F36;
            font-weight: 500;
            position: relative;
            z-index: 3;
        }

        .form-control,
        .custom-file-input {
            background: rgba(255, 255, 255, 0.95);
            color: #2E8F36;
            border: 2px solid rgba(126, 181, 93, 0.3);
            border-radius: 14px;
            font-size: 1rem;
            transition: all 0.3s ease;
            /* font-family: 'Tajawal', sans-serif; */
        }

        .form-control:focus,
        .custom-file-input:focus {
            background: #fff;
            color: #2E8F36;
            border-color: #3BA8A2;
            box-shadow: 0 0 0 3px rgba(59, 168, 162, 0.10);
        }

        .custom-file-label {
            background: rgba(255, 255, 255, 0.95);
            color: #3BA8A2;
            border: 2px solid rgba(126, 181, 93, 0.3);
            border-radius: 14px;
            font-size: 1rem;
            /* font-family: 'Tajawal', sans-serif; */
        }

        .btn-primary {
            background: linear-gradient(135deg, #5DA930, #2E8F36);
            border: none;
            color: #fff;
            font-weight: 700;
            border-radius: 14px;
            padding: 0.75rem 2.5rem;
            font-size: 1.15rem;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 8px 25px rgba(46, 143, 54, 0.18);
            position: relative;
            z-index: 3;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background: linear-gradient(135deg, #2E8F36, #3BA8A2);
            color: #fff;
            box-shadow: 0 12px 35px rgba(46, 143, 54, 0.22);
        }

        .form-text {
            color: #3BA8A2;
            position: relative;
            z-index: 3;
        }

        .is-invalid {
            border-color: #e57373 !important;
        }

        .invalid-feedback {
            color: #e57373;
        }

        @media (max-width: 600px) {
            .form-section {
                padding: 1.2rem 0.5rem;
            }
        }
    </style>
</head>

<body>
    <?php //include 'navbar.php'; ?>
    <section class="form-section mt-5 mb-5">
        <h2><i class="fa fa-file-alt ml-2"></i>تقديم طلب جديد</h2>
        <div class="container">
            <form id="requestForm" enctype="multipart/form-data" novalidate>
                <div class="form-group">
                    <label for="fullName" class="form-label">الاسم الكامل<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullName" name="fullName" required pattern="[A-Za-z\u0600-\u06FF\s]{3,50}" maxlength="50" placeholder="أدخل الاسم الكامل">
                    <div class="invalid-feedback">يرجى إدخال الاسم الكامل (3-50 حرف).</div>
                </div>
                <div class="form-group">
                    <label for="idNumber" class="form-label">رقم الهوية<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="idNumber" name="idNumber" required pattern="[0-9]{6,15}" maxlength="15" placeholder="أدخل رقم الهوية">
                    <div class="invalid-feedback">يرجى إدخال رقم هوية صحيح (6-15 رقم).</div>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">البريد الإلكتروني<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" required maxlength="60" placeholder="example@email.com">
                    <div class="invalid-feedback">يرجى إدخال بريد إلكتروني صحيح.</div>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">رقم الهاتف (اختياري)</label>
                    <input type="text" class="form-control" id="phone" name="phone" pattern="[0-9\-\+]{8,20}" maxlength="20" placeholder="أدخل رقم الهاتف">
                    <div class="invalid-feedback">يرجى إدخال رقم هاتف صحيح.</div>
                </div>
                <div class="form-group">
                    <label for="requestType" class="form-label">نوع الطلب<span class="text-danger">*</span></label>
                    <select class="form-control" id="requestType" name="requestType" required>
                        <option value="">اختر نوع الطلب</option>
                        <option value="debt-certificate">استخراج شهادة مديونية</option>
                        <option value="service">طلب خدمة أخرى</option>
                        <option value="inquiry">استفسار</option>
                        <option value="suggestion">اقتراح</option>
                    </select>
                    <div class="invalid-feedback">يرجى اختيار نوع الطلب.</div>
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">وصف مختصر للطلب<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="description" name="description" rows="3" required maxlength="300" placeholder="يرجى كتابة وصف مختصر للطلب (بحد أقصى 300 حرف)"></textarea>
                    <div class="invalid-feedback">يرجى كتابة وصف مختصر للطلب.</div>
                </div>
                <div class="form-group">
                    <label for="supportDocs" class="form-label">رفع المستندات الداعمة (اختياري)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="supportDocs" name="supportDocs" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">
                        <label class="custom-file-label" for="supportDocs">اختر ملفًا...</label>
                    </div>
                    <small class="form-text">يسمح بالملفات: PDF, JPG, PNG, DOC (حد أقصى 5MB).</small>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary btn-lg px-5">إرسال الطلب</button>
                </div>
            </form>
        </div>
    </section>
    <?php //include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        // Custom file input label
        $(document).on('change', '.custom-file-input', function(event) {
            var inputFile = event.currentTarget;
            $(inputFile).parent().find('.custom-file-label').html(inputFile.files[0] ? inputFile.files[0].name : 'اختر ملفًا...');
        });
        // Bootstrap validation
        (function() {
            'use strict';
            var form = document.getElementById('requestForm');
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        })();
    </script>
</body>

</html>