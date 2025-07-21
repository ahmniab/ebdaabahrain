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
<title>Album Sections</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' href='images/cpstyle.css'></head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
<p align="center"><strong><br>
Album Sections</strong></p>
<p>
<?php
switch(@$_GET['action']){ 
//////////////////////////////////////////////////////////////////////////////
case "add"; 
//---------------------------------------------------------------------------
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
/// START UPLOAD DIR CONFIG
$date_print = date('jmY_');
$dir="../$db_upload_dir/cats/"; //change the name of the directory to upload files
/// END UPLOAD DIR CONFIG
/// END UPLOAD thumbnail LOGO CONFIG
if (!empty($_FILES['thumbnail']['name'])) {
//////////////
$get_picname1 = findname($_FILES['thumbnail']['name']);
$get_picexten1 = findtype($_FILES['thumbnail']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 2
$uploadfile1 = $dir . basename($final_pic1);
}
/// END UPLOAD thumbnail LOGO CONFIG
//+++++++++++++++++++++++++++++++++++++++++++++++++++++
/// END UPLOAD ads_small LOGO CONFIG
if (!empty($_FILES['ads_small']['name'])) {
//////////////
$get_picname2 = findname($_FILES['ads_small']['name']);
$get_picexten2 = findtype($_FILES['ads_small']['name']);
// func
$pic_output2 = rand(999999, 100000);
////
$final_pic2 = "$date_print$pic_output2.$get_picexten2";
// image 2
$uploadfile2 = $dir . basename($final_pic2);
}
/// END UPLOAD ads_small LOGO CONFIG
//+++++++++++++++++++++++++++++++++++++++++++++++++++++
/// END UPLOAD ads_big LOGO CONFIG
if (!empty($_FILES['ads_big']['name'])) {
//////////////
$get_picname3 = findname($_FILES['ads_big']['name']);
$get_picexten3 = findtype($_FILES['ads_big']['name']);
// func
$pic_output3 = rand(999999, 100000);
////
$final_pic3 = "$date_print$pic_output3.$get_picexten3";
// image 2
$uploadfile3 = $dir . basename($final_pic3);
}
/// END UPLOAD ads_big LOGO CONFIG
//+++++++++++++++++++++++++++++++++++++++++++++++++++++
/////////////////////
if ($_POST['catname'] ==""){
print "
<div align='center' class='msg'><strong>
Please write the section title
</strong></div>
";
} elseif ($_POST['parent_id'] =="" || $_POST['parent_id'] =='novalue' || !numbers_only($_POST['catorder'])) {
print "
<div align='center' class='msg'><strong>
Please select sub-category
</strong></div>
";
} elseif ($_POST['catorder'] =="" || !numbers_only($_POST['catorder'])) {
print "
<div align='center' class='msg'><strong>
Please write the section sort
</strong></div>
";
} elseif ($_POST['active'] =="") {
print "
<div align='center' class='msg'><strong>
Please select section status
</strong></div>
";
} elseif (!empty($_FILES['thumbnail']['name']) && $_FILES['thumbnail']['type'] !="image/pjpeg" && $_FILES['thumbnail']['type'] !="image/gif" && $_FILES['thumbnail']['type'] !="image/jpeg" && $_FILES['thumbnail']['type'] !="image/bmp" && $_FILES['thumbnail']['type'] !="image/png"){
echo "
<span class='error'>
الرجاء تحميل ملف ذو امتداد مسموح به  في خانة ايقونة القسم
</span>
";
} elseif (!empty($_FILES['ads_small']['name']) && $_FILES['ads_small']['type'] !="image/pjpeg" && $_FILES['ads_small']['type'] !="image/gif" && $_FILES['ads_small']['type'] !="image/jpeg" && $_FILES['ads_small']['type'] !="image/bmp" && $_FILES['ads_small']['type'] !="image/png"){
echo "
<span class='error'>
الرجاء تحميل ملف ذو امتداد مسموح به  في خانة البنر الصغير
</span>
";
} elseif (!empty($_FILES['ads_big']['name']) && $_FILES['ads_big']['type'] !="image/pjpeg" && $_FILES['ads_big']['type'] !="image/gif" && $_FILES['ads_big']['type'] !="image/jpeg" && $_FILES['ads_big']['type'] !="image/bmp" && $_FILES['ads_big']['type'] !="image/png"){
echo "
<span class='error'>
الرجاء تحميل ملف ذو امتداد مسموح به  في خانة البنر الكبير
</span>
";
////////////////////////////////////////////////////////////////////////////////
} else {
// ck user if exist
$query = MySQL_Query("SELECT catid FROM images_cat WHERE catname='{$_POST['catname']}'") Or Die(MySQL_Error()); 
// if select detact more than 0 result exit
if(MySQL_Num_Rows($query) > 0) 
{ 
// print error already exist
echo '
<div align="center"><font color="#FF0000"><strong>Section '.$_POST['catname'].' exist already</strong></font></div>
'; 
//free the memory from the select result
MySQL_Free_Result($query); 
} 
else {
/////===========
if (isset($_POST['view_market']) && $_POST['view_market']==1) {
$view_market_q = "1";
} else {
$view_market_q = "0";
}
if (isset($_POST['view_req']) && $_POST['view_req']==1) {
$view_req_q = "1";
} else {
$view_req_q = "0";
}
if (isset($_POST['view_dir']) && $_POST['view_dir']==1) {
$view_dir_q = "1";
} else {
$view_dir_q = "0";
}
/////===========
//++++++++++++++++++++++++++++++++++++++++++++++++++
/// START UPLOAD FORUM LOGO 
if (empty($_FILES['thumbnail']['name'])) {
$thumbnail_UPLOADED = "";
} else {
move_uploaded_file($_FILES['thumbnail']['tmp_name'], $uploadfile1);
$thumbnail_UPLOADED= "{$final_pic1}";
}
/// END UPLOAD FORUM LOGO 
//++++++++++++++++++++++++++++++++++++++++++++++++++
/// START UPLOAD FORUM LOGO 
if (empty($_FILES['ads_small']['name'])) {
$ads_small_UPLOADED = "";
} else {
move_uploaded_file($_FILES['ads_small']['tmp_name'], $uploadfile2);
$ads_small_UPLOADED= "{$final_pic2}";
}
/// END UPLOAD FORUM LOGO 
//++++++++++++++++++++++++++++++++++++++++++++++++++
/// START UPLOAD FORUM LOGO 
if (empty($_FILES['ads_big']['name'])) {
$ads_big_UPLOADED = "";
} else {
move_uploaded_file($_FILES['ads_big']['tmp_name'], $uploadfile3);
$ads_big_UPLOADED= "{$final_pic3}";
}
/// END UPLOAD FORUM LOGO 
//++++++++++++++++++++++++++++++++++++++++++++++++++
// add to table
$in = MySQL_Query("INSERT INTO images_cat (catname,catnameEN,active,parent_id,catorder,view_dir,view_market,view_req,thumbnail,ads_small,ads_big) VALUES ('{$_POST['catname']}','{$_POST['catnameEN']}','{$_POST['active']}', '{$_POST['parent_id']}', '{$_POST['catorder']}', '{$view_dir_q}', '{$view_market_q}', '{$view_req_q}', '{$thumbnail_UPLOADED}', '{$ads_small_UPLOADED}', '{$ads_big_UPLOADED}')") 
Or Die(mysql_error()); 
if(!$in) 
{
echo "
<p align='center'><font color='#FF0000'><strong> خلل .. لم يتم إنشاء القسم </strong></font></p>
"; 
}
else 
{ 
$get_catid = mysql_insert_id(); 
mkdir("../upload/products/images/$get_catid", 0777);
mkdir("../upload/products/thumbnails/$get_catid", 0777);
echo "
<p align='center'><strong><font size='3'>The section added</font></strong></p> 
";
} // end data
} // else name exist
////////////////////////////////////////////////////////////////////////////////////////////////
} // END ELSE ALL
///////////////////////////////////////////////////////////////////////////////////////
} // END IF SET
//************************************************************************************
if (isset($_POST['catname'])) {$_POST['catname']=stripslashes(strip_tags($_POST['catname'])); }
?>
<form action='' method='post' enctype="multipart/form-data" name='add' id='add'>
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Add<font color='#006633'><strong>
<input name='parent_id' type='hidden' id='parent_id' value='0'>
</strong></font></strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="catname" type="text" class="smalltext" id="catname" dir="rtl" value="<?php if (isset($_POST['catname'])) {echo $_POST['catname'];} ?>" size="40" maxlength="255"></td>
<td width="120" bgcolor="#CCCCCC"><strong>Album Name</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name='parent_id' dir='rtl'>
<option value='novalue'>Select Section</option>
<option value='0'>Major Section</option>
<?php
echo show_dropdown('0','0');
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>Sub-Section</strong></td>
</tr>
<!--
<tr align="right">
<td bgcolor="#CCCCCC">
<select name='parent_id' dir='rtl'>
<option value='novalue'>Select</option>
<option value='0'>Main Section</option>
<?php
echo show_dropdown('0','0');
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>Sub-Category</strong></td>
</tr>
-->
<tr align="right">
<td bgcolor="#CCCCCC"><select name="active" class="smalltext" id="active" dir="rtl">
<?php if (isset($_POST['active']) && $_POST['active']==0) { ?>
<option value="1">Active</option>
<option value="0" selected="selected">InActive</option>
<?php } else { ?>
<option value="1" selected="selected">Active</option>
<option value="0">InActive</option>
<?php } ?>
</select></td>
<td bgcolor="#CCCCCC"><strong>Status</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="catorder" type="text" class="smalltext" id="catorder" dir="rtl" value="<?php if (isset($_POST['catorder'])) {echo $_POST['catorder'];} else {echo "0";} ?>" size="5" maxlength="11"></td>
<td bgcolor="#CCCCCC"><strong>Sort</strong></td>
</tr>
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE">Icons &amp; Thumbnail</td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="thumbnail" type="file" id="thumbnail" size="27"></td>
<td bgcolor="#CCCCCC">Album Thumbnail</td>
</tr>
<!--       <tr align="right">
<td bgcolor="#CCCCCC"><input name="ads_small" type="file" id="ads_small" size="27"></td>
<td bgcolor="#CCCCCC">بنر الراعي - صغير</td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="ads_big" type="file" id="ads_big" size="27"></td>
<td bgcolor="#CCCCCC">بنر الراعي - كبير</td>
</tr>-->
<tr align="right">
<td bgcolor="#CCCCCC"><font color='#006633'><strong>
<input name='catnameEN' type='hidden' id='catnameEN' value='any'>
<input name='view_dir' type='hidden' id='view_dir' value='1'>
<input name='view_req' type='hidden' id='view_req' value='1'>
<input name='view_market' type='hidden' id='view_market' value='1'>
</strong></font></td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="add"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</form>
<?php
//----------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "edit"; 
?>
<table width="90%" border="0" align="center" cellpadding="1" cellspacing="0">
<tr>
<td align="center"><?php
/// START UPLOAD DIR CONFIG
$date_print = date('jmY_');
$dir="../$db_upload_dir/cats/"; //change the name of the directory to upload files
/// END UPLOAD DIR CONFIG
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
/// END UPLOAD thumbnail LOGO CONFIG
if (!empty($_FILES['thumbnail']['name'])) {
//////////////
$get_picname1 = findname($_FILES['thumbnail']['name']);
$get_picexten1 = findtype($_FILES['thumbnail']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 2
$uploadfile1 = $dir . basename($final_pic1);
}
/// END UPLOAD thumbnail LOGO CONFIG


//+++++++++++++++++++++++++++++++++++++++++++++++++++++
/// END UPLOAD ads_small LOGO CONFIG
if (!empty($_FILES['ads_small']['name'])) {
//////////////
$get_picname2 = findname($_FILES['ads_small']['name']);
$get_picexten2 = findtype($_FILES['ads_small']['name']);
// func
$pic_output2 = rand(999999, 100000);
////
$final_pic2 = "$date_print$pic_output2.$get_picexten2";
// image 2
$uploadfile2 = $dir . basename($final_pic2);
}
/// END UPLOAD ads_small LOGO CONFIG
//+++++++++++++++++++++++++++++++++++++++++++++++++++++
/// END UPLOAD ads_big LOGO CONFIG
if (!empty($_FILES['ads_big']['name'])) {
//////////////
$get_picname3 = findname($_FILES['ads_big']['name']);
$get_picexten3 = findtype($_FILES['ads_big']['name']);
// func
$pic_output3 = rand(999999, 100000);
////
$final_pic3 = "$date_print$pic_output3.$get_picexten3";
// image 2
$uploadfile3 = $dir . basename($final_pic3);
}
/// END UPLOAD ads_big LOGO CONFIG
//+++++++++++++++++++++++++++++++++++++++++++++++++++++
/////////////////////
if ($_POST['catname'] ==""){
print "
<div align='center' class='msg'><strong>
الرجاء كتابة أسم القسم
</strong></div>
";
} elseif ($_POST['parent_id'] =="" || $_POST['parent_id'] =='novalue') {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد القسم الفرعي
</strong></div>
";
} elseif ($_POST['catid']==$_POST['parent_id']) {
print "
<div align='center' class='msg'><strong>
!لا يمكنك جعل القسم قسما فرعيا لنفسه
</strong></div>
";
} elseif ($_POST['active'] =="") {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد حالة القسم
</strong></div>
";
} elseif ($_POST['catorder'] =="" || !numbers_only($_POST['catorder'])) {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد ترتيب القسم
</strong></div>
";
} elseif (!empty($_FILES['thumbnail']['name']) && $_FILES['thumbnail']['type'] !="image/pjpeg" && $_FILES['thumbnail']['type'] !="image/gif" && $_FILES['thumbnail']['type'] !="image/jpeg" && $_FILES['thumbnail']['type'] !="image/bmp" && $_FILES['thumbnail']['type'] !="image/png"){
echo "
<span class='error'>
الرجاء تحميل ملف ذو امتداد مسموح به  في خانة ايقونة القسم
</span>
";
} elseif (!empty($_FILES['ads_small']['name']) && $_FILES['ads_small']['type'] !="image/pjpeg" && $_FILES['ads_small']['type'] !="image/gif" && $_FILES['ads_small']['type'] !="image/jpeg" && $_FILES['ads_small']['type'] !="image/bmp" && $_FILES['ads_small']['type'] !="image/png"){
echo "
<span class='error'>
الرجاء تحميل ملف ذو امتداد مسموح به  في خانة البنر الصغير
</span>
";
} elseif (!empty($_FILES['ads_big']['name']) && $_FILES['ads_big']['type'] !="image/pjpeg" && $_FILES['ads_big']['type'] !="image/gif" && $_FILES['ads_big']['type'] !="image/jpeg" && $_FILES['ads_big']['type'] !="image/bmp" && $_FILES['ads_big']['type'] !="image/png"){
echo "
<span class='error'>
الرجاء تحميل ملف ذو امتداد مسموح به  في خانة البنر الكبير
</span>
";
////////////////////////////////////////////////////////////////////////////////
} else {
/////===========
if (isset($_POST['view_market']) && $_POST['view_market']==1) {
$view_market_q = "1";
} else {
$view_market_q = "0";
}
if (isset($_POST['view_req']) && $_POST['view_req']==1) {
$view_req_q = "1";
} else {
$view_req_q = "0";
}
if (isset($_POST['view_dir']) && $_POST['view_dir']==1) {
$view_dir_q = "1";
} else {
$view_dir_q = "0";
}
/////===========
//++++++++++++++++++++++++++++++++++++++++++++++++++
/// START UPLOAD FORUM LOGO 
if (empty($_FILES['thumbnail']['name'])) {
$thumbnail_UPLOADED = "";
} else {
if (file_exists("{$_POST['old_thumbnail']}")) {unlink("{$_POST['old_thumbnail']}");}
move_uploaded_file($_FILES['thumbnail']['tmp_name'], $uploadfile1);
$thumbnail_UPLOADED= ", thumbnail='{$final_pic1}'";
}
/// END UPLOAD FORUM LOGO 
//++++++++++++++++++++++++++++++++++++++++++++++++++
/// START UPLOAD FORUM LOGO 
if (empty($_FILES['ads_small']['name'])) {
$ads_small_UPLOADED = "";
} else {
if (file_exists("{$_POST['old_ads_small']}")) {unlink("{$_POST['old_ads_small']}");}
move_uploaded_file($_FILES['ads_small']['tmp_name'], $uploadfile2);
$ads_small_UPLOADED= ", ads_small='{$final_pic2}'";
}
/// END UPLOAD FORUM LOGO 
//++++++++++++++++++++++++++++++++++++++++++++++++++
/// START UPLOAD FORUM LOGO 
if (empty($_FILES['ads_big']['name'])) {
$ads_big_UPLOADED = "";
} else {
if (file_exists("{$_POST['old_ads_big']}")) {unlink("{$_POST['old_ads_big']}");}
move_uploaded_file($_FILES['ads_big']['tmp_name'], $uploadfile3);
$ads_big_UPLOADED= ", ads_big='{$final_pic3}'";
}
/// END UPLOAD FORUM LOGO 
//++++++++++++++++++++++++++++++++++++++++++++++++++
// add to table
$in = mysql_query ("UPDATE images_cat SET catname='{$_POST['catname']}' , catnameEN='{$_POST['catnameEN']}' , parent_id='{$_POST['parent_id']}', active='{$_POST['active']}' , catorder='{$_POST['catorder']}' , view_market='{$view_market_q}' , view_req='{$view_req_q}' , view_dir='{$view_dir_q}'  $thumbnail_UPLOADED $ads_small_UPLOADED $ads_big_UPLOADED WHERE catid='{$_POST['catid']}' ") 
or die(mysql_error()); 
if(!$in) 
{
echo "
<p align='center'><font color='#FF0000'><strong> خلل .. لم يتم تعديل القسم </strong></font></p>
"; 
} else { 
echo "
<p align='center'><strong><font size='3'>تم تعديل القسم بنجاح</font></strong></p> 
";
} // end data
////////////////////////////////////////////////////////////////////////////////////////////////
} // END ELSE ALL
///////////////////////////////////////////////////////////////////////////////////////
} // END IF SET
//************************************************************************************
?>
</td>
</tr>
</table>
<?php
//--------------------------------------------------------------------
////////////////////////////////////////////////
$_GET['catid'] = intval($_GET['catid']);
$edit_cat = mysql_query("select * from images_cat where catid='{$_GET['catid']}' ");
/// cer
while($do_edit = mysql_fetch_array($edit_cat)){ 
extract($do_edit);
///// reg
if($do_edit['active'] == '1'){$act = "<option value='1' selected>Active</option>";}
else{$act = "  <option value='1'>Active</option>";}
if($do_edit['active'] == '0'){$act2 = "<option value='0' selected>InActive</option>";}
else{ $act2 = "<option value='0'>InActive</option>";}
?>
<br>
<form action='' method='post' enctype="multipart/form-data" name='edit' id='edit'>
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Edit<font color='#006633'><strong>
<input name='parent_id' type='hidden' id='parent_id' value='<?php echo $do_edit['parent_id'];?>'>
</strong></font></strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="catname" type="text" class="smalltext" id="catname" dir="rtl" value="<?php echo $do_edit['catname']; ?>" size="40" maxlength="255"></td>
<td width="120" bgcolor="#CCCCCC"><strong>Section Title</strong></td>
</tr>
<!--           <tr align="right">
<td bgcolor="#CCCCCC"><input name="catnameEN" type="text" class="smalltext" id="catnameEN" dir="rtl" value="<?php echo $do_edit['catnameEN']; ?>" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Section Title</strong></td>
</tr>-->
<tr align="right">
<td bgcolor="#CCCCCC"><select name='parent_id' dir="rtl">
<option value='novalue'>Select Section</option>
<?php
///////////////////////
///// root or not
if($do_edit['parent_id'] == '0'){
$cat_root = "<option value='0' selected>Major Section</option>";
}
else { 
$cat_root = "<option value='0'>Major Section</option>";
}
echo "$cat_root";
///////////////////////////////////
if($do_edit['parent_id'] != '0'){
$edit_cat4 = mysql_query("select * from images_cat where catid='{$do_edit['parent_id']}' ");
/// cer
while($edit = mysql_fetch_array($edit_cat4)){ 
extract($edit);
echo "<option value='$catid' selected>{$edit['catname']}</option>";
} // end while 
}
//////////////////////////////////////
echo show_dropdown_edit('0','0');
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>Sub-Section</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">
<select name='active' size='1' id='active' dir="rtl">
<?php echo $act; ?> <?php echo $act2; ?>
</select>
</strong></font></td>
<td bgcolor="#CCCCCC"><strong>Status</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="catorder" type="text" class="smalltext" id="catorder" dir="rtl" value="<?php echo $do_edit['catorder']; ?>" size="5" maxlength="11"></td>
<td bgcolor="#CCCCCC"><strong>Sort</strong></td>
</tr>
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE">Icons &amp; Thumbnail</td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php if($thumbnail!='') {echo "<a href='{$dir}{$do_edit['thumbnail']}' target='_blank'>شاهد البنر الحالي</a>";}?>
<input name="thumbnail" type="file" id="thumbnail" size="27"></td>
<td bgcolor="#CCCCCC">Album Thumbnail</td>
</tr>
<!--<tr align="right">
<td bgcolor="#CCCCCC"><?php if($ads_small!='') {echo "<a href='{$dir}{$do_edit['ads_small']}' target='_blank'>شاهد البنر الحالي</a>";}?>
<input name="ads_small" type="file" id="ads_small" size="27"></td>
<td bgcolor="#CCCCCC">بنر الراعي - صغير</td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php if($ads_big!='') {echo "<a href='{$dir}{$do_edit['ads_big']}' target='_blank'>شاهد البنر الحالي</a>";}?>
<input name="ads_big" type="file" id="ads_big" size="27"></td>
<td bgcolor="#CCCCCC">بنر الراعي - كبير</td>
</tr>
-->
<tr align="right">
<td bgcolor="#CCCCCC"><font color='#006633'><strong>
<input name='catnameEN' type='hidden' id='catnameEN' value='<?php echo $do_edit['catnameEN']; ?>'>
<input name='old_thumbnail' type='hidden' id='old_thumbnail' value='<?php echo $dir.$do_edit['thumbnail'];?>'>
<input name='old_ads_small' type='hidden' id='old_ads_small' value='<?php echo $dir.$do_edit['ads_small'];?>'>
<input name='old_ads_big' type='hidden' id='old_ads_big' value='<?php echo $dir.$do_edit['ads_big'];?>'>
<input name='view_dir' type='hidden' id='view_dir' value='1'>
<input name='view_req' type='hidden' id='view_req' value='1'>
<input name='view_market' type='hidden' id='view_market' value='1'>
<input name='catid' type='hidden' id='catid' value='<?php echo $do_edit['catid']; ?>'>
</strong></font></td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="Update"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</form>
<?php 
}
//-------------------------------------------------------------------------
break; 
///////////////////////////////////////////////////////////////////////////
case "delcon"; 
//-------------------------------------------------------------------------
$catid = @$_GET['catid'];
$del_cat = mysql_query("select * from images_cat where catid='$catid' ");
/// cer
while($del = mysql_fetch_array($del_cat)){ 
extract($del);
///// activation
if($active == '0'){$act = "InActive";}
else{$act = "Active";}
$dir="../$db_upload_dir/cats/"; //change the name of the directory to upload files
////////
////////
?>
<form method="post" action="?action=del">
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Delete</strong></td>
</tr>
<tr align="right">
<td width="529" bgcolor="#CCCCCC"><strong><?php echo $catname; ?></strong></td>
<td width="117" bgcolor="#CCCCCC"><strong>Section Title</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php echo $act; ?></td>
<td bgcolor="#CCCCCC"><strong>Status</strong></td>
</tr>
<tr align="right">
<td colspan="2" bgcolor="#CCCCCC">Are you sure?</td>
</tr>
<tr align="right">
<td colspan="2" bgcolor="#CCCCCC">
<input name='doit' type='radio' value='yes'> 
&nbsp;
Yes
&nbsp;
<input name='doit' type='radio' value='no' checked> 
&nbsp;
No
</td>
</tr>
<tr align="right">
<td colspan="2" bgcolor="#CCCCCC">All sub-categories will be deleted as well</td>
</tr>
<tr align="right">
<td colspan="2" bgcolor="#CCCCCC"><font size='2' face='Arial, Helvetica, sans-serif'><strong><font color='#FF0000'>
</font><font color='#006633'><strong>
<input name='old_thumbnail' type='hidden' id='old_thumbnail' value='<?php echo $dir.$del['thumbnail'];?>'>
<input name='old_ads_small' type='hidden' id='old_ads_small' value='<?php echo $dir.$del['ads_small'];?>'>
<input name='old_ads_big' type='hidden' id='old_ads_big' value='<?php echo $dir.$del['ads_big'];?>'>
</strong></font><font color='#FF0000'>
<input name='catid' type='hidden' id='catid' value='<?php echo $catid; ?>'>
</font></strong></font>              <input name="Submit" type="submit" class="smalltext" value="Proceed"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</form>
<?php
}
//-------------------------------------------------------------------------
break; 
///////////////////////////////////////////////////////////////////////////
case "del"; 
//-------------------------------------------------------------------------
$doit = $_POST["doit"];
if ($doit =="no")
{
echo "
<br>
<br>
<strong>
إخترت عدم حذف القسم .. إنتظر قليلا حتى يتم إعادة توجيهك للوحة الأقسام
</strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";
}
else {
$catid = @$_POST['catid'];
delete_cats("$catid");
//++++++++++++++++++++++++++++++++++++++++++++++++++
if (file_exists("{$_POST['old_thumbnail']}")) {unlink("{$_POST['old_thumbnail']}");}
if (file_exists("{$_POST['old_ads_small']}")) {unlink("{$_POST['old_ads_small']}");}
if (file_exists("{$_POST['old_ads_big']}")) {unlink("{$_POST['old_ads_big']}");}
//++++++++++++++++++++++++++++++++++++++++++++++++++
// resulte close
}
//-------------------------------------------------------------------------
break; 
///////////////////////////////////////////////////////////////////////////
case "show"; 
//-------------------------------------------------------------------------
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
$catid = intval($_GET['catid']);
$view_all = mysql_query("SELECT * FROM images WHERE catid='$catid' ORDER BY imageid ASC LIMIT $from, $max_results"); 
/////////////////////////////////////////////////////////////////////////////////////////////
$num=mysql_num_rows($view_all);
if($num==0){ 
print"
<div align='center' class='error'>
لا توجد أي صورة في هذا القسم
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
<td width='45%' rowspan='5'><a href='$image_info' target='_blank'><img src='$thumbnail_info' width='120' height='120' border='1'></a></td>
<td height='20' valign='middle'><a href='images.php?action=edit&imageid=$imageid'>تعديل</a></td>
</tr>
<tr align='center'>
<td height='25' valign='middle'><a href='images.php?action=delcon&imageid=$imageid'>حذف</a></td>
</tr>
<tr align='center'>
<td height='25' valign='middle' bgcolor='#CCCCCC'>صور إضافية</td>
</tr>
<tr align='center'>
<td height='25' valign='middle'><a href='images_extra.php?action=add&image_id=$imageid&catid=$catid'>أضف صورة</a></td>
</tr>
<tr align='center'>
<td height='25' valign='middle'><a href='images_extra.php?image_id=$imageid&catid=$catid'> ($extra) مشاهدة </a></td>
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
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM images WHERE catid='$catid' "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center dir='rtl'>الصفحات<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=show&catid=$catid&page=$prev\"><< السابق</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
if ($total_pages > 1){
echo "$i "; 
}
} else { 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=show&catid=$catid&page=$i\">$i</a> "; 
} 
} 
// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=show&catid=$catid&page=$next\">التالي >></a>"; 
} 
echo "</center>";
} // if no products
//-------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////
/*
Main control
*/
default: 
//-------------------------------------------------------------------------
?>
<table cellpadding='0' cellspacing='0' border='0' width='90%' align='center'>
<tr><td class='tableborder'>
<table cellpadding='3' cellspacing='1' border='0' width='100%'>
<tr class='tableseparator'>
<td align="center" class='tableseparator'>Sections</td>
</tr>
<?php 
echo show_admin_menu(0,0);
?>
</table>
</td>
</tr>
</table>
<?php
//-------------------------------------------------------------------------
break; 
///////////////////////////////////////////////////////////////////////////
} // end switch
?>
&nbsp;</p>
</div>
</body>
</html>
<?php
} /// end else not logedin 

?>