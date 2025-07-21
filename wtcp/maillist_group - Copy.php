<?php

include ('includes/header.php');

//////////////////////////////////////////////////

if ($authorization != '1') {



print "<script language=\"JavaScript\">";

print "window.location = 'login.php' ";

print "</script>";

/* include ("login.php");  Redirect browser */

exit;



} else { 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<title>المجموعات البريدية</title>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">

<link href="images/cpstyle.css" rel="stylesheet" type="text/css">

</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div align="center">

  <p align="center"><strong><font color="#006600" face="Arial, Helvetica, sans-serif"><br>

        </font><font color="#006600"><font color="006699">المجموعات البريدية</font></font></strong></p>

  <p>

 

<?php

if (!isset($_GET['action'])) {

$_GET['action'] = "{$_SERVER['PHP_SELF']}?action=default";

}



switch($_GET['action']){ 





////////////////

/////////////

case "add"; 



?>



 <form action='<?php echo $_SERVER['PHP_SELF'];?>?action=get_add' method='post' name='maillist_group' id='maillist_group' dir="rtl">

    <table width='450' border='0' align='center' cellpadding='1'>

      <tr>

        <td><table width='500' border='0' cellpadding='1'>

            <tr align='left' valign='top'>

              <td width="153">أسم المجموعة</td>

              <td width="337" align="right"><font color='#006633' size="2" face="Arial, Helvetica, sans-serif"><strong>

                <input name='name' type='text' id='name' dir="rtl">

              </strong></font></td>

            </tr>

            <tr align='left' valign='top'>

              <td colspan='2' align="center">                <input type='submit' name='Submit' value='أضـــف'>              </td>

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
/*
if(!get_magic_quotes_gpc()) 

{ 

// Get what is in the  ($_POST) 

foreach($_POST as $k=>$v) 

{ 

  $_POST[$k] = addslashes($v); 

} 

} */



/*

Ck  if not empty fields

*/

//// info

$name = $_POST['name'];

$name = addslashes ($name);



/// ck

if ($name == "") {



echo "

<div align='center'><strong><font color='#FF0000'>    الرجاء كتابة المجموعة  </font></strong></div>

"; 

exit;

}





////////////////////////



///////// ck email





// ck user if exist

$query = MySQL_Query("SELECT id FROM maillist_group WHERE name='{$_POST['name']}'") Or Die(MySQL_Error()); 

// if select detact more than 0 result exit

if(MySQL_Num_Rows($query) > 0) 

{ 

// print error already exist

echo '

<div align="center"><font color="#FF0000"><strong>أسم المجموعة '.$_POST['name'].' مدرج مسبقا</strong></font></div>

'; 

exit; 

} 



//free the memory from the select result

MySQL_Free_Result($query); 





// add to admin table

$in = MySQL_Query("INSERT INTO maillist_group (name) VALUES ('$name')") 

Or Die(MySQL_Error()); 

if(!$in) 

{

echo "

<p align='center'><font color='#FF0000'><strong> خلل .. لم يتم إضافة المجموعة </strong></font></p>

"; 

}

else 

{ 

echo "

<p align='center'><strong><font size='4'>تم إضافة المجموعة بنجاح</font></strong></p> 

";

}



break; 

/////////////

//////////////



case "edit"; 







$edit_maillist_group = mysql_query("select * from maillist_group where id='{$_GET['id']}' ");



/// cer

while($edit = mysql_fetch_array($edit_maillist_group)){ 

extract($edit);

$name = stripslashes ("$name");

////////



?>



<form action="<?php echo $_SERVER['PHP_SELF']; ?>?action=update" method="post" name="maillist_group" id="maillist_group" dir="rtl">

    <table width="450" border="0" align="center" cellpadding="1">

      <tr>

        <td><table width="500" border="0" cellpadding="1">

            <tr align="left" valign="top">

              <td width="153">أسم المجموعة</td>

              <td width="337" align="right"><font color="#006633"><strong>

                <input name="name" type="text" id="name" value="<?php echo $name; ?>" dir="rtl">

                <input name="id" type="hidden" id="id" value="<?php echo $id; ?>">

              </strong></font></td>

            </tr>

            <tr align="left" valign="top">

              <td colspan="2" align="center">                <input type="submit" name="Submit" value="عـــدل">              </td>

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

/*if(!get_magic_quotes_gpc()) 

{ 

// Get what is in the  ($_POST) 

foreach($_POST as $k=>$v) 

{ 

  $_POST[$k] = addslashes($v); 

} 

} 

*/

/*

Ck  if not empty fields

*/

//// info

$name = $_POST['name'];

$name = addslashes ($name);

/// ck

if ($name == "") {



echo "

<div align='center'><strong><font color='#FF0000'>  الرجاء كتابة المجموعة </font></strong></div>

"; 

exit;

}





//////////



// add to admin table

$in = mysql_query (" UPDATE maillist_group SET name='$name' WHERE id='{$_POST['id']}' ") 

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



$del_maillist_group = mysql_query("select * from maillist_group where id='{$_GET['id']}' ");



/// cer

while($del = mysql_fetch_array($del_maillist_group)){ 

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

إخترت عدم حذف المجموعة .. الرجاء الإنتظار حتى يتم تحويلك إلى قائمة المجموعات </font></strong>

";

echo "<META HTTP-EQUIV=Refresh CONTENT=4;URL='{$_SERVER['PHP_SELF']}'>";

}

else {



//// result

$in = mysql_query (" DELETE FROM maillist_group WHERE id='{$_POST['id']}' ") 

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

$max_results = 50; 



// Figure out the limit for the query based 

// on the current page number. 

$from = (($page * $max_results) - $max_results); 



// Perform MySQL query on only the current page number's results 

$id = intval ($_GET['id']);



$view_all = mysql_query("SELECT * FROM maillist WHERE e_group='$id' ORDER BY mailid ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 



/////////////////////////////////////////////////////////////////////////////////////////////

$num = mysql_num_rows ($view_all);

if ($num < 1) {

echo "لا توجد أي بريد إلكتروني  في هذه المجموعة"; 

} else {



$emails_all = mysql_query("SELECT * FROM maillist  WHERE e_group='$id' ")Or Die(MySQL_Error()); 

$num_emails = mysql_num_rows($emails_all);

echo "<strong> عدد الإيميلات المتوفرة الآن  $num_emails </strong> <br/> <br/>";



/////////

echo "

<br>

<table width='64%' height='28' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'  dir='rtl'> 

<tr align='center'>

  <td width='9%'>الرقم</td>

  <td width='59%'><font size='2' face='Arial, Helvetica, sans-serif'>البريد الألكتروني</font></td>

  <td width='13%'><font size='2' face='Arial, Helvetica, sans-serif'>أبعث بريدا </font></td>

  <td width='6%' height='26' valign='middle'><font size='2' face='Arial, Helvetica, sans-serif'><span lang='ar-sa'>عدل</span></font></td>

  <td width='13%' height='26' valign='middle'><p align='center'><font size='2' face='Arial, Helvetica, sans-serif'><span lang='ar-sa'>حذف</span></font></td>

  </tr> 

</table>

"; 







///////

while($action = mysql_fetch_array($view_all)){ 

$mailid = $action["mailid"]; 

$email = $action["email"]; 

$date  = $action["date"];



///// Active OR Not

/// stat



////////////



// go on

echo "

<table width='64%' height='24' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse' dir='rtl'> 

<tr align='center'>

  <td width='9%'>$mailid</td>

  <td width='59%'><FONT face='Arial, Helvetica, sans-serif' color=#52557c size=2><SPAN lang=ar-sa>$email</SPAN></FONT></td>

  <td width='13%'><a href='{$_SERVER['PHP_SELF']}?action=mail&mailid=$mailid'><font face='Tahoma'><span lang='ar-sa'><font size='2' face='Arial, Helvetica, sans-serif'>أبعث بريدا</font></span></font></a></td>

  <td width='6%' height='22'><font size='2' face='Arial, Helvetica, sans-serif'><a href='maillist.php?action=edit&mailid=$mailid'><span lang='ar-sa'>عدل</span></a></font></td>

  <td width='13%' height='22'><p align='center'><font size='2' face='Arial, Helvetica, sans-serif'><span lang='ar-sa'><a href='maillist.php?action=delcon&mailid=$mailid'>حذف</a></span></font></td>

  </tr> 

</table>

";



} // END WHILE

/////////////////////////

// Figure out the total number of results in DB: 

$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM maillist  WHERE e_group='$id' "),0)Or Die(MySQL_Error()); 



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

$max_results = 25; 



// Figure out the limit for the query based 

// on the current page number. 

$from = (($page * $max_results) - $max_results); 



// Perform MySQL query on only the current page number's results 



$view_all = mysql_query("SELECT * FROM maillist_group ORDER BY name ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 



/////////////////////////////////////////////////////////////////////////////////////////////

                          

$num = mysql_num_rows ($view_all);

if ($num < 1) {

echo "لم يتم إدراج أي مجموعة"; 

} else {

/////////

echo "

<table width='95%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#006699' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse' dir='rtl'> 

<tr align='center' valign='middle'>

  <td width='86'>المجموعة</td>

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

$view_emails = mysql_query("SELECT * FROM maillist WHERE e_group='$id' ")Or Die(MySQL_Error()); 

$prop_num = mysql_num_rows ($view_emails);



////////////

if ($prop_num < 1) {

$prop_show = "لا يوجد";

} else {

$prop_show = "<a href='{$_SERVER['PHP_SELF']}?action=show&id=$id'>مشاهدة ($prop_num) </a>";

}

// go on

echo "

<table width='95%' height='27' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#006699' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse' dir='rtl'> 

<tr align='center' valign='middle'>

  <td width='86'>$name</td>

  <td width='90'>$prop_show</td>

  <td width='82' height='25'><a href='{$_SERVER['PHP_SELF']}?action=edit&id=$id'><font face='Tahoma'><span lang='ar-sa'><font size='2'>تعديل</font></span></font></a></td> 

  <td width='88' height='25'><p align='center'><span lang='ar-sa'><a href='{$_SERVER['PHP_SELF']}?action=delcon&id=$id'>حذف</a></span></td>

  </tr> 

</table>



";

}



/////////////////////////

// Figure out the total number of results in DB: 

$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM maillist_group "),0)Or Die(MySQL_Error()); 



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