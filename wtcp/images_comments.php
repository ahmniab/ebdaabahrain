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
<html><head>
<title>تعليقات المنتجات</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">


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
//-->
</script>



<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="350" align="center" class="text"><?php
////////////////////////////////////////////////////////////////////////////////////	  
switch(@$_GET['action']){ 
/////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////
default: 
//-----------------------------------------------------------------------------------

if (isset($_GET['file_id']) && $_GET['file_id']!='' && $_GET['file_id']!='0' && numbers_only($_GET['file_id'])) {
$_GET['file_id'] = intval($_GET['file_id']);
$file_id_Q = " AND  file_id='{$_GET['file_id']}'";
$file_id_U = "file_id={$_GET['file_id']}&";
} else {
$file_id_Q = "";
$file_id_U = "";
}

if (isset($_GET['status']) && $_GET['status']!=''  && numbers_only($_GET['status'])) {
$_GET['status'] = intval($_GET['status']);
$STATUS_Q = " AND  active='{$_GET['status']}'";
$STATUS_U = "status={$_GET['status']}&";
} else {
$STATUS_Q = "";
$STATUS_U = "";
}

//////////////
if(!isset($_GET['page'])){ 
    $page = 1; 
} else { 
    $page = $_GET['page']; 
} 

// Define the number of results per page 
$max_results = 15; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 

$comments_show = mysql_query("SELECT * FROM images_comments  WHERE file_id!='0' $file_id_Q $STATUS_Q ORDER BY id DESC LIMIT $from, $max_results")Or Die(MySQL_Error()); 
///////
$num=mysql_num_rows($comments_show);
if($num==0){ 
print"
<div align='center' class='text'>
نأسف لا توجد تعليقات حاليا
</div>
"; 
}
else {  

?>
<form name="form1" method="post" action="">


<br>

<div align="center">
<input name="delete" type="submit" id="delete" value="حذف المحدد"  onClick="return delete_confirm()">
&nbsp;&nbsp;
<input type="button" onClick="selectAllCheckBoxes('form1', 'checkbox[]', true);" value="تحديد الكل">
&nbsp;&nbsp;
<input type="button" onClick="selectAllCheckBoxes('form1', 'checkbox[]', false);" value="ازالة التحديد عن الكل">
</div>
              
<br>

        
        <br />
        <table width="488" border="0" align="center" cellpadding="1" cellspacing="0">
          <tr>
            <td colspan="2" align="right" valign="top" class="text"><table width="488" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="361" align="right">&nbsp;</td>
                  <td width="127" align="right"><img src="../images/comments.gif" width="16" height="16" /></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan="2" align="right" valign="top" class="text"><table width="488" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_" dir="rtl">
                <tr>
                  <td align="center" valign="top"  bgcolor="#FEFEFE" class="smalltext"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                      
                      <tr>
                        <td valign="top" >
<?php

while($row_comments = mysql_fetch_array($comments_show)){ 
extract($row_comments);

/////// -----------------------------
$view_comp = mysql_query("SELECT imageid,name FROM images WHERE imageid='{$row_comments['file_id']}' LIMIT 1")Or Die(MySQL_Error());
while($row_comp = mysql_fetch_array($view_comp)){
echo "<a href='images.php?action=edit&imageid={$row_comp['imageid']}' target='_blank'> التعليقات تخص: {$row_comp['name']} </a>"." - "."<a href='../details.php?id={$row_comp['imageid']}&name={$row_comp['name']}' target='_blank'> شاهد بالموقع </a>"; 
}
mysql_free_result($view_comp);
/////// -----------------------------

if ($active==1) {$active_info = "<strong><font color='#009900'>مفعل</font></strong>";} else {$active_info = "<span class='error'>معطل</span>";}
?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td ><table width="98%" border="0" align="center" cellpadding="1" cellspacing="0">
                                    <tr>
                                      <td colspan="2" align="right" valign="top" class="text"> <input name='checkbox[]' type='checkbox' id='checkbox[]' value='<?php echo $id;?>'> حذف جماعي 
                                        <table width="250" border="0" align="right" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="167" align="right"><?php echo $active_info;?></td>
                                            <td width="40" align="center"><a href="<?php echo $_SERVER['PHP_SELF'];?>?action=edit&id=<?php echo $id;?>">تعديل</a></td>
                                            <td width="43" align="center"><a href="<?php echo $_SERVER['PHP_SELF'];?>?action=del&id=<?php echo $id;?>">حذف</a></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td width="30%" align="right" valign="top" class="text"><strong>الاسم</strong></td>
                                      <td width="70%" align="right" valign="top" class="text"><?php 
////
echo stripslashes ($row_comments['name']);
////
?>                                      </td>
                                    </tr>
                                    <tr>
                                      <td align="right" valign="top" class="text"><strong>البريد الإلكتروني</strong></td>
                                      <td align="right" valign="top" class="text"><?php 
////
echo stripslashes ($row_comments['email']);
////
?></td>
                                    </tr>
                                    <tr>
                                      <td align="right" valign="top" class="text"><strong>الهاتف</strong></td>
                                      <td align="right" valign="top" class="text"><?php 
////
echo stripslashes ($row_comments['tel']);
////
?></td>
                                    </tr>
                                    <tr>
                                      <td align="right" valign="top" class="text"><strong>التعليق</strong></td>
                                      <td align="right" valign="top" class="text"><?php 
////
echo stripslashes ($row_comments['message']);
////
?></td>
                                    </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td><hr></td>
                              </tr>
                            </table>
                        <?php
} /// end while comments
mysql_free_result($comments_show);
?></td>
                      </tr>
                  </table></td>
                </tr>
                
            </table></td>
          </tr>
        </table>
        
        
</form>
<?php
if(isset($_POST['delete']) && isset($_POST['checkbox']) ){
//print_r($_POST);
$checkbox=$_POST['checkbox'];
//exit;
for($i=0;$i<count($checkbox);$i++){
$del_id = $checkbox[$i];
$sql = "DELETE FROM images_comments WHERE id='$del_id'";
$result = mysql_query($sql);
}
// if successful redirect to delete_multiple.php

if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=?{$file_id_U}{$STATUS_U}\">";
}
}
/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM images_comments  WHERE file_id!='0' $file_id_Q $STATUS_Q "),0); 

// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 

// Build Page Number Hyperlinks 
	if ($total_pages>1){
echo "<center dir='rtl'>Select a Page<br />"; 
}
// Build Previous Link 
if($page > 1){ 
    $prev = ($page - 1); 
    echo "<a href=\"".$_SERVER['PHP_SELF']."?{$file_id_U}{$STATUS_U}page=$prev\"><< السابق</a> "; 
} 

for($i = 1; $i <= $total_pages; $i++){ 
    if(($page) == $i){ 
	if ($total_pages>1){
        echo "$i "; 
		}
        } else { 
            echo "<a href=\"".$_SERVER['PHP_SELF']."?{$file_id_U}{$STATUS_U}page=$i\"> $i </a> "; 
    } 
} 

// Build Next Link 
if($page < $total_pages){ 
    $next = ($page + 1); 
    echo "<a href=\"".$_SERVER['PHP_SELF']."?{$file_id_U}{$STATUS_U}page=$next\">التالي >></a>"; 
} 
echo "</center>";

} //end in not exist

