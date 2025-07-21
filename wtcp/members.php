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

<title>Control the Users</title>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">

<link href="images/cpstyle.css" rel="stylesheet" type="text/css">



<script type="text/javascript" src="images/form.js"></script>

<!--  END Message POPUP -->



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

<SCRIPT>
function formvalidation(thisform) {
with (thisform) {
if (emptySelect(user_group,"الرجاء تحديد المجموعة")==false) {user_group.focus(); return false;};
}
}
</SCRIPT>


<script type="text/javascript">
   jQuery.fn.multiselect = function() {
    $(this).each(function() {
        var checkboxes = $(this).find("input:checkbox");
        checkboxes.each(function() {
            var checkbox = $(this);
            // Highlight pre-selected checkboxes
            if (checkbox.attr("checked"))
                checkbox.parent().attr("class","multiselect-on");
 
            // Highlight checkboxes that the user selects
            checkbox.change(function() {
                if (checkbox.attr("checked"))
                    checkbox.parent().attr("class","multiselect-on");
                else
                    checkbox.parent().attr("class","");
            });
        });
    });
};

</script>
</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div align="center"><br>

<?php

switch(@$_GET['action']){

case "add";



if (isset($_SESSION['users_username'])) {$_SESSION['users_username']=stripslashes(strip_tags($_SESSION['users_username'])); }

if (isset($_SESSION['users_email'])) {$_SESSION['users_email']=stripslashes(strip_tags($_SESSION['users_email'])); }

if (isset($_SESSION['users_email2'])) {$_SESSION['users_email2']=stripslashes(strip_tags($_SESSION['users_email2'])); }

/////////



if (isset($_SESSION['users_fname'])) {$_SESSION['users_fname']=stripslashes(strip_tags($_SESSION['users_fname'])); }



if (isset($_SESSION['users_zip'])) {$_SESSION['users_zip']=stripslashes(strip_tags($_SESSION['users_zip'])); }

if (isset($_SESSION['users_tel'])) {$_SESSION['users_tel']=stripslashes(strip_tags($_SESSION['users_tel'])); }

if (isset($_SESSION['users_mobile'])) {$_SESSION['users_mobile']=stripslashes(strip_tags($_SESSION['users_mobile'])); }

if (isset($_SESSION['users_fax'])) {$_SESSION['users_fax']=stripslashes(strip_tags($_SESSION['users_fax'])); }



if (isset($_SESSION['users_website'])) {$_SESSION['users_website']=stripslashes(strip_tags($_SESSION['users_website'])); }

if (isset($_SESSION['users_country'])) {$_SESSION['users_country']=stripslashes(strip_tags($_SESSION['users_country'])); }

if (isset($_SESSION['users_city'])) {$_SESSION['users_city']=stripslashes(strip_tags($_SESSION['users_city'])); }

if (isset($_SESSION['users_info'])) {$_SESSION['users_info']=stripslashes(strip_tags($_SESSION['users_info'])); }

if (isset($_SESSION['users_user_group'])) {$_SESSION['users_user_group']=stripslashes(strip_tags($_SESSION['users_user_group'])); }



/////////////////////



?>

<br>

  <br>

<form

 action="?action=reg" method="POST" enctype="multipart/form-data" name="reg" id="reg" onSubmit="return formvalidation(this)">

<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td bgcolor="#666666"><table width="600" border="0" cellpadding="2">

      <tr>

        <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>أضافة عضو</strong></td>
      </tr>

<!--      <tr align="right">

        <td width="396" bgcolor="#CCCCCC"><font size="2" face="Verdana">

          <input name="username" id="username" value="<?php if (isset($_SESSION['users_username'])) {echo $_SESSION['users_username'];} ?>" size="25" maxlength="255">

        </font></td>

        <td width="190" bgcolor="#CCCCCC"><strong>أسم المستخدم </strong></td>
      </tr>

      <tr align="right">

        <td bgcolor="#CCCCCC"><input name="password" type="password" id="password" size="25" maxlength="255"></td>

        <td bgcolor="#CCCCCC"><strong>الرقم السري </strong></td>
      </tr>

      <tr align="right">

        <td bgcolor="#CCCCCC"><input name="password2" type="password" id="password2" size="25" maxlength="255"></td>

        <td bgcolor="#CCCCCC"><strong>تأكيد الرقم السري </strong></td>
      </tr>

      <tr align="right">

        <td bgcolor="#CCCCCC"><font face="Verdana"><font size="2" face="Verdana">

          <input name="email2" id="email2" value="<?php if (isset($_SESSION['users_email2'])) {echo $_SESSION['users_email2'];} ?>" size="25" maxlength="255">

        </font></font></td>

        <td bgcolor="#CCCCCC"><strong>تأكيد البريد الإلكتروني </strong></td>
      </tr>

      <tr align="right">

        <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>معلومات إختيارية</strong></td>
        </tr>-->

      <tr align="right">

        <td width="448" bgcolor="#CCCCCC"><font size="2" face="Verdana">

          <input name="fname" id="fname" value="<?php if (isset($_SESSION['users_fname'])) {echo $_SESSION['users_fname'];} ?>" size="25" maxlength="255" dir="rtl">

        </font></td>

        <td width="138" bgcolor="#CCCCCC"><strong>الأسم الكامل</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><font size="2" face="Verdana">
          <input name="fname_en" id="fname_en" value="<?php if (isset($_SESSION['users_fname_en'])) {echo $_SESSION['users_fname_en'];} ?>" size="25" maxlength="255" dir="rtl">
        </font></td>
        <td bgcolor="#CCCCCC"><strong>English Name</strong></td>
      </tr>

      <tr align="right">

        <td bgcolor="#CCCCCC"><font face="Verdana"><font size="2" face="Verdana">

          <input name="zip" id="zip" value="<?php if (isset($_SESSION['users_zip'])) {echo $_SESSION['users_zip'];} ?>" size="7" maxlength="7">

        </font></font></td>

        <td bgcolor="#CCCCCC"><strong>رقم فتح الخط</strong></td>
      </tr>

      <tr align="right">

        <td bgcolor="#CCCCCC"><font face="Verdana"><font size="2" face="Verdana">

          <input name="tel" id="tel" value="<?php if (isset($_SESSION['users_tel'])) {echo $_SESSION['users_tel'];} ?>" size="25" maxlength="255">

        </font></font></td>

        <td bgcolor="#CCCCCC"><strong>الهاتف</strong></td>
      </tr>

      <tr align="right">

        <td bgcolor="#CCCCCC"><font face="Verdana"><font size="2" face="Verdana">

          <input name="mobile" id="mobile" value="<?php if (isset($_SESSION['users_mobile'])) {echo $_SESSION['users_mobile'];} ?>" size="25" maxlength="255">

        </font></font></td>

        <td bgcolor="#CCCCCC"><strong>النقال</strong></td>
      </tr>

      <tr align="right">

        <td bgcolor="#CCCCCC"><font face="Verdana"><font size="2" face="Verdana">

          <input name="fax" id="fax" value="<?php if (isset($_SESSION['users_fax'])) {echo $_SESSION['users_fax'];} ?>" size="25" maxlength="255">

        </font></font></td>

        <td bgcolor="#CCCCCC"><strong>الفاكس</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><font face="Verdana"><font size="2" face="Verdana">
          <input name="email" value="<?php if (isset($_SESSION['users_email'])) {echo $_SESSION['users_email'];} ?>" size="25" maxlength="255">
        </font></font></td>
        <td bgcolor="#CCCCCC"><strong>البريد الإلكتروني </strong></td>
      </tr>

      <tr align="right">

        <td bgcolor="#CCCCCC"><font face="Verdana"><font size="2" face="Verdana">

          <input name="website" id="website" value="<?php if(isset($_SESSION['users_website'])) {echo stripslashes ($_SESSION['users_website']);} ?>" size="25" maxlength="255">

        </font></font></td>

        <td bgcolor="#CCCCCC"><strong>الموقع الإلكتروني</strong></td>
      </tr>

      <tr align="right">

        <td bgcolor="#CCCCCC"><select name="country" id="country" dir="rtl">

          <option value="0">أختر دولة</option>

          <?php

//////////////////////////////  cat





if (isset($_SESSION['users_country']) && $_SESSION['users_country']!='') {



$_SESSION['users_country'] = intval ($_SESSION['users_country']);



$view_cont = mysql_query("select * from countries ORDER BY id ASC")Or Die(MySQL_Error()); 

while($action_cont = mysql_fetch_array($view_cont)){ 

extract($action_cont);

if ($action_cont['id']==$_SESSION['users_country']) {$select_info='selected';} else {$select_info='';}

echo "<option value='{$action_cont['id']}' $select_info>{$action_cont['ar_name']}</option>";

} // END WHILE



} else {



$view_cont = mysql_query("select * from countries ORDER BY id ASC")Or Die(MySQL_Error()); 

while($action_cont = mysql_fetch_array($view_cont)){ 

extract($action_cont);

echo "<option value='{$action_cont['id']}'>{$action_cont['ar_name']}</option>";

} // END WHILE



}

////////////////////////////// END cat

?>

        </select></td>

        <td bgcolor="#CCCCCC"><strong>الدولة</strong></td>
      </tr>


      <tr align="right">

        <td bgcolor="#CCCCCC"><textarea name=info cols=40 rows=5 wrap="VIRTUAL" id="info" dir="rtl"><?php if (isset($_SESSION['users_info'])) {echo $_SESSION['users_info'];} ?></textarea></td>

        <td valign="top" bgcolor="#CCCCCC"><strong>عنوان الشركة</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><textarea name=details cols=40 rows=5 wrap="VIRTUAL" id="details" dir="rtl"><?php if (isset($_SESSION['users_details'])) {echo $_SESSION['users_details'];} ?></textarea></td>
        <td valign="top" bgcolor="#CCCCCC"><strong>النشاط</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><font face="Verdana"><font size="2" face="Verdana">
          <input name="discount" id="discount" value="<?php if (isset($_SESSION['users_discount'])) {echo $_SESSION['users_discount'];} ?>" size="25" maxlength="255">
        </font></font></td>
        <td bgcolor="#CCCCCC"><strong>نسبة التخفيض</strong></td>
      </tr>

      <tr align="right">

        <td bgcolor="#CCCCCC"><span class="error">

          <input name="photo" type="file" id="photo">

        </span></td>

        <td bgcolor="#CCCCCC"><strong>شعار الشركة </strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><select name="user_group" id="user_group" dir="rtl">
            <option value="0">اختر مجموعة</option>
            <?php
///// reg
$select_group = mysql_query("select * from users_group ORDER BY id ASC") or die(mysql_error());
/// cer
while($row_group = mysql_fetch_array($select_group)){ 


if (isset($_SESSION['users_user_group']) && $_SESSION['users_user_group']==$row_group['id']) {
$select_info="selected";
} else {
$select_info="";
}
echo "<option value='{$row_group['id']}' $select_info>{$row_group['name']}</option>";
}
mysql_free_result ($select_group);
?>
        </select></td>
        <td bgcolor="#CCCCCC"><strong>المجموعة</strong></td>
      </tr>
      <tr>
        <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>خصائص الظهور</strong></td>
      </tr>
<!--      <tr align="right">
        <td bgcolor="#CCCCCC"><input name="view_dir" type="checkbox" id="view_dir" value="1" <?php if (isset($_SESSION['users_view_dir']) && $_SESSION['users_view_dir']==1) {?> checked <?php }?>></td>
        <td bgcolor="#CCCCCC"><strong>دليل الشركات</strong></td>
      </tr>-->
      <tr align="right">
        <td bgcolor="#CCCCCC"><input name="view_decor" type="checkbox" id="view_decor" value="1" <?php if (isset($_SESSION['users_view_decor']) && $_SESSION['users_view_decor']==1) {?> checked <?php }?>></td>
        <td bgcolor="#CCCCCC"><strong>شريط الشركات المميزة </strong></td>
      </tr>
      <tr>
        <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>تخصص العضوية</strong></td>
      </tr>
      <tr align="right">
        <td colspan="2" bgcolor="#CCCCCC"><div class="catid" dir="rtl">
            <?php
echo show_dropdown_newCat2('0','0','0');
?>
        </div></td>
      </tr>
      

      <tr align="right">

        <td bgcolor="#CCCCCC"><input name='view_dir' type='hidden' id='view_dir' value="1">
        <input name='email2' type='hidden' id='email2'>
          <input name='password2' type='hidden' id='password2'>
          <input name='password' type='hidden' id='password'>
          <input name='username' type='hidden' id='username'>
          <input name='city' type='hidden' id='city' value='1'></td>

        <td bgcolor="#CCCCCC"><input name="submit" type="submit" class="smalltext" id="submit"  style="width:60px;" value="أضف"></td>
      </tr>

    </table></td>

  </tr>

</table>

</FORM>



<?php

break;



///////////////

//////////

case "reg";

//////////

//CK the (magic_quotes_gpc) if it is (off) ... this is helpful to protection

/*if(!get_magic_quotes_gpc())

{

// Get what is in the  ($_POST)

foreach($_POST as $k=>$v)

{

  $_POST[$k] = addslashes($v);

}

}*/



/////// SET SESSIONS IF POSTED

if (isset($_POST['submit'])) {



foreach($_POST as $key=>$value){

if ($key!="submit"){

$_SESSION["users_"."$key"] = $value;

} // end if key is not submit

} // end foreach

} // end if posted

/////// END SET SESSIONS IF POSTED



//////////////

$username =$_POST["fname"];
$fname_en =$_POST["fname_en"];

$password=1234567;

$password2=1234567;

//

$email=$_POST["email"];

$email2=$_POST["email"];

//

$fname=$_POST["fname"];

$zip=$_POST["zip"];

$tel=$_POST["tel"];

$mobile=$_POST["mobile"];

$fax=$_POST["fax"];

$website=$_POST["website"];

$country=$_POST["country"];

$city=$_POST["city"];

$info=$_POST["info"];

$details=$_POST["details"];
$discount=$_POST["discount"];

$user_group=$_POST["user_group"];







/////===========
if (isset($_POST['view_dir']) && $_POST['view_dir']==1) {
$view_dir_q = "1";
} else {
$view_dir_q = "0";
}
/////===========
/////===========
if (isset($_POST['view_decor']) && $_POST['view_decor']==1) {
$view_decor_q = "1";
} else {
$view_decor_q = "0";
}
/////===========

// image

$uploaddir1 = "../$db_upload_dir/profile/"; //change the name of the directory to upload files

$uploaddir2 = "../$db_upload_dir/profile/thumbnails/"; //change the name of the directory to upload files

///////////////////////////////////////////////////////////////////////////////////////////////////

$date_print = date('jmY_');

/////////////////////////// Images rename /////////////////////////

if (!empty($_FILES['photo']['name'])) {

//////////////

$get_picname1 = findname($_FILES['photo']['name']);

$get_picexten1 = findtype($_FILES['photo']['name']);

// func

$pic_output1 = rand(999999, 100000);

////

$final_pic1 = "$date_print$pic_output1.$get_picexten1";

// image 1

$uploadfile1 = $uploaddir1 . basename($final_pic1);

}

///////////////////////////

/////////////////////


/////////////////////
/*if($username ==""){
echo"
<div align='center' class='error'><strong>
الرجاء كتابة الأسم المستخدم
</strong></div>
";

} else*/

/*if($email ==""){
echo"
<div align='center' class='error'><strong>
الرجاء كتابة البريد الإلكتروني
</strong></div>
";


} elseif($email2 ==""){
echo"
<div align='center' class='error'><strong>
الرجاء أعادة كتابة البريد الإلكتروني
</strong></div>
";


} elseif($password ==""){
echo"
<div align='center' class='error'><strong>
الرجاء كتابة الرقم السري
</strong></div>
";


} elseif($password2 ==""){
echo"
<div align='center' class='error'><strong>
الرجاء أعادة كتابة الرقم السري
</strong></div>
";

} elseif ($email !="" && !isemail($email)){
echo"
<div align='center' class='error'><strong>
البريد الإلكتروني الذي أدخلته غير صحيح
</strong></div>
";

} elseif ($email!=$email2) {
print "
<div align='center' class='error'><strong>
البريدان الإلكترونيان غير متطابقين
</strong></div>
";

} elseif ($password!=$password2){
print "
<div align='center' class='error'><strong>
كلمتا المرور غير متطابقتين
</strong></div>
";

} elseif($password !="" && !check_password($password)) {
echo "
<div align='center' class='error'><strong>
تأكد من كتابتك ما بين 6 الى 25 حرفاً لكلمة المرور
</strong></div>
";

} else*/

if($fname ==""){
echo"
<div align='center' class='error'><strong>
الرجاء كتابة الاسم كاملا
</strong></div>
";

/*} elseif($country ==""){
echo"
<div align='center' class='error'><strong>
الرجاء اختيار  دولتك
</strong></div>
";
*/

} elseif($zip !="" && !numbers_only($zip)){
echo "
<div align='center' class='error'>
<strong>
تأكد من كتابتك للأرقام فقط في حقل رقم فتح الخط
</strong>
</div>
";

}elseif($tel !="" && !numbers_only($tel)){
echo "
<div align='center' class='error'>
<strong>
تأكد من كتابتك للأرقام فقط في حقل رقم الهاتف
</strong>
</div>
";

}elseif($mobile !="" && !numbers_only($mobile)){
echo "
<div align='center' class='error'>
<strong>
تأكد من كتابتك للأرقام فقط في حقل رقم الموبايل
</strong>
</div>
";

} elseif($user_group =="" || $user_group =="novalue" || $user_group =="0" || !numbers_only($zip)){
echo "
<div align='center' class='error'>
<strong>
الرجاء أختيار مجموعة محددة للعضو
</strong>
</div>
";

}elseif ($website !="" && !issite($website)){
echo"
<div align='center' class='error'><strong>
من فضلك تأكد من صحة كتابتك لعنوان موقع الشركة الإلكتروني
</strong></div>
";

} elseif (!isset($_POST['catid']) || $_POST['catid'] == "" || $_POST['catid'] == "novalue") {

print "

<div align='center' class='msg'><strong>

الرجاء تحديد قسما للشركة

</strong></div>

"; 

////////////////////////////////////////////////////////////////////////////////

} elseif (empty($_FILES['photo']['name'])) {





if($username !=""){

// ck ID if exist

$query = MySQL_Query("SELECT userid FROM users WHERE username='$username'") Or Die(MySQL_Error());

// if select detact more than 0 result exit

if(MySQL_Num_Rows($query) > 0)

{

// print error already exist

echo '

<div align="center" class="msg"><strong>اسم المستخدم '.$username.' مسجل مسبقاً</strong></div>

';

exit;

}



//free the memory from the select result

MySQL_Free_Result($query);



} // end check if username is empty



///////// ck email



if($email !=""){

// ck user if exist

$query = MySQL_Query("SELECT userid FROM users WHERE useremail='$email'") Or Die(MySQL_Error());

// if select detact more than 0 result exit

if(MySQL_Num_Rows($query) > 0){

// print error already exist

echo '

<div align="center"  class="msg"><strong>عنوان البريد الإلكتروني '.$email.' مسجل مسبقاً</strong></div>

';

exit;

}



//free the memory from the select result

MySQL_Free_Result($query);

} // end check if email is empty



// MD5 the password

$password_data = md5($password);



// variables

$info = addslashes($info);

$reg_date = date('jS of F Y');

$activate_id = substr(md5(time().crypt(time())), 16, 8);

$status= 1;





// add to admin table

$in = MySQL_Query("INSERT INTO users (fname,fname_en,username,password,useremail,tel,info,mobile,user_group,zip,fax,reg_date,status,activate_id,country,city,website,view_dir,view_decor,details,discount) VALUES ('$fname','$fname_en', '$username', '$password_data', '$email', '$tel', '$info','$mobile','$user_group','$zip','$fax', '$reg_date', '$status' , '$activate_id' , '$country', '$city' , '$website', '$view_dir_q', '$view_decor_q', '$details', '$discount')") or die(mysql_error());

$USER_ID = MySQL_Insert_ID();

///////////////////////////////////////////////////////////////////////////
/// START INSERT INTO CATS
//////////////////////////////////////////////////////////////////////////

if(isset($_POST['catid'])){
//print_r($_POST);
$catid=$_POST['catid'];
//exit;
for($i=0;$i<count($catid);$i++){
$CATID = $catid[$i];
//---
mysql_query ("INSERT INTO `users_cats` (`userid`, `catid` , `view_dir`, `view_decor`) VALUES ('{$USER_ID}', '{$CATID}', '{$view_dir_q}', '{$view_decor_q}')") Or Die(MySQL_Error()); 
} // end for loop
} // end if set
///////////////////////////////////////////////////////////////////////////
/// END INSERT INTO CATS
//////////////////////////////////////////////////////////////////////////

if(!$in) {echo "<p align='center'><font color='#FF0000'><strong>هناك خطأ في قاعدة البيانات </strong></font></p>"; }

else {



//Mail the activation code



$to  = "$email" . ", " ; // note the comma



/* subject */

$subject = "حسابك في $db_site_name";



/* message */

$message = "

<html>

<head>

<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>

<title>نشّط حسابك في $db_site_name</title>

</head>



<body>

<table width='100%'  border='0' align='center' cellpadding='1'>

  <tr>

    <td><div align='center'>

      <p><font size='3' face='Arial, Helvetica, sans-serif'><strong><font color='#FF0000'>شكراً لانضمامك معنا في <br>

      </font><font color='#0000FF'>$db_site_name</font></strong></font></p>

      <table width='100%'  border='0' cellpadding='1'>

        <tr align='center'>

          <td colspan='2'><font color='#FF0000' size='2' face='Arial, Helvetica, sans-serif'><strong>معلومات حسابك </strong></font></td>

          </tr>

        <tr>

          <td width='14%'><div align='justify'><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>اسم المستخدم</font></div></td>

          <td width='86%'><div align='justify'><strong><font size='2' face='Arial, Helvetica, sans-serif'>{$_POST['username']}</font></strong></div></td>

        </tr>

        <tr>

          <td><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>كلمة المرور</font></td>

          <td><strong><font size='2' face='Arial, Helvetica, sans-serif'>{$_POST['password']}</font></strong></td>

        </tr>

        <tr>

          <td><div align='justify'><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>عنوان البريد الإلكتروني</font></div></td>

          <td><div align='justify'><strong><font size='2' face='Arial, Helvetica, sans-serif'>{$_POST['email']}</font></strong></div></td>

        </tr>

        <tr>

          <td><div align='justify'><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>رقم الهاتف</font></div></td>

          <td><div align='justify'><font size='2' face='Arial, Helvetica, sans-serif'><strong><font face='Arial, Helvetica, sans-serif'>{$_POST['tel']}</font></strong></font></div></td>

        </tr>

        <tr>

          <td><div align='justify'><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>الدولة</font></div></td>

          <td><div align='justify'><font size='2' face='Arial, Helvetica, sans-serif'><strong><font face='Arial, Helvetica, sans-serif'>{$_POST['country']}</font></strong></font></div></td>

        </tr>

      </table>

      <p><a href='http://www.$inside_domin'>$db_site_name </a>

    </div></td>

  </tr>

</table>

</body>

</html>

";



/* To send HTML mail, you can set the Content-type header. */

$headers  = "MIME-Version: 1.0\r\n";

$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";



/* additional headers */

$headers .= "To: $username <{$_POST['email']}>\r\n";

$headers .= "From: $db_site_name <$db_email>\r\n";



/* and now mail it */

mail($to, $subject, $message, $headers);





//////////////////////



echo "<p align='center'><strong><font size='4'>تمت عملية التسجيل بنجاح</font></strong></p>";

echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?action=add'>";



/////// UNSET SESSIONS IF POSTED

if (isset($_POST['submit'])) {

foreach($_POST as $key=>$value){

if ($key!="submit"){

unset($_SESSION["users_"."$key"]);

} // end if key is not submit

} // end foreach

} // end if posted

/////// END UNSET SESSIONS IF POSTED



}



////////////////////////////////////////////////////////////////////////////////// !="application/x-shockwave-flash"

////////////////////////////////////////////////////////////////////////////////////////////////

} elseif ($_FILES['photo']['type'] !="image/pjpeg" && @$_FILES['photo']['type'] !="image/gif" && @$_FILES['photo']['type'] !="image/jpeg" && @$_FILES['photo']['type'] !="application/x-shockwave-flash")

{

echo "<div align='center'><font color='#FF0000' face='Arial, Helvetica, sans-serif'><strong>

صيغة ملف الصورة غير صحيحة</br>صيغ الملفات الصحيحة هي(jpg & gif) فقط

</strong></font></div>";

}

elseif (@$_FILES['photo']['size'] > 2000000) //maxcimum size is 1 Mb

{

echo "<div align='center'><font color='#FF0000' face='Arial, Helvetica, sans-serif'><strong>

قد قمت برفع ملف صورة كبير الحجم</br>اقصى حجم لملف الصور ة هو 2 ميجا بايت

</strong></font></div>";

}

elseif (file_exists("$uploaddir1/{$final_pic1}"))

{

echo "<div align='center' class='msg'><strong>

تسمية ملف الصورة الذي تم اضافته غير صحيحة لوجود ملف آخر بنفس الاسم </br>اعد تسمية الملف وقم برفعه مرة أخرى

</strong></div>";

} else {

if (move_uploaded_file(@$_FILES['photo']['tmp_name'], $uploadfile1))

{

chmod("$uploaddir1/{$final_pic1}", 0644);  // image directory; permission



/////////////////////

echo "

<div class='text' align='center'>

تم رفع ملف الصورة بنجاح<br>

</div>

";

/////////////////////

echo "<br>";

/////////////////////

create_thumbs("$uploaddir1",$uploaddir2,$final_pic1,169,128);

/////////////////////



if($username !=""){

// ck ID if exist

$query = MySQL_Query("SELECT userid FROM users WHERE username='$username'") Or Die(MySQL_Error());

// if select detact more than 0 result exit

if(MySQL_Num_Rows($query) > 0)

{

// print error already exist

echo '

<div align="center" class="msg"><strong>اسم المستخدم '.$username.' مسجل مسبقاً</strong></div>

';

exit;

}



//free the memory from the select result

MySQL_Free_Result($query);



} // end check if username is empty



///////// ck email



if($email !=""){

// ck user if exist

$query = MySQL_Query("SELECT userid FROM users WHERE useremail='$email'") Or Die(MySQL_Error());

// if select detact more than 0 result exit

if(MySQL_Num_Rows($query) > 0)

{

// print error already exist

echo '

<div align="center"  class="msg"><strong>عنوان البريد الإلكتروني '.$email.' مسجل مسبقاً</strong></div>

';

exit;

}



//free the memory from the select result

MySQL_Free_Result($query);

} // end check if email is empty



// MD5 the password

$password_data = md5($password);



// variables

$info = addslashes($info);

$reg_date = date('jS of F Y');

$activate_id = substr(md5(time().crypt(time())), 16, 8);

$status= 1;



// add to admin table

$in = MySQL_Query("INSERT INTO users (fname,fname_en,username,password,useremail,tel,info,mobile,user_group,zip,fax,reg_date,status,activate_id,country,city,photo,website,view_dir,view_decor,details,discount) VALUES ('$fname','$fname_en', '$username', '$password_data', '$email', '$tel', '$info','$mobile','$user_group','$zip','$fax', '$reg_date', '$status' , '$activate_id' , '$country', '$city' ,   '$final_pic1','$website', '$view_dir_q', '$view_decor_q','$details','$discount')")or die(mysql_error());

$USER_ID = mysql_insert_id();

///////////////////////////////////////////////////////////////////////////
/// START INSERT INTO CATS
//////////////////////////////////////////////////////////////////////////

if(isset($_POST['catid'])){
//print_r($_POST);
$catid=$_POST['catid'];
//exit;
for($i=0;$i<count($catid);$i++){
$CATID = $catid[$i];
//---
mysql_query ("INSERT INTO `users_cats` (`userid`, `catid` , `view_dir`, `view_decor`) VALUES ('{$USER_ID}', '{$CATID}', '{$view_dir_q}', '{$view_decor_q}')") Or Die(MySQL_Error()); 
} // end for loop
} // end if set
///////////////////////////////////////////////////////////////////////////
/// END INSERT INTO CATS
//////////////////////////////////////////////////////////////////////////

if(!$in) {echo "<p align='center'><font color='#FF0000'><strong>هناك خطأ في قاعدة البيانات </strong></font></p>"; }

else {

//Mail the activation code



$to  = "$email" . ", " ; // note the comma



/* subject */

$subject = "حسابك في $db_site_name";



/* message */

$message = "

<html>

<head>

<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>

<title>نشّط حسابك في $db_site_name</title>

</head>



<body>

<table width='100%'  border='0' align='center' cellpadding='1'>

  <tr>

    <td><p><font size='3' face='Arial, Helvetica, sans-serif'><strong><font color='#FF0000'>شكراً لانضمامك معنا في <br>

    </font><font color='#0000FF'>$db_site_name</font></strong></font></p>

      <table width='100%'  border='0' cellpadding='1'>

        <tr align='center'>

          <td colspan='2'><font color='#FF0000' size='2' face='Arial, Helvetica, sans-serif'><strong>معلومات حسابك </strong></font></td>

        </tr>

        <tr>

          <td width='14%'><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>اسم المستخدم</font></td>

          <td width='86%'><strong><font size='2' face='Arial, Helvetica, sans-serif'>{$_POST['username']}</font></strong></td>

        </tr>

        <tr>

          <td><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>كلمة المرور</font></td>

          <td><strong><font size='2' face='Arial, Helvetica, sans-serif'>{$_POST['password']}</font></strong></td>

        </tr>

        <tr>

          <td><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>عنوان البريد الإلكتروني</font></td>

          <td><strong><font size='2' face='Arial, Helvetica, sans-serif'>{$_POST['email']}</font></strong></td>

        </tr>

        <tr>

          <td><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>رقم الهاتف</font></td>

          <td><font size='2' face='Arial, Helvetica, sans-serif'><strong><font face='Arial, Helvetica, sans-serif'>{$_POST['tel']}</font></strong></font></td>

        </tr>

        <tr>

          <td><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>الدولة</font></td>

          <td><font size='2' face='Arial, Helvetica, sans-serif'><strong><font face='Arial, Helvetica, sans-serif'>{$_POST['country']}</font></strong></font></td>

        </tr>

      </table>

    <p><a href='http://www.$inside_domin'>$db_site_name </a></td>

  </tr>

</table>

</body>

</html>

";



/* To send HTML mail, you can set the Content-type header. */

$headers  = "MIME-Version: 1.0\r\n";

$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";



/* additional headers */

$headers .= "To: $username <{$_POST['email']}>\r\n";

$headers .= "From: $db_site_name <$db_email>\r\n";



/* and now mail it */

mail($to, $subject, $message, $headers);





//////////////////////



echo "<p align='center'><strong><font size='4'> تمت عملية التسجيل بنجاح</font></strong></p>";

echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?action=add'>";



/////// UNSET SESSIONS IF POSTED

if (isset($_POST['submit'])) {

foreach($_POST as $key=>$value){

if ($key!="submit"){

unset($_SESSION["users_"."$key"]);

} // end if key is not submit

} // end foreach

} // end if posted

/////// END UNSET SESSIONS IF POSTED

}



///////////

/////////////////////

} else {

echo "<div align='center' class='msg'><strong>

خطأ، لم يتم رفع ملف الصورة، تأكد من فضلك من تصاريح مجلد الصور

</strong></div>";

} // end else move file



}

break;



/////////////////////

/////////////
case "edit";
$userid= @$_GET['userid'];
//////////////////////////////////
// image dir
$uploaddir1 = "../$db_upload_dir/profile/"; //change the name of the directory to upload files
$uploaddir2 = "../$db_upload_dir/profile/thumbnails/"; //change the name of the directory to upload files
//////////
$in = mysql_query (" SELECT * FROM users WHERE userid='$userid' ") Or Die(MySQL_Error());
// while
while($action = mysql_fetch_array($in)){
// data input
extract ($action);
$info = stripslashes($info);
///// active not active
if($status == '1'){$act = "<option value='1' selected>مفعل</option>";}
else{$act = "<option value='1'>مفعل</option>";}
//
if($status == '0'){$act2 = "<option value='0' selected>غير مفعل</option>";}
else{$act2 = "  <option value='0'>غير مفعل</option>";}

/////////////////////
////////////////////////// ------------------
$images_list = mysql_query("SELECT * FROM images  WHERE userid='{$action['userid']}' ")Or Die(MySQL_Error()); 
$images_list_num = mysql_num_rows ($images_list);
////////////////////////// ------------------

?>
  <br>
<form
 action='?action=update' method='POST' enctype="multipart/form-data" name='reg' id='reg' onSubmit="return formvalidation(this)">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
      <tr>
        <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>أضافة عضو</strong></td>
      </tr>
      <tr align="right">
        <td width="445" bgcolor="#CCCCCC" dir="rtl"><a href="images.php?action=add&userid=<?php echo $userid;?>">أضف صور</a> - العدد الموجود حاليا <a href="images.php?userid=<?php echo $userid;?>&buy_type=0">(<?php echo $images_list_num;?>)</a></td>
        <td width="141" bgcolor="#CCCCCC"><strong>الألبوم</strong></td>
      </tr>
  <!--    <tr align="right">
        <td width="396" bgcolor="#CCCCCC">
          <input name='username' id='username' value='<?php echo $username;?>' size='25' maxlength='255'>        </td>
        <td width="190" bgcolor="#CCCCCC"><strong>أسم المستخدم </strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><input name='password' type='password' id='password' size='25' maxlength='255'></td>
        <td bgcolor="#CCCCCC"><strong>الرقم السري </strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><input name='password2' type='password' id='password2' size='25' maxlength='255'></td>
        <td bgcolor="#CCCCCC"><strong>تأكيد الرقم السري </strong></td>
      </tr>
      <tr align="right">
        <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>معلومات إختيارية</strong></td>
      </tr>-->
      <tr align="right">
        <td bgcolor="#CCCCCC">
          <input name='fname' id='fname' value='<?php echo $fname;?>' size='25' maxlength="255"  dir="rtl">        </td>
        <td bgcolor="#CCCCCC"><strong>الأسم الكامل</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><input name='fname_en' id='fname_en' value='<?php echo $fname_en;?>' size='25' maxlength="255"  dir="rtl">        </td>
        <td bgcolor="#CCCCCC"><strong>English Name</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC">
          <input name='zip' id='zip' value='<?php echo $zip;?>' size='7' maxlength='11'>        </td>
        <td bgcolor="#CCCCCC"><strong>رقم فتح الخط</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><input name='tel' id='tel' value='<?php echo $tel;?>' size="25" maxlength="255"></td>
        <td bgcolor="#CCCCCC"><strong>الهاتف</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><span class="normal_text"><span class="error">
          <!--<input name="show_mobile" type="checkbox" id="show_mobile" value="1" <?php if($show_mobile==1) {?> checked="checked" <?php } ?> />
          </span> <span class="news_text">اجعله ظاهرا للناس--></span></span> 
          <input name='mobile' id='mobile' value='<?php echo $mobile;?>' size="25" maxlength="255"></td>
        <td bgcolor="#CCCCCC"><strong>النقال</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><font face='Verdana'><font size='2' face='Verdana'>
          <input name='fax' id='fax' value='<?php echo $fax;?>' size="25" maxlength="255">
        </font></font></td>
        <td bgcolor="#CCCCCC"><strong>الفاكس</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><input name='email' id='email' value='<?php echo $useremail;?>' size="25" maxlength="255">        </td>
        <td bgcolor="#CCCCCC"><strong>البريد الإلكتروني </strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><font face="Verdana"><font size="2" face="Verdana">
          <input name="website" class="navlink" id="website" value="<?php echo $website;?>" size="25" maxlength="255">
        </font></font></td>
        <td bgcolor="#CCCCCC"><strong>الموقع الإلكتروني</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC">
          <select name="country" id="country">
            <option value="0">أختر دولة</option>
            <?php
///// reg
$edit_cont = mysql_query("select * from countries ORDER BY id ASC");
/// cer
while($v_cont = mysql_fetch_array($edit_cont)){ 


if ($v_cont['id']==$action['country']) {$select_info="selected";} else {$select_info="";}

echo "<option value='{$v_cont['id']}' $select_info>{$v_cont['ar_name']}</option>";

}
mysql_free_result ($edit_cont);
?>
          </select></td>
        <td bgcolor="#CCCCCC"><strong>الدولة</strong></td>
      </tr>
      
      <tr align="right">
        <td bgcolor="#CCCCCC"><textarea name=info cols=40 rows=5 wrap="VIRTUAL" id="info" dir="rtl"><?php echo $info;?></textarea></td>
        <td valign="top" bgcolor="#CCCCCC"><strong>عنوان الشركة</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><textarea name=details cols=40 rows=5 wrap="VIRTUAL" id="details" dir="rtl"><?php echo $details;?></textarea></td>
        <td valign="top" bgcolor="#CCCCCC"><strong>النشاط</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><font face="Verdana"><font size="2" face="Verdana">
          <input name="discount" id="discount" value="<?php echo $discount;?>" size="25" maxlength="255">
        </font></font></td>
        <td bgcolor="#CCCCCC"><strong>نسبة التخفيض</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><?php if ($photo!='') {echo "<a href='$uploaddir1$photo' target='_blank'> شاهد الصورة الشخصية </a>"; }   ?>
          <input name="photo" type="file" id="photo">        </td>
        <td bgcolor="#CCCCCC"><strong>بنر شعار الشركة </strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC">
        
<select name='status' id='status' dir="rtl">
<?php
echo $act;
echo   $act2;
?>
</select></td>
        <td bgcolor="#CCCCCC"><strong>الحالة</strong></td>
      </tr>
      <tr align="right">
        <td bgcolor="#EEEEEE">&nbsp;</td>
        <td bgcolor="#EEEEEE">&nbsp;</td>
      </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC">
        
        
        <select name="user_group" id="user_group" dir="rtl">
            <option value="0">اختر مجموعة</option>
<?php
///// reg
$select_group = mysql_query("select * from users_group ORDER BY id ASC") or die(mysql_error());
/// cer
while($row_group = mysql_fetch_array($select_group)){ 


if ($row_group['id']==$action['user_group']) {
$select_info="selected";
} else {
$select_info="";
}
echo "<option value='{$row_group['id']}' $select_info>{$row_group['name']}</option>";
}
mysql_free_result ($select_group);
?>
        </select></td>
        <td bgcolor="#CCCCCC"><strong>المجموعة</strong></td>
      </tr>
      <tr>
        <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>خصائص الظهور</strong></td>
      </tr>
  <!--    <tr align="right">
        <td bgcolor="#CCCCCC"><input name="view_dir" type="checkbox" id="view_dir" value="1" <?php if ($action['view_dir']==1) {?> checked <?php }?>></td>
        <td bgcolor="#CCCCCC"><strong>دليل الشركات</strong></td>
      </tr>-->
      <tr align="right">
        <td bgcolor="#CCCCCC"><input name="view_decor" type="checkbox" id="view_decor" value="1" <?php if ($action['view_decor']==1) {?> checked <?php }?>></td>
        <td bgcolor="#CCCCCC"><strong>شريط الشركات المميزة </strong></td>
      </tr>
      <tr>
        <td colspan="2" align="center" bgcolor="#EEEEEE"><strong>تخصص العضوية</strong></td>
      </tr>
      <tr align="right">
        <td colspan="2" bgcolor="#CCCCCC"><div class="catid" dir="rtl">
          <?php
echo show_dropdown_newCat2('0',$action['userid'],'0');
?>
        </div></td>
        </tr>
      <tr align="right">
        <td bgcolor="#CCCCCC"><input name='view_dir' type='hidden' id='view_dir' value="1">
        <input name='show_mobile' type='hidden' id='show_mobile' value="1">
          <input name='password2' type='hidden' id='password2'>
          <input name='password' type='hidden' id='password'>
          <input name='username' type='hidden' id='username' value='<?php echo $username;?>'>
<input name='city' type='hidden' id='city' value='1'>
          
          <input name='userid' type='hidden' id='userid' value='<?php echo $userid;?>'>
          <input name='old_photo' type='hidden' id='old_photo' value='<?php echo $photo;?>'>        </td>
        <td bgcolor="#CCCCCC"><input name="submit" type="submit" class="smalltext" id="submit"  style="width:60px;" value="تــعديل"></td>
      </tr>
    </table></td>
  </tr>
</table>
</FORM>
<?php
}
break;
///////////////////
/////////////////////
case "update";

//////////
//CK the (magic_quotes_gpc) if it is (off) ... this is helpful to protection
/*if(!get_magic_quotes_gpc())
{
// Get what is in the  ($_POST)
foreach($_POST as $k=>$v)
{
  $_POST[$k] = addslashes($v);
}
}*/
//////////////
//////////////
$userid =$_POST["userid"];
$username =$_POST["username"];

$password=$_POST["password"];
$password2=$_POST["password2"];
//
$email=$_POST["email"];
//
$fname=$_POST["fname"];
$fname_en =$_POST["fname_en"];

$zip=$_POST["zip"];
$tel=$_POST["tel"];
$mobile=$_POST["mobile"];
$fax=$_POST["fax"];
$website=$_POST["website"];
$info=$_POST["info"];
$country=$_POST["country"];
$city=$_POST["city"];

$user_group=$_POST["user_group"];

$info=$_POST["info"];

$details=$_POST["details"];
$discount=$_POST["discount"];


$status = $_POST["status"];
$old_photo=$_POST["old_photo"];

if (isset($_POST["show_mobile"]) && $_POST["show_mobile"]==1) {
$show_mobile = 1;
$SHOW_CONTACT = ",  contact_phone2='$mobile'";
} else {
$show_mobile = 0;
$SHOW_CONTACT = ", contact_phone2=''";
}


/////===========
if (isset($_POST['view_dir']) && $_POST['view_dir']==1) {
$view_dir_q = "1";
} else {
$view_dir_q = "0";
}
/////===========
/////===========
if (isset($_POST['view_decor']) && $_POST['view_decor']==1) {
$view_decor_q = "1";
} else {
$view_decor_q = "0";
}
/////===========

// image
$uploaddir1 = "../$db_upload_dir/profile/"; //change the name of the directory to upload files
$uploaddir2 = "../$db_upload_dir/profile/thumbnails/"; //change the name of the directory to upload files
///////////////////////////////////////////////////////////////////////////////////////////////////
$date_print = date('jmY_');
/////////////////////////// Images rename /////////////////////////
if (!empty($_FILES['photo']['name'])) {
//////////////
$get_picname1 = findname($_FILES['photo']['name']);
$get_picexten1 = findtype($_FILES['photo']['name']);
// func
$pic_output1 = rand(999999, 100000);
////
$final_pic1 = "$date_print$pic_output1.$get_picexten1";
// image 1
$uploadfile1 = $uploaddir1 . basename($final_pic1);
}
///////////////////////////
//////////////////////////////////

if ($fname ==""){
echo"
<div align='center'><strong>
الرجاء كتابة الاسم كاملا
</strong></div>
";

} elseif ($email !="" && !isemail($email)){
echo"
<div align='center'><strong>
البريد الإلكتروني الذي أدخلته غير صحيح
</strong></div>
";

} elseif ($password!=$password2){
print "
<div align='center' class='msg'><strong>
كلمتا المرور غير متطابقتين
</strong></div>
";

} elseif($password !="" && !check_password($password)) {
echo "
<div align='center' class='msg'><strong>
تأكد من كتابتك ما بين 6 الى 25 حرفاً لكلمة المرور
</strong></div>
";

} elseif($zip !="" && !numbers_only($zip)){
echo "
<div align='center' class='msg'>
<strong>
تأكد من كتابتك للأرقام فقط في حقل رقم فتح الخط
</strong>
</div>
";

}elseif($tel !="" && !numbers_only($tel)){
echo "
<div align='center' class='msg'>
<strong>
        تأكد من كتابتك للأرقام فقط في حقل رقم الهاتف
</strong>
</div>
";

} elseif($user_group =="" || $user_group =="novalue" || $user_group =="0" || !numbers_only($zip)){
echo "
<div align='center' class='msg'>
<strong>
الرجاء أختيار قسما محدد للمؤسسة
</strong>
</div>
";

}elseif ($website !="" && $website !="http://www."  && !issite($website)){
echo"
<div align='center' class='msg'><strong>
من فضلك تأكد من صحة كتابتك لعنوان موقع الشركة الإلكتروني
</strong></div>
";

} elseif (!isset($_POST['catid']) || $_POST['catid'] == "" || $_POST['catid'] == "novalue") {

print "

<div align='center' class='msg'><strong>

الرجاء تحديد قسما للشركة

</strong></div>

"; 


} elseif ($password == "" && empty($_FILES['photo']['name'])){

$info = addslashes($info);

$in = mysql_query (" UPDATE users SET fname='$fname' , fname_en='$fname_en' ,  tel='$tel' ,  website='$website' , info='$info' , username='$username' , useremail='$email' , zip='$zip' , fax='$fax', city='$city', country='$country' , mobile='$mobile'  ,  show_mobile='$show_mobile'   , user_group='$user_group'  ,  status='$status' ,  info='$info' , details='$details' , discount='$discount' ,  view_dir='$view_dir_q' ,  view_decor='$view_decor_q'   WHERE userid='$userid' ")
Or Die(MySQL_Error());

$update_products = mysql_query ("UPDATE images SET contact_type='$user_group', contact_name='$fname' , contact_email='$email', contact_phone='$tel' $SHOW_CONTACT  WHERE userid='$userid' ") Or Die(MySQL_Error());


///////////////////////////////////////////////////////////////////////////
/// START INSERT INTO CATS
//////////////////////////////////////////////////////////////////////////

if(isset($_POST['catid'])){
//print_r($_POST);
/////// DELETE OLD
$delete_UC = mysql_query (" DELETE FROM users_cats WHERE userid='{$_POST['userid']}'") Or Die(MySQL_Error()); 
//////////////////

$catid=$_POST['catid'];
//exit;
for($i=0;$i<count($catid);$i++){
$CATID = $catid[$i];
//---
mysql_query ("INSERT INTO `users_cats` (`userid`, `catid` , `view_dir`, `view_decor`) VALUES ('{$_POST['userid']}', '{$CATID}', '{$view_dir_q}', '{$view_decor_q}')") Or Die(MySQL_Error()); 

} // end for loop
} // end if set
///////////////////////////////////////////////////////////////////////////
/// END INSERT INTO CATS
//////////////////////////////////////////////////////////////////////////


if(!$in) {
echo "<p align='center'><font color='#FF0000'><strong>هناك خطأ في قاعدة البيانات </strong></font></p>";
} else {
echo "<p align='center'><strong><font size='4'>تمت عملية التعديل بنجاح</font></strong></p> ";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?'>";
}
////////////////////////////////////////////////////////////////////////////////////////////////

} elseif ($password != "" && empty($_FILES['photo']['name'])){

if($password != "" && !check_password($password) && empty($_FILES['photo']['name'])){
echo "
<div align='center'><font color='#FF0000'><strong>
من فضلك تأكد من كتابتك لكلمة المرور بعدد احرف ما بين 6 الى 25 حرفاً
</strong></font></div>
";
}
elseif ($password != "" && $password!=$password2 && empty($_FILES['photo']['name']))
{
print "
<div align='center'><font color='#FF0000'><strong>
كلمتا المرور غير متطابقتين
</strong></font></div>
";
} else {
// MD5 the password
$password_data = md5($password);
$info = addslashes($info);
$in = mysql_query (" UPDATE users SET fname='$fname' , fname_en='$fname_en' ,  tel='$tel' ,  website='$website' , info='$info' , username='$username' , useremail='$email' , zip='$zip' , fax='$fax', city='$city', country='$country' ,  mobile='$mobile'  ,  show_mobile='$show_mobile'  , user_group='$user_group'  ,  status='$status', info='$info' , details='$details' , discount='$discount',  view_dir='$view_dir_q'  ,  view_decor='$view_decor_q' , password='$password_data' WHERE userid='$userid' ")
Or Die(MySQL_Error());

$update_products = mysql_query ("UPDATE images SET contact_type='$user_group', contact_name='$fname' , contact_email='$email', contact_phone='$tel' $SHOW_CONTACT  WHERE userid='$userid' ") Or Die(MySQL_Error());

///////////////////////////////////////////////////////////////////////////
/// START INSERT INTO CATS
//////////////////////////////////////////////////////////////////////////

if(isset($_POST['catid'])){
//print_r($_POST);
/////// DELETE OLD
$delete_UC = mysql_query (" DELETE FROM users_cats WHERE userid='{$_POST['userid']}'") Or Die(MySQL_Error()); 
//////////////////

$catid=$_POST['catid'];
//exit;
for($i=0;$i<count($catid);$i++){
$CATID = $catid[$i];
//---
mysql_query ("INSERT INTO `users_cats` (`userid`, `catid` , `view_dir`, `view_decor`) VALUES ('{$_POST['userid']}', '{$CATID}', '{$view_dir_q}', '{$view_decor_q}')") Or Die(MySQL_Error()); 

} // end for loop
} // end if set
///////////////////////////////////////////////////////////////////////////
/// END INSERT INTO CATS
//////////////////////////////////////////////////////////////////////////

if(!$in) {
echo "<p align='center'><font color='#FF0000'><strong>هناك خطأ في قاعدة البيانات </strong></font></p>";
} else {
echo "<p align='center'><strong><font size='4'>تمت عملية التعديل بنجاح</font></strong></p> ";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?'>";
}
} // end inside else
////////////////////////////////////////////////////////////////////////////////////////////////
} elseif ($password == "" && !empty($_FILES['photo']['name'])){

if ($_FILES['photo']['type'] !="image/pjpeg" && @$_FILES['photo']['type'] !="image/gif" && @$_FILES['photo']['type'] !="image/jpeg"  && @$_FILES['photo']['type'] !="application/x-shockwave-flash")
{
echo "<div align='center' class='error'><strong>
صيغة ملف الصورة غير صحيحة</br>صيغ الملفات الصحيحة هي(jpg & gif) فقط
</strong></div>";
}
elseif (@$_FILES['photo']['size'] > 2000000) //maxcimum size is 1 Mb
{
echo "<div align='center' class='error'><strong>
قد قمت برفع ملف صورة كبير الحجم</br>اقصى حجم لملف الصور ة هو 2 ميجا بايت
</strong></div>";
}
elseif (file_exists("$uploaddir1/{$final_pic1}"))
{
echo "<div align='center' class='error'><strong>
تسمية ملف الصورة الذي تم اضافته غير صحيحة لوجود ملف آخر بنفس الاسم </br>اعد تسمية الملف وقم برفعه مرة أخرى
</strong></div>";
} else {

if (move_uploaded_file(@$_FILES['photo']['tmp_name'], $uploadfile1))
{
chmod("$uploaddir1/{$final_pic1}", 0644);  // image directory; permission

//// delete old images
if ($old_photo!='' && $old_photo!='default.jpg') {
if (file_exists("$uploaddir1"."$old_photo"))  { unlink ("$uploaddir1"."$old_photo");}
if (file_exists("$uploaddir2"."$old_photo"))  { unlink ("$uploaddir2"."$old_photo");}
}
/////////////////////
echo "
<div class='text' align='center'>
تم رفع الصورة بنجاح<br>
Its type: {$_FILES['photo']['type']}<br>
Its extension : .$get_picexten1 <br>
<a href='$uploaddir1{$final_pic1}' target='_blank'>رابط الصورة</a>
</div>
";
/////////////////////
echo "<br>";
/////////////////////
create_thumbs("$uploaddir1",$uploaddir2,$final_pic1,150,150);
/////////////////////

// variables
$info = addslashes($info);
// add to admin table
$in = mysql_query (" UPDATE users SET fname='$fname' , fname_en='$fname_en' , tel='$tel' , info='$info' , website='$website' , username='$username' , useremail='$email' , zip='$zip' , fax='$fax', city='$city', country='$country' , mobile='$mobile'  ,  show_mobile='$show_mobile' , user_group='$user_group'  ,  status='$status',  info='$info' , details='$details' , discount='$discount' ,  view_dir='$view_dir_q' ,  view_decor='$view_decor_q' , photo='$final_pic1' WHERE userid='$userid' ")
Or Die(MySQL_Error());

$update_products = mysql_query ("UPDATE images SET contact_type='$user_group', contact_name='$fname' , contact_email='$email', contact_phone='$tel' $SHOW_CONTACT  WHERE userid='$userid' ") Or Die(MySQL_Error());

///////////////////////////////////////////////////////////////////////////
/// START INSERT INTO CATS
//////////////////////////////////////////////////////////////////////////

if(isset($_POST['catid'])){
//print_r($_POST);
/////// DELETE OLD
$delete_UC = mysql_query (" DELETE FROM users_cats WHERE userid='{$_POST['userid']}'") Or Die(MySQL_Error()); 
//////////////////

$catid=$_POST['catid'];
//exit;
for($i=0;$i<count($catid);$i++){
$CATID = $catid[$i];
//---
mysql_query ("INSERT INTO `users_cats` (`userid`, `catid` , `view_dir`, `view_decor`) VALUES ('{$_POST['userid']}', '{$CATID}', '{$view_dir_q}', '{$view_decor_q}')") Or Die(MySQL_Error()); 
} // end for loop
} // end if set
///////////////////////////////////////////////////////////////////////////
/// END INSERT INTO CATS
//////////////////////////////////////////////////////////////////////////

if(!$in) {echo "<p align='center'><font color='#FF0000'><strong>هناك خطأ في قاعدة البيانات </strong></font></p>"; }
else { echo "<p align='center'><strong><font size='4'> تمت عملية التعديل بنجاح</font></strong></p> ";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?'>";
}

} else {
echo "<div align='center' class='error'><strong>
خطأ، لم يتم رفع ملف الصورة، تأكد من فضلك من تصاريح مجلد الصور
</strong></div>";
} // end else move file
///////////
} // end inside else all

////////////////////////////////////////////////////////////////////////////////////////////////
} elseif($password != "" && !check_password($password) && !empty($_FILES['photo']['name'])){
echo "
<div align='center'><font color='#FF0000'><strong>
من فضلك تأكد من كتابتك لكلمة المرور بعدد احرف ما بين 6 الى 25 حرفاً
</strong></font></div>
";
}
elseif ($password != "" && $password!=$password2 && !empty($_FILES['photo']['name']))
{
print "
<div align='center'><font color='#FF0000'><strong>
كلمتا المرور غير متطابقتين
</strong></font></div>
";
////////////////////////////////////////////////////////////////////////////////////////////////
} elseif ($_FILES['photo']['type'] !="image/pjpeg" && @$_FILES['photo']['type'] !="image/gif" && @$_FILES['photo']['type'] !="image/jpeg"  && @$_FILES['photo']['type'] !="application/x-shockwave-flash")
{
echo "<div align='center' class='error'><strong>
صيغة ملف الصورة غير صحيحة</br>صيغ الملفات الصحيحة هي(jpg & gif) فقط
</strong></div>";
}
elseif (@$_FILES['photo']['size'] > 2000000) //maxcimum size is 1 Mb
{
echo "<div align='center' class='error'><strong>
قد قمت برفع ملف صورة كبير الحجم</br>اقصى حجم لملف الصور ة هو 2 ميجا بايت
</strong></div>";
}
elseif (file_exists("$uploaddir1/{$final_pic1}"))
{
echo "<div align='center' class='error'><strong>
تسمية ملف الصورة الذي تم اضافته غير صحيحة لوجود ملف آخر بنفس الاسم </br>اعد تسمية الملف وقم برفعه مرة أخرى
</strong></div>";
} else {

if (move_uploaded_file(@$_FILES['photo']['tmp_name'], $uploadfile1))
{
chmod("$uploaddir1/{$final_pic1}", 0644);  // image directory; permission

//// delete old images
if ($old_photo!='' && $old_photo!='default.jpg') {
if (file_exists("$uploaddir1"."$old_photo"))  { unlink ("$uploaddir1"."$old_photo");}
if (file_exists("$uploaddir2"."$old_photo"))  { unlink ("$uploaddir2"."$old_photo");}
}
/////////////////////
echo "
<div class='text' align='center'>
The photo uploaded successfully<br>
Its type: {$_FILES['photo']['type']}<br>
Its extension : .$get_picexten1 <br>
<a href='$uploaddir1{$final_pic1}' target='_blank'>رابط الصورة</a>
</div>
";
/////////////////////
echo "<br>";
/////////////////////
create_thumbs("$uploaddir1",$uploaddir2,$final_pic1,150,150);
/////////////////////
// MD5 the password
$password_data = md5($password);
// variables
$info = addslashes($info);
// add to admin table
$in = mysql_query (" UPDATE users SET fname='$fname' ,fname_en='$fname_en' ,  tel='$tel' , info='$info' , website='$website' , username='$username' , useremail='$email' , zip='$zip' , fax='$fax', city='$city', country='$country' , mobile='$mobile'  ,  show_mobile='$show_mobile' , user_group='$user_group'  , status='$status', , info='$info', details='$details' , discount='$discount' ,  view_dir='$view_dir_q'  ,  view_decor='$view_decor_q', password='$password_data', photo='$final_pic1' WHERE userid='$userid' ")
Or Die(MySQL_Error());

$update_products = mysql_query ("UPDATE images SET contact_type='$user_group', contact_name='$fname' , contact_email='$email', contact_phone='$tel' $SHOW_CONTACT WHERE userid='$userid' ") Or Die(MySQL_Error());

///////////////////////////////////////////////////////////////////////////
/// START INSERT INTO CATS
//////////////////////////////////////////////////////////////////////////

if(isset($_POST['catid'])){
//print_r($_POST);
/////// DELETE OLD
$delete_UC = mysql_query (" DELETE FROM users_cats WHERE userid='{$_POST['userid']}'") Or Die(MySQL_Error()); 
//////////////////

$catid=$_POST['catid'];
//exit;
for($i=0;$i<count($catid);$i++){
$CATID = $catid[$i];
//---
mysql_query ("INSERT INTO `users_cats` (`userid`, `catid` , `view_dir`, `view_decor`) VALUES ('{$_POST['userid']}', '{$CATID}', '{$view_dir_q}', '{$view_decor_q}')") Or Die(MySQL_Error()); 

} // end for loop
} // end if set
///////////////////////////////////////////////////////////////////////////
/// END INSERT INTO CATS
//////////////////////////////////////////////////////////////////////////

if(!$in) {echo "<p align='center'><font color='#FF0000'><strong>هناك خطأ في قاعدة البيانات </strong></font></p>"; }
else { echo "<p align='center'><strong><font size='4'> تمت عملية التعديل بنجاح</font></strong></p> ";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?'>";
}

} else {
echo "<div align='center' class='error'><strong>
خطأ، لم يتم رفع ملف الصورة، تأكد من فضلك من تصاريح مجلد الصور
</strong></div>";
} // end else move file
///////////
} // end else all
break;

///////////////////

//////////////////

case "delcon";

$userid =@$_GET['userid'];

//////////////////////////////////



////

$in = mysql_query (" SELECT * FROM users WHERE userid='$userid' ") Or Die(MySQL_Error());

// while

while($action = mysql_fetch_array($in)){

// data input

extract ($action);

///////////

?>

 <br>

<form

 action=?action=del method='POST' name='reg' id='reg' dir='rtl'>

<table width='95%' border='0' align='center' cellpadding='3' cellspacing='0'>

                                  <tr>

                                    <td colspan='3' align='center' class='text'><font color='#FF0000'><strong>معلومات العضو</strong></font></td>

                                  </tr>

                                  

                                  <tr valign='top' class='bodytextgrey'>

                                    <td class='text'><strong>أسم الكامل:</strong></td>

                                    <td colspan='2'> <?php echo $fname;?></td>

                                  </tr>

                                  <tr valign='top' class='bodytextgrey'>

                                    <td class='text'><strong>عنوان البريد الإلكتروني:</strong></td>

                                    <td colspan='2'><?php echo $useremail;?>

                                          <input name='userid' type='hidden' id='userid' value='<?php echo $userid;?>'>                                    </td>

                                  </tr>

                                  <tr>

                                    <td class='text'><input name='photo_name' type='hidden' id='photo_name' value='<?php echo $photo;?>'></td>

                                    <td colspan='2' class="error">هل أنت متأكد من عملية حذف العضو؟ </td>

                                  </tr>

                                  <tr>

                                    <td width='128' class='text'>&nbsp;</td>

                      <td width='167'>                                     

                                      <input name='doit' type='radio' value='no' checked>

                                    لا

                                    

                      <input name='doit' type='radio' value='yes'>

                      نعم</td>

                                    <td width='259'>

                                      <input name='submit' type=submit value='موافق'>

                                   </td>

                                  </tr>

  </table>

</FORM>



<?php

}

// resulte close

break;

//////////////////

case "del";

$doit = @$_POST["doit"];



if ($doit =="no"){

echo "

<strong><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif' dir='rtl'><br>

<br>

قد تم اختيار عدم حذف العضو، نرجو الانتظار للرجوع الى حيثما كنت... </font></strong>

";

echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";

}

else {

$userid = @$_POST["userid"];

//////////////////////////////////



////

$in = mysql_query (" DELETE FROM users WHERE userid='$userid' ") Or Die(MySQL_Error());



// image dir

$uploaddir1 = "../$db_upload_dir/profile/"; //change the name of the directory to upload files
$uploaddir2 = "../$db_upload_dir/profile/thumbnails/"; //change the name of the directory to upload files



if ($_POST['photo_name']!='') { 
unlink ($uploaddir1.$_POST['photo_name']);
}

if ($_POST['photo_name']!='') { 
unlink ($uploaddir2.$_POST['photo_name']);
}




// data input

echo "

<strong><font color='red' size='3' face='Arial, Helvetica, sans-serif' dir='rtl'><br>

<br>

تم حذف العضو. نرجو الانتضار للرجوع الى حيثما كنت... </font></strong>

";

echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}?'>";

// resulte close

}

