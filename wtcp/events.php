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
<title>events</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css">

<SCRIPT language=javascript src="scripts/CalendarPopup_New.js"></SCRIPT>
<link href="scripts/CalendarStyles.css" rel="stylesheet" type="text/css">

</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<SCRIPT language=JavaScript>
var cal1x = new CalendarPopup("GetDate");
cal1x.showYearNavigation();
cal1x.showYearNavigationInput();

var cal1x2 = new CalendarPopup("GetDate2");
cal1x2.showYearNavigation();
cal1x2.showYearNavigationInput();
</SCRIPT>


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
$view_all = mysql_query("SELECT * FROM events $QUERY_INFO ORDER BY start_date DESC LIMIT $from, $max_results") or die (mysql_error()); 
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
$date_info = $action['start_date'];
///// Active OR Not
echo "
<table width='750' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='100%' border='0' cellpadding='2'>
<tr align='right'>
<td width='67' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=delcon&eventsid=$eventsid'>Delete</a></td>
<td width='80' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=edit&eventsid=$eventsid'>Edit</a></td>
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
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM events $QUERY_INFO"),0) or die (mysql_error()); 
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
$view_all = mysql_query("SELECT * FROM events WHERE active!='1' ORDER BY date DESC LIMIT $from, $max_results") or die (mysql_error()); 
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
<td width='58' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=delcon&eventsid=$eventsid'>حذف</a></td>
<td width='69' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=edit&eventsid=$eventsid'>تعديل</a></td>
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
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM events WHERE active!='1' "),0) or die (mysql_error()); 
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
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Search for an events</strong></td>
</tr>
<tr align="right">
<td width="396" bgcolor="#CCCCCC"><span class="box">
<input name="criteria" type="text" id="criteria" size="30" >
</span></td>
<td width="190" bgcolor="#CCCCCC"><strong>events Title</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="search_for" id="search_for">
<option value="0">عنوان الموضوع</option>
<option value="1">نص الموضوع</option>
</select>
</td>
<td bgcolor="#CCCCCC"><strong>Search By</strong></td>
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
$view_all = mysql_query("SELECT * FROM events WHERE $SEARCH_INFO ORDER BY date DESC LIMIT $from, $max_results") or die (mysql_error()); 
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
<td width='58' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=delcon&eventsid=$eventsid'>حذف</a></td>
<td width='69' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=edit&eventsid=$eventsid'>تعديل</a></td>
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
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM events WHERE $SEARCH_INFO "),0); 
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

