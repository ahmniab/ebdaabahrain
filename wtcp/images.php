<?php
include ('includes/header.php');
include("rte/fckeditor.php") ;
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
<title>Album</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' href='images/cpstyle.css'>
<script>
function selectAllCheckBoxes(FormName, FieldName, CheckValue)
{
if(!document.forms[FormName])
return;
var objCheckBoxes = document.forms[FormName].elements[FieldName];
if(!objCheckBoxes)
return;
var countCheckBoxes = objCheckBoxes.length;
if(!countCheckBoxes)
objCheckBoxes.checked = CheckValue;
else
// set the check value for all check boxes
for(var i = 0; i < countCheckBoxes; i++)
objCheckBoxes[i].checked = CheckValue;
}
</script>
<script type="text/javascript">
<!--
function delete_confirm()
{
ht = document.getElementsByTagName("html");
ht[0].style.filter = "progid:DXImageTransform.Microsoft.BasicImage(grayscale=1)";
if (confirm('Are you sure you want to delete  the selected items?'))
{
return true;
}
else
{
ht[0].style.filter = "";
return false;
}
}
function MM_jumpMenu(targ,selObj,restore){ //v3.0
eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
<p align="center"><strong><br>
</font>Album</strong></p>
<p>
<?php
switch(@$_GET['action']){ 
////////////////////////////////////////////////////////////////////////////////////////
case "add"; 
//--------------------------------------------------------------------------------------
///
if(isset($_SESSION['pro_active']) && $_SESSION['pro_active'] !="novalue")
{
if ($_SESSION['pro_active'] =="1")
{
// session foo is set
$getact = "
<option value='novalue'>Please Select</option>
<option value='1' selected>Active</option>
<option value='0'>InActive</option>
";
}
elseif($_SESSION['pro_active'] =="0")
{
// session foo is set
$getact = "
<option value='novalue'>Please Select</option>
<option value='1'>Active</option>
<option value='0' selected>InActive</option>
";
} else { 
$getact = "
<option value='novalue'>Please Select</option>
<option value='1' selected>Active</option>
<option value='0'>InActive</option>
";
}
/////////////////////////////////////////////
} else { 
$getact = "
<option value='novalue'>Please Select</option>
<option value='1' selected>Active</option>
<option value='0'>InActive</option>
";
}
///////////////
/// ######################################################################
//////  date
//// day
if (isset($_SESSION['pro_b_day']) && $_SESSION['pro_b_day']!=0) {
$b_day_info = "<option value='{$_SESSION['pro_b_day']}' selected>{$_SESSION['pro_b_day']}</option>";
} else {
$b_day_info = "<option value='".date('d')."' selected>".date('d')."</option>";
}
////// month
if (isset($_SESSION['pro_b_month']) && $_SESSION['pro_b_month']!=0) {
$b_month_info ="<option value='{$_SESSION['pro_b_month']}' selected>{$_SESSION['pro_b_month']}</option>" ;
} else {
$b_month_info = "<option value='".date('m')."' selected>".date('m')."</option>";
}
////// year
if (isset($_SESSION['pro_b_year']) && $_SESSION['pro_b_year']!=0) {
$b_year_info = "<option value='{$_SESSION['pro_b_year']}' selected>{$_SESSION['pro_b_year']}</option>";
} else {
$b_year_info = "<option value='".date('Y')."' selected>".date('Y')."</option>";
}
/// ######################################################################
////// EXPIRE - date
//// day
if (isset($_SESSION['pro_e_day']) && $_SESSION['pro_e_day']!=0) {
$e_day_info = "<option value='{$_SESSION['pro_e_day']}' selected>{$_SESSION['pro_e_day']}</option>";
} else {
$e_day_info = "<option value='0' selected> €Ì— „Õœœ </option>";
}
////// month
if (isset($_SESSION['pro_e_month']) && $_SESSION['pro_e_month']!=0) {
$e_month_info ="<option value='{$_SESSION['pro_e_month']}' selected>{$_SESSION['pro_e_month']}</option>" ;
} else {
$e_month_info = "<option value='0' selected> €Ì— „Õœœ </option>";
}
////// year
if (isset($_SESSION['pro_e_year']) && $_SESSION['pro_e_year']!=0) {
$e_year_info = "<option value='{$_SESSION['pro_e_year']}' selected>{$_SESSION['pro_e_year']}</option>";
} else {
$e_year_info = "<option value='0' selected> €Ì— „Õœœ </option>";
}
/////////////////////////////////////////////
?>
<form action='?action=getadd' method='POST' ENCTYPE='multipart/form-data' name="add" id="add">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Add image</strong></td>
</tr>
<tr align="right">
<td width="396" bgcolor="#CCCCCC"><input name="name" type="text" class="smalltext" id="name"value="<?php if (isset($_SESSION['pro_name'])) { echo stripslashes($_SESSION['pro_name']);} ?>" size="43" maxlength="255"  dir="rtl" ></td>
<td width="190" bgcolor="#CCCCCC"><strong>Name</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><textarea name='details' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='details'  dir="rtl"><?php if (isset($_SESSION['pro_details'])) { echo stripslashes($_SESSION['pro_details']);} ?></textarea></td>
<td valign="top" bgcolor="#CCCCCC"><strong>Details</strong></td>
</tr>
<!-- <tr align="right">
<td bgcolor="#EEEEEE">&nbsp;</td>
<td bgcolor="#EEEEEE">&nbsp;</td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="name_en" type="text" class="smalltext" id="name_en"value="<?php if (isset($_SESSION['pro_name_en'])) { echo stripslashes($_SESSION['pro_name_en']);} ?>" size="43" maxlength="255"  dir="rtl" ></td>
<td bgcolor="#CCCCCC"><strong>Name</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><textarea name='details_en' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='details_en'  dir="rtl"><?php if (isset($_SESSION['pro_details_en'])) { echo stripslashes($_SESSION['pro_details_en']);} ?></textarea></td>
<td valign="top" bgcolor="#CCCCCC"><strong>Details</strong></td>
</tr>-->
<tr align="right">
<td bgcolor="#EEEEEE">&nbsp;</td>
<td bgcolor="#EEEEEE">&nbsp;</td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name='image' type='file' class="smalltext" id='image' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' ></td>
<td bgcolor="#CCCCCC"><strong>Image - File</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">
<select name="active" class="smalltext" id="active" dir="rtl">
<?php echo $getact ; ?>
</select></td>
<td bgcolor="#CCCCCC"><strong>Status</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name='catid' class="smalltext" dir="rtl" >
<option value='novalue'>Select Section</option>
<?php
//////
if(isset($_SESSION['pro_catid']) && $_SESSION['pro_catid'] !="novalue")
{
$image_var = mysql_query("SELECT * FROM images_cat WHERE catid='{$_SESSION['pro_catid']}' ");  
while ($image_var3 = mysql_fetch_array($image_var)) {  
echo "<option value='{$image_var3['catid']}' selected>{$image_var3['catname']}</option>";
} // end while
} // end conditioning
echo show_dropdown('0','0');
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>Section</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="b_day" id="b_day">
<?php 
echo $b_day_info;
?>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="b_month" id="b_month">
<?php 
echo $b_month_info;
?>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<select name="b_year" id="b_year">
<?php 
echo $b_year_info;
?>
<?php
$year_start = "1998";
$current_year = date("Y");
$years_numder = ($current_year - $year_start);
/////////////////////////////// facilites SEESIONS 
for($i = 0; $i <= $years_numder; $i++){ 
?>
<option value="<?php echo date("Y")-$i;?>"><?php echo date("Y")-$i;?></option>
<?php
} // end for
?>
</select>            </td>
<td bgcolor="#CCCCCC"><strong>Date</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="details_en" type="hidden" id="details_en" value="0">
<input name="name_en" type="hidden" id="name_en" value="0">
<input name="e_year" type="hidden" id="e_year" value="0">
<input name="e_month" type="hidden" id="e_month" value="0">
<input name="e_day" type="hidden" id="e_day" value="0">
<input name="price" type="hidden" id="price" value="0">
<input name="code" type="hidden" id="code" value="0">
<input name="quantity" type="hidden" id="quantity" value="0">
<input name="buy_type" type="hidden" id="buy_type" value="0"></td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="add"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</form>
<?php
//--------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "getadd"; 
//--------------------------------------------------------------------------------------
//////////
//CK the (magic_quotes_gpc) if it is (off) ... this is helpful to protection
if(!get_magic_quotes_gpc()) 
{ 
// Get what is in the  ($_POST) 
foreach($_POST as $k=>$v) 
{ 
$_POST[$k] = addslashes($v); 
} 
} 
/*
Ck  if not empty fields
*/
//// info
///////sessions files///////////
$_SESSION['pro_name'] = $_POST['name'];
$_SESSION['pro_code'] = $_POST['code'];
$_SESSION['pro_details'] = $_POST['details'];
$_SESSION['pro_price'] = $_POST['price'];
$_SESSION['pro_active'] = $_POST['active'];
$_SESSION['pro_catid'] = $_POST['catid'];
$_SESSION['pro_quantity'] = $_POST['quantity'];
$_SESSION['pro_buy_type'] = $_POST['buy_type'];
$_SESSION['pro_name_en'] = $_POST['name_en'];
$_SESSION['pro_details_en'] = $_POST['details_en'];
$_SESSION['pro_b_day'] = @$_POST['b_day'];
$_SESSION['pro_b_month'] = @$_POST['b_month'];
$_SESSION['pro_b_year'] = @$_POST['b_year'];
$_SESSION['pro_e_day'] = @$_POST['e_day'];
$_SESSION['pro_e_month'] = @$_POST['e_month'];
$_SESSION['pro_e_year'] = @$_POST['e_year'];
/// image Dir ///////////////
// image
$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files
$upload_image = "../$db_upload_dir/products/images/{$_POST['catid']}/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/products/thumbnails/{$_POST['catid']}/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////////////
$date_print = date('jmY_');
///////////////////////////////////////////////////////////////////////////////////////////////////
if (!empty($_FILES['image']['name'])) {
//////////////
$get_picname1 = findname($_FILES['image']['name']);
$get_picexten1 = findtype($_FILES['image']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 1
$uploadfile1 = $upload_temp . basename($final_pic1);
}
////////////// Validate
if (!isset($_POST['name']) || $_POST['name'] == "") {
print "
<div align='center' class='msg'><strong>
Please write the name
</strong></div>
";
} elseif (!isset($_POST['active']) || $_POST['active'] == "" || $_POST['active'] == "novalue") {
print "
<div align='center' class='msg'><strong>
Please select the status
</strong></div>
";
} elseif (!isset($_POST['catid']) || $_POST['catid'] == "" || $_POST['catid'] == "novalue") {
print "
<div align='center' class='msg'><strong>
Please select section
</strong></div>
"; 
} elseif (empty($_FILES['image']['name'])) {
/////////////////////
if (isset($_POST['b_month']) & $_POST['b_month']!=0 & isset($_POST['b_day']) & $_POST['b_day']!=0 & isset($_POST['b_year']) & $_POST['b_year']!=0) {
$date = mktime(0, 0, 0, "{$_POST['b_month']}",   "{$_POST['b_day']}",   "{$_POST['b_year']}");
} else {
$date = 0;
}
//
if (isset($_POST['e_month']) & $_POST['e_month']!=0 & isset($_POST['e_day']) & $_POST['e_day']!=0 & isset($_POST['e_year']) & $_POST['e_year']!=0) {
$expire_time = mktime(0, 0, 0, "{$_POST['e_month']}",   "{$_POST['e_day']}",   "{$_POST['e_year']}");
} else {
$expire_time = 0;
}
/////////////////
$userid = 0;
$time_info = time();
$_POST['name'] = addslashes($_POST['name']); 
$_POST['details'] = addslashes($_POST['details']); 
$_POST['name_en'] = addslashes($_POST['name_en']); 
$_POST['details_en'] = addslashes($_POST['details_en']); 
// add to admin table
$in = mysql_query ("INSERT INTO `images` (`name`,`name_en`, `userid`, `code`, `details`,`details_en`, `price` , `active`, `m_active`,`date` ,`expire_date` , `time` , `hits`, `catid` , `quantity` ,`buy_type` ) VALUES ('{$_POST['name']}', '{$_POST['name_en']}','$userid', '{$_POST['code']}', '{$_POST['details']}', '{$_POST['details_en']}', '{$_POST['price']}', '{$_POST['active']}',  '{$_POST['active']}','$date', '$expire_time',  '$time_info', '0' , '{$_POST['catid']}' ,'{$_POST['quantity']}' ,'{$_POST['buy_type']}')") Or Die(MySQL_Error()); 
if(!$in) {
print "
<div align='center' class='msg'><strong>
Error adding
</strong></div>
"; 
} else  { 
/// unset SESSIONS
unset($_SESSION['pro_name']);
unset($_SESSION['pro_code']);
unset($_SESSION['pro_details']);
unset($_SESSION['pro_price']);
unset($_SESSION['pro_active']);
unset($_SESSION['pro_catid']);
unset($_SESSION['pro_quantity']);
unset($_SESSION['pro_buy_type']);
unset($_SESSION['pro_b_day']);
unset($_SESSION['pro_b_month']);
unset($_SESSION['pro_b_year']);
unset($_SESSION['pro_e_day']);
unset($_SESSION['pro_e_month']);
unset($_SESSION['pro_e_year']);
////
print "
<div align='center'><strong>
 „ ≈÷«›… «·„⁄—Ê÷… »‰Ã«Õ
</strong></div>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?action=add'>";
}
/////////////////////////////////////////////////////////////
} elseif (!empty($_FILES['image']['name'])) {
///-----
if ($_FILES['image']['type'] !="image/pjpeg" && $_FILES['image']['type'] !="image/gif" && $_FILES['image']['type'] !="image/jpeg"){
print "
<div align='center' class='msg'><strong>
·ﬁœ ﬁ„  »√—›«ﬁ ’Ê—… ··„⁄—Ê÷… ·«  Õ„· ’Ì€… „”„ÊÕ »Â« <br/>
«·’Ì€ «·„”„ÊÕ »Â« ÂÌ 
(.gif - .jpg)
›ﬁÿ
</strong></div>
"; 
} elseif (@$_FILES['image']['size'] > $max_size) {
print "
<div align='center' class='msg'><strong>
·ﬁœ ﬁ„  »√—›«ﬁ ’Ê—…  ›Êﬁ «·ÕÃ„ «·„”„ÊÕ »Â<br/>
«·ÕÃ„ «·„”„ÊÕ »Â ÂÊ
(2 MB)
›ﬁÿ
</strong></div>
"; 
} elseif (file_exists("$upload_image/{$final_pic1}") || file_exists("$upload_thumb/{$final_pic1}")) {
print "
<div align='center' class='msg'><strong>
«·’Ê—… «·„—›ﬁ…  Õ„· √”„ ’Ê—… „ Ê«Ãœ ›Ì „Êﬁ⁄‰« .. Ì—ÃÏ  €ÌÌ— „”„Ï «·’Ê—… Ê ≈⁄«œ… «·„Õ«Ê·…
</strong></div>
"; 
} else {
if (move_uploaded_file(@$_FILES['image']['tmp_name'], $uploadfile1)) {
///////////////////// Thumb 
if (find_size_file($uploadfile1,$db_thumb_width,$db_thumb_height)) {
copy($upload_temp.$final_pic1, $upload_thumb.$final_pic1);
} else {
create_thumbs("$upload_temp",$upload_thumb,$final_pic1,$db_thumb_width,$db_thumb_height);
}
chmod("$upload_thumb/{$final_pic1}", 0644);  // image directory; permission
///////////////////// Image
if (find_size_file($uploadfile1,$db_image_width,$db_image_height)) {
copy($upload_temp.$final_pic1, $upload_image.$final_pic1);
}else {
create_thumbs("$upload_temp",$upload_image,$final_pic1,$db_image_width,$db_image_height);
}
chmod("$upload_image/{$final_pic1}", 0644);  // image directory; permission
/////////////////////
/////////////////////
if (isset($_POST['b_month']) & $_POST['b_month']!=0 & isset($_POST['b_day']) & $_POST['b_day']!=0 & isset($_POST['b_year']) & $_POST['b_year']!=0) {
$date = mktime(0, 0, 0, "{$_POST['b_month']}",   "{$_POST['b_day']}",   "{$_POST['b_year']}");
} else {
$date = 0;
}
//
if (isset($_POST['e_month']) & $_POST['e_month']!=0 & isset($_POST['e_day']) & $_POST['e_day']!=0 & isset($_POST['e_year']) & $_POST['e_year']!=0) {
$expire_time = mktime(0, 0, 0, "{$_POST['e_month']}",   "{$_POST['e_day']}",   "{$_POST['e_year']}");
} else {
$expire_time = 0;
}
/////////////////
$userid = 0;
$time_info = time();
$_POST['name'] = addslashes($_POST['name']); 
$_POST['details'] = addslashes($_POST['details']); 
$_POST['name_en'] = addslashes($_POST['name_en']); 
$_POST['details_en'] = addslashes($_POST['details_en']); 
// add to table
$in = mysql_query ("INSERT INTO `images` (`name`,`name_en`, `userid`, `code`, `details`,`details_en`,  `price` , `active`,`m_active`, `date` ,`expire_date` , `time` , `hits`, `catid` , `quantity` ,`buy_type` ,`image`, `thumbnail` ) VALUES ('{$_POST['name']}','{$_POST['name_en']}', '$userid', '{$_POST['code']}', '{$_POST['details']}', '{$_POST['details_en']}', '{$_POST['price']}', '{$_POST['active']}','{$_POST['active']}',  '$date' , '$expire_time' ,  '$time_info', '0' , '{$_POST['catid']}' ,'{$_POST['quantity']}' ,'{$_POST['buy_type']}' , '$final_pic1', '$final_pic1')") Or Die(MySQL_Error()); 
if(!$in) {
print "
<div align='center' class='msg'><strong>
Error adding
</strong></div>
"; 
} else { 
/// unset SESSIONS
unset($_SESSION['pro_name']);
unset($_SESSION['pro_code']);
unset($_SESSION['pro_details']);
unset($_SESSION['pro_price']);
unset($_SESSION['pro_active']);
unset($_SESSION['pro_catid']);
unset($_SESSION['pro_quantity']);
unset($_SESSION['pro_buy_type']);
unset($_SESSION['pro_b_day']);
unset($_SESSION['pro_b_month']);
unset($_SESSION['pro_b_year']);
unset($_SESSION['pro_e_day']);
unset($_SESSION['pro_e_month']);
unset($_SESSION['pro_e_year']);
////////
unlink($uploadfile1);
////////
print "
<div align='center'><strong>
The item has been inserted successfully
</strong></div>
"; 
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?action=add'>";
}
} else { 
print "
<div align='center' class='msg'><strong>
·„ Ì „ √—›«ﬁ «·’Ê—… .. «·—Ã«¡ „—«Ã⁄… ’·«ÕÌ«  ›Ê·œ— «· Õ„Ì·
</strong></div>
"; 
} // end else move file
}/// end INside else
}  /// END All
//--------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "edit"; 
//--------------------------------------------------------------------------------------
$imageid = @$_GET['imageid'];
$edit_images = mysql_query("select * from images WHERE imageid='$imageid' ")Or Die(MySQL_Error());
/// cer
while($edit = mysql_fetch_array($edit_images)){ 
extract($edit);
$image_dir = "../$db_upload_dir/products/images/$catid/";
if ($image!='') { $image_link = "<a href='$image_dir$image' target='_blank'>«·’Ê—… «·Õ«·Ì… </a>"; } else {$image_link = "";}
///// active
if(isset($_SESSION['pro_edit_active']) && $_SESSION['pro_edit_active'] !="novalue") {
if ($_SESSION['pro_edit_active'] =="1") {
// session foo is set
$getact = "
<option value='novalue'>Please Select</option>
<option value='1' selected>Active</option>
<option value='0'>InActive</option>
";
} elseif($_SESSION['pro_edit_active'] =="0") {
// session foo is set
$getact = "
<option value='novalue'>Please Select</option>
<option value='1'>Active</option>
<option value='0' selected>InActive</option>
";
}
/////////////////////////////////////////////
} elseif($active =="1") {
$getact = "
<option value='novalue'>Please Select</option>
<option value='1' selected>Active</option>
<option value='0'>InActive</option>
";
} elseif($active =="0") {
$getact = "
<option value='novalue'>Please Select</option>
<option value='1'>Active</option>
<option value='0' selected>InActive</option>
";
} else { 
$getact = "
<option value='novalue'>Please Select</option>
<option value='1'>Active</option>
<option value='0'>InActive</option>
";
}
////////////////////////////////////////////// 
////////////////////////////////////////////// 
////// EXPIRE - date
////////////////////////////////////////////// 
////// EXPIRE - date
$b_date_info = date('d-m-Y', $edit['date']);
$b_date_info = explode("-", $b_date_info);
//////
if (isset($_SESSION['pro_edit_e_day']) && $_SESSION['pro_edit_e_day']!=0) {
$b_day_info = "<option value='{$_SESSION['pro_edit_e_day']}' selected>{$_SESSION['pro_edit_e_day']}</option>";
} elseif ($edit['date']!=0) {
$b_day_info = "<option value='{$b_date_info[0]}' selected>{$b_date_info[0]}</option>";
} else {
$b_day_info = "<option value='0' selected> €Ì— „Õœœ </option>";
}
////// month
if (isset($_SESSION['pro_edit_e_month']) && $_SESSION['pro_edit_e_month']!=0) {
$b_month_info ="<option value='{$_SESSION['pro_edit_e_month']}' selected>{$_SESSION['pro_edit_e_month']}</option>" ;
} elseif ($edit['date']!=0) {
$b_month_info ="<option value='{$b_date_info[1]}' selected>{$b_date_info[1]}</option>" ;
} else {
$b_month_info = "<option value='0' selected> €Ì— „Õœœ </option>";
}
////// year
if (isset($_SESSION['pro_edit_e_year']) && $_SESSION['pro_edit_e_year']!=0) {
$b_year_info = "<option value='{$_SESSION['pro_edit_e_year']}' selected>{$_SESSION['pro_edit_e_year']}</option>";
} elseif ($edit['date']!=0) {
$b_year_info = "<option value='{$b_date_info[2]}' selected>{$b_date_info[2]}</option>";
} else {
$b_year_info = "<option value='0' selected> €Ì— „Õœœ </option>";
}
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
////////////////////////////////////////////// 
////// EXPIRE - date
$expire_date_info = date('d-m-Y', $edit['expire_date']);
$expire_date_info = explode("-", $expire_date_info);
//////
if (isset($_SESSION['pro_edit_e_day']) && $_SESSION['pro_edit_e_day']!=0) {
$e_day_info = "<option value='{$_SESSION['pro_edit_e_day']}' selected>{$_SESSION['pro_edit_e_day']}</option>";
} elseif ($edit['expire_date']!=0) {
$e_day_info = "<option value='{$expire_date_info[0]}' selected>{$expire_date_info[0]}</option>";
} else {
$e_day_info = "<option value='0' selected> €Ì— „Õœœ </option>";
}
////// month
if (isset($_SESSION['pro_edit_e_month']) && $_SESSION['pro_edit_e_month']!=0) {
$e_month_info ="<option value='{$_SESSION['pro_edit_e_month']}' selected>{$_SESSION['pro_edit_e_month']}</option>" ;
} elseif ($edit['expire_date']!=0) {
$e_month_info ="<option value='{$expire_date_info[1]}' selected>{$expire_date_info[1]}</option>" ;
} else {
$e_month_info = "<option value='0' selected> €Ì— „Õœœ </option>";
}
////// year
if (isset($_SESSION['pro_edit_e_year']) && $_SESSION['pro_edit_e_year']!=0) {
$e_year_info = "<option value='{$_SESSION['pro_edit_e_year']}' selected>{$_SESSION['pro_edit_e_year']}</option>";
} elseif ($edit['expire_date']!=0) {
$e_year_info = "<option value='{$expire_date_info[2]}' selected>{$expire_date_info[2]}</option>";
} else {
$e_year_info = "<option value='0' selected> €Ì— „Õœœ </option>";
}
//////////////////////////////////////////////////////////////
?>
<form action='?action=update' method='POST' ENCTYPE='multipart/form-data' name="edit" id="edit">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Edit Image</strong></td>
</tr>
<tr align="right">
<td width="396" bgcolor="#CCCCCC"><input name="name" type="text" class="smalltext" id="name"value="<?php if (isset($_SESSION['pro_edit_name'])) { echo stripslashes($_SESSION['pro_edit_name']);} else {echo "$name"; } ?>" size="43" maxlength="255"  dir="rtl" ></td>
<td width="190" bgcolor="#CCCCCC"><strong>Name</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><textarea name='details' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='details'  dir="rtl"><?php if (isset($_SESSION['pro_edit_details'])) { echo stripslashes($_SESSION['pro_edit_details']);} else {echo "$details"; } ?></textarea></td>
<td valign="top" bgcolor="#CCCCCC"><strong>Details</strong></td>
</tr>
<!--<tr align="right">
<td bgcolor="#EEEEEE">&nbsp;</td>
<td bgcolor="#EEEEEE">&nbsp;</td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="name_en" type="text" class="smalltext" id="name_en"value="<?php if (isset($_SESSION['pro_edit_name_en'])) { echo stripslashes($_SESSION['pro_edit_name_en']);} else {echo "$name_en"; } ?>" size="43" maxlength="255"  dir="rtl" ></td>
<td bgcolor="#CCCCCC"><strong>Name</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><textarea name='details_en' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='details_en'  dir="rtl"><?php if (isset($_SESSION['pro_edit_details_en'])) { echo stripslashes($_SESSION['pro_edit_details_en']);} else {echo "$details_en"; } ?></textarea></td>
<td valign="top" bgcolor="#CCCCCC"><strong>Details</strong></td>
</tr>-->
<tr align="right">
<td bgcolor="#EEEEEE">&nbsp;</td>
<td bgcolor="#EEEEEE">&nbsp;</td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php echo $image_link; ?>
<input name='image' type='file' class="smalltext" id='image' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' ></td><td bgcolor="#CCCCCC"><strong>Image - File</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">
<select name='active' id='active' dir="rtl">
<?php echo "$getact"; ?>
</select>            </td>
<td bgcolor="#CCCCCC"><strong>Status</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">
<select name='catid' dir="rtl">
<option value='novalue'>Select Section</option>
<?php
///////////////////////////////////
$edit_cat = mysql_query("select * from images_cat where catid='$catid' ");
/// cer
while($edit = mysql_fetch_array($edit_cat)){ 
extract($edit);
echo "<option value='$catid' selected>$catname</option>";
}
//////////////////////////////////////
echo show_dropdown_edit('0','0');
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>Section</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="b_day" id="b_day">
<?php 
echo $b_day_info;
?>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>


<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="b_month" id="b_month">
<?php 
echo $b_month_info;
?>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<select name="b_year" id="b_year">
<?php 
echo $b_year_info;
?>
<?php
$year_start = "1998";
$current_year = date("Y");
$years_numder = ($current_year - $year_start);
/////////////////////////////// facilites SEESIONS 
for($i = 0; $i <= $years_numder; $i++){ 
?>
<option value="<?php echo date("Y")-$i;?>"><?php echo date("Y")-$i;?></option>
<?php
} // end for
?>
</select>            </td>
<td bgcolor="#CCCCCC"><strong>Date</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="details_en" type="hidden" id="details_en" value="0">
<input name="name_en" type="hidden" id="name_en" value="0">
<input name="e_year" type="hidden" id="e_year" value="0">
<input name="e_month" type="hidden" id="e_month" value="0">
<input name="e_day" type="hidden" id="e_day" value="0">
<input name="price" type="hidden" id="price" value="<?php if (isset($_SESSION['pro_edit_price'])) { echo stripslashes($_SESSION['pro_edit_price']);}  else {echo "$price"; }  ?>">
<input name="code" type="hidden" id="code" value="0">
<input name="quantity" type="hidden" id="quantity" value="0">
<input name="buy_type" type="hidden" id="buy_type" value="0">
<input name='imageid' type='hidden' id='imageid' value='<?php echo "$imageid"; ?>'>
<input name='oldfile' type='hidden' id='oldfile' value='<?php echo "$image"; ?>'>
<input name='oldcat' type='hidden' id='oldcat' value='<?php echo $catid; ?>'></td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="Update"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</form>
<?php
}
//--------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "update"; 
//--------------------------------------------------------------------------------------
//////////
//CK the (magic_quotes_gpc) if it is (off) ... this is helpful to protection
if(!get_magic_quotes_gpc()) 
{ 
// Get what is in the  ($_POST) 
foreach($_POST as $k=>$v) 
{ 
$_POST[$k] = addslashes($v); 
} 
} 
/*
Ck  if not empty fields
*/
//// info
///////sessions files///////////
$_SESSION['pro_edit_name'] = $_POST['name'];
$_SESSION['pro_edit_code'] = $_POST['code'];
$_SESSION['pro_edit_details'] = $_POST['details'];
$_SESSION['pro_edit_price'] = $_POST['price'];
$_SESSION['pro_edit_active'] = $_POST['active'];
$_SESSION['pro_edit_catid'] = $_POST['catid'];
$_SESSION['pro_edit_quantity'] = $_POST['quantity'];
$_SESSION['pro_edit_buy_type'] = $_POST['buy_type'];
$_SESSION['pro_edit_name_en'] = $_POST['name_en'];
$_SESSION['pro_edit_details_en'] = $_POST['details_en'];
$_SESSION['pro_edit_b_day'] = $_POST['b_day'];
$_SESSION['pro_edit_b_month'] = $_POST['b_month'];
$_SESSION['pro_edit_b_year'] = $_POST['b_year'];
$_SESSION['pro_edit_e_day'] = $_POST['e_day'];
$_SESSION['pro_edit_e_month'] = $_POST['e_month'];
$_SESSION['pro_edit_e_year'] = $_POST['e_year'];
/// image Dir ///////////////
// image
$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files
$upload_image = "../$db_upload_dir/products/images/{$_POST['catid']}/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/products/thumbnails/{$_POST['catid']}/"; //change the name of the directory to upload files
///==========================
$old_imag_dir = "../$db_upload_dir/products/images/{$_POST['oldcat']}/";
$old_thumb_dir = "../$db_upload_dir/products/thumbnails/{$_POST['oldcat']}/";
///////////////////////////////////////////////////////////////////////////////////////////////////
$date_print = date('jmY_');
///////////////////////////////////////////////////////////////////////////////////////////////////
if (!empty($_FILES['image']['name'])) {
//////////////
$get_picname1 = findname($_FILES['image']['name']);
$get_picexten1 = findtype($_FILES['image']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 1
$uploadfile1 = $upload_temp . basename($final_pic1);
}
////////////// Validate
if (!isset($_POST['name']) || $_POST['name'] == "") {
print "
<div align='center' class='msg'><strong>
«·—Ã«¡ ﬂ «»… √”„ «·„⁄—Ê÷…
</strong></div>
";
} elseif (!isset($_POST['active']) || $_POST['active'] == "" || $_POST['active'] == "novalue") {
print "
<div align='center' class='msg'><strong>
«·—Ã«¡  ÕœÌœ Õ«·… «·„⁄—Ê÷…
</strong></div>
";
} elseif (!isset($_POST['catid']) || $_POST['catid'] == "" || $_POST['catid'] == "novalue") {
print "
<div align='center' class='msg'><strong>
«·—Ã«¡  ÕœÌœ ﬁ”„« ··„⁄—Ê÷…
</strong></div>
"; 
} elseif (empty($_FILES['image']['name'])) {
/////////////////////
$_POST['name'] = addslashes($_POST['name']); 
$_POST['details'] = addslashes($_POST['details']); 
$_POST['name_en'] = addslashes($_POST['name_en']); 
$_POST['details_en'] = addslashes($_POST['details_en']); 
/////////////////////
if (isset($_POST['b_month']) & $_POST['b_month']!=0 & isset($_POST['b_day']) & $_POST['b_day']!=0 & isset($_POST['b_year']) & $_POST['b_year']!=0) {
$date = mktime(0, 0, 0, "{$_POST['b_month']}",   "{$_POST['b_day']}",   "{$_POST['b_year']}");
} else {
$date = 0;
}
//
if (isset($_POST['e_month']) & $_POST['e_month']!=0 & isset($_POST['e_day']) & $_POST['e_day']!=0 & isset($_POST['e_year']) & $_POST['e_year']!=0) {
$expire_time = mktime(0, 0, 0, "{$_POST['e_month']}",   "{$_POST['e_day']}",   "{$_POST['e_year']}");
} else {
$expire_time = 0;
}
/////////////////
// add to admin table
$in = mysql_query (" UPDATE images SET name='{$_POST['name']}' , code='{$_POST['code']}', details='{$_POST['details']}', name_en='{$_POST['name_en']}' , details_en='{$_POST['details_en']}' , price='{$_POST['price']}' , active='{$_POST['active']}' , m_active='{$_POST['active']}' , quantity='{$_POST['quantity']}' , buy_type='{$_POST['buy_type']}' , date='$date',   expire_date='$expire_time',  catid='{$_POST['catid']}'  WHERE imageid='{$_POST['imageid']}' ") Or Die(MySQL_Error()); 
if(!$in) {
print "
<div align='center' class='msg'><strong>
Error
</strong></div>
"; 
} else  { 
/// unset SESSIONS
unset($_SESSION['pro_edit_name']);
unset($_SESSION['pro_edit_code']);
unset($_SESSION['pro_edit_details']);
unset($_SESSION['pro_edit_price']);
unset($_SESSION['pro_edit_active']);
unset($_SESSION['pro_edit_catid']);
unset($_SESSION['pro_edit_quantity']);
unset($_SESSION['pro_edit_buy_type']);
unset($_SESSION['pro_edit_b_day']);
unset($_SESSION['pro_edit_b_month']);
unset($_SESSION['pro_edit_b_year']);
unset($_SESSION['pro_edit_e_day']);
unset($_SESSION['pro_edit_e_month']);
unset($_SESSION['pro_edit_e_year']);
//////////////// IF MOVE ///////////////////////////
if ($_POST['oldcat']!=$_POST['catid']) {
//--------------------------------------------------
/// -- MOVE IMAGE
if (file_exists("$old_imag_dir"."{$_POST['oldfile']}") && $_POST['oldfile']!='') {
copy($old_imag_dir.$_POST['oldfile'], $upload_image.$_POST['oldfile']);
unlink ("$old_imag_dir"."{$_POST['oldfile']}");
}
/// -- MOVE THUMBNAIL
if (file_exists("$old_thumb_dir"."{$_POST['oldfile']}") && $_POST['oldfile']!='') {
copy($old_thumb_dir.$_POST['oldfile'], $upload_thumb.$_POST['oldfile']);
unlink ("$old_thumb_dir"."{$_POST['oldfile']}");
}
//--------------------------------------------------
} // end move all
//////////////// END IF MOVE ///////////////////////
////
print "
<div align='center'><strong>
The item has been updated successfully
</strong></div>
";
}
/////////////////////////////////////////////////////////////
} elseif (!empty($_FILES['image']['name'])) {
///-----
if ($_FILES['image']['type'] !="image/pjpeg" && $_FILES['image']['type'] !="image/gif" && $_FILES['image']['type'] !="image/jpeg"){
print "
<div align='center' class='msg'><strong>
·ﬁœ ﬁ„  »√—›«ﬁ ’Ê—… ··„⁄—Ê÷… ·«  Õ„· ’Ì€… „”„ÊÕ »Â« <br/>
«·’Ì€ «·„”„ÊÕ »Â« ÂÌ 
(.gif - .jpg)
›ﬁÿ
</strong></div>
"; 
} elseif (@$_FILES['image']['size'] > $max_size) {
print "
<div align='center' class='msg'><strong>
·ﬁœ ﬁ„  »√—›«ﬁ ’Ê—…  ›Êﬁ «·ÕÃ„ «·„”„ÊÕ »Â<br/>
«·ÕÃ„ «·„”„ÊÕ »Â ÂÊ
(2 MB)
›ﬁÿ
</strong></div>
"; 
} elseif (file_exists("$upload_image/{$final_pic1}") || file_exists("$upload_thumb/{$final_pic1}")) {
print "
<div align='center' class='msg'><strong>
«·’Ê—… «·„—›ﬁ…  Õ„· √”„ ’Ê—… „ Ê«Ãœ ›Ì „Êﬁ⁄‰« .. Ì—ÃÏ  €ÌÌ— „”„Ï «·’Ê—… Ê ≈⁄«œ… «·„Õ«Ê·…
</strong></div>
"; 
} else {
if (move_uploaded_file(@$_FILES['image']['tmp_name'], $uploadfile1)) {
///////////////////// Thumb 
if (find_size_file($uploadfile1,$db_thumb_width,$db_thumb_height)) {
copy($upload_temp.$final_pic1, $upload_thumb.$final_pic1);
} else {
create_thumbs("$upload_temp",$upload_thumb,$final_pic1,$db_thumb_width,$db_thumb_height);
}
chmod("$upload_thumb/{$final_pic1}", 0644);  // image directory; permission
///////////////////// Image
if (find_size_file($uploadfile1,$db_image_width,$db_image_height)) {
copy($upload_temp.$final_pic1, $upload_image.$final_pic1);
}else {
create_thumbs("$upload_temp",$upload_image,$final_pic1,$db_image_width,$db_image_height);
}
chmod("$upload_image/{$final_pic1}", 0644);  // image directory; permission
/////////////////////
$_POST['name'] = addslashes($_POST['name']); 
$_POST['details'] = addslashes($_POST['details']); 
$_POST['name_en'] = addslashes($_POST['name_en']); 
$_POST['details_en'] = addslashes($_POST['details_en']);
/////////////////////
if (isset($_POST['b_month']) & $_POST['b_month']!=0 & isset($_POST['b_day']) & $_POST['b_day']!=0 & isset($_POST['b_year']) & $_POST['b_year']!=0) {
$date = mktime(0, 0, 0, "{$_POST['b_month']}",   "{$_POST['b_day']}",   "{$_POST['b_year']}");
} else {
$date = 0;
}
//
if (isset($_POST['e_month']) & $_POST['e_month']!=0 & isset($_POST['e_day']) & $_POST['e_day']!=0 & isset($_POST['e_year']) & $_POST['e_year']!=0) {
$expire_time = mktime(0, 0, 0, "{$_POST['e_month']}",   "{$_POST['e_day']}",   "{$_POST['e_year']}");
} else {
$expire_time = 0;
}
/////////////////
// add to admin table
$in = mysql_query (" UPDATE images SET name='{$_POST['name']}' , code='{$_POST['code']}', details='{$_POST['details']}', name_en='{$_POST['name_en']}' , details_en='{$_POST['details_en']}' , price='{$_POST['price']}' , active='{$_POST['active']}' , m_active='{$_POST['active']}' , quantity='{$_POST['quantity']}' , buy_type='{$_POST['buy_type']}' , catid='{$_POST['catid']}' , date='$date',   expire_date='$expire_time', image='$final_pic1', thumbnail='$final_pic1'  WHERE imageid='{$_POST['imageid']}' ") Or Die(MySQL_Error()); 
if(!$in) {
print "
<div align='center' class='msg'><strong>
Error updating
</strong></div>
"; 
} else { 
/// unset SESSIONS
unset($_SESSION['pro_edit_name']);
unset($_SESSION['pro_edit_code']);
unset($_SESSION['pro_edit_details']);
unset($_SESSION['pro_edit_price']);
unset($_SESSION['pro_edit_active']);
unset($_SESSION['pro_edit_catid']);
unset($_SESSION['pro_edit_quantity']);
unset($_SESSION['pro_edit_buy_type']);
unset($_SESSION['pro_edit_b_day']);
unset($_SESSION['pro_edit_b_month']);
unset($_SESSION['pro_edit_b_year']);
unset($_SESSION['pro_edit_e_day']);
unset($_SESSION['pro_edit_e_month']);
unset($_SESSION['pro_edit_e_year']);
////////
// UNlink image
if (file_exists("$old_imag_dir"."{$_POST['oldfile']}") && $_POST['oldfile']!='') {
unlink ("$old_imag_dir"."{$_POST['oldfile']}");
}
// UNlink thumb
if (file_exists("$old_thumb_dir"."{$_POST['oldfile']}") && $_POST['oldfile']!='') {
unlink ("$old_thumb_dir"."{$_POST['oldfile']}");
}
////////
unlink($uploadfile1);
////////
print "
<div align='center'><strong>
The item has been updated successfully
</strong></div>
"; 
}
} else { 
print "
<div align='center' class='msg'><strong>
·„ Ì „ √—›«ﬁ «·’Ê—… .. «·—Ã«¡ „—«Ã⁄… ’·«ÕÌ«  ›Ê·œ— «· Õ„Ì·
</strong></div>
"; 
} // end else move file
}/// end INside else
}  /// END All
//--------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "delcon"; 
//--------------------------------------------------------------------------------------
$imageid = @$_GET['imageid'];
$del_images = mysql_query("select * from images where imageid='$imageid' ");
/// cer
while($del = mysql_fetch_array($del_images)){ 
extract($del);
$image_dir = "../$db_upload_dir/products/images/$catid/";
if ($image!='') { $image_link = "<a href='$image_dir$image' target='_blank'>«·’Ê—… «·Õ«·Ì… </a>"; } else {$image_link = "";}
////////
?>
<form method='post' action='?action=del'>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Delete Image</strong></td>
</tr>
<tr align="right">
<td width="396" bgcolor="#CCCCCC"><?php echo "$name"; ?></td>
<td width="190" bgcolor="#CCCCCC"><strong>Image Name</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php echo $image_link; ?></td>
<td bgcolor="#CCCCCC"><strong>File</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC" dir="rtl">
<input name='doit' type='radio' value='0' checked> 
No
<input name='doit' type='radio' value='1'>
Yes</td>
<td bgcolor="#CCCCCC"><strong>Are you sure</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name='imageid' type='hidden' id='imageid' value='<?php echo "$imageid"; ?>'>
<input name='catid' type='hidden' id='catid' value='<?php echo "$catid"; ?>'>
<input name='image_path' type='hidden' id='image_path' value='<?php echo "$image"; ?>'>
<input name='thumbnail_path' type='hidden' id='thumbnail_path' value='<?php echo "$thumbnail"; ?>'></td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="Proceed"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</form>
<?php
}
//--------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "del"; 
//--------------------------------------------------------------------------------------
if (!isset($_POST["doit"]) || $_POST["doit"] =="" || $_POST["doit"] !="1"){
echo "
<strong><br>
<br>
You selected no to delete the item .. please wait </strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";
} else {
$_POST['imageid'] = intval($_POST['imageid']);
$_POST['catid'] = intval($_POST['catid']);
$image_dir = "../$db_upload_dir/products/images/{$_POST['catid']}/";
$thumb_dir = "../$db_upload_dir/products/thumbnails/{$_POST['catid']}/";
////////////
if ($_POST['image_path']!='') { 
unlink ($image_dir.$_POST['image_path']);
}
if ($_POST['thumbnail_path']!='') { 
unlink ($thumb_dir.$_POST['thumbnail_path']);
}
//// result
$in = mysql_query (" DELETE FROM images WHERE imageid='{$_POST['imageid']}'") Or Die(MySQL_Error()); 
// data input
echo " 
<p><strong>
The item has been deleted successfully</strong></p> 
";
// resulte close
}
//--------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "notactive"; 
//--------------------------------------------------------------------------------------
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = @$_GET['page']; 
} 
// Define the number of results per page 
$max_results = 24; 
// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_all = mysql_query("SELECT * FROM images WHERE active!='1' ORDER BY imageid ASC LIMIT $from, $max_results"); 
/////////////////////////////////////////////////////////////////////////////////////////////
$num=mysql_num_rows($view_all);
if($num==0){ 
print"
<div align='center' class='error'>
No images InActive
</div>
"; 
}
else {  
// data input
echo"<table width='100%'><tr>"; 
$i=0; 
///////
while($row = mysql_fetch_array($view_all)){ 
extract($row);
$view_extra = mysql_query("SELECT * FROM images_extra WHERE image_id='{$row['imageid']}' ") or die(mysql_error()); 
$extra=mysql_num_rows($view_extra);
///// Active OR Not
/// stat
if($active == '1'){
$act = "<strong><font color='#0000FF'>
Active
</font></strong>";
}else{
$act = "<strong><font color='#FF0000'>
InActive
</font></strong>";
}
////////////
// image
$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files
$upload_image = "../$db_upload_dir/products/images/$catid/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/products/thumbnails/$catid/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////
if ($image=='') {$image_info = $upload_temp."default.jpg";} else {
if (file_exists("$upload_image"."$image")) {
$image_info = $upload_image.$image;
} else {
$image_info = $upload_temp."no_exist.jpg";
}
} 
// ---------
if ($thumbnail=='') {$thumbnail_info = $upload_temp."default.jpg";} else {
if (file_exists("$upload_thumb"."$thumbnail")) {
$thumbnail_info = $upload_thumb.$image;
} else {
$thumbnail_info = $upload_temp."no_exist.jpg";
}
} 
///////////////////////////////////////////////////////////////////////////////////////////////////
////////// go on
//  3 7
if($i==3) 
{ 
echo"</tr><tr>"; 
$i=0; 
} 
///////////////////////
echo "
<td align='center'>
<table width='150' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td>
<table width='300' height='141' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#999999' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'>
<tr align='center'>
<td width='45%'>$act</td>
<td width='55%' height='19' valign='middle'>$name</td>
</tr>
<tr align='center'>
<td width='45%' rowspan='5'><a href='$image_info' target='_blank'><img src='$thumbnail_info' width='120' height='120' border='1'></a></td>
<td height='20' valign='middle'><a href='{$_SERVER['PHP_SELF']}?action=edit&imageid=$imageid'>Edit</a></td>
</tr>
<tr align='center'>
<td height='25' valign='middle'><a href='{$_SERVER['PHP_SELF']}?action=delcon&imageid=$imageid'>Delete</a></td>
</tr>
<tr align='center'>
<td height='25' valign='middle' bgcolor='#CCCCCC'>’Ê— ≈÷«›Ì…</td>
</tr>
<tr align='center'>
<td height='25' valign='middle'><a href='images_extra.php?action=add&image_id=$imageid&catid=$catid'>√÷› ’Ê—…</a></td>
</tr>
<tr align='center'>
<td height='25' valign='middle'><a href='images_extra.php?image_id=$imageid&catid=$catid'> ($extra) „‘«Âœ… </a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
";
$i+=1; 
}
echo"</tr></table>"; 
/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM images WHERE active!='1' "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center dir='rtl'>«·’›Õ« <br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=notactive&page=$prev\"><< «·”«»ﬁ</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
if ($total_pages > 1){
echo "$i "; 
}
} else { 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=notactive&page=$i\">$i</a> "; 
} 
} 
// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=notactive&page=$next\">«· «·Ì >></a>"; 
} 
echo "</center>";
} // if no products
//--------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "search"; 
//--------------------------------------------------------------------------------------
?>
<form action="" method="get" name="search" id="search">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Search</strong></td>
</tr>
<tr align="right">
<td width="396" bgcolor="#CCCCCC"><span class="box">
<input name="criteria" type="text" id="criteria" size="30" dir="rtl">
</span></td>
<td width="190" bgcolor="#CCCCCC"><strong>Criteria</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="search_for" id="search_for">
<option value="0">Name</option>
<option value="1">Code</option>
</select>
</td>
<td bgcolor="#CCCCCC"><strong>Search in</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name='action' type='hidden' id='action' value='result'></td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="Search"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</form>
<?php
//--------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "result"; 
//--------------------------------------------------------------------------------------
if (!isset($_GET['criteria']) || $_GET['criteria']=="") {
echo "
<div align='center' class='error'>«·—Ã«¡ ﬂ «»… «·ﬂ·„… «·„› «ÕÌ…</div>
";
} elseif (!isset($_GET['search_for']) || $_GET['search_for']=="") {
echo "
<div align='center' class='error'>«·—Ã«¡ ≈Œ Ì«— √”·Ê» «·»ÕÀ</div>
";
} else {
$_GET['criteria'] = stripslashes ($_GET['criteria']);
$_GET['search_for'] = intval ($_GET['search_for']);
if ($_GET['search_for']==1) {
$SEARCH_INFO = "code LIKE '%{$_GET['criteria']}%'";
} else {
$SEARCH_INFO = "name LIKE '%{$_GET['criteria']}%'";
}
////=====================================================
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = @$_GET['page']; 
} 
// Define the number of results per page 
$max_results = 12; 
// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_all = mysql_query("SELECT * FROM images WHERE $SEARCH_INFO ORDER BY imageid ASC LIMIT $from, $max_results") or die(mysql_error()); 
/////////////////////////////////////////////////////////////////////////////////////////////
$num=mysql_num_rows($view_all);
if($num==0){ 
print"
<div align='center' class='error'>·„ Ì „ ≈ÌÃ«œ „«  »ÕÀ ⁄‰Â</div>
"; 
}
else {  
// data input
echo"<table width='100%'><tr>"; 
$i=0; 
///////
while($row = mysql_fetch_array($view_all)){ 
extract($row);
$view_extra = mysql_query("SELECT * FROM images_extra WHERE image_id='{$row['imageid']}' ") or die(mysql_error()); 
$extra=mysql_num_rows($view_extra);
///// Active OR Not
/// stat
if($active == '1'){
$act = "<strong><font color='#0000FF'>
Active
</font></strong>";
}else{
$act = "<strong><font color='#FF0000'>
InActive
</font></strong>";
}
////////////
// image
$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files
$upload_image = "../$db_upload_dir/products/images/$catid/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/products/thumbnails/$catid/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////
if ($image=='') {$image_info = $upload_temp."default.jpg";} else {
if (file_exists("$upload_image"."$image")) {
$image_info = $upload_image.$image;
} else {
$image_info = $upload_temp."no_exist.jpg";
}
} 
// ---------
if ($thumbnail=='') {$thumbnail_info = $upload_temp."default.jpg";} else {
if (file_exists("$upload_thumb"."$thumbnail")) {
$thumbnail_info = $upload_thumb.$image;
} else {
$thumbnail_info = $upload_temp."no_exist.jpg";
}
} 
///////////////////////////////////////////////////////////////////////////////////////////////////
////////// go on
//  3 7
if($i==2) 
{ 
echo"</tr><tr>"; 
$i=0; 
} 
///////////////////////
echo "
<td align='center'>
<table width='150' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td>
<table width='300' height='141' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#999999' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'>
<tr align='center'>
<td width='45%'>$act</td>
<td width='55%' height='19' valign='middle'>$name</td>
</tr>
<tr align='center'>
<td width='45%' rowspan='3'><a href='$image_info' target='_blank'><img src='$thumbnail_info' width='120' height='120' border='1'></a></td>
<td height='20' valign='middle'><a href='{$_SERVER['PHP_SELF']}?action=edit&imageid=$imageid'>Edit</a></td>
</tr>
<tr align='center'>
<td height='25' valign='middle'><a href='{$_SERVER['PHP_SELF']}?action=delcon&imageid=$imageid'>Delete</a></td>
</tr>
<tr align='center'>
<td height='25' valign='middle'>&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
";
$i+=1; 
}
echo"</tr></table>"; 
/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM images WHERE $SEARCH_INFO "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center dir='rtl'>«·’›Õ« <br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=result&criteria={$_GET['criteria']}&search_for={$_GET['search_for']}&page=$prev\"><< «·”«»ﬁ</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
if ($total_pages > 1){
echo "$i "; 
}
} else { 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=result&criteria={$_GET['criteria']}&search_for={$_GET['search_for']}&page=$i\">$i</a> "; 
} 
} 
// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=result&criteria={$_GET['criteria']}&search_for={$_GET['search_for']}&page=$next\">«· «·Ì >></a>"; 
} 
echo "</center>";
} // if no products
/////////////
} // end if not set
//--------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////
/*
Main control
*/
default: 
//--------------------------------------------------------------------------------------
//////////////////////////////////////////////
if (isset($_GET['catid'])) {
$CAT_Q = "AND catid='{$_GET['catid']}' ";
$CAT_U = "catid={$_GET['catid']}&";
} else {
$CAT_Q = "";
$CAT_U = "";
}
////-----
if (isset($_GET['active'])) {
$ACTIVE_Q = "AND active='{$_GET['active']}' ";
$ACTIVE_U = "active={$_GET['active']}&";
} else {
$ACTIVE_Q = "";
$ACTIVE_U = "";
}
////-----
if (isset($_GET['buy_type'])) {
$BUY_TYPE_Q = "AND buy_type='{$_GET['buy_type']}' ";
$BUY_TYPE_U = "buy_type={$_GET['buy_type']}&";
} else {
$BUY_TYPE_Q = "";
$BUY_TYPE_U = "";
}
////-----
if (isset($_GET['userid'])) {
$USERID_Q = "AND userid='{$_GET['userid']}' ";
$USERID_U = "userid={$_GET['userid']}&";
} else {
$USERID_Q = "";
$USERID_U = "";
}
////-----
if (isset($_GET['item_status'])) {
$ITEM_STATUS_Q = "AND item_status='{$_GET['item_status']}' ";
$ITEM_STATUS_U = "item_status={$_GET['item_status']}&";
} else {
$ITEM_STATUS_Q = "";
$ITEM_STATUS_U = "";

}
////-----
if (isset($_GET['sale_type'])) {
$SALE_TYPE_Q = "AND sale_type='{$_GET['sale_type']}' ";
$SALE_TYPE_U = "sale_type={$_GET['sale_type']}&";
} else {
$SALE_TYPE_Q = "";
$SALE_TYPE_U = "";
}
////-----
?>
<form name="update_active" method="post" action="">
<br>
<div align="center">
<table width="955" border="0" cellspacing="2" cellpadding="2">
<tr>
<td align="right">&nbsp;</td>
<td align="right">&nbsp;</td>
<td colspan="2" align="right"><select name="active" id="active" onChange="MM_jumpMenu('self',this,0)" dir="rtl">
<option value="?<?php echo "{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}"?>">All</option>
<?php
if (isset($_GET['active']) && $_GET['active']=='0') {
echo "
<option value='?{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}active=0' selected>InActive</option>
<option value='?{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}active=1'>Active</option>
";
} elseif (isset($_GET['active']) && $_GET['active']=='1') {
echo "
<option value='?{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}active=0'>InActive</option>
<option value='?{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}active=1' selected>Active</option>
";
} else {
echo "
<option value='?{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}active=0'>InActive</option>
<option value='?{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}active=1'>Active</option>
";
}
?>
</select></td>
<td align="right" bgcolor="#eeeeee">Status</td>
</tr>
<tr>
<td align="right">&nbsp;</td>
<td align="right">&nbsp;</td>
<td colspan="2" align="right"><select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('self',this,0)" dir="rtl">
<option value="?">All Sections</option>
<?php
if (isset($_GET['catid']) && $_GET['catid']!='') {$SELECTED_CAT_ID= intval($_GET['catid']);} else { $SELECTED_CAT_ID= "0";}
echo show_dropdown_images_cat(0, 0,"",$SELECTED_CAT_ID);
?>
</select></td>
<td align="right" bgcolor="#eeeeee">Section</td>
</tr>
<tr>
<td colspan="5" align="right">&nbsp;</td>
</tr>
<tr>
<td colspan="4" align="right"><input name="Clear All" type="button" id="Clear All" onClick="selectAllCheckBoxes('update_active', 'checkbox[]', false);" value="DeSelect All">
<input name="Select All" type="button" id="Select All" onClick="selectAllCheckBoxes('update_active', 'checkbox[]', true);" value="Select All"></td>
<td width="64" align="right" bgcolor="#eeeeee">Select</td>
</tr>
<tr>
<td width="539" align="right">&nbsp;&nbsp;</td>
<td width="80" align="right" bgcolor="#66CC66"><input name="update" type="submit" id="update" value="Update All"></td>
<td width="74" align="right" bgcolor="#ff0000"><input name="delete" type="submit" id="delete" value="Delete Selected" onClick="return delete_confirm()"></td>
<td width="166" align="right">&nbsp;&nbsp;
<input name="active" type="submit" id="active" value="Activate">
&nbsp;&nbsp;
<input name="notactive" type="submit" id="notactive" value="DeActivate"></td>
<td align="right" bgcolor="#eeeeee">Options</td>
</tr>
<tr>
<td colspan="4" align="right">&nbsp;</td>
<td align="right">&nbsp;</td>
</tr>
</table>
<!--<table width="955" border="0" cellspacing="2" cellpadding="2">
<tr>
<td align="right"><select name="active" id="active" onChange="MM_jumpMenu('self',this,0)" dir="rtl">
<option value="?<?php echo "{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}"?>">«·ﬂ·</option>
<?php
if (isset($_GET['active']) && $_GET['active']=='0') {
echo "
<option value='?{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}active=0' selected>InActive</option>
<option value='?{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}active=1'>Active</option>
";
} elseif (isset($_GET['active']) && $_GET['active']=='1') {
echo "
<option value='?{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}active=0'>InActive</option>
<option value='?{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}active=1' selected>Active</option>
";
} else {
echo "
<option value='?{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}active=0'>InActive</option>
<option value='?{$CAT_U}{$USERID_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}active=1'>Active</option>
";
}
?>
</select></td>
<td align="right" bgcolor="#EEEEEE">«·Õ«·…</td>
<td colspan="2" align="right"><select name="catid" id="catid" onChange="MM_jumpMenu('self',this,0)" dir="rtl">
<option value="?<?php echo "{$BUY_TYPE_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}"?>">ﬂ· «·√ﬁ”«„</option>
<?php
if (isset($_GET['catid']) && $_GET['catid']!='') {$SELECTED_CAT_ID= intval($_GET['catid']);} else { $SELECTED_CAT_ID= "0";}
echo show_dropdown_iamges_cat(0, 0,$SELECTED_CAT_ID);
?>
</select></td>
<td align="right" bgcolor="#eeeeee">√Œ — «·ﬁ”„ </td>
</tr>
<tr>
<td align="right"><span class="box">
<select name="userid" id="userid"  dir="rtl" onChange="MM_jumpMenu('self',this,0)">
<option value="?<?php echo "{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}"?>">«·ﬂ·</option>
<?php
///// reg
$select_userid = mysql_query("select * from users ORDER BY userid ASC");
/// cer
while($row_userid = mysql_fetch_array($select_userid)){ 
if (isset($_GET['userid']) && $_GET['userid']!='' && $_GET['userid']==$row_userid['userid']) {$SELECTED_userid_ID= "selected";} else { $SELECTED_userid_ID= "0";}
echo "<option value='?{$CAT_U}{$ACTIVE_U}{$BUY_TYPE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}userid={$row_userid['userid']}' $SELECTED_userid_ID>{$row_userid['fname']}</option>";
}
mysql_free_result ($select_userid);
?>
</select>
</span></td>
<td align="right" bgcolor="#EEEEEE">„⁄—Ê÷«  «·⁄÷Ê</td>
<td colspan="2" align="right"><select name="buy_type" id="buy_type" onChange="MM_jumpMenu('self',this,0)" dir="rtl">
<option value="?<?php echo "{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}"?>">«·ﬂ·</option>
<?php
if (isset($_GET['buy_type']) && $_GET['buy_type']=='0') {
echo "
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}buy_type=0' selected>«·„‰ Ã« </option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}buy_type=1'>«·ÿ·»« </option>
";
} elseif (isset($_GET['buy_type']) && $_GET['buy_type']=='1') {
echo "
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}buy_type=0'>«·„‰ Ã« </option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}buy_type=1' selected>«·ÿ·»« </option>
";
} else {
echo "
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}buy_type=0'>«·„‰ Ã« </option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}buy_type=1'>«·ÿ·»« </option>
";
}
?>
</select></td>
<td align="right" bgcolor="#eeeeee">«·‰Ê⁄</td>
</tr>
<tr>
<td align="right"><span class="box">
<select name="sale_type" id="sale_type"  dir="rtl" onChange="MM_jumpMenu('self',this,0)">
<option value="?<?php echo "{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$BUY_TYPE_U}"?>">«·ﬂ·</option>
<?php
if (isset($_GET['sale_type']) && $_GET['sale_type']=='0') {
echo "
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$BUY_TYPE_U}sale_type=0' selected>”⁄— À«» </option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$BUY_TYPE_U}sale_type=1'>ﬁ»· ·· ›«Ê÷</option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$BUY_TYPE_U}sale_type=2'>„“«œ</option>
";
} elseif (isset($_GET['sale_type']) && $_GET['sale_type']=='1') {
echo "
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}{$BUY_TYPE_U}sale_type=0'>”⁄— À«» </option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}{$BUY_TYPE_U}sale_type=1' selected>ﬁ»· ·· ›«Ê÷</option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}{$BUY_TYPE_U}sale_type=2'>„“«œ</option>
";
} elseif (isset($_GET['sale_type']) && $_GET['sale_type']=='2') {
echo "
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}{$BUY_TYPE_U}sale_type=0'>”⁄— À«» </option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}{$BUY_TYPE_U}sale_type=1'>ﬁ»· ·· ›«Ê÷</option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}{$BUY_TYPE_U}sale_type=2' selected>„“«œ</option>
";
} else {
echo "
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}{$BUY_TYPE_U}sale_type=0'>”⁄— À«» </option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}{$BUY_TYPE_U}sale_type=1'>ﬁ»· ·· ›«Ê÷</option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$ITEM_STATUS_U}{$SALE_TYPE_U}{$BUY_TYPE_U}sale_type=2'>„“«œ</option>
";
}
?>
</select>
</span></td>
<td align="right" bgcolor="#EEEEEE">«·„‰ Ã ··‹</td>
<td colspan="2" align="right"><select name="item_status" id="item_status" onChange="MM_jumpMenu('self',this,0)" dir="rtl">
<option value="?<?php echo "{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}"?>">«·ﬂ·</option>
<?php
if (isset($_GET['item_status']) && $_GET['item_status']=='0') {
echo "
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}item_status=0' selected>€Ì— „Õœœ</option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}item_status=1'>„” ⁄„·</option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}item_status=2'>ÃœÌœ</option>
";
} elseif (isset($_GET['item_status']) && $_GET['item_status']=='1') {
echo "
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}item_status=0'>€Ì— „Õœœ</option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}item_status=1' selected>„” ⁄„·</option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}item_status=2'>ÃœÌœ</option>
";
} elseif (isset($_GET['item_status']) && $_GET['item_status']=='2') {
echo "
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}item_status=0'>€Ì— „Õœœ</option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}item_status=1'>„” ⁄„·</option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}item_status=2' selected>ÃœÌœ</option>
";
} else {
echo "
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}item_status=0'>€Ì— „Õœœ</option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}item_status=1'>„” ⁄„·</option>
<option value='?{$CAT_U}{$USERID_U}{$ACTIVE_U}{$BUY_TYPE_U}{$SALE_TYPE_U}item_status=2'>ÃœÌœ</option>
";
}
?>
</select></td>
<td align="right" bgcolor="#eeeeee">Õ«·… «·„‰ Ã</td>
</tr>
<tr>
<td colspan="5" align="right">&nbsp;</td>
</tr>
<tr>
<td colspan="4" align="right"><input name="Clear All" type="button" id="Clear All" onClick="selectAllCheckBoxes('update_active', 'checkbox[]', false);" value="⁄œ„  ÕœÌœ «·ﬂ·">
<input name="Select All" type="button" id="Select All" onClick="selectAllCheckBoxes('update_active', 'checkbox[]', true);" value=" ÕœÌœ «·ﬂ·"></td>
<td width="64" align="right" bgcolor="#eeeeee">«· ÕœÌœ</td>
</tr>
<tr>
<td width="539" align="right">&nbsp;&nbsp;</td>
<td width="80" align="right" bgcolor="#66CC66"><input name="update" type="submit" id="update" value=" ÕœÌÀ «·»Ì«‰« "></td>
<td width="74" align="right" bgcolor="#ff0000"><input name="delete" type="submit" id="delete" value="Õ–› «·»Ì«‰« " onClick="return delete_confirm()"></td>
<td width="166" align="right">&nbsp;&nbsp;
<input name="active" type="submit" id="active" value="«· ›⁄Ì·">
&nbsp;&nbsp;
<input name="notactive" type="submit" id="notactive" value="«“«·… «· ›⁄Ì·"></td>
<td align="right" bgcolor="#eeeeee">«·ŒÌ«—« </td>
</tr>
<tr>
<td colspan="4" align="right">&nbsp;</td>
<td align="right">&nbsp;</td>
</tr>
</table>-->
</div>
<br>
<?php
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = @$_GET['page']; 
} 
// Define the number of results per page 
$max_results = 24; 
// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 

