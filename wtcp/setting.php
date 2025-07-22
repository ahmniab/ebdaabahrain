<?php
include ('includes/header.php');
//include("../rte/fckeditor.php") ;
//////////////////////////////////////////////////
if ($authorization != '1') {
print "<script language=\"JavaScript\">";
print "window.location = 'login.php?refer={$_SERVER['REQUEST_URI']}' ";
print "</script>";
//header("Location: login.php"); /* Redirect browser */
/* include ("login.php");  Redirect browser */
exit;
} else { 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Setting</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<br>
<br>
<table width="90%" border="0" align="center" cellpadding="1" cellspacing="0">
<tr>
<td align="center">
<?php
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
//====================================
trim ($_POST['site_name']);
trim ($_POST['site_add']);
trim ($_POST['email']);
trim ($_POST['upload_dir']);
trim ($_POST['meta_keywords']);
trim ($_POST['meta_description']);
////////////////////////////////////////
if ($_POST['site_name'] == "") {
echo "
<span class='error'>
<strong>
الرجاء كتابة أسم الموقع
</strong>
</span>
";
} elseif ($_POST['site_add'] == "") {
echo "
<span class='error'>
<strong>
الرجاء كتابة عنوان الموقع
</strong>
</span>
";
} elseif ($_POST['email'] == "") {
echo "
<span class='error'>
<strong>
الرجاء كتابة بريد الموقع
</strong>
</span>
";
} elseif (!isemail($_POST['email'])) {
echo "
<span class='error'>
<strong>
الرجاء كتابة بريد الموقع بشكل صحيح
</strong>
</span>
";
} elseif ($_POST['b_email'] == "") {
echo "
<span class='error'>
<strong>
الرجاء كتابة بريد البيع و الشراء
</strong>
</span>
";
} elseif (!isemail($_POST['b_email'])) {
echo "
<span class='error'>
<strong>
الرجاء كتابة بريد البيع والشراء بشكل صحيح
</strong>
</span>
";
} elseif ($_POST['upload_dir'] == "") {
echo "
<span class='error'>
<strong>
الرجاء كتابة فولدر التحميل
</strong>
</span>
";
} elseif ($_POST['meta_keywords'] == "") {
echo "
<span class='error'>
<strong>
الرجاء كتابة الكلمات المفتاحية
</strong>
</span>
";
} elseif ($_POST['meta_description'] == "") {
echo "
<span class='error'>
<strong>
الرجاء كتابة وصف قصير لهوية الموقع
</strong>
</span>
";
} else{
/// update_records
$update_records = mysql_query ("
UPDATE setting SET site_name='{$_POST['site_name']}' , site_add='{$_POST['site_add']}' , email='{$_POST['email']}'  , meta_keywords='{$_POST['meta_keywords']}'  , meta_description='{$_POST['meta_description']}' , b_email='{$_POST['b_email']}' , upload_dir='{$_POST['upload_dir']}'  , thumb_width='{$_POST['thumb_width']}' , thumb_width='{$_POST['thumb_width']}' , thumb_height='{$_POST['thumb_height']}', image_width='{$_POST['image_width']}', image_height='{$_POST['image_height']}', auto_thumb='{$_POST['auto_thumb']}', stamp_dir='{$_POST['stamp_dir']}', image_active='{$_POST['image_active']}', view_auction='{$_POST['view_auction']}', members_active='{$_POST['members_active']}', img_view_type='{$_POST['img_view_type']}', auto_stamp='{$_POST['auto_stamp']}', allow_comments='{$_POST['allow_comments']}', allow_images='{$_POST['allow_images']}', allow_articles='{$_POST['allow_articles']}', allow_news='{$_POST['allow_news']}', allow_numbers='{$_POST['allow_numbers']}', allow_dedication='{$_POST['allow_dedication']}', allow_links='{$_POST['allow_links']}', allow_cart='{$_POST['allow_cart']}', allow_gateway='{$_POST['allow_gateway']}', admin_email_notify='{$_POST['admin_email_notify']}' , image_notify='{$_POST['image_notify']}' , news_thumb_width='{$_POST['news_thumb_width']}' , news_thumb_height='{$_POST['news_thumb_height']}' , news_image_width='{$_POST['news_image_width']}' , news_image_height='{$_POST['news_image_height']}' , default_lang ='{$_POST['default_lang']}'
WHERE set_id='1' ") or die(mysql_error()); 
/// END update_records
if(!$update_records) {
echo "
<span class='error'>
<strong>
خلل .. لم يتم التحديث
</strong>
</span>
"; 
} else { 
echo "<span class='a_text'><strong> Setting has been updated</strong></span>";
/*echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='setting.php?'>";*/
} // end else data
} ///////// end else
///////////////////////////////////////////////////////////////////////////////////////
} // END IF SET
?>	
</td>
</tr>
</table>
<br>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="1">
<tr>
<td>
<?php
////////////
$view = mysql_query("SELECT * FROM setting where set_id='1' ")Or Die(mysql_error()); 
/////////////////////
while($show_set = mysql_fetch_array($view)){ 
extract($show_set);
?>	
<form action="" method="post" name="setting" id="setting">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
<tr>
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>General Options</strong></td>
</tr>
<tr align="right">
<td width="396" bgcolor="#CCCCCC"><input name="site_name" type="text" class="smalltext" id="site_name" dir="rtl" value="<?php echo stripslashes($site_name);?>" size="40" maxlength="255"></td>
<td width="190" bgcolor="#CCCCCC"><strong>Website Title</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="site_add" type="text" class="smalltext" id="site_add" value="<?php echo stripslashes($site_add);?>" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Website Address</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="email" type="text" class="smalltext" id="email" value="<?php echo stripslashes($email);?>" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Email</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="meta_keywords" type="text" class="smalltext" id="meta_keywords" value="<?php echo stripslashes($meta_keywords);?>" size="40" maxlength="255"  dir="rtl"></td>
<td bgcolor="#CCCCCC"><strong>Website Keywors</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="meta_description" type="text" class="smalltext" id="meta_description" value="<?php echo stripslashes($meta_description);?>" size="40" maxlength="255"  dir="rtl"></td>
<td bgcolor="#CCCCCC"><strong>Website Description</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><select name="default_lang" id="default_lang">
<?php
///// reg
$edit_lang = mysql_query("select * from lang ORDER BY name ASC");
/// cer
while($v_lang = mysql_fetch_array($edit_lang)){ 
extract($v_lang);
if ($v_lang['lang_id']==$show_set['default_lang']) {$select_info="selected";} else {$select_info="";}
echo "<option value='{$v_lang['lang_id']}' $select_info>{$v_lang['name']}</option>";
}
?>
</select></td>
<td bgcolor="#CCCCCC"><strong>Default Language</strong></td>
</tr>
<tr align="right">
<td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Items Options</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="upload_dir" type="text" class="smalltext" id="upload_dir" value="<?php echo stripslashes($upload_dir);?>" size="40" maxlength="255"></td>
<td bgcolor="#CCCCCC"><strong>Upload Folder</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC">
<select name="auto_thumb" class="smalltext" id="auto_thumb">
<?php if ($auto_thumb==1) { ?>
<option value="1" selected="selected">Yes</option>
<option value="0">No</option>
<?php } else { ?>
<option value="1">Yes</option>
<option value="0" selected="selected">No</option>
<?php } ?>
</select>				</td>
<td bgcolor="#CCCCCC"><strong>Resize on upload</strong></td>
</tr>
<tr align="right">
<td colspan="2" align="center" bgcolor="#EEEEEE">GALLERY - PRODUCTS</td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
<td width="49%" align="right"><input name="image_height" type="text" class="smalltext" id="image_height" dir="rtl" value="<?php echo stripslashes($image_height);?>" size="11" maxlength="11"></td>
<td width="9%" align="right">Length</td>
<td width="32%" align="right"><input name="image_width" type="text" class="smalltext" id="image_width" dir="rtl" value="<?php echo stripslashes($image_width);?>" size="11" maxlength="11"></td>
<td width="10%" align="right">width</td>
</tr>
</table></td>
<td bgcolor="#CCCCCC"><strong>Big Image</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
<td width="49%" align="right"><input name="thumb_height" type="text" class="smalltext" id="thumb_height" dir="rtl" value="<?php echo stripslashes($thumb_height);?>" size="11" maxlength="11"></td>
<td width="9%" align="right">Length</td>
<td width="32%" align="right"><input name="thumb_width" type="text" class="smalltext" id="thumb_width" dir="rtl" value="<?php echo stripslashes($thumb_width);?>" size="11" maxlength="11"></td>
<td width="10%" align="right">width</td>
</tr>
</table></td>
<td bgcolor="#CCCCCC"><strong>Small Image</strong></td>
</tr>
<tr align="right">
<td colspan="2" align="center" bgcolor="#EEEEEE">NEWS</td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
<td width="49%" align="right"><input name="news_image_height" type="text" class="smalltext" id="news_image_height" dir="rtl" value="<?php echo stripslashes($news_image_height);?>" size="11" maxlength="11"></td>
<td width="9%" align="right">Length</td>
<td width="32%" align="right"><input name="news_image_width" type="text" class="smalltext" id="news_image_width" dir="rtl" value="<?php echo stripslashes($news_image_width);?>" size="11" maxlength="11"></td>
<td width="10%" align="right">width</td>
</tr>
</table></td>
<td bgcolor="#CCCCCC"><strong>Big Image</strong></td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
<td width="49%" align="right"><input name="news_thumb_height" type="text" class="smalltext" id="news_thumb_height" dir="rtl" value="<?php echo stripslashes($news_thumb_height);?>" size="11" maxlength="11"></td>
<td width="9%" align="right">Length</td>
<td width="32%" align="right"><input name="news_thumb_width" type="text" class="smalltext" id="news_thumb_width" dir="rtl" value="<?php echo stripslashes($news_thumb_width);?>" size="11" maxlength="11"></td>
<td width="10%" align="right">width</td>
</tr>
</table></td>
<td bgcolor="#CCCCCC"><strong>Small Image</strong></td>
</tr>
<tr align="right">
<td colspan="2" align="center" bgcolor="#EEEEEE">&nbsp;</td>
</tr>
<tr align="right">
<td bgcolor="#CCCCCC"><input name="admin_email_notify" type="hidden" id="admin_email_notify" value="0">
<input name="allow_gateway" type="hidden" id="allow_gateway" value="0">
<input name="allow_cart" type="hidden" id="allow_cart" value="0">
<input name="allow_links" type="hidden" id="allow_links" value="0">
<input name="allow_news" type="hidden" id="allow_news" value="0">
<input name="allow_dedication" type="hidden" id="allow_dedication" value="0">
<input name="allow_numbers" type="hidden" id="allow_numbers" value="0">
<input name="allow_articles" type="hidden" id="allow_articles" value="0">
<input name="allow_comments" type="hidden" id="allow_comments" value="0">
<input name="image_active" type="hidden" id="image_active" value="0">
<input name="allow_images" type="hidden" id="allow_images" value="0">
<input name="members_active" type="hidden" id="members_active" value="0">
<input name="b_email" type="hidden" id="b_email" value="<?php echo stripslashes($b_email);?>">
<input name="image_notify" type="hidden" id="image_notify" value="0">
<input name="view_auction" type="hidden" id="view_auction" value="0">
<input name="stamp_dir" type="hidden" id="stamp_dir" value="غير متوفرة حاليا">
<input name="auto_stamp" type="hidden" id="auto_stamp" value="0">
<input name="img_view_type" type="hidden" id="img_view_type" value="1"></td>
<td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="Update"  style="width:60px;"></td>
</tr>
</table></td>
</tr>
</table>
</form>
<?php
} // END WHILE
?>    </td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</table>
</body>
</html>
<?php
} /// end else not logedin 
?>