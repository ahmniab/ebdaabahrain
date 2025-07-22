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
<title>الدول</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <p align="center">
<?php
if (!isset($_GET['action'])) {
$_GET['action'] = "{$_SERVER['PHP_SELF']}?action=default";
}

switch($_GET['action']){ 


////////////////
/////////////
case "add"; 

?>
 </p>
  <form action='?action=get_add' method='post' name='users_group' id='users_group'>
    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
            <tr>
              <td colspan="2" align="center" bgcolor="#EEEEEE"><strong><span  class="smalltext">إضافة مجموعة</span></strong></td>
            </tr>
            <tr align="right">
              <td width="396" bgcolor="#CCCCCC"><font color='#006633' size="2" face="Arial, Helvetica, sans-serif"><strong>
                <input name='name' type='text' id='name' dir="rtl">
              </strong></font></td>
              <td width="190" bgcolor="#CCCCCC"><strong>أسم المجوعة</strong></td>
            </tr>
            <tr align="right">
              <td bgcolor="#CCCCCC">&nbsp;</td>
              <td bgcolor="#CCCCCC"><input type='submit' name='Submit' value='إضافة'></td>
            </tr>
        </table></td>
      </tr>
    </table>
  </form>

<?php

break; 
///////////
//////////////
case "get_add"; 

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
$name = $_POST['name'];

$name = addslashes ($name);

/// ck
if ($name == "") {

echo "
<div align='center'><strong><font color='#FF0000'>  الرجاء كتابة أسم المجموعة باللغة الإنكلنزية </font></strong></div>
"; 

} else {



////////////////////////

///////// ck email


// ck user if exist
$query = MySQL_Query("SELECT id FROM users_group WHERE name='{$_POST['name']}'") Or Die(MySQL_Error()); 
// if select detact more than 0 result exit
if(MySQL_Num_Rows($query) > 0) { 
// print error already exist
echo '
<div align="center"><font color="#FF0000"><strong>أسم المجموعة '.$_POST['name'].' مدرج مسبقا</strong></font></div>
'; 

} else {

//free the memory from the select result
MySQL_Free_Result($query); 


// add to admin table
$in = MySQL_Query("INSERT INTO users_group (name) VALUES ('$name')") 
Or Die(MySQL_Error()); 
if(!$in) {
echo "
<p align='center'><font color='#FF0000'><strong> خلل .. لم يتم إضافة المجموعة </strong></font></p>
"; 

} else { 
echo "
<p align='center'><strong><font size='4'>تم إضافة المجموعة بنجاح</font></strong></p> 
";
}

} // end if exist
} /// end alll 
break; 
/////////////
//////////////

case "edit"; 



$edit_users_group = mysql_query("select * from users_group where id='{$_GET['id']}' ");

/// cer
while($edit = mysql_fetch_array($edit_users_group)){ 
extract($edit);
$name = stripslashes ("$name");
////////

?>

<form action="?action=update" method="post" name="users_group" id="users_group">
  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#666666"><table width="600" border="0" cellpadding="2">
          <tr>
            <td colspan="2" align="center" bgcolor="#EEEEEE"><strong><span  class="smalltext">إضافة مجموعة</span></strong></td>
          </tr>
          <tr align="right">
            <td width="396" bgcolor="#CCCCCC"><font color="#006633"><strong>
              <input name="name" type="text" id="name" value="<?php echo $name; ?>" dir="rtl">
            </strong></font></td>
            <td width="190" bgcolor="#CCCCCC"><strong>أسم الموقع</strong></td>
          </tr>
          <tr align="right">
            <td bgcolor="#CCCCCC"><font color="#006633"><strong>
              <input name="id" type="hidden" id="id" value="<?php echo $id; ?>">
            </strong></font></td>
            <td bgcolor="#CCCCCC"><input type="submit" name="Submit" value="تعديل"></td>
          </tr>
      </table></td>
    </tr>
  </table>
  </form>
	  
<?php 
	}




break; 
///////////////////
/////////////////////
case "update"; 

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
$name = $_POST['name'];

$name = addslashes ($name);
/// ck
if ($name == "") {

echo "
<div align='center'><strong><font color='#FF0000'>  الرجاء كتابة أسم المجموعة باللغة الإنلكنزية </font></strong></div>
"; 
exit;
}



//////////

// add to admin table
$in = mysql_query (" UPDATE users_group SET name='$name' WHERE id='{$_POST['id']}' ") 
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
<p align='center'><strong><font size='4'>تم تعديل مسمى المجموعة بنجاح</font></strong></p> 
";
}