break;

///////////////////////////////////////////////////

case "mailactive";

$userid = @$_GET['userid'];

//////////////////////////////////



////

$in = mysql_query (" SELECT * FROM users WHERE userid='$userid'")

Or Die(MySQL_Error());

while($action = mysql_fetch_array($in)){

extract ($action);





//Mail the activation code



$to  = "$useremail" . ", " ; // note the comma



/* subject */

$subject = "نشّط حسابك في $db_site_name";



/* message */

$message = "

<html>

<head>

<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>

<title>Activate your account at $db_site_name</title>

</head>



<body>

<table width='100%'  border='0' align='center' cellpadding='1'>

  <tr>

    <td><div align='center'>

      <p><font size='3' face='Arial, Helvetica, sans-serif'><strong><font color='#FF0000'>شكراً لانضمامك معنا في <br>

      </font><font color='#0000FF'>$db_site_name</font></strong></font></p>

      <table width='100%'  border='0' cellpadding='1'>

        <tr align='center'>

          <td colspan='2'><font color='#FF0000' size='2' face='Arial, Helvetica, sans-serif'><strong>معلومات التنشيط </strong></font></td>

          </tr>

        <tr>

          <td><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>تنشيط</font> <font color='#0000FF'>Link </font></td>

          <td><a href='http://www.$inside_domin/login.php?action=active&userid=$userid'>http://www.$inside_domin/login.php?action=active&amp;u=$userid</a></td>

        </tr>

        <tr>

          <td width='14%'><div align='justify'><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>رقم العضو </font></div></td>

          <td width='86%'><div align='justify'><strong><font size='2'>$userid</font></strong></div></td>

        </tr>

        <tr>

          <td><div align='justify'><font color='#0000FF' size='2' face='Arial, Helvetica, sans-serif'>كود التنشيط </font></div></td>

          <td><div align='justify'><strong><font size='2' face='Arial, Helvetica, sans-serif'>$activate_id</font></strong></div></td>

        </tr>

      </table>

      <p>

    </div></td>

  </tr>

</table>

</body>

</html>



";



/* To send HTML mail, you can set the Content-type header. */

$headers  = "MIME-Version: 1.0\r\n";

$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";



/* additional headers */

$headers .= "To: $username <$useremail>\r\n";

$headers .= "From: $db_site_name <$db_email>\r\n";



/* and now mail it */

mail($to, $subject, $message, $headers);





//////////////////////



echo "

<p align='center'><strong><font size='4'>تم إرسال كود التنشيط بنجاح </font></strong></p>

";



}