$view_all = mysql_query("SELECT * FROM images WHERE imageid!='0' $CAT_Q $ACTIVE_Q $USERID_Q $BUY_TYPE_Q ORDER BY imageid DESC LIMIT $from, $max_results") or die (mysql_error()); 
/////////////////////////////////////////////////////////////////////////////////////////////
$num=mysql_num_rows($view_all);
if($num==0){ 
print"
<div align='center' class='error'>
·„ Ì „ ≈÷«›… √Ì ’Ê—… Õ Ï «·¬‰
</div>
"; 
}
else {  
// data input
echo"<table width='100%'><tr>"; 
$i=0; 
///////
while($row = mysql_fetch_array($view_all)){ 
extract($row );
$view_extra = mysql_query("SELECT * FROM images_extra WHERE image_id='{$row['imageid']}' ") or die(mysql_error()); 
$extra=mysql_num_rows($view_extra);
///// Active OR Not
/// stat
if($active == '1'){
$act = "<strong><font color='#0000FF'>
Active
</font></strong>";
}else{
$act = "<strong><font color='#FF0000'>
InActive
</font></strong>";
}
////////////
// image
$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files
$upload_image = "../$db_upload_dir/products/images/$catid/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/products/thumbnails/$catid/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////
if ($image=='') {$image_info = $upload_temp."default.jpg";} else {
if (file_exists("$upload_image"."$image")) {
$image_info = $upload_image.$image;
} else {
$image_info = $upload_temp."no_exist.jpg";
}
} 
// ---------
if ($thumbnail=='') {$thumbnail_info = $upload_temp."default.jpg";} else {
if (file_exists("$upload_thumb"."$thumbnail")) {
$thumbnail_info = $upload_thumb.$image;
} else {
$thumbnail_info = $upload_temp."no_exist.jpg";
}
} 
///////////////////////////////////////////////////////////////////////////////////////////////////
////////// go on
//  3 7
if($i==3) 
{ 
echo"</tr><tr>"; 
$i=0; 
} 
///////////////////////
if($buy_type =="1") {
$buy_type_info = "
For Sale
";
} elseif($buy_type =="2") {
$buy_type_info = "
Arrangement Only
";
} else { 
$buy_type_info = "
Not applicable to sale
";
}
/////////////////////////////////////////////
echo "
<td align='center'>
<table width='150' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td>
<table width='300' height='191' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#999999' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'>
<tr align='center'>
<td width='37%' align='left'>
<input name='imageid[]' type='hidden' id='imageid[]' value='{$imageid}'>
<input name='thumbnail_{$imageid}' type='hidden' id='thumbnail_{$imageid}' value='{$thumbnail}'>
<input name='catid_{$imageid}' type='hidden' id='catid_{$imageid}' value='{$catid}'>
<input name='price_{$imageid}' type='hidden' id='price_{$imageid}' value='{$price}'>
<input name='checkbox[]' type='checkbox' id='checkbox[]' value='{$imageid}'> 
$act  </td>
<td height='19' colspan='2' align='left' valign='middle' bgcolor='#CCCCCC'>ID: $imageid</td>
</tr>
<tr align='center'>
<td width='37%' rowspan='5'><a href='$image_info' target='_blank'><img src='$thumbnail_info' border='1' width='100' height='100'></a></td>
</tr>
<tr align='center'>
<td width='26%' height='20' align='left' valign='middle'><a href='?action=edit&imageid=$imageid'>Edit</a></td>
<td width='37%' align='left' valign='middle'><a href='?action=delcon&imageid=$imageid'>Delete</a></td>
</tr>
<tr align='center'>
<td height='25' colspan='2' align='left' valign='middle'><input name='name_{$imageid}' type='text' id='name_{$imageid}' value='$name' size='23' maxlength='255'></td>
</tr>
<tr align='center'>
<td colspan='2' align='left' valign='top'><textarea name='details_{$imageid}' id='details_{$imageid}' cols='20' rows='5'>$details</textarea></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
";
$i+=1; 
}
echo"</tr></table>"; 
/////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['active']) && isset($_POST['checkbox'])){
//print_r($_POST);
$checkbox=$_POST['checkbox'];
//exit;
for($i=0;$i<count($checkbox);$i++){
$select_id = $checkbox[$i];
$sql = "UPDATE images SET active='1' WHERE imageid='$select_id'";
$result = mysql_query($sql);
echo "<meta http-equiv=\"refresh\" content=\"0;URL=?{$CAT_U}{$ACTIVE_U}page=$page\">";
}
} // end if set
///--------------------------------------------------------------------------------
if(isset($_POST['notactive']) && isset($_POST['checkbox'])){
//print_r($_POST);
$checkbox=$_POST['checkbox'];
//exit;
for($i=0;$i<count($checkbox);$i++){
$select_id = $checkbox[$i];
$sql = "UPDATE images SET active='0' WHERE imageid='$select_id'";
$result = mysql_query($sql);
echo "<meta http-equiv=\"refresh\" content=\"0;URL=?{$CAT_U}{$ACTIVE_U}page=$page\">";
}
} // end if set
///--------------------------------------------------------------------------------
if(isset($_POST['update']) && isset($_POST['imageid'])){
//print_r($_POST);
$imageid=$_POST['imageid'];
//exit;
for($i=0;$i<count($imageid);$i++){
$select_id = $imageid[$i];
//---//---//---//---//---
$NAME_INFO1 = "name_{$select_id}";
$NAME_INFO2 = $_POST["$NAME_INFO1"];
//---
$DETAILS_INFO1 = "details_{$select_id}";
$DETAILS_INFO2 = $_POST["$DETAILS_INFO1"];
//---
$CATID_INFO1 = "catid_{$select_id}";
$CATID_INFO2 = $_POST["$CATID_INFO1"];
//---
$THUMBNAIL_INFO1 = "thumbnail_{$select_id}";
$THUMBNAIL_INFO2 = $_POST["$THUMBNAIL_INFO1"];
//---
$PRICE_INFO1 = "price_{$select_id}";
$PRICE_INFO2 = $_POST["$PRICE_INFO1"];
//---
//---
//$CODE_INFO1 = "code_{$select_id}";
//$CODE_INFO2 = $_POST["$CODE_INFO1"];
//---
//$PRICE_INFO1 = "price_{$select_id}";
//$PRICE_INFO2 = $_POST["$PRICE_INFO1"];
//---
//$ORDER_INFO1 = "order_{$select_id}";
//$ORDER_INFO2 = $_POST["$ORDER_INFO1"];
//---//---//---//---
$sql = "UPDATE images SET name='$NAME_INFO2' , price='$PRICE_INFO2' , details='$DETAILS_INFO2'  WHERE imageid='$select_id'";
$result = mysql_query($sql);
echo "<meta http-equiv=\"refresh\" content=\"0;URL=?{$CAT_U}{$ACTIVE_U}page=$page\">";
}
} // end if set
///--------------------------------------------------------------------------------
if(isset($_POST['delete']) && isset($_POST['checkbox'])){
//print_r($_POST);
$checkbox=$_POST['checkbox'];
//exit;
for($i=0;$i<count($checkbox);$i++){
$select_id = $checkbox[$i];
//---//---//---//---//---
$NAME_INFO1 = "name_{$select_id}";
$NAME_INFO2 = $_POST["$NAME_INFO1"];
//---
$DETAILS_INFO1 = "details_{$select_id}";
$DETAILS_INFO2 = $_POST["$DETAILS_INFO1"];
//---
$CATID_INFO1 = "catid_{$select_id}";
$CATID_INFO2 = $_POST["$CATID_INFO1"];
//---
$THUMBNAIL_INFO1 = "thumbnail_{$select_id}";
$THUMBNAIL_INFO2 = $_POST["$THUMBNAIL_INFO1"];
//---
//$CODE_INFO1 = "code_{$select_id}";
//$CODE_INFO2 = $_POST["$CODE_INFO1"];
//---
//$PRICE_INFO1 = "price_{$select_id}";
//$PRICE_INFO2 = $_POST["$PRICE_INFO1"];
//---
//$ORDER_INFO1 = "order_{$select_id}";
//$ORDER_INFO2 = $_POST["$ORDER_INFO1"];
//---//---//---//---//---
$upload_image = "../$db_upload_dir/products/images/$CATID_INFO2/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/products/thumbnails/$CATID_INFO2/"; //change the name of the directory to upload files
//---//---//---//---//---
////////////
if ($THUMBNAIL_INFO2!='') { 
unlink ($upload_thumb.$THUMBNAIL_INFO2);
unlink ($upload_image.$THUMBNAIL_INFO2);
}
//// result
$sql = mysql_query (" DELETE FROM images WHERE imageid='$select_id'") Or Die(MySQL_Error()); 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=?{$CAT_U}{$ACTIVE_U}page=$page\">";
}
} // end if set
////////////////////////////////////////////////////////////////////////////////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM images WHERE imageid!='0' $CAT_Q $ACTIVE_Q $USERID_Q $BUY_TYPE_Q "),0); 
// Figure out the total number of pages. Always round up using ceil() 

$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center >Pages<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?{$CAT_U}{$ACTIVE_U}{$USERID_U}{$BUY_TYPE_U}page=$prev\"><< Prev</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
if ($total_pages > 1){
echo "$i "; 
}
} else { 
echo "<a href=\"".$_SERVER['PHP_SELF']."?{$CAT_U}{$ACTIVE_U}{$USERID_U}{$BUY_TYPE_U}page=$i\">$i</a> "; 
} 
} 
// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?{$CAT_U}{$ACTIVE_U}{$USERID_U}{$BUY_TYPE_U}page=$next\">Next >></a>"; 
} 
echo "</center>";
} // if no products
?>
</form>
<?php
//--------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////
/////////// end protect
} 
?>
&nbsp;</p>
</div>
</body>
</html>
<?php
} /// end else not logedin 
?>