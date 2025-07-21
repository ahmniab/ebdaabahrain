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
<title>مدير الإعلانات</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
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
if (confirm('هل أنت متأكد من رغبتك في حذف البيانات المحددة؟'))
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
function MM_openBrWindow(theURL,winName,features) { //v2.0
window.open(theURL,winName,features);
}
//-->
</script>
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center">
<strong>مدير الإعلانات </strong>
<br>
<?php
//----------------------------------------------------------------------------
switch(@$_GET['action']){ 
//////////////////////////////////////////////////////////////////////////////	
/* Main control */
default: 
//////////////////////////////////////////////////////////////////////////////	
$Today_TIME = time();
$CURRENT_D = date("d");
$CURRENT_M = date("m");
$CURRENT_Y = date("Y");
$timeout_day = mktime(0, 0, 0, "{$CURRENT_M}",   "{$CURRENT_D}",   "{$CURRENT_Y}");
//--------------------------------//--------------------------------
if (isset($_GET['catid'])) {
$CAT_Q = "AND position='{$_GET['catid']}' ";
$CAT_U = "catid={$_GET['catid']}&";
} else {
$CAT_Q = "";
$CAT_U = "";
}
////-----
/*if (isset($_GET['active'])) {
$ACTIVE_Q = "AND active='{$_GET['active']}' ";
$ACTIVE_U = "active={$_GET['active']}&";
} else {
$ACTIVE_Q = "";
$ACTIVE_U = "";
}*/
////-----
if (isset($_GET['active']) && $_GET['active']==0) {
$ACTIVE_Q = "AND  (active='0' AND expire_date!='0' AND expire_date > $timeout_day) OR  (active='0' AND expire_date='0')";
$ACTIVE_U = "active=0&";
} elseif (isset($_GET['active']) && $_GET['active']==1) {
$ACTIVE_Q = "AND  (active='1' AND expire_date!='0' AND expire_date > $timeout_day) OR  (active='1' AND expire_date='0')";
$ACTIVE_U = "active={$_GET['active']}&";
} elseif (isset($_GET['active']) && $_GET['active']==2) {
$ACTIVE_Q = "AND (expire_date!='0' AND expire_date < $timeout_day) ";
$ACTIVE_U = "active=2&";
} else {
$ACTIVE_Q = "";
$ACTIVE_U = "";
}
//--------------------------------//--------------------------------
?>
<table width="955" border="0" cellspacing="2" cellpadding="2">
<tr>
<td width="852" align="right"><select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('self',this,0)" dir="rtl">
<option value="?<?php echo $ACTIVE_U;?>">كل الأقسام</option>
<?php
//////
$view_cats = mysql_query("SELECT * FROM ads_cats order by ads_order");  
while ($row_cats = mysql_fetch_array($view_cats)) { 
if(isset($_GET['catid']) && $_GET['catid'] ==$row_cats['catid']){ 
$selected_postion= "selected";
} else {
$selected_postion= "";
} 
echo "<option value='?catid={$row_cats['catid']}&{$ACTIVE_U}' $selected_postion>{$row_cats['name']}</option>";
} // end while
?>
</select></td>
<td align="right" bgcolor="#eeeeee">أختر القسم </td>
</tr>
<tr>
<td align="right"><select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('self',this,0)" dir="rtl">
<option value="?<?php echo $CAT_U;?>">كل الحالات</option>
<option value="?active=1&<?php echo $CAT_U;?>" <?php if(isset($_GET['active']) && $_GET['active'] ==1){ echo "selected";} ?>>مفعل</option>
<option value="?active=0&<?php echo $CAT_U;?>" <?php if(isset($_GET['active']) && $_GET['active'] ==0){ echo "selected";} ?>>غير مفعل</option>
<option value="?active=2&<?php echo $CAT_U;?>" <?php if(isset($_GET['active']) && $_GET['active'] ==2){ echo "selected";} ?>>منتهي</option>
</select></td>
<td align="right" bgcolor="#EEEEEE">الحالة</td>
</tr>
</table>
<?php
//////////////
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = $_GET['page']; 
} 
// Define the number of results per page 
$max_results = 30; 
// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_all = mysql_query("SELECT * FROM ads WHERE adsid!='0' $CAT_Q $ACTIVE_Q ORDER BY adsid DESC LIMIT $from, $max_results") Or Die(MySQL_Error()); 
/////////
echo "
<br/>
<table width='850' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='100%' border='0' cellpadding='2'>
<tr>
<td width='36' align='center' bgcolor='#EEEEEE'>حذف</td>
<td width='36' align='center' bgcolor='#EEEEEE'>تعديل</td>
<td width='53' align='center' bgcolor='#EEEEEE'>الحالة</td>
<td width='206' align='center' bgcolor='#EEEEEE'>الملاحظة</td>
<td width='93' align='center' bgcolor='#EEEEEE'>تاريخ الإنتهاء</td>
<td width='112' align='center' bgcolor='#EEEEEE'>تاريخ الإضافة</td>
<td width='107' align='center' bgcolor='#EEEEEE'>الموقع</td>
<td width='157' align='center' bgcolor='#EEEEEE'>عنوان الإعلان</td>
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
/*
if($action['active'] == '1'){
$active_info = "<strong><font color='#0000FF'>
مفعل
</font></strong>";
}else{
$active_info = "<strong><font color='#FF0000'>
غير مفعل
</font></strong>";
}
*/
/// stat
if ($action['expire_date']=='0' || $action['expire_date'] > $timeout_day) {
if($action['active'] == '1'){
$active_info = "<strong><font color='#00CC00'>
مفعل
</font></strong>";
}else{
$active_info = "<strong><font color='red'>
غير مفعل
</font></strong>";
}
} else {
$active_info = "<strong><font color='red'>
منتهي
</font></strong>";
}
/// stat
$date_info =  date('Y-m-d', $action['date']);
if ($action['expire_date']!=0) {
$e_date_info =  date('Y-m-d', $action['expire_date']); 
} else {
$e_date_info =  "غير محدد";
}
////////////
$view_cats = mysql_query("SELECT * FROM ads_cats WHERE catid='{$action['position']}' ")Or Die(MySQL_Error()); 
while($row_cats = mysql_fetch_array($view_cats)){ 
$position_info = stripslashes($row_cats['name']);
}
////////////////////////////
// go on
echo "
</table>
<table width='850' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='100%' border='0' cellpadding='2'>
<tr align='right'>
<td width='36' align='center' bgcolor='#CCCCCC'><a href='?action=delcon&adsid=$adsid'>حذف</a></td>
<td width='36' align='center' bgcolor='#CCCCCC'><a href='?action=edit&adsid=$adsid'>تعديل</a></td>
<td width='53' align='center' bgcolor='#CCCCCC'>$active_info</td>
<td width='206' align='center' bgcolor='#CCCCCC'>{$action['short']}</td>
<td width='93' align='center' bgcolor='#CCCCCC'>$e_date_info</td>
<td width='112' align='center' bgcolor='#CCCCCC'>$date_info</td>
<td width='107' align='center' bgcolor='#CCCCCC'>$position_info</td>
<td width='157' align='center' bgcolor='#CCCCCC'><a href='#'   onclick=\"MM_openBrWindow('ads.php?action=code_gen&adsid=$adsid','','scrollbars=yes,resizable=yes,width=800,height=800')\" >{$action['name']}</a></td>
</tr>
</table></td>
</tr>
</table>
";
}
/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM ads WHERE adsid!='0' $CAT_Q $ACTIVE_Q "),0) or die (mysql_error()); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center>أختر صفحة<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?{$CAT_U}{$ACTIVE_U}page=$prev\" dir='rtl'><<السابق</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
if ($total_pages > 1){
echo "$i "; 
}
} else { 
echo "<a href=\"".$_SERVER['PHP_SELF']."?{$CAT_U}{$ACTIVE_U}page=$i\">$i</a> "; 
} 
} 
// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?{$CAT_U}{$ACTIVE_U}page=$next\" dir='rtl'>التالي>></a>"; 
} 
echo "</center>";
//----------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "code_gen"; 
//----------------------------------------------------------------------------
if (isset($_GET['adsid']) && $_GET['adsid']!='') {
$adsid = $_GET['adsid'];
////-----------------------------------------------------------------
$upload_dir = "../upload/ads/";
$upload_dir2 = "upload/ads/";
$Today_TIME = time();
//////////////////////////
$View_adds = mysql_query("SELECT * FROM ads WHERE adsid='$adsid' ORDER BY ads_order ASC ")Or Die(MySQL_Error()); 
/////////////////////////////////////////////////////////////////////////////////////////////
$num_latest_photos = mysql_num_rows ($View_adds);
if ($num_latest_photos < 1) {
} else {
////-----------------------------------------------------------------
////-----------------------------------------------------------------
while($ads_row = mysql_fetch_array($View_adds)){ 
extract($ads_row);
?>
<table width="700" border="0" cellspacing="2" cellpadding="4">
<tr>
<td align="center" bgcolor="#EEEEEE">مشاهدة الإعلان - اضغط على الاعلان للذهاب للوصلة</td>
</tr>
<tr>
<td align="center"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center" valign="top"><?php
$ads_row['name'] =  stripslashes($ads_row['name'] ) ;
/////////////////////////////////////////////
if ($ads_row['use_page']==1) {
$link_info = "../ads.php?adsid={$ads_row['adsid']}";
} else {
$link_info = "{$ads_row['link']}";
}
///------------------------------------------
if ($ads_row['target']==1) {
$target_info = "target='_blank'";
} else {
$target_info = "";
}
///------------------------------------------
if ($ads_row['pic']!='') { 
$file_info =  $upload_dir.$ads_row['pic']; 
$file_info2 =  $upload_dir2.$ads_row['pic']; 
} else { 
$file_info =   $upload_dir."default.jpg"; 
$file_info2 =   $upload_dir2."default.jpg"; 
} 
$flash_name_info = str_replace(".swf", "", $file_info);
?>
<?php
/////////////////////////////////////////////
if ($ads_row['type']=="4") {
?>
<script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0','width','<?php echo $ads_row['width']; ?>','height','<?php echo $ads_row['height'];?>','hspace','1','vspace','1','movie','<?php echo $file_info;?>','quality','high','wmode','opaque','allowscriptaccess','sameDomain','menu','false' ); //end AC code
</script>
<noscript>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="<?php echo $ads_row['width']; ?>" height="<?php echo $ads_row['height'];?>" hspace="1" vspace="1">
<param name="movie" value="<?php echo $file_info;?>" />
<param name="quality" value="high" />
<param name="wmode" value="opaque" />
<param name="allowScriptAccess" value="sameDomain" />
<param name="menu" value="false" />
</object>
</noscript>
<?php
} else {
?>
<a href="<?php echo"$link_info"; ?>" <?php echo"$target_info"; ?>><img src="<?php echo $file_info;?>" alt="<?php echo $ads_row['name']; ?>" hspace="0" vspace="1"border="0" class="rightTop_banner" /></a>
<?php
} // else type
////-----------------------------------------------------------------
} /// end if no result
////-----------------------------------------------------------------
?></td>
</tr>
</table></td>
</tr>
<tr>
<td align="center" bgcolor="#EEEEEE">كود الإعلان</td>
</tr>
<tr>
<td align="center">&lt;script language=&quot;JavaScript&quot; src=&quot;<?php echo"$db_site_add"; ?>ads_gen.php?adsid=<?php echo"$adsid";?>&quot;&gt;&lt;/script&gt;</td>
</tr>
<tr>
<td align="center" bgcolor="#EEEEEE">صورة الإعلان</td>
</tr>
<tr>
<td align="center"><?php echo $db_site_add.$file_info2;?></td>
</tr>
<tr>
<td align="center" bgcolor="#EEEEEE">رابط الإعلان</td>
</tr>
<tr>
<td align="center"><?php echo $db_site_add;?>ads_linked.php?adsid=<?php echo"$adsid";?></a> </td>
</tr>
<tr>
<td align="center" bgcolor="#EEEEEE">الإحصائيات</td>
</tr>
<tr>
<td align="center">عدد مرات الظهور<br>
<?php echo"$viewed";?><br>
<br>
عدد الضغطات<br>
<?php echo"$hits";?><br></td>
</tr>
</table>
<?php
} // end while
} // end check id
//----------------------------------------------------------------------------
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
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>البحث عن إعلان</strong></td>
</tr>
<tr align="right">
<td width="396" bgcolor="#CCCCCC"><span class="box">
<input name="criteria" type="text" id="criteria" size="30" dir="rtl">
</span></td>
<td width="190" bgcolor="#CCCCCC"><strong>أسم الصورة </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="search_for" id="search_for">
<option value="0">عنوان الإعلان</option>
<option value="1">وصلة الإعلان</option>
</select>
</td>
<td bgcolor="#CCCCCC"><strong>البحث حسب</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">
<input name='action' type='hidden' id='action' value='result'></td>
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
$SEARCH_INFO = "link LIKE '%{$_GET['criteria']}%'";
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
$max_results = 30; 
// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_all = mysql_query("SELECT * FROM ads WHERE $SEARCH_INFO ORDER BY adsid ASC LIMIT $from, $max_results") or die (mysql_error()); 
/////////////////////////////////////////////////////////////////////////////////////////////
$num=mysql_num_rows($view_all);
if($num==0){ 
print"
<div align='center' class='error'>لم يتم إيجاد ما تبحث عنه</div>
"; 
} else {  
/////////////////////////////////////////////////////////////////////////////////////////////
/////////
echo "
<br/>
<table width='700' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='100%' border='0' cellpadding='2'>
<tr>
<td width='57' align='center' bgcolor='#EEEEEE'>حذف</td>
<td width='68' align='center' bgcolor='#EEEEEE'>تعديل</td>
<td width='76' align='center' bgcolor='#EEEEEE'>الحالة</td>
<td width='88' align='center' bgcolor='#EEEEEE'>تاريخ الإنتهاء</td>
<td width='91' align='center' bgcolor='#EEEEEE'>تاريخ الإضافة</td>
<td width='115' align='center' bgcolor='#EEEEEE'>الموقع</td>
<td width='115' align='center' bgcolor='#EEEEEE'>عنوان الإعلان</td>
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
if($action['active'] == '1'){
$active_info = "<strong><font color='#0000FF'>
مفعل
</font></strong>";
}else{
$active_info = "<strong><font color='#FF0000'>
غير مفعل
</font></strong>";
}
/// stat
$date_info =  date('Y-m-d', $action['date']);
if ($action['expire_date']!=0) {
$e_date_info =  date('Y-m-d', $action['expire_date']); 
} else {
$e_date_info =  "غير محدد";
}
////////////
if ($action['position'] =="1"){
$position_info = "
منطقة الإعلانات
";
} elseif($action['position'] =="2"){
$position_info = "
اسفل الموقع
";
} else {
$position_info = "
غير محدد
";
}
////////////////////////////
// go on
echo "
<table width='700' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='100%' border='0' cellpadding='2'>
<tr align='right'>
<td width='57' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=delcon&adsid=$adsid'>حذف</a></td>
<td width='68' align='center' bgcolor='#CCCCCC'><a href='{$_SERVER['PHP_SELF']}?action=edit&adsid=$adsid'>تعديل</a></td>
<td width='76' align='center' bgcolor='#CCCCCC'>$active_info</td>
<td width='88' align='center' bgcolor='#CCCCCC'>$e_date_info</td>
<td width='91' align='center' bgcolor='#CCCCCC'>$date_info</td>
<td width='115' align='center' bgcolor='#CCCCCC'>$position_info</td>
<td width='115' align='center' bgcolor='#CCCCCC'>{$action['name']}</td>
</tr>
</table></td>
</tr>
</table>
";
}
/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM ads WHERE $SEARCH_INFO "),0); 
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
//////////////////////////////////////////////////////////////////////////////
case "add"; 
//----------------------------------------------------------------------------
/// ######################################################################
if(isset($_SESSION['ads_name'])){$name_info= stripslashes($_SESSION['ads_name']);} else {$name_info='';}
/// ######################################################################
if(isset($_SESSION['ads_link']) && $_SESSION['ads_active'] !="http://www."){
$link_info= stripslashes($_SESSION['ads_link']);
} 
else {
$link_info='http://www.';
}
/// ######################################################################
if(isset($_SESSION['ads_use_page'])){
if ($_SESSION['ads_use_page'] ==1){
$use_page_info = "
<option value='0'>استخدم وصلة الموقع</option>
<option value='1' selected>أفتح صفحة خاصة</option>
";
} elseif($_SESSION['ads_use_page'] ==0) {
$use_page_info = "
<option value='0' selected>استخدم وصلة الموقع</option>
<option value='1'>أفتح صفحة خاصة</option>
";
} else {
$use_page_info = "
<option value='0'>استخدم وصلة الموقع</option>
<option value='1'>أفتح صفحة خاصة</option>
";
}
} else {
$use_page_info = "
<option value='0'>استخدم وصلة الموقع</option>
<option value='1'>أفتح صفحة خاصة</option>
";
}
/// ######################################################################
if(isset($_SESSION['ads_target'])  && $_SESSION['ads_target'] !=""){
if ($_SESSION['ads_target'] =="1"){
$target_info = "
<option value='1' selected>صفحة جديدة</option>
<option value='0'>صفحة داخلية</option>
";
} elseif($_SESSION['ads_target'] =="0") {
$target_info = "
<option value='1'>صفحة جديدة</option>
<option value='0' selected>صفحة داخلية</option>
";
} else {
$target_info = "
<option value='1'>صفحة جديدة</option>
<option value='0'>صفحة داخلية</option>
";
}
} else {
$target_info = "
<option value='1'>صفحة جديدة</option>
<option value='0'>صفحة داخلية</option>
";
}
/// ######################################################################
if(isset($_SESSION['ads_type'])  && $_SESSION['ads_type'] !=""){
if ($_SESSION['ads_type'] =="1"){
$type_info = "
<option value='1' selected>صورة</option>
<option value='0'>فلاش</option>
";
} elseif($_SESSION['ads_type'] =="0") {
$type_info = "
<option value='1'>صورة</option>
<option value='0' selected>فلاش</option>
";
} else {
$type_info = "
<option value='1'>صورة</option>
<option value='0'>فلاش</option>
";
}
} else {
$type_info = "
<option value='1'>صورة</option>
<option value='0'>فلاش</option>
";
}
/// ######################################################################
if(isset($_SESSION['ads_active']) && $_SESSION['ads_active'] !="no") {
if ($_SESSION['ads_active'] =="1"){
// session foo is set
$getact = "
<option value='no'>أختر</option>
<option value='1' selected>مفعل</option>
<option value='0'>غير مفعل</option>
";
} elseif($_SESSION['ads_active'] =="0"){
// session foo is set
$getact = "
<option value='no'>أختر</option>
<option value='1'>مفعل</option>
<option value='0' selected>غير مفعل</option>
";
} else {
$getact = "
<option value='no'>أختر</option>
<option value='1'>مفعل</option>
<option value='0'>غير مفعل</option>
";
}
} else { 
$getact = "
<option value='no'>أختر</option>
<option value='1' selected>مفعل</option>
<option value='0'>غير مفعل</option>
";
}
/// ######################################################################
if(isset($_SESSION['ads_position']) && $_SESSION['ads_position'] =="1"){
$position_info = "
<option value='1' selected>منطقة الإعلانات</option>
<option value='2'>اسفل الموقع</option>
";
} elseif(isset($_SESSION['ads_position']) && $_SESSION['ads_position'] =="2"){
$position_info = "
<option value='1'>منطقة الإعلانات</option>
<option value='2' selected>اسفل الموقع</option>
";
} elseif(isset($_SESSION['ads_position']) && $_SESSION['ads_position'] =="3"){
$position_info = "
<option value='1'>منطقة الإعلانات</option>
<option value='2'>اسفل الموقع</option>
";
} else {
$position_info = "
<option value='1'>منطقة الإعلانات</option>
<option value='2'>اسفل الموقع</option>
";
}
/// ######################################################################
////// EXPIRE - date
//// day
if (isset($_SESSION['add_b_day'])) {
$b_day_info = "<option value='{$_SESSION['add_b_day']}' selected>{$_SESSION['add_b_day']}</option>";
} else {
$b_day_info = "<option value='0' selected>غير محدد</option>";
}
////// month
if (isset($_SESSION['add_b_month'])) {
$b_month_info ="<option value='{$_SESSION['add_b_month']}' selected>{$_SESSION['add_b_month']}</option>" ;
} else {
$b_month_info = "<option value='0' selected>غير محدد</option>";
}
////// year
if (isset($_SESSION['add_b_year'])) {
$b_year_info = "<option value='{$_SESSION['add_b_year']}' selected>{$_SESSION['add_b_year']}</option>";
} else {
$b_year_info = "<option value='0' selected>غير محدد</option>";
}
/// ######################################################################
?>
<form action="?action=getadd" method="post" enctype="multipart/form-data" name="add" id="add" lang="ar">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>إضافة إعلان</strong></td>
</tr>
<tr align="right">
<td width="87%" bgcolor="#CCCCCC"><input name="name" type="text" id="name" dir="rtl" lang="ar" value="<?php echo $name_info; ?>"></td>
<td width="13%" bgcolor="#CCCCCC"><strong>أسم الإعلان </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><textarea name="short" id="short" cols="45" rows="5" dir="rtl"><?php if(isset($_SESSION['ads_short'])){echo stripslashes($_SESSION['ads_short']);} ?></textarea>
</td>
<td valign="top" bgcolor="#CCCCCC"><strong>نص قصير</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="link" type="text" id="link" value="<?php echo $link_info; ?>"></td>
<td bgcolor="#CCCCCC"><strong>وصلة الإعلان</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="pic" type="file" id="pic" style="background-color: #FFFFFF; color: #000000; border: 1 solid #000000" dir="ltr" size="30"></td>
<td bgcolor="#CCCCCC"><strong>الصورة</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php
if (isset($_SESSION['ads_text'])) {$text_info = stripslashes($_SESSION['ads_text']) ;} else {$text_info = '';}
///////
$oFCKeditor = new FCKeditor('text') ;
$oFCKeditor->BasePath = 'rte/';
$oFCKeditor->Value = "$text_info";
$oFCKeditor->Width  = '100%' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Create() ;
?></td>
<td valign="top" bgcolor="#CCCCCC"><strong>نص صفحة الإعلان</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="use_page" id="use_page" dir="rtl" style="width:130px;">
<?php
echo "$use_page_info";
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>إستخدام</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="target" id="target" dir="rtl" style="width:130px;">
<?php
echo "$target_info";
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>أفتح في</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="active" id="active" dir="rtl" style="width:130px;">
<?php echo $getact;?>
</select></td>
<td bgcolor="#CCCCCC"><strong>الحالة</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="ads_order" type="text" id="ads_order" dir="rtl" value="<?php if (isset($_SESSION['ads_ads_order'])) {echo stripslashes($_SESSION['ads_ads_order']);} else { echo "1";}; ?>" size="5" maxlength="11" ></td>
<td bgcolor="#CCCCCC"><strong>الترتيب</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="position" id="position" dir="rtl">
<?php 
//////
$view_cats = mysql_query("SELECT * FROM ads_cats order by ads_order");  
while ($row_cats = mysql_fetch_array($view_cats)) { 
if(isset($_SESSION['ads_position']) && $_SESSION['ads_position'] ==$row_cats['catid']){ 
$selected_postion= "selected";
}elseif(isset($_GET['catid']) && $_GET['catid'] ==$row_cats['catid']){ 
$selected_postion= "selected";
} else {
$selected_postion= "";
} 
echo "<option value='{$row_cats['catid']}' $selected_postion>{$row_cats['name']}</option>";
} // end while
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>الموقع</strong></td>
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
<option value="<?php echo date("Y");?>"><?php echo date("Y");?></option>
<option value="<?php echo date("Y")+1;?>"><?php echo date("Y")+1;?></option>
<option value="<?php echo date("Y")+2;?>"><?php echo date("Y")+2;?></option>
<option value="<?php echo date("Y")+3;?>"><?php echo date("Y")+3;?></option>
<option value="<?php echo date("Y")+4;?>"><?php echo date("Y")+4;?></option>
<option value="<?php echo date("Y")+5;?>"><?php echo date("Y")+5;?></option>
</select></td>
<td bgcolor="#CCCCCC"><strong>تاريخ الإنتهاء</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">&nbsp;</td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="أضف"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</form>
<?php
//----------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "getadd"; 
//----------------------------------------------------------------------------
///// sessions
/// SESSIONS
$_SESSION['ads_name']= $_POST['name'];
$_SESSION['ads_link']= $_POST['link'];
$_SESSION['ads_text']= $_POST['text'];
$_SESSION['ads_position']= $_POST['position'];
$_SESSION['ads_active']= $_POST['active'];
$_SESSION['ads_use_page']= $_POST['use_page'];
$_SESSION['ads_ads_order']= $_POST['ads_order'];
$_SESSION['ads_target']= $_POST['target'];
$_SESSION['ads_short']= $_POST['short'];
//////// var
$dir="../$db_upload_dir/ads/"; //change the name of the directory to upload files
// var 2
$name = $_POST['name'];
$link = $_POST['link'];
$text = $_POST['text'];
$position = $_POST['position'];
$active = $_POST['active'];
$use_page = $_POST['use_page'];
$ads_order = $_POST['ads_order'];
$target = $_POST['target'];
$short = $_POST['short'];
$date = time();
/////////////////////////////////////////
$date_print = date('jmY_');
/////////////////////////// Images rename /////////////////////////
if (!empty($_FILES['pic']['name'])) {
//////////////
$get_picname1 = findname($_FILES['pic']['name']);
$get_picexten1 = findtype($_FILES['pic']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 1
$uploadfile1 = $dir . basename($final_pic1);
}
/////////////////////////////////////////////////////////////////
if ($name == "") {
echo "لم تضع أسما للإعلان .. أرجع للخلف";
} elseif (empty($_FILES['pic']['name'])) {
echo "لم تضع صورة الأعلان .. ارجع للخلف";
} elseif ($link=="" && $_POST['use_page']=='0') {
echo "لقد أخترت أستعمال الوصلة و لم تضع وصلة للإعلان .. ارجع للخلف و عين وصلة للأعلان";
} elseif ($link=="http://www." && $_POST['use_page']=='0') {
echo "لقد أخترت أستعمال الوصلة و لم تضع وصلة للإعلان .. ارجع للخلف و عين وصلة للأعلان";
} elseif ($text=="" && $_POST['use_page']=='1') {
echo "لقد أخترت أستعمال صفحة خاصة للإعلان و لم تكتب نص الصفحة .. ارجع للخلف و أكتب النص";
} elseif ($active=="no") {
echo "لم تختر حالة للإعلان ( مفعل أم غير مفعل ) .. أرجع للخلف";
} elseif ($position=="") {
echo "لم تختر موقعا للإعلان .. إرجع للخلف";
} elseif ($ads_order =="") {
echo "لم تحدد ترتيب الإعلان .. إرجع للخلف";
} elseif ($_FILES['pic']['type'] !="image/pjpeg" && $_FILES['pic']['type'] !="image/gif" && $_FILES['pic']['type'] !="image/jpeg" && $_FILES['pic']['type'] !="image/png"  && $_FILES['pic']['type'] !="application/x-shockwave-flash"){
print ("
<div align='center'><font color='#FF0000'>الصورة التي رفعتها للموقع لا تحمل امتدادا مسموحا به<br>
الأمتدادات المسموح بها  هي <br>
( jpg - pjpeg - jpeg - gif - bmp - swf)<br>
الرجاء الرجوع للخلف و تحميل ملف مسموح به</font></div>
");
////////
} elseif (@$_FILES['pic']['size'] > 2000000) { //maxcimum size is 2 Mb
print ("<div align='center'><font color='#FF0000'>الصورة جدا كبيرة .. صغر من حجمها ثم ارفعها من جديد</font></div>");
}elseif (file_exists("$dir{$final_pic1}")) {
print ("<div align='center'><strong><font color='#FF0000'>
أسم الصورة يتطابق مع اسم صورة أخرى لدينا ..حتى لا تخزن بدل الصورة السابقة يرجى تسمية الصورة أسما آخر و معاودة رفع الصورة </font></strong></div>");
} else {
if (move_uploaded_file($_FILES['pic']['tmp_name'], $uploadfile1)) {
chmod("$dir{$final_pic1}", 0644);  // image directory; permission
list($width_up, $height_up, $type_up, $attr_up) = getimagesize("$dir{$final_pic1}");
if (isset($_POST['b_month']) & $_POST['b_month']!=0 & isset($_POST['b_day']) & $_POST['b_day']!=0 & isset($_POST['b_year']) & $_POST['b_year']!=0) {
$expire_date_info = mktime(0, 0, 0, "{$_POST['b_month']}",   "{$_POST['b_day']}",   "{$_POST['b_year']}");
} else {
$expire_date_info = 0;
}
// add to ads table
$in = mysql_query ("INSERT INTO `ads` (`name`, `link`,  `text`, `position`, `type`, `width`,  `height`,   `active`,  `use_page`,`ads_order`,  `target`, `pic`,`date`,`expire_date`,  `short`) VALUES ('$name', '$link',  '$text', '$position', '$type_up', '$width_up', '$height_up','$active','$use_page','$ads_order','$target','{$final_pic1}', '$date', '$expire_date_info', '$short')") Or Die(MySQL_Error()); 
/////
if(!$in) {
echo "
<p align='center'><font color='#FF0000'><strong>خلل .. لم يتم اضافة الإعلان  </strong></font></p>
"; 
} else { 
/// UNSET SESSIONS
unset($_SESSION['ads_name']);
unset($_SESSION['ads_link']);
unset($_SESSION['ads_text']);
unset($_SESSION['ads_position']);
unset($_SESSION['ads_type']);
unset($_SESSION['ads_width']);
unset($_SESSION['ads_height']);
unset($_SESSION['ads_active']);
unset($_SESSION['ads_use_page']);
unset($_SESSION['ads_ads_order']);
unset($_SESSION['ads_target']);
unset($_SESSION['ads_short']);
echo "
<p align='center'><strong><font size='4'>تم أضافة الإعلان بنجاح</font></strong></p> 
";
}
} else { 
echo "<div align='center'><font color='#FF0000'><strong>
خلل .. لم يتم رفع اي صورة .. راجع الصلاحيات الخاصة بملف أرفاق الصور
</strong></font></div>"; 
} // end else move file
}
////----------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////////
case "edit"; 
////----------------------------------------------------------------------------------------
$adsid = $_GET["adsid"];
$edit_ads = mysql_query("select * from ads where adsid='$adsid' ")Or Die(MySQL_Error());
/// cer
while($edit = mysql_fetch_array($edit_ads)){ 
extract($edit);
$name = stripslashes($edit['name']);
$short = stripslashes($edit['short']);
////// EXPIRE - date
if ($edit['expire_date']!=0) {
$expire_date_info = date('d-m-Y', $edit['expire_date']);
$expire_date_info = explode("-", $expire_date_info);
$b_day_info = $expire_date_info[0];
$b_month_info = $expire_date_info[1];
$b_year_info = $expire_date_info[2];
//// day
$b_day_info = "<option value='0' selected>غير محدد</option><option value='{$expire_date_info[0]}' selected>{$expire_date_info[0]}</option>";
$b_month_info ="<option value='0' selected>غير محدد</option><option value='{$expire_date_info[1]}' selected>{$expire_date_info[1]}</option>" ;
$b_year_info = "<option value='0' selected>غير محدد</option><option value='{$expire_date_info[2]}' selected>{$expire_date_info[2]}</option>";
} else {
$b_day_info = "<option value='0' selected>غير محدد</option>";
$b_month_info = "<option value='0' selected>غير محدد</option>";
$b_year_info = "<option value='0' selected>غير محدد</option>";
}
////////////////////////////////////////////////////////////
/// ######################################################################
if ($use_page =="1"){
$use_page_info = "
<option value='0'>استخدم وصلة الموقع</option>
<option value='1' selected>أفتح صفحة خاصة</option>
";
} elseif($use_page =="0") {
$use_page_info = "
<option value='0' selected>استخدم وصلة الموقع</option>
<option value='1'>أفتح صفحة خاصة</option>
";
} else {
$use_page_info = "
<option value='0'>استخدم وصلة الموقع</option>
<option value='1'>أفتح صفحة خاصة</option>
";
}
/// ######################################################################
if ($target =="1"){
$target_info = "
<option value='1' selected>صفحة جديدة</option>
<option value='0'>صفحة داخلية</option>
";
} elseif($target =="0") {
$target_info = "
<option value='1'>صفحة جديدة</option>
<option value='0' selected>صفحة داخلية</option>
";
} else {
$target_info = "
<option value='1'>صفحة جديدة</option>
<option value='0'>صفحة داخلية</option>
";
}
/// ######################################################################
if ($type =="1"){
$type_info = "
<option value='1' selected>صورة</option>
<option value='0'>فلاش</option>
";
} elseif($type =="0") {
$type_info = "
<option value='1'>صورة</option>
<option value='0' selected>فلاش</option>
";
} else {
$type_info = "
<option value='1'>صورة</option>
<option value='0'>فلاش</option>
";
}
/// ######################################################################
if ($active =="1"){
// session foo is set
$getact = "
<option value='no'>أختر</option>
<option value='1' selected>مفعل</option>
<option value='0'>غير مفعل</option>
";
} elseif($active =="0"){
// session foo is set
$getact = "
<option value='no'>أختر</option>
<option value='1'>مفعل</option>
<option value='0' selected>غير مفعل</option>
";
} else { 
$getact = "
<option value='no'>أختر</option>
<option value='1'>مفعل</option>
<option value='0'>غير مفعل</option>
";
}
/// ######################################################################
if ($position =="1"){
$position_info = "
<option value='1' selected>منطقة الإعلانات</option>
<option value='2'>اسفل الموقع</option>
";
} elseif($position =="2"){
$position_info = "
<option value='1'>منطقة الإعلانات</option>
<option value='2' selected>اسفل الموقع</option>
";
} elseif($position =="3"){
$position_info = "
<option value='1'>منطقة الإعلانات</option>
<option value='2'>اسفل الموقع</option>
";
} else { 
$position_info = "
<option value='1'>منطقة الإعلانات</option>
<option value='2'>اسفل الموقع</option>
";
}
/// ######################################################################
?>
<form action='?action=update' method='post' enctype='multipart/form-data' name='add' id='add' lang='ar'>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>إضافة إعلان</strong></td>
</tr>
<tr align="right">
<td colspan="2" align="center" bgcolor="#CCCCCC">
<?php if ($type!='4') { ?>
<img src='<?php echo "../$db_upload_dir/ads/$pic"; ?>' border='0'>
<?php } else{ ?>
<a href='<?php echo "../$db_upload_dir/ads/$pic"; ?>' target='_blank'>شاهد الفلاش</a>
<?php } ?>
&nbsp;</td>
</tr>
<tr align="right">
<td bgcolor="#FFFFFF">&lt;script language=&quot;JavaScript&quot; src=&quot;<?php echo"$db_site_add"; ?>/ads_gen.php?adsid=<?php echo"$adsid";?>&quot;&gt;&lt;/script&gt;</td>
<td bgcolor="#EEEEEE">كود الإعلان</td>
</tr>
<tr align="right">
<td width="87%" bgcolor="#CCCCCC"><input name="name" type="text" id="name" dir="rtl" lang="ar" value="<?php echo "$name"; ?>" size="40" maxlength="255"></td>
<td width="13%" bgcolor="#CCCCCC"><strong>أسم الإعلان </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><textarea name="short" id="short" cols="45" rows="5" dir="rtl"><?php echo "$short"; ?></textarea>
</td>
<td valign="top" bgcolor="#CCCCCC"><strong>نص قصير</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="link" type="text" id="link" value="<?php echo "$link"; ?>" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>وصلة الإعلان</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="pic" type="file" id="pic" style="background-color: #FFFFFF; color: #000000; border: 1 solid #000000" dir="ltr" size="30"></td>
<td bgcolor="#CCCCCC"><strong>الصورة</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php
if (isset($_SESSION['ads_edit_text'])) {$text_edit_info = stripslashes($_SESSION['ads_edit_text']) ;} else {$text_edit_info = stripslashes($text);}
///////
$oFCKeditor = new FCKeditor('text') ;
$oFCKeditor->BasePath = 'rte/';
$oFCKeditor->Value = "$text_edit_info";
$oFCKeditor->Width  = '100%' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Create() ;
?></td>
<td valign="top" bgcolor="#CCCCCC"><strong>نص صفحة الإعلان</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="use_page" id="use_page" dir="rtl" style="width:130px;">
<?php
echo "$use_page_info";
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>إستخدام</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="target" id="target" dir="rtl" style="width:130px;">
<?php
echo "$target_info";
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>أفتح في</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="active" id="active" dir="rtl" style="width:130px;">
<?php
echo "$getact";
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>الحالة</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="position" id="position" dir="rtl">
<?php 
//////
$view_cats = mysql_query("SELECT * FROM ads_cats order by ads_order");  
while ($row_cats = mysql_fetch_array($view_cats)) { 
if($position ==$row_cats['catid']){ $selected_postion= "selected";} else {$selected_postion= "";} 
echo "<option value='{$row_cats['catid']}' $selected_postion>{$row_cats['name']}</option>";
} // end while
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>الموقع</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="ads_order" type="text" id="ads_order" dir="rtl" value="<?php echo "$ads_order"; ?>" size="5" maxlength="11" ></td>
<td bgcolor="#CCCCCC"><strong>الترتيب</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php echo date('Y-m-d', $edit['date']); ?></td>
<td bgcolor="#CCCCCC"><strong>تاريخ الإضافة</strong></td>
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
<option value="<?php echo date("Y");?>"><?php echo date("Y");?></option>
<option value="<?php echo date("Y")+1;?>"><?php echo date("Y")+1;?></option>
<option value="<?php echo date("Y")+2;?>"><?php echo date("Y")+2;?></option>
<option value="<?php echo date("Y")+3;?>"><?php echo date("Y")+3;?></option>
<option value="<?php echo date("Y")+4;?>"><?php echo date("Y")+4;?></option>
<option value="<?php echo date("Y")+5;?>"><?php echo date("Y")+5;?></option>
</select></td>
<td bgcolor="#CCCCCC"><strong>تاريخ الإنتهاء</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name='adsid' type='hidden' id='adsid' value='<?php echo "$adsid"; ?> '>
<input name='old_pic' type='hidden' id='old_pic' value='<?php echo"$pic"; ?> '></td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="تعــديل"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</form>
<?php
}
//----------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "update"; 
//----------------------------------------------------------------------------
/// SESSIONS
$_SESSION['ads_edit_text']= $_POST['text'];
//////// var
$dir="../$db_upload_dir/ads/"; //change the name of the directory to upload files
// var 2
$adsid = $_POST['adsid'];
$name = $_POST['name'];
$link = $_POST['link'];
$text = $_POST['text'];
$position = $_POST['position'];
$active = $_POST['active'];
$use_page = $_POST['use_page'];
$ads_order = $_POST['ads_order'];
$target = $_POST['target'];
$old_pic = $_POST['old_pic'];
$short = $_POST['short'];
/////////////////////////////////////////
$date_print = date('jmY_');
/////////////////////////// Images rename /////////////////////////
if (!empty($_FILES['pic']['name'])) {
//////////////
$get_picname1 = findname($_FILES['pic']['name']);
$get_picexten1 = findtype($_FILES['pic']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 1
$uploadfile1 = $dir . basename($final_pic1);
}
/////////////////////////////////////////////////////////////////
if ($name == "") {
echo "لم تضع أسما للإعلان .. أرجع للخلف";
} elseif ($link=="" && $_POST['use_page']=='0') {
echo "لقد أخترت أستعمال الوصلة و لم تضع وصلة للإعلان .. ارجع للخلف و عين وصلة للأعلان";
} elseif ($link=="http://www." && $_POST['use_page']=='0') {
echo "لقد أخترت أستعمال الوصلة و لم تضع وصلة للإعلان .. ارجع للخلف و عين وصلة للأعلان";
} elseif ($text=="" && $_POST['use_page']=='1') {
echo "لقد أخترت أستعمال صفحة خاصة للإعلان و لم تكتب نص الصفحة .. ارجع للخلف و أكتب النص";
} elseif ($active=="no") {
echo "لم تختر حالة للإعلان ( مفعل أم غير مفعل ) .. أرجع للخلف";
} elseif ($position=="") {
echo "لم تختر موقعا للإعلان .. إرجع للخلف";
} elseif ($ads_order =="") {
echo "لم تحدد ترتيب الإعلان .. إرجع للخلف";
} elseif (empty($_FILES['pic']['name'])) {
// add to ads table
if (isset($_POST['b_month']) & $_POST['b_month']!=0 & isset($_POST['b_day']) & $_POST['b_day']!=0 & isset($_POST['b_year']) & $_POST['b_year']!=0) {
$expire_date_info = mktime(0, 0, 0, "{$_POST['b_month']}",   "{$_POST['b_day']}",   "{$_POST['b_year']}");
} else {
$expire_date_info = 0;
}
$in = mysql_query ("UPDATE ads SET name='$name' , text='$text' ,link='$link', active='$active' , position='$position' , use_page='$use_page' , ads_order='$ads_order' , target='$target'  , expire_date='$expire_date_info' , short='$short'   WHERE adsid=$adsid") Or Die(MySQL_Error()); 
/////
if(!$in) {
echo "<p align='center'><font color='#FF0000'><strong>خلل .. لم يتم تعديل الإعلان </strong></font></p>"; 
} else { 
unset($_SESSION['ads_edit_text']);
echo "<p align='center'><strong><font size='4'>تم تعديل الإعلان  </font></strong></p> ";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?action=edit&adsid=$adsid'>";
}
////////////
} elseif ($_FILES['pic']['type'] !="image/pjpeg" && $_FILES['pic']['type'] !="image/gif" && $_FILES['pic']['type'] !="image/jpeg" && $_FILES['pic']['type'] !="image/png"  && $_FILES['pic']['type'] !="application/x-shockwave-flash"){
print ("
<div align='center'><font color='#FF0000'>الصورة التي رفعتها للموقع لا تحمل امتدادا مسموحا به<br>
الأمتدادات المسموح بها  هي <br>
( jpg - pjpeg - jpeg - gif - bmp - swf)<br>
الرجاء الرجوع للخلف و تحميل ملف مسموح به</font></div>
");
} elseif (@$_FILES['pic']['size'] > 2000000) { //maxcimum size is 2 Mb
print ("<div align='center'><font color='#FF0000'>الصورة جدا كبيرة .. صغر من حجمها ثم ارفعها من جديد</font></div>");
}elseif (file_exists("$dir{$final_pic1}")) {
print ("<div align='center'><strong><font color='#FF0000'>
أسم الصورة يتطابق مع اسم صورة أخرى لدينا ..حتى لا تخزن بدل الصورة السابقة يرجى تسمية الصورة أسما آخر و معاودة رفع الصورة </font></strong></div>");
} else {
if (move_uploaded_file($_FILES['pic']['tmp_name'], $uploadfile1)) {
chmod("$dir{$final_pic1}", 0644);  // image directory; permission
// UNlink banner
if (file_exists("$dir$old_pic") && $_POST['old_pic']!='') {
unlink ("$dir$old_pic");
}
// END UNlink banner
list($width_up, $height_up, $type_up, $attr_up) = getimagesize("$dir{$final_pic1}");
if (isset($_POST['b_month']) & $_POST['b_month']!=0 & isset($_POST['b_day']) & $_POST['b_day']!=0 & isset($_POST['b_year']) & $_POST['b_year']!=0) {
$expire_date_info = mktime(0, 0, 0, "{$_POST['b_month']}",   "{$_POST['b_day']}",   "{$_POST['b_year']}");
} else {
$expire_date_info = 0;
}
// add to ads table
$in = mysql_query (" UPDATE ads SET  name='$name' , text='$text' ,link='$link', active='$active' , position='$position' , type='$type_up' , use_page='$use_page' , width='$width_up' , height='$height_up' , ads_order='$ads_order' , target='$target'  , expire_date='$expire_date_info' , short='$short' ,  pic='{$final_pic1}' WHERE adsid='$adsid' ") Or Die(MySQL_Error()); 
/////
if(!$in) {
echo "<p align='center'><font color='#FF0000'><strong>خلل .. لم يتم تعديل الإعلان </strong></font></p>"; 
} else  { 
unset($_SESSION['ads_edit_text']);
echo "
<p align='center'><strong><font size='4'>تم تعديل الإعلان بنجاح</font></strong></p> 
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?action=edit&adsid=$adsid'>";
}
//// 
}else { 
echo "<div align='center'><font color='#FF0000'><strong>
خلل .. لم يتم رفع اي صورة .. راجع الصلاحيات الخاصة بملف أرفاق الصور
</strong></font></div>"; 
} // end else move file
} // end all
//----------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "delcon";
//----------------------------------------------------------------------------
//////
$dir="../$db_upload_dir/ads/"; //change the name of the directory to upload files
$adsid = $_GET["adsid"];
////// 
$del_ads = mysql_query("select * from ads where adsid='$adsid' ");
/// cer
while($del = mysql_fetch_array($del_ads)){ 
extract($del);
echo "
<form action='{$_SERVER['PHP_SELF']}?action=getdel' method='post' enctype='multipart/form-data' name='add' id='add' lang='ar'>
<p align='center'>&#1575;&#1604;&#1571;&#1593;&#1604;&#1575;&#1606; <br>
<img src='$dir$pic' border='0'></p>
<table width='90%'  border='0' align='center' cellpadding='0' cellspacing='0'>
<tr align='right'>
<td width='87%'>$name</td>
<td width='13%'><div align='center'>&#1571;&#1587;&#1605; &#1575;&#1604;&#1573;&#1593;&#1604;&#1575;&#1606; </div></td>
</tr>
<tr align='right'>
<td>$link</td>
<td><div align='center'>&#1608;&#1589;&#1604;&#1577; &#1575;&#1604;&#1573;&#1593;&#1604;&#1575;&#1606; </div></td>
</tr>
<tr align='right'>
<td>$date</td>
<td><div align='center'>&#1575;&#1604;&#1578;&#1575;&#1585;&#1610;&#1582;</div></td>
</tr>
<tr align='right'>
<td><strong><font color='#FF0000'>&#1607;&#1604; &#1575;&#1606;&#1578; &#1605;&#1578;&#1571;&#1603;&#1583; &#1605;&#1606; &#1571;&#1606;&#1603; &#1578;&#1585;&#1610;&#1583; &#1581;&#1584;&#1601; &#1607;&#1584;&#1575; &#1575;&#1604;&#1573;&#1593;&#1604;&#1575;&#1606;&#1567; </font></strong></td>
<td>&nbsp;</td>
</tr>
<tr align='right'>
<td><span class='maintext'><span class='text'>
<input name='doit' type='radio' value='no' checked>
&#1606;&#1593;&#1605; <font face='Arial, Helvetica, sans-serif'> </font></span> <font face='Arial, Helvetica, sans-serif'>
<input name='doit' type='radio' value='yes'>
&#1604;&#1575;
</font></span></td>
<td><input name='old_pic' type='hidden' id='old_pic' value='$pic'></td>
</tr>
<tr align='right'>
<td><input type='submit' name='Submit' value='&#1581;&#1584;&#1601;'></td>
<td><div align='center'>
<input name='adsid' type='hidden' id='adsid' value='$adsid'>
</div></td>
</tr>
<tr align='right'>
<td>&nbsp;</td>
<td><div align='center'></div></td>
</tr>
</table>
</form>
";
}
//----------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "getdel"; 
//----------------------------------------------------------------------------
$dir="../$db_upload_dir/ads/"; //change the name of the directory to upload files
$doit = $_POST["doit"];
if ($doit =="no")
{
echo "
<strong><font size='3'><br>
<br>
لقد أخترت عدم حذف الإعلان .. أنتظر حتى يتم توجيهك للوحة التحكم الرئيسية بمدير الإعلانات </font></strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";
}
else {
$adsid = $_POST["adsid"];
//// result
$in = mysql_query (" DELETE FROM ads WHERE adsid=$adsid") Or Die(MySQL_Error()); 
///
unlink("$dir{$_POST['old_pic']}");
// data input
echo " 
<p><strong>تم حذف الإعلان</strong></p> 
";
// resulte close
}
//----------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
}///// end switch
//////////////////////////////////////////////////////////////////////////////
?>
</td>
</tr>
</table>
</body>
</html>
<?php
}
?>