<?php
include ('includes/header.php');
//////////////////////////////////////////////////
?>
<html>
<head>
<Title> <?php echo $db_site_name;?> </Title>
<meta name="description" content="<?php echo $db_meta_description;?>">
<meta name="author" content="<?php echo $db_site_name;?>">
<meta name="keywords" content="<?php echo $db_meta_keywords;?>">
<meta name="category" content="<none>">
<meta name="rating" content="General">
<meta http-equiv="Content-Language" content="en-us">
<meta name="robots" content="All">
<meta name="copyright" content="<?php echo $db_site_name;?>">
<meta name="generator" content="Meta Tag Generator © 2007 www.w-techno.com">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
</head>
<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="300" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><table width="100%" border="0" align="center" cellpadding="1" cellspacing="0">
          <tr>
            <td align="center"><?php
switch (@$_GET['action']) {

default:
if ($authorization == '1') {
echo "
<div align='center' class='smalltext'>
You are already logged in<br/><br />
<a href='index.php'><span class='smalltext'>Clients Area</span></a><br /><br />
<a href='login.php?action=logout'> <span class='smalltext'>Logout</span></a>
</div>
<META HTTP-EQUIV=Refresh CONTENT=1;URL=index.php > 
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
                    <br />
                    <form action="login.php?action=log" method="post" name="login" id="login">
                      <table width="350" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="81" rowspan="5" align="center" valign="middle" class="Titles"><img src="images/login2.png" alt="login" width="89" height="82"></td>
                          <td width="269" class="Titles"><strong>Admin Area</strong></td>
                        </tr>
                        <tr>
                          <td>Username</td>
                        </tr>
                        <tr>
                          <td><label>
                            <input type="text" name="username" id="username" />
                          </label></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                        </tr>
                        <tr>
                          <td><input type="password" name="password" id="password" /></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><a href="login.php?action=lost">Reset Password</a></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><input type="submit" name="button" id="button" value="login" />
                              <font class="content">
                              <input name='refer' type='hidden' id='refer' value='<?php echo @$_SERVER['REQUEST_URI'];?>' />
                              <input name='login_code' type='hidden' id='login_code' value='<?php echo $login_code;?>' />
                            </font></td>
                        </tr>
                      </table>
                  </form>
              <?php
} /// end else logged in
//////
break; 
////
case "log"; 
//////////////////////
if ($authorization == '1') {
echo "
<div align='center' class='smalltext'>
You are already logged in<br/><br />
<a href='index.php'><span class='smalltext'>Clients Area</span></a><br /><br />
<a href='login.php?action=logout'> <span class='smalltext'>Logout</span></a>
</div>
<META HTTP-EQUIV=Refresh CONTENT=3;URL=index.php > 
";
/* include ("login.php");  Redirect browser */
} else { 
///////
if (!isset($_POST['username']) || $_POST['username'] == "") {
echo "<div align='center' class='error'> Please write your username<div>"; 
echo"<META HTTP-EQUIV=Refresh CONTENT=3;URL=login.php>";
}
elseif (!isset($_POST['password']) || $_POST['password'] == "" ) {
echo "<div align='center' class='error'>Please write your password<div>";
echo"<META HTTP-EQUIV=Refresh CONTENT=3;URL=login.php>";
}
elseif (!isset ($_SESSION['sess_login_code']) && empty($_SESSION['sess_login_code'])) 
{
echo "<div align='center' class='error'> Security Error: Session code not passed .. please contact the webmaster <div>";
echo"<META HTTP-EQUIV=Refresh CONTENT=3;URL=login.php>";
}
elseif (!isset ($_SESSION['sess_login_code']) && $_SESSION['sess_login_code'] != $_POST['login_code']) 
{
echo "<div align='center' class='error'> Security Error: Session code not passed .. please contact the webmaster <div>";
echo"<META HTTP-EQUIV=Refresh CONTENT=3;URL=login.php>";
}
else{ 
// unset
unset($_SESSION['sess_login_code']);
////////////////
$password = md5($_POST['password']);
//
$sql=mysql_query("select * from admin where username='{$_POST['username']}' AND password='$password'");
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
<div align='center'>
  <p>&nbsp;</p>
  <p><font color='#0033CC'><strong><font class='text' size='4'>Welcome .. {$_SESSION['username']}</font></strong></font></p>
</div>
";
///// Begin refer
if (isset($_POST['refer']) && $_POST['refer']!='') {
echo"<META HTTP-EQUIV=Refresh CONTENT=1;URL='{$_POST['refer']}'>";
}else {
echo"<META HTTP-EQUIV=Refresh CONTENT=1;URL='index.php'>";
}
///// END refer
}
}
elseif($num>1 || $num==0){
echo"
<div align='center'>
  <p>&nbsp;</p>
  <p><strong><span class='error'>Either the username or the password is incorrect</span></strong></p>
</div>
";
///// Begin refer
if (isset($_POST['refer']) && $_POST['refer']!='') {
$refer = $_POST['refer'];
echo"<META HTTP-EQUIV=Refresh CONTENT=1;URL='login.php'>";
}else {
echo"<META HTTP-EQUIV=Refresh CONTENT=1;URL=login.php>";
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
                          <td align="center" class="text"><strong>Your email Address</strong></td>
                        </tr>
                        <tr>
                          <td align='center'><input name='useremail' type='text' id='useremail' size='35' class='text_input' /></td>
                        </tr>
                        <tr>
                          <td align='center'><input type='submit' name='Submit' value='Send' class='text_input' /></td>
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
echo "<div class='error' align='center'>Please write your email address</div>"; 

} elseif (isset($_POST['useremail']) && !isemail($_POST['useremail']))  { 
echo "<div class='error' align='center'>The email address you submit is invalid</div>"; 

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
$subject = "Password request from $db_site_name";
/* message */
$message = "
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>
<title>Password request at $db_site_name</title>
</head>
<body>
<p align='center'><font size='3' face='Arial, Helvetica, sans-serif'><strong><font color='#0000FF'>$db_site_name</font></strong></font></p>
<table width='100%'  border='0' align='center' cellpadding='1'>
  <tr align='center'>
    <td colspan='2'><font color='#FF0000' size='2' face='Arial, Helvetica, sans-serif'><strong>You or someone else requested your password in our website<br>
    if you did not request the password please ignore this email</strong></font></td>
  </tr>
  <tr>
    <td align='left'><strong><font color='#333333' size='2' face='Arial, Helvetica, sans-serif'>Confirm Request link</font></strong></td>
    <td align='left'><font size='2' face='Arial, Helvetica, sans-serif'><a href='http://www.$inside_domin/wtcp/login.php?action=conlost&adminid=$adminid&code=$lostpass'>http://www.$inside_domin/wtcp/login.php?action=conlost&adminid=$adminid&code=$lostpass</a></font></td>
  </tr>
  <tr>
    <td align='left'><strong><font color='#333333' size='2' face='Arial, Helvetica, sans-serif'>username</font></strong></td>
    <td align='left'><font size='2' face='Arial, Helvetica, sans-serif'>$username</font></td>
  </tr>
  <tr>
    <td align='left'><strong><font color='#333333' size='2' face='Arial, Helvetica, sans-serif'>email address</font></strong></td>
    <td align='left'><font size='2' face='Arial, Helvetica, sans-serif'>$useremail</font></td>
  </tr>
  <tr>
    <td width='15%' align='left'><strong><font color='#333333' size='2' face='Arial, Helvetica, sans-serif'>User ID</font></strong></td>
    <td width='85%' align='left'><font size='2' face='Arial, Helvetica, sans-serif'>$adminid</font></td>
  </tr>
  <tr>
    <td align='left'><font size='2' face='Arial, Helvetica, sans-serif'><strong><font color='#333333'>Request Code</font></strong></font></td>
    <td align='left'><font size='2' face='Arial, Helvetica, sans-serif'>$lostpass</font></td>
  </tr>
</table>
</body>
</html>
";
/* To send HTML mail, you can set the Content-type header. */
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=windows-1256\r\n";
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
A Password request sent to your email. Please login to your email & click on the link provided in the email<br>
If you did not see the email in your (Inbox), please check your junk mail.
  </strong></p>
</div>
";
} else { 
echo "
<p>&nbsp;</p>
<p><strong><font color='#FF0000' size='3'> Server Error: The email not sent, please try again or contact the webmaster
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
  <p><strong>The email address does not exist in our database</strong></p>
</div>
";
echo"<META HTTP-EQUIV=Refresh CONTENT=1;URL=login.php?action=lost>";
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
                          <td colspan='2' align="center" class='text'><strong>Re-Activate the Account</strong></td>
                        </tr>
                        <tr>
                          <td class='text'>User ID</td>
                          <td width='230'><font size='2' face='Verdana'>
                          <input name='u' class="text_input" id='u' value="<?php if (isset($_GET['adminid'])){ echo $_GET['adminid'];}?>" />
                          </font><font color='#FF0000' class="error">*</font><font size='2' face='Verdana'>&nbsp; </font></td>
                        </tr>
                        <tr>
                          <td class='text'>Request Code</td>
                          <td><input name='code' type='text' class="text_input" id='code' value="<?php if (isset($_GET['code'])){ echo $_GET['code'];}?>" />
                              <font color='#FF0000' class="error">*</font></td>
                        </tr>
                        <tr>
                          <td class='text'>&nbsp;</td>
                          <td><em><font size='2'>All field are required</font></em></td>
                        </tr>
                        <tr>
                          <td width='108' class='text'>&nbsp;</td>
                          <td><span class='maintext'>
                            <input name='submit' type="submit" class="text_input" value='Submit' id="submit" />
                          </span></td>
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
echo "Error, Your submitted data is incorrect!"; 
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
echo 'Either the User ID or the Request Code is incorrect !'; 
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
$subject = "Your new password at $db_site_name";
/* message */
$message = "
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>
<title>Your new password at $db_site_add</title>
</head>
<body>
<p align='center'><font size='3' face='Arial, Helvetica, sans-serif'><strong><font color='#0000FF'>$db_site_name</font></strong></font></p>
<table width='100%'  border='0' align='center' cellpadding='1'>
  <tr align='center'>
    <td colspan='2'><font color='#FF0000' size='2' face='Arial, Helvetica, sans-serif'><strong>Your New Password </strong></font></td>
  </tr>
  <tr>
    <td align='left'><strong><font color='#666666' size='2' face='Arial, Helvetica, sans-serif'>login Area</font></strong></td>
    <td align='left'><font size='2' face='Arial, Helvetica, sans-serif'><a href='http://www.$inside_domin/wtcp/login.php'>http://www.$inside_domin/wtcp/login.php</a></font></td>
  </tr>
  <tr>
    <td align='left'><strong><font color='#666666' size='2' face='Arial, Helvetica, sans-serif'>Username</font></strong></td>
    <td align='left'><font size='2' face='Arial, Helvetica, sans-serif'>$username</font></td>
  </tr>
  <tr>
    <td align='left'><strong><font color='#666666' size='2' face='Arial, Helvetica, sans-serif'>Email address</font></strong></td>
    <td align='left'><font size='2' face='Arial, Helvetica, sans-serif'>$useremail</font></td>
  </tr>
  <tr>
    <td width='16%' align='left'><font size='2' face='Arial, Helvetica, sans-serif'><strong><font color='#666666'>New password</font></strong></font></td>
    <td width='84%' align='left'><font size='2' face='Arial, Helvetica, sans-serif'>$password2</font></td>
  </tr>
</table>
</body>
</html>
";



/* To send HTML mail, you can set the Content-type header. */
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=windows-1256\r\n";
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
A new password has been sent to your email address <br>
If you did not see the email in your (Inbox), please check your junk mail.
  </strong></p>
</div>
";
} else { 
echo "
<p>&nbsp;</p>
<p><strong><font color='#FF0000' size='3'>
Server Error: The email not sent, please try again or contact the webmaster
</font></strong></p>
"; 
} 
}
//done

} else { 
echo 'Either the User ID or the Request Code is incorrect !'; 
} 
break; 
///////////////////////////////
case "logout"; 
/// insert functiom
session_logout($session_id);
///
echo"
<div align='center'>
  <p>&nbsp;</p>
  <p><font color='#0033CC'><strong><font class='text' size='4'>Logging out .. please wait</font></strong></font></p>
</div>
";
echo " <META HTTP-EQUIV=Refresh CONTENT=1;URL=index.php > ";
break; 
///////////////////////////////
/////////////////////
} // end switch
?>
            </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td valign="top"><table width="465" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>