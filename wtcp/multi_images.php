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

 

 <script src="js/multifile_compressed.js"></script>

</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div align="center">

  <p align="center"><strong><br>

        </font>ألبوم الصور - ألبوم</strong></p>

 

<?php



switch(@$_GET['action']){ 



////////////////////////////////////////////////////////////////////////////////////////

case "add"; 

//--------------------------------------------------------------------------------------



///

if(isset($_SESSION['pro_active']) && $_SESSION['pro_active'] !="novalue")

{

if ($_SESSION['pro_active'] =="1")

{

// session foo is set

$getact = "

<option value='novalue'>Select Status</option>

<option value='1' selected>Active</option>

<option value='0'>InActiveة</option>

";

}

elseif($_SESSION['pro_active'] =="0")

{

// session foo is set

$getact = "

<option value='novalue'>Select Status</option>

<option value='1'>Active</option>

<option value='0' selected>InActiveة</option>

";

} else { 

$getact = "

<option value='novalue'>Select Status</option>

<option value='1' selected>Active</option>

<option value='0'>InActiveة</option>

";

}

/////////////////////////////////////////////

} else { 

$getact = "

<option value='novalue'>Select Status</option>

<option value='1' selected>Active</option>

<option value='0'>InActiveة</option>

";

}

///////////////

/// ######################################################################

//////  date

//// day

if (isset($_SESSION['pro_b_day']) && $_SESSION['pro_b_day']!=0) {

$b_day_info = "<option value='{$_SESSION['pro_b_day']}' selected>{$_SESSION['pro_b_day']}</option>";

} else {

$b_day_info = "<option value='".date('d')."' selected>".date('d')."</option>";

}



////// month

if (isset($_SESSION['pro_b_month']) && $_SESSION['pro_b_month']!=0) {

$b_month_info ="<option value='{$_SESSION['pro_b_month']}' selected>{$_SESSION['pro_b_month']}</option>" ;

} else {

$b_month_info = "<option value='".date('m')."' selected>".date('m')."</option>";

}



////// year

if (isset($_SESSION['pro_b_year']) && $_SESSION['pro_b_year']!=0) {

$b_year_info = "<option value='{$_SESSION['pro_b_year']}' selected>{$_SESSION['pro_b_year']}</option>";

} else {

$b_year_info = "<option value='".date('Y')."' selected>".date('Y')."</option>";

}



/// ######################################################################

////// EXPIRE - date

//// day

if (isset($_SESSION['pro_e_day']) && $_SESSION['pro_e_day']!=0) {

$e_day_info = "<option value='{$_SESSION['pro_e_day']}' selected>{$_SESSION['pro_e_day']}</option>";

} else {

$e_day_info = "<option value='0' selected> غير محدد </option>";

}



////// month

if (isset($_SESSION['pro_e_month']) && $_SESSION['pro_e_month']!=0) {

$e_month_info ="<option value='{$_SESSION['pro_e_month']}' selected>{$_SESSION['pro_e_month']}</option>" ;

} else {

$e_month_info = "<option value='0' selected> غير محدد </option>";

}



////// year

if (isset($_SESSION['pro_e_year']) && $_SESSION['pro_e_year']!=0) {

$e_year_info = "<option value='{$_SESSION['pro_e_year']}' selected>{$_SESSION['pro_e_year']}</option>";

} else {

$e_year_info = "<option value='0' selected> غير محدد </option>";

}



/////////////////////////////////////////////





?>



<form action='?action=getadd' method='POST' ENCTYPE='multipart/form-data' name="add" id="add">

  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">

    <tr>

      <td bgcolor="#666666"><table width="600" border="0" cellpadding="2">

          <tr>

            <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>Add bulk Images</strong></td>
          </tr>

          <tr align="right">

            <td width="396" bgcolor="#CCCCCC"><input name="name" type="text" class="smalltext" id="name"value="<?php if (isset($_SESSION['pro_name'])) { echo stripslashes($_SESSION['pro_name']);} ?>" size="43" maxlength="255"  dir="rtl" ></td>

            <td width="190" bgcolor="#CCCCCC"><strong>Image  title </strong></td>
          </tr>

          <tr align="right">

            <td bgcolor="#CCCCCC"><textarea name='details' cols='40' rows='6' wrap='VIRTUAL' class="smalltext" id='details'  dir="rtl"><?php if (isset($_SESSION['pro_details'])) { echo stripslashes($_SESSION['pro_details']);} ?></textarea></td>

            <td valign="top" bgcolor="#CCCCCC"><strong>Details</strong></td>
          </tr>



          <tr align="right">

            <td bgcolor="#CCCCCC"><select name="active" class="smalltext" id="active" dir="rtl">

                <?php echo $getact ; ?>

            </select></td>

            <td bgcolor="#CCCCCC"><strong>Status</strong></td>
          </tr>

          <tr align="right">

            <td bgcolor="#CCCCCC"><select name='catid' class="smalltext" dir="rtl" >

                <option value='novalue'>Select Section</option>

                <?php

//////

if(isset($_SESSION['pro_catid']) && $_SESSION['pro_catid'] !="novalue")

{

$image_var = mysql_query("SELECT * FROM images_cat WHERE catid='{$_SESSION['pro_catid']}' ");  

while ($image_var3 = mysql_fetch_array($image_var)) {  

echo "<option value='{$image_var3['catid']}' selected>{$image_var3['catname']}</option>";

} // end while

} // end conditioning

echo show_dropdown('0','0');



?>

            </select></td>

            <td bgcolor="#CCCCCC"><strong>section</strong></td>
          </tr>

          <tr align="right">

            <td bgcolor="#CCCCCC"><input id="my_file_element" type="file" name="file_1" ></td>

            <td bgcolor="#CCCCCC"><strong>add an image</strong></td>
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
                </select>
            </td>
            <td bgcolor="#CCCCCC"><strong>Date</strong></td>
          </tr>



          <tr align="right">

            <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
            </tr>

          <tr align="right">

            <td colspan="2" bgcolor="#FFFFFF">

<span dir="rtl">Files:</span>

<!-- This is where the output will appear -->

<div id="files_list"></div>

<script>

	<!-- Create an instance of the multiSelector class, pass it the output target and the max number of files -->

	var multi_selector = new MultiSelector( document.getElementById( 'files_list' ), 10 );

	<!-- Pass in the file element -->

	multi_selector.addElement( document.getElementById( 'my_file_element' ) );

</script></td>
            </tr>

          <tr align="right">

            <td bgcolor="#CCCCCC">&nbsp;</td>

            <td bgcolor="#CCCCCC"><input name="Submit" type="submit" class="smalltext" value="Insert"  style="width:60px;"></td>
          </tr>

          

          

      </table></td>

    </tr>

  </table>

  <br>

  <table width="600" border="0" cellspacing="0" cellpadding="0">

    <tr>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td align="center"><span class="marktext" dir="rtl">- الملفات المسموح بها هي jpg و gif فقط<br>

- أقصى حد مسموح به لحجم الملفات هو <font color="#FF0000"><?php echo $maxsize_info;?><br>

- مسموح برفع 10 صور فقط في الدفعة الواحدة<br>

- اضغط على زر Browse في كل مرة تريد اضافة صورة جديدة</font></span></td>

    </tr>

    <tr>

      <td>&nbsp;</td>

    </tr>

  </table>

  <br>

</form>

	

<?php

//--------------------------------------------------------------------------------------

break; 

case "getadd"; 

//--------------------------------------------------------------------------------------





//////////

//CK the (magic_quotes_gpc) if it is (off) ... this is helpful to protection

if(!get_magic_quotes_gpc()) 

{ 

// Get what is in the  ($_POST) 

foreach($_POST as $k=>$v) 

{ 

  $_POST[$k] = addslashes($v); 

} 

} 



///////////////////////////////////////////////////////////////////////////////////////////////////

/// image Dir ///////////////

$upload_temp = "../$db_upload_dir/temp/"; //change the name of the directory to upload files

$upload_image = "../$db_upload_dir/products/images/{$_POST['catid']}/"; //change the name of the directory to upload files

$upload_thumb = "../$db_upload_dir/products/thumbnails/{$_POST['catid']}/"; //change the name of the directory to upload files

///////////////////////////////////////////////////////////////////////////////////////////////////

$date_print = date('jmY_');

$allowedExtensions = array("jpg","jpeg","gif");

$expire_time = 0;

$userid = 0;

$time_info = time();

if (isset($_POST['b_month']) & $_POST['b_month']!=0 & isset($_POST['b_day']) & $_POST['b_day']!=0 & isset($_POST['b_year']) & $_POST['b_year']!=0) {
$date = mktime(0, 0, 0, "{$_POST['b_month']}",   "{$_POST['b_day']}",   "{$_POST['b_year']}");
} else {
$date = 0;
}

$_POST['name'] = addslashes($_POST['name']); 

$_POST['details'] = addslashes($_POST['details']); 



/*

Ck  if not empty fields

*/

//// info

///////sessions files///////////

@$_SESSION['pro_name'] = $_POST['name'];

@$_SESSION['pro_details'] = $_POST['details'];

@$_SESSION['pro_active'] = $_POST['active'];

@$_SESSION['pro_catid'] = $_POST['catid'];



///////////////////////////////////////////////////////////////////////////////////////////////////



////////////// Validate

if (!isset($_POST['name']) || $_POST['name'] == "") {

print "

<div align='center' class='msg'>

الرجاء كتابة أسم الصور

</div>

";



  

} elseif (!isset($_POST['active']) || $_POST['active'] == "" || $_POST['active'] == "novalue") {

print "

<div align='center' class='msg'>

الرجاء تحديد حالة الصور

</div>

";

  

} elseif (!isset($_POST['catid']) || $_POST['catid'] == "" || $_POST['catid'] == "novalue") {

print "

<div align='center' class='msg'>

الرجاء تحديد قسما للصور

</div>

"; 



} elseif (count($_FILES)<2) {

print "

<div align='center' class='msg'>

الرجاء ادراج صورة

</div>

"; 



} else  { 



foreach ($_FILES as $file) {

  

if ($file['tmp_name'] > '') {



//// START file  name filter

if (!empty($file['name'])) {

//

$get_picname1 = findname($file['name']);

$get_picexten1 = findtype($file['name']);

// func

$pic_output1 = rand(999999, 100000);

////

$final_pic1 = "$date_print$pic_output1.$get_picexten1";

// image 1

$uploadfile1 = $upload_temp . basename($final_pic1);

}

//// END file  name filter



//// START file Validation

if (!in_array(end(explode(".",strtolower($file['name']))),$allowedExtensions)) {

echo "

<div align='center' class='msg' dir='rtl'>

{$file['name']} نوع الملف غير مسموح به!

- لم يتم إدراجه

</div>

";



} elseif ($file['size'] > $max_size){

echo "

<div align='center' class='msg' dir='rtl'>

{$file['name']} حجم الملف اكبر من الحجم المسموح به!

- لم يتم إدراجه

</div>

";

} else {



/////////////////////////////////////////////////

if (move_uploaded_file(@$file['tmp_name'], $uploadfile1)) {



///////////////////// Thumb 

if (find_size_file($uploadfile1,$db_thumb_width,$db_thumb_height)) {

copy($upload_temp.$final_pic1, $upload_thumb.$final_pic1);

} else {

create_thumbs("$upload_temp",$upload_thumb,$final_pic1,$db_thumb_width,$db_thumb_height);

}

chmod("$upload_thumb/{$final_pic1}", 0644);  // image directory; permission

///////////////////// Image

if (find_size_file($uploadfile1,$db_image_width,$db_image_height)) {

copy($upload_temp.$final_pic1, $upload_image.$final_pic1);

}else {

create_thumbs("$upload_temp",$upload_image,$final_pic1,$db_image_width,$db_image_height);

}

chmod("$upload_image/{$final_pic1}", 0644);  // image directory; permission

/////////////////////////////////////////////////





$in = mysql_query ("INSERT INTO `images` (`name`, `userid`, `code`, `details`, `price` , `active`, `date` ,`expire_date` , `time` , `hits`, `catid` , `quantity` ,`buy_type` ,`image`, `thumbnail` ) VALUES ('{$_POST['name']}', '0', '0', '{$_POST['details']}', '0', '{$_POST['active']}', '$date' , '$expire_time' ,  '$time_info', '0' , '{$_POST['catid']}' ,'0' ,'0' , '$final_pic1', '$final_pic1')") Or Die(MySQL_Error()); 



echo "

<div align='center' dir='rtl'>

{$file['name']} تم ادراج الملف بنجاح

<br>

</div>

";



unlink($uploadfile1);



} else { 

print "

<div align='center' class='msg'>

لم يتم أرفاق الصور .. الرجاء مراجعة صلاحيات فولدر التحميل

</div>

"; 

} /// end if file upload

} // end file validation

	  

} // end if tmp not empty

} // end foreach

  



/// unset SESSIONS

unset($_SESSION['pro_name']);

unset($_SESSION['pro_details']);

unset($_SESSION['pro_active']);

unset($_SESSION['pro_catid']);



}  /// END All

//--------------------------------------------------------------------------------------

break; 

////////////////////////////////////////////////////////////////////////////////////////

/////////// end protect

} // end switch



?>

</div>

</body>

</html>

<?php

} /// end else not logedin 

?>