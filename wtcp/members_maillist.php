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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//en">
<html>
<head>
<title>القائمة البريدية</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div align="center">
<?php

/////////////////////
switch(@$_GET['action']){ 

//////////sendmail/////////////////////////////////////////////////////////////////
default: 
?>
   
 </div>
<form name="mail" method="post" action="?action=sendall" dir="rtl">
  <div align="center">
    <table width="96%" border="0" align="center" cellpadding="1" cellspacing="1">
      
      <tr>
        <td valign="top"><font color="#006699"><strong>عنوان الرسالة</strong></font></td>
        <td><input type="text" name="subject" id="subject"></td>
      </tr>
      <tr>
        <td width="108" valign="top"><strong><font color="#006699">الرسالة</font></strong></td>
        <td width="1070">
          <?php
///////
$oFCKeditor = new FCKeditor('text') ;
$oFCKeditor->BasePath = 'rte/';
$oFCKeditor->Value = '';
$oFCKeditor->Width  = '100%' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Create() ;
?>        </td>
      </tr>
      <tr>
        <td><strong><font color="#006699">عدد الدفعات</font></strong></td>
        <td><input name="max_results" type="text" id="max_results" value="500" size="4"> 
          عدد الإيميلات المرسلة في كل دفعة</td>
      </tr>
      <tr>
        <td><input name="action" type="hidden" id="action" value="sendall"></td>
        <td><input type="submit" name="Submit" value="أرسل"></td>
      </tr>
    </table>
  </div>
</form>
<div align="center">
<?php


break;
//////////sendmail/////////////////////////////////////////////////////////////////
case "sendall";
/////



if (isset($_POST['text'])) { 
$_SESSION['text'] = $_POST['text'];
$text = stripslashes($_SESSION['text']); 
} else {
$text = stripslashes($_SESSION['text']);
}

if (isset($_POST['subject'])) { 
$_SESSION['subject'] = $_POST['subject'];
$subject = stripslashes($_SESSION['subject']); 
$subject = "=?utf-8?b?".base64_encode($subject)."?=";
} else {
$subject = stripslashes($_SESSION['subject']);
$subject = "=?utf-8?b?".base64_encode($subject)."?=";
}

if (isset($_POST['max_results'])) { 
$_SESSION['max_results']= stripslashes($_POST['max_results']); 
} 


//// -----------------------------------------------------------
if (!isset($_SESSION['subject']) || $_SESSION['subject']=='') {
echo "
<p>&nbsp;</p>
<p><font color='#FF0000' size='4'>الرجاء كتابة عنوان الرسالة</font></p>
";

} elseif (!isset($_SESSION['text']) || $_SESSION['text']=='') {
echo "
<p>&nbsp;</p>
<p><font color='#FF0000' size='4'>الرجاء كتابة نص الرسالة</font></p>
";

} elseif (!isset($_SESSION['max_results']) || $_SESSION['max_results']=='') {
echo "
<p>&nbsp;</p>
<p><font color='#FF0000' size='4'>الرجاء تحديد عدد المرسل لهم في كل دفعة</font></p>
";

} else {
/* subject */



//////////////
$text=str_replace("/UserFiles/","$inside_domin/UserFiles/",$text);


/*
$text = $text."
<br/><br/>
نعتذر عن أي أزعاج قد تسببه لكم هذه الرسالة .. و اذا رغبتم في حذف بريدكم الإلكتروني من قائمتنا البريدية الرجاء الضغط على هذه الوصلة
<br/>
We apologize for any inconvenience this email may cause you .. if you would like to delete your email address from our mailing list please click on this link 
<br/>
$db_site_add/maillist.php
";
*/


/////////////////////////////////////////
$Total_emails = mysql_query("SELECT useremail FROM users  ")Or Die(MySQL_Error()); 
$num_emails_all = mysql_num_rows($Total_emails);
/////////////////////////////////////////////////////////

if(!isset($_GET['page'])){ 
    $page = 1; 
} else { 
    $page = $_GET['page']; 
} 

// Define the number of results per page 
$max_results = $_SESSION['max_results']; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 

// Perform MySQL query on only the current page number's results 


$Select = mysql_query("SELECT * FROM users  ORDER BY useremail ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 
$num_rows = mysql_num_rows($Select);
while ($row = mysql_fetch_array($Select)) { 
extract ($row);

$BCC[]  = "{$row ['useremail']}" ; // note the comma
}

$BCC_INFO = implode(",", $BCC);
///////////////////////////////////////////////////
if ($num_rows < $max_results) {
$to_write = ($from + $num_rows);
$Sent_num = "  تم إرسال الرسالة إلى $to_write إيميل ";
} else {
$to_write = ($from + $max_results);
$Sent_num = "  تم إرسال الرسالة إلى $to_write إيميل ";
}
///////////////////////////////////////////////////


/* what is $to?
all emails*/ 
/* To send HTML mail, you can set the Content-type header. */
/* additional headers */
   $headers="";
   $headers .= "X-Sender:  $db_site_name <$db_email>\n"; // 
   $headers .="From: Entzar.net <$db_email>\n";
   $headers .= "Reply-To: Entzar.net <$db_email>\n";
   $headers .= "Date: ".date("r")."\n";
   $headers .= "Message-ID: <".date("YmdHis")."info@".$_SERVER['SERVER_NAME'].">\n";
   $headers .= "Subject: $subject\n"; // subject write here
   $headers .= "Return-Path: $db_site_name <$db_email>\n";
   $headers .= "Delivered-to: $db_site_name <$db_email>\n";
   $headers .= "BCC: $BCC_INFO \n";
   $headers .= "MIME-Version: 1.0\n";
   $headers .= "Content-type: text/html;charset=utf-8\n";
   $headers .= "X-Priority: 1\n";
   $headers .= "Importance: High\n";
   $headers .= "X-MSMail-Priority: High\n";
   $headers .= "X-Mailer: Explore Mailler With PHP!\n";

//send
$Send = mail("noreply@domain.com", $subject, "$text", $headers); 

/////////////////////////////////////////////////////////////////////////////////
//see if sent 
if ($Send) { 


$total_pages = ceil($num_emails_all / $max_results); 
// Build Next Link 
if($page < $total_pages){ 
    $next = ($page + 1); 

echo "<META HTTP-EQUIV=Refresh CONTenT=2;URL='{$_SERVER['PHP_SELF']}?action=sendall&page=$next'>";

} 

/////////////////
echo "<p>&nbsp;</p>
<p><font color='#000099' size='4'> $Sent_num </font></p>";
 
} else { 

echo "<p>&nbsp;</p>
<p><font color='#FF0000' size='4'>خلل لم يتم أرسال البريد</font></p>"; 

} 



//////////////////////////////
} /// end the last else
break;
/////////////////////////////////////////////////////////
///mail///////////mail///////////mail///////////mail///////////mail///////////mail////////
///mail///////////mail///////////mail///////////mail///////////mail///////////mail////////
case "mail"; 
$userid=@$_GET['userid'];
$vall = mysql_query("select * from users Where userid='$userid'") 
Or Die(MySQL_Error()); 
while ($row = mysql_fetch_array($vall)) { 
extract ($row);

?>
   
 </div>
<form name='mail' method='post' action='?action=send' dir="rtl">
  <div align="center">
    <table width="96%" border="0" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td valign="top"><font color="#006699"><strong>عنوان الرسالة</strong></font></td>
        <td><input type="text" name="subject" id="subject"></td>
      </tr>
      <tr>
        <td width="108" valign="top"><strong><font color="#006699">الرسالة</font></strong></td>
        <td width="1070"><?php
///////
$oFCKeditor = new FCKeditor('text') ;
$oFCKeditor->BasePath = 'rte/';
$oFCKeditor->Value = '';
$oFCKeditor->Width  = '100%' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Create() ;
?>        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name='userid' type='hidden' id='userid' value='<?php echo $userid; ?>'></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type='submit' name='Submit' value='أرسل'></td>
      </tr>
    </table>
    </div>
</form>
<div align="center">
   <?php
}

break; 


////////////////////////////////////////////////////////////////
case "send";
//// -----------------------------------------------------------
if (!isset($_POST['subject']) || $_POST['subject']=='') {
echo "
<p>&nbsp;</p>
<p><font color='#FF0000' size='4'>الرجاء كتابة عنوان الرسالة</font></p>
";


} elseif (!isset($_POST['text']) || $_POST['text']=='') {
echo "
<p>&nbsp;</p>
<p><font color='#FF0000' size='4'>الرجاء كتابة نص الرسالة</font></p>
";

} elseif (!isset($_POST['userid']) || $_POST['userid']=='' || !numbers_only($_POST['userid'])) {
echo "
<p>&nbsp;</p>
<p><font color='#FF0000' size='4'>الرجاء تحديد الــ ID</font></p>
";

} else {
/* subject */

$subject = stripslashes($_POST['subject']);
$subject = "=?utf-8?b?".base64_encode($subject)."?=";

$text = stripslashes($_POST['text']);
//////////////
$text=str_replace("/UserFiles/","$inside_domin/UserFiles/",$text);


/*$text = $text."
<br/><br/>
نعتذر عن أي أزعاج قد تسببه لكم هذه الرسالة .. و اذا رغبتم في حذف بريدكم الإلكتروني من قائمتنا البريدية الرجاء الضغط على هذه الوصلة
<br/>
We apologize for any inconvenience this email may cause you .. if you would like to delete your email address from our mailing list please click on this link 
<br/>
$db_site_add/maillist.php
";

*/
$Select = mysql_query("SELECT * FROM users  WHERE userid='{$_POST['userid']}' ")Or Die(MySQL_Error()); 
$num_rows = mysql_num_rows($Select);
while ($row = mysql_fetch_array($Select)) { 
extract ($row);

$BCC[]  = "{$row ['useremail']}" ; // note the comma
}

$BCC_INFO = implode(",", $BCC);
///////////////////////////////////////////////////


/* what is $to?
all emails*/ 
/* To send HTML mail, you can set the Content-type header. */
/* additional headers */
   $headers="";
   $headers .= "X-Sender:  $db_site_name <$db_email>\n"; // 
   $headers .="From: Entzar.net <$db_email>\n";
   $headers .= "Reply-To: Entzar.net <$db_email>\n";
   $headers .= "Date: ".date("r")."\n";
   $headers .= "Message-ID: <".date("YmdHis")."info@".$_SERVER['SERVER_NAME'].">\n";
   $headers .= "Subject: $subject\n"; // subject write here
   $headers .= "Return-Path: $db_site_name <$db_email>\n";
   $headers .= "Delivered-to: $db_site_name <$db_email>\n";
   $headers .= "BCC: $BCC_INFO \n";
   $headers .= "MIME-Version: 1.0\n";
   $headers .= "Content-type: text/html;charset=utf-8\n";
   $headers .= "X-Priority: 1\n";
   $headers .= "Importance: High\n";
   $headers .= "X-MSMail-Priority: High\n";
   $headers .= "X-Mailer: Explore Mailler With PHP!\n";

//send
$Send = mail("noreply@domain.com", $subject, "$text", $headers); 

/////////////////////////////////////////////////////////////////////////////////
//see if sent 
if ($Send) { 
/////////////////
echo "<p>&nbsp;</p>
<p><font color='#000099' size='4'> تم إرسال الرسالة بنجاح </font></p>";
 
} else { 

echo "<p>&nbsp;</p>
<p><font color='#FF0000' size='4'> خلل لم يتم أرسال البريد </font></p>"; 

} 



//////////////////////////////
} /// end the last else


break;
//////////////////////////////////////////////////////////////////////////
/// end switch
} 
///////////////////

?>
  </p>
 </div>
</body>
</html>
<?php
}
?>