<?php
include ('includes/header.php');
$Current_Time = time();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>أقسام الإعلانات</title>
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
<div align="center">
<p align="center"><strong><br>
أقسام الإعلانات</strong></p>
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
if ($_POST['name'] ==""){
print "
<div align='center' class='msg'><strong>
الرجاء كتابة أسم القسم
</strong></div>
";
} elseif (!isset($_POST['ads_order']) || $_POST['ads_order'] =='') {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد تترتيب القسم
</strong></div>
";
////////////////////////////////////////////////////////////////////////////////
} else {
// ck user if exist
$query = MySQL_Query("SELECT catid FROM ads_cats WHERE name='{$_POST['name']}'") Or Die(MySQL_Error()); 
// if select detact more than 0 result exit
if(MySQL_Num_Rows($query) > 0) 
{ 
// print error already exist
echo '
<div align="center"><font color="#FF0000"><strong>القسم '.$_POST['name'].' متواجد</strong></font></div>
'; 
//free the memory from the select result
MySQL_Free_Result($query); 
} 
else {
// add to table
$in = MySQL_Query("INSERT INTO ads_cats (name,ads_order,date) VALUES ('{$_POST['name']}','{$_POST['ads_order']}', '{$Current_Time}')") 
Or Die(mysql_error()); 
if(!$in) {
echo "
<p align='center'><font color='#FF0000'><strong> خلل .. لم يتم إنشاء القسم </strong></font></p>
"; 
}else { 
echo "
<p align='center'><strong><font size='3'>تم إضافة القسم بنجاح</font></strong></p> 
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";
} // end data
} // else name exist
////////////////////////////////////////////////////////////////////////////////////////////////
} // END ELSE ALL
///////////////////////////////////////////////////////////////////////////////////////
} // END IF SET
//************************************************************************************
if (isset($_POST['name'])) {$_POST['name']=stripslashes(strip_tags($_POST['name'])); }
?>
<form action='' method='post' name='add' id='add'>
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>أضافة قسم جديد</strong></td>
</tr>
<tr align="right">
<td width="85%" bgcolor="#CCCCCC"><input name="name" type="text" class="smalltext" id="name" dir="rtl" value="<?php if (isset($_POST['name'])) {echo $_POST['name'];} ?>" size="40" maxlength="255"></td>
<td width="15%" bgcolor="#CCCCCC"><strong>أسم القسم </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="ads_order" type="text" class="smalltext" id="ads_order" dir="rtl" value="<?php if (isset($_POST['ads_order'])) {echo $_POST['ads_order'];} ?>" size="11" maxlength="11"></td>
<td bgcolor="#CCCCCC"><strong>الترتيب</strong></td>
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
if ($_POST['name'] ==""){
print "
<div align='center' class='msg'><strong>
الرجاء كتابة أسم القسم
</strong></div>
";
} elseif ($_POST['ads_order'] =="" || $_POST['ads_order'] =='') {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد ت ترتيب القسم
</strong></div>
";
} elseif ($_POST['catid'] =="") {
print "
<div align='center' class='msg'><strong>
الرجاء تحديد حالة القسم
</strong></div>
";
////////////////////////////////////////////////////////////////////////////////
} else {
// add to table
$in = mysql_query ("UPDATE ads_cats SET name='{$_POST['name']}' , ads_order='{$_POST['ads_order']}' WHERE catid='{$_POST['catid']}' ") 
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
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";
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
$edit_cat = mysql_query("select * from ads_cats where catid='{$_GET['catid']}' ");
/// cer
while($do_edit = mysql_fetch_array($edit_cat)){ 
extract($do_edit);
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
<td width="85%" bgcolor="#CCCCCC"><input name="name" type="text" class="smalltext" id="name" dir="rtl" value="<?php echo $do_edit['name']; ?>" size="40" maxlength="255"></td>
<td width="15%" bgcolor="#CCCCCC"><strong>أسم القسم </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="ads_order" type="text" class="smalltext" id="ads_order" dir="rtl" value="<?php echo $do_edit['ads_order']; ?>" size="11" maxlength="11">
</strong></font></td>
<td bgcolor="#CCCCCC"><strong>الترتيب</strong></td>
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
$del_cat = mysql_query("select * from ads_cats where catid='$catid' ");
/// cer
while($del = mysql_fetch_array($del_cat)){ 
extract($del);
///// activation
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
<td width="597" bgcolor="#CCCCCC"><strong><?php echo $name; ?></strong></td>
<td bgcolor="#CCCCCC"><strong>أسم القسم </strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><?php echo $ads_order; ?></td>
<td bgcolor="#CCCCCC"><strong>الترتيب</strong></td>
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
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";
}
else {
$in = mysql_query (" DELETE FROM ads_cats WHERE catid='{$_POST['catid']}' ") Or Die(MySQL_Error()); 
echo "
<br>
<br>
<strong>
تم حذف القسم بنجاح
</strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";
// resulte close
}
//-------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
case "code_gen"; 
//----------------------------------------------------------------------------
$upload_dir = "../upload/ads/";
$upload_dir2 = "upload/ads/";
$Today_TIME = time();
if (isset($_GET['catid']) && $_GET['catid']!='') {
$catid = $_GET['catid'];
$View_adds = mysql_query("select * from ads WHERE position='$catid' ORDER BY rand()")Or Die(MySQL_Error());
$num_latest_photos = mysql_num_rows ($View_adds);
/// cer
while($ads_row = mysql_fetch_array($View_adds)){ 
extract($ads_row);
if ($num_latest_photos < 1) {
} else {
?>
<table width="700" border="0" cellspacing="2" cellpadding="4">
<tr>
<td align="center" bgcolor="#EEEEEE">مشاهدة الإعلان - اضغط على الاعلان للذهاب للوصلة</td>
</tr>
<tr>
<td align="center"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center" valign="top"><?php
/////////////////////////////////////////////////////////////////////////////////////////////
////-----------------------------------------------------------------
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
?></td>
</tr>
</table></td>
</tr>
<tr>
<td align="center" bgcolor="#EEEEEE">كود الإعلان</td>
</tr>
<tr>
<td align="center">&lt;script language=&quot;JavaScript&quot; src=&quot;<?php echo"$db_site_add"; ?>ads_gen.php?catid=<?php echo"$position";?>&quot;&gt;&lt;/script&gt;</td>
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
<tr>
<td align="center">&nbsp;</td>
</tr>
</table>
<?php
////-----------------------------------------------------------------
} /// end if no result
////-----------------------------------------------------------------
} // end while
} // end check id
//----------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
/*
Main control
*/
default: 
//-------------------------------------------------------------------------
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = $_GET['page']; 
} 
// Define the number of results per page 
$max_results = 50; 
// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_all = mysql_query("SELECT * FROM ads_cats ORDER BY ads_order ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 
/////////////////////////////////////////////////////////////////////////////////////////////
$num = mysql_num_rows ($view_all);
if ($num < 1) {
echo "لم يتم إدراج أي قسم"; 
} else {
/////////
echo "
<table width='60%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#006699' bgcolor='#F5F4F3' id='AutoNumber2' style='border-collapse: collapse' dir='rtl'>
<tr align='center' valign='middle'>
<td width='6%'>الرقم</td>
<td width='52%'>اسم القسم</td>
<td width='14%'>الاعلانات</td>
<td width='9%'>الترتيب</td>
<td width='7%' height='25'><font size='2' face='Tahoma'>تعديل</font></td>
<td width='12%' height='25'><p align='center'>حذف</td>
</tr>
</table>
"; 
$num = 1;
///////
while($row = mysql_fetch_array($view_all)){ 
/// stat
extract($row);
$name = stripslashes ("$name");
$view_ads = mysql_query("SELECT * FROM ads WHERE position='$catid' ")Or Die(MySQL_Error()); 
$num_ads = mysql_num_rows ($view_ads);
// go on
echo "
<table width='60%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#006699' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse' dir='rtl'> 
<tr align='center' valign='middle'>
<td width='6%'>$num</td>
<td width='52%'><a href='#'   onclick=\"MM_openBrWindow('ads_cats.php?action=code_gen&catid=$catid','','scrollbars=yes,resizable=yes,width=800,height=800')\" >$name</a></td>
<td width='14%'><a href='ads.php?catid=$catid'>$num_ads</a> - <a href='ads.php?action=add&catid=$catid'>اضافة</a></td>
<td width='9%'>$ads_order</td>
<td width='7%' height='25'><a href='?action=edit&catid=$catid'>تعديل</a></td> 
<td width='12%' height='25'><a href='?action=delcon&catid=$catid'>حذف</a></span></td>
</tr> 
</table>
";
$num += 1;
}
/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM ads_cats "),0)Or Die(MySQL_Error()); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center>أختر صفحة<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
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
echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$next\">Next>></a>"; 
} 
echo "</center>";
/////////////////
} // if no result
//-------------------------------------------------------------------------
break; 
///////////////////////////////////////////////////////////////////////////
} // end switch
?>
&nbsp;</p>
</div>
</body>
</html>