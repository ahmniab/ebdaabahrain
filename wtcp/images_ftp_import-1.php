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
<title>المعروضات</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
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
//-->
</script>

</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <p align="center"><strong><br>
        </font>ألبوم الصور - ألبوم المنتجات</strong></p>
  <p>
 
<?php

switch(@$_GET['action']){ 

////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
/*
Main control
*/

default: 
//--------------------------------------------------------------------------------------
if (isset($_GET['catid']) && $_GET['catid']!='') {$SELECTED_CAT_ID= intval($_GET['catid']);} else { $SELECTED_CAT_ID= "0";}
// image
if (isset($_GET['catid']) && $_GET['catid']!='') {$CAT_ID= intval($_GET['catid']);} else { $CAT_ID= "0";}
$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files
$upload_image = "../$db_upload_dir/products/images/$CAT_ID/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/products/thumbnails/$CAT_ID/"; //change the name of the directory to upload files
////-----
$upload_DIE_image = "$db_site_add/$db_upload_dir/products/images/$CAT_ID/"; //change the name of the directory to upload files


?>
<form name="update_active" method="post" action="">

<br>

<div align="center"><table width="955" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td colspan="3" align="right"><select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('self',this,0)" dir="rtl">
      
      <option value="#">اختر القسم</option>
<?php
echo show_dropdown_images_cat(0, 0,"",$SELECTED_CAT_ID);
?>
    </select></td>
    <td align="right" bgcolor="#eeeeee">أختر القسم </td>
  </tr>
  <tr>
    <td colspan="3" align="right">&nbsp;&nbsp;
<input name="Clear All" type="button" id="Clear All" onClick="selectAllCheckBoxes('update_active', 'checkbox[]', false);" value="عدم تحديد الكل">
<input name="Select All" type="button" id="Select All" onClick="selectAllCheckBoxes('update_active', 'checkbox[]', true);" value="تحديد الكل"></td>
    <td width="62" align="right" bgcolor="#eeeeee">التحديد</td>
  </tr>
  <tr>
    <td width="535" align="right">&nbsp;&nbsp;</td>
    <td width="79" align="right">&nbsp;</td>
    <td align="right" bgcolor="#66CC66"><input name="insert" type="submit" id="insert" value="أدراج البيانات"></td>
    <td align="right" bgcolor="#eeeeee">الخيارات</td>
  </tr>
  <tr>
    <td colspan="3" align="right" class="marktext"><?php echo $upload_DIE_image;?></td>
    <td align="right">فولدر القسم</td>
  </tr>
  <tr>
    <td colspan="4" align="right" dir="rtl">- الرجاء رفع الصور في الفولدر المخصص للقسم عبر برنامج الأف تي بي - FTP<br>
      - بإمكانك ادراج عدد غير محدود من الصور وبشكل سريع دفعة واحدة</td>
    </tr>
</table>


</div>
              
<br>

<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////
///// START FUNCTION
//////////////////////////////////////////////////////////////////////////////////////////////////////
function read_folder_directory($dir = "root_dir/dir")
    {
        $listDir = array();
        if($handler = opendir($dir)) {
            while (($sub = readdir($handler)) !== FALSE) {
                if ($sub != "." && $sub != ".." && $sub != "Thumb.db" && $sub != "Thumbs.db") {
                    if(is_file($dir."/".$sub)) {
                        $listDir[] = $sub;
                    }elseif(is_dir($dir."/".$sub)){
                        //$listDir[$sub] = read_folder_directory($dir."/".$sub);
                    }
                }
            }
            closedir($handler);
        }
        return $listDir;
    }


//////////////////////////////////////////////////////////////////////////////////////////////////////
///// END FUNCTION
//////////////////////////////////////////////////////////////////////////////////////////////////////

$files = read_folder_directory ("$upload_image");
$number_files = count($files);
$number_filesN = 0;
$number_result_ToShow = 48;
$FILES_LIST_TYPE1 = "";
//$FILES_LIST_TYPE2[] = "";

$CAT_U= "catid=$SELECTED_CAT_ID&";



//////////////////////////////////////////////////////////////////////////////////////////////////////
if ($files) {
//foreach (array_slice($files,0,10) as $file) {
foreach ($files as $file) {
///////////////////////////////////////////////////////////////////////////////////////////
$view_all = mysql_query("SELECT * FROM images WHERE thumbnail='$file' AND catid='$SELECTED_CAT_ID' ") or die (mysql_error());
$num=mysql_num_rows($view_all);
if($num==1){
// no result
} else {
//echo $file."<br/>";
$FILES_LIST_TYPE1 .=  $file;
$FILES_LIST_TYPE2[] = $file;
$number_filesN += 1;
} // end if no result
} // end foreach
} // end if no result array


//////////////////////////////////////////////////////////////////////////////////////////////////////
///// START SHOW CONTENT
//////////////////////////////////////////////////////////////////////////////////////////////////////

if(!isset($_GET['page'])){ 
    $page = 1; 
} else { 
    $page = @$_GET['page']; 
} 

$from = (($page * $number_result_ToShow) - $number_result_ToShow); 
echo "عدد الملفات: ".$number_filesN."<br>";
//===================
if (isset($FILES_LIST_TYPE2)) {
//===================//===================//===================//===================
echo"<table width='100%'><tr>"; 
$i=0; 
$imageid = 1;
///////
//===================//===================//===================//===================
//foreach (array_slice($FILES_LIST_TYPE2,$from,$number_result_ToShow) as $file_name) {
foreach (array_slice($FILES_LIST_TYPE2,$from,$number_result_ToShow) as $file_name) {
////////// go on
//  3 7
   if($i==3) { 
      echo"</tr><tr>"; 
      $i=0; 
   } 
   
$thumbnail_info = $file_name;
$F_T = findtype($thumbnail_info);
$F_N = explode(".",$file_name);
//echo $F_N;
$date = time();
$time_info = time();

//=================================================
echo "
<td align='center'>
<table width='150' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td>


<table width='300' height='191' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#999999' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'>

<tr align='center'>

  <td width='45%' align='left'><input name='thumbnail_{$imageid}' type='hidden' id='thumbnail_{$imageid}' value='{$thumbnail_info}'>
  <input name='catid_{$imageid}' type='hidden' id='catid_{$imageid}' value='{$CAT_ID}'>
  <input name='checkbox[]' type='checkbox' id='checkbox[]' value='{$imageid}'> 
  </td>

  <td height='19' align='left' valign='middle' bgcolor='#CCCCCC'>$imageid</td>
  </tr>


<tr align='center'>
  <td width='45%' rowspan='2'><a href='{$upload_image}{$thumbnail_info}' target='_blank'><img src='{$upload_image}{$thumbnail_info}' border='1' width='100' height='100'></a></td>
  <td height='25' align='left' valign='middle'><input name='name_{$imageid}' type='text' id='name_{$imageid}' size='23' maxlength='255' value='{$thumbnail_info}'></td>
</tr>
<tr align='center'>

  <td align='left' valign='top'><textarea name='details_{$imageid}' id='details_{$imageid}' cols='20' rows='5'></textarea></td>
</tr>
</table>


</td>
  </tr>
</table>
</td>
";


//=================================================

//echo $file_name."<br/>";

$i+=1; 
$imageid+=1;
} // end foreach
echo"</tr></table>"; 
///-----
} // end no content
//echo "<br>";
///echo "NUM FILES: ".$number_files."<br>";
//echo "NUM FILES NOT REPEATED: ".$number_filesN."<br>";
//////////////////////////////////////////////////////////////////////////////////////////////////////
///// END SHOW CONTENT
//////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////
///// START PAGENATION
//////////////////////////////////////////////////////////////////////////////////////////////////////


// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($number_filesN / $number_result_ToShow); 

// Build Page Number Hyperlinks 

if ($total_pages > 1){

echo "<center dir='rtl'>الصفحات<br />"; 

}

// Build Previous Link 

if($page > 1){ 

    $prev = ($page - 1); 

    echo "<a href=\"".$_SERVER['PHP_SELF']."?{$CAT_U}page=$prev\"><< السابق</a> "; 

} 



for($i = 1; $i <= $total_pages; $i++){ 

    if(($page) == $i){ 

	if ($total_pages > 1){

        echo "$i "; 

		}

        } else { 

            echo "<a href=\"".$_SERVER['PHP_SELF']."?{$CAT_U}page=$i\">$i</a> "; 

    } 

} 



// Build Next Link 

if($page < $total_pages){ 

    $next = ($page + 1); 

    echo "<a href=\"".$_SERVER['PHP_SELF']."?{$CAT_U}page=$next\">التالي >></a>"; 

} 

echo "</center>";
//////////////////////////////////////////////////////////////////////////////////////////////////////
///// END PAGENATION
//////////////////////////////////////////////////////////////////////////////////////////////////////

///--------------------------------------------------------------------------------
if(isset($_POST['insert']) && isset($_POST['checkbox'])){
//print_r($_POST);
$checkbox=$_POST['checkbox'];
//exit;
for($i=0;$i<count($checkbox);$i++){
$select_id = $checkbox[$i];
//---//---//---//---//---

$NAME_INFO1 = "name_{$select_id}";
$NAME_INFO2 = $_POST["$NAME_INFO1"];
//---
$DETAILS_INFO1 = "details_{$select_id}";
$DETAILS_INFO2 = $_POST["$DETAILS_INFO1"];
//---
$CATID_INFO1 = "catid_{$select_id}";
$CATID_INFO2 = $_POST["$CATID_INFO1"];
//---
$THUMBNAIL_INFO1 = "thumbnail_{$select_id}";
$THUMBNAIL_INFO2 = $_POST["$THUMBNAIL_INFO1"];

//---
//$CODE_INFO1 = "code_{$select_id}";
//$CODE_INFO2 = $_POST["$CODE_INFO1"];
//---
//$PRICE_INFO1 = "price_{$select_id}";
//$PRICE_INFO2 = $_POST["$PRICE_INFO1"];
//---
//$ORDER_INFO1 = "order_{$select_id}";
//$ORDER_INFO2 = $_POST["$ORDER_INFO1"];

//---//---//---//---//---
$upload_image = "../$db_upload_dir/products/images/$CATID_INFO2/"; //change the name of the directory to upload files
$upload_thumb = "../$db_upload_dir/products/thumbnails/$CATID_INFO2/"; //change the name of the directory to upload files

//---//---//---//---//---

////////////create_thumbs
create_thumbs("$upload_image",$upload_thumb,$THUMBNAIL_INFO2,$db_thumb_width,$db_thumb_height);
create_thumbs("$upload_image",$upload_image,$THUMBNAIL_INFO2,$db_image_width,$db_image_height);
$time_info = time();
//// result
$sql = mysql_query ("INSERT INTO `images` (`userid`,`name`, `details`, `active`, `date` , `time` , `hits`, `catid` ,`thumbnail`,`image` ) VALUES ('{$adminid}','{$NAME_INFO2}', '{$DETAILS_INFO2}','1',  '{$time_info}' , '{$time_info}' ,'0' ,'{$CATID_INFO2}','$THUMBNAIL_INFO2','$THUMBNAIL_INFO2')") Or Die(MySQL_Error()); 


}
echo "<meta http-equiv=\"refresh\" content=\"0;URL=?catid={$CATID_INFO2}&page=$page\">";
} // end if set

////////////////////////////////////////////////////////////////////////////////////////////////////



?>
</form>
<?php

//--------------------------------------------------------------------------------------
break; 
////////////////////////////////////////////////////////////////////////////////////////
/////////// end protect
} 

?>
&nbsp;</p>
</div>
</body>
</html>
<?php
} /// end else not logedin 
?>