break; 


//////////////////
/////////////////
case "delcon"; 

$del_users_group = mysql_query("select * from users_group where id='{$_GET['id']}' ");

/// cer
while($del = mysql_fetch_array($del_users_group)){ 
    extract($del);
	$name = stripslashes ("$name");

////////
echo "
<form method='post' action='{$_SERVER['PHP_SELF']}?action=del' dir='rtl' lang='en'>
  <table width='70%'  border='0' align='center' cellpadding='1'>
    <tr>
      <td height='21' align='center'><table width='100%'  border='0' cellpadding='1' bgcolor='#0066CC'>
        <tr>
          <td valign='top' bgcolor='#999999'><table width='100%'  border='0' align='center' cellpadding='3' cellspacing='3' bordercolor='#0066CC' bgcolor='#0066CC'>
            <tr bgcolor='#FFFFFF'>
              <td width='18%'><strong>أسم المجموعة </strong></td>
              <td width='82%'>$name</td>
            </tr>
          </table></td>
        </tr>
      </table>        
        <strong><font color='#FF0000'>
        <input name='id' type='hidden' id='id' value='$id'>
        </font> <font color='#FF0000' size='3' face='Arial, Helvetica, sans-serif'>هل انت متأكد من رغبتك في حذف هذه المجموعة? </font></strong></td>
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
break; 


///////////////////
//////////////////
case "del"; 

$doit = $_POST["doit"];

if ($doit =="no")
{
echo "
<strong><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><br>
<br>
إخترت عدم حذا المجموعة .. الرجاء الإنتظار حتى يتم تحويلك إلى قائمة الدول </font></strong>
";
echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='javascript:history.go(-2);'>";
}
else {

//// result
$in = mysql_query (" DELETE FROM users_group WHERE id='{$_POST['id']}' ") 
Or Die(MySQL_Error()); 
// data input
echo " 
<p><strong>تم حذف المجموعة بنجاح</strong></p> 
";
// resulte close
}
break; 

///////////////////
//////////////////
case "show"; 
/// dir ///////////////


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
$id = intval ($_GET['id']);

$view_all = mysql_query("select * from users WHERE user_group='$id' ORDER BY username ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 

/////////////////////////////////////////////////////////////////////////////////////////////
$num = mysql_num_rows ($view_all);
if ($num < 1) {
echo "لا توجد أي مؤسسة  في هذه المجموعة"; 
} else {

/////////
echo "
<table width='95%' height='32' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'  dir='rtl'>
<tr align='center'>
  <td width='27%'>الإسم المستخدم</td>
  <td width='31%'>عنوان البريد الإلكتروني</td>
  <td width='17%'>التفعيل</td>
  <td width='12%'>أرسل بريداً إلكترونياً</td>
  <td width='5%' height='30' valign='middle'>تعديل</td>
  <td width='8%' height='30' valign='middle'>حذف</td>
  </tr>
</table>
"; 

///////
while($action = mysql_fetch_array($view_all)){ 
extract($action);
///// Active OR Not
/// stat
if($status == '1'){$act = "<strong><font color='#0000FF'>مفعل</font></strong>";}
else{$act = "<strong><font color='#FF0000'>غير مفعل</font></strong>";}
////////////

// go on
echo "
<table width='95%' height='31' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'  dir='rtl'>
<tr align='center'>
  <td width='27%'>$username</td>
  <td width='31%'>$useremail</td>
  <td width='17%'>$act</td>
  <td width='12%'><a href='members.php?action=mail&userid=$userid'>أرسل بريداً الكترونياً</a></td>
  <td width='5%' height='29' valign='middle'><a href='members.php?action=edit&userid=$userid'>تعديل</a></td>
  <td width='8%' height='29' valign='middle'><a href='members.php?action=delcon&userid=$userid'>حذف</a></td>
  </tr>
</table>

";

} // END WHILE
/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM users WHERE user_group='$id'"),0)Or Die(MySQL_Error()); 

// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 

// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center>Select a Page<br />"; 
}
// Build Previous Link 
if($page > 1){ 
    $prev = ($page - 1); 
    echo "<a href=\"".$_SERVER['PHP_SELF']."?action=show&id={$_GET['id']}&page=$prev\"><< Previous</a> "; 
} 

for($i = 1; $i <= $total_pages; $i++){ 
    if(($page) == $i){ 
	if ($total_pages > 1){
        echo "$i "; 
		}
        } else { 
            echo "<a href=\"".$_SERVER['PHP_SELF']."?action=show&id={$_GET['id']}&page=$i\">$i</a> "; 
    } 
} 

// Build Next Link 
if($page < $total_pages){ 
    $next = ($page + 1); 
    echo "<a href=\"".$_SERVER['PHP_SELF']."?action=show&id={$_GET['id']}&page=$next\">Next >></a>"; 
} 
echo "</center>";

/////////////////
} // ENd if there are no result
break; 

/////////////////////
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
$max_results = 30; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 

// Perform MySQL query on only the current page number's results 

$view_all = mysql_query("SELECT * FROM users_group ORDER BY name ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 

/////////////////////////////////////////////////////////////////////////////////////////////
                          
$num = mysql_num_rows ($view_all);
if ($num < 1) {
echo "لم يتم إدراج أي مجموعة"; 
} else {
/////////
echo "
<table width='95%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#006699' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse' dir='rtl'> 
<tr align='center' valign='middle'>
  <td width='86'>إسم المجموعة</td>
  <td width='90'>الأعضاء</td>
  <td width='82' height='25'><font size='2' face='Tahoma'><span lang='ar-sa'>تعديل</span> </font></td>
  <td width='88' height='25'><p align='center'><span lang='ar-sa'>حذف</span></td>
  </tr> 
</table>
"; 

///////
while($row = mysql_fetch_array($view_all)){ 


/// stat
    extract($row);
	$name = stripslashes ("$name");
	
	
////////////
$view_user = mysql_query("SELECT * FROM users WHERE user_group='$id' ")Or Die(MySQL_Error()); 
$user_num = mysql_num_rows ($view_user);

////////////
if ($user_num < 1) {
$user_show = "لا يوجد";
} else {
$user_show = "<a href='{$_SERVER['PHP_SELF']}?action=show&id=$id'>مشاهدة ($user_num) </a>";
}
// go on
echo "
<table width='95%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#006699' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse' dir='rtl'> 
<tr align='center' valign='middle'>
  <td width='86'>$name</td>
  <td width='90'>$user_show</td>
  <td width='82' height='25'><a href='{$_SERVER['PHP_SELF']}?action=edit&id=$id'><font face='Tahoma'><span lang='ar-sa'><font size='2'>تعديل</font></span></font></a></td> 
  <td width='88' height='25'><p align='center'><span lang='ar-sa'><a href='{$_SERVER['PHP_SELF']}?action=delcon&id=$id'>حذف</a></span></td>
  </tr> 
</table>

";
}

/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM users_group "),0)Or Die(MySQL_Error()); 

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
break; 
} 

?>




   
  
  &nbsp;
  </p>
</div>
</body>
</html>
<?php
}
?>