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
<title>المعروضات</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
 <link rel='stylesheet' href='images/cpstyle.css'>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <p align="center"><strong><font color="#006600" face="Arial, Helvetica, sans-serif"><br>
        </font>ألبوم الصور - ألبوم المنتجات</strong></p>
  <p>
 
<?php

switch(@$_GET['action']){ 

////////////////////////////////////////////////////////////////////////////////////////
case "add"; 
//--------------------------------------------------------------------------------------
if(!isset($_GET['catid']) || !numbers_only($_GET['catid']) || $_GET['catid']=='' || !isset($_GET['image_id']) || !numbers_only($_GET['image_id']) || $_GET['image_id']==''){ 
echo "
<div align='center' class='error'><strong>
أتبعت رابط خاطئا <br/>
You followed a broken link
</strong>
"; 

} else {

///
if(isset($_SESSION['pro_active']) && $_SESSION['pro_active'] !="novalue")
{
if ($_SESSION['pro_active'] =="1")
{
// session foo is set
$getact = "
<option value='novalue'>أختر الحالة</option>
<option value='1' selected>مفعلة</option>
<option value='0'>غير مفعلة</option>
";
}
elseif($_SESSION['pro_active'] =="0")
{
// session foo is set
$getact = "
<option value='novalue'>أختر الحالة</option>
<option value='1'>مفعلة</option>
<option value='0' selected>غير مفعلة</option>
";
} else { 
$getact = "
<option value='novalue'>أختر الحالة</option>
<option value='1' selected>مفعلة</option>
<option value='0'>غير مفعلة</option>
";
}
/////////////////////////////////////////////
} else { 
$getact = "
<option value='novalue'>أختر الحالة</option>
<option value='1' selected>مفعلة</option>
<option value='0'>غير مفعلة</option>
";
}
///////////////
?>

<form action='?action=getadd' method='POST' ENCTYPE='multipart/form-data' name="add" id="add">
  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
          <tr>
            <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>إضافة صورة أو منتج</strong></td>
          </tr>
          <tr align="right">
            <td width="396" bgcolor="#CCCCCC"><input name="name" type="text" class="smalltext" id="name"value="<?php if (isset($_SESSION['pro_name'])) { echo stripslashes($_SESSION['pro_name']);} ?>" size="43" maxlength="255"  dir="rtl" ></td>
            <td width="190" bgcolor="#CCCCCC"><strong>أسم الصورة </strong></td>
          </tr>
          <tr align="right">
            <td bgcolor="#CCCCCC"><input name='image' type='file' class="smalltext" id='image' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' ></td>
            <td bgcolor="#CCCCCC"><strong>الصورة</strong></td>
          </tr>
          <tr align="right">
            <td bgcolor="#CCCCCC">
<select name="active" class="smalltext" id="active" dir="rtl">
<?php echo $getact ; ?>
</select></td>
            <td bgcolor="#CCCCCC"><strong>الحالة</strong></td>
          </tr>
          
          <tr align="right">
            <td bgcolor="#CCCCCC"><input name="catid" type="hidden" id="catid" value="<?php echo $_GET['catid'];?>">
              <input name="image_id" type="hidden" id="image_id" value="<?php echo $_GET['image_id'];?>"></td>
            <td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="أضف"  style="width:60px;"></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
	
<?php
} // if not set
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
$_SESSION['pro_active'] = $_POST['active'];


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
الرجاء كتابة أسم المعروضة
</strong></div>
";

  
} elseif (!isset($_POST['active']) || $_POST['active'] == "" || $_POST['active'] == "novalue") {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد حالة المعروضة
</strong></div>
";
  
} elseif (empty($_FILES['image']['name'])) {

/////////////////////
$userid = 0;
$date = time();
$time_info = time();
$_POST['name'] = addslashes($_POST['name']); 

// add to admin table
$in = mysql_query ("INSERT INTO `images_extra` (`name`, `image_id`, `catid`, `userid`, `active`, `date` ) VALUES ('{$_POST['name']}', '{$_POST['image_id']}', '{$_POST['catid']}', '$userid', '{$_POST['active']}', '$date')") Or Die(MySQL_Error()); 

if(!$in) {
print "
<div align='center' class='msg'><strong>
خلل .. لم يتم إدراج المعروضة
</strong></div>
"; 

} else  { 
/// unset SESSIONS
unset($_SESSION['pro_name']);
unset($_SESSION['pro_active']);

////
print "
<div align='center'><strong>
تم إضافة المعروضة بنجاح
</strong></div>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?image_id={$_POST['image_id']}&catid={$_POST['catid']}'>";
}

/////////////////////////////////////////////////////////////
} elseif (!empty($_FILES['image']['name'])) {

///-----
if ($_FILES['image']['type'] !="image/pjpeg" && $_FILES['image']['type'] !="image/gif" && $_FILES['image']['type'] !="image/jpeg"){
print "
<div align='center' class='msg'><strong>
لقد قمت بأرفاق صورة للمعروضة لا تحمل صيغة مسموح بها <br/>
الصيغ المسموح بها هي 
(.gif - .jpg)
فقط
</strong></div>
"; 

} elseif (@$_FILES['image']['size'] > $max_size) {
print "
<div align='center' class='msg'><strong>
لقد قمت بأرفاق صورة تفوق الحجم المسموح به<br/>
الحجم المسموح به هو
(2 MB)
فقط
</strong></div>
"; 

} elseif (file_exists("$upload_image/{$final_pic1}") || file_exists("$upload_thumb/{$final_pic1}")) {
print "
<div align='center' class='msg'><strong>
الصورة المرفقة تحمل أسم صورة متواجد في موقعنا .. يرجى تغيير مسمى الصورة و إعادة المحاولة
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
$userid = 0;
$date = time();
$time_info = time();
$_POST['name'] = addslashes($_POST['name']); 

// add to table
$in = mysql_query ("INSERT INTO `images_extra` (`name`, `image_id`, `catid`, `userid`, `active`, `date` ,`image`, `thumbnail`  ) VALUES ('{$_POST['name']}', '{$_POST['image_id']}', '{$_POST['catid']}', '$userid', '{$_POST['active']}', '$date'  , '$final_pic1', '$final_pic1')") Or Die(MySQL_Error()); 


if(!$in) {
print "
<div align='center' class='msg'><strong>
خلل .. لم يتم إدراج المعروضة
</strong></div>
"; 

} else { 
/// unset SESSIONS
unset($_SESSION['pro_name']);
unset($_SESSION['pro_active']);

////////
unlink($uploadfile1);
////////
print "
<div align='center'><strong>
تم إدراج المعروضة بنجاح
</strong></div>
"; 
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?image_id={$_POST['image_id']}&catid={$_POST['catid']}'>";
}


} else { 
print "
<div align='center' class='msg'><strong>
لم يتم أرفاق الصورة .. الرجاء مراجعة صلاحيات فولدر التحميل
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

$id = @$_GET['id'];
$edit_images = mysql_query("select * from images_extra WHERE id='$id' ")Or Die(MySQL_Error());

/// cer
while($edit = mysql_fetch_array($edit_images)){ 
extract($edit);
$image_dir = "../$db_upload_dir/products/images/$catid/";
if ($image!='') { $image_link = "<a href='$image_dir$image' target='_blank'>الصورة الحالية </a>"; } else {$image_link = "";}
///// active


if(isset($_SESSION['pro_edit_active']) && $_SESSION['pro_edit_active'] !="novalue") {

if ($_SESSION['pro_edit_active'] =="1") {
// session foo is set
$getact = "
<option value='novalue'>أختر الحالة</option>
<option value='1' selected>مفعلة</option>
<option value='0'>غير مفعلة</option>
";

} elseif($_SESSION['pro_edit_active'] =="0") {
// session foo is set
$getact = "
<option value='novalue'>أختر الحالة</option>
<option value='1'>مفعلة</option>
<option value='0' selected>غير مفعلة</option>
";
}
/////////////////////////////////////////////
} elseif($active =="1") {
$getact = "
<option value='novalue'>أختر الحالة</option>
<option value='1' selected>مفعلة</option>
<option value='0'>غير مفعلة</option>
";

} elseif($active =="0") {
$getact = "
<option value='novalue'>أختر الحالة</option>
<option value='1'>مفعلة</option>
<option value='0' selected>غير مفعلة</option>
";

} else { 
$getact = "
<option value='novalue'>أختر الحالة</option>
<option value='1'>مفعلة</option>
<option value='0'>غير مفعلة</option>
";
}


////////////////////////////////////////////// 

?>

<form action='?action=update' method='POST' ENCTYPE='multipart/form-data' name="edit" id="edit">
  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
          <tr>
            <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>تعديل صورة أو منتج</strong></td>
          </tr>
          <tr align="right">
            <td width="396" bgcolor="#CCCCCC"><input name="name" type="text" class="smalltext" id="name"value="<?php if (isset($_SESSION['pro_edit_name'])) { echo stripslashes($_SESSION['pro_edit_name']);} else {echo "$name"; } ?>" size="43" maxlength="255"  dir="rtl" ></td>
            <td width="190" bgcolor="#CCCCCC"><strong>أسم الصورة </strong></td>
          </tr>
          <tr align="right">
            <td bgcolor="#CCCCCC"><?php echo $image_link; ?>
              <input name='image' type='file' class="smalltext" id='image' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' ></td><td bgcolor="#CCCCCC"><strong>الصورة</strong></td>
          </tr>
          <tr align="right">
            <td bgcolor="#CCCCCC">
<select name='active' id='active' dir="rtl">
<?php echo "$getact"; ?>
</select>            </td>
            <td bgcolor="#CCCCCC"><strong>الحالة</strong></td>
          </tr>
          <tr align="right">
            <td bgcolor="#CCCCCC"><input name='catid' type='hidden' id='catid' value='<?php echo "$catid"; ?>'>
              <input name='id' type='hidden' id='id' value='<?php echo "$id"; ?>'>
              <input name='oldfile' type='hidden' id='oldfile' value='<?php echo "$image"; ?>'></td>
            <td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="تعديــل"  style="width:60px;"></td>
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
$_SESSION['pro_edit_active'] = $_POST['active'];


/// image Dir ///////////////
// image
$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files
$upload_image = "../$db_upload_dir/products/images/{$_POST['catid']}/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/products/thumbnails/{$_POST['catid']}/"; //change the name of the directory to upload files
///==========================
$old_imag_dir = "../$db_upload_dir/products/images/{$_POST['catid']}/";
$old_thumb_dir = "../$db_upload_dir/products/thumbnails/{$_POST['catid']}/";
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
الرجاء كتابة أسم المعروضة
</strong></div>
";

  
} elseif (!isset($_POST['active']) || $_POST['active'] == "" || $_POST['active'] == "novalue") {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد حالة المعروضة
</strong></div>
";
  
} elseif (empty($_FILES['image']['name'])) {

/////////////////////
$_POST['name'] = addslashes($_POST['name']); 

// add to admin table
$in = mysql_query (" UPDATE images_extra SET name='{$_POST['name']}' ,  active='{$_POST['active']}' WHERE id='{$_POST['id']}' ") Or Die(MySQL_Error()); 

if(!$in) {
print "
<div align='center' class='msg'><strong>
خلل .. لم يتم تعديل المعروضة
</strong></div>
"; 

} else  { 



// add to admin table
$in = mysql_query (" UPDATE images_extra SET name='{$_POST['name']}' ,  active='{$_POST['active']}'  WHERE id='{$_POST['id']}' ") Or Die(MySQL_Error()); 

/// unset SESSIONS
unset($_SESSION['pro_edit_name']);
unset($_SESSION['pro_edit_active']);




////
print "
<div align='center'><strong>
تم تعديل المعروضة بنجاح
</strong></div>
";

}

/////////////////////////////////////////////////////////////
} elseif (!empty($_FILES['image']['name'])) {

///-----
if ($_FILES['image']['type'] !="image/pjpeg" && $_FILES['image']['type'] !="image/gif" && $_FILES['image']['type'] !="image/jpeg"){
print "
<div align='center' class='msg'><strong>
لقد قمت بأرفاق صورة للمعروضة لا تحمل صيغة مسموح بها <br/>
الصيغ المسموح بها هي 
(.gif - .jpg)
فقط
</strong></div>
"; 

} elseif (@$_FILES['image']['size'] > $max_size) {
print "
<div align='center' class='msg'><strong>
لقد قمت بأرفاق صورة تفوق الحجم المسموح به<br/>
الحجم المسموح به هو
(2 MB)
فقط
</strong></div>
"; 

} elseif (file_exists("$upload_image/{$final_pic1}") || file_exists("$upload_thumb/{$final_pic1}")) {
print "
<div align='center' class='msg'><strong>
الصورة المرفقة تحمل أسم صورة متواجد في موقعنا .. يرجى تغيير مسمى الصورة و إعادة المحاولة
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

// add to admin table
$in = mysql_query (" UPDATE images_extra SET name='{$_POST['name']}' ,  active='{$_POST['active']}' , image='$final_pic1', thumbnail='$final_pic1'  WHERE id='{$_POST['id']}' ") Or Die(MySQL_Error()); 


if(!$in) {
print "
<div align='center' class='msg'><strong>
خلل .. لم يتم تعديل المعروضة
</strong></div>
"; 

} else { 
/// unset SESSIONS
unset($_SESSION['pro_edit_name']);
unset($_SESSION['pro_edit_active']);

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
تم تعديل المعروضة بنجاح
</strong></div>
"; 

}


} else { 
print "
<div align='center' class='msg'><strong>
لم يتم أرفاق الصورة .. الرجاء مراجعة صلاحيات فولدر التحميل
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

$id = @$_GET['id'];
$del_images = mysql_query("select * from images_extra where id='$id' ");

/// cer
while($del = mysql_fetch_array($del_images)){ 
extract($del);

$image_dir = "../$db_upload_dir/products/images/$catid/";

if ($image!='') { $image_link = "<a href='$image_dir$image' target='_blank'>الصورة الحالية </a>"; } else {$image_link = "";}
////////
?>
<form method='post' action='?action=del'>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
      <tr>
        <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>حذف صورة أو منتج</strong></td>
      </tr>
      <tr align="right">
        <td width="396" bgcolor="#CCCCCC"><?php echo "$name"; ?></td>
        <td width="190" bgcolor="#CCCCCC"><strong>أسم الصورة </strong></td>
      </tr>
      
      <tr align="right">
        <td bgcolor="#CCCCCC"><?php echo $image_link; ?></td>
        <td bgcolor="#CCCCCC"><strong>الصورة</strong></td>
      </tr>
      
      <tr align="right">
        <td bgcolor="#CCCCCC" dir="rtl">
          <input name='doit' type='radio' value='0' checked> 
          لا

            <input name='doit' type='radio' value='1'> 
            نعم
</td>
        <td bgcolor="#CCCCCC"><strong>متأكد من رغبتي بالحذف</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><input name='id' type='hidden' id='id' value='<?php echo "$id"; ?>'>
          <input name='catid' type='hidden' id='catid' value='<?php echo "$catid"; ?>'>
              <input name='image_path' type='hidden' id='image_path' value='<?php echo "$image"; ?>'>
              <input name='thumbnail_path' type='hidden' id='thumbnail_path' value='<?php echo "$thumbnail"; ?>'></td>
        <td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="تنفــيذ"  style="width:60px;"></td>
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
إخترت  عدم حذف الصورة .. الرجاء الإنتظار حتى يتم تحويلك للوحة الصور </strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";

} else {

$_POST['id'] = intval($_POST['id']);
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
$in = mysql_query (" DELETE FROM images_extra WHERE id='{$_POST['id']}'") Or Die(MySQL_Error()); 
// data input
echo " 
<p><strong>تم حذف الصورة بنجاح</strong></p> 
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
$max_results = 12; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 

// Perform MySQL query on only the current page number's results 

$view_all = mysql_query("SELECT * FROM images_extra WHERE active!='1' ORDER BY id ASC LIMIT $from, $max_results"); 

/////////////////////////////////////////////////////////////////////////////////////////////
$num=mysql_num_rows($view_all);
if($num==0){ 
print"
<div align='center' class='error'>
لا توجد أي صورة غير مفعلة
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
///// Active OR Not
/// stat
if($active == '1'){
$act = "<strong><font color='#0000FF'>
مفعل
</font></strong>";
}else{
$act = "<strong><font color='#FF0000'>
غير مفعل
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


<table width='300' height='106' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#999999' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
  <td width='45%' rowspan='4'><a href='$image_info' target='_blank'><img src='$thumbnail_info' width='120' height='120' border='1'></a></td>
  <td height='19' valign='middle'>$name</td>
  </tr>
<tr align='center'>
  <td height='19' valign='middle'>$act</td>
  </tr>
<tr align='center'>
  <td height='20' valign='middle'><a href='{$_SERVER['PHP_SELF']}?action=edit&id=$id'>تعديل</a></td>
  </tr>
<tr align='center'>
  <td width='55%' height='44' valign='middle'><a href='{$_SERVER['PHP_SELF']}?action=delcon&id=$id'>حذف</a></td>
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
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM images_extra WHERE active!='1' "),0); 

// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 

// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center dir='rtl'>الصفحات<br />"; 
}
// Build Previous Link 
if($page > 1){ 
    $prev = ($page - 1); 
    echo "<a href=\"".$_SERVER['PHP_SELF']."?action=notactive&page=$prev\"><< السابق</a> "; 
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
    echo "<a href=\"".$_SERVER['PHP_SELF']."?action=notactive&page=$next\">التالي >></a>"; 
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
          <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>البحث عن  صورة أو منتج</strong></td>
        </tr>
        <tr align="right">
          <td width="396" bgcolor="#CCCCCC"><span class="box">
            <input name="criteria" type="text" id="criteria" size="30" dir="rtl">
          </span></td>
          <td width="190" bgcolor="#CCCCCC"><strong>أسم الصورة </strong></td>
        </tr>
        <tr align="right">
          <td bgcolor="#CCCCCC"><select name="search_for" id="search_for">
            <option value="0">الأسم</option>
            <option value="1">الكود</option>
          </select>
          </td>
          <td bgcolor="#CCCCCC"><strong>البحث حسب</strong></td>
        </tr>
        <tr align="right">
          <td bgcolor="#CCCCCC"><input name='action' type='hidden' id='action' value='result'></td>
          <td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="تنفــيذ"  style="width:60px;"></td>
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
<div align='center' class='error'>الرجاء كتابة الكلمة المفتاحية</div>
";

} elseif (!isset($_GET['search_for']) || $_GET['search_for']=="") {
echo "
<div align='center' class='error'>الرجاء إختيار أسلوب البحث</div>
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

$view_all = mysql_query("SELECT * FROM images_extra WHERE $SEARCH_INFO ORDER BY id ASC LIMIT $from, $max_results"); 

/////////////////////////////////////////////////////////////////////////////////////////////
$num=mysql_num_rows($view_all);
if($num==0){ 
print"
<div align='center' class='error'>لم يتم إيجاد ما تبحث عنه</div>

"; 
}
else {  
// data input
echo"<table width='100%'><tr>"; 
$i=0; 
///////
while($row = mysql_fetch_array($view_all)){ 
extract($row );
///// Active OR Not
/// stat
if($active == '1'){
$act = "<strong><font color='#0000FF'>
مفعل
</font></strong>";
}else{
$act = "<strong><font color='#FF0000'>
غير مفعل
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


<table width='300' height='106' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#999999' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
  <td width='45%' rowspan='4'><a href='$image_info' target='_blank'><img src='$thumbnail_info' width='120' height='120' border='1'></a></td>
  <td height='19' valign='middle'>$name</td>
  </tr>
<tr align='center'>
  <td height='19' valign='middle'>$act</td>
  </tr>
<tr align='center'>
  <td height='20' valign='middle'><a href='{$_SERVER['PHP_SELF']}?action=edit&id=$id'>تعديل</a></td>
  </tr>
<tr align='center'>
  <td width='55%' height='44' valign='middle'><a href='{$_SERVER['PHP_SELF']}?action=delcon&id=$id'>حذف</a></td>
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
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM images_extra WHERE $SEARCH_INFO "),0); 

// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 

// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center dir='rtl'>الصفحات<br />"; 
}
// Build Previous Link 
if($page > 1){ 
    $prev = ($page - 1); 
    echo "<a href=\"".$_SERVER['PHP_SELF']."?action=result&criteria={$_GET['criteria']}&search_for={$_GET['search_for']}&page=$prev\"><< السابق</a> "; 
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
    echo "<a href=\"".$_SERVER['PHP_SELF']."?action=result&criteria={$_GET['criteria']}&search_for={$_GET['search_for']}&page=$next\">التالي >></a>"; 
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

if(!isset($_GET['image_id']) || !numbers_only($_GET['image_id']) || $_GET['image_id']==''){ 
echo "
<div align='center' class='error'><strong>
أتبعت رابط خاطئا <br/>
You followed a broken link
</strong>
"; 

} else {

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

$view_all = mysql_query("SELECT * FROM images_extra WHERE image_id='{$_GET['image_id']}'  ORDER BY id ASC LIMIT $from, $max_results"); 

/////////////////////////////////////////////////////////////////////////////////////////////
$num=mysql_num_rows($view_all);
if($num==0){ 
print"
<div align='center' class='error'>
لم يتم إضافة أي صورة حتى الآن
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
///// Active OR Not
/// stat
if($active == '1'){
$act = "<strong><font color='#0000FF'>
مفعل
</font></strong>";
}else{
$act = "<strong><font color='#FF0000'>
غير مفعل
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


<table width='300' height='106' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#999999' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
  <td width='45%' rowspan='4'><a href='$image_info' target='_blank'><img src='$thumbnail_info' width='120' height='120' border='1'></a></td>
  <td height='19' valign='middle'>$name</td>
  </tr>
<tr align='center'>
  <td height='19' valign='middle'>$act</td>
  </tr>
<tr align='center'>
  <td height='20' valign='middle'><a href='{$_SERVER['PHP_SELF']}?action=edit&id=$id'>تعديل</a></td>
  </tr>
<tr align='center'>
  <td width='55%' height='44' valign='middle'><a href='{$_SERVER['PHP_SELF']}?action=delcon&id=$id'>حذف</a></td>
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
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM images_extra WHERE image_id='{$_GET['image_id']}' "),0); 

// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 

// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center dir='rtl'>الصفحات<br />"; 
}
// Build Previous Link 
if($page > 1){ 
    $prev = ($page - 1); 
    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><< السابق</a> "; 
} 

for($i = 1; $i <= $total_pages; $i++){ 
    if(($page) == $i){ 
	if ($total_pages > 1){
        echo "$i "; 
		}
        } else { 
            echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$i\">$i</a> "; 
    } 
} 

// Build Next Link 
if($page < $total_pages){ 
    $next = ($page + 1); 
    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$next\">التالي >></a>"; 
} 
echo "</center>";
} // if no products

} // end if not set
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