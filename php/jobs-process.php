<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('طريقة الإرسال غير مسموحة');
}

// تحقق reCAPTCHA

$captcha = $_POST['g-recaptcha-response'] ?? '';
if ($captcha === '') {
    exit('<div class="alert alert-danger text-center">الرجاء التحقق الأمني</div>');
}
$secretKey = "6LetsOQZAAAAAHcz4IW80aXL9bjANt2IQlRKsNnP";
$verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
$responseData = json_decode($verifyResponse);
if (!$responseData->success) {
    exit('<div class="alert alert-danger text-center">فشل التحقق من reCAPTCHA</div>');
}

// جمع البيانات
$name = trim($_POST['name_job'] ?? '');
$email = trim($_POST['email_job'] ?? '');
$message = trim($_POST['message_job'] ?? '');
$job_type = $_POST['job_type'] ?? '';
$custom_position = trim($_POST['custom_position'] ?? '');

$job_label = match ($job_type) {
    'job1' => 'أخصائي تحصيل',
    'job2' => 'أخصائي إقراض',
    'general' => 'تقديم عام - غير محدد',
    default => $custom_position ?: 'غير محدد'
};

$body = <<<HTML
<html dir="rtl" lang="ar">
<head><meta charset="utf-8"></head>
<body style="background:#f6f8fa;margin:0;padding:16px;font-family:Tahoma,Arial,sans-serif;color:#1f3332;">
  <table role="presentation" cellpadding="0" cellspacing="0" border="0"
         style="width:100%;max-width:720px;margin:auto;background:#ffffff;border:1px solid #e9ecef;border-radius:8px;overflow:hidden;">
    <tr>
      <td colspan="2" style="background:#2ecc71;color:#fff;text-align:center;padding:14px 10px;font-size:20px;font-weight:bold;">
        طلب توظيف جديد
      </td>
    </tr>

    <tr>
      <td style="width:35%;background:#eef7f0;padding:16px 18px;font-size:14px;text-align:right;direction:rtl;">
        <div style="font-weight:bold;">الاسم</div>
        <div style="font-size:12px;color:#6c757d;direction:ltr;text-align:left;">Name</div>
      </td>
      <td style="width:65%;background:#f3f9f5;padding:16px 18px;font-size:16px;text-align:right;direction:rtl;">$name</td>
    </tr>

    <tr>
      <td style="background:#eef7f0;padding:16px 18px;font-size:14px;text-align:right;direction:rtl;">
        <div style="font-weight:bold;">البريد الإلكتروني</div>
        <div style="font-size:12px;color:#6c757d;direction:ltr;text-align:left;">Email</div>
      </td>
      <td style="background:#f3f9f5;padding:16px 18px;font-size:16px;text-align:right;direction:rtl;">$email</td>
    </tr>

    <tr>
      <td style="background:#eef7f0;padding:16px 18px;font-size:14px;text-align:right;direction:rtl;">
        <div style="font-weight:bold;">الوظيفة</div>
        <div style="font-size:12px;color:#6c757d;direction:ltr;text-align:left;">Job</div>
      </td>
      <td style="background:#f3f9f5;padding:16px 18px;font-size:16px;text-align:right;direction:rtl;">$job_label</td>
    </tr>
    <tr>
      <td style="background:#eef7f0;padding:16px 18px;font-size:14px;text-align:right;direction:rtl;">
        <div style="font-weight:bold;">المسمى الوظيفي</div>
        <div style="font-size:12px;color:#6c757d;direction:ltr;text-align:left;">Custom Position</div>
      </td>
      <td style="background:#f3f9f5;padding:16px 18px;font-size:16px;text-align:right;direction:rtl;">$custom_position</td>
    </tr>
    <tr>
      <td style="background:#eef7f0;padding:16px 18px;font-size:14px;text-align:right;direction:rtl;">
        <div style="font-weight:bold;">الرسالة</div>
        <div style="font-size:12px;color:#6c757d;direction:ltr;text-align:left;">Message</div>
      </td>
      <td style="background:#f3f9f5;padding:16px 18px;font-size:16px;line-height:1.7;text-align:right;direction:rtl;">$message</td>
    </tr>

    <tr>
      <td colspan="2" style="padding:12px;background:#fafafa;border-top:1px solid #e9ecef;font-size:12px;color:#6c757d;text-align:center;direction:rtl;">
        هذه رسالة آلية من نموذج التوظيف في موقع إبداع البحرين
      </td>
    </tr>
  </table>
</body>
</html>
HTML;

// رفع الملف
$cvPath = '';
$uploadOk = true;
$uploadDir = __DIR__ . '/uploads/';
$maxFileSize = 2 * 1024 * 1024;
$allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

if (isset($_FILES['file_attach']) && $_FILES['file_attach']['error'][0] === 0) {
    $tmp = $_FILES['file_attach']['tmp_name'][0];
    $originalName = $_FILES['file_attach']['name'][0];
    $mime = mime_content_type($tmp);
    $size = $_FILES['file_attach']['size'][0];

    if (!in_array($mime, $allowedTypes) || $size > $maxFileSize) {
        $uploadOk = false;
    }

    if ($uploadOk) {
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
        $nameFile = time() . '-' . preg_replace("/[^a-zA-Z0-9.]/", "_", $originalName);
        $cvPath = $uploadDir . $nameFile;
        move_uploaded_file($tmp, $cvPath);
    }
}

// إعداد الإيميل
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'mail.ebdaabahrain.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hr@ebdaabahrain.com';
    $mail->Password = 'Ebdaa@2024..';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';

    $mail->setFrom($email, $name ?: 'متقدم مجهول');
    $mail->addAddress('HR@ebdaabahrain.com');

    if ($cvPath && file_exists($cvPath)) {
        $mail->addAttachment($cvPath);
    }

    $mail->isHTML(true);
    $mail->Subject = 'طلب تقديم وظيفة من الموقع';
    $mail->Body = $body;

    $mail->send();

    echo '<script>
        alert("✅ تم إرسال الطلب بنجاح");
        if (document.getElementById("jobsForm")) document.getElementById("jobsForm").reset();
        setTimeout(() => {
            window.location.href = "/";
        }, 2000);
    </script>';

} catch (Exception $e) {
    echo '<div class="alert alert-danger text-center">❌ فشل الإرسال: ' . htmlspecialchars($mail->ErrorInfo) . '</div>';
}
?>