exit;

break;



//////////////////

case "active";

$userid= @$_GET['userid'];

//////////////////////////////////



////

//// result

$view_all = mysql_query("select * from users Where userid='$userid'");

// data input

while($do = mysql_fetch_array($view_all)){

extract ($do);

$in = mysql_query ("UPDATE users SET status='1'WHERE userid='$userid'")

Or Die(MySQL_Error());

echo "

<p><strong>تم تفعيل العضو</strong></p>

";

// resulte close

}

break;

//////////////////
/*/////////////////////////////////////////////////////////////

Main control



*////////////////////////////////////////////////////////////

default:


///// active not active
if(isset($_GET['status']) && $_GET['status']== '1'){
$act = "<option value='1' selected>مفعل</option>";
}else{
$act = "<option value='1'>مفعل</option>";
}
//
if(isset($_GET['status']) && $_GET['status']== '0'){
$act2 = "<option value='0' selected>غير مفعل</option>";
}else{
$act2 = "<option value='0'>غير مفعل</option>";
}


?>



<form action="?action=result" method="GET" name="search" id="search" dir="rtl">

  <TABLE width="500" align="center" cellpadding="3" class=box>

    <TBODY>

      <TR>
        <TD colspan="2" align="right" class=box>البحث عن عضو</TD>
        </TR>
      <TR>

        <TD width="108" class=box>الاسم</TD>

        <TD width="372" class=box><input name="criteria" type="text" id="criteria" value="<?php if (isset($_GET['criteria']) && $_GET['criteria']!=""){echo stripslashes($_GET['criteria']);}?>"></TD>
      </TR>

      <TR>
        <TD class=box>المجموعة</TD>
        <TD class=box><select name="user_group" id="user_group"  dir="rtl">
          <option value="novlue">الكل</option>
