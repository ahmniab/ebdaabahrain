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
<title>أقسام المعرض</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' href='images/cpstyle.css'>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
<p align="center"><strong><br>
أقسام المعرض</strong></p>
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
/////////////////////
if ($_POST['catname'] ==""){
print "
<div align='center' class='msg'><strong>
الرجاء كتابة أسم القسم
</strong></div>
";
} elseif ($_POST['parent_id'] =="" || $_POST['parent_id'] =='novalue' || !numbers_only($_POST['catorder'])) {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد القسم الفرعي
</strong></div>
";
} elseif ($_POST['catorder'] =="" || !numbers_only($_POST['catorder'])) {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد ترتيب القسم
</strong></div>
";
} elseif ($_POST['active'] =="") {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد حالة القسم
</strong></div>
";
////////////////////////////////////////////////////////////////////////////////
} else {
// add to table
$in = MySQL_Query("INSERT INTO media_cat (catname,active,parent_id,catorder) VALUES ('{$_POST['catname']}','{$_POST['active']}', '{$_POST['parent_id']}', '{$_POST['catorder']}')") 
Or Die(mysql_error()); 
if(!$in) 
{
echo "
<p align='center'><font color='#FF0000'><strong> خلل .. لم يتم إنشاء القسم </strong></font></p>
"; 
} else { 
$get_catid = mysql_insert_id(); 
mkdir("../upload/media/files/$get_catid", 0777);
mkdir("../upload/media/thumbnails/$get_catid", 0777);
echo "
<p align='center'><strong><font size='3'>تم إضافة القسم بنجاح</font></strong></p> 
";
} // end data
////////////////////////////////////////////////////////////////////////////////////////////////
} // END ELSE ALL
///////////////////////////////////////////////////////////////////////////////////////
} // END IF SET
//************************************************************************************
if (isset($_POST['catname'])) {$_POST['catname']=stripslashes(strip_tags($_POST['catname'])); }
?>
<form action='' method='post' name='add' id='add'>
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>أضافة قسم جديد</strong></td>
</tr>
<tr align="right">
<td width="466" bgcolor="#CCCCCC"><input name="catname" type="text" class="smalltext" id="catname" dir="rtl" value="<?php if (isset($_POST['catname'])) {echo $_POST['catname'];} ?>" size="40" maxlength="255"></td>
<td width="120" bgcolor="#CCCCCC"><strong>أسم القسم </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">
<select name='parent_id' dir='rtl'>
<option value='novalue'>أختر قسما</option>
<option value='0'>قسم رئيسي</option>
<?php
echo show_dropdown_media('0','0','0');
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>القسم الفرعي </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="active" class="smalltext" id="active" dir="rtl">
<?php if (isset($_POST['active']) && $_POST['active']==0) { ?>
<option value="1">مفعل</option>
<option value="0" selected="selected">غير مفعل</option>
<?php } else { ?>
<option value="1" selected="selected">مفعل</option>
<option value="0">غير مفعل</option>
<?php } ?>
</select></td>
<td bgcolor="#CCCCCC"><strong>الحالة</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="catorder" type="text" class="smalltext" id="catorder" dir="rtl" value="<?php if (isset($_POST['catorder'])) {echo $_POST['catorder'];} else {echo "0";} ?>" size="5" maxlength="11"></td>
<td bgcolor="#CCCCCC"><strong>ترتيب القسم</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">&nbsp;</td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="&#1571;&#1590;&#1601;"  style="width:60px;"></td>
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
////////////////////////////////////////////////////////////////////////////////
} else {
// add to table
$in = mysql_query ("UPDATE media_cat SET catname='{$_POST['catname']}' , parent_id='{$_POST['parent_id']}', active='{$_POST['active']}' , catorder='{$_POST['catorder']}' WHERE catid='{$_POST['catid']}' ") 
or die(mysql_error()); 
if ($_POST['active']==1) {
$in = mysql_query ("UPDATE media SET active=m_active  WHERE catid='{$_POST['catid']}' ") 
or die(mysql_error()); 
} else {
$in = mysql_query ("UPDATE media SET active='{$_POST['active']}'  WHERE catid='{$_POST['catid']}' ") 
or die(mysql_error());
}
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
$edit_cat = mysql_query("select * from media_cat where catid='{$_GET['catid']}' ");
/// cer
while($do_edit = mysql_fetch_array($edit_cat)){ 
extract($do_edit);
///// reg
if($do_edit['active'] == '1'){$act = "<option value='1' selected>مفعل</option>";}
else{$act = "  <option value='1'>مفعل</option>";}
if($do_edit['active'] == '0'){$act2 = "<option value='0' selected>غير مفعل</option>";}
else{ $act2 = "<option value='0'>غير مفعل</option>";}
?>
<br>
<form action='' method='post' name='edit' id='edit'>
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>تعديل القسم</strong></td>
</tr>
<tr align="right">
<td width="466" bgcolor="#CCCCCC"><input name="catname" type="text" class="smalltext" id="catname" dir="rtl" value="<?php echo $do_edit['catname']; ?>" size="40" maxlength="255"></td>
<td width="120" bgcolor="#CCCCCC"><strong>أسم القسم </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name='parent_id' dir="rtl">
<option value='novalue'>أختر قسما</option>
<?php
///////////////////////
///// root or not
if($do_edit['parent_id'] == '0'){
$cat_root = "<option value='0' selected>قسم رئيسي</option>";
}
else { 
$cat_root = "<option value='0'>قسم رئيسي</option>";
}
echo "$cat_root";
///////////////////////////////////
if($do_edit['parent_id'] != '0'){
$edit_cat4 = mysql_query("select * from media_cat where catid='{$do_edit['parent_id']}' ");
/// cer
while($edit = mysql_fetch_array($edit_cat4)){ 
extract($edit);
echo "<option value='$catid' selected>{$edit['catname']}</option>";
} // end while 
}
//////////////////////////////////////
echo show_dropdown_edit_media('0','0');
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>القسم الفرعي </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">
<select name='active' size='1' id='active' dir="rtl">
<?php echo $act; ?> <?php echo $act2; ?>
</select>
</strong></font></td>
<td bgcolor="#CCCCCC"><strong>الحالة</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="catorder" type="text" class="smalltext" id="catorder" dir="rtl" value="<?php echo $do_edit['catorder']; ?>" size="5" maxlength="11"></td>
<td bgcolor="#CCCCCC">&nbsp;</td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><font color='#006633'><strong>
<input name='catid' type='hidden' id='catid' value='<?php echo $do_edit['catid']; ?>'>
</strong></font></td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="تعديل"  style="width:60px;"></td>
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
$del_cat = mysql_query("select * from media_cat where catid='$catid' ");
/// cer
while($del = mysql_fetch_array($del_cat)){ 
extract($del);
///// activation
if($active == '0'){$act = "غير مفعل";}
else{$act = "مفعل";}
////////
////////
?>
<form method="post" action="?action=del">
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>حذف القسم</strong></td>
</tr>
<tr align="right">
<td width="466" bgcolor="#CCCCCC"><strong><?php echo $catname; ?></strong></td>
<td width="120" bgcolor="#CCCCCC"><strong>أسم القسم </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php echo $act; ?></td>
<td bgcolor="#CCCCCC"><strong>الحالة</strong></td>
</tr>
<tr align="right">
<td colspan="2" bgcolor="#CCCCCC">هل أنت متأكد من رغبتك في حذف هذا القسم؟</td>
</tr>
<tr align="right">
<td colspan="2" bgcolor="#CCCCCC">
<input name='doit' type='radio' value='yes'> &nbsp;
لا
&nbsp;
<input name='doit' type='radio' value='no' checked> &nbsp;
نعــم
</td>
</tr>
<tr align="right">
<td colspan="2" bgcolor="#CCCCCC">ملاحظة: سيتم حذف جميع الصور المندرجة تحت هذا القسم</td>
</tr>
<tr align="right">
<td colspan="2" bgcolor="#CCCCCC"><font size='2' face='Arial, Helvetica, sans-serif'><strong><font color='#FF0000'>
<input name='catid' type='hidden' id='catid' value='<?php echo $catid; ?>'>
</font></strong></font>              <input name="Submit" type="submit" class="smalltext" value="تنفيـــذ"  style="width:60px;"></td>
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
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='media_cat.php'>";
}
else {
$catid = @$_POST['catid'];
delete_cats_media("$catid");
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
$view_all = mysql_query("SELECT * FROM media WHERE catid='$catid' ORDER BY id DESC LIMIT $from, $max_results"); 
/////////////////////////////////////////////////////////////////////////////////////////////
$num=mysql_num_rows($view_all);
if($num==0){ 
print"
<div align='center' class='error'>
لا توجد أي ملفات في هذا القسم
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
// file
$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files
$upload_file = "../$db_upload_dir/media/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/media/thumbnails/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////
if ($row['use_link']==1 && $row['link']!='' || $row['file']=='') {
$file_path = $row['link'];
} else {
$file_path = $upload_file.$row['file'];
}
// ---------
if ($thumbnail=='') {$thumbnail_info = $upload_temp."default.jpg";} else {
if (file_exists("$upload_thumb"."$thumbnail")) {
$thumbnail_info = $upload_thumb.$thumbnail;
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
<table width='300' height='178' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='006699' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
<td width='36%' rowspan='4'><a href='$file_path' target='_blank'><img src='$thumbnail_info' width='100' height='100' border='1'></a></td>
<td height='44' valign='middle'>$name</td>
</tr>
<tr align='center'>
<td height='44' valign='middle'><FONT face='MS Sans Serif' color=#52557c size=1><SPAN lang=en-us>$act</SPAN></FONT></td>
</tr>
<tr align='center'>
<td height='44' valign='middle'><a href='media.php?action=edit&id=$id'><font face='Tahoma'><span lang='en-us'><font size='2'>تعديل</font></span></font></a></td>
</tr>
<tr align='center'>
<td width='7%' height='44' valign='middle'><span lang='en-us'><a href='media.php?action=delcon&id=$id'>حذف</a></span></td>
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
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM media WHERE catid='$catid' "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center dir='rtl'>الصفحات<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"?action=show&catid=$catid&page=$prev\"><< السابق</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
if ($total_pages > 1){
echo "$i "; 
}
} else { 
echo "<a href=\"?action=show&catid=$catid&page=$i\">$i</a> "; 
} 
} 
// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"?action=show&catid=$catid&page=$next\">التالي >></a>"; 
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
<td align="center" class='tableseparator'>التحكم في الأقسام</td>
</tr>
<?php 
echo show_admin_menu_media(0,0);
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
}
?>