//-----------------------------------------------------------------------------------
break; 
/////////////////////////////////////////////////////////////////////////////////////
case "edit"; 
//-----------------------------------------------------------------------------------

if (!isset($_GET['id']) || $_GET['id']=='' || !numbers_only($_GET['id'])) { 
echo "
<div align='center' class='error'>
<strong>
أتبعت رابط خاطئ
</strong>
</div>
";

} else {
//////////////////////////////
$_GET['id'] = intval($_GET['id']);
//////////////////////////////
$comments_show = mysql_query("SELECT * FROM images_comments  WHERE id='{$_GET['id']}' ")Or Die(MySQL_Error()); 
///////
$num=mysql_num_rows($comments_show);
if($num==0){ 
print"
<div align='center' class='error'>
التعليق الذي تبحث عنه غير متواجد
</div>
"; 
}
else {  
while($row_comments = mysql_fetch_array($comments_show)){ 
extract($row_comments);

if ($active==1) {
$active_info = "
<option value='1' selected>مفعل</option>
<option value='0'>معطل</option>
";
} else {
$active_info = "
<option value='1'>مفعل</option>
<option value='0' selected>معطل</option>
";
}

?>
        <form id="edit_com" name="edit_com" method="post" action="?action=getedit">
          <table width="488" border="0" cellspacing="2" cellpadding="2" dir="rtl">
            
            <tr>
              <td ><table width="98%" border="0" align="center" cellpadding="1" cellspacing="0">
                  <tr>
                    <td width="30%" align="right" valign="top" class="text"><strong>الاسم</strong></td>
                    <td width="70%" align="right" valign="top" class="text"><input name="name" type="text" class="text" id="name" value="<?php echo stripslashes ($row_comments['name']);?>" />                    </td>
                  </tr>
                  <tr>
                    <td align="right" valign="top" class="text"><strong>البريد الإلكتروني</strong></td>
                    <td align="right" valign="top" class="text"><input name="email" type="text" class="text" id="email" value="<?php echo stripslashes ($row_comments['email']);?>" /></td>
                  </tr>
                  <tr>
                    <td align="right" valign="top" class="text"><strong>الهاتف</strong></td>
                    <td align="right" valign="top" class="text"><input name="tel" type="text" class="text" id="tel" value="<?php echo stripslashes ($row_comments['tel']);?>" /></td>
                  </tr>
                  <tr>
                    <td align="right" valign="top" class="text"><strong>التعليق</strong></td>
                    <td align="right" valign="top" class="text"><textarea name="message" cols="45" rows="5" class="text" id="message"><?php echo stripslashes ($row_comments['message']);?></textarea></td>
                  </tr>
                  <tr>
                    <td align="right" valign="top" class="text">الحالة</td>
                    <td align="right" valign="top" class="text"><select name='active' class="text" id='active'>
                        <?php echo $active_info; ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td align="right" valign="top" class="text"><input name="button" type="submit" class="text" id="button" value="تعــديــل" /></td>
                    <td align="right" valign="top" class="text"><input name="file_id" type="hidden" id="file_id" value="<?php echo $row_comments['file_id'];?>" />
                    <input name="id" type="hidden" id="id" value="<?php echo $row_comments['id'];?>" /></td>
                  </tr>
              </table></td>
            </tr>
          </table>
      </form>
      <?php
} // end while
} // end if not exist
} // end if not set
//-----------------------------------------------------------------------------------
break; 
/////////////////////////////////////////////////////////////////////////////////////
case "getedit"; 
//-----------------------------------------------------------------------------------
//CK the (magic_quotes_gpc) if it is (off) ... this is helpful to protection
if(!get_magic_quotes_gpc()) 
{ 
// Get what is in the  ($_POST) 
foreach($_POST as $k=>$v) 
{ 
  $_POST[$k] = addslashes($v); 
} 
} 

