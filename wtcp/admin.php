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
<title>Administrators</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css"></head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
<?php
switch(@$_GET['action']){ 
case "add"; 
// Perform MySQL query on only the current page number's results 
$view_super = mysql_query("SELECT super FROM admin WHERE adminid='$adminid' AND super='1' ") Or Die(MySQL_Error()); 
//---
$num_super = mysql_num_rows($view_super);
if ($num_super != 1) {
echo "
<div align='center' class='msg'><strong>
You are not authorized to do this action
</strong></div>
";
exit;
}
//==================================
?>
<br>
<table width="90%" border="0" align="center" cellpadding="1" cellspacing="0">
<tr>
<td align="center">
<?php
if (isset($_POST['Submit'])) {
///////////////////////////////////////////////////////////////////////////////////////
//CK the (magic_quotes_gpc) if it is (off) ... this is helpful to protection
if(!get_magic_quotes_gpc()) 
{ 
// Get what is in the  ($_POST) 
foreach($_POST as $k=>$v) 
{ 
$_POST[$k] = addslashes($v); 
} 
} 
//////////////
$username =$_POST["username"];
$password=$_POST["password"];
$password2=$_POST["password2"];
//
$email=$_POST["email"];
$email2=$_POST["email2"];
//
$tel=$_POST["tel"];
$super=$_POST["super"];
/////////////////////
if ($username ==""){
print "
<div align='center' class='msg'><strong>
Please write the username
</strong></div>
";
} elseif ($password =="") {
print "
<div align='center' class='msg'><strong>
Please write the password
</strong></div>
";
} elseif ($password2 =="") {
print "
<div align='center' class='msg'><strong>
Please confirm the password
</strong></div>
";
} elseif ($email =="") {
print "
<div align='center' class='msg'><strong>
Please write the email
</strong></div>
";
} elseif ($email2 =="") {
print "
<div align='center' class='msg'><strong>
Please confirm the email
</strong></div>
";
} elseif(!isemail($email)){  
echo"
<div align='center'><strong>
Please write a valid email
</strong></div>
";  
} elseif ($email!=$email2) {
print "
<div align='center' class='msg'><strong>
Emails did not match
</strong></div>
";
} elseif ($password!=$password2){
print "
<div align='center' class='msg'><strong>
The passwords did not match
</strong></div>
";
} elseif(!check_password($password)) {  
echo " 
<div align='center' class='msg'><strong>
Please write at least 6 characters in the password
</strong></div>
";  
} elseif($tel!='' && !numbers_only($tel)){  
echo "
<div align='center' class='msg'>
<strong>
please write the telephone
</strong>
</div>
"; 
////////////////////////////////////////////////////////////////////////////////
} else {
// ck ID if exist
$query = MySQL_Query("SELECT adminid FROM admin WHERE username='$username'") Or Die(MySQL_Error()); 
// if select detact more than 0 result exit
if(MySQL_Num_Rows($query) > 0) 
{ 
// print error already exist
echo '
<div align="center" class="msg" dir="rtl"><strong>The username '.$username.' is already exist in the database</strong></div>
'; 
} else {
//free the memory from the select result
MySQL_Free_Result($query); 
///////// ck email
// ck user if exist
$query = MySQL_Query("SELECT adminid FROM admin WHERE useremail='$email'") Or Die(MySQL_Error()); 
// if select detact more than 0 result exit
if(MySQL_Num_Rows($query) > 0) 
{ 
// print error already exist
echo '
<div align="center"  class="msg"><strong>The email address '.$email.' is already exist in the database</strong></div>
'; 
} else {
//free the memory from the select result
MySQL_Free_Result($query); 
// MD5 the password
$password_data = md5($password); 
// variables
$reg_date = date('jS of F Y');
$activate_id = substr(md5(time().crypt(time())), 16, 8);
$activated= 1;
$banned= 0;
// add to admin table
$in = MySQL_Query("INSERT INTO admin (username,password,useremail,tel,super,reg_date,activated,activate_id,banned) VALUES ('$username', '$password_data', '$email', '$tel', '$super','$reg_date', '$activated' , '$activate_id' , '$banned')") 
Or Die(MySQL_Error()); 
if(!$in) {echo "<p align='center'><font color='#FF0000'><strong>ERROR: the insert not done </strong></font></p>"; }
else { 
//////////////////////
echo "<p align='center'><strong><font size='3'>The adminstrator has been added successfully</font></strong></p>";
} /// END data
//////////////////////////////////////////////////////////////////////////////////
} // else email exist
} // else name exist
////////////////////////////////////////////////////////////////////////////////////////////////
} // END ELSE ALL
///////////////////////////////////////////////////////////////////////////////////////
} // END IF SET
//************************************************************************************
if (isset($_POST['username'])) {$_POST['username']=stripslashes(strip_tags($_POST['username'])); }
if (isset($_POST['email'])) {$_POST['email']=stripslashes(strip_tags($_POST['email'])); }
if (isset($_POST['email2'])) {$_POST['email2']=stripslashes(strip_tags($_POST['email2'])); }
if (isset($_POST['tel'])) {$_POST['tel']=stripslashes(strip_tags($_POST['tel'])); }
if (isset($_POST['super'])) {$_POST['super']=stripslashes(strip_tags($_POST['super'])); }
?>
</td>
</tr>
</table>
<br>
<form action=""  method="post" name="admin_reg" id="admin_reg" onSubmit="return formCheck(this);">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Add an administrator  </strong></td>
</tr>
<tr align="right">
<td width="396" bgcolor="#CCCCCC"><input name="username" type="text" class="smalltext" id="username" dir="rtl" value="<?php if (isset($_POST['username'])) {echo $_POST['username'];} ?>" size="40" maxlength="255"></td>
<td width="190" bgcolor="#CCCCCC"><strong>Username</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="password" type="password" class="smalltext" id="password" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Password</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="password2" type="password" class="smalltext" id="password2" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Confirm Password</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="email" type="text" class="smalltext" id="email" value="<?php if (isset($_POST['email'])) {echo $_POST['email'];} ?>" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Email</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="email2" type="text" class="smalltext" id="email2" value="<?php if (isset($_POST['email2'])) {echo $_POST['email2'];} ?>" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Confirm Email</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="tel" type="text" class="smalltext" id="tel" value="<?php if (isset($_POST['tel'])) {echo $_POST['tel'];} ?>" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Tel</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="super" class="smalltext" id="super">
<?php if (isset($_POST['super']) & $_POST['super']==1) { ?>
<option value="1" selected="selected">Yes</option>
<option value="0">No</option>
<?php } else { ?>
<option value="1">Yes</option>
<option value="0" selected="selected">No</option>
<?php } ?>
</select></td>
<td bgcolor="#CCCCCC"><strong>Super Admin</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">&nbsp;</td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="Add"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</FORM>
<?php
//----------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "edit"; 
//------------------------------------------------------------------------
//////////////////////////////////
// Perform MySQL query on only the current page number's results 
$view_super = mysql_query("SELECT super FROM admin WHERE adminid='$adminid' AND super='1' ") Or Die(MySQL_Error()); 
//---
$num_super = mysql_num_rows($view_super);
$adminid= @$_GET['adminid'];
//==================================
//////////
$edit_view = mysql_query (" SELECT * FROM admin WHERE adminid='$adminid' ") Or Die(MySQL_Error()); 
// while 
while($edit_row = mysql_fetch_array($edit_view)){ 
// data input
extract ($edit_row); 
/////////////////////
?>
<br>
<br>
<table width="90%" border="0" align="center" cellpadding="1" cellspacing="0">
<tr>
<td align="center">
<?php
if (isset($_POST['Submit'])) {
///////////////////////////////////////////////////////////////////////////////////////
//CK the (magic_quotes_gpc) if it is (off) ... this is helpful to protection
if(!get_magic_quotes_gpc()) 
{ 
// Get what is in the  ($_POST) 
foreach($_POST as $k=>$v) 
{ 
$_POST[$k] = addslashes($v); 
} 
} 
//////////////
$username =$_POST["username"];
$password=$_POST["password"];
$password2=$_POST["password2"];
//
$email=$_POST["email"];
$email2=$_POST["email2"];
//
$tel=$_POST["tel"];
$super=$_POST["super"];
/////////////////////
if ($username ==""){
print "
<div align='center' class='msg'><strong>
Please write the username
</strong></div>
";
} elseif ($email =="") {
print "
<div align='center' class='msg'><strong>
Please write the email
</strong></div>
";
} elseif ($email2 =="") {
print "
<div align='center' class='msg'><strong>
Please confirm the email
</strong></div>
";
} elseif(!isemail($email)){  
echo"
<div align='center'><strong>
Please write a valid email
</strong></div>
";  
} elseif ($email!=$email2) {
print "
<div align='center' class='msg'><strong>
Emails did not match
</strong></div>
";
} elseif($tel!='' && !numbers_only($tel)){  
echo "
<div align='center' class='msg'>
<strong>
please write the telephone
</strong>
</div>
"; 
} elseif ($password =="") {
// add to admin table
$in = mysql_query (" UPDATE admin SET username='$username' , useremail='$email' , tel='$tel' , super='$super' WHERE adminid='$adminid' ")  Or Die(MySQL_Error()); 
if(!$in) {echo "<p align='center'><font color='#FF0000'><strong>ERROR: Update not done</strong></font></p>"; }
else { 
echo "<p align='center'><strong><font size='3'>The adminstrator has been updated successfully </font></strong></p>";
} /// END data
} elseif ($password2 =="") {
print "
<div align='center' class='msg'><strong>
Please write the password
</strong></div>
";
} elseif ($password!=$password2){
print "
<div align='center' class='msg'><strong>
The passwords did not match
</strong></div>
";
} elseif(!check_password($password)) {  
echo " 
<div align='center' class='msg'><strong>
Please write at least 6 characters in the password
</strong></div>
";  
////////////////////////////////////////////////////////////////////////////////
} else {
// MD5 the password
$password_data = md5($password); 
// add to admin table
$in = mysql_query (" UPDATE admin SET username='$username' , useremail='$email' , tel='$tel' , super='$super' , password='$password_data' WHERE adminid='$adminid' ")  Or Die(MySQL_Error()); 
if(!$in) {echo "<p align='center'><font color='#FF0000'><strong>ERROR: Update not done</strong></font></p>"; }
else { 
echo "<p align='center'><strong><font size='3'>The adminstrator has been updated successfully</font></strong></p>";
} /// END data
////////////////////////////////////////////////////////////////////////////////////////////////
} // END ELSE ALL
///////////////////////////////////////////////////////////////////////////////////////
} // END IF SET
//************************************************************************************
if (isset($_POST['username'])) {$_POST['username']=stripslashes(strip_tags($_POST['username'])); }
if (isset($_POST['email'])) {$_POST['email']=stripslashes(strip_tags($_POST['email'])); }
if (isset($_POST['email2'])) {$_POST['email2']=stripslashes(strip_tags($_POST['email2'])); }
if (isset($_POST['tel'])) {$_POST['tel']=stripslashes(strip_tags($_POST['tel'])); }
if (isset($_POST['super'])) {$_POST['super']=stripslashes(strip_tags($_POST['super'])); }
?>
</td>
</tr>
</table>
<br>
<form
action='' method='POST' enctype="multipart/form-data" name='edit' id='edit'>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Edit an administrator </strong></td>
</tr>
<tr align="right">
<td width="396" bgcolor="#CCCCCC"><input name="username" type="text" class="smalltext" id="username" dir="rtl" value="<?php if(isset($_POST['username'])) { echo stripslashes($_POST['username']);} else {echo $edit_row['username']; }?>" size="40" maxlength="255"></td>
<td width="190" bgcolor="#CCCCCC"><strong>Username</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="password" type="password" class="smalltext" id="password" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Password</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="password2" type="password" class="smalltext" id="password2" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Confirm Password</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="email" type="text" class="smalltext" id="email" value="<?php if(isset($_POST['email'])) { echo stripslashes($_POST['email']);} else {echo $edit_row['useremail']; }?>" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Email</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="email2" type="text" class="smalltext" id="email2" value="<?php if(isset($_POST['email2'])) { echo stripslashes($_POST['email2']);} else {echo $edit_row['useremail']; }?>" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Confirm Email</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="tel" type="text" class="smalltext" id="tel" value="<?php if(isset($_POST['tel'])) { echo stripslashes($_POST['tel']);} else {echo $edit_row['tel']; }?>" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Tel</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">
<select name="super" class="smalltext" id="super">
<?php if ($edit_row['super']!=1 && $num_super==0) { ?>
<option value="0" selected="selected">No</option>
<?php } elseif ($edit_row['super']==1 && $num_super!=0) { ?>
<option value="1" selected="selected">Yes</option>
<option value="0">No</option>
<?php } elseif ($edit_row['super']!=1 && $num_super!=0) { ?>
<option value="1">Yes</option>
<option value="0" selected="selected">No</option>
<?php } elseif ($edit_row['super']==1) { ?>
<option value="0">No</option>
<?php } else { ?>
<option value="1">Yes</option>
<option value="0" selected="selected">No</option>
<?php } ?>
</select>			</td>
<td bgcolor="#CCCCCC"><strong>Super Admin</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">&nbsp;</td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="Update"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</FORM>
<?php
}
//------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "delcon"; 
//------------------------------------------------------------------------
//////////////////////////////////
// Perform MySQL query on only the current page number's results 
$view_super = mysql_query("SELECT super FROM admin WHERE adminid='$adminid' AND super='1' ") Or Die(MySQL_Error()); 
//---
$num_super = mysql_num_rows($view_super);
if ($num_super != 1) {
echo "
<div align='center' class='msg'><strong>
You are not authorized to do this action
</strong></div>
";
exit;
}
//==================================
////
$view_del = mysql_query (" SELECT * FROM admin WHERE adminid='{$_GET['adminid']}' ") Or Die(MySQL_Error()); 
// while 
while($row_del = mysql_fetch_array($view_del)){ 
// data input
extract ($row_del); 
///////////
?>
<br/>
<br>
<form action='?action=del' method='POST' name='del' id='del'>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td width="241" align="center" bgcolor="#EEEEEE">Email</td>
<td width="215" align="center" bgcolor="#EEEEEE">Username</td>
</tr>
<tr align="right">
<td align="center" bgcolor="#CCCCCC"><?php echo $row_del['useremail'];?></td>
<td align="center" bgcolor="#CCCCCC"><?php echo $row_del['username'];?><font size='2' face='Verdana'>&nbsp; </font></td>
</tr>
<tr align="right">
<td colspan="2" align="center" bgcolor="#FFFFFF"><font color="#FF0000">Are you sure you want to delete?</font></td>
</tr>
<tr align="right">
<td colspan="2" align="center" bgcolor="#FFFFFF">
<input name='doit' type='radio' value='no' checked>
No
<input name='doit' type='radio' value='yes'>
Yes 
<input name='adminid' type='hidden' id='adminid' value='<?php echo $row_del['adminid'];?>'>
</td>
</tr>
<tr align="right">
<td colspan="2" align="center" bgcolor="#FFFFFF">
<input name='submit' type=submit id="submit" value='Submit'>
</td>
</tr>
</table></td>
</tr>
</table>
</FORM>
<?php
}
// resulte close
//------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "del"; 
//------------------------------------------------------------------------
$doit = @$_POST["doit"];
if ($doit =="no")
{
echo "
<br>
<br>
<strong>
You selected not to delete .. please wait until you are redirected to the administrators panel
</strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?'>";
}
else {
$adminid = @$_POST["adminid"];
//////////////////////////////////
////
$in = mysql_query (" DELETE FROM admin WHERE adminid='$adminid' ") Or Die(MySQL_Error()); 
// data input
echo " 
<br>
<br>
<strong>
The adminstrator has been deleted successfully
</strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?'>";
// resulte close
}
//------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////
/*
Main control
*/
default: 
//------------------------------------------------------------------------
//////////////
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = $_GET['page']; 
} 
// Define the number of results per page 
$max_results = 15; 
// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_super = mysql_query("SELECT super FROM admin WHERE adminid='$adminid' AND super='1' ") Or Die(MySQL_Error()); 
//---
$num_super = mysql_num_rows($view_super);
if ($num_super != 1) {
$super_info = "WHERE adminid='$adminid'"; 
} else {
$super_info = ""; 
} 
//==================================
$view_all = mysql_query("SELECT * FROM admin $super_info ORDER BY adminid DESC LIMIT $from, $max_results") Or Die(MySQL_Error()); 
////////////////////////////////////////
/////////
echo "
<br/>
<table width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='600' border='0' cellpadding='2'>
<tr>
<td width='54' align='center' bgcolor='#EEEEEE'>Delete</td>
<td width='64' align='center' bgcolor='#EEEEEE'>Edit</td>
<td width='241' align='center' bgcolor='#EEEEEE'>Email</td>
<td width='215' align='center' bgcolor='#EEEEEE'>Username </td>
</tr>
</table></td>
</tr>
</table>
"; 
///////
while($action = mysql_fetch_array($view_all)){ 
extract ($action);
////////////
if ($num_super != 1) { $del_info = ""; } else { $del_info = "<a href='{$_SERVER['PHP_SELF']}?action=delcon&adminid={$action['adminid']}'>Delete</a>"; }
// go on
echo "
<table width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='600' border='0' cellpadding='2'>
<tr align='right'>
<td width='54' align='center' bgcolor='#CCCCCC'>$del_info</td>
<td width='64' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=edit&adminid={$action['adminid']}'><font face='Tahoma'><font size='2'>Edit</font></font></a></td>
<td width='241' align='center' bgcolor='#CCCCCC'><FONT face='MS Sans Serif' color=#333333 size=1>{$action['useremail']}</FONT></td>
<td width='215' align='center' bgcolor='#CCCCCC'><FONT face='MS Sans Serif' color=#333333 size=1>{$action['username']}</FONT></td>
</tr>
</table></td>
</tr>
</table>
";
}
/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM admin "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages>1){
echo "<center dir='rtl'>Select a Page<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><< Prev</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
if ($total_pages>1){
echo "$i "; 
}
} else { 
echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$i\"> $i </a> "; 
} 
} 
// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$next\">Next >></a>"; 
} 
echo "</center>";
//-----------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////
} // end switch
?>
&nbsp;</p>
</div>
</body>
</html>
<?php
}
?>