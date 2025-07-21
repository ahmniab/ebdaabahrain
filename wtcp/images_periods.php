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
<title>مدة العرض</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
</head>

<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

 
<?php
if (!isset($_GET['action'])) {
$_GET['action'] = "{$_SERVER['PHP_SELF']}?action=default";
}

switch($_GET['action']){ 


/////////////////////////////////////////////////////////////////////////////////////////
case "add"; 
///////=================================================================================
?>

 <form action='?action=get_add' method='post' name='images_periods' id='images_periods'>
    <table width='450' border='0' align='center' cellpadding='1'>
      <tr>
        <td><table width='500' border='0' cellpadding='1'>
            <tr align='left' valign='top'>
              <td colspan="2" align="center" bgcolor="#eeeeee">اضافة مدة عرض جديدة</td>
            </tr>
            <tr align='left' valign='top'>
              <td width="420" align="right">
                <input name='TimeName' type='text' id='TimeName' dir="rtl">
              </td>
              <td width="70" align="right">عنوان المدة</td>
            </tr>
            <tr align='left' valign='top'>
              <td align="right"><strong>المدة بعدد الايام - 0 يعني مدة مفتوحة
                  <input name='TimeDays' type='text' id='TimeDays' dir="rtl">
              </strong></td>
              <td align="right">المدة بالايام</td>
            </tr>
            <tr align='left' valign='top'>
              <td align="right">
                <input name='TimeOrder' type='text' id='TimeOrder' dir="rtl" size="5" maxlength="11">
              </td>
              <td align="right">الترتيب</td>
            </tr>
            <tr align='left' valign='top'>
              <td align="right">
                <input name="status" type="hidden" id="status" value="1">
              </td>
              <td align="right">&nbsp;</td>
            </tr>
            <tr align='left' valign='top'>
              <td align="right"><input type='submit' name='Submit' value='اضافة'></td>
              <td align="right">&nbsp;</td>
            </tr>
            <tr align='left' valign='top'>
              <td colspan='2' align="center">&nbsp;</td>
            </tr>
        </table></td>
      </tr>
    </table>
</form>

<?php
///////=================================================================================
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "get_add"; 
///////=================================================================================

//CK the (magic_quotes_gpc) if it is (off) ... this is helpful to protection
if(!get_magic_quotes_gpc()) 
{ 
// Get what is in the  ($_POST) 
foreach($_POST as $k=>$v) 
{ 
  $_POST[$k] = addslashes($v); 
} 
} 

/*
Ck  if not empty fields
*/
//// info
$TimeName = $_POST['TimeName'];
$TimeDays = $_POST['TimeDays'];
$status = $_POST['status'];

$TimeName = addslashes ($TimeName);

/// ck
if ($TimeName == "") {

echo "
<div align='center'><strong><font color='#FF0000'>  الرجاء كتابة عنوان المدة </font></strong></div>
"; 
exit;
}

if ($TimeDays == "") {

echo "
<div align='center'><strong><font color='#FF0000'> الرجاء كتابة  المدة بعدد الايام</font></strong></div>
"; 
exit;
}

////////////////////////



// add to admin table
$in = MySQL_Query("INSERT INTO images_periods (TimeName,TimeDays,TimeOrder,status) VALUES ('$TimeName', '{$_POST['TimeDays']}','{$_POST['TimeDays']}', '{$_POST['status']}')") 
Or Die(MySQL_Error()); 
if(!$in) 
{
echo "
<p align='center'><font color='#FF0000'><strong> خلل .. لم يتم إضافة المدة </strong></font></p>
"; 
}
else 
{ 
echo "
<p align='center'><strong><font size='4'>تم إضافة المدة بنجاح</font></strong></p> 
";
}

///////=================================================================================
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "edit"; 
///////=================================================================================


$edit_images_periods = mysql_query("select * from images_periods where TimeID='{$_GET['TimeID']}' ") or die(mysql_error());

/// cer
while($edit = mysql_fetch_array($edit_images_periods)){ 
extract($edit);
$TimeName = stripslashes ("$TimeName");
$TimeDays = stripslashes ("$TimeDays");
////////

?>

<form action="?action=update" method="post" name="images_periods" id="images_periods">
    <table width="450" border="0" align="center" cellpadding="1">
      <tr>
        <td><table width="500" border="0" cellpadding="1">
            <tr align="left" valign="top">
              <td colspan="2" align="center" bgcolor="#EEEEEE">اضافة مدة عرض جديدة</td>
            </tr>
            <tr align="left" valign="top">
              <td width="420" align="right"><strong>
                <input name="TimeName" type="text" id="TimeName" value="<?php echo $TimeName; ?>" dir="rtl">
              </strong></td>
              <td width="70" align="right">عنوان المدة</td>
            </tr>
            <tr align="left" valign="top">
              <td align="right">
                <input name="TimeDays" type="text" id="TimeDays" value="<?php echo $TimeDays; ?>" dir="rtl">
              </td>
              <td align="right">المدة بالايام</td>
            </tr>
            <tr align='left' valign='top'>
              <td align="right">
                <input name='TimeOrder' type='text' id='TimeOrder' dir="rtl" value="<?php echo $TimeOrder; ?>" size="5" maxlength="11">
              </td>
              <td align="right">الترتيب</td>
            </tr>
            <tr align="left" valign="top">
              <td align="right">
                <input name="status" type="hidden" id="status" value="1">
                <input name="TimeID" type="hidden" id="TimeID" value="<?php echo $TimeID; ?>">
              </td>
              <td align="right">&nbsp;</td>
            </tr>
            <tr align="left" valign="top">
              <td align="right"><input type="submit" name="Submit" value="تعديل"></td>
              <td align="right">&nbsp;</td>
            </tr>
            <tr align="left" valign="top">
              <td colspan="2" align="center">&nbsp;</td>
            </tr>
        </table></td>
      </tr>
    </table>
</form>
	  
<?php 
	}


///////=================================================================================
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "update"; 
///////=================================================================================
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

/*
Ck  if not empty fields
*/
//// info 
$TimeID = $_POST['TimeID'];
$TimeName = $_POST['TimeName'];
$TimeDays = $_POST['TimeDays'];
$TimeName = $_POST['TimeName'];
$TimeOrder = $_POST['TimeOrder'];

$status = $_POST['status'];
$TimeName = addslashes ($TimeName);
/// ck
/// ck
if ($TimeName == "") {

echo "
<div align='center'><strong><font color='#FF0000'>  الرجاء كتابة عنوان المدة </font></strong></div>
"; 
exit;
}

if ($TimeDays == "") {

echo "
<div align='center'><strong><font color='#FF0000'> الرجاء كتابة  المدة بعدد الايام</font></strong></div>
"; 
exit;
}


//////////

// add to admin table
$in = mysql_query (" UPDATE images_periods SET TimeName='$TimeName' , TimeDays='$TimeDays', TimeOrder='$TimeOrder' ,  status='$status' WHERE TimeID='{$_POST['TimeID']}' ") 
Or Die(MySQL_Error()); 
if(!$in) 
{
echo "
<p align='center'><font color='#FF0000'><strong>خلل .. لم يتم التعديل </strong></font></p>
"; 
}
else 
{ 
echo "
<p align='center'><strong><font size='4'>تم تعديل  المدة بنجاح</font></strong></p> 
";
}
///////=================================================================================
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "delcon"; 
///////=================================================================================
$del_images_periods = mysql_query("select * from images_periods where TimeID='{$_GET['TimeID']}' ");

/// cer
while($del = mysql_fetch_array($del_images_periods)){ 
    extract($del);
	$TimeName = stripslashes ("$TimeName");

////////
echo "
<form method='post' action='?action=del' dir='rtl' lang='en'>
  <table width='70%'  border='0' align='center' cellpadding='1'>
    <tr>
      <td height='21' align='center'><table width='100%'  border='0' cellpadding='1' bgcolor='#0066CC'>
        <tr>
          <td valign='top' bgcolor='#999999'><table width='100%'  border='0' align='center' cellpadding='3' cellspacing='3' bordercolor='#0066CC' bgcolor='#0066CC'>
            <tr bgcolor='#FFFFFF'>
              <td width='18%'><strong>أسم المدة </strong></td>
              <td width='82%'>$TimeName</td>
            </tr>
          </table></td>
        </tr>
      </table>        
        <strong><font color='#FF0000'>
        <input name='TimeID' type='hidden' id='TimeID' value='$TimeID'>
        </font> <font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'>هل انت متأكد من رغبتك في حذف هذه المدة? </font></strong></td>
    </tr>
    <tr>
      <td height='66' align='center'>
      <span class='maintext'><span class='text'>
          <input name='doit' type='radio' value='no' checked>
        <font face='Arial, Helvetica, sans-serif'>لا</font></span> <font face='Arial, Helvetica, sans-serif'>
            <input name='doit' type='radio' value='yes'>
        نعم<br>
            </font></span> <span class='maintext'>
            <br>
            <input name='submit2' type=submit value='أتمم العملية'>
            </span> </td>
    </tr>
  </table>
</form>
";
}
///////=================================================================================
break; 
////////////////////////////////////////////////////////////////////////////////////////
case "del"; 
///////=================================================================================
$doit = $_POST["doit"];

if ($doit =="no")
{
echo "
<strong><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><br>
<br>
إخترت عدم حذا المدة .. الرجاء الإنتظار حتى يتم تحويلك إلى قائمة المدة </font></strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='javascript:history.go(-2);'>";
}
else {

//// result
$in = mysql_query (" DELETE FROM images_periods WHERE TimeID='{$_POST['TimeID']}' ") 
Or Die(MySQL_Error()); 
// data input
echo " 
<p><strong>تم حذف المدة بنجاح</strong></p> 
";
// resulte close
}
///////=================================================================================
break; 
////////////////////////////////////////////////////////////////////////////////////////
/*
Main control

*/
default: 
///////=================================================================================

if(!isset($_GET['page'])){ 
    $page = 1; 
} else { 
    $page = $_GET['page']; 
} 

// Define the number of results per page 
$max_results = 25; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 

// Perform MySQL query on only the current page number's results 

$view_all = mysql_query("SELECT * FROM images_periods ORDER BY TimeDays ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 

/////////////////////////////////////////////////////////////////////////////////////////////
                          
$num = mysql_num_rows ($view_all);
if ($num < 1) {
echo "لم يتم إدراج أي دولة"; 
} else {
/////////
echo "
<br>

<table width='95%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#006699' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse' dir='rtl'> 
<tr align='center' valign='middle'>
  <td width='86'>عنوان المدة</td>
  <td width='90'>المدة بعدد الايام</td>
  <td width='82' height='25'>تعديل</td>
  <td width='88' height='25'>حذف</td>
  </tr> 
</table>
"; 

///////
while($row = mysql_fetch_array($view_all)){ 


/// stat
    extract($row);
	$TimeName = stripslashes ("$TimeName");


// go on
echo "
<table width='95%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#006699' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse' dir='rtl'> 
<tr align='center' valign='middle'>
  <td width='86'>$TimeName</td>
  <td width='90'>$TimeDays</td>
  <td width='82' height='25'><a href='?action=edit&TimeID=$TimeID'>تعديل</a></td> 
  <td width='88' height='25'><a href='?action=delcon&TimeID=$TimeID'>حذف</a></td>
  </tr> 
</table>

";
}

/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM images_periods "),0)Or Die(MySQL_Error()); 

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
///////=================================================================================
break; 
////////////////////////////////////////////////////////////////////////////////////////
} 

?>

</body>
</html>
<?php
}
?>