<?php
///// reg
$select_group = mysql_query("select * from users_group ORDER BY id ASC");
/// cer
while($row_group = mysql_fetch_array($select_group)){ 

if (isset($_GET['user_group']) && $_GET['user_group']!='' && $_GET['user_group']==$row_group['id']) {$SELECTED_CAT_ID= "selected";} else { $SELECTED_CAT_ID= "0";}

echo "<option value='{$row_group['id']}' $SELECTED_CAT_ID>{$row_group['name']}</option>";
}
mysql_free_result ($select_group);
?>
</select></TD>
      </TR>
      <TR>
        <TD class=box>الحالة</TD>
        <TD class=box><select name="status" id="status"  dir="rtl">
            <option value="novlue">الكل</option>
<?php
echo $act;
echo   $act2;
?>
          </select>
        </TD>
      </TR>
      <TR>

        <TD class=box>&nbsp;</TD>

        <TD class=box><input type="submit" name="Submit" value="ابحث"></TD>
      </TR>
    </TBODY>
  </TABLE>

</form>



<?php

/////////////////////////////////////////////////////////////////////////////
if (isset($_GET['criteria']) && $_GET['criteria']!=""){
$_GET['criteria'] = addslashes($_GET['criteria']);
$SEARCH_Q = "AND fname LIKE '%{$_GET['criteria']}%' ";
$SEARCH_U = "criteria={$_GET['criteria']}&";
}else{
$SEARCH_Q = "";
$SEARCH_U = "";
}
///=======================================
if (isset($_GET['user_group']) && $_GET['user_group']!="" && $_GET['user_group']!="0"  && $_GET['user_group']!="novlue"){
$_GET['user_group'] = intval($_GET['user_group']);
$user_group_Q = "AND user_group='{$_GET['user_group']}' ";
$user_group_U = "user_group={$_GET['user_group']}&";
}else{
$user_group_Q = "";
$user_group_U = "";
}

