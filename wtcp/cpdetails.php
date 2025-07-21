<?php
include ('includes/header.php');
//////////////////////////////////////////////////
if ($authorization != '1') {
print "<script language=\"JavaScript\">";
print "window.location = 'login.php' ";
print "</script>";/* include ("login.php");  Redirect browser */
exit;
} else { 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>صفحة البداية</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" link="#666666" vlink="#009900" alink="#666666" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<br>
<br>
<br>
<br>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong><span  class="smalltext">الحقوق</span></strong></td>
</tr>
<tr align="right">
<td width="396" bgcolor="#CCCCCC"><strong><a href="http://www.w-techno.com" target="_blank">WiDE TECHNOLOGY</a></strong></td>
<td width="190" bgcolor="#CCCCCC"><strong>برمجة و تصميم </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><strong><a href="mailto:info@w-techno.com">info@w-techno.com</a></strong></td>
<td bgcolor="#CCCCCC"><strong>البريد الإلكتروني</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><strong>+973-39540563</strong></td>
<td bgcolor="#CCCCCC"><strong>رقم الهاتف</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><strong> <?php echo $db_site_name;?> </strong></td>
<td bgcolor="#CCCCCC"><strong>البرنامج مصرح لــ </strong></td>
</tr>
</table></td>
</tr>
</table>
</body>
</html>
<?php
} /// end else not logedin 
?>