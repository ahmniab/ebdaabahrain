<?php

$errorMSG = "";

// NAME
if (empty($_POST["name_apply"])) {
    $errorMSG .= "Name is required \n";
} else {
    $name = $_POST["name_apply"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "email is required \n";
} else {
    $email_apply = $_POST["email"];
}

// MOBILE
if (empty($_POST["mobile_apply"])) {
    $errorMSG .= "Mobile is required \n";
} else {
    $mobile = $_POST["mobile_apply"];
}

// PURPOSE
if (empty($_POST["purpose_apply"])) {
    $errorMSG .= "purpose is required \n";
} else {
    $purpose_apply = $_POST["purpose_apply"];
}

// TYPE
if (empty($_POST["type_apply"])) {
    $errorMSG .= "type is required \n";
} else {
    $type_apply = $_POST["type_apply"];
}

if ($errorMSG != "") {
    echo $errorMSG;
    exit();
}


$EmailTo = "loan@ebdaabahrain.com";
$Subject = "New Application Received";
$email = "Applicant@ebdaabahrain.com";

// prepare email body text
$Body = <<<HTML
<html>
  <head>
    <meta charset="utf-8">
    <title>تفاصيل طلب القرض - بنك الإبداع البحرين</title>
  </head>
  <body style="background: linear-gradient(135deg, #f8fff8 0%, #e9f9f7 50%, #f0fdfa 100%); direction: rtl; font-family: 'Tajawal', Arial, sans-serif; font-size: 18px; color: #222; margin:0; padding:0;">
    <div style="width:100%;height:32px;"></div>
    <div style="max-width: 600px; margin: 0 auto; background: #fff; border-radius: 22px; box-shadow: 0 10px 32px 0 rgba(59,168,162,0.10); border: 1.5px solid rgba(126,181,93,0.18); overflow: hidden;">
      <div style="height: 6px; background: linear-gradient(90deg, #7EB55D, #B7C639, #5DA930, #2E8F36, #3BA8A2);"></div>
      <div style="padding: 2.5rem 2rem 2rem 2rem;">
        <h2 style="color: #2E8F36; font-weight: 700; text-align: center; margin-bottom: 2rem;">طلب قرض جديد</h2>
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
            <td style="padding: 16px 10px; text-align: center; color: #333;">$email_apply</td>
          </tr>
          <tr>
            <th style="background: #e9f9f7; color: #2E8F36; font-weight: 600; padding: 16px 10px; border-bottom: 1.5px solid #e0e0e0; text-align: right;">الغاية من القرض<br><span style='font-size:13px;color:#888'>Purpose</span></th>
            <td style="padding: 16px 10px; text-align: center; color: #333;">$purpose_apply</td>
          </tr>
          <tr>
            <th style="background: #e9f9f7; color: #2E8F36; font-weight: 600; padding: 16px 10px; text-align: right;">نوع القرض<br><span style='font-size:13px;color:#888'>Loan Type</span></th>
            <td style="padding: 16px 10px; text-align: center; color: #333;">$type_apply</td>
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

// echo $Body;
// exit();

$headers = "From: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// send email
$success = mail($EmailTo, $Subject, $Body, $headers);

// redirect to success page
if ($success) {
    header('Location: thank-you.html');
} else {
    echo "Something went wrong :(";
}
exit();