echo "<br><br>";

/*
Ck  if not empty fields
*/
//// info
if (!isset($_POST['name']) || $_POST['name'] == "") {
echo "<div align='center' class='error'><strong>
الرجاء كتابة أسمك بالكامل
</strong></div>";
 }
elseif (!isset($_POST['tel']) || $_POST['tel']== "") {
echo "<div align='center' class='error'><strong>
الرجاء كتابة رقم هاتفك
</strong></div>";
}
elseif (!numbers_only($_POST['tel'])) {
echo "<div align='center' class='error'><strong>
تأكد من استخدامك للأرقام فقد عند كتابة رقم الهاتف
</strong></div>";
}
elseif (!isset($_POST['email']) || $_POST['email'] == "") {
echo "<div align='center' class='error'><strong>
الرجاء كتابة البريد الإلكتروني
</strong></div>";
}
elseif (!isemail($_POST['email'])) {
echo "<div align='center' class='error'><strong>
الرجاء التأكد من صحة البريد الإلكتروني
</strong></div>";

} elseif (!isset($_POST['message']) || $_POST['message'] == "") {
echo "<div align='center' class='error'><strong>
الرجاء كتابة نص الرسالة
</strong></div>";

} elseif (!isset($_POST['active']) || $_POST['active'] == "" || !numbers_only($_POST['active'])) {
echo "<div align='center' class='error'><strong>
الرجاء تحديد حالة التعليق
</strong></div>";


} elseif (!isset($_POST['id']) || $_POST['id'] == "" || !numbers_only($_POST['id'])) {
echo "<div align='center' class='error'><strong>
رقم التعليق غير موجود
</strong></div>";

} else {
//////////////////////////////
$_POST['id'] = intval($_POST['id']);
////////////////////////////////
$in = mysql_query (" UPDATE images_comments SET name='{$_POST['name']}' , email='{$_POST['email']}' , tel='{$_POST['tel']}'  , message='{$_POST['message']}'  , active='{$_POST['active']}'  WHERE id='{$_POST['id']}' ") Or Die(mysql_error()); 
if(!$in) {
echo "
<p align='center'><font color='#FF0000'><strong>خلل </strong></font></p>
"; 

} else  { 
echo "
<p align='center'><strong>تم تعديل التعليق بنجاح</strong></p> 
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?file_id={$_POST['file_id']}'>";

}


} // end else
//-----------------------------------------------------------------------------------
break; 
/////////////////////////////////////////////////////////////////////////////////////
case "del"; 
//-----------------------------------------------------------------------------------
if (!isset($_GET['id']) || $_GET['id']=='' || !numbers_only($_GET['id'])) { 
echo "
<div align='center' class='error'>
<strong>
أتبعت رابط خاطئ
</strong>
</div>
";

} else {
//////////////////////////////
$_GET['id'] = intval($_GET['id']);
//////////////////////////////
$comments_show = mysql_query("SELECT * FROM images_comments  WHERE id='{$_GET['id']}' ")Or Die(MySQL_Error()); 
///////
$num=mysql_num_rows($comments_show);
if($num==0){ 
print"
<div align='center' class='error'>
التعليق الذي تبحث عنه غير متواجد
</div>
"; 
}
else {  
while($row_comments = mysql_fetch_array($comments_show)){ 
extract($row_comments);

if ($active==1) {
$active_info = "فعل";
} else {
$active_info = "معطل";
}
?>
        <form id="GetDel" name="GetDel" method="post" action="?action=getdel" dir="rtl">
          <table width="488" border="0" cellspacing="2" cellpadding="2">
            
            <tr>
              <td ><table width="98%" border="0" align="center" cellpadding="1" cellspacing="0">
                  <tr>
                    <td colspan="2" align="center" valign="top" class="error">حذف</td>
                  </tr>
                  <tr>
                    <td width="30%" align="right" valign="top" class="text"><strong>الاسم</strong></td>
                    <td width="70%" align="right" valign="top" class="text"><?php 
////
echo stripslashes ($row_comments['name']);
////
?>                    </td>
                  </tr>
                  <tr>
                    <td align="right" valign="top" class="text"><strong>البريد الإلكتروني</strong></td>
                    <td align="right" valign="top" class="text"><?php 
////
echo stripslashes ($row_comments['email']);
////
?></td>
                  </tr>
                  <tr>
                    <td align="right" valign="top" class="text"><strong>الهاتف</strong></td>
                    <td align="right" valign="top" class="text"><?php 
////
echo stripslashes ($row_comments['tel']);
////
?></td>
                  </tr>
                  <tr>
                    <td align="right" valign="top" class="text"><strong>التعليق</strong></td>
                    <td align="right" valign="top" class="text"><?php 
////
echo stripslashes ($row_comments['message']);
////
?></td>
                  </tr>
                  <tr>
                    <td align="right" valign="top" class="text">&nbsp;</td>
                    <td align="right" valign="top" class="text">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center" valign="top" class="text"><strong class="error">هل أنت متأكد من رغبتك في حذف هذا التعليق؟</strong></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center" valign="top" class="text"><span class="maintext"><span dir='rtl'>
                      <input name='doit' type='radio' value='no' checked="checked" />
                      لا</span>
                          <input name='doit' type='radio' value='yes' />
                      نعم</span>
                        <input name="id" type="hidden" id="id" value="<?php echo $row_comments['id'];?>" />
                        <input name="file_id" type="hidden" id="file_id" value="<?php echo $row_comments['file_id'];?>" /></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center" valign="top" class="text"><font size='2' face='Arial, Helvetica, sans-serif'>
                      <input name='أنجز' type='submit' id='أنجز' value='أنــجز العمــلية' />
                    </font></td>
                  </tr>
              </table></td>
            </tr>
          </table>
        </form>
      <?php
} // end while
} // end if not exist
} // end if not set
//-----------------------------------------------------------------------------------
break; 
/////////////////////////////////////////////////////////////////////////////////////
case "getdel"; 
//-----------------------------------------------------------------------------------
//CK the (magic_quotes_gpc) if it is (off) ... this is helpful to protection
if(!get_magic_quotes_gpc()) 
{ 
// Get what is in the  ($_POST) 
foreach($_POST as $k=>$v) 
{ 
  $_POST[$k] = addslashes($v); 
} 
} 



if (isset($_POST["doit"]) && $_POST["doit"] =="no") {
echo "
<strong>
<br>
<br>
إخترت عدم حذف التعليق .. إنتظر قليلا حتى يتم إعادة توجيهك
</strong>
";

echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?file_id={$_POST['file_id']}'>";

} else {

$id =@$_POST['id'];

//// result
$in = mysql_query (" DELETE FROM images_comments WHERE id='$id' ") Or Die(mysql_error()); 
// data input
echo " 
<p class='error'><strong>تم حذف التعليق بنجاح</strong></p> 
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?file_id={$_POST['file_id']}'>";

// resulte close
}



//-----------------------------------------------------------------------------------
break; 
/////////////////////////////////////////////////////////////////////////////////////
} // end switch
/////////////////////////////////////////////////////////////////////////////////////
?>
      &nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
}
?>