///=======================================
if (isset($_GET['status']) && $_GET['status']!="" && $_GET['status']!="0"  && $_GET['status']!="novlue"){
$_GET['status'] = addslashes($_GET['status']);
$STATUS_Q = "AND status='{$_GET['status']}' ";
$STATUS_U = "status={$_GET['status']}&";
}else{
$STATUS_Q = "";
$STATUS_U = "";
}
/////////////////////////////////////////////////////////////////////////////
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





$view_users = mysql_query("SELECT * FROM users WHERE userid!=0 $SEARCH_Q $STATUS_Q $user_group_Q ORDER BY userid DESC LIMIT $from, $max_results")Or Die(MySQL_Error());


/////////////////////////////////////////////////////////////////////////////////////////////



/////////

echo "
<table width='95%' height='32' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'  dir='rtl'>

<tr align='center'>

  <td width='22%'>الاسم</td>

  <td width='13%'>الهاتف</td>
  <td width='14%'>موبايل</td>

  <td width='13%'> البريد الإلكتروني</td>

  <td width='6%'>الألبوم</td>
  <td width='7%'>الحالة</td>
  <td width='9%'>أضف في الألبوم</td>

  <td width='6%'>أرسل رسالة </td>

  <td width='6%' height='30' valign='middle'>تعديل</td>

  <td width='4%' height='30' valign='middle'>حذف</td>
  </tr>
