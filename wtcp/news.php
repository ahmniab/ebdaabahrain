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
<title>الأخبار</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
<?php
///--------------------------------------------------------------------------
switch(@$_GET['action']){ 
//////////////////////////////////////////////////////////////////////////////
default: 
///--------------------------------------------------------------------------
if (isset($_GET['status']) && $_GET['status']!='') {
$QUERY_INFO = "WHERE active='{$_GET['status']}'";
$URL_INFO = "&active={$_GET['status']}";
} else {
$QUERY_INFO = "";
$URL_INFO = "";
}
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = $_GET['page']; 
} 
// Define the number of results per page 
$max_results = 30; 
// Figure out the limit for the query based 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_all = mysql_query("SELECT * FROM news $QUERY_INFO ORDER BY date DESC LIMIT $from, $max_results") or die (mysql_error()); 
/////////////////////////////////////////////////////////////////////////////////////////////
echo "
<br/>
<table width='750' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='100%' border='0' cellpadding='2'>
<tr>
<td width='67' align='center' bgcolor='#EEEEEE'>Delete</td>
<td width='80' align='center' bgcolor='#EEEEEE'>Edit</td>
<td width='113' align='center' bgcolor='#EEEEEE'>---</td>
<td width='113' align='center' bgcolor='#EEEEEE'>Status</td>
<td width='90' align='center' bgcolor='#EEEEEE'>Date</td>
<td width='253' align='center' bgcolor='#EEEEEE'>Title</td>
</tr>
</table></td>
</tr>
</table>
"; 
///////
while($action = mysql_fetch_array($view_all)){ 
extract($action);
/// stat
if($action['active'] == '1'){
$active_info = "<strong><font color='#0000FF'>
Active
</font></strong>";
}else{
$active_info = "<strong><font color='#FF0000'>
Inactive
</font></strong>";
}
////////////
$date_info =  date('Y-m-d', $action['date']);
$view_comments = mysql_query("SELECT * FROM news_comments WHERE newsid='$newsid' ORDER BY date DESC ") or die (mysql_error()); 
$COMMENTS_NUM= mysql_num_rows($view_comments);
///// Active OR Not
echo "
<table width='750' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='100%' border='0' cellpadding='2'>
<tr align='right'>
<td width='67' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=delcon&newsid=$newsid'>Delete</a></td>
<td width='80' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=edit&newsid=$newsid'>Edit</a></td>
<td width='112' align='center' bgcolor='#CCCCCC' >--</td>
<td width='113' align='center' bgcolor='#CCCCCC'>$active_info</td>
<td width='91' align='center' bgcolor='#CCCCCC'>$date_info</td>
<td width='253' align='center' bgcolor='#CCCCCC'>{$action['title']}</td>
</tr>
</table></td>
</tr>
</table>
";
}
/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM news $QUERY_INFO"),0) or die (mysql_error()); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center>Pages<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$prev{$URL_INFO}\" ><<Prev </a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
if ($total_pages > 1){
echo "$i "; 
}
} else { 
echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$i{$URL_INFO}\">$i</a> "; 
} 
} 
// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$next{$URL_INFO}\" >Next>></a>"; 
} 
echo "</center>";
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "notactive";
///--------------------------------------------------------------------------
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = $_GET['page']; 
} 
// Define the number of results per page 
$max_results = 30; 
// Figure out the limit for the query based 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_all = mysql_query("SELECT * FROM news WHERE active!='1' ORDER BY date DESC LIMIT $from, $max_results") or die (mysql_error()); 
/////////////////////////////////////////////////////////////////////////////////////////////
echo "
<br/>
<table width='650' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='100%' border='0' cellpadding='2'>
<tr>
<td width='58' align='center' bgcolor='#EEEEEE'>حذف</td>
<td width='69' align='center' bgcolor='#EEEEEE'>تعديل</td>
<td width='77' align='center' bgcolor='#EEEEEE'>الحالة</td>
<td width='100' align='center' bgcolor='#EEEEEE'>التاريخ</td>
<td width='314' align='center' bgcolor='#EEEEEE'>عنوان الخبر</td>
</tr>
</table></td>
</tr>
</table>
"; 
///////
while($action = mysql_fetch_array($view_all)){ 
extract($action);
/// stat
if($action['active'] == '1'){
$active_info = "<strong><font color='#0000FF'>
Active
</font></strong>";
}else{
$active_info = "<strong><font color='#FF0000'>
Inactive
</font></strong>";
}
////////////
$date_info =  date('Y-m-d', $action['date']);
///// Active OR Not
echo "
<table width='650' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='100%' border='0' cellpadding='2'>
<tr align='right'>
<td width='58' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=delcon&newsid=$newsid'>حذف</a></td>
<td width='69' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=edit&newsid=$newsid'>تعديل</a></td>
<td width='76' align='center' bgcolor='#CCCCCC'>$active_info</td>
<td width='100' align='center' bgcolor='#CCCCCC'>$date_info</td>
<td width='315' align='center' bgcolor='#CCCCCC'>{$action['title']}</td>
</tr>
</table></td>
</tr>
</table>
";
}
/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM news WHERE active!='1' "),0) or die (mysql_error()); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center>أختر صفحة<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=notactive&page=$prev\" ><<السابق</a> "; 
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
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=notactive&page=$next\" >التالي>></a>"; 
} 
echo "</center>";
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "search"; 
//----------------------------------------------------------------------------
?>
<form action="" method="get" name="search" id="search">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>البحث عن خبر </strong></td>
</tr>
<tr align="right">
<td width="396" bgcolor="#CCCCCC"><span class="box">
<input name="criteria" type="text" id="criteria" size="30" dir="rtl">
</span></td>
<td width="190" bgcolor="#CCCCCC"><strong>أسم الصورة </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="search_for" id="search_for">
<option value="0">عنوان الموضوع</option>
<option value="1">نص الموضوع</option>
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
$SEARCH_INFO = "text LIKE '%{$_GET['criteria']}%'";
} else {
$SEARCH_INFO = "title LIKE '%{$_GET['criteria']}%'";
}
////=====================================================
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = @$_GET['page']; 
} 
// Define the number of results per page 
$max_results = 30; 
// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_all = mysql_query("SELECT * FROM news WHERE $SEARCH_INFO ORDER BY date DESC LIMIT $from, $max_results") or die (mysql_error()); 
/////////////////////////////////////////////////////////////////////////////////////////////
$num=mysql_num_rows($view_all);
if($num==0){ 
print"
<div align='center' class='error'>لم يتم إيجاد ما تبحث عنه</div>
"; 
} else {  
/////////////////////////////////////////////////////////////////////////////////////////////
echo "
<br/>
<table width='650' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='100%' border='0' cellpadding='2'>
<tr>
<td width='58' align='center' bgcolor='#EEEEEE'>حذف</td>
<td width='69' align='center' bgcolor='#EEEEEE'>تعديل</td>
<td width='77' align='center' bgcolor='#EEEEEE'>الحالة</td>
<td width='100' align='center' bgcolor='#EEEEEE'>التاريخ</td>
<td width='314' align='center' bgcolor='#EEEEEE'>عنوان الخبر</td>
</tr>
</table></td>
</tr>
</table>
"; 
///////
while($action = mysql_fetch_array($view_all)){ 
extract($action);
///// Active OR Not
/// stat
if($active == '1'){
$act = "<strong><font color='#0000FF'>
Active
</font></strong>";
}else{
$act = "<strong><font color='#FF0000'>
Inactive
</font></strong>";
}
////////////
/// stat
if($action['active'] == '1'){
$active_info = "<strong><font color='#0000FF'>
Active
</font></strong>";
}else{
$active_info = "<strong><font color='#FF0000'>
Inactive
</font></strong>";
}
////////////
$date_info =  date('Y-m-d', $action['date']);
///// Active OR Not
echo "
<table width='650' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='100%' border='0' cellpadding='2'>
<tr align='right'>
<td width='58' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=delcon&newsid=$newsid'>حذف</a></td>
<td width='69' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=edit&newsid=$newsid'>تعديل</a></td>
<td width='76' align='center' bgcolor='#CCCCCC'>$active_info</td>
<td width='100' align='center' bgcolor='#CCCCCC'>$date_info</td>
<td width='315' align='center' bgcolor='#CCCCCC'>{$action['title']}</td>
</tr>
</table></td>
</tr>
</table>
";
}
/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM news WHERE $SEARCH_INFO "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center >الصفحات<br />"; 
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
case "add";
///--------------------------------------------------------------------------
if (isset($_SESSION['ntext'])) {$message_info = stripslashes($_SESSION['ntext']) ;} else {$message_info = '';}
/////////////////////////////////////////////
if(isset($_SESSION['nactive']) && $_SESSION['nactive'] !="novalue")
{
if ($_SESSION['nactive'] =="1")
{
// session foo is set
$getact = "
<option value='novalue'>Select Status</option>
<option value='1' selected>Active</option>
<option value='0'>Inactive</option>
";
}
elseif($_SESSION['nactive'] =="0")
{
// session foo is set
$getact = "
<option value='novalue'>Select Status</option>
<option value='1'>Active</option>
<option value='0' selected>Inactive</option>
";
} else { 
$getact = "
<option value='novalue'>Select Status</option>
<option value='1' selected>Active</option>
<option value='0'>Inactive</option>
";
}
///
} else { 
$getact = "
<option value='novalue'>Select Status</option>
<option value='1' selected>Active</option>
<option value='0'>Inactive</option>
";
}
/////////////////////////////////////////////
if(isset($_SESSION['ncatid']) && $_SESSION['ncatid'] !="novalue")
{
if ($_SESSION['ncatid'] =="1")
{
// session foo is set
$catid_info = "
<option value='novalue'>Select Status</option>
<option value='1' selected>Yes</option>
<option value='0'>No</option>
";
}
elseif($_SESSION['ncatid'] =="0")
{
// session foo is set
$catid_info = "
<option value='novalue'>Select Status</option>
<option value='1'>Yes</option>
<option value='0' selected>No</option>
";
} else { 
$catid_info = "
<option value='novalue'>Select Status</option>
<option value='1'>Yes</option>
<option value='0' selected>No</option>
";
}
///
} else { 
$catid_info = "
<option value='novalue'>Select Status</option>
<option value='1'>Yes</option>
<option value='0' selected>No</option>
";
}
/// ######################################################################
////// EXPIRE - date
//// day
if (isset($_SESSION['n_b_day']) && $_SESSION['n_b_day']!=0) {
$b_day_info = "<option value='{$_SESSION['n_b_day']}' selected>{$_SESSION['n_b_day']}</option>";
} else {
$b_day_info = "<option value='".date('d')."' selected>".date('d')."</option>";
}
////// month
if (isset($_SESSION['n_b_month']) && $_SESSION['n_b_month']!=0) {
$b_month_info ="<option value='{$_SESSION['n_b_month']}' selected>{$_SESSION['n_b_month']}</option>" ;
} else {
$b_month_info = "<option value='".date('m')."' selected>".date('m')."</option>";
}
////// year
if (isset($_SESSION['n_b_year']) && $_SESSION['n_b_year']!=0) {
$b_year_info = "<option value='{$_SESSION['n_b_year']}' selected>{$_SESSION['n_b_year']}</option>";
} else {
$b_year_info = "<option value='".date('Y')."' selected>".date('Y')."</option>";
}
/////////////////////////////////////////////
/////////////////////////////////////////////
if(isset($_SESSION['nsticky']) && $_SESSION['nsticky'] !="novalue")
{
if ($_SESSION['nsticky'] =="1")
{
// session foo is set
$sticky_info = "
<option value='novalue'>Select Status</option>
<option value='1' selected>Yes</option>
<option value='0'>No</option>
";
}
elseif($_SESSION['nsticky'] =="0")
{
// session foo is set
$sticky_info = "
<option value='novalue'>Select Status</option>
<option value='1'>Yes</option>
<option value='0' selected>No</option>
";
} else { 
$sticky_info = "
<option value='novalue'>Select Status</option>
<option value='1'>Yes</option>
<option value='0' selected>No</option>
";
}
///
} else { 
$sticky_info = "
<option value='novalue'>Select Status</option>
<option value='1'>Yes</option>
<option value='0' selected>No</option>
";
}
/////////////////////////////////////////////
?>
<form action="?action=getadd" method="post" enctype="multipart/form-data" name="news">
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Add News</strong></td>
</tr>
<tr align="right">
<td width="1367" bgcolor="#CCCCCC"><input name="title" type="text" class="smalltext" id="title"value="<?php if (isset($_SESSION['ntitle'])) { echo stripslashes($_SESSION['ntitle']);} ?>" size="43" maxlength="255"  dir="rtl" ></td>
<td width="171" bgcolor="#CCCCCC"><strong> <span class="error">*</span> Title</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="writer" type="text" class="smalltext" id="writer"value="<?php if (isset($_SESSION['nwriter'])) { echo stripslashes($_SESSION['nwriter']);} ?>" size="43" maxlength="255"  dir="rtl" ></td>
<td bgcolor="#CCCCCC"><strong>Writer - Source</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><a href="../icons.php" target="_blank">Click Here to view them</a> - This used for the small icon css
<input name="icon_view" type="text" class="smalltext" id="icon_view"value="<?php if (isset($_SESSION['nicon_view'])) { echo stripslashes($_SESSION['nicon_view']);} ?>" size="43" maxlength="255"  dir="rtl" ></td>
<td bgcolor="#CCCCCC"><strong>ICon</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><textarea name='short' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='short'  dir="rtl"><?php if (isset($_SESSION['nshort'])) { echo stripslashes($_SESSION['nshort']);} ?></textarea></td>
<td valign="top" bgcolor="#CCCCCC"><strong>Short Details</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name='thumb' type='file' class="smalltext" id='thumb' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' ></td>
<td bgcolor="#CCCCCC"><strong>Image</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php
///////
$oFCKeditor = new FCKeditor('message') ;
$oFCKeditor->BasePath = 'rte/';
$oFCKeditor->Value = "$message_info";
$oFCKeditor->Width  = '100%' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Create() ;
?></td>
<td valign="top" bgcolor="#CCCCCC"><strong><span class="error">*</span> Text</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="active" class="smalltext" id="active" dir="rtl">
<?php echo $getact ; ?>
</select></td>
<td bgcolor="#CCCCCC"><strong><span class="error">*</span></strong> <strong>Status</strong> </td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name='catid' id="catid" >
<option value='novalue'>Select</option>
<?php
//////
if(isset($_SESSION['ncatid']) && $_SESSION['ncatid'] !="novalue")
{
$image_var = mysql_query("SELECT * FROM news_cat WHERE catid='{$_SESSION['ncatid']}' ");  
while ($image_var3 = mysql_fetch_array($image_var)) {  
echo "<option value='{$image_var3['catid']}' selected>{$image_var3['catname']}</option>";
} // end while
} // end conditioning
echo show_dropdown_news('0','0');
?>
</select></td>
<td bgcolor="#CCCCCC"><strong><span class="error">* </span>Section</strong></td>
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
</select>              </td>
<td bgcolor="#CCCCCC"><strong>Date</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="sticky" class="smalltext" id="sticky" dir="rtl">
<?php echo $sticky_info ; ?>
</select></td>
<td bgcolor="#CCCCCC"><strong><span class="error">*</span></strong> <strong>Sticky</strong> </td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">
<input name="links" type="text" class="smalltext" id="links"value="<?php if (isset($_SESSION['nlinks'])) { echo stripslashes($_SESSION['nlinks']);} ?>" size="43" maxlength="255"  dir="rtl" >            </td>
<td bgcolor="#CCCCCC"><strong>Related Link</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="news_order" type="hidden" id="news_order" value="1"></td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="Add"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</form>
<?php
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "getadd"; 
///--------------------------------------------------------------------------
///////////////////
$_SESSION['ntitle'] = @$_POST['title'];
$_SESSION['nwriter'] = @$_POST['writer'];
$_SESSION['nicon_view'] = @$_POST['icon_view'];
$_SESSION['nshort'] = @$_POST['short'];
$_SESSION['ntext'] = @$_POST['message'];
$_SESSION['nactive'] = @$_POST['active'];
$_SESSION['ncatid'] = @$_POST['catid'];
$_SESSION['nnews_order'] = @$_POST['news_order'];
$_SESSION['nsticky'] = @$_POST['sticky'];
$_SESSION['links'] = @$_POST['links'];
$_SESSION['n_b_day'] = @$_POST['b_day'];
$_SESSION['n_b_month'] = @$_POST['b_month'];
$_SESSION['n_b_year'] = @$_POST['b_year'];
//////////////////
$title = addslashes(@$_POST['title']);
$writer = addslashes(@$_POST['writer']);
$icon_view = addslashes(@$_POST['icon_view']);
$short = addslashes(@$_POST['short']);
$message = addslashes(@$_POST['message']);
$active = addslashes(@$_POST['active']);
$catid = addslashes(@$_POST['catid']);
$news_order =$_POST["news_order"];
$sticky = addslashes(@$_POST['sticky']);
$links = @$_POST['links'];
$b_year = addslashes(@$_POST['b_year']);
$b_month = addslashes(@$_POST['b_month']);
$b_year = addslashes(@$_POST['b_year']);
/// image Dir ///////////////
// image
$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files
$upload_image = "../$db_upload_dir/news/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/news/thumbnails/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////////////
$date_print = date('jmY_');
///////////////////////////////////////////////////////////////////////////////////////////////////
if (!empty($_FILES['thumb']['name'])) {
//////////////
$get_picname1 = findname($_FILES['thumb']['name']);
$get_picexten1 = findtype($_FILES['thumb']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 1
$uploadfile1 = $upload_temp . basename($final_pic1);
}
////////////////////////////////////
/// end var
if ($title  =="") {
print "
<div align='center'><font color='#FF0000'><strong>
خانة عنوان الخبر مطلوبة
</strong></font></div>
";
/*} elseif ($short  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء كتابة نص قصير للخبر
</strong></font></div>
";*/
} elseif ($message==""){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء كتابة النص
</strong></font></div>
";
} elseif ($active=="" || $active=='novalue'){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء تحديد حالة الخبر
</strong></font></div>
";
} elseif ($catid=="" || $catid=='novalue'){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء تحديد القسم
</strong></font></div>
";
} elseif ($_POST['news_order'] =="" || !numbers_only($_POST['news_order'])) {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد ترتيب
</strong></div>
";
} elseif ($sticky=="" || $sticky=='novalue'){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء تحديد حالة التثبيت
</strong></font></div>
";
} elseif (empty($_FILES['thumb']['name'])) {
// variables
if (isset($_POST['b_month']) & $_POST['b_month']!=0 & isset($_POST['b_day']) & $_POST['b_day']!=0 & isset($_POST['b_year']) & $_POST['b_year']!=0) {
$date = mktime(0, 0, 0, "{$_POST['b_month']}",   "{$_POST['b_day']}",   "{$_POST['b_year']}");
} else {
$date = 0;
}
// add to admin table
$in = MySQL_Query("INSERT INTO news (title,writer,icon_view,short,text,active,m_active,catid,date,sticky,news_order,userid,links) VALUES ('$title','$writer','$icon_view', '$short', '$message', '$active','$active', '$catid', '$date', '$sticky', '$news_order', '$adminid', '$links')") 
Or Die(MySQL_Error()); 
unset($_SESSION['ntitle']);
unset($_SESSION['nwriter']);
unset($_SESSION['nicon_view']);
unset($_SESSION['nshort']);
unset($_SESSION['ntext']);
unset($_SESSION['nactve']);
unset($_SESSION['ncatid']);
unset($_SESSION['nnews_order']);
unset($_SESSION['nsticky']);
unset($_SESSION['links']);
unset($_SESSION['n_b_day']);
unset($_SESSION['n_b_month']);
unset($_SESSION['n_b_year']);
echo "
<p align='center'>تم إضافة الخبر بنجاح .. أنتظر قليلا حتى يتم إعادة توجيهك إلى لوحة المقالات</p> 
<meta http-equiv='refresh' content='3; url={$_SERVER['PHP_SELF']}'>
";
///-----
} elseif ($_FILES['thumb']['type'] !="image/pjpeg" && $_FILES['thumb']['type'] !="image/gif" && $_FILES['thumb']['type'] !="image/jpeg"){
print "
<div align='center' class='msg'><strong>
لقد قمت بأرفاق صورة  لا تحمل صيغة مسموح بها <br/>
الصيغ المسموح بها هي 
(.gif - .jpg)
فقط
</strong></div>
"; 
} elseif (@$_FILES['thumb']['size'] > $max_size) {
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
if (move_uploaded_file(@$_FILES['thumb']['tmp_name'], $uploadfile1)) {
///////////////////// Thumb 
if (find_size_file($uploadfile1,$db_news_thumb_width,$db_news_thumb_height)) {
copy($upload_temp.$final_pic1, $upload_thumb.$final_pic1);
} else {
create_thumbs("$upload_temp",$upload_thumb,$final_pic1,$db_news_thumb_width,$db_news_thumb_height);
}
chmod("$upload_thumb/{$final_pic1}", 0644);  // image directory; permission
///////////////////// Image
if (find_size_file($uploadfile1,$db_news_image_width,$db_news_image_height)) {
copy($upload_temp.$final_pic1, $upload_image.$final_pic1);
}else {
create_thumbs("$upload_temp",$upload_image,$final_pic1,$db_news_image_width,$db_news_image_height);
}
chmod("$upload_image/{$final_pic1}", 0644);  // image directory; permission
/////////////////////
unlink($uploadfile1);
// variables
if (isset($_POST['b_month']) & $_POST['b_month']!=0 & isset($_POST['b_day']) & $_POST['b_day']!=0 & isset($_POST['b_year']) & $_POST['b_year']!=0) {
$date = mktime(0, 0, 0, "{$_POST['b_month']}",   "{$_POST['b_day']}",   "{$_POST['b_year']}");
} else {
$date = 0;
}
// add to admin table
$in = MySQL_Query("INSERT INTO news (title,writer,icon_view,short,text,thumbnail,active,m_active,catid,date,sticky,news_order,userid,links) VALUES ('$title','$icon_view', '$writer', '$short', '$message', '$final_pic1', '$active','$active','$catid', '$date', '$sticky', '$news_order', '$adminid','$links')") 
Or Die(MySQL_Error()); 
unset($_SESSION['ntitle']);
unset($_SESSION['nwriter']);
unset($_SESSION['nicon_view']);
unset($_SESSION['nshort']);
unset($_SESSION['ntext']);
unset($_SESSION['nactve']);
unset($_SESSION['ncatid']);
unset($_SESSION['nnews_order']);
unset($_SESSION['nsticky']);
unset($_SESSION['links']);
unset($_SESSION['n_b_day']);
unset($_SESSION['n_b_month']);
unset($_SESSION['n_b_year']);
echo "
<p align='center'>تم إضافة الخبر بنجاح .. أنتظر قليلا حتى يتم إعادة توجيهك إلى لوحة المقالات</p> 
<meta http-equiv='refresh' content='3; url={$_SERVER['PHP_SELF']}'>
";
} else { 
print "
<div align='center' class='msg'><strong>
لم يتم أرفاق الصورة .. الرجاء مراجعة صلاحيات فولدر التحميل
</strong></div>
"; 
} // end else move file
} // end else
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "edit"; 
///--------------------------------------------------------------------------
$newsid=@$_GET['newsid'];
$view = mysql_query("SELECT * FROM news where newsid='$newsid'"); 
////////////////////////////////
while($gonews = mysql_fetch_array($view)){ 
extract ($gonews);
$title =  stripslashes($gonews['title']) ;
$short =  stripslashes($gonews['short']) ;
$text =  stripslashes($gonews['text']) ;
$image_dir = "../$db_upload_dir/news/thumbnails/";
if ($thumbnail!='') { $image_link = "<a href='$image_dir$thumbnail' target='_blank'>الصورة الحالية </a>"; } else {$image_link = "";}
/////////////////////////////////////////////
if($active =="1") {
$getact = "
<option value='novalue'>Select Status</option>
<option value='1' selected>Active</option>
<option value='0'>Inactive</option>
";
} elseif($active =="0") {
$getact = "
<option value='novalue'>Select Status</option>
<option value='1'>Active</option>
<option value='0' selected>Inactive</option>
";
} else { 
$getact = "
<option value='novalue'>Select Status</option>
<option value='1'>Active</option>
<option value='0'>Inactive</option>
";
}
////////////////////////////////////////////// 
if($catid =="1") {
$catid_info = "
<option value='novalue'>Select Status</option>
<option value='1' selected>Yes</option>
<option value='0'>No</option>
";
} elseif($catid =="0") {
$catid_info = "
<option value='novalue'>Select Status</option>
<option value='1'>Yes</option>
<option value='0' selected>No</option>
";
} else { 
$catid_info = "
<option value='novalue'>Select Status</option>
<option value='1'>Yes</option>
<option value='0'>No</option>
";
}
////////////////////////////////////////////// 
////// EXPIRE - date
if ($gonews['date']!=0) {
$expire_date_info = date('d-m-Y', $gonews['date']);
$expire_date_info = explode("-", $expire_date_info);
$b_day_info = $expire_date_info[0];
$b_month_info = $expire_date_info[1];
$b_year_info = $expire_date_info[2];
//// day
$b_day_info = "<option value='{$expire_date_info[0]}' selected>{$expire_date_info[0]}</option>";
$b_month_info ="<option value='{$expire_date_info[1]}' selected>{$expire_date_info[1]}</option>" ;
$b_year_info = "<option value='{$expire_date_info[2]}' selected>{$expire_date_info[2]}</option>";
} else {
$b_day_info = "<option value='0' selected>غير محدد</option>";
$b_month_info = "<option value='0' selected>غير محدد</option>";
$b_year_info = "<option value='0' selected>غير محدد</option>";
}
//////////////////////////////////////////////////////////////
////////////////////////////////////////////// 
if($sticky =="1") {
$sticky_info = "
<option value='novalue'>Select Status</option>
<option value='1' selected>Yes</option>
<option value='0'>No</option>
";
} elseif($sticky =="0") {
$sticky_info = "
<option value='novalue'>Select Status</option>
<option value='1'>Yes</option>
<option value='0' selected>No</option>
";
} else { 
$sticky_info = "
<option value='novalue'>Select Status</option>
<option value='1'>Yes</option>
<option value='0'>No</option>
";
}
//////////////////////////////////////////////
$view_comments = mysql_query("SELECT * FROM news_comments WHERE newsid='$newsid' ORDER BY date DESC ") or die (mysql_error()); 
$COMMENTS_NUM= mysql_num_rows($view_comments);
////////////////////////////////////////////// 
$view_other = mysql_query("SELECT * FROM news_details WHERE newsid='$newsid' order by newsid ASC")Or Die(MySQL_Error()); 
$other_lang_num = mysql_num_rows ($view_other);
if ($other_lang_num>0) {
$OTHGER_LANG = "<a href='?action=adddetails&newsid=$newsid'>Add</a> - <a href='?action=view_details&newsid=$newsid'>View ($other_lang_num)</a>";
} else {
$OTHGER_LANG = "<a href='?action=adddetails&newsid=$newsid'>Add</a> - N/A";
}
?>
<form action="?action=getedit" method="post" enctype="multipart/form-data" name=vbform>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Edit News</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php echo $OTHGER_LANG;?></td>
<td bgcolor="#CCCCCC"><strong>Details In Another Lang</strong></td>
</tr>
<tr align="right">
<td width="1394" bgcolor="#CCCCCC"><input name="title" type="text" class="smalltext" id="title"value="<?php  echo $title; ?>" size="43" maxlength="255"  dir="rtl" ></td>
<td width="171" bgcolor="#CCCCCC"><strong> <span class="error">*</span> Title</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><a href="../icons.php" target="_blank">Click Here to view them</a> - This used for the small icon css
<input name="icon_view" type="text" class="smalltext" id="icon_view"value="<?php  echo $icon_view; ?>" size="43" maxlength="255"  dir="rtl" ></td>
<td bgcolor="#CCCCCC"><strong>ICon</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="writer" type="text" class="smalltext" id="writer"value="<?php  echo $writer; ?>" size="43" maxlength="255"  dir="rtl" ></td>
<td bgcolor="#CCCCCC"><strong>Writer - Source</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><textarea name='short' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='short'  dir="rtl"><?php  echo $short; ?></textarea></td>
<td valign="top" bgcolor="#CCCCCC"><strong>Short Details</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php echo $image_link; ?>
<input name='thumb' type='file' class="smalltext" id='thumb' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' ></td>
<td bgcolor="#CCCCCC"><strong>Image</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php
///////
$oFCKeditor = new FCKeditor('message') ;
$oFCKeditor->BasePath = 'rte/';
$oFCKeditor->Value = "$text";
$oFCKeditor->Width  = '100%' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Create() ;
?></td>
<td valign="top" bgcolor="#CCCCCC"><strong><span class="error">*</span> Text</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name='active' id='active' dir="rtl">
<?php echo "$getact"; ?>
</select></td>
<td bgcolor="#CCCCCC"><strong><span class="error">*</span></strong> <strong>Status</strong> </td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name='catid' id="catid" dir="rtl">
<option value='novalue'>Select</option>
<?php
///////////////////////////////////
if($gonews['catid'] != '0'){
$edit_cat4 = mysql_query("select * from news_cat where catid='{$gonews['catid']}' ");
/// cer
while($edit = mysql_fetch_array($edit_cat4)){ 
extract($edit);
echo "<option value='$catid' selected>{$edit['catname']}</option>";
} // end while 
}
//////////////////////////////////////
echo show_dropdown_edit_news('0','0');
?>
</select></td>
<td bgcolor="#CCCCCC"><strong><span class="error">* </span>Section</strong></td>
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
</select>              </td>
<td bgcolor="#CCCCCC"><strong>Date</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name='sticky' id='sticky' dir="rtl">
<?php echo "$sticky_info"; ?>
</select></td>
<td bgcolor="#CCCCCC"><strong><span class="error">*</span></strong> <strong>Sticky</strong> </td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="links" type="text" class="smalltext" id="links"value="<?php  echo $links; ?>" size="43" maxlength="255"  dir="rtl" ></td>
<td bgcolor="#CCCCCC"><strong>Related Link</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="news_order" type="hidden" id="news_order" value="1">
<input name="oldfile" type="hidden" id="oldfile" value="<?php  echo $gonews['thumbnail']; ?>">
<input name="newsid" type="hidden" id="newsid" value="<?php  echo $gonews['newsid']; ?>"></td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="تعــديل"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</form>
<?php
}
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "getedit"; 
///--------------------------------------------------------------------------
$title = addslashes(@$_POST['title']);
$writer = addslashes(@$_POST['writer']);
$icon_view = addslashes(@$_POST['icon_view']);
$short = addslashes(@$_POST['short']);
$text = addslashes(@$_POST['message']);
$active=$_POST["active"];
$catid=$_POST["catid"];
$newsid=$_POST["newsid"];
$news_order =$_POST["news_order"];
$sticky=$_POST["sticky"];
$links =$_POST["links"];
$b_year = addslashes(@$_POST['b_year']);
$b_month = addslashes(@$_POST['b_month']);
$b_year = addslashes(@$_POST['b_year']);
/// image Dir ///////////////
// image
$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files
$upload_image = "../$db_upload_dir/news/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/news/thumbnails/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////////////
$date_print = date('jmY_');
///////////////////////////////////////////////////////////////////////////////////////////////////
if (!empty($_FILES['thumb']['name'])) {
//////////////
$get_picname1 = findname($_FILES['thumb']['name']);
$get_picexten1 = findtype($_FILES['thumb']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 1
$uploadfile1 = $upload_temp . basename($final_pic1);
}
////////////// Validate
if ($title  =="") {
print "
<div align='center'><font color='#FF0000'><strong>
خانة عنوان الخبر مطلوبة
</strong></font></div>
";
/*} elseif ($short  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء كتابة نص قصير للخبر
</strong></font></div>
";*/
} elseif ($text==""){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء كتابة النص
</strong></font></div>
";
} elseif ($active=="" || $active=='novalue'){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء تحديد حالة الخبر
</strong></font></div>
";
} elseif ($catid=="" || $catid=='novalue'){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء تحديد القسم
</strong></font></div>
";
} elseif ($_POST['news_order'] =="" || !numbers_only($_POST['news_order'])) {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد ترتيب
</strong></div>
";
} elseif ($sticky=="" || $sticky=='novalue'){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء تحديد حالة التثبيت
</strong></font></div>
";
} elseif (empty($_FILES['thumb']['name'])) {
// variables
if (isset($_POST['b_month']) & $_POST['b_month']!=0 & isset($_POST['b_day']) & $_POST['b_day']!=0 & isset($_POST['b_year']) & $_POST['b_year']!=0) {
$date = mktime(0, 0, 0, "{$_POST['b_month']}",   "{$_POST['b_day']}",   "{$_POST['b_year']}");
} else {
$date = 0;
}
$update_date = time();
$in = mysql_query (" UPDATE news SET title='$title' , writer='$writer' , icon_view='$icon_view' ,  short='$short' , text='$text' , update_date='$update_date', sticky='$sticky' , date='$date', catid='$catid', news_order='$news_order' , active='$active'  , m_active='$active'  ,  links='$links' WHERE newsid='$newsid' ") Or Die(MySQL_Error()); 


$updateCatid =  mysql_query (" UPDATE news_details SET catid='$catid' WHERE newsid='$newsid' ") or die(mysql_error());  


echo "
<p align='center'>تم  تعديل  الخبر بنجاح .. أنتظر قليلا حتى يتم إعادة توجيهك إلى لوحة المقالات</p> 
<meta http-equiv='refresh' content='3; url={$_SERVER['PHP_SELF']}'>
";
///-----
} elseif ($_FILES['thumb']['type'] !="image/pjpeg" && $_FILES['thumb']['type'] !="image/gif" && $_FILES['thumb']['type'] !="image/jpeg"){
print "
<div align='center' class='msg'><strong>
لقد قمت بأرفاق صورة  لا تحمل صيغة مسموح بها <br/>
الصيغ المسموح بها هي 
(.gif - .jpg)
فقط
</strong></div>
"; 
} elseif (@$_FILES['thumb']['size'] > $max_size) {
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
if (move_uploaded_file(@$_FILES['thumb']['tmp_name'], $uploadfile1)) {
///////////////////// Thumb 
if (find_size_file($uploadfile1,$db_news_thumb_width,$db_news_thumb_height)) {
copy($upload_temp.$final_pic1, $upload_thumb.$final_pic1);
} else {
create_thumbs("$upload_temp",$upload_thumb,$final_pic1,$db_news_thumb_width,$db_news_thumb_height);
}
chmod("$upload_thumb/{$final_pic1}", 0644);  // image directory; permission
///////////////////// Image
if (find_size_file($uploadfile1,$db_news_image_width,$db_news_image_height)) {
copy($upload_temp.$final_pic1, $upload_image.$final_pic1);
}else {
create_thumbs("$upload_temp",$upload_image,$final_pic1,$db_news_image_width,$db_news_image_height);
}
chmod("$upload_image/{$final_pic1}", 0644);  // image directory; permission
unlink($uploadfile1);
////////
// UNlink image
if (file_exists("$upload_image"."{$_POST['oldfile']}") && $_POST['oldfile']!='') {
unlink ("$upload_image"."{$_POST['oldfile']}");
}
// UNlink thumb
if (file_exists("$upload_thumb"."{$_POST['oldfile']}") && $_POST['oldfile']!='') {
unlink ("$upload_thumb"."{$_POST['oldfile']}");
}
// variables
if (isset($_POST['b_month']) & $_POST['b_month']!=0 & isset($_POST['b_day']) & $_POST['b_day']!=0 & isset($_POST['b_year']) & $_POST['b_year']!=0) {
$date = mktime(0, 0, 0, "{$_POST['b_month']}",   "{$_POST['b_day']}",   "{$_POST['b_year']}");
} else {
$date = 0;
}
$update_date = time();
$in = mysql_query (" UPDATE news SET title='$title' , writer='$writer' , icon_view='$icon_view' , short='$short' , text='$text' , thumbnail='$final_pic1' , date='$date' , update_date='$update_date' ,catid='$catid', news_order='$news_order' , sticky='$sticky' ,  active='$active'  , m_active='$active' , links='$links' WHERE newsid='$newsid' ") Or Die(MySQL_Error()); 
echo "
<p align='center'>تم  تعديل  الخبر بنجاح .. أنتظر قليلا حتى يتم إعادة توجيهك إلى لوحة المقالات</p> 
<meta http-equiv='refresh' content='3; url={$_SERVER['PHP_SELF']}'>
";
} else { 
print "
<div align='center' class='msg'><strong>
لم يتم أرفاق الصورة .. الرجاء مراجعة صلاحيات فولدر التحميل
</strong></div>
"; 
} // end else move file
} /// end else
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "delcon"; 
///--------------------------------------------------------------------------
//// result
$newsid=@$_GET['newsid'];
$in = mysql_query (" SELECT * FROM news WHERE newsid='$newsid' ") Or Die(MySQL_Error()); 
// while 
while($action = mysql_fetch_array($in)){ 
// data input
extract ($action); 
$date_info =  date('Y-m-d', $action['date']);
///////////
?>
<form action="?action=del" method="POST" name='delnews' id='delnews'>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>حذف مقال</strong></td>
</tr>
<tr align="right">
<td width="1392" bgcolor="#CCCCCC"><font face='Verdana'><font size='2' face='Arial, Helvetica, sans-serif'><?php echo $title; ?></font></font></td>
<td width="146" bgcolor="#CCCCCC"><strong>عنوان المقال</strong></td>
</tr>
<tr align="right">
<td valign="top" bgcolor="#CCCCCC"><font face='Verdana'><font size='2' face='Arial, Helvetica, sans-serif'><?php echo $short; ?></font></font></td>
<td valign="top" bgcolor="#CCCCCC"><strong>نبذة قصيرة</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><font face='Verdana'><font size='2' face='Arial, Helvetica, sans-serif'><?php echo $date_info; ?></font></font></td>
<td bgcolor="#CCCCCC"><strong>التاريخ</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC" dir="rtl"><input name='doit' type='radio' value='0' checked>
No
<input name='doit' type='radio' value='1'>
Yes </td>
<td bgcolor="#CCCCCC"><strong>متأكد من رغبتي بالحذف</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><font face='Verdana'><font size='2' face='Arial, Helvetica, sans-serif'>
<input name="oldfile" type="hidden" id="oldfile" value="<?php  echo $thumbnail; ?>">
<input name='newsid' type='hidden' id='newsid' value='<?php echo $newsid; ?>'>
</font></font></td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="تنفــيذ"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</FORM>
<?php
} // end while
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "del"; 
///--------------------------------------------------------------------------
if (!isset($_POST['doit']) || $_POST['doit'] =="" || $_POST['doit'] !="1"){
echo "
<strong>
إخترت  عدم حذف المقال .. الرجاء الإنتظار حتى يتم تحويلك للوحة المقالات 
</strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";
} else {
$_POST['newsid'] = intval($_POST['newsid']);
//// result
$DO_DELETE = mysql_query (" DELETE FROM news WHERE newsid='{$_POST['newsid']}' ") Or Die(MySQL_Error()); 
///////////////////////////////////
/// Dir ///////////////
$upload_image = "../$db_upload_dir/news/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/news/thumbnails/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////////////
// data input
// UNlink image
if (file_exists("$upload_image"."{$_POST['oldfile']}") && $_POST['oldfile']!='') {
unlink ("$upload_image"."{$_POST['oldfile']}");
}
// UNlink thumb
if (file_exists("$upload_thumb"."{$_POST['oldfile']}") && $_POST['oldfile']!='') {
unlink ("$upload_thumb"."{$_POST['oldfile']}");
}
///////////////////////////////////
echo " 
<strong>
تم حذف المقال بنجاح .. أنتظر قليلا حتى يتم إعادة توجيهك إلى لوحة المقالات  </font></strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";
// resulte close
}
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
case "adddetails"; 
///==========================================
$news_CatId = 0;
$viewCAt = mysql_query("SELECT * FROM news where newsid='$newsid'") Or Die(MySQL_Error());
while($news_Cat = mysql_fetch_array($viewCAt)){  
$news_CatId = $news_Cat['catid'];
}
///==========================================
if (isset($_SESSION['ntext'])) {$message_info = stripslashes($_SESSION['ntext']) ;} else {$message_info = '';}
?>
<form action="?action=adddetails2" method="POST" name="adddetails" id="adddetails" dir="ltr">
<table width="95%"  border="0" align="center">
<tr>
<td width="14%">Name <strong><font color="#FF0000">*</font></strong></td>
<td width="86%"><input name="name" type="text" id="name"></td>
</tr>
<tr>
<td>Writer<strong><font color="#FF0000"></font></strong></td>
<td><input name="writer" type="text" id="writer"></td>
</tr>
<tr>
<td valign="top">Short text</td>
<td><textarea name='short' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='short'  dir="rtl"></textarea></td>
</tr>
<tr>
<td valign="top">text  <strong><font color="#FF0000">*</font></strong></td>
<td><?php
///////
$oFCKeditor = new FCKeditor('text') ;
$oFCKeditor->BasePath = 'rte/';
$oFCKeditor->Value = "$message_info";
$oFCKeditor->Width  = '100%' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Create() ;
?>    </td>
</tr>
<tr>
<td>Language <strong><font color="#FF0000">*</font></strong></td>
<td><select name="lang" id="lang">
<?php
///// reg
$edit_lang = mysql_query("select * from lang WHERE lang_id!='{$db_default_lang}' ORDER BY name ASC");
/// cer
while($v_lang = mysql_fetch_array($edit_lang)){ 
extract($v_lang);
echo "<option value='{$v_lang['lang_id']}'>{$v_lang['name']}</option>";
}
?>
</select></td>
</tr>
<tr>
<td>
<input name='newsid' id='newsid' value='<?php echo "{$_GET['newsid']}"; ?>' type='hidden'>
<input name='catid' id='catid' value='<?php echo "{$news_CatId}"; ?>' type='hidden'></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" style="background-color: #000080; color: #FFFFFF; border: 1 solid #000000" value="add"></td>
</tr>
</table>
</form>
<?php
//////////
break; 
//////////////////////////////////////////////////////////////////////////////////
case "adddetails2"; 
////////////////////// uplodd news
//Check the (magic_quotes_gpc) if it is (off) ... if (Off), do (Add slashes) ... this is helpful for protection
if(!get_magic_quotes_gpc()) 
{ 
// Get what is in the  ($_POST)  and (Add slashes) to it
foreach($_POST as $k=>$v) 
{ 
$_POST[$k] = addslashes($v); 
} // end for
} // end if
//////////////////////////////////////
////////var
$name = addslashes($_POST['name']);
$writer = addslashes($_POST['writer']);
$short = addslashes($_POST['short']);
$text = addslashes($_POST['text']);
$lang = addslashes($_POST['lang']);
$newsid = $_POST['newsid'];
$catid = $_POST['catid'];

//
if ($name == "") {
echo "
<div align='center'><strong><font color='#FF0000'>The name required .. go back </font></strong></div>
"; 
}elseif ($text == "") {
echo "
<div align='center'><strong><font color='#FF0000'>The page text required .. go back </font></strong></div>
"; 
}elseif ($newsid == "") {
echo "
<div align='center'><strong><font color='#FF0000'>Error the Page ID not passed .. go to the pages control panel than try again</font></strong></div>
"; 
} else {
// ck ID if exist
$query = mysql_query("SELECT * FROM news_details WHERE newsid='$newsid' AND lang='$lang'") Or Die(MySQL_Error()); 
// if select detact more than 0 result exit
if(mysql_num_rows($query) !=0) { 
// print error already exist 
echo '
<div align="center"><font color="#FF0000"><strong>The page '.$name.' in the language you selected already exist in our database </strong></font></div>
'; 
exit;
} 
//free the memory from the select result
mysql_free_result($query); 
// INSERT into table
$in = mysql_query ("INSERT INTO `news_details` (`name`,`writer`,`short`, `text`, `lang`, `newsid`, `catid`) VALUES ('{$_POST['name']}' , '{$writer}' , '{$short}' ,  '{$text}' , '{$_POST['lang']}' , '{$_POST['newsid']}' , '{$_POST['catid']}')") or die(mysql_error()); 
if(!$in) {
echo "<p align='center'><font color='#FF0000'><strong> Error, Not done </strong></font></p>"; 
}else {
echo "<p align='center'><strong><font size='4'>The details has been attached to the page successfully </font></strong></p> ";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='?action=edit&newsid=$newsid'>";
}  // end if add
} // end last else
//////////
break; 
////////////////////////////////
case "update_details"; 
/////////////
$News_ID=@$_GET['News_ID'];
$edit_proj = mysql_query("select * from news_details where News_ID='$News_ID' ")Or Die(MySQL_Error());
/// cer
while($edit = mysql_fetch_array($edit_proj)){ 
extract ($edit);
$name =  stripslashes($name) ;
$writer =  stripslashes($writer) ;
$short =  stripslashes($short) ;
$text =  stripslashes($text) ;
///////////////
?>
<form action="?action=update_details2" method="POST" ENCTYPE="multipart/form-data" name="update_details" id="update_details" dir="ltr">
<table width="95%"  border="0" align="center">
<tr>
<td width="14%">Name <strong><font color="#FF0000">*</font></strong></td>
<td width="86%"><input name="name" type="text" id="name" value="<?php echo "$name"; ?>"></td>
</tr>
<tr>
<td>Writer<strong><font color="#FF0000"></font></strong></td>
<td><input name="writer" type="text" id="writer" value="<?php echo "$writer"; ?>"></td>
</tr>
<tr>
<td valign="top">Short text</td>
<td><textarea name='short' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='short'  dir="rtl"><?php echo "$short"; ?></textarea></td>
</tr>
<tr>
<td valign="top">text <strong><font color="#FF0000">*</font></strong></td>
<td><?php
///////
$oFCKeditor = new FCKeditor('text') ;
$oFCKeditor->BasePath = 'rte/';
$oFCKeditor->Value = "$text";
$oFCKeditor->Width  = '100%' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Create() ;
?>&nbsp;</td>
</tr>
<tr>
<td>Language</td>
<td>
<?php
///// reg
$edit_lang = mysql_query("select * from lang WHERE lang_id='{$edit['lang']}' ORDER BY name ASC");
/// cer
while($v_lang = mysql_fetch_array($edit_lang)){ 
extract($v_lang);
echo $v_lang['name'];
}
?></td>
</tr>
<tr>
<td><input name='News_ID' id='News_ID' value='<?php echo "{$edit['News_ID']}"; ?>' type='hidden'>
<input name='newsid' id='newsid' value='<?php echo "{$edit['newsid']}"; ?>' type='hidden'>
<input name='lang' id='lang' value='<?php echo "{$edit['lang']}"; ?>' type='hidden'></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" style="background-color: #000080; color: #FFFFFF; border: 1 solid #000000" value="update"></td>
</tr>
</table>
</form>
<?php
}
//////////
break; 
////////////////////////////////
case "update_details2"; 
////////////////////////////////////////////////////////////////
//Check the (magic_quotes_gpc) if it is (off) ... if (Off), do (Add slashes) ... this is helpful for protection
if(!get_magic_quotes_gpc()) 
{ 
// Get what is in the  ($_POST)  and (Add slashes) to it
foreach($_POST as $k=>$v) 
{ 
$_POST[$k] = addslashes($v); 
} // end for
} // end if
//////////////////////////////////////
////////var
$News_ID = addslashes($_POST['News_ID']);
$name = addslashes($_POST['name']);
$writer = addslashes($_POST['writer']);
$short = addslashes($_POST['short']);
$text = addslashes($_POST['text']);;
$lang = $_POST['lang'];
$newsid = $_POST['newsid'];
//
if ($name == "") {
echo "
<div align='center'><strong><font color='#FF0000'>The name required .. go back </font></strong></div>
"; 
}elseif ($text == "") {
echo "
<div align='center'><strong><font color='#FF0000'>The page text required .. go back </font></strong></div>
"; 
}elseif ($newsid == "") {
echo "
<div align='center'><strong><font color='#FF0000'>Error the Page ID not passed .. go to the pages control panel than try again</font></strong></div>
"; 
}elseif ($News_ID == "") {
echo "
<div align='center'><strong><font color='#FF0000'>Error the Page Details ID not passed .. go to the pages control panel than try again</font></strong></div>
"; 
} else {
////////////
// update table
$in =  mysql_query (" UPDATE news_details SET name='$name' ,  writer='$writer' ,  short='$short' ,  text='$text' , lang='$lang' ,  newsid='$newsid' WHERE News_ID='$News_ID' ") or die(mysql_error());  
if(!$in) 
{echo "<p align='center'><font color='#FF0000'><strong> Error, Not done </strong></font></p>"; }
else { 
echo "<p align='center'><strong><font size='4'> The page details has been updated successfully </font></strong></p> ";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='?action=edit&newsid=$newsid'>";
} // end data echo
} // end last else if
//////////
break; 
////////////////////////////////
case "del_details"; 
//////////
$News_ID=@$_GET['News_ID'];
$edit_proj = mysql_query("select * from news_details where News_ID='$News_ID' ")Or Die(MySQL_Error());
/// cer
while($edit = mysql_fetch_array($edit_proj)){ 
extract($edit);
?>
<form action="?action=getdel_details" method="POST" name="delfile" id="delfile" dir="ltr">
<table width="600"  border="0" align="center">
<tr>
<td>Name</td>
<td><?php echo "$name"; ?></td>
</tr>
<tr>
<td>Language</td>
<td><?php
///// reg
$edit_lang = mysql_query("select * from lang WHERE lang_id='{$edit['lang']}' ORDER BY name ASC");
/// cer
while($v_lang = mysql_fetch_array($edit_lang)){ 
extract($v_lang);
echo $v_lang['name'];
}
?>      </td>
</tr>
<tr>
<td width="26%"><strong><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'>
<input name="News_ID" type="hidden" id="News_ID" value=" <?php echo "$News_ID"; ?> ">
<input name="newsid" type="hidden" id="newsid" value=" <?php echo "$newsid"; ?> ">
</font></strong></td>
<td width="74%"><strong><font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'>Are you sure you want to delete this?
</font></strong></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><span class='maintext'><span class='text'>
<input name='doit' type='radio' value='no' checked>
<font face='Arial, Helvetica, sans-serif'>No</font></span> <font face='Arial, Helvetica, sans-serif'>
<input name='doit' type='radio' value='yes'>
Yes
</font></span></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" style="background-color: #000080; color: #FFFFFF; border: 1 solid #000000" value="Ok"></td>
</tr>
</table>
</form>
<?php
}
//////////
break; 
/////////////////////////////////////////////////////////////////////////////////////////////
case "getdel_details"; 
////////////
$doit=@$_POST["doit"];
$News_ID=@$_POST["News_ID"];
$newsid=@$_POST["newsid"];
if ($doit =="no")
{
echo "
<div align='center'><strong><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><br>
<br>
You choose not to delete the details, wait until you redirected ... </font></strong></div>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='?action=edit&newsid=$newsid'>";
}
else {
//////////////////////////////////////
//// result
///////////
$in = mysql_query (" DELETE FROM news_details WHERE News_ID='$News_ID' ") 
Or Die(MySQL_Error()); 
// data input
echo " 
<div align='center'><strong><font color='#ff0000' size='3' face='Arial, Helvetica, sans-serif'><br>
<br>
The details has been deleted successfully
</font></strong></div>
";
// resulte close
}
//////////
break; 
/////////////////////
////////////////////////////////////////////////////////////////////////////
case"view_details";
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = $_GET['page']; 
} 
// Define the number of results per page 
$max_results = 10; 
// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_all = mysql_query("SELECT * FROM news_details WHERE newsid='{$_GET['newsid']}' order by name ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 
$numv=mysql_num_rows($view_all);
$view_pages = mysql_query("SELECT * FROM news WHERE newsid='{$_GET['newsid']}' order by title ASC LIMIT 1")Or Die(MySQL_Error());
while($row_pages = mysql_fetch_array($view_pages)){ 
$PAGE_NAME_MAIN = stripslashes($row_pages['title']);
}
/////////
echo "
<div  align='center'> PAGE NAME: <a href='?action=edit&newsid={$_GET['newsid']}' >$PAGE_NAME_MAIN</a> - <a href='?action=adddetails&newsid={$_GET['newsid']}' >Add A new details</a> <div/>
<br/><br/>
<table width='64%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0066CC' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse' > 
<tr align='center'>
<td width='87%' align='left'>Page name</td>
<td width='7%'>Edit</td>
<td width='6%' height='25' valign='middle'>Delete</td>
</tr> 
</table>
"; 
if ($numv > 0){
///////
while($action = mysql_fetch_array($view_all)){ 
extract($action);
$newsid = $action['newsid'];
$name = stripslashes($action['name']);
// go on
echo "
<table width='64%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0066CC' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse' > 
<tr align='center'>
<td width='87%' align='left'><FONT color=#52557c><SPAN lang=en-us><a href='../news_cat.php?newsid=$newsid' target='_blank'>$name</a></SPAN></FONT></td>
<td width='7%'><a href='?action=update_details&News_ID=$News_ID'>Edit</a></td>
<td width='6%' height='25' valign='middle'><a href='?action=del_details&News_ID=$News_ID'>Delete</a></td>
</tr> 
</table>
";
}
/////////////////////////
mysql_free_result($view_all);
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM news_details WHERE newsid='{$_GET['newsid']}' "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1) {
echo "<center>Select a Page<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=view_details&newsid={$_GET['newsid']}&page=$prev\"><<Previous</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){
if ($total_pages > 1) { 
echo "$i "; 
}
} else { 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=view_details&newsid={$_GET['newsid']}&page=$i\">$i</a> "; 
} 
} 
// Build Next Link
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=view_details&newsid={$_GET['newsid']}&page=$next\">Next>></a>"; 
} 
echo "</center>";
} /// no pages there
else {
echo "No pages available currently";
}
////////------------------------------------------------------------------------------
//////////////////////////////////////////////////////////////////////////////
}  /// end switch
//////////////////////////////////////////////////////////////////////////////
?>
</div>
</body>
</html>
<?php
}
?>