/////////////////////////////////////////////
if(isset($_SESSION['events_active']) && $_SESSION['events_active'] !="novalue"){
if ($_SESSION['events_active'] =="1"){
// session foo is set
$getact = "
<option value='novalue'>Select Status</option>
<option value='1' selected>Active</option>
<option value='0'>Inactive</option>
";
}elseif($_SESSION['events_active'] =="0"){
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
/// ######################################################################
$default_rules = "
- Free Pass to all sessions/workshops 
- Free Pass to all exhibition 
- Participants folder with Conference materials 
- Tea/ Coffee Breaks & Lunch 
- A certificate";
//-----------------------------------------------------
if (isset($_SESSION['events_text'])) {$message_info = stripslashes($_SESSION['events_text']) ;} else {$message_info = '';}
///////////////////////////////////////////////////////////////////////////
?>
<form action="?action=getadd" method="post" enctype="multipart/form-data" name="events" id="events">
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Add events</strong></td>
</tr>
<tr align="right">
<td width="1367" bgcolor="#CCCCCC"><input name="title" type="text" class="smalltext" id="title"value="<?php if (isset($_SESSION['events_title'])) { echo stripslashes($_SESSION['events_title']);} ?>" size="43" maxlength="255"   ></td>
<td width="171" bgcolor="#CCCCCC"><strong> <span class="error">*</span> Title</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><INPUT   name="AncDate2" type="image" id="AncDate2" onClick="cal1x.select(document.events.start_date,'AncDate2','yyyy-MM-dd'); return false;" src="images/CALENDAR.gif" alt="Calendar">
&nbsp; <IMG src="images/eraser.gif" alt="ازالة" border=0 style="CURSOR: hand" onClick="document.events.start_date.value='';"> 
<input name="start_date" type="text" class="smalltext" id="start_date"value="<?php if (isset($_SESSION['events_start_date'])) { echo stripslashes($_SESSION['events_start_date']);} ?>" size="43" maxlength="255" readonly ></td>
<td bgcolor="#CCCCCC"><strong><span class="error">*</span> Start Date</strong></td>
</tr>
<tr align="right">
  <td bgcolor="#CCCCCC"><INPUT   name="AncDate" type="image" id="AncDate" onClick="cal1x.select(document.events.end_date,'AncDate','yyyy-MM-dd'); return false;" src="images/CALENDAR.gif" alt="Calendar">
  &nbsp; <IMG src="images/eraser.gif" alt="ازالة" border=0 style="CURSOR: hand" onClick="document.events.end_date.value='';">
  <input name="end_date" type="text" class="smalltext" id="end_date"value="<?php if (isset($_SESSION['events_end_date'])) { echo stripslashes($_SESSION['events_end_date']);} ?>" size="43" maxlength="255" readonly ></td><td bgcolor="#CCCCCC"><strong><span class="error">*</span> End Date</strong></td>
</tr>
<tr align="right">
  <td bgcolor="#CCCCCC"><input name="max_attend" type="text" class="smalltext" id="max_attend"value="<?php if (isset($_SESSION['events_max_attend'])) { echo stripslashes($_SESSION['events_max_attend']);} ?>" size="43" maxlength="255"   ></td>
  <td bgcolor="#CCCCCC"><strong><span class="error">*</span> Max Attendance</strong></td>
</tr>
<tr align="right">
  <td bgcolor="#CCCCCC">BHD.
    <input name="price" type="text" class="smalltext" id="price"value="<?php if (isset($_SESSION['events_price'])) { echo stripslashes($_SESSION['events_price']);} ?>" size="43" maxlength="255"   ></td>
  <td bgcolor="#CCCCCC"><strong><span class="error">*</span> Prices Per Delegate</strong></td>
</tr>
<tr align="right">
  <td bgcolor="#CCCCCC"><input name="location_name" type="text" class="smalltext" id="location_name"value="<?php if (isset($_SESSION['events_location_name'])) { echo stripslashes($_SESSION['events_location_name']);} ?>" size="43" maxlength="255"   ></td>
  <td bgcolor="#CCCCCC"><strong><span class="error">*</span> Location Name</strong></td>
</tr>
<tr align="right">
  <td bgcolor="#CCCCCC"> longitude,latitude (26.235883,50.538839)
    <input name="location_map" type="text" class="smalltext" id="location_map"value="<?php if (isset($_SESSION['events_location_map'])) { echo stripslashes($_SESSION['events_location_map']);} ?>" size="43" maxlength="255"   ></td>
  <td bgcolor="#CCCCCC"><strong>Location Coordinate</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><textarea name='short' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='short'  ><?php if (isset($_SESSION['events_short'])) { echo stripslashes($_SESSION['events_short']);} ?></textarea></td>
<td valign="top" bgcolor="#CCCCCC"><strong>Short Details</strong></td>
</tr>
<tr align="right">
  <td bgcolor="#CCCCCC"><textarea name='rules' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='rules'  ><?php if (isset($_SESSION['events_rules'])) { echo stripslashes($_SESSION['events_rules']);} else {echo $default_rules;} ?></textarea></td>
  <td valign="top" bgcolor="#CCCCCC"><strong>Fees inclusive of</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name='brochure' type='file' class="smalltext" id='brochure' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' ></td>
<td bgcolor="#CCCCCC"><strong>Brochure</strong></td>
</tr>
<tr align="right">
  <td bgcolor="#CCCCCC"><input name='tamkeen_doc' type='file' class="smalltext" id='tamkeen_doc' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' ></td>
  <td bgcolor="#CCCCCC"><strong>Tamkeen Docs</strong></td>
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
<td valign="top" bgcolor="#CCCCCC"><strong>Text</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="active" class="smalltext" id="active" >
<?php echo $getact ; ?>
</select></td>
<td bgcolor="#CCCCCC"><strong><span class="error">*</span></strong> <strong>Status</strong> </td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="events_order" type="hidden" id="events_order" value="1"></td>
<td bgcolor="#CCCCCC"><input name="submit" type="submit" class="smalltext" value="Add"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>

<DIV id="GetDate" style="VISIBILITY: hidden; POSITION: absolute; BACKGROUND-COLOR: white; layer-background-color: white"></DIV>
<DIV id="GetDate2" style="VISIBILITY: hidden; POSITION: absolute; BACKGROUND-COLOR: white; layer-background-color: white"></DIV>
</form>
<?php
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "getadd"; 
///--------------------------------------------------------------------------
///////////////////
/////// SET SESSIONS IF POSTED
if (isset($_POST['submit'])) {
foreach($_POST as $key=>$value){
if ($key!="submit"){
$_SESSION["events_"."$key"] = addslashes($value);
$_POST["$key"] = addslashes($value);
$$key = addslashes($value);
} // end if key is not submit
} // end foreach
} // end if posted
/////// END SET SESSIONS IF POSTED

/// image Dir ///////////////
// image
$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files
$upload_image = "../$db_upload_dir/events/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/events/thumbnails/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////////////
$date_print = date('jmY_');
///////////////////////////////////////////////////////////////////////////////////////////////////
if (!empty($_FILES['brochure']['name'])) {
//////////////
$get_picname1 = findname($_FILES['brochure']['name']);
$get_picexten1 = findtype($_FILES['brochure']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 1
$uploadfile1 = $upload_image . basename($final_pic1);
}
//======
if (!empty($_FILES['tamkeen_doc']['name'])) {
//////////////
$get_picname2 = findname($_FILES['tamkeen_doc']['name']);
$get_picexten2 = findtype($_FILES['tamkeen_doc']['name']);
// func
$pic_output2 = rand(999999, 100000);
////
$final_pic2= "$date_print$pic_output2.$get_picexten2";
// image 1
$uploadfile2 = $upload_image . basename($final_pic2);
}

////////////////////////////////////
/// end var
if ($title  =="") {
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event title
</strong></font></div>
";

} elseif ($start_date  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event start date
</strong></font></div>
";


} elseif ($end_date  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event end date
</strong></font></div>
";

} elseif ($max_attend  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event maximum limit (attendance)
</strong></font></div>
";

} elseif ($price  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event cost per Delegate 
</strong></font></div>
";


} elseif ($location_name  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event location name
</strong></font></div>
";


/*} elseif ($short  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event short description
</strong></font></div>
";
*/
/*} elseif ($message==""){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء كتابة النص
</strong></font></div>
";*/

} elseif ($active=="" || $active=='novalue'){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء تحديد حالة الخبر
</strong></font></div>
";

} elseif (!empty($_FILES['brochure']['name']) && $get_picexten1!="pdf" && $get_picexten1!="doc" && $get_picexten1!="docx" ){
echo "<div align='center'><font color='#FF0000' face='Arial, Helvetica, sans-serif'><strong>
The brochure you upload is not compatible file (Only pdf, doc & docx files are allowed)
</strong></font></div>";

} elseif (!empty($_FILES['tamkeen_doc']['name']) && $get_picexten2!="pdf" && $get_picexten2!="doc" && $get_picexten2!="docx" ){
echo "<div align='center'><font color='#FF0000' face='Arial, Helvetica, sans-serif'><strong>
The tamkeen papers you upload is not compatible file (Only pdf, doc & docx files are allowed)
</strong></font></div>";


} else {
// variables

/// UPLOAD brochure 
if (!empty($_FILES['brochure']['name'])) {
move_uploaded_file($_FILES['brochure']['tmp_name'], $uploadfile1);
$brochure_UPLOADED = $final_pic1;
} else {
$brochure_UPLOADED = "";
}
/// END UPLOAD brochure 

/// UPLOAD tamkeen_doc 
if (!empty($_FILES['tamkeen_doc']['name'])) {
move_uploaded_file($_FILES['tamkeen_doc']['tmp_name'], $uploadfile2);
$tamkeen_doc_UPLOADED = $final_pic2;
} else {
$tamkeen_doc_UPLOADED = "";
}
/// END UPLOAD tamkeen_doc 
 
// add to admin table
$in = MySQL_Query("INSERT INTO events (title,start_date,end_date,short,text,active,location_name,location_map,max_attend,price,events_order,rules,tamkeen_doc,brochure) VALUES ('$title','$start_date','$end_date', '$short', '$message', '$active','$location_name', '$location_map', '$max_attend', '$price', '$events_order', '$rules', '$tamkeen_doc_UPLOADED', '$brochure_UPLOADED')") 
Or Die(MySQL_Error()); 

/////// UNSET SESSIONS IF POSTED
if (isset($_POST['submit'])) {
foreach($_POST as $key=>$value){
if ($key!="submit"){
$_SESSION["events_"."$key"] = addslashes($value);
unset($_SESSION["events_"."$key"]);
} // end if key is not submit
} // end foreach
} // end if posted
/////// END UNSET SESSIONS IF POSTED

echo "
<p align='center'>The events has been added successfully</p> 
<meta http-equiv='refresh' content='3; url={$_SERVER['PHP_SELF']}'>
";
///-----
} // end else
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "edit"; 
///--------------------------------------------------------------------------
$eventsid=@$_GET['eventsid'];
$view = mysql_query("SELECT * FROM events where eventsid='$eventsid'"); 
////////////////////////////////
while($goevents = mysql_fetch_array($view)){ 
extract ($goevents);
$title =  stripslashes($goevents['title']) ;
$short =  stripslashes($goevents['short']) ;
$text =  stripslashes($goevents['text']) ;
$image_dir = "../$db_upload_dir/events/";
if ($brochure!='') { $image_link = "<a href='$image_dir$brochure' target='_blank'>Current File </a>"; } else {$image_link = "";}
if ($tamkeen_doc!='') { $image_link2 = "<a href='$image_dir$tamkeen_doc' target='_blank'>Current File </a>"; } else {$image_link2 = "";}

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

?>
<form action="?action=getedit" method="post" enctype="multipart/form-data" name=events id="events">
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
      <tr>
        <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Edit an  event</strong></td>
      </tr>
      <tr align="right">
        <td width="1367" bgcolor="#CCCCCC"><input name="title" type="text" class="smalltext" id="title"value="<?php echo stripslashes($goevents['title']); ?>" size="43" maxlength="255"   ></td>
        <td width="171" bgcolor="#CCCCCC"><strong> <span class="error">*</span> Title</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><INPUT   name="AncDate2" type="image" id="AncDate2" onClick="cal1x.select(document.events.start_date,'AncDate2','yyyy-MM-dd'); return false;" src="images/CALENDAR.gif" alt="Calendar">
          &nbsp; <IMG src="images/eraser.gif" alt="ازالة" border=0 style="CURSOR: hand" onClick="document.events.start_date.value='';">
          <input name="start_date" type="text" class="smalltext" id="start_date"value="<?php if (isset($goevents['start_date'])) { echo stripslashes($goevents['start_date']);} ?>" size="43" maxlength="255" readonly ></td>
        <td bgcolor="#CCCCCC"><strong><span class="error">*</span> Start Date</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><INPUT   name="AncDate" type="image" id="AncDate" onClick="cal1x.select(document.events.end_date,'AncDate','yyyy-MM-dd'); return false;" src="images/CALENDAR.gif" alt="Calendar">
          &nbsp; <IMG src="images/eraser.gif" alt="ازالة" border=0 style="CURSOR: hand" onClick="document.events.end_date.value='';">
          <input name="end_date" type="text" class="smalltext" id="end_date"value="<?php if (isset($goevents['end_date'])) { echo stripslashes($goevents['end_date']);} ?>" size="43" maxlength="255" readonly ></td>
        <td bgcolor="#CCCCCC"><strong><span class="error">*</span> End Date</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><input name="max_attend" type="text" class="smalltext" id="max_attend"value="<?php if (isset($goevents['max_attend'])) { echo stripslashes($goevents['max_attend']);} ?>" size="43" maxlength="255"   ></td>
        <td bgcolor="#CCCCCC"><strong><span class="error">*</span> Max Attendance</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC">BHD.
          <input name="price" type="text" class="smalltext" id="price"value="<?php if (isset($goevents['price'])) { echo stripslashes($goevents['price']);} ?>" size="43" maxlength="255"   ></td>
        <td bgcolor="#CCCCCC"><strong><span class="error">*</span> Prices Per Delegate</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><input name="location_name" type="text" class="smalltext" id="location_name"value="<?php if (isset($goevents['location_name'])) { echo stripslashes($goevents['location_name']);} ?>" size="43" maxlength="255"   ></td>
        <td bgcolor="#CCCCCC"><strong><span class="error">*</span> Location Name</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"> longitude,latitude (26.235883,50.538839)
          <input name="location_map" type="text" class="smalltext" id="location_map"value="<?php if (isset($goevents['location_map'])) { echo stripslashes($goevents['location_map']);} ?>" size="43" maxlength="255"   ></td>
        <td bgcolor="#CCCCCC"><strong>Location Coordinate</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><textarea name='short' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='short'  ><?php if (isset($goevents['short'])) { echo stripslashes($goevents['short']);} ?></textarea></td>
        <td valign="top" bgcolor="#CCCCCC"><strong>Short Details</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><textarea name='rules' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='rules'><?php if (isset($goevents['rules'])) { echo stripslashes($goevents['rules']);}?></textarea></td>
        <td valign="top" bgcolor="#CCCCCC"><strong>Fees inclusive of</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><?php echo $image_link; ?>
          <input name='brochure' type='file' class="smalltext" id='brochure' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' ></td><td bgcolor="#CCCCCC"><strong>Brochure</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><?php echo $image_link2; ?>
          <input name='tamkeen_doc' type='file' class="smalltext" id='tamkeen_doc' style='background-color: #FFFFFF; color: #000000; border: 1 solid #000000' size='30' ></td><td bgcolor="#CCCCCC"><strong>Tamkeen Docs</strong></td>
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
        <td valign="top" bgcolor="#CCCCCC"><strong>Text</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><select name='active' id='active' >
          <?php echo "$getact"; ?>
        </select></td>
        <td bgcolor="#CCCCCC"><strong><span class="error">*</span></strong> <strong>Status</strong> </td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><input name="tamkeen_doc" type="hidden" id="tamkeen_doc" value="<?php echo $goevents['tamkeen_doc']; ?>">
          <input name="brochure" type="hidden" id="brochure" value="<?php echo $goevents['brochure']; ?>">
        <input name="eventsid" type="hidden" id="eventsid" value="<?php echo $goevents['eventsid']; ?>">
        <input name="events_order" type="hidden" id="events_order" value="1"></td>
        <td bgcolor="#CCCCCC"><input name="submit" type="submit" class="smalltext" id="submit"  style="width:60px;" value="Update"></td>
      </tr>
    </table></td>
  </tr>
</table>

<DIV id="GetDate" style="VISIBILITY: hidden; POSITION: absolute; BACKGROUND-COLOR: white; layer-background-color: white"></DIV>
<DIV id="GetDate2" style="VISIBILITY: hidden; POSITION: absolute; BACKGROUND-COLOR: white; layer-background-color: white"></DIV>
</form>
<?php
}
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "getedit"; 
///--------------------------------------------------------------------------
/////// SET SESSIONS IF POSTED
if (isset($_POST['submit'])) {
foreach($_POST as $key=>$value){
if ($key!="submit"){
//$_SESSION["events_"."$key"] = addslashes($value);
$_POST["$key"] = addslashes($value);
$$key = addslashes($value);
} // end if key is not submit
} // end foreach
} // end if posted
/////// END SET SESSIONS IF POSTED


/// image Dir ///////////////
// image
$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files
$upload_image = "../$db_upload_dir/events/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/events/thumbnails/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////////////
$date_print = date('jmY_');
///////////////////////////////////////////////////////////////////////////////////////////////////
if (!empty($_FILES['brochure']['name'])) {
//////////////
$get_picname1 = findname($_FILES['brochure']['name']);
$get_picexten1 = findtype($_FILES['brochure']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 1
$uploadfile1 = $upload_image . basename($final_pic1);
}
//======
if (!empty($_FILES['tamkeen_doc']['name'])) {
//////////////
$get_picname2 = findname($_FILES['tamkeen_doc']['name']);
$get_picexten2 = findtype($_FILES['tamkeen_doc']['name']);
// func
$pic_output2 = rand(999999, 100000);
////
$final_pic2= "$date_print$pic_output2.$get_picexten2";
// image 1
$uploadfile2 = $upload_image . basename($final_pic2);
}

////////////////////////////////////
/// end var
if ($title  =="") {
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event title
</strong></font></div>
";

} elseif ($start_date  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event start date
</strong></font></div>
";


} elseif ($end_date  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event end date
</strong></font></div>
";

} elseif ($max_attend  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event maximum limit (attendance)
</strong></font></div>
";

} elseif ($price  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event cost per Delegate 
</strong></font></div>
";


} elseif ($location_name  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event location name
</strong></font></div>
";


/*} elseif ($short  ==""){
print "
<div align='center'><font color='#FF0000'><strong>
Please write the event short description
</strong></font></div>
";
*/
/*} elseif ($message==""){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء كتابة النص
</strong></font></div>
";*/

} elseif ($active=="" || $active=='novalue'){
print "
<div align='center'><font color='#FF0000'><strong>
الرجاء تحديد حالة الخبر
</strong></font></div>
";

} elseif (!empty($_FILES['brochure']['name']) && $get_picexten1!="pdf" && $get_picexten1!="doc" && $get_picexten1!="docx" ){
echo "<div align='center'><font color='#FF0000' face='Arial, Helvetica, sans-serif'><strong>
The brochure you upload is not compatible file (Only pdf, doc & docx files are allowed)
</strong></font></div>";

} elseif (!empty($_FILES['tamkeen_doc']['name']) && $get_picexten2!="pdf" && $get_picexten2!="doc" && $get_picexten2!="docx" ){
echo "<div align='center'><font color='#FF0000' face='Arial, Helvetica, sans-serif'><strong>
The tamkeen papers you upload is not compatible file (Only pdf, doc & docx files are allowed)
</strong></font></div>";


} else {
// variables

/// UPLOAD brochure 
if (!empty($_FILES['brochure']['name'])) {

if (file_exists("{$upload_image}{$_POST['brochure']}")) {unlink("{$upload_image}{$_POST['brochure']}");}

move_uploaded_file($_FILES['brochure']['tmp_name'], $uploadfile1);
$brochure_UPLOADED =  ", brochure='{$final_pic1}'";
} else {
$brochure_UPLOADED = "";
}
/// END UPLOAD brochure 

/// UPLOAD tamkeen_doc 
if (!empty($_FILES['tamkeen_doc']['name'])) {

if (file_exists("{$upload_image}{$_POST['tamkeen_doc']}")) {unlink("{$upload_image}{$_POST['tamkeen_doc']}");}

move_uploaded_file($_FILES['tamkeen_doc']['tmp_name'], $uploadfile2);
$tamkeen_doc_UPLOADED = ", tamkeen_doc='{$final_pic2}'";
} else {
$tamkeen_doc_UPLOADED = "";
}
/// END UPLOAD tamkeen_doc 

$update_date = time();
$in = mysql_query (" UPDATE events SET title='$title' , start_date='$start_date' , end_date='$end_date' ,  short='$short' , text='$message' , update_date='$update_date', location_name='$location_name' , location_map='$location_map', max_attend='$max_attend', events_order='$events_order' , active='$active'  , price='$price'  ,  rules='$rules'  $brochure_UPLOADED $tamkeen_doc_UPLOADED  WHERE eventsid='$eventsid' ") Or Die(MySQL_Error()); 
echo "
<p align='center'>The Event has been updated successfully</p> 
<meta http-equiv='refresh' content='3; url={$_SERVER['PHP_SELF']}'>
";
///-----
} /// end else
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "delcon"; 
///--------------------------------------------------------------------------
//// result
$eventsid=@$_GET['eventsid'];
$in = mysql_query (" SELECT * FROM events WHERE eventsid='$eventsid' ") Or Die(MySQL_Error()); 
// while 
while($action = mysql_fetch_array($in)){ 
// data input
extract ($action); 
$date_info =  date('Y-m-d', $action['start_date']);
///////////
?>
<form action="?action=del" method="POST" name='delevents' id='delevents'>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Delete events</strong></td>
</tr>
<tr align="right">
<td width="1392" bgcolor="#CCCCCC"><font face='Verdana'><font size='2' face='Arial, Helvetica, sans-serif'><?php echo $title; ?></font></font></td>
<td width="146" bgcolor="#CCCCCC"><strong>Title</strong></td>
</tr>
<tr align="right">
<td valign="top" bgcolor="#CCCCCC"><font face='Verdana'><font size='2' face='Arial, Helvetica, sans-serif'><?php echo $short; ?></font></font></td>
<td valign="top" bgcolor="#CCCCCC"><strong>Short Description</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><font face='Verdana'><font size='2' face='Arial, Helvetica, sans-serif'><?php echo $date_info; ?></font></font></td>
<td bgcolor="#CCCCCC"><strong>Date</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC" ><input name='doit' type='radio' value='0' checked>
No
<input name='doit' type='radio' value='1'>
Yes </td>
<td bgcolor="#CCCCCC"><strong>Are you sure</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><font face='Verdana'><font size='2' face='Arial, Helvetica, sans-serif'>
</font><font face='Verdana'><font size='2' face='Arial, Helvetica, sans-serif'>
<input name="tamkeen_doc" type="hidden" id="tamkeen_doc" value="<?php  echo $tamkeen_doc; ?>">
</font></font><font size='2' face='Arial, Helvetica, sans-serif'>
<input name="brochure" type="hidden" id="brochure" value="<?php  echo $brochure; ?>">
<input name='eventsid' type='hidden' id='eventsid' value='<?php echo $eventsid; ?>'>
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
$_POST['eventsid'] = intval($_POST['eventsid']);
//// result
$DO_DELETE = mysql_query (" DELETE FROM events WHERE eventsid='{$_POST['eventsid']}' ") Or Die(MySQL_Error()); 
///////////////////////////////////
/// Dir ///////////////
$upload_image = "../$db_upload_dir/events/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/events/thumbnails/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////////////
// data input
// UNlink image
if (file_exists("$upload_image"."{$_POST['brochure']}") && $_POST['brochure']!='') {
unlink ("$upload_image"."{$_POST['brochure']}");
}
// UNlink thumb
if (file_exists("$upload_thumb"."{$_POST['tamkeen_doc']}") && $_POST['tamkeen_doc']!='') {
unlink ("$upload_thumb"."{$_POST['tamkeen_doc']}");
}
///////////////////////////////////
echo " 
<strong>
The event has been deleted successfully </font></strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";
// resulte close
}
///--------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
case "adddetails"; 
//////////

if (isset($_SESSION['events_text'])) {$message_info = stripslashes($_SESSION['events_text']) ;} else {$message_info = '';}
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
  <td><textarea name='short' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='short'  ></textarea></td>
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
<input name='eventsid' id='eventsid' value='<?php echo "{$_GET['eventsid']}"; ?>' type='hidden'></td>
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
////////////////////// uplodd events
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
$eventsid = $_POST['eventsid'];
//
if ($name == "") {
echo "
<div align='center'><strong><font color='#FF0000'>The name required .. go back </font></strong></div>
"; 

}elseif ($text == "") {
echo "
<div align='center'><strong><font color='#FF0000'>The page text required .. go back </font></strong></div>
"; 

}elseif ($eventsid == "") {
echo "
<div align='center'><strong><font color='#FF0000'>Error the Page ID not passed .. go to the pages control panel than try again</font></strong></div>
"; 
} else {
// ck ID if exist
$query = mysql_query("SELECT * FROM events_details WHERE eventsid='$eventsid' AND lang='$lang'") Or Die(MySQL_Error()); 
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
$in = mysql_query ("INSERT INTO `events_details` (`name`,`writer`,`short`, `text`, `lang`, `eventsid`) VALUES ('{$_POST['name']}' , '{$writer}' , '{$short}' ,  '{$text}' , '{$_POST['lang']}' , '{$_POST['eventsid']}' )") or die(mysql_error()); 
if(!$in) {
echo "<p align='center'><font color='#FF0000'><strong> Error, Not done </strong></font></p>"; 
}else {

echo "<p align='center'><strong><font size='4'>The details has been attached to the page successfully </font></strong></p> ";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='?action=edit&eventsid=$eventsid'>";
}  // end if add
} // end last else
//////////
break; 
////////////////////////////////
case "update_details"; 
/////////////
$events_ID=@$_GET['events_ID'];
$edit_proj = mysql_query("select * from events_details where events_ID='$events_ID' ")Or Die(MySQL_Error());
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
  <td><textarea name='short' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='short'  ><?php echo "$short"; ?></textarea></td>
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
<td><input name='events_ID' id='events_ID' value='<?php echo "{$edit['events_ID']}"; ?>' type='hidden'>
<input name='eventsid' id='eventsid' value='<?php echo "{$edit['eventsid']}"; ?>' type='hidden'>
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
$events_ID = addslashes($_POST['events_ID']);
$name = addslashes($_POST['name']);
$writer = addslashes($_POST['writer']);
$short = addslashes($_POST['short']);
$text = addslashes($_POST['text']);;
$lang = $_POST['lang'];
$eventsid = $_POST['eventsid'];
//
if ($name == "") {
echo "
<div align='center'><strong><font color='#FF0000'>The name required .. go back </font></strong></div>
"; 

}elseif ($text == "") {
echo "
<div align='center'><strong><font color='#FF0000'>The page text required .. go back </font></strong></div>
"; 

}elseif ($eventsid == "") {
echo "
<div align='center'><strong><font color='#FF0000'>Error the Page ID not passed .. go to the pages control panel than try again</font></strong></div>
"; 
}elseif ($events_ID == "") {
echo "
<div align='center'><strong><font color='#FF0000'>Error the Page Details ID not passed .. go to the pages control panel than try again</font></strong></div>
"; 
} else {
////////////
// update table
$in =  mysql_query (" UPDATE events_details SET name='$name' ,  writer='$writer' ,  short='$short' ,  text='$text' , lang='$lang' ,  eventsid='$eventsid' WHERE events_ID='$events_ID' ") or die(mysql_error());  
if(!$in) 
{echo "<p align='center'><font color='#FF0000'><strong> Error, Not done </strong></font></p>"; }
else { 
echo "<p align='center'><strong><font size='4'> The page details has been updated successfully </font></strong></p> ";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='?action=edit&eventsid=$eventsid'>";

} // end data echo
} // end last else if
//////////
break; 
////////////////////////////////
case "del_details"; 
//////////
$events_ID=@$_GET['events_ID'];
$edit_proj = mysql_query("select * from events_details where events_ID='$events_ID' ")Or Die(MySQL_Error());
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
<input name="events_ID" type="hidden" id="events_ID" value=" <?php echo "$events_ID"; ?> ">
<input name="eventsid" type="hidden" id="eventsid" value=" <?php echo "$eventsid"; ?> ">
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
$events_ID=@$_POST["events_ID"];
$eventsid=@$_POST["eventsid"];
if ($doit =="no")
{
echo "
<div align='center'><strong><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><br>
<br>
You choose not to delete the details, wait until you redirected ... </font></strong></div>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='?action=edit&eventsid=$eventsid'>";
}
else {
//////////////////////////////////////
//// result
///////////
$in = mysql_query (" DELETE FROM events_details WHERE events_ID='$events_ID' ") 
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
$view_all = mysql_query("SELECT * FROM events_details WHERE eventsid='{$_GET['eventsid']}' order by name ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 
$numv=mysql_num_rows($view_all);
$view_pages = mysql_query("SELECT * FROM events WHERE eventsid='{$_GET['eventsid']}' order by title ASC LIMIT 1")Or Die(MySQL_Error());
while($row_pages = mysql_fetch_array($view_pages)){ 
$PAGE_NAME_MAIN = stripslashes($row_pages['title']);
}
/////////
echo "
<div  align='center'> PAGE NAME: <a href='?action=edit&eventsid={$_GET['eventsid']}' >$PAGE_NAME_MAIN</a> - <a href='?action=adddetails&eventsid={$_GET['eventsid']}' >Add A new details</a> <div/>
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
$eventsid = $action['eventsid'];
$name = stripslashes($action['name']);
// go on
echo "
<table width='64%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0066CC' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse' > 
<tr align='center'>
<td width='87%' align='left'><FONT color=#52557c><SPAN lang=en-us><a href='../events_cat.php?eventsid=$eventsid' target='_blank'>$name</a></SPAN></FONT></td>
<td width='7%'><a href='?action=update_details&events_ID=$events_ID'>Edit</a></td>
<td width='6%' height='25' valign='middle'><a href='?action=del_details&events_ID=$events_ID'>Delete</a></td>
</tr> 
</table>
";
}
/////////////////////////
mysql_free_result($view_all);
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM events_details WHERE eventsid='{$_GET['eventsid']}' "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1) {
echo "<center>Select a Page<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=view_details&eventsid={$_GET['eventsid']}&page=$prev\"><<Previous</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){
if ($total_pages > 1) { 
echo "$i "; 
}
} else { 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=view_details&eventsid={$_GET['eventsid']}&page=$i\">$i</a> "; 
} 
} 
// Build Next Link
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=view_details&eventsid={$_GET['eventsid']}&page=$next\">Next>></a>"; 
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