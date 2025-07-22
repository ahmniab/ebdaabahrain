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
<title>News Sections</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' href='images/cpstyle.css'>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
<p align="center"><strong><br>
News Sections</strong></p>
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
// ck user if exist
$query = MySQL_Query("SELECT catid FROM news_cat WHERE catname='{$_POST['catname']}'") Or Die(MySQL_Error()); 
// if select detact more than 0 result exit
if(MySQL_Num_Rows($query) > 0) 
{ 
// print error already exist
echo '
<div align="center"><font color="#FF0000"><strong>القسم '.$_POST['catname'].' متواجد</strong></font></div>
'; 
//free the memory from the select result
MySQL_Free_Result($query); 
} 
else {
// add to table
$in = MySQL_Query("INSERT INTO news_cat (catname,active,parent_id,catorder) VALUES ('{$_POST['catname']}','{$_POST['active']}', '{$_POST['parent_id']}', '{$_POST['catorder']}')") 
Or Die(mysql_error()); 
if(!$in) 
{
echo "
<p align='center'><font color='#FF0000'><strong> خلل .. لم يتم إنشاء القسم </strong></font></p>
"; 
} else { 
echo "
<p align='center'><strong><font size='3'>تم إضافة القسم بنجاح</font></strong></p> 
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
<form action='' method='post' name='add' id='add'>
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Add Section</strong></td>
</tr>
<tr align="right">
<td width="112" align="left" bgcolor="#CCCCCC">Title</td>
<td width="534" align="left" bgcolor="#CCCCCC"><input name="catname" type="text" class="smalltext" id="catname"  value="<?php if (isset($_POST['catname'])) {echo $_POST['catname'];} ?>" size="40" maxlength="255"></td>
</tr>
<tr align="right">
<td align="left" bgcolor="#CCCCCC">Parent Section</td>
<td align="left" bgcolor="#CCCCCC"><select name='parent_id'>
<option value='novalue'>SELECT</option>
<option value='0'>Main Section</option>
<?php
echo show_dropdown_news('0','0');
?>
</select></td>
</tr>
<tr align="right">
<td align="left" bgcolor="#CCCCCC">Status</td>
<td align="left" bgcolor="#CCCCCC"><select name="active" class="smalltext" id="active" >
<?php if (isset($_POST['active']) && $_POST['active']==0) { ?>
<option value="1">Active</option>
<option value="0" selected="selected">Inactive</option>
<?php } else { ?>
<option value="1" selected="selected">Active</option>
<option value="0">Inactive</option>
<?php } ?>
</select></td>
</tr>
<tr align="right">
<td align="left" bgcolor="#CCCCCC">Sort order</td>
<td align="left" bgcolor="#CCCCCC"><input name="catorder" type="text" class="smalltext" id="catorder"  value="<?php if (isset($_POST['catorder'])) {echo $_POST['catorder'];} else {echo "0";} ?>" size="5" maxlength="11"></td>
</tr>
<tr align="right">
<td align="left" bgcolor="#CCCCCC">Language</td>
<td align="left" bgcolor="#CCCCCC"><select name="lang" id="lang">
<?php
//////////////////////////////  cat
if (isset($_SESSION['pro_lang']) && $_SESSION['pro_lang']!='') {
$_SESSION['pro_lang'] = intval ($_SESSION['pro_lang']);
$view_lang = mysql_query("select * from lang WHERE lang_id='{$db_default_lang}' ORDER BY name ASC")Or Die(MySQL_Error()); 
while($action_lang = mysql_fetch_array($view_lang)){ 
extract($action_lang);
if ($action_lang['lang_id']==$_SESSION['pro_lang']) {$select_info='selected';} else {$select_info='';}
echo "<option value='{$action_lang['lang_id']}' $select_info>{$action_lang['name']}</option>";
} // END WHILE
} else {
$view_lang = mysql_query("select * from lang WHERE lang_id='{$db_default_lang}'  ORDER BY name ASC")Or Die(MySQL_Error()); 
while($action_lang = mysql_fetch_array($view_lang)){ 
extract($action_lang);
echo "<option value='{$action_lang['lang_id']}'>{$action_lang['name']}</option>";
} // END WHILE
}
////////////////////////////// END cat
?>
</select></td>
</tr>
<tr align="right">
<td align="left" bgcolor="#CCCCCC">&nbsp;</td>
<td align="left" bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="add"  style="width:60px;"></td>
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
$in = mysql_query ("UPDATE news_cat SET catname='{$_POST['catname']}' , parent_id='{$_POST['parent_id']}', active='{$_POST['active']}' , catorder='{$_POST['catorder']}' WHERE catid='{$_POST['catid']}' ") 
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
$edit_cat = mysql_query("select * from news_cat where catid='{$_GET['catid']}' ");
/// cer
while($do_edit = mysql_fetch_array($edit_cat)){ 
extract($do_edit);
///// reg
if($do_edit['active'] == '1'){$act = "<option value='1' selected>Active</option>";}
else{$act = "  <option value='1'>Active</option>";}
if($do_edit['active'] == '0'){$act2 = "<option value='0' selected>Inactive</option>";}
else{ $act2 = "<option value='0'>Inactive</option>";}
$view_other = mysql_query("SELECT * FROM news_cat_details WHERE catid='$catid' order by catid ASC")Or Die(MySQL_Error()); 
$other_lang_num = mysql_num_rows ($view_other);
if ($other_lang_num>0) {
$OTHGER_LANG = "<a href='?action=adddetails&catid=$catid'>Add</a> - <a href='?action=view_details&catid=$catid'>View ($other_lang_num)</a>";
} else {
$OTHGER_LANG = "<a href='?action=adddetails&catid=$catid'>Add</a> - N/A";
}
?>
<br>
<form action='' method='post' name='edit' id='edit'>
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Edit Section</strong></td>
</tr>
<tr align="right">
<td align="left" bgcolor="#CCCCCC">Details In Another Lang</td>
<td align="left" bgcolor="#CCCCCC"><?php echo $OTHGER_LANG;?></td>
</tr>
<tr align="right">
<td width="121" align="left" bgcolor="#CCCCCC">Title</td>
<td width="525" align="left" bgcolor="#CCCCCC"><input name="catname" type="text" class="smalltext" id="catname"  value="<?php echo $do_edit['catname']; ?>" size="40" maxlength="255"></td>
</tr>
<tr align="right">
<td align="left" bgcolor="#CCCCCC">Parent Section</td>
<td align="left" bgcolor="#CCCCCC"><select name='parent_id'>
<option value='novalue'>SELECT</option>
<?php
///////////////////////
///// root or not
if($do_edit['parent_id'] == '0'){
$cat_root = "<option value='0' selected>Main Section</option>";
}
else { 
$cat_root = "<option value='0'>Main Section</option>";
}
echo "$cat_root";
///////////////////////////////////
if($do_edit['parent_id'] != '0'){
$edit_cat4 = mysql_query("select * from news_cat where catid='{$do_edit['parent_id']}' ");
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
</tr>
<tr align="right">
<td align="left" bgcolor="#CCCCCC">Status</strong></font></td>
<td align="left" bgcolor="#CCCCCC"><select name='active' size='1' id='active' >
<?php echo $act; ?> <?php echo $act2; ?>
</select></td>
</tr>
<tr align="right">
<td align="left" bgcolor="#CCCCCC">Sort order</td>
<td align="left" bgcolor="#CCCCCC"><input name="catorder" type="text" class="smalltext" id="catorder"  value="<?php echo $do_edit['catorder']; ?>" size="5" maxlength="11"></td>
</tr>
<tr align="right">
<td align="left" bgcolor="#CCCCCC">Language</td>
<td align="left" bgcolor="#CCCCCC"><select name="lang" id="lang">
<?php
///// reg
$edit_lang = mysql_query("select * from lang WHERE lang_id='{$db_default_lang}' ORDER BY name ASC");
/// cer
while($v_lang = mysql_fetch_array($edit_lang)){ 
extract($v_lang);
if ($v_lang['lang_id']==$action['lang']) {$select_info="selected";} else {$select_info="";}
echo "<option value='{$v_lang['lang_id']}' $select_info>{$v_lang['name']}</option>";
}
?>
</select></td>
</tr>
<tr align="right">
<td align="left" bgcolor="#CCCCCC"><font color='#006633'><strong>
<input name='catid' type='hidden' id='catid' value='<?php echo $do_edit['catid']; ?>'> 
</strong></font><strong><a href="?">Back</a></strong></td>
<td align="left" bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="Edit"  style="width:60px;"></td>
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
$del_cat = mysql_query("select * from news_cat where catid='$catid' ");
/// cer
while($del = mysql_fetch_array($del_cat)){ 
extract($del);
///// activation
if($active == '0'){$act = "Inactive";}
else{$act = "Active";}
////////
////////
?>
<form method="post" action="?action=del">
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="100%" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Delete Section</strong></td>
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
delete_cats_news("$catid");
// resulte close
}
//-------------------------------------------------------------------------
break; 
///////////////////////////////////////////////////////////////////////////
case "show"; 
//-------------------------------------------------------------------------
$catid = intval($_GET['catid']);
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = @$_GET['page']; 
} 
// Define the number of results per page 
$max_results = 30; 
// Figure out the limit for the query based 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_all = mysql_query("SELECT * FROM news WHERE catid='$catid' ORDER BY newsid DESC LIMIT $from, $max_results") or die (mysql_error()); 
/////////////////////////////////////////////////////////////////////////////////////////////
echo "
<br/>
<table width='650' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td bgcolor='#666666'><table width='100%' border='0' cellpadding='2'>
<tr>
<td width='58' align='center' bgcolor='#EEEEEE'>Delete</td>
<td width='69' align='center' bgcolor='#EEEEEE'>Edit</td>
<td width='77' align='center' bgcolor='#EEEEEE'>Status</td>
<td width='100' align='center' bgcolor='#EEEEEE'>date</td>
<td width='314' align='center' bgcolor='#EEEEEE'>Title</td>
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
<td width='58' align='center' bgcolor='#CCCCCC'><a href='news.php?action=delcon&newsid=$newsid'>Delete</a></td>
<td width='69' align='center' bgcolor='#CCCCCC'><a href='news.php?action=edit&newsid=$newsid'>Edit</a></td>
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
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM news WHERE catid='$catid' "),0) or die (mysql_error()); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center>أختر صفحة<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=show&catid=$catid&page=$prev\" dir='rtl'><<Prev</a> "; 
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
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=show&catid=$catid&page=$next\" dir='rtl'>Next>></a>"; 
} 
echo "</center>";
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
<td align="center" class='tableseparator'>Control Sections</td>
</tr>
<?php 
echo show_admin_menu_news(0,0);
?>
</table>
</td>
</tr>
</table>
<?php
//-------------------------------------------------------------------------
break; 
///////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
case "adddetails"; 
//////////
?>
<form action="?action=adddetails2" method="POST" name="adddetails" id="adddetails" dir="ltr">
<table width="95%"  border="0" align="center">
<tr>
<td width="14%">Name <strong><font color="#FF0000">*</font></strong></td>
<td width="86%"><input name="catname" type="text" id="catname"></td>
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
<input name='catid' id='catid' value='<?php echo "{$_GET['catid']}"; ?>' type='hidden'>
<input name='text' id='text' type='hidden'></td>
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
$catname = addslashes($_POST['catname']);
$text = addslashes($_POST['text']);
$lang = addslashes($_POST['lang']);
$catid = $_POST['catid'];
//
if ($catname == "") {
echo "
<div align='center'><strong><font color='#FF0000'>The name required .. go back </font></strong></div>
"; 
/*}elseif ($text == "") {
echo "
<div align='center'><strong><font color='#FF0000'>The page text required .. go back </font></strong></div>
"; */
}elseif ($catid == "") {
echo "
<div align='center'><strong><font color='#FF0000'>Error the Page ID not passed .. go to the pages control panel than try again</font></strong></div>
"; 
} else {
// ck ID if exist
$query = mysql_query("SELECT * FROM news_cat_details WHERE catid='$catid' AND lang='$lang'") Or Die(MySQL_Error()); 
// if select detact more than 0 result exit
if(mysql_num_rows($query) !=0) { 
// print error already exist 
echo '
<div align="center"><font color="#FF0000"><strong>The page '.$catname.' in the language you selected already exist in our database </strong></font></div>
'; 
exit;
} 
//free the memory from the select result
mysql_free_result($query); 
// INSERT into table
$in = mysql_query ("INSERT INTO `news_cat_details` (`catname`, `text`, `lang`, `catid`) VALUES ('{$_POST['catname']}' , '{$text}' , '{$_POST['lang']}' , '{$_POST['catid']}' )") or die(mysql_error()); 
if(!$in) {
echo "<p align='center'><font color='#FF0000'><strong> Error, Not done </strong></font></p>"; 
}else {
echo "<p align='center'><strong><font size='4'>The details has been attached to the page successfully </font></strong></p> ";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='?action=edit&catid=$catid'>";
}  // end if add
} // end last else
//////////
break; 
////////////////////////////////
case "update_details"; 
/////////////
$Cat_ID=@$_GET['Cat_ID'];
$edit_proj = mysql_query("select * from news_cat_details where Cat_ID='$Cat_ID' ")Or Die(MySQL_Error());
/// cer
while($edit = mysql_fetch_array($edit_proj)){ 
extract ($edit);
$text =  stripslashes($text) ;
///////////////
?>
<form action="?action=update_details2" method="POST" ENCTYPE="multipart/form-data" name="update_details" id="update_details" dir="ltr">
<table width="95%"  border="0" align="center">
<tr>
<td width="14%">Name <strong><font color="#FF0000">*</font></strong></td>
<td width="86%"><input name="catname" type="text" id="catname" value="<?php echo "$catname"; ?>"></td>
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
<td><input name='Cat_ID' id='Cat_ID' value='<?php echo "{$edit['Cat_ID']}"; ?>' type='hidden'>
<input name='catid' id='catid' value='<?php echo "{$edit['catid']}"; ?>' type='hidden'>
<input name='lang' id='lang' value='<?php echo "{$edit['lang']}"; ?>' type='hidden'>
<input name='text' id='text' type='hidden'></td>
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
$Cat_ID = addslashes($_POST['Cat_ID']);
$catname = addslashes($_POST['catname']);
$text = addslashes($_POST['text']);;
$lang = $_POST['lang'];
$catid = $_POST['catid'];
//
if ($catname == "") {
echo "
<div align='center'><strong><font color='#FF0000'>The name required .. go back </font></strong></div>
"; 
/*}elseif ($text == "") {
echo "
<div align='center'><strong><font color='#FF0000'>The page text required .. go back </font></strong></div>
"; */
}elseif ($catid == "") {
echo "
<div align='center'><strong><font color='#FF0000'>Error the Page ID not passed .. go to the pages control panel than try again</font></strong></div>
"; 
}elseif ($Cat_ID == "") {
echo "
<div align='center'><strong><font color='#FF0000'>Error the Page Details ID not passed .. go to the pages control panel than try again</font></strong></div>
"; 
} else {
////////////
// update table
$in =  mysql_query (" UPDATE news_cat_details SET catname='$catname' , text='$text' , lang='$lang' ,  catid='$catid' WHERE Cat_ID='$Cat_ID' ") or die(mysql_error());  
if(!$in) 
{echo "<p align='center'><font color='#FF0000'><strong> Error, Not done </strong></font></p>"; }
else { 
echo "<p align='center'><strong><font size='4'> The page details has been updated successfully </font></strong></p> ";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='?action=edit&catid=$catid'>";
} // end data echo
} // end last else if
//////////
break; 
////////////////////////////////
case "del_details"; 
//////////
$Cat_ID=@$_GET['Cat_ID'];
$edit_proj = mysql_query("select * from news_cat_details where Cat_ID='$Cat_ID' ")Or Die(MySQL_Error());
/// cer
while($edit = mysql_fetch_array($edit_proj)){ 
extract($edit);
?>
<form action="?action=getdel_details" method="POST" name="delfile" id="delfile" dir="ltr">
<table width="600"  border="0" align="center">
<tr>
<td>Name</td>
<td><?php echo "$catname"; ?></td>
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
<input name="Cat_ID" type="hidden" id="Cat_ID" value=" <?php echo "$Cat_ID"; ?> ">
<input name="catid" type="hidden" id="catid" value=" <?php echo "$catid"; ?> ">
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
$Cat_ID=@$_POST["Cat_ID"];
$catid=@$_POST["catid"];
if ($doit =="no")
{
echo "
<div align='center'><strong><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><br>
<br>
You choose not to delete the details, wait until you redirected ... </font></strong></div>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='?action=edit&catid=$catid'>";
}
else {
//////////////////////////////////////
//// result
///////////
$in = mysql_query (" DELETE FROM news_cat_details WHERE Cat_ID='$Cat_ID' ") 
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
$view_all = mysql_query("SELECT * FROM news_cat_details WHERE catid='{$_GET['catid']}' order by catname ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 
$numv=mysql_num_rows($view_all);
$view_pages = mysql_query("SELECT * FROM news_cat WHERE catid='{$_GET['catid']}' order by catname ASC LIMIT 1")Or Die(MySQL_Error());
while($row_pages = mysql_fetch_array($view_pages)){ 
$PAGE_NAME_MAIN = stripslashes($row_pages['catname']);
}
/////////
echo "
<div  align='center'> PAGE NAME: <a href='?action=edit&catid={$_GET['catid']}' >$PAGE_NAME_MAIN</a> - <a href='?action=adddetails&catid={$_GET['catid']}' >Add A new details</a> <div/>
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
$catid = $action['catid'];
$catname = stripslashes($action['catname']);
// go on
echo "
<table width='64%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0066CC' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse' > 
<tr align='center'>
<td width='87%' align='left'><FONT color=#52557c><SPAN lang=en-us><a href='../news_cat.php?catid=$catid' target='_blank'>$catname</a></SPAN></FONT></td>
<td width='7%'><a href='?action=update_details&Cat_ID=$Cat_ID'>Edit</a></td>
<td width='6%' height='25' valign='middle'><a href='?action=del_details&Cat_ID=$Cat_ID'>Delete</a></td>
</tr> 
</table>
";
}
/////////////////////////
mysql_free_result($view_all);
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM news_cat_details WHERE catid='{$_GET['catid']}' "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1) {
echo "<center>Select a Page<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=view_details&catid={$_GET['catid']}&page=$prev\"><<Previous</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){
if ($total_pages > 1) { 
echo "$i "; 
}
} else { 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=view_details&catid={$_GET['catid']}&page=$i\">$i</a> "; 
} 
} 
// Build Next Link
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=view_details&catid={$_GET['catid']}&page=$next\">Next>></a>"; 
} 
echo "</center>";
} /// no pages there
else {
echo "No pages available currently";
}
////////------------------------------------------------------------------------------
break; 
///////////////////////////////////////////////////////////////////////////////////////
} // end switch
?>
&nbsp;</p>
</div>
</body>
</html>
<?php
} /// end else not logedin 

?>