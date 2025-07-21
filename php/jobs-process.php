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
if (empty($captcha)) {
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
    $mail->Body = "
        <h3>طلب تقديم جديد</h3>
        <p><strong>الاسم:</strong> $name</p>
        <p><strong>البريد الإلكتروني:</strong> $email</p>
        <p><strong>الوظيفة:</strong> $job_label</p>
        <p><strong>الرسالة:</strong><br>" . nl2br($message) . "</p>";

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
