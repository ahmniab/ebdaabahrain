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
<title>صفحة الأرقام</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center"><br>
  <strong>صفحة الأرقام </strong><br>
</div>
<div align="center">
  <p>
<?php
	
switch(@$_GET['action']){ 
/*
Main control

*/
default: 

//////////////
if(!isset($_GET['page'])){ 
    $page = 1; 
} else { 
    $page = @$_GET['page']; 
} 

// Define the number of results per page 
$max_results = 10; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 

// Perform MySQL query on only the current page number's results 

$view_all = mysql_query("SELECT * FROM numbers ORDER BY numid DESC LIMIT $from, $max_results"); 

/////////////////////////////////////////////////////////////////////////////////////////////
///////
$num=mysql_num_rows($view_all);
if($num==0){ 
echo "لم يتم أدراج أي رقم حتى الآن";
} else {
/////////
echo "
<div align='center'  dir='ltr' lang='en' > 
<center> 
<table width='64%' height='46' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#006600' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
  <td width='21%'><div align='center'>&#1581;&#1584;&#1601;</div></td>
  <td width='21%'><div align='center'><FONT face='MS Sans Serif' color=#52557c size=1><SPAN lang=en-us>&#1578;&#1593;&#1583;&#1610;&#1604;</SPAN></FONT></div></td> 
  <td width='22%' height='44' valign='middle'><div align='center'><FONT face='MS Sans Serif' color=#52557c size=1><SPAN lang=en-us>&#1606;&#1608;&#1593;&#1607;</SPAN></FONT></div></td> 
  <td width='36%' height='44' valign='middle'><div align='center'><FONT face='MS Sans Serif' color=#52557c size=1><SPAN lang=en-us>&#1575;&#1604;&#1585;&#1602;&#1605;</SPAN></FONT></div></td>
  </tr> 
</table>
"; 

///////
while($action = mysql_fetch_array($view_all)){ 
extract($action);


///// number type
if ($type==1) {
$type_info = 'رقم هاتف';
} elseif ($type==2) {
$type_info = 'رقم سيارة';
}else {
$type_info = 'غير محدد';
}

////////////

// go on
echo "
<div align='center'  dir='ltr' lang='en' > 
<center> 
<table width='64%' height='46' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#006600' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
  <td width='21%'><div align='center'><a href='{$_SERVER['PHP_SELF']}?action=delcon&numid=$numid'>&#1581;&#1584;&#1601;</a></div></td>
  <td width='21%'><div align='center'><FONT face='MS Sans Serif' color=#52557c size=1><SPAN lang=en-us><a href='{$_SERVER['PHP_SELF']}?action=edit&numid=$numid'>&#1578;&#1593;&#1583;&#1610;&#1604;</a></SPAN></FONT></div></td> 
  <td width='22%' height='44' valign='middle'><div align='center'><FONT face='MS Sans Serif' color=#52557c size=1><SPAN lang=en-us>$type_info</SPAN></FONT></div></td> 
  <td width='36%' height='44' valign='middle'><div align='center'><FONT face='MS Sans Serif' color=#52557c size=1><SPAN lang=en-us>$number</SPAN></FONT></div></td>
  </tr> 
</table>
";
}

/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM numbers "),0); 

// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 

// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center>Select a Page<br />"; 
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
break; 
//////////////////////////////////////////////
case "add"; 
?>
<form action="?action=getadd" method="post" name="add" id="add" lang="ar" dir="rtl">
  <table border="0" width="90%" cellspacing="0" cellpadding="0">
    <tr>
      <td><strong>رقم الهاتف</strong></td>
      <td><input name="number" type="text" id="number" size="20"></td>
    </tr>
    <tr>
      <td width="108"><strong>السعر</strong></td>
      <td width="627"><input name="price" type="text" id="price" size="20"></td>
    </tr>
    <tr>
      <td><strong>النوع</strong></td>
      <td><select name="type" id="type">
        <option value="novalue">أختر النوع</option>
        <option value="1">رقم هاتف</option>
        <option value="2">رقم سيارة</option>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="أضف الرقم" type="submit" id="أضف الرقم" value="أضف الرقم"></td>
    </tr>
  </table>
</form>


<?php
break; 

//////////////////////////////////////////////
case "getadd"; 
//////// var
// var 2
$number = @$_POST['number'];
$price = @$_POST['price'];
$type = @$_POST['type'];
//////////////////////////
if ($number == "") {
echo "لم تقم بكتابة الرقم";
}
elseif ($price=="") {
echo "الرجاء كتابة سعر الرقم";
}
elseif ($type=="novalue") {
echo "الرجاء اختيار نوع الرقم";
}
/////////////
else {
// add to ads table
$in = mysql_query ("INSERT INTO `numbers` (`number`, `price`, `type`) VALUES ('$number', '$price', '$type')") Or Die(MySQL_Error()); 
/////
if(!$in) {echo "<p align='center'><font color='#FF0000'><strong>خلل</strong></font></p>"; 
}else { echo "<p align='center'><strong><font size='4'>تم أضافة الرقم بنجاح</font></strong></p> ";} /// end data insert
}

break; 

//////////////////////////////////////////////
case "edit"; 
$numid = @$_GET['numid'];
//////
$edit_hand = mysql_query("select * from numbers where numid='$numid' ")Or Die(MySQL_Error());


/// cer
while($edit = mysql_fetch_array($edit_hand)){ 
extract($edit);

///// type
if($type == '1'){
$type_info = "
  <option value='1' selected>رقم هاتف</option>
";
}
else{
$type_info = "
  <option value='1'>رقم هاتف</option>
";
}
if($type == '2'){
$type_info2 = "
  <option value='2' selected>رقم سيارة</option>
";
}
else{
$type_info2 = "
  <option value='2'>رقم سيارة</option>
";
}
/////////
?>
<strong><font size="2" face="Arial, Helvetica, sans-serif">
</font></strong>
<form action='?action=update' method='post' enctype='multipart/form-data' name='add' id='add' lang='ar' dir="rtl">
  <table border="0" width="90%" cellspacing="0" cellpadding="0">
    <tr>
      <td><strong>رقم الهاتف</strong></td>
      <td><input name="number" type="text" id="number" value="<?php echo $number;?>" size="20"></td>
    </tr>
    <tr>
      <td width="108"><strong>السعر</strong></td>
      <td width="627"><input name="price" type="text" id="price" value="<?php echo $price;?>" size="20"></td>
    </tr>
    <tr>
      <td><strong>النوع</strong></td>
      <td><select name="type" id="type">
          <option value="novalue">أختر النوع</option>
<?php
echo "
$type_info
$type_info2
";
?>
      </select></td>
    </tr>
    <tr>
      <td><input name="numid" type="hidden" id="numid" value="<?php echo $numid;?>"></td>
      <td><input name="أضف الرقم" type="submit" id="أضف الرقم" value="عدل رقم"></td>
    </tr>
  </table>
</form>

<?php


}
break; 

//////////////////////////////////////////////
case "update"; 
// var 2
$numid = @$_POST['numid'];
$number = @$_POST['number'];
$price = @$_POST['price'];
$type = @$_POST['type'];
//////////////////////////
if ($number == "") {
echo "لم تقم بكتابة الرقم";
}
elseif ($price=="") {
echo "الرجاء كتابة سعر الرقم";
}
elseif ($type=="novalue") {
echo "الرجاء اختيار نوع الرقم";
}
/////////////
else {

// add to ads table
$in = mysql_query (" UPDATE numbers SET number='$number' , price='$price', type='$type' WHERE numid='$numid' ") Or Die(MySQL_Error()); 
/////
if(!$in) {echo "<p align='center'><font color='#FF0000'><strong>خلل</strong></font></p>"; }
else { echo "<p align='center'><strong><font size='4'>تم تعديل الرقم</font></strong></p> ";} /// end data insert

////////////
}

break; 

//////////////////////////////////////////////
case "delcon";

$numid = @$_GET['numid'];
////// 
$del_hand = mysql_query("select * from numbers where numid='$numid' ");

/// cer
while($del = mysql_fetch_array($del_hand)){ 
extract($del);
///// type
if($type == '1'){
$type_info = "رقم هاتف";
}
elseif ($type == '2'){
$type_info = "رقم سيارة";
}else{
$type_info = "غير محدد";
}
/////////

echo "
<form action='{$_SERVER['PHP_SELF']}?action=getdel' method='post' name='add' id='add' lang='ar' dir='rtl'>
 <table width='90%' border='0' align='center' cellpadding='0' cellspacing='0'>
    <tr>
      <td align='center'><div align='center'><strong><font color='#006600'>رقم الهاتف</font></strong></div></td>
      <td>$number</td>
    </tr>
    <tr>
      <td width='108' align='center'><div align='center'><strong><font color='#006600'>السعر</font></strong></div></td>
      <td width='627'>$price</td>
    </tr>
    <tr>
      <td align='center'><strong><font color='#006600'>النوع</font></strong></td>
      <td>$type_info</td>
    </tr>
    <tr>
      <td align='center'><input name='numid' type='hidden' id='numid' value='$numid'></td>
      <td>        <span class='maintext'><span class='text'>
      <input name='doit' type='radio' value='no' checked>
&#1604;&#1575; <font face='Arial, Helvetica, sans-serif'> </font></span> <font face='Arial, Helvetica, sans-serif'>
<input name='doit' type='radio' value='yes'>
 &#1606;&#1593;&#1605;
</font></span></td>
    </tr>
    <tr>
      <td align='center'>&nbsp;</td>
      <td><input name='&#1571;&#1590;&#1601; &#1575;&#1604;&#1585;&#1602;&#1605;' type='submit' id='&#1571;&#1590;&#1601; &#1575;&#1604;&#1585;&#1602;&#1605;' value='&#1571;&#1606;&#1580;&#1586;'></td>
    </tr>
  </table>
</form>
";


}
break;

//////////////////////////////////////////////
case "getdel"; 
/////////
if (!isset($_POST["doit"])) {
echo "
<strong><font color='#006600' size='3' face='Arial, Helvetica, sans-serif'><br>
<br>
لقد أخترت عدم حذف الرقم ... أنتظر قليلا حتى يتم توجيهك للوحة التحكم بالأرقام</font></strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";
} else {
if ($_POST["doit"] =="no")
{
echo "
<strong><font color='#006600' size='3' face='Arial, Helvetica, sans-serif'><br>
<br>
لقد أخترت عدم حذف الرقم ... أنتظر قليلا حتى يتم توجيهك للوحة التحكم بالأرقام</font></strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";
}
else {
$numid = $_POST["numid"];

//// result
$in = mysql_query (" DELETE FROM numbers WHERE numid=$numid") Or Die(MySQL_Error()); 
// data input
echo " 
<p><strong>تم حذف الرقم</strong></p> 
";
// resulte close
}
} // end if set
break;
//////////////////////////////////////////////
}///// end switch

?>
</p>
</div>

</body>
</html>
<?php
}
?>