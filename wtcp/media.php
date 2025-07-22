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
<title>الملفات</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' href='images/cpstyle.css'>
<script type="text/javascript" src="javascript/form.js"></script>
<!--  END Message POPUP -->
<SCRIPT>
function formvalidation(thisform) {
with (thisform) {
if (emptyvalidation(name,"الرجاء كتابة أسم الملف")==false) {name.focus(); return false;};
if (emptySelect(catid,"الرجاء تحديد القسم الرئيسي")==false) {catid.focus(); return false;};
if (emptySelect(active,"الرجاء تحديد حالة الملف")==false) {active.focus(); return false;};
}
}
</SCRIPT>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
<br>
<strong><font color="#003399">الملفات</font><br>
</strong>
<?php
///////////////////////////
switch(@$_GET['action']){ 
///////////////////////////
default:
///////////////////////////
/// dir ///////////////
// image
$uploaddir1 = "../upload/media/"; //change the name of the directory to upload files
// thumbnail
$uploaddir2 = "../upload/media/thumbnails/"; //change the name of the directory to upload 
/////////////////////////////////////////////
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = @$_GET['page']; 
} 
// Define the number of results per page 
$max_results = 10; 
// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_all = mysql_query("SELECT * FROM media ORDER BY id ASC LIMIT $from, $max_results"); 
/////////////////////////////////////////////////////////////////////////////////////////////
$num = mysql_num_rows($view_all);
if($num < 1){ 
print"
<div align='center' class='msg'><strong>
لم يتم إدراج أي ملف حتى الآن
</strong></div>
"; 
}
else {  
/////////////////
// data input
echo"<table width='100%'><tr>"; 
$i=0; 
////////////////////
while($row = mysql_fetch_array($view_all)){ 
extract($row);
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
////// in no image
if ($thumbnail=='') {$thumbnail="default.jpg"; }
///////////////
if ($row['use_link']==1 && $row['link']!='' || $row['file']=='') {
$file_path = $row['link'];
} else {
$file_path = $uploaddir1.$row['file'];
}
////////////
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
<table width='175' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td>
<table width='300' height='178' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='006699' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
<td width='36%' rowspan='4'><a href='$file_path' target='_blank'><img src='$uploaddir2$thumbnail' width='100' height='100' border='1'></a></td>
<td height='44' valign='middle'>$name</td>
</tr>
<tr align='center'>
<td height='44' valign='middle'><FONT face='MS Sans Serif' color=#52557c size=1><SPAN lang=en-us>$act</SPAN></FONT></td>
</tr>
<tr align='center'>
<td height='44' valign='middle'><a href='?action=edit&id=$id'><font face='Tahoma'><span lang='en-us'><font size='2'>تعديل</font></span></font></a></td>
</tr>
<tr align='center'>
<td width='7%' height='44' valign='middle'><span lang='en-us'><a href='?action=delcon&id=$id'>حذف</a></span></td>
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
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM media "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center>Select a Page<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"?page=$prev\"><< Previous</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
if ($total_pages > 1){
echo "$i "; 
}
} else { 
echo "<a href=\"?page=$i\">$i</a> "; 
} 
} 
// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"?page=$next\">Next >></a>"; 
} 
echo "</center>";
} // if no products
/////////////////
///////////////////////////
break; 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
case "add"; 
///
if(isset($_SESSION['media_active']) && $_SESSION['media_active'] !="novalue")
{
if ($_SESSION['media_active'] =="1") {
// session foo is set
$active_info = "
<option value='novalue'>أختر حالة</option>
<option value='1' selected>مفعل</option>
<option value='0'>غير مفعل</option>
";
} elseif($_SESSION['media_active'] =="0") {
// session foo is set
$active_info = "
<option value='novalue'>أختر حالة</option>
<option value='1'>مفعل</option>
<option value='0' selected>غير مفعل</option>
";
}
/////////////////////////////////////////////
} else { 
$active_info = "
<option value='novalue'>أختر حالة</option>
<option value='1' selected>مفعل</option>
<option value='0'>غير مفعل</option>
";
}
///----------------------------------------------------------------------------------
if (isset($_SESSION['media_use_link']) && $_SESSION['media_use_link'] =="1") {
// session foo is set
$use_link_info = "
<option value='0' >أستخدم الملــف المرفق</option>
<option value='1' selected >أستخدم وصلة الملــف</option>
";
} else { 
$use_link_info = "
<option value='0' selected> أستخدم الملــف المرفق</option>
<option value='1'>أستخدم وصلة الملــف</option>
";
}
/// ######################################################################
/////////////////////////////////////////////
if(isset($_SESSION['media_sticky']) && $_SESSION['media_sticky'] !="novalue")
{
if ($_SESSION['media_sticky'] =="1")
{
// session foo is set
$sticky_info = "
<option value='novalue'>أختر الحالة</option>
<option value='1' selected>نعم</option>
<option value='0'>لا</option>
";
}
elseif($_SESSION['media_sticky'] =="0")
{
// session foo is set
$sticky_info = "
<option value='novalue'>أختر الحالة</option>
<option value='1'>نعم</option>
<option value='0' selected>لا</option>
";
} else { 
$sticky_info = "
<option value='novalue'>أختر الحالة</option>
<option value='1'>نعم</option>
<option value='0' selected>لا</option>
";
}
///
} else { 
$sticky_info = "
<option value='novalue'>أختر الحالة</option>
<option value='1'>نعم</option>
<option value='0' selected>لا</option>
";
}
/////////////////////////////////////////////
?>
<form action='?action=getadd' method='POST' ENCTYPE='multipart/form-data' name="add_prop" id="add_prop" dir='rtl' onSubmit="return formvalidation(this)">
<table width='600'  border='0' align='center' cellpadding="0" cellspacing="1">
<tr>
<td width="23%">أسم الملــف :<font color="#FF0000">*</font></td>
<td width="77%"><input name='name' type='text' id='name' value='<?php  if (isset($_SESSION['media_name'])) {echo stripslashes($_SESSION['media_name']) ;} ?>' size='30'></td>
</tr>
<tr>
<td valign="top">الوصف :</td>
<td><textarea name='text' cols='40' rows='6' wrap='VIRTUAL' id='text'><?php if(isset($_SESSION['media_text'])){echo stripslashes($_SESSION['media_text']);}?></textarea></td>
</tr>
<tr>
<td>القسم:<font color="#FF0000">*</font></td>
<td>
<select name="catid" id="catid">
<option value="novalue">أختر قسما</option>
<?php
// Perform MySQL query on only the current page number's results 
if (isset($_SESSION['media_catid']) && numbers_only($_SESSION['media_catid'])) { 
$select_info = $_SESSION['media_catid'];
} else {
$select_info = "0";
} 
////--------------------------------
echo show_dropdown_media('0','0', $select_info);
////--------------------------------
?>
</select>        </td>
</tr>
<tr>
<td>الصورة المصغرة:</td>
<td><input name='image1' type='file' id='image1' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' >        </td>
</tr>
<tr>
<td> الملــف:</td>
<td><input name='file' type='file' id='file' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' >        </td>
</tr>
<tr>
<td>الوصلة :</td>
<td><input name='link' type='text' id='link' value='<?php  if (isset($_SESSION['media_link'])) {echo stripslashes($_SESSION['media_link']) ;} ?>' size='30'></td>
</tr>
<tr>
<td>العرض</td>
<td><input name='width' type='text' id='width' value='<?php  if (isset($_SESSION['media_width'])) {echo stripslashes($_SESSION['media_width']) ;} else {echo "560";}?>' size='5' maxlength="11"></td>
</tr>
<tr>
<td>الطول</td>
<td><input name='height' type='text' id='height' value='<?php  if (isset($_SESSION['media_height'])) {echo stripslashes($_SESSION['media_height']) ;} else {echo "315";} ?>' size='5' maxlength="11"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td bgcolor="#CCCCCC">الإعدادات</td>
</tr>
<tr>
<td>الترتيب</td>
<td><input name='order_num' type='text' id='order_num' value='<?php  if (isset($_SESSION['media_order_num'])) {echo stripslashes($_SESSION['media_order_num']) ;} ?>' size='5'></td>
</tr>
<tr>
<td>إستخدام:<font color="#FF0000">*</font></td>
<td><select name="use_link" id="use_link">
<?php echo $use_link_info ; ?>
</select></td>
</tr>
<tr>
<td>الحالة:<font color="#FF0000">*</font></td>
<td><select name="active" id="active">
<?php
echo $active_info; 
?>
</select></td>
</tr>
<tr>
<td>التثبيت:<font color="#FF0000">*</font></td>
<td><select name="sticky" class="smalltext" id="sticky" dir="rtl">
<?php echo $sticky_info ; ?>
</select></td>
</tr>
<tr>
<td>&nbsp;</td>
<td></td>
</tr>
<tr>
<td><font size='2' face='Arial, Helvetica, sans-serif'>&nbsp;</font></td>
<td>
<input name="Add" type='submit' id="Add" style='background-color: #000080; color: #FFFFFF; border: 1 solid #000000' value='أضــف'>        </td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><font color="#FF0000">الحد الأقصى المسموح به للملفات هو <?php echo $maxsize_info;?></font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td class="error"><font color="#FF0000">الملفات المسموح بها هي</font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><span class="marktext">صوت:</span> <font color="#FF0000"> (mp3 - rm) فقط</font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><span class="marktext">فيديو:</span> <font color="#FF0000"> (avi - wmv - flv) فقط</font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td class="marktext">يقبل ملفات اليوتيوب</td>
</tr>
</table>
</form>
<?php
break; 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
case "getadd"; 
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
$_SESSION['media_name'] = $_POST['name'];
$_SESSION['media_text'] = $_POST['text'];
$_SESSION['media_link'] = $_POST['link'];
$_SESSION['media_width'] = $_POST['width'];
$_SESSION['media_height'] = $_POST['height'];
$_SESSION['media_order_num'] = $_POST['order_num'];
$_SESSION['media_sticky'] =$_POST['sticky'];
$_SESSION['media_catid'] = $_POST['catid'];
$_SESSION['media_active'] = $_POST['active'];
$_SESSION['media_use_link'] = $_POST['use_link'];
/////////////////
$name = $_POST['name'];
$text = $_POST['text'];
$link = $_POST['link'];
$width = $_POST['width'];
$height = $_POST['height'];
$order_num = $_POST['order_num'];
$sticky =$_POST['sticky'];
$catid = $_POST['catid'];
$active = $_POST['active'];
$use_link = $_POST['use_link'];
///////////////////////////
require_once("includes/mime_detector.php");
if (!empty($_POST['link']) || $_POST['link']!='') {
if (eregi ("youtube.com", $_POST['link'])) {
$FILE_LINK_TYPE = "flv";
$FILE_LINK_NAME = "";
$FILE_LINK_MIME = "video/x-flv";
$FILE_YOUTUBE = 1;
} else {
$FILE_LINK_TYPE = findtype($_POST['link']);
$FILE_LINK_NAME = findname($_POST['link']);
$FILE_LINK_MIME = returnMIMEType($_POST['link']);;
$FILE_YOUTUBE = 0;
}
} else {
$FILE_LINK_TYPE = "";
$FILE_LINK_NAME = "";
$FILE_LINK_MIME = "";
$FILE_YOUTUBE = 0;
}
if ($FILE_YOUTUBE==1) {
//$link =str_replace("watch?v=","v/",$_POST['link']);  
}
/////---------------------------------
/// dir ///////////////
// image
$uploaddir1 = "../upload/media/"; //change the name of the directory to upload files
$uploaddir2 = "../upload/media/thumbnails/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////////////
$date_print = date('jmY_');
/////////////////////////// Images rename /////////////////////////
if (!empty($_FILES['file']['name'])) {
//////////////
$get_picname1 = findname($_FILES['file']['name']);
$get_picexten1 = findtype($_FILES['file']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic_name1 = "$date_print$pic_output1";
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 1
$uploadfile1 = $uploaddir1 . basename($final_pic1);
} else {
$final_pic1 = "";
$final_pic_name1 = "";
}
/////////////////////////// Images rename /////////////////////////
if (!empty($_FILES['image1']['name'])) {
//////////////
$get_picname2 = findname($_FILES['image1']['name']);
$get_picexten2 = findtype($_FILES['image1']['name']);
// func
$pic_output2 = rand(999999, 100000);
////
$final_pic2 = "$date_print$pic_output2.$get_picexten2";
// image 1
$uploadfile2 = $uploaddir2 . basename($final_pic2);
} else {
$final_pic2 = "";
}
/////////////////////////// Images rename /////////////////////////
if ($name == "") {
echo "<div align='center' class='msg'><strong>
الرجاء كتابة أسم اللملــف
</strong></div>";
} elseif ($active == "novalue"  || !numbers_only($active)) {
echo "<div align='center'  class='msg'>><strong>
الرجاء تحديد حالة الملــف
</strong></div>";
} elseif ($catid == "novalue" || !numbers_only($catid)) {
echo "<div align='center'  class='msg'><strong>
الرجاء تحديد القسم الخاص بالملــف
</strong></div>";
} elseif ($sticky=="" || $sticky=='novalue'){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء تحديد حالة التثبيت
</strong></font></div>
";
} elseif (empty($_FILES['file']['name']) && $_POST['link']=='') {
echo "<div align='center'  class='msg'><strong>
الرجاء ارفاق ملف الملتميديا او  ارفاق وصلة
</strong></div>";
} elseif (empty($_FILES['image1']['name']) && empty($_FILES['file']['name']) ) {
/////////////////////
$date = date('j-m-Y');
$text = addslashes($text); 
// add to admin table
$in = mysql_query ("INSERT INTO `media` (`userid`,`name`, `text`, `active`,`m_active`,`catid`,`use_link`, `link` , `file_link_name` , `file_link_mime` ,`file_link_type` , `youtube` ,  `width` , `height` , `order_num`  ,`thumbnail` ,`sticky`) VALUES ('0','$name', '$text', '$active','$active','$catid', '$use_link', '$link' , '$FILE_LINK_NAME' , '$FILE_LINK_MIME' , '$FILE_LINK_TYPE' , '$FILE_YOUTUBE' ,'$width' ,'$height' ,'$order_num' ,'' ,'$sticky' )") Or Die(MySQL_Error()); 
if(!$in) {
echo "<div align='center' class='msg'><strong>
خلل - لم يتم إدخال البيانات
</strong></div>"; 
}  else  { 
/// unset SESSIONS
///////sessions files///////////
///----
unset($_SESSION['media_name']);
unset($_SESSION['media_text']);
unset($_SESSION['media_link']);
unset($_SESSION['media_width']);
unset($_SESSION['media_height']);
unset($_SESSION['media_catid']);
unset($_SESSION['media_active']);
unset($_SESSION['media_use_link']);
unset($_SESSION['media_order_num']);
///////sessions files///////////
///////////
echo "
<div align='center'><font size='4' face='Arial, Helvetica, sans-serif'><strong>
لقد تم أضافة الملــف بنجاح
</strong></div>
";
} // end data result
} elseif (!empty($_FILES['image1']['name']) && @$_FILES['image1']['type'] !="image/pjpeg" && @$_FILES['image1']['type'] !="image/gif" && @$_FILES['image1']['type'] !="image/jpeg"){
echo "<div align='center' class='msg'><strong>
لقد أرفقت  ملف غير مرخص  في خانة الصورة المصغرة</br>
فقط (jpg و gif) الملفات المرخصة هي 
</strong></div>";
} elseif (!empty($_FILES['image1']['name']) && @$_FILES['image1']['size'] > $maxsize) {
echo "<div align='center' class='msg'><strong>
حجم الملف المرفق في خانة الصورة المصغرة كبير جدا </br>
أقصى حد مسموح به لحجم الصورة هو {$maxsize_info}
</strong></div>"; 
} elseif (!empty($_FILES['image1']['name']) && file_exists("$uploaddir2/{$final_pic2}")) {
echo "<div align='center' class='msg'><strong>
الصورة المرفقة في خانة الصورة المصغرة  يتطابق أسمها معا صورة أخرى  </br>
الرجاء تغيير أسم الصورة و أرفاقها مرة أخرى
</strong></div>"; 
} elseif (!empty($_FILES['image1']['name']) && empty($_FILES['file']['name'])) {
if (move_uploaded_file(@$_FILES['image1']['tmp_name'], $uploadfile2))  {
chmod("$uploaddir2/{$final_pic2}", 0644);  // image directory; permission
/////////////////////
$date = date('j-m-Y');
$text = addslashes($text); 
// add to admin table
$in = mysql_query ("INSERT INTO `media` (`userid`,`name`, `text`, `active`,`m_active`,`catid`,`use_link`, `link`  , `file_link_name` , `file_link_mime`  , `file_link_type` , `youtube` , `width` , `height` , `order_num` ,`thumbnail` ,`sticky`) VALUES ('0','$name', '$text', '$active','$active', '$catid', '$use_link', '$link' , '$FILE_LINK_NAME' , '$FILE_LINK_MIME' , '$FILE_LINK_TYPE' , '$FILE_YOUTUBE'  ,'$width' ,'$height' ,'$order_num' ,'$final_pic2' ,'$sticky')") Or Die(MySQL_Error()); 
if(!$in) {
echo "<div align='center' class='msg'><strong>
خلل - لم يتم إدخال البيانات
</strong></div>"; 
}  else  { 
/// unset SESSIONS
unset($_SESSION['media_name']);
unset($_SESSION['media_text']);
unset($_SESSION['media_link']);
unset($_SESSION['media_width']);
unset($_SESSION['media_height']);
unset($_SESSION['media_catid']);
unset($_SESSION['media_active']);
unset($_SESSION['media_use_link']);
unset($_SESSION['media_order_num']);
///////sessions files///////////
///////////
echo "
<div align='center'><strong>
لقد تم أضافة الملــف بنجاح
</strong></div>
";
} // end data result
} else { 
echo "<div align='center' class='msg'><strong>
خلل .. تأكد من صلاحيات المجلد
</strong></div>"; 
} // end else move file
///---------
} elseif (
!empty($_FILES['file']['name']) && 
/// Audio - Mp3
@$_FILES['file']['type'] !="audio/mpeg"     &&  
@$_FILES['file']['type'] !="audio/x-mpeg"   && 
@$_FILES['file']['type'] !="audio/mp3"      && 
@$_FILES['file']['type'] !="audio/x-mp3"    && 
@$_FILES['file']['type'] !="audio/mpeg3"    && 
@$_FILES['file']['type'] !="audio/x-mpeg3"  && 
@$_FILES['file']['type'] !="audio/mpg"      &&  
@$_FILES['file']['type'] !="audio/x-mpg"    &&  
@$_FILES['file']['type'] !="audio/x-mpegaudio"  &&  
/// Audio - rm
@$_FILES['file']['type'] !="application/vnd.rn-realmedia"  && 
/// Audio - ra & ram
@$_FILES['file']['type'] !="audio/x-pn-realaudio"  && 
/// Audio - wma
@$_FILES['file']['type'] !="audio/x-ms-wma"  && 
/// video - wmv
@$_FILES['file']['type'] !="video/x-ms-wmv" && 
/// video - wvx
@$_FILES['file']['type'] !="video/x-ms-wvx" && 
/// video - flv
@$_FILES['file']['type'] !="video/x-flv" && 
$get_picexten1 !="flv" && 
/// video - avi
@$_FILES['file']['type'] !="video/avi" && 
$get_picexten1 !="avi" && 
/// video - rmvb
@$_FILES['file']['type'] !="application/vnd.rn-realmedia-vbr"
){
echo "<div align='center' class='msg'><strong>
لقد أرفقت  ملف غير مرخص  في خانة الملــف</br>
فقط (mp3 - wmv) الملفات المرخصة هي 
</strong></div>";
} elseif (!empty($_FILES['file']['name']) &&  $_FILES['file']['size'] > $maxsize) {
echo "<div align='center' class='msg'><strong>
حجم الملف المرفق في خانة الملــف كبير جدا </br>
أقصى حد مسموح به لحجم الملف هو {$maxsize_info}
</strong></div>"; 
} elseif (!empty($_FILES['file']['name']) &&  file_exists("$uploaddir1/{$final_pic1}")) {
echo "<div align='center' class='msg'><strong>
الملف المرفق في خانة الملــف يتطابق أسمه معا ملف أخرى  </br>
الرجاء تغيير أسم الملف و أرفاقه مرة أخرى
</strong></div>"; 
} else {
if (!empty($_FILES['file']['name']))  {
move_uploaded_file(@$_FILES['file']['tmp_name'], $uploadfile1);
chmod("$uploaddir1/{$final_pic1}", 0644);  // image directory; permission
} 
if (!empty($_FILES['image1']['name']))  {
move_uploaded_file(@$_FILES['image1']['tmp_name'], $uploadfile2);
chmod("$uploaddir2/{$final_pic2}", 0644);  // image directory; permission
} 
/////////////////////
$date = date('j-m-Y');
$text = addslashes($text); 
// add to admin table
$in = mysql_query ("INSERT INTO `media` (`userid`,`name`, `text`, `active`, `m_active`,`catid`, `use_link`, `link`  , `file_link_name` , `file_link_mime` , `file_link_type` , `youtube` ,  `width` , `height` , `order_num` , `thumbnail` , `file`, `file_name`, `file_mime`, `file_size`, `file_exten`, `type`,`sticky`) VALUES ('0','$name', '$text', '$active','$active', '$catid', '$use_link', '$link' , '$FILE_LINK_NAME' , '$FILE_LINK_MIME'  ,  '$FILE_LINK_TYPE' , '$FILE_YOUTUBE'  , '$width' ,'$height' ,'$order_num'  ,'$final_pic2' ,'$final_pic1','$final_pic_name1' , '{$_FILES['file']['type']}' , '{$_FILES['file']['size']}' , '$get_picexten1' , '3' ,'$sticky')") Or Die(MySQL_Error()); 
if(!$in) {
echo "<div align='center' class='msg'><strong>
خلل - لم يتم إدخال البيانات
</strong></div>"; 
}  else  { 
/// unset SESSIONS
unset($_SESSION['media_name']);
unset($_SESSION['media_text']);
unset($_SESSION['media_link']);
unset($_SESSION['media_width']);
unset($_SESSION['media_height']);
unset($_SESSION['media_catid']);
unset($_SESSION['media_active']);
unset($_SESSION['media_use_link']);
unset($_SESSION['media_order_num']);
///////sessions files///////////
///////////
echo "
<div align='center'><font size='4' face='Arial, Helvetica, sans-serif'><strong>
لقد تم أضافة الملــف بنجاح
</strong></div>
";
} // end data result
} // end last else
//////---------------------------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
case "edit"; 
$id = @$_GET['id'];
$edit_media = mysql_query("select * from media where id='$id' ")Or Die(MySQL_Error());
/// cer
while($edit = mysql_fetch_array($edit_media)){ 
extract($edit);
$image_dir = "../upload/media/";
$thumb_dir = "../upload/media/thumbnails/";
//////////
$name_info = stripslashes ($edit['name']);
$text_info = stripslashes ($edit['text']);
$link_info = stripslashes ($edit['link']);
///// active
if($active == '1'){
$active_info = "
<option value='0' > غير مفعل </option>
<option value='1' selected >مفعل</option>
";
} else{
$active_info = "
<option value='0' selected> غير مفعل </option>
<option value='1'>مفعل</option>
";
} // end check data
////////////////////////////////////
if($use_link == '1'){
$use_link_info = "
<option value='0' >أستخدم الملــف المرفق</option>
<option value='1' selected >أستخدم وصلة الملــف</option>
";
} else{
$use_link_info = "
<option value='0' selected> أستخدم الملــف المرفق</option>
<option value='1'>أستخدم وصلة الملــف</option>
";
} // end check data
////////////////////////////////////////////// 
if($sticky =="1") {
$sticky_info = "
<option value='novalue'>أختر الحالة</option>
<option value='1' selected>نعم</option>
<option value='0'>لا</option>
";
} elseif($sticky =="0") {
$sticky_info = "
<option value='novalue'>أختر الحالة</option>
<option value='1'>نعم</option>
<option value='0' selected>لا</option>
";
} else { 
$sticky_info = "
<option value='novalue'>أختر الحالة</option>
<option value='1'>نعم</option>
<option value='0'>لا</option>
";
}
/// ######################################################################
?>
<form action='?action=update' method='POST' ENCTYPE='multipart/form-data' name="image_edit" id="image_edit" dir='rtl' onSubmit="return formvalidation(this)">
<table width='600'  border='0' align='center' cellpadding="0" cellspacing="1">
<tr>
<td width="23%">أسم الملــف :<font color="#FF0000">*</font></td>
<td width="77%"><input name='name' type='text' id='name' value='<?php echo $name_info; ?>' size='30'></td>
</tr>
<tr>
<td valign="top">الوصف :</td>
<td><textarea name='text' cols='40' rows='6' wrap='VIRTUAL' id='text'><?php echo $text_info;?></textarea></td>
</tr>
<tr>
<td>القسم:<font color="#FF0000">*</font></td>
<td><select name="catid" id="catid">
<option value="novalue">أختر قسما</option>
<?php
////--------------------------------
echo show_dropdown_media('0','0', $edit['catid']);
////--------------------------------
?>
</select>      </td>
</tr>
<tr>
<td>الصورة المصغرة:</td>
<td><input name='image1' type='file' id='image1' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' >
<a href="<?php echo $thumb_dir.$thumbnail;?>" target="_blank">شاهد الصورة المصغرة</a></td>
</tr>
<tr>
<td> الملــف:</td>
<td><input name='file' type='file' id='file' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' >
<a href="<?php echo $image_dir.$file;?>"  target="_blank">شاهد الملــف</a></td>
</tr>
<tr>
<td>الوصلة :</td>
<td><input name='link' type='text' id='link' value='<?php  echo $link_info; ?>' size='30'></td>
</tr>
<tr>
<td>العرض</td>
<td><input name='width' type='text' id='width' value='<?php  echo $width; ?>' size='5' maxlength="11"></td>
</tr>
<tr>
<td>الطول</td>
<td><input name='height' type='text' id='height' value='<?php  echo $height; ?>' size='5' maxlength="11"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td bgcolor="#CCCCCC">الإعدادات</td>
</tr>
<tr>
<td>الترتيب</td>
<td><input name='order_num' type='text' id='order_num' value='<?php  echo $order_num; ?>' size='5'></td>
</tr>
<tr>
<td>إستخدام:<font color="#FF0000">*</font></td>
<td><select name="use_link" id="use_link">
<?php echo $use_link_info ; ?>
</select></td>
</tr>
<tr>
<td>الحالة:<font color="#FF0000">*</font></td>
<td><select name="active" id="active">
<?php echo $active_info; ?>
</select></td>
</tr>
<tr>
<td>التثبيت:<font color="#FF0000">*</font></td>
<td><select name='sticky' id='sticky' dir="rtl">
<?php echo "$sticky_info"; ?>
</select></td>
</tr>
<tr>
<td><input name="old_image" type="hidden" id="old_image" value="<?php  echo $thumbnail; ?>">
<input name="old_file" type="hidden" id="old_file" value="<?php  echo $file; ?>">
<input name="id" type="hidden" id="id" value="<?php  echo $edit['id'];?>"></td>
<td></td>
</tr>
<tr>
<td><font size='2' face='Arial, Helvetica, sans-serif'>&nbsp;</font></td>
<td><input name="Add" type='submit' id="Add" style='background-color: #000080; color: #FFFFFF; border: 1 solid #000000' value='تـــعديـل'>      </td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><font color="#FF0000">الحد الأقصى المسموح به للملفات هو <?php echo $maxsize_info;?></font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td class="error"><font color="#FF0000">الملفات المسموح بها هي</font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><span class="marktext">صوت:</span> <font color="#FF0000"> (mp3 - rm) فقط</font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><span class="marktext">فيديو:</span> <font color="#FF0000"> (avi - wmv - flv) فقط</font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td class="marktext">يقبل ملفات اليوتيوب</td>
</tr>
</table>
</form>
<?php
}
break; 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
case "update"; 
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
/////////////////
$id = $_POST['id'];
$name = $_POST['name'];
$text = $_POST['text'];
$link = $_POST['link'];
$width = $_POST['width'];
$height = $_POST['height'];
$order_num = $_POST['order_num'];
$sticky =$_POST['sticky'];
$catid = $_POST['catid'];
$active = $_POST['active'];
$use_link = $_POST['use_link'];
$old_image = $_POST['old_image'];
$old_file = $_POST['old_file'];
///////////////////////////
require_once("includes/mime_detector.php");
if (!empty($_POST['link']) || $_POST['link']!='') {
if (eregi ("youtube.com", $_POST['link'])) {
$FILE_LINK_TYPE = "flv";
$FILE_LINK_NAME = "";
$FILE_LINK_MIME = "video/x-flv";
$FILE_YOUTUBE = 1;
} else {
$FILE_LINK_TYPE = findtype($_POST['link']);
$FILE_LINK_NAME = findname($_POST['link']);
$FILE_LINK_MIME = returnMIMEType($_POST['link']);;
$FILE_YOUTUBE = 0;
}
} else {
$FILE_LINK_TYPE = "";
$FILE_LINK_NAME = "";
$FILE_LINK_MIME = "";
$FILE_YOUTUBE = 0;
}
if ($FILE_YOUTUBE==1) {
//$link =str_replace("watch?v=","v/",$_POST['link']);  
}
/// dir ///////////////
// image
$uploaddir1 = "../upload/media/"; //change the name of the directory to upload files
$uploaddir2 = "../upload/media/thumbnails/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////////////
$date_print = date('jmY_');
/////////////////////////// Images rename /////////////////////////
if (!empty($_FILES['file']['name'])) {
//////////////
$get_picname1 = findname($_FILES['file']['name']);
$get_picexten1 = findtype($_FILES['file']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic_name1 = "$date_print$pic_output1";
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 1
$uploadfile1 = $uploaddir1 . basename($final_pic1);
}
/////////////////////////// Images rename /////////////////////////
if (!empty($_FILES['image1']['name'])) {
//////////////
$get_picname2 = findname($_FILES['image1']['name']);
$get_picexten2 = findtype($_FILES['image1']['name']);
// func
$pic_output2 = rand(999999, 100000);
////
$final_pic2 = "$date_print$pic_output2.$get_picexten2";
// image 1
$uploadfile2 = $uploaddir2 . basename($final_pic2);
}
/////////////////////////// Images rename /////////////////////////
if ($name == "") {
echo "<div align='center' class='msg'><strong>
الرجاء كتابة أسم اللملــف
</strong></div>";
} elseif ($active == "novalue"  || !numbers_only($active)) {
echo "<div align='center' class='msg'><strong>
الرجاء تحديد حالة الملــف
</strong></div>";
} elseif ($catid == "novalue" || !numbers_only($catid)) {
echo "<div align='center' class='msg'><strong>
الرجاء تحديد القسم الخاص بالملــف
</strong></div>";
} elseif ($sticky=="" || $sticky=='novalue'){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء تحديد حالة التثبيت
</strong></font></div>
";
} elseif ($id == "novalue" || $id == "" ||  !numbers_only($id)) {
echo "<div align='center' class='msg'><strong>
لم يتم تحديد الرقم التسلسلي لملــف
</strong></div>";
////////////// Begin UPDATE data
} elseif (empty($_FILES['image1']['name']) && empty($_FILES['file']['name'])) {
/////////////////////////////////////
$name = addslashes($name);
$text = addslashes($text);
//////////////// Update data ///////////////////////////
$update_data = mysql_query (" UPDATE media SET name='$name' , text='$text' , catid='$catid' , link='$link' , file_link_name='$FILE_LINK_NAME' , file_link_mime='$FILE_LINK_MIME' ,  file_link_type='$FILE_LINK_TYPE' , youtube='$FILE_YOUTUBE' , width='$width'  , height='$height'  , order_num='$order_num', use_link='$use_link', active='$active' , m_active='$active' , sticky='$sticky' WHERE id='$id'") Or Die(mysql_error()); 
if(!$update_data) {
echo "<div align='center' class='msg'><strong>
خلل .. لم يتم إدخال البيانات
</strong></div>";
} else  { 
echo "
<div align='center'><strong>
تم تعديل الملــف بنجاح
</strong></div>
";
}
////////////////////////////////////////////////////////////////////////////////////////////////
} elseif (!empty($_FILES['image1']['name']) && empty($_FILES['file']['name'])) {
if (@$_FILES['image1']['type'] !="image/pjpeg" && @$_FILES['image1']['type'] !="image/gif" && @$_FILES['image1']['type'] !="image/jpeg"){
echo "<div align='center' class='msg'><strong>
لقد أرفقت  ملف غير مرخص  في خانة الصورة المصغرة</br>
فقط (jpg و gif) الملفات المرخصة هي 
</strong></div>";
} elseif (@$_FILES['image1']['size'] > $maxsize) {
echo "<div align='center' class='msg'><strong>
حجم الملف المرفق في خانة الصورة المصغرة كبير جدا </br>
أقصى حد مسموح به لحجم الصورة هو {$maxsize_info}
</strong></div>"; 
} elseif (file_exists("$uploaddir2/{$final_pic2}")) {
echo "<div align='center' class='msg'><strong>
الصورة المرفقة في خانة الصورة المصغرة  يتطابق أسمها معا صورة أخرى  </br>
الرجاء تغيير أسم الصورة و أرفاقها مرة أخرى
</strong></div>"; 
} else {
if (move_uploaded_file(@$_FILES['image1']['tmp_name'], $uploadfile2)) {
chmod("$uploaddir2/{$final_pic2}", 0644);  // image directory; permission
//// delete old images
if ($old_image!='' && $old_image!='default.jpg') {
if (file_exists("$uploaddir2"."$old_image"))  { unlink ("$uploaddir2"."$old_image");} 
}
/////////////////////
$name = addslashes($name); 
$text = addslashes($text); 
//////////////// Update data ///////////////////////////
$update_data = mysql_query (" UPDATE media SET name='$name' , text='$text' , catid='$catid' , link='$link'  , file_link_name='$FILE_LINK_NAME' , file_link_mime='$FILE_LINK_MIME'  ,  file_link_type='$FILE_LINK_TYPE' , youtube='$FILE_YOUTUBE' , width='$width'  , height='$height'  , order_num='$order_num' , use_link='$use_link', thumbnail='$final_pic2'  , sticky='$sticky' , active='$active'  , m_active='$active' WHERE id='$id'") Or Die(mysql_error()); 
if(!$update_data) {
echo "<div align='center' class='msg'><strong>
خلل .. لم يتم إدخال البيانات
</strong></div>"; 
} else  { 
//////////
echo "
<div align='center'><font size='3' face='Arial, Helvetica, sans-serif'><strong>
تم تعديل الملــف بنجاح
</strong></div>
";
}
} else { 
echo "<div align='center' class='msg'><strong>
خلل .. الرجاء مراجعة صلاحيات فولدر المرفقات
</strong></div>"; 
} // end else move file
} // end inside else
////////////////////////////////////////////////////////////////////////////////////////////////
} elseif (empty($_FILES['image1']['name']) && !empty($_FILES['file']['name'])) {
if (
/// Audio - Mp3
@$_FILES['file']['type'] !="audio/mpeg"     &&  
@$_FILES['file']['type'] !="audio/x-mpeg"   && 
@$_FILES['file']['type'] !="audio/mp3"      && 
@$_FILES['file']['type'] !="audio/x-mp3"    && 
@$_FILES['file']['type'] !="audio/mpeg3"    && 
@$_FILES['file']['type'] !="audio/x-mpeg3"  && 
@$_FILES['file']['type'] !="audio/mpg"      &&  
@$_FILES['file']['type'] !="audio/x-mpg"    &&  
@$_FILES['file']['type'] !="audio/x-mpegaudio"  &&  
/// Audio - rm
@$_FILES['file']['type'] !="application/vnd.rn-realmedia"  && 
/// Audio - ra
@$_FILES['file']['type'] !="audio/x-pn-realaudio"  && 
/// Audio - wma
@$_FILES['file']['type'] !="audio/x-ms-wma"  && 
/// video - wmv
@$_FILES['file']['type'] !="video/x-ms-wmv" && 
/// video - wvx
@$_FILES['file']['type'] !="video/x-ms-wvx" && 
/// video - flv
@$_FILES['file']['type'] !="video/x-flv" && 
$get_picexten1 !="flv" && 
/// video - avi
@$_FILES['file']['type'] !="video/avi" && 
$get_picexten1 !="avi" && 
/// video - rmvb
@$_FILES['file']['type'] !="application/vnd.rn-realmedia-vbr"
){
echo "<div align='center' class='msg'><strong>
لقد أرفقت  ملف غير مرخص  في خانة الملــف</br>
فقط (mp3 - wmv) الملفات المرخصة هي 
</strong></div>";
} elseif (@$_FILES['file']['size'] > $maxsize) {
echo "<div align='center' class='msg'><strong>
حجم الملف المرفق في خانة الملــف كبير جدا </br>
أقصى حد مسموح به لحجم الملف هو {$maxsize_info}
</strong></div>"; 
} elseif (file_exists("$uploaddir1/{$final_pic1}")) {
echo "<div align='center' class='msg'><strong>
الملف المرفق في خانة الملــف يتطابق أسمه معا ملف أخرى  </br>
الرجاء تغيير أسم الملف و أرفاقه مرة أخرى
</strong></div>"; 
} else {
if (move_uploaded_file(@$_FILES['file']['tmp_name'], $uploadfile1)) {
chmod("$uploaddir1/{$final_pic1}", 0644);  // image directory; permission
//// delete old images
if ($old_file!='' && $old_file!='default.jpg') {
if (file_exists("$uploaddir1"."$old_file"))  { unlink ("$uploaddir1"."$old_file");} 
}
/////////////////////
$name = addslashes($name); 
$text = addslashes($text); 
//////////////// Update data ///////////////////////////
$update_data = mysql_query (" UPDATE media SET name='$name' , text='$text' , catid='$catid' , link='$link'   , file_link_name='$FILE_LINK_NAME' , file_link_mime='$FILE_LINK_MIME' ,  file_link_type='$FILE_LINK_TYPE' , youtube='$FILE_YOUTUBE' , width='$width'  , height='$height'  , order_num='$order_num' , use_link='$use_link', file='$final_pic1' , file_name='$final_pic_name1'  , file_exten='$get_picexten1'  , file_mime='{$_FILES['file']['type']}'  , file_size='{$_FILES['file']['size']}' , sticky='$sticky' , active='$active'  , m_active='$active' WHERE id='$id'") or die(mysql_error()); 
if(!$update_data) {
echo "<div align='center' class='msg'><strong>
خلل .. لم يتم إدخال البيانات
</strong></div>"; 
} else  { 
//////////
echo "
<div align='center'><font size='3' face='Arial, Helvetica, sans-serif'><strong>
تم تعديل الملــف بنجاح
</strong></div>
";
}
} else { 
echo "<div align='center' class='msg'><strong>
خلل .. الرجاء مراجعة صلاحيات فولدر المرفقات
</strong></div>"; 
} // end else move file
} // end inside else
////////////////////////////////////////////////////////////////////////////////////////////////
} elseif (!empty($_FILES['image1']['name']) && !empty($_FILES['file']['name'])) {
if (@$_FILES['image1']['type'] !="image/pjpeg" && @$_FILES['image1']['type'] !="image/gif" && @$_FILES['image1']['type'] !="image/jpeg"){
echo "<div align='center' class='msg'><strong>
لقد أرفقت  ملف غير مرخص  في خانة الصورة المصغرة</br>
فقط (jpg و gif) الملفات المرخصة هي 
</strong></div>";
} elseif (@$_FILES['image1']['size'] > $maxsize) {
echo "<div align='center' class='msg'><strong>
حجم الملف المرفق في خانة الصورة المصغرة كبير جدا </br>
أقصى حد مسموح به لحجم الصورة هو {$maxsize_info}
</strong></div>"; 
} elseif (file_exists("$uploaddir2/{$final_pic2}")) {
echo "<div align='center' class='msg'><strong>
الصورة المرفقة في خانة الصورة المصغرة  يتطابق أسمها معا صورة أخرى  </br>
الرجاء تغيير أسم الصورة و أرفاقها مرة أخرى
</strong></div>"; 
} elseif (
/// Audio - Mp3
@$_FILES['file']['type'] !="audio/mpeg"     &&  
@$_FILES['file']['type'] !="audio/x-mpeg"   && 
@$_FILES['file']['type'] !="audio/mp3"      && 
@$_FILES['file']['type'] !="audio/x-mp3"    && 
@$_FILES['file']['type'] !="audio/mpeg3"    && 
@$_FILES['file']['type'] !="audio/x-mpeg3"  && 
@$_FILES['file']['type'] !="audio/mpg"      &&  
@$_FILES['file']['type'] !="audio/x-mpg"    &&  
@$_FILES['file']['type'] !="audio/x-mpegaudio"  &&  
/// Audio - rm
@$_FILES['file']['type'] !="application/vnd.rn-realmedia"  && 
/// Audio - ra
@$_FILES['file']['type'] !="audio/x-pn-realaudio"  && 
/// Audio - wma
@$_FILES['file']['type'] !="audio/x-ms-wma"  && 
/// video - wmv
@$_FILES['file']['type'] !="video/x-ms-wmv" && 
/// video - wvx
@$_FILES['file']['type'] !="video/x-ms-wvx" && 
/// video - flv
@$_FILES['file']['type'] !="video/x-flv" && 
$get_picexten1 !="flv" && 
/// video - avi
@$_FILES['file']['type'] !="video/avi" && 
$get_picexten1 !="avi" && 
/// video - rmvb
@$_FILES['file']['type'] !="application/vnd.rn-realmedia-vbr"
){
echo "<div align='center' class='msg'><strong>
لقد أرفقت  ملف غير مرخص  في خانة الملــف</br>
فقط (mp3 - wmv) الملفات المرخصة هي 
</strong></div>";
} elseif (@$_FILES['file']['size'] > $maxsize) {
echo "<div align='center' class='msg'><strong>
حجم الملف المرفق في خانة الملــف كبير جدا </br>
أقصى حد مسموح به لحجم الملف هو {$maxsize_info}
</strong></div>"; 
} elseif (file_exists("$uploaddir1/{$final_pic1}")) {
echo "<div align='center' class='msg'><strong>
الملف المرفق في خانة الملــف يتطابق أسمه معا ملف أخرى  </br>
الرجاء تغيير أسم الملف و أرفاقه مرة أخرى
</strong></div>"; 
} else {
if (move_uploaded_file(@$_FILES['file']['tmp_name'], $uploadfile1) && move_uploaded_file(@$_FILES['image1']['tmp_name'], $uploadfile2) ) {
chmod("$uploaddir1/{$final_pic1}", 0644);  // image directory; permission
//// delete old images
if ($old_image!='' && $old_image!='default.jpg') {
if (file_exists("$uploaddir2"."$old_image"))  { unlink ("$uploaddir2"."$old_image");} 
}
//// delete old images
if ($old_file!='' && $old_file!='default.jpg') {
if (file_exists("$uploaddir1"."$old_file"))  { unlink ("$uploaddir1"."$old_file");} 
}
/////////////////////
$name = addslashes($name); 
$text = addslashes($text); 
//////////////// Update data ///////////////////////////
$update_data = mysql_query (" UPDATE media SET name='$name' , text='$text' , catid='$catid' , link='$link'  , file_link_name='$FILE_LINK_NAME' , file_link_mime='$FILE_LINK_MIME'  ,  file_link_type='$FILE_LINK_TYPE' , youtube='$FILE_YOUTUBE'  , use_link='$use_link' , width='$width'  , height='$height'  , order_num='$order_num' , thumbnail='$final_pic2' , file='$final_pic1' , file_name='$final_pic_name1'  , file_exten='$get_picexten1'  , file_mime='{$_FILES['file']['type']}'  , file_size='{$_FILES['file']['size']}' , sticky='$sticky' , active='$active' , m_active='$active'  WHERE id='$id'") Or Die(mysql_error()); 
if(!$update_data) {
echo "<div align='center' class='msg'><strong>
خلل .. لم يتم إدخال البيانات
</strong></div>"; 
} else  { 
//////////
echo "
<div align='center'><strong>
تم تعديل الملــف بنجاح
</strong></div>
";
}
} else { 
echo "<div align='center' class='msg'><strong>
خلل .. الرجاء مراجعة صلاحيات فولدر المرفقات
</strong></div>"; 
} // end else move file
} // end inside else
//////////////////////////////////////////////////////////////////////////
} // end all else 
//////----------------------------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
case "delcon"; 
$id = @$_GET['id'];
/// dir ///////////////
// image
$uploaddir1 = "../upload/media/"; //change the name of the directory to upload files
// thumbnail
$uploaddir2 = "../upload/media/thumbnails/"; //change the name of the directory to upload 
///////////////////////////////////////////////////////////////////////////////////////
$del_media = mysql_query("select * from media where id='$id' ");
/// cer
while($del = mysql_fetch_array($del_media)){ 
extract($del);
////// in no image
if ($file=='') {$file="default.jpg"; }
////////
echo "
<form method='post' action='?action=del' dir='rtl'>
<table width='400'  border='0' align='center' cellpadding='1'>
<tr>
<td height='21' align='center' valign='top'><TABLE cellSpacing=0 cellPadding=3 width='600' 
align=center border=0>
<TBODY>
<TR>
<TD width='100%' align='center' vAlign=top><TABLE cellSpacing=0 cellPadding=4 width='100%' 
border=0>
<TBODY>
<TR vAlign=top>
<TD colspan='2' align='center' valign='top' class=maintext><TABLE cellSpacing=0 cellPadding=0  
align=center border=5>
<TBODY>
<TR>
<TD vAlign=top><font size='2' face='Arial, Helvetica, sans-serif'><strong><a href='$uploaddir1$file' target='_blank'><img src='$uploaddir2$thumbnail' border='0' ></a></strong></font></TD>
</TR>
</TBODY>
</TABLE></TD>
</TR>
<TR vAlign=top>
<TD colspan='2' align='center' valign='top' class=maintext><font color='#000099'><span class='frontheaders'>$name</span></font></TD>
</TR>
</TBODY>
</TABLE></TD>
</TR>
</TBODY>
</TABLE>
<strong><font color='#FF0000'>هل ترغب حقا في حذف هذه الملــف?      </font></strong></td>
</tr>
<tr>
<td height='26' align='center'> <span class='maintext'><span class='text'>
<input name='doit' type='radio' value='no' checked>
لا</span>
<input name='doit' type='radio' value='yes'>
نعم</span><font size='2' face='Arial, Helvetica, sans-serif'><span class='maintext'> <br>
<input name='submit2' type=submit value='أنــجز العملية'>
</span> <strong><font color='#FF0000'>
<input name='old_file' type='hidden' id='old_file' value='$file'>
</font>
<font color='#FF0000'>
<input name='old_image' type='hidden' id='old_image' value='$thumbnail'>
</font>
<input name='id' type='hidden' id='id' value='$id'>
</strong></font></td>
</tr>
</table>
</form>
";
}
//////////////////
break; 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
case "del"; 
/// dir ///////////////
// image
$uploaddir1 = "../upload/media/"; //change the name of the directory to upload files
// thumbnail
$uploaddir2 = "../upload/media/thumbnails/"; //change the name of the directory to upload
/// dir ///////////////
$doit = $_POST["doit"];
if (!isset($_POST["doit"]) || $_POST["doit"] =="no"){
echo "
<strong><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><br>
<br>
إخترت عدم حذف الملــف .. الرجاء الإنتظار قليلا حتى يتم إعادة توجيهك إلى لوحة تحكم الملفات </font></strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='media.php'>";
} else {
////////////
if ($_POST['old_file'] != "" && $_POST['old_file'] != "default.jpg") {
if (file_exists("$uploaddir1"."{$_POST['old_file']}"))  { unlink ("$uploaddir1"."{$_POST['old_file']}");} 
}
////////////
if ($_POST['old_image'] != "" && $_POST['old_image'] != "default.jpg") {
if (file_exists("$uploaddir2"."{$_POST['old_image']}"))  { unlink ("$uploaddir2"."{$_POST['old_image']}");} 
}
//// result
$in = mysql_query (" DELETE FROM media WHERE id='{$_POST['id']}' ") 
Or Die(MySQL_Error()); 
// data input
echo " 
<p><strong>تم حذف الملــف بنجاح</strong></p> 
";
// resulte close
}
break; 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////// end swith
} 
?>
</div>
</body>
</html>

<?php

}

?>