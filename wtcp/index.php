<?php
include ('includes/header.php');
//include("rte/fckeditor.php") ;
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
<title>Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
<!--
function log_out()
{
ht = document.getElementsByTagName("html");
ht[0].style.filter = "progid:DXImageTransform.Microsoft.BasicImage(grayscale=1)";
if (confirm('Are You sure you want to logout?'))
{
return true;
}
else
{
ht[0].style.filter = "";
return false;
}
}
//-->
</script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" height="100%" border="0" align="center" cellpadding="1" cellspacing="0" >
<tr> 
<td valign="top"><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1">
<tr>
<td width="100%" align="center"><iframe src="cpdetails.php" name="data" width="100%" height="100%" frameborder="0" id="data"></iframe></td>
<td width="118" align="center" valign="top" bgcolor="#dbdbdb">
<table width="120" border="0" cellpadding="0" cellspacing="0">
<tr>
<td valign="top"><?php require_once("menu.php"); ?>
&nbsp;</td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table>
</body>
</html>
<?php
} /// end else not logedin 
?>