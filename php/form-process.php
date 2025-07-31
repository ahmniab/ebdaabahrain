<?php

$errorMSG = "";
$name = "";
$mobile = "";
$email = "";
$subject = "";
$message = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG .= "Name is required ";
} else {
    $name = $_POST["name"];
}

// Mobile
if (empty($_POST["mobile"])) {
    $errorMSG .= "Mobile is required ";
} else {
    $mobile = $_POST["mobile"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Subject
if (empty($_POST["subject"])) {
    $errorMSG .= "Email is required ";
} else {
    $subject = $_POST["subject"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "info@ebdaabahrain.com";
$Subject = "New $subject Received";
$EmailFrom = "contactus@ebdaabank.com";

// prepare email body text
$Body = <<<HTML
<html>
  <head>
    <meta charset="utf-8">
    <title>تواصل معنا - بنك الإبداع البحرين</title>
  </head>
  <body style="background: linear-gradient(135deg, #f8fff8 0%, #e9f9f7 50%, #f0fdfa 100%); direction: rtl; font-family: 'Tajawal', Arial, sans-serif; font-size: 18px; color: #222; margin:0; padding:0;">
    <div style="width:100%;height:32px;"></div>
    <div style="max-width: 600px; margin: 0 auto; background: #fff; border-radius: 22px; box-shadow: 0 10px 32px 0 rgba(59,168,162,0.10); border: 1.5px solid rgba(126,181,93,0.18); overflow: hidden;">
      <div style="height: 6px; background: linear-gradient(90deg, #7EB55D, #B7C639, #5DA930, #2E8F36, #3BA8A2);"></div>
      <div style="padding: 2.5rem 2rem 2rem 2rem;">
        <h2 style="color: #2E8F36; font-weight: 700; text-align: center; margin-bottom: 2rem;">تواصل جديد</h2>
        <table cellspacing="0" cellpadding="0" style="width: 100%; border-collapse: separate; border-spacing: 0; background: #f8fff8; border-radius: 16px; overflow: hidden; box-shadow: 0 2px 8px rgba(59,168,162,0.06);">
          <tr>
            <th style="background: #e9f9f7; color: #2E8F36; font-weight: 600; padding: 16px 10px; border-bottom: 1.5px solid #e0e0e0; width: 25%; text-align: right;">الاسم<br><span style='font-size:13px;color:#888'>Name</span></th>
            <td style="padding: 16px 10px; text-align: center; color: #333;">$name</td>
          </tr>
          <tr>
            <th style="background: #e9f9f7; color: #2E8F36; font-weight: 600; padding: 16px 10px; border-bottom: 1.5px solid #e0e0e0; text-align: right;">رقم المحمول<br><span style='font-size:13px;color:#888'>Mobile</span></th>
            <td style="padding: 16px 10px; text-align: center; color: #333;">$mobile</td>
          </tr>
          <tr>
            <th style="background: #e9f9f7; color: #2E8F36; font-weight: 600; padding: 16px 10px; border-bottom: 1.5px solid #e0e0e0; text-align: right;">البريد الإلكتروني<br><span style='font-size:13px;color:#888'>Email</span></th>
            <td style="padding: 16px 10px; text-align: center; color: #333;">$email</td>
          </tr>
          <tr>
            <th style="background: #e9f9f7; color: #2E8F36; font-weight: 600; padding: 16px 10px; border-bottom: 1.5px solid #e0e0e0; text-align: right;">الغاية من الرسالة<br><span style='font-size:13px;color:#888'>Purpose</span></th>
            <td style="padding: 16px 10px; text-align: center; color: #333;">$subject</td>
          </tr>
          <tr>
            <th style="background: #e9f9f7; color: #2E8F36; font-weight: 600; padding: 16px 10px; text-align: right;">الرسالة<br><span style='font-size:13px;color:#888'>Message</span></th>
            <td style="padding: 16px 10px; text-align: center; color: #333;word-break: break-word;">$message</td>
          </tr>
        </table>
        <div style="margin-top: 2.5rem; text-align: center;">
          <span style="display: inline-block; background: linear-gradient(135deg, #5DA930, #2E8F36); color: #fff; padding: 12px 32px; border-radius: 25px; font-weight: 600; font-size: 1.1rem; letter-spacing: 1px;">بنك الإبداع البحرين</span>
        </div>
      </div>
    </div>
    <div style="width:100%;height:32px;"></div>
  </body>
</html>
HTML;


$headers = "From: " . $EmailFrom . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// send email
$success = mail($EmailTo, $Subject, $Body, $headers);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>