<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer/PHPMailer.php';
require 'includes/PHPMailer/SMTP.php';
require 'includes/PHPMailer/Exception.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // تحقق من reCAPTCHA
    $captcha = $_POST['g-recaptcha-response'] ?? '';
    if (empty($captcha)) {
        echo '<div class="alert alert-danger text-center">الرجاء الضغط على زر التحقق الأمني أدناه</div>';
        exit;
    }

    $secretKey = "6LetsOQZAAAAAHcz4IW80aXL9bjANt2IQlRKsNnP";
    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
    $responseData = json_decode($verifyResponse);

    if (!$responseData->success) {
        echo '<div class="alert alert-danger text-center">فشل التحقق من reCAPTCHA. حاول مرة أخرى.</div>';
        exit;
    }

    // استقبال البيانات
    $name = trim($_POST['name_job'] ?? '');
    $email = trim($_POST['email_job'] ?? '');
    $message = trim($_POST['message_job'] ?? '');
    $job_type = $_POST['job_type'] ?? 'غير محدد';
    $custom_position = $_POST['custom_position'] ?? '';

    $job_label = match ($job_type) {
        'general' => "تقديم عام - غير محدد",
        'job1' => "أخصائي تحصيل",
        'job2' => "أخصائي إقراض",
        default => $custom_position ?: "غير محدد"
    };

    // تهيئة البريد
    $mail = new PHPMailer(true);

    try {
        $mail->setFrom($email, $name);
        $mail->addAddress('HR@ebdaabahrain.com');
        $mail->Subject = 'طلب تقديم وظيفة من الموقع';
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $mail->Body = "
            <h3>طلب تقديم جديد</h3>
            <p><strong>الاسم:</strong> $name</p>
            <p><strong>البريد الإلكتروني:</strong> $email</p>
            <p><strong>الوظيفة:</strong> $job_label</p>
            <p><strong>الرسالة:</strong><br>$message</p>
        ";

        // إرفاق الملف إذا تم رفعه
        if (isset($_FILES['file_attach']) && $_FILES['file_attach']['error'] === 0) {
            $tmpName = $_FILES['file_attach']['tmp_name'];
            $originalName = basename($_FILES['file_attach']['name']);
            $fileMime = mime_content_type($tmpName);
            $allowedMimeTypes = [
                'application/pdf',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            ];
            if (in_array($fileMime, $allowedMimeTypes)) {
                $mail->addAttachment($tmpName, $originalName);
            } else {
                echo '<div class="alert alert-danger text-center">❌ نوع الملف غير مدعوم. يُسمح فقط بملفات PDF أو Word.</div>';
                exit;
            }
        }

        $mail->send();
        echo '<div class="alert alert-success text-center">✅ تم إرسال الطلب بنجاح مع إرفاق السيرة الذاتية</div>';

    } catch (Exception $e) {
        echo '<div class="alert alert-danger text-center">❌ حدث خطأ أثناء إرسال الطلب: ' . $mail->ErrorInfo . '</div>';
    }
}
?>
