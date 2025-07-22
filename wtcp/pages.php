<?php
include ('includes/header.php');
/*include("rte/fckeditor.php") ;*/
//////////////////////////////////////////////////
if ($authorization != '1') {
print "<script language=\"JavaScript\">";
print "window.location = 'login.php' ";
print "</script>";/* include ("login.php");  Redirect browser */
exit;
} else { 


$FileFullName = $_SERVER["SCRIPT_NAME"];
$breakFullName = explode('/', $FileFullName);
$FileName = $breakFullName[count($breakFullName) - 1]; 
$EditorDir = str_replace("$FileName","",$_SERVER["SCRIPT_NAME"]);
//echo str_replace("$FileName","",$_SERVER["SCRIPT_NAME"]); 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>الصفحات</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
</head>
<body>
<?php
switch(@$_GET['action']){ 
////////////////////////////////
case "search"; 
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?" method="get" name="search" id="search">
<p align="center"><span class="box"><font color='#003399' face="Arial, Helvetica, sans-serif"><strong>Search for a page</strong></font></span></p>
<TABLE width="500" align="center" cellpadding="3" class=box>
<TBODY>
<TR>
<TD width="108" class=box><strong><font face="Arial, Helvetica, sans-serif">أسم الصفحة</font></strong></TD>
<TD width="372" class=box><input name="name" type="text" id="name"></TD>
</TR>
<TR>
<TD class=box><input name="action" type="hidden" id="action" value="result"></TD>
<TD class=box><input type="submit" name="Submit" value="بحث"></TD>
</TR>
</TBODY>
</TABLE>
</form>
<?php
//////////
break; 
////////////
case "result"; 
if ($_GET['name'] =="")
{
echo "
<p>&nbsp;</p>
<p align='center'><font size='3'><strong><font color='#FF0000'>You did not enter a name </font></strong></font></p>
";
}
else
{
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
$view_all = mysql_query("SELECT * FROM pages Where name LIKE '%{$_GET['name']}%' order by page_id ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 
/////////
$num=mysql_num_rows($view_all);
if($num==0){ 
print"
<div align='center'><font size='4'><strong><font color='#FF0000'>
No result for your search
</font></strong></font>
"; 
} else {
echo "
<div align='center'  dir='ltr' lang='en' > 
<center> 
<table width='64%' height='46' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0066CC' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
<td width='5%'><div align='center'><font size='2' face='Arial, Helvetica, sans-serif'>ID</font></div></td> 
<td width='56%'><font size='2' face='Arial, Helvetica, sans-serif'>Page name </font></td>
<td width='24%'><font size='2' face='Arial, Helvetica, sans-serif'>images</font></td>
<td width='6%' height='44' valign='middle'><div align='center'><font size='2' face='Arial, Helvetica, sans-serif'><span lang='ar-sa'>Edit</span></font></div></td> 
<td width='9%' height='44' valign='middle'><div align='center'></div> 
<p align='center'><font size='2' face='Arial, Helvetica, sans-serif'><span lang='en-us'>Delete</span></font></td>
</tr> 
</table>
";
// data input
while($do = mysql_fetch_array($view_all)){ 
extract ($do);
///////// calculate the sub-pages inside the page
$inside_num = mysql_query("select * from pages_images WHERE page_id='$page_id' ") Or Die(MySQL_Error());
$num=mysql_num_rows($inside_num);
//////////	
echo "
<div align='center'  dir='ltr' lang='en' > 
<center> 
<table width='64%' height='46' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0066CC' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
<td width='5%'><div align='center'><FONT face='Arial, Helvetica, sans-serif' color=#52557c size=2><SPAN lang=en-us>$page_id</SPAN></FONT></div></td> 
<td width='56%'><FONT face='Arial, Helvetica, sans-serif' color=#52557c size=2><SPAN lang=en-us>$name</SPAN></FONT></td>
<td width='14%'><font size='2' face='Arial, Helvetica, sans-serif'><a href='pages.php?action=addimage&page_id=$page_id'><span lang='en-us'>Add</span></a></font></td>
<td width='10%'><font size='2' face='Arial, Helvetica, sans-serif'><a href='pages.php?action=view&page_id=$page_id'><span lang='en-us'>View all($num)</span></a></font></td>
<td width='6%' height='44' valign='middle'><div align='center'><font size='2' face='Arial, Helvetica, sans-serif'><a href='pages.php?action=editpage&page_id=$page_id'><span lang='en-us'>Edit</span></a></font></div></td> 
<td width='9%' height='44' valign='middle'><div align='center'></div> 
<p align='center'><font size='2' face='Arial, Helvetica, sans-serif'><span lang='en-us'><a href='pages.php?action=delpage&page_id=$page_id'>Delete</a></span></font></td>
</tr> 
</table>
";
}
/////////////////////////
mysql_free_result($inside_num); 
mysql_free_result($view_all);
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM pages Where name LIKE '%{$_GET['name']}%' "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1 ) {
echo "<center>Select a Page<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=result&name={$_GET['name']}&page=$prev\"><<Previous</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
if ($total_pages > 1 ) {
echo "$i "; 
}
} else { 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=result&name={$_GET['name']}&page=$i\">$i</a> "; 
} 
} 
// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?action=result&name={$_GET['name']}&page=$next\">Next>></a>"; 
} 
echo "</center>";
} // end else if exist
} // end if name posted
/////////////////
break; 
///////////
/////////////////////
case "add"; 
//////////////////////////////////////////////////////////////////////////////////////////
if(isset($_SESSION['pactive']) && $_SESSION['pactive'] !="novalue")
{
if ($_SESSION['pactive'] =="1")
{
// session foo is set
$getact = "
<option value='novalue'>Select Status</option>
<option value='1' selected>Active</option>
<option value='0'>None Active</option>
";
}
elseif($_SESSION['pactive'] =="0")
{
// session foo is set
$getact = "
<option value='novalue'>Select Status</option>
<option value='1'>Active</option>
<option value='0' selected>None Active</option>
";
}
/////////////////////////////////////////////
} else { 
$getact = "
<option value='novalue'>Select Status</option>
<option value='1'>Active</option>
<option value='0'>None Active</option>
";
}
///////////////
?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<form name=vbform action="?action=addpage" method="post">
<table width="95%"  border="0" align="center" cellpadding="2" cellspacing="2">
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td width="97"><span class="text">اسم الصفحة<font color="#FF0000">*</font></span></td>
<td width="1072"><font size="2" face="Verdana">
<input name="name" id="name" value="<?php  echo @$_SESSION['pname']; ?>" size="40">
</font></td>
</tr>
<tr>
<td valign="top">نص الصفحة <span class="text"></span><strong><span class="text"><font color="#FF0000">*</font></span></strong></td>
<td>
<?php
if (isset($_SESSION['ptext'])) {$message_info = $_SESSION['ptext'];} else {$message_info = '';}
///////
/*$oFCKeditor = new FCKeditor('message') ;
$oFCKeditor->BasePath = 'rte/';
$oFCKeditor->Value = "$message_info";
$oFCKeditor->Width  = '100%' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Create() ;*/
?>
<textarea cols="80" id="message" name="message" rows="10"><?php echo "$message_info"; ?></textarea>	
<script type="text/javascript">
// This is a check for the CKEditor class. If not defined, the paths must be checked.
if ( typeof CKEDITOR == 'undefined' )
{
document.write(
'<strong><span style="color: #ff0000">Error</span>: CKEditor not found</strong>.' +
'This sample assumes that CKEditor (not included with CKFinder) is installed in' +
'the "/ckeditor/" path. If you have it installed in a different place, just edit' +
'this file, changing the wrong paths in the &lt;head&gt; (line 5) and the "BasePath"' +
'value (line 32).' ) ;
}
else
{
var editor = CKEDITOR.replace( 'message' );
//editor.setData( '<p>Just click the <b>Image</b> or <b>Link</b> button, and then <b>&quot;Browse Server&quot;</b>.</p>' );
// Just call CKFinder.setupCKEditor and pass the CKEditor instance as the first argument.
// The second parameter (optional), is the path for the CKFinder installation (default = "/ckfinder/").
CKFinder.setupCKEditor( editor, '<?php echo $EditorDir;?>ckfinder/' ) ;
CKEDITOR.dtd.$removeEmpty['i'] = false;
CKEDITOR.dtd.$removeEmpty['div'] = false;
CKEDITOR.dtd.$removeEmpty['span'] = false;
CKEDITOR.dtd.$removeEmpty['li'] = false;
CKEDITOR.dtd.$removeEmpty['u'] = false;
CKEDITOR.dtd.$removeEmpty['a'] = false;
CKEDITOR.dtd.$removeEmpty['p'] = false;
CKEDITOR.dtd.$removeEmpty['h1'] = false;
CKEDITOR.dtd.$removeEmpty['h2'] = false;
CKEDITOR.dtd.$removeEmpty['h3'] = false;
CKEDITOR.dtd.$removeEmpty['h4'] = false;
CKEDITOR.dtd.$removeEmpty['h5'] = false;
CKEDITOR.dtd.$removeEmpty['h6'] = false;
// It is also possible to pass an object with selected CKFinder properties as a second argument.
// CKFinder.setupCKEditor( editor, { basePath : '../', skin : 'v1' } ) ;
}
</script>
</td>
</tr>
<tr>
<td colspan="2" bgcolor="#999999"><span class="style1">English Section</span></td>
</tr>
<tr>
<td><span class="text">English Name:<font color="#FF0000">*</font></span></td>
<td><font size="2" face="Verdana">
<input name="name_en" id="name_en" value="<?php  echo @$_SESSION['pname_en']; ?>" size="40">
</font></td>
</tr>
<tr>
<td valign="top"><span class="text">English</span> Text<span class="text">:</span><strong><span class="text"><font color="#FF0000">*</font></span></strong></td>
<td><?php
if (isset($_SESSION['ptext_en'])) {$text_en_info = $_SESSION['ptext_en'];} else {$text_en_info = '';}
///////
/*$oFCKeditor = new FCKeditor('text_en') ;
$oFCKeditor->BasePath = 'rte/';
$oFCKeditor->Value = "$text_en_info";
$oFCKeditor->Width  = '100%' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Create() ;*/
?>
<textarea cols="80" id="text_en" name="text_en" rows="10"><?php echo "$text_en_info"; ?></textarea>	
<script type="text/javascript">
// This is a check for the CKEditor class. If not defined, the paths must be checked.
if ( typeof CKEDITOR == 'undefined' )
{
document.write(
'<strong><span style="color: #ff0000">Error</span>: CKEditor not found</strong>.' +
'This sample assumes that CKEditor (not included with CKFinder) is installed in' +
'the "/ckeditor/" path. If you have it installed in a different place, just edit' +
'this file, changing the wrong paths in the &lt;head&gt; (line 5) and the "BasePath"' +
'value (line 32).' ) ;
}
else
{
var editor = CKEDITOR.replace( 'text_en' );
//editor.setData( '<p>Just click the <b>Image</b> or <b>Link</b> button, and then <b>&quot;Browse Server&quot;</b>.</p>' );
// Just call CKFinder.setupCKEditor and pass the CKEditor instance as the first argument.
// The second parameter (optional), is the path for the CKFinder installation (default = "/ckfinder/").
CKFinder.setupCKEditor( editor, '<?php echo $EditorDir;?>ckfinder/' ) ;
CKEDITOR.dtd.$removeEmpty['i'] = false;
CKEDITOR.dtd.$removeEmpty['div'] = false;
CKEDITOR.dtd.$removeEmpty['span'] = false;
CKEDITOR.dtd.$removeEmpty['li'] = false;
CKEDITOR.dtd.$removeEmpty['u'] = false;
CKEDITOR.dtd.$removeEmpty['a'] = false;
CKEDITOR.dtd.$removeEmpty['p'] = false;
CKEDITOR.dtd.$removeEmpty['h1'] = false;
CKEDITOR.dtd.$removeEmpty['h2'] = false;
CKEDITOR.dtd.$removeEmpty['h3'] = false;
CKEDITOR.dtd.$removeEmpty['h4'] = false;
CKEDITOR.dtd.$removeEmpty['h5'] = false;
CKEDITOR.dtd.$removeEmpty['h6'] = false;
// It is also possible to pass an object with selected CKFinder properties as a second argument.
// CKFinder.setupCKEditor( editor, { basePath : '../', skin : 'v1' } ) ;
}
</script>
</td>
</tr>
<tr>
<td><font size="2" face="Verdana">
<input name="page_order" type="hidden" id="page_order" value="0">
<input name="active" type="hidden" id="active" value="1">
</font></td>
<td><font size="2" face="Verdana">
<span class="controlbar">
<input type=submit value=    Add      name=submit>
</span></font></td>
</tr>
</table>
</form>
<br>
<?php
break; 
///////////////
//////////
case "addpage"; 
//////////////////////////////////
//////////
//Check the (magic_quotes_gpc) if it is (off) ... if (Off), do (Add slashes) ... this is helpful for protection
/*if(!get_magic_quotes_gpc()) 
{ 
// Get what is in the  ($_POST)  and (Add slashes) to it
foreach($_POST as $k=>$v) 
{ 
$_POST[$k] = addslashes($v); 
} // end for
} // end if
////////////////////*/
/////////////////////
///////sessions files///////////
$_SESSION['pname'] = @$_POST['name'];
$_SESSION['pname_en'] = @$_POST['name_en'];
$_SESSION['ptext'] = @$_POST['message'];
$_SESSION['ptext_en'] = @$_POST['text_en'];
$_SESSION['porder'] = @$_POST['page_order'];
$_SESSION['pactive'] = @$_POST['active'];
////////////////ck
$name = @$_POST['name'];
$name_en = @$_POST['name_en'];
$text = @$_POST['message'];
$text_en = @$_POST['text_en'];
$page_order = @$_POST['page_order'];
$active = @$_POST['active'];
$name = trim ($name);
$text = trim ($text);
/////////////////////////////////////////////////   
// Figure out the total number of chracters in the text: 
$total_characters = strlen ($text);
////////////////////
if ($name =="")
{
print "
<div align='center'><font color='#FF0000'><strong>
please write the page name ... go back
</strong></font></div>
";
}
elseif ($text =="")
{
print "
<div align='center'><font color='#FF0000'><strong>
please write the text ... go back
</strong></font></div>
";
}elseif (!numbers_only($page_order)){
print "
<div align='center'><font color='#FF0000'><strong>
The order of the page field required
</br>
Also, make sure it is a number ... go back
</strong></font></div>
";
}
elseif ($active =="novalue")
{
print "
<div align='center'><font color='#FF0000'><strong>
please choose an activation Status ... go back
</strong></font></div>
";
} 
else {
// data input
// ck ID if exist
$query = mysql_query("SELECT page_id FROM pages WHERE name='$name'") Or Die(MySQL_Error()); 
// if select detact more than 0 result exit
if(mysql_num_rows($query) > 0) 
{ 
// print error already exist
echo '
<div align="center"><font color="#FF0000"><strong>The page name ('.$name.') already exist</strong></font></div>
'; 
} else {
//free the memory from the select result
mysql_free_result($query); 
////////////////
// variables
$name = addslashes($name); 
$name_en = addslashes($name_en); 
$text = addslashes($text); 
$text_en = addslashes($text_en); 
$date = date('l, j F Y');
// add to admin table
$in = MySQL_Query("INSERT INTO pages (name,text,name_en,text_en,page_order,last_updated,active) VALUES ('$name', '$text','$name_en', '$text_en','$page_order','$date','$active')") 
Or Die(MySQL_Error()); 
if(!$in) 
{echo "<p align='center'><font color='#FF0000'><strong>Error</strong></font></p>";}
else {
///////
unset($_SESSION['pname']);
unset($_SESSION['ptext']);
unset($_SESSION['porder']);
unset($_SESSION['pactive']);
echo "
<p align='center'><strong><font size='4'> Page hass been added successfully </font></strong></p> 
<meta http-equiv='refresh' content='1; url=pages.php'>
";
} // end echo
} // end if exist
}// end else 
///////////////////////////////////////
break; 
//////////////////////////////////
case "editpage"; 
$page_id = $_GET['page_id'];
$edit_com = mysql_query("select * from pages where page_id='$page_id' ")Or Die(MySQL_Error());
/// cer
while($action = mysql_fetch_array($edit_com)){ 
extract($action);
//////////////
if ($active =="1"){
$getact = "
<option value='novalue'>Select Status</option>
<option value='1' selected>Active</option>
<option value='0'>None Active</option>
";
} elseif($active =="0"){
$getact = "
<option value='novalue'>Select Status</option>
<option value='1'>Active</option>
<option value='0' selected>None Active</option>
";
} else { 
$getact = "
<option value='novalue'>Select Status</option>
<option value='1'>Active</option>
<option value='0'>None Active</option>
";
}
/////
///////////////
$text_en =  stripslashes($text_en) ;
$text =  stripslashes($text) ;
?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<form action="?action=updatepage" method="post" name="page_form" id="page_form">
<table width="95%"  border="0" align="center" cellpadding="2" cellspacing="2">
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td width="98"><span class="text">اسم الصفحة<font color="#FF0000">*</font></span></td>
<td width="1071"><font size="2" face="Verdana">
<input name="name" id="name" value="<?php echo "$name"; ?>" size="40">
</font></td>
</tr>
<tr>
<td valign="top">نص الصفحة<span class="text"></span><strong><span class="text"><font color="#FF0000"> *</font></span></strong></td>
<td><?php
///////
/*$oFCKeditor = new FCKeditor('message') ;
$oFCKeditor->BasePath = 'rte/';
$oFCKeditor->Value = "$text";
$oFCKeditor->Width  = '100%' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Create() ;*/
?>	 
<textarea cols="80" id="message" name="message" rows="10"><?php echo "$text"; ?></textarea>	
<script type="text/javascript">
// This is a check for the CKEditor class. If not defined, the paths must be checked.
if ( typeof CKEDITOR == 'undefined' )
{
document.write(
'<strong><span style="color: #ff0000">Error</span>: CKEditor not found</strong>.' +
'This sample assumes that CKEditor (not included with CKFinder) is installed in' +
'the "/ckeditor/" path. If you have it installed in a different place, just edit' +
'this file, changing the wrong paths in the &lt;head&gt; (line 5) and the "BasePath"' +
'value (line 32).' ) ;
}
else
{
var editor = CKEDITOR.replace( 'message' );
//editor.setData( '<p>Just click the <b>Image</b> or <b>Link</b> button, and then <b>&quot;Browse Server&quot;</b>.</p>' );
// Just call CKFinder.setupCKEditor and pass the CKEditor instance as the first argument.
// The second parameter (optional), is the path for the CKFinder installation (default = "/ckfinder/").
CKFinder.setupCKEditor( editor, '<?php echo $EditorDir;?>ckfinder/' ) ;
CKEDITOR.dtd.$removeEmpty['i'] = false;
CKEDITOR.dtd.$removeEmpty['div'] = false;
CKEDITOR.dtd.$removeEmpty['span'] = false;
CKEDITOR.dtd.$removeEmpty['li'] = false;
CKEDITOR.dtd.$removeEmpty['u'] = false;
CKEDITOR.dtd.$removeEmpty['a'] = false;
CKEDITOR.dtd.$removeEmpty['p'] = false;
CKEDITOR.dtd.$removeEmpty['h1'] = false;
CKEDITOR.dtd.$removeEmpty['h2'] = false;
CKEDITOR.dtd.$removeEmpty['h3'] = false;
CKEDITOR.dtd.$removeEmpty['h4'] = false;
CKEDITOR.dtd.$removeEmpty['h5'] = false;
CKEDITOR.dtd.$removeEmpty['h6'] = false;
// It is also possible to pass an object with selected CKFinder properties as a second argument.
// CKFinder.setupCKEditor( editor, { basePath : '../', skin : 'v1' } ) ;
}
</script>
</td>
</tr>
<tr>
<td colspan="2" bgcolor="#999999"><span class="style1">English Section</span></td>
</tr>
<tr>
<td><span class="text">English Name:<font color="#FF0000">*</font></span></td>
<td><font size="2" face="Verdana">
<input name="name_en" id="name_en" value="<?php echo "$name_en"; ?>" size="40">
</font></td>
</tr>
<tr>
<td valign="top"><span class="text">English</span> Ttext<span class="text">:</span><strong><span class="text"><font color="#FF0000">*</font></span></strong></td>
<td><?php
///////
/*$oFCKeditor = new FCKeditor('text_en') ;
$oFCKeditor->BasePath = 'rte/';
$oFCKeditor->Value = "$text_en";
$oFCKeditor->Width  = '100%' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Create() ;*/
?>
<textarea cols="80" id="text_en" name="text_en" rows="10"><?php echo "$text_en"; ?></textarea>	
<script type="text/javascript">
// This is a check for the CKEditor class. If not defined, the paths must be checked.
if ( typeof CKEDITOR == 'undefined' )
{
document.write(
'<strong><span style="color: #ff0000">Error</span>: CKEditor not found</strong>.' +
'This sample assumes that CKEditor (not included with CKFinder) is installed in' +
'the "/ckeditor/" path. If you have it installed in a different place, just edit' +
'this file, changing the wrong paths in the &lt;head&gt; (line 5) and the "BasePath"' +
'value (line 32).' ) ;
}
else
{
var editor = CKEDITOR.replace( 'text_en' );
//editor.setData( '<p>Just click the <b>Image</b> or <b>Link</b> button, and then <b>&quot;Browse Server&quot;</b>.</p>' );
// Just call CKFinder.setupCKEditor and pass the CKEditor instance as the first argument.
// The second parameter (optional), is the path for the CKFinder installation (default = "/ckfinder/").
CKFinder.setupCKEditor( editor, '<?php echo $EditorDir;?>ckfinder/' ) ;
CKEDITOR.dtd.$removeEmpty['i'] = false;
CKEDITOR.dtd.$removeEmpty['div'] = false;
CKEDITOR.dtd.$removeEmpty['span'] = false;
CKEDITOR.dtd.$removeEmpty['li'] = false;
CKEDITOR.dtd.$removeEmpty['u'] = false;
CKEDITOR.dtd.$removeEmpty['a'] = false;
CKEDITOR.dtd.$removeEmpty['p'] = false;
CKEDITOR.dtd.$removeEmpty['h1'] = false;
CKEDITOR.dtd.$removeEmpty['h2'] = false;
CKEDITOR.dtd.$removeEmpty['h3'] = false;
CKEDITOR.dtd.$removeEmpty['h4'] = false;
CKEDITOR.dtd.$removeEmpty['h5'] = false;
CKEDITOR.dtd.$removeEmpty['h6'] = false;

// It is also possible to pass an object with selected CKFinder properties as a second argument.
// CKFinder.setupCKEditor( editor, { basePath : '../', skin : 'v1' } ) ;
}
</script>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><span class="controlbar"><font size="2" face="Verdana">
<input name="page_order" type="hidden" id="page_order" value="0">
<input name="active" type="hidden" id="active" value="1">
<input name="page_id" type="hidden" id="page_id" value="<?php echo "$page_id"; ?>">
</font></span></td>
<td><span class="controlbar">
<input type=submit value=Edit name=submit>
</span></td>
</tr>
</table>
</form>
<?php
}
break; 
///////////////////
/////////////////////
case "updatepage"; 
//////////
//CK the (magic_quotes_gpc) if it is (off) ... this is helpful to protection
/*if(!get_magic_quotes_gpc()) 
{ 
// Get what is in the  ($_POST) 
foreach($_POST as $k=>$v) 
{ 
$_POST[$k] = addslashes($v); 
} 
} */
//////////////////////
/////////////////////
//// info
$page_id = @$_POST["page_id"];
$name = @$_POST['name'];
$text = @$_POST['message'];
$name_en = @$_POST['name_en'];
$text_en = @$_POST['text_en'];
$page_order = @$_POST['page_order'];
$active = @$_POST['active'];
//echo $_POST['message'];
/////////////
$name = trim ($name);
$text = trim ($text);
/////////////////////////////////////////////////   
// Figure out the total number of chracters in the text: 
$total_characters = strlen ($text);
///////////////////
if ($name =="")
{
print "
<div align='center'><font color='#FF0000'><strong>
please write the page name ... go back
</strong></font></div>
";
}
elseif ($text =="")
{
print "
<div align='center'><font color='#FF0000'><strong>
please write the text ... go back
</strong></font></div>
";
}elseif (!numbers_only($page_order)){
print "
<div align='center'><font color='#FF0000'><strong>
The order of the page field required
</br>
Also, make sure it is a number ... go back
</strong></font></div>
";
}
elseif ($active =="novalue")
{
print "
<div align='center'><font color='#FF0000'><strong>
please choose an activation Status ... go back
</strong></font></div>
";
} else {
////////////////
////////////
$date = date('l, j F Y');
$name = addslashes($name); 
$name_en = addslashes($name_en); 
$text = addslashes($text); 
$text_en = addslashes($text_en); 
// add to table
$in = mysql_query (" UPDATE pages SET name='$name' , text='$text', name_en='$name_en' , text_en='$text_en', page_order='$page_order' , last_updated='$date' , active='$active' WHERE page_id='$page_id' ") 
Or Die(MySQL_Error()); 
if(!$in) 
{echo "<p align='center'><font color='#FF0000'><strong>Error, Not done </strong></font></p>";}
else 
{echo "<p align='center'><strong><font size='4'>Page hass been edited successfully </font></strong></p> <meta http-equiv='refresh' content='4; url=pages.php'>";}
}// end else
/////////////////////////////////////////////////
break; 
//////////////////
/////////////////
case "delpage"; 
$page_id=@$_GET['page_id'];
$del_comp = mysql_query("select * from pages where page_id='$page_id' ");
/// cer
while($action = mysql_fetch_array($del_comp)){ 
extract($action);
$text = nl2br($text);
echo "
<form action=pages.php?action=delpageok method='POST' name='reg' id='reg' dir='rtl'>
<table width='572' border='0' align='center' cellpadding='3' cellspacing='0'>
<tr valign='top' class='bodytextgrey'>
<td class='text'><strong>أسم الصفحة:</strong></td>
<td width='475'><font size='2' face='Verdana'>$name</font><font size='2' face='Verdana'>&nbsp; </font><font face='Verdana'><font size='2' face='Verdana'>
<input name='page_id' id='page_id' value='$page_id' type='hidden'>
</font></font><font size='2' face='Verdana'>&nbsp;        </font></td>
</tr>
<tr valign='top'>
<td class='text'><strong>النص:</strong></td>
<td>$text</td>
</tr>
<tr>
<td class='text'>&nbsp;</td>
<td><strong><font color='#FF0000'>هل تود فعلا حذف هذه الصفحة؟ </font></strong> </td>
</tr>
<tr>
<td class='text'>&nbsp;</td>
<td><font face='Arial, Helvetica, sans-serif'><span class='maintext'><span class='text'>
<font size='2'>
<input name='doit' type='radio' value='no' checked>
لا</font></span> <font size='2'>
<input name='doit' type='radio' value='yes'>
نعم </font></span></font></td>
</tr>
<tr>
<td width='85' class='text'>&nbsp;</td>
<td><span class='maintext'>
<input name='submit' type=submit id='submit' value='قم بالتنفيذ'>
</span></td>
</tr>
</table>
</FORM>
";
}
break; 
/////////////////////////////////////
case "delpageok"; 
//// result
if ($_POST['doit'] =="no")
{
echo "
<div align='center'><strong><font color='#0000FF' size='4' face='Arial, Helvetica, sans-serif'><br>
<br>
أخترت عدم حذف الصفحة .. أنتظر قليلا حتى يتم إعادة توجيهك </font></strong></div>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='javascript:history.go(-2);'>";
}
else {
$page_id=@$_POST['page_id'];
//// result
$in = mysql_query (" DELETE FROM pages WHERE page_id='$page_id' ") 
Or Die(MySQL_Error());
// data input
echo " 
<p align='center'><font color='#FF0000' face='Arial, Helvetica, sans-serif'  size='4'><strong>تم حذف الصفحة بنجاح</strong></font></p> 
<meta http-equiv='refresh' content='4; url=pages.php'>
";
} // end else
////========================================================================
break; 
////////////////////////////////////////////////////////////////////////////
/*
Main control
*/
default: 
if(!isset($_GET['page'])){ 
$page = 1; 
} else { 
$page = $_GET['page']; 
} 
// Define the number of results per page 
$max_results = 60; 
// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 
// Perform MySQL query on only the current page number's results 
$view_all = mysql_query("SELECT * FROM pages order by name ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 
$numv=mysql_num_rows($view_all);
/////////
echo "
<div  align='center'> <a href='pages.php?action=add' >Add A new page</a> <div/>
<br/><br/>
<table width='64%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0066CC' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr >
<td width='87%'>Page name</td>
<td width='7%'>Edit</td>
<td width='6%' height='25' valign='middle'>Delete</td>
</tr> 
</table>
"; 
if ($numv > 0)
{
///////
while($action = mysql_fetch_array($view_all)){ 
extract($action);
$page_id = $action['page_id'];
$name_en = stripslashes($name_en);
$name = stripslashes($name);
// go on
echo "
<table width='64%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0066CC' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr >
<td width='87%'><FONT color=#52557c><SPAN lang=en-us><a href='../pages.php?page_id=$page_id' target='_blank'>$name_en</a></SPAN></FONT></td>
<td width='7%'><a href='pages.php?action=editpage&page_id=$page_id'>Edit</a></td>
<td width='6%' height='25' valign='middle'><a href='pages.php?action=delpage&page_id=$page_id'>Delete</a></td>
</tr> 
</table>
";
}
/////////////////////////
mysql_free_result($view_all);
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM pages "),0); 
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 
// Build Page Number Hyperlinks 
if ($total_pages > 1) {
echo "<center>Select a Page<br />"; 
}
// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
} 
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){
if ($total_pages > 1) { 
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
} /// no pages there
else {
echo "No pages available currently";
}
/////////////////
// resulte close
} 
?>
</div>
</body>
</html>

<?php

}

?>