</table>
";



///////

while($users_row = mysql_fetch_array($view_users)){

$view_products = mysql_query("SELECT * FROM images WHERE userid='{$users_row['userid']}' AND buy_type='0' ") or die(mysql_error()); 
$num_products=mysql_num_rows($view_products);
//=
$view_productsR = mysql_query("SELECT * FROM images WHERE userid='{$users_row['userid']}' AND buy_type='1' ") or die(mysql_error()); 
$num_productsR=mysql_num_rows($view_productsR);
///// Active OR Not

/// stat

if($users_row['status'] == '1'){$act = "<strong><font color='#0000FF'>مفعل</font></strong>";}

else{$act = "<strong><font color='#FF0000'>غير مفعل</font></strong>";}

////////////



// go on

echo "
<table width='95%' height='31' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'  dir='rtl'>

<tr align='center'>

  <td width='22%'>{$users_row['fname']}</td>

  <td width='13%'>{$users_row['tel']}</td>
  <td width='14%'>{$users_row['mobile']}</td>

  <td width='13%'>{$users_row['useremail']}</td>

  <td width='6%'><a href='images.php?userid={$users_row['userid']}&buy_type=0'>$num_products</a></td>
  <td width='7%'>$act</td>
  <td width='9%'><a href='images.php?action=add&userid={$users_row['userid']}'>اضف في الألبوم</a></td>

  <td width='6%'><a href='members_maillist.php?action=mail&userid={$users_row['userid']}'>أرسل</a></td>

  <td width='6%' height='29' valign='middle'><a href='{$_SERVER['PHP_SELF']}?action=edit&userid={$users_row['userid']}'>تعديل</a></td>

  <td width='4%' height='29' valign='middle'><a href='{$_SERVER['PHP_SELF']}?action=delcon&userid={$users_row['userid']}'>حذف</a></td>
  </tr>
</table>
";

}



