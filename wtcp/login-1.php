<?php
include ('includes/header.php');
//////////////////////////////////////////////////
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<title>تسجيل دخول</title>
<link href="images/cpstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="95%" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>
    <td bgcolor="#333333"><table width="100%" border="0" align="center" cellpadding="1" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td align="center"><?php
switch (@$_GET['action']) {

default:
if ($authorization == '1') {
echo "
<div align='center' class='smalltext'>
بياناتنا تظهر بأنك قد سجلت دخول مسبقا<br />
<a href='index.php?'><span class='smalltext'>أذهب للوحة التحكم</span></a><br />
<a href='login.php?action=logout'> <span class='smalltext'>سجل خروج</span></a>
</div>
<META HTTP-EQUIV=Refresh CONTENT=2;URL=index.php > 
";

print "<script language=\"JavaScript\">";
print "window.location = 'index.php' ";
print "</script>";

} else { 

$login_code = md5(uniqid(rand(), TRUE)); 
@$_SESSION['sess_login_code'] = $login_code;
////////////// login_box //////////////
?>
            <br />
            <span class="msg">تسجيل الدخول ضروري</span><span class="text"><br />
            </span><br />
            <table width='350' border='0' align='center' cellpadding='1' dir="rtl">
              <tr>
                <td><form action='login.php?action=log' method='post' name='login' id='login'>
                    <table width='100%' border='0' cellpadding='1'>
                      <tr>
                        <td width='28%' class="smalltext"><strong>الأسم المستخدم </strong></td>
                        <td width='72%' align="right"><input name='username' type='text' class="smalltext" id='username' /></td>
                      </tr>
                      <tr>
                        <td class="smalltext"><strong>الرقم السري </strong></td>
                        <td align="right"><input name='password' type='password' class="smalltext" id='password' /></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center" class="smalltext"><input type='submit' name='Submit' value='تسجيل دخول' /></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center"><a href='login.php?action=lost'>فقدت الرقم السري </a></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input name='login_code' type='hidden' id='login_code' value='<?php echo $login_code;?>' />
                            <input name='refer' type='hidden' id='refer' value='<?php echo @$_SERVER['REQUEST_URI'];?>' /></td>
                      </tr>
                    </table>
                </form></td>
              </tr>
            </table>
          <?php

} /// end else logged in
//////
break; 
////
case "log"; 
//////////////////////
if ($authorization == '1') {
echo "
بياناتنا تظهر بأنك قد سجلت دخول مسبقا<br />
<a href='index.php?'><span class='smalltext'>أذهب للوحة التحكم</span></a><br />
<a href='login.php?action=logout'> <span class='smalltext'>سجل خروج</span></a>
";
/* include ("login.php");  Redirect browser */
} else { 
///////
if (!isset($_POST['username']) || $_POST['username'] == "") {
echo "<div align='center' class='error'> الرجاء كتابة أسم المستخدم <div>"; 
}
elseif (!isset($_POST['password']) || $_POST['password'] == "" ) {
echo "<div align='center' class='error'>الرجاء كتابة رقمك السري <div>";
}
elseif (!isset ($_SESSION['sess_login_code']) && empty($_SESSION['sess_login_code'])) 
{
echo "<div align='center' class='error'> محاولة تسجيل دخول غير شرعية <div>";
}
elseif (!isset ($_SESSION['sess_login_code']) && $_SESSION['sess_login_code'] != $_POST['login_code']) 
{
echo "<div align='center' class='error'> محاولة تسجيل دخول غير شرعية <div>";
}
else{ 
// unset
unset($_SESSION['sess_login_code']);
////////////////
$password = md5($_POST['password']);
//
$sql=mysql_query("select * from admin where username='{$_POST['username']}' and password='$password'");
$num=mysql_num_rows($sql);
if($num==1){
while($row=mysql_fetch_array($sql)){
$login_adminid = $row['adminid'];
$_SESSION['adminid']= $row['adminid'];
$_SESSION['useremail']= $row['useremail'];
$_SESSION['fname']= $row['fname'];
$_SESSION['username']= $row['username'];
/// insert function
session_login($login_adminid,$session_time,$session_id);
/////
echo"
<div align='center' class='text'>
  <p>&nbsp;</p>
  <p><strong>
  يتم تسجيل دخولك .. الرجاء الإنتظار قليلا لتحويلك للوحة التحكم
  </strong>
  </p>
</div>
";
///// Begin refer
if (isset($_POST['refer'])) {
echo"<META HTTP-EQUIV=Refresh CONTENT=2;URL='index.php?'>";
}else {
echo"<META HTTP-EQUIV=Refresh CONTENT=2;URL='index.php?'>";
}
///// END refer
}
}
elseif($num>1 || $num==0){
echo"
<div align='center'>
  <p>&nbsp;</p>
  <p><strong><span class='error'>البيانات المدخلة غير صحيحة</span></strong></p>
</div>
";
///// Begin refer
if (isset($_POST['refer'])) {
$refer = $_POST['refer'];
echo"<META HTTP-EQUIV=Refresh CONTENT=3;URL='login.php'>";
}else {
echo"<META HTTP-EQUIV=Refresh CONTENT=3;URL=login.php>";
}
///// END refer
///////
}
}
} /// end else logged in
break; 
///////////////////////////
///////////////////////////////////////
case "lost"; 
?>
            <form action='login.php?action=getlost' method='post' name='lost' id="lost">
              <table width='300'  border='0' align='center' cellpadding='3' cellspacing='1'>
                <tr>
                  <td><div align='center'><strong><font class='smalltext'>الرجاء كتابة بريدك الإلكتروني </font></strong></div></td>
                </tr>
                <tr>
                  <td align='center'><input name='useremail' type='text' id='useremail' size='35' class='smalltext' /></td>
                </tr>
                <tr>
                  <td align='center'><input type='submit' name='Submit' value='أرسل' class='smalltext' /></td>
                </tr>
              </table>
            </form>
          <?php
//////////////////////
break; 
/////////////////////////////////////////////////////////////////
case "getlost"; 
//////////////////////

if (!isset($_POST['useremail']) || $_POST['useremail'] == "") {
echo "<div class='error' align='center'>الرجاء كتابة بريدك الإلكتروني</div>"; 

} elseif (isset($_POST['useremail']) && !isemail($_POST['useremail']))  { 
echo "<div class='error' align='center'>البريد الإلكتروني المدخل لا يحمل صيغة صحيحة</div>"; 

} else { 
////////////////
$sql=mysql_query("select * from admin where useremail= '{$_POST['useremail']}' ") Or Die(MySQL_Error());

$num=mysql_num_rows($sql);
if($num==1){
while($row=mysql_fetch_array($sql)){
extract($row);
//////////////////////////////////////////////////////////////////////////////
$lostpass = substr(md5(time().crypt(time())), 16, 8);

$in = mysql_query (" UPDATE admin SET lostpass='$lostpass' WHERE adminid='{$row['adminid']}' ") or die(mysql_error()); 
//Mail the activation code
$to  = "{$_POST['useremail']}" . ", " ; // note the comma
/* subject */
$subject = "تأكيد طلب فقدان طلب الرقم السري من موقع $db_site_name";
/* message */
$message = "
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>
<title>أكد طلبك لرقمك السري على موقع  $db_site_name</title>
</head>
<body>
<p align='center'><font size='3' face='Arial, Helvetica, sans-serif'><strong><font color='#0000FF'>$db_site_name</font></strong></font></p>
<table width='100%'  border='0' align='center' cellpadding='1'>
  <tr align='center'>
    <td colspan='2'><font color='#FF0000' size='2' face='Arial, Helvetica, sans-serif'><strong>أنت ام احد غيرك قام بطلب رقمك السري على موقعناd<br>
      أذا لم تقم بطلب الرقم السري فتجاهل هذه الرسالة و أحذفها</strong></font></td>
  </tr>
  <tr>
    <td align='left'><strong><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>وصلة تأكيد الطلب </font></strong></td>
    <td align='left'><strong><font size='2' face='Arial, Helvetica, sans-serif'><a href='http://www.$inside_domin/login.php?action=conlost&adminid=$adminid&code=$lostpass'>http://www.$inside_domin/login.php?action=conlost&adminid=$adminid&code=$lostpass</a></font></strong></td>
  </tr>
  <tr>
    <td align='left'><strong><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>الأسم المستخدم</font></strong></td>
    <td align='left'><font size='2' face='Arial, Helvetica, sans-serif'><strong>$username</strong></font></td>
  </tr>
  <tr>
    <td align='left'><strong><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>بريدك الإلكتروني</font></strong></td>
    <td align='left'><strong><font size='2' face='Arial, Helvetica, sans-serif'>$useremail</font></strong></td>
  </tr>
  <tr>
    <td width='15%' align='left'><font size='2' face='Arial, Helvetica, sans-serif'><strong><font color='#0000FF'>رقم عضويتك </font></strong></font></td>
    <td width='85%' align='left'><font size='2' face='Arial, Helvetica, sans-serif'><strong>$adminid</strong></font></td>
  </tr>
  <tr>
    <td align='left'><font size='2' face='Arial, Helvetica, sans-serif'><strong><font color='#0000FF'>كود تأكيد الطلب</font></strong></font></td>
    <td align='left'><font size='2' face='Arial, Helvetica, sans-serif'><strong>$lostpass</strong></font></td>
  </tr>
</table>
</body>
</html>
";
/* To send HTML mail, you can set the Content-type header. */
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
/* additional headers */
$headers .= "To: {$row['username']} <{$_POST['useremail']}>\r\n";
$headers .= "From: $db_site_name <$db_email>\r\n";
/* and now mail it */
$sent = mail($to, $subject, $message, $headers);
//////////////////////////////////////
if ($sent) {
echo"
<div align='center' class='text'>
  <p>&nbsp;</p>
  <p><strong>
  تم أرسال رسلة لتأكيد طلبك .. الرجاء مراجعة بريدك <br>
  راجع سلة المهملات في بريدك ان لم تجد الرسالة في صندوق بريدك
  </strong></p>
</div>
";
} else { 
echo "
<p>&nbsp;</p>
<p><strong><font color='#FF0000' size='3'>خلل, لم يتم إرسال البريد
</font></strong></p>
"; 
} 
}
}
///
elseif($num>1 || $num==0){
echo"
<div align='center' class='error'>
  <p>&nbsp;</p>
  <p><strong>البريد المدخل لا يخص أحد أعضائنا</strong></p>
</div>
";
echo"<META HTTP-EQUIV=Refresh CONTENT=3;URL=login.php?action=lost>";
}
///////
}
break; 
/////////////////////
case "conlost"; 
?>
            <form action='login.php?action=getconlost' method='post' name='active' id='active'>
              <table width='350' border='0' align='center' cellpadding='3' cellspacing='0'>
                <tr>
                  <td colspan='2' align="center" class='text'><font color='#FF0000'><strong>تأكدي طلب تغيير الرقم السري </strong></font></td>
                </tr>
                <tr>
                  <td class='text'>رقم العضوية </td>
                  <td width='230'><font size='2' face='Verdana'>
                    <input name='u' id='u' value="<?php if (isset($_GET['adminid'])){ echo $_GET['adminid'];}?>" />
                  </font><font color='#FF0000'>*</font><font size='2' face='Verdana'>&nbsp; </font></td>
                </tr>
                <tr>
                  <td class='text'>رمز التأكيد </td>
                  <td><input name='code' type='text' id='code' value="<?php if (isset($_GET['code'])){ echo $_GET['code'];}?>" />
                      <font color='#FF0000'>*</font></td>
                </tr>
                <tr>
                  <td class='text'>&nbsp;</td>
                  <td><em><font color='#FF0000' size='2'>جميع الحقول مطلوبة </font></em></td>
                </tr>
                <tr>
                  <td width='108' class='text'>&nbsp;</td>
                  <td class="maintext"><input name='submit2' type="submit" class="smalltext" value='أكد طلبك' />                  </td>
                </tr>
              </table>
            </form>
          <?php
break; 
/////////////////////
case "getconlost"; 
// sent form
if(!(int)$_POST['u'] || !$_POST['code']) 
{ 
// Something missing
echo "خلل .. الرجاء التحقق من مدخلاتك"; 
exit; 
} 
// do $_POST['u'] as  (integer) and add slashes to $_POST['code'] 
$_POST['u'] = (int) $_POST['u']; 
$_POST['code'] = addslashes($_POST['code']); 
// find user
$query = MySQL_Query("SELECT lostpass FROM admin WHERE adminid='{$_POST['u']}' AND lostpass='{$_POST['code']}' ") Or Die(MySQL_Error()); 
// If result 1
if(MySQL_Num_Rows($query) < 1) 
{ 
// Not
echo ' تم تأكدي الطلب مسبقا او لا توجد عضوية تحمل هذا الرقم !'; 
exit; 
} 
// get result from select
$result = MySQL_Fetch_Object($query); 
// free memory
MySQL_Free_Result($query); 
// fine if code the same 
if($_POST['code'] == $result->lostpass) 
{ 
// create and send a new email
$password2 = substr(md5(time().crypt(time())), 16, 8);
$password = md5($password2);
$in = mysql_query (" UPDATE admin SET password='$password' WHERE adminid='{$_POST['u']}' ") Or Die(MySQL_Error());
//Mail the activation code
$sql=mysql_query(" SELECT * from admin where adminid = '{$_POST['u']}' ") Or Die(MySQL_Error());
while($row=mysql_fetch_array($sql)){
extract($row);

$to  = "{$row['useremail']}" . ", " ; // note the comma
/* subject */
$subject = "رقمك السري الجديد في موقع $db_site_name";
/* message */
$message = "
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>
<title>You new password at $db_site_add</title>
</head>
<body>
<p align='center'><font size='3' face='Arial, Helvetica, sans-serif'><strong><font color='#0000FF'>$db_site_name</font></strong></font></p>
<table width='100%'  border='0' align='center' cellpadding='1'>
  <tr align='center'>
    <td colspan='2'><font color='#FF0000' size='2' face='Arial, Helvetica, sans-serif'><strong>عضويتك برقمك السري الجديد </strong></font></td>
  </tr>
  <tr>
    <td align='left'><strong><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>منطقة الدخول </font></strong></td>
    <td align='left'><strong><font size='2' face='Arial, Helvetica, sans-serif'><a href='http://www.$inside_domin/admincp/login.php'>http://www.$inside_domin/admincp/login.php</a></font></strong></td>
  </tr>
  <tr>
    <td align='left'><strong><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>الأسم المستخدم </font></strong></td>
    <td align='left'><font size='2' face='Arial, Helvetica, sans-serif'><strong>$username</strong></font></td>
  </tr>
  <tr>
    <td align='left'><strong><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>البريد الإلكتروني </font></strong></td>
    <td align='left'><strong><font size='2' face='Arial, Helvetica, sans-serif'>$useremail</font></strong></td>
  </tr>
  <tr>
    <td width='16%' align='left'><font size='2' face='Arial, Helvetica, sans-serif'><strong><font color='#0000FF'>الرقم السري الجديد </font></strong></font></td>
    <td width='84%' align='left'><font size='2' face='Arial, Helvetica, sans-serif'><strong>$password2</strong></font></td>
  </tr>
</table>
</body>
</html>
";



/* To send HTML mail, you can set the Content-type header. */
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
/* additional headers */
$headers .= "To: $username <$useremail>\r\n";
$headers .= "From: $db_site_name <$db_email>\r\n";
/* and now mail it */
$sent = mail($to, $subject, $message, $headers);
//////////////////////////////////////
if ($sent) {
echo"
<div align='center' class='text'>
  <p>&nbsp;</p>
  <p><strong>
 تم إرسال رقمك السري الجديد .. راجع بريدك الخاص<br>
  الرجاء مراجعة سلة المهملات في حال لم تجد الرسالة في صندوق بريدك
  </strong></p>
</div>
";
} else { 
echo "
<p>&nbsp;</p>
<p><strong><font color='#FF0000' size='3'>خلل لم يتم ارس ال الرقم السري الجديد
</font></strong></p>
"; 
} 
}
//done

} else { 
echo 'كود تأكيد الطلب خاطئ!'; 
} 
break; 
///////////////////////////////
case "logout"; 
/// insert functiom
session_logout($session_id);
///
echo"
<div align='center' class='text'>
  <p>&nbsp;</p>
  <p><strong>يتم تسجيل خروجك .. الرجاء الإنتظار قليلا</strong></p>
</div>
";
echo " <META HTTP-EQUIV=Refresh CONTENT=2;URL=index.php > ";
break; 
///////////////////////////////
/////////////////////
} // end switch
?>        </td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