/////////////////////////

// Figure out the total number of results in DB:

$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM users WHERE userid!=0 $SEARCH_Q $STATUS_Q $user_group_Q"),0);



// Figure out the total number of pages. Always round up using ceil()

$total_pages = ceil($total_results / $max_results);



// Build Page Number Hyperlinks 

        if ($total_pages>1){

echo "<center dir='rtl'>اختر الصفحة<br />";

}

// Build Previous Link

if($page > 1){

    $prev = ($page - 1);

    echo "<a href=\"".$_SERVER['PHP_SELF']."?{$STATUS_U}{$STATUS_U}{$user_group_U}page=$prev\"><<السابق</a> ";

}



for($i = 1; $i <= $total_pages; $i++){

    if(($page) == $i){

        if ($total_pages>1){

        echo "$i ";

                }

        } else {

            echo "<a href=\"".$_SERVER['PHP_SELF']."?{$STATUS_U}{$STATUS_U}{$user_group_U}page=$i\">$i</a> ";

    }

}



// Build Next Link

if($page < $total_pages){

    $next = ($page + 1);

    echo "<a href=\"".$_SERVER['PHP_SELF']."?{$STATUS_U}{$STATUS_U}{$user_group_U}page=$next\">التالي>></a>";

}

echo "</center>";



/////////////////

break;

} // end switch

?>











  &nbsp;</p>

</div>

</body>

</html>

<?php

}

?>