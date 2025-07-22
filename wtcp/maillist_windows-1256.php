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


<title>������� ��������</title>


<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">


<link href="images/cpstyle.css" rel="stylesheet" type="text/css">


</head>





<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">





<div align="center">


<?php





/////////////////////


switch(@$_GET['action']){ 


/////////////


case "edit"; 


$mailid=@$_GET['mailid'];


$in = mysql_query (" SELECT * FROM maillist WHERE mailid='$mailid' ") 


Or Die(MySQL_Error()); 


// while 


while($action = mysql_fetch_array($in)){ 


// data input


extract ($action); 





////////


/////////////////////


?>


  <br>


 </div>


<form name='form1' method='post' action='?action=update'>


  <div align="center">


    <table width='50%'  border='0' align='center' cellpadding='0' cellspacing='0'>


      <tr>


        <td><strong>������ ���������� </strong></td>


        <td><input name='mailme' type='text' id='mailme' value='<?php echo $email; ?>'>


        <input name='mailid' type='hidden' id='mailid' value='<?php echo $mailid; ?>'></td>


      </tr>


      <tr>


        <td><strong>��������</strong></td>


        <td><select name="group" id="group">


          <option value="0">������ ��������</option>


          <?php


$group_all = mysql_query("SELECT * FROM maillist_group ORDER BY name ASC ")Or Die(MySQL_Error()); 


while($row_group = mysql_fetch_array($group_all)){ 





$row_group['name'] = stripslashes ($row_group['name']);





if ($row_group['id']==$action['e_group']) {


$SELECT_G = "selected";


} else {


$SELECT_G = "";


}


?>


          <option value="<?php echo $row_group['id'];?>" <?php echo $SELECT_G;?>><?php echo $row_group['name'];?></option>


          <?php


}


?>


        </select></td>


      </tr>


      <tr>


        <td width='26%'>&nbsp;</td>


        <td width='74%'><input type='submit' name='Submit' value='���'></td>


      </tr>


    </table>


  </div>


</form>


<div align="center">


   <?php


}


break; 


///////////////////


/////////////////////


case "update"; 





//////////////////////////////////


//////////


//CK the (magic_quotes_gpc) if it is (off) ... this is helpful to protection


if(!get_magic_quotes_gpc()) 


{ 


// Get what is in the  ($_POST) 


foreach($_POST as $k=>$v) 


{ 


  $_POST[$k] = Addslashes($v); 


} 


} 


//////////////








$mailme=@$_POST["mailme"];


$mailid=@$_POST['mailid'];


$group=@$_POST['group'];





//





//////////////////////


if ($mailme == "")


{


print "


<div align='center'><font color='#FF0000'><strong>


������ �����


</strong></font></div>


";


} elseif(!isemail($mailme)){  


echo "


<div align='center'><font color='#FF0000'><strong>


������� ��� ����


</strong></font></div>


";  


} elseif($group=="" || $group==0 ){  


echo "


<div align='center'><font color='#FF0000'><strong>


������ ������ ������ ���� ��������


</strong></font></div>


"; 





} else {





////////////////////////








///////// ck email





// add to admin table


$in = mysql_query (" UPDATE maillist SET email='$mailme',e_group='$group' WHERE mailid='$mailid' ")  


Or Die(MySQL_Error()); 


if(!$in) 


{


echo "


<p align='center'><font color='#FF0000'><strong>Error, Not done </strong></font></p>


"; 


}


else 


{ 


echo "


<p align='center'><strong><font size='4'> �� ����� ������ ��������� �����</font></strong></p> 


";


echo "<META HTTP-EQUIV=Refresh CONTenT=4;URL='{$_SERVER['PHP_SELF']}'>";


}


///////////


}


break; 





///////////////////





//////////////////


case "delcon"; 


$mailid=@$_GET['mailid'];


//// result


$in = mysql_query (" SELECT * FROM maillist WHERE mailid='$mailid' ") 


Or Die(MySQL_Error()); 








// while 


while($action = mysql_fetch_array($in)){ 


// data input


extract ($action); 


///////////





?>


   <br>


 </div>


<form action=?action=del method='POST' name='maildel' id='maildel' dir="rtl">


 <div align="center">


     <table width='572' border='0' align='center' cellpadding='3' cellspacing='0'>


       <tr>


         <td colspan='3' align="center" class='text'><font color='#FF0000'><strong>���� ����� </strong></font></td>


       </tr>


       <tr valign='top' class='bodytextgrey'>


         <td class='text'><strong>������ ���������� :</strong></td>


         <td colspan='2'><?php echo $email; ?>                                          <input name='mailid' type='hidden' id='mailid' value='<?php echo $mailid; ?>'>                                    </td>


                                   </tr>


       <tr>


         <td class='text'>&nbsp;</td>


         <td colspan='2'><strong><font color='#FF0000'>�� ��� ����� ���� ���� ��� ��� �����Ͽ </font></strong></td>


                                   </tr>


       <tr>


         <td width='128' class='text'>&nbsp;</td>


         <td width='167'><span class='maintext'>                                      <span class='text'>


            <input name='doit' type='radio' value='no' checked>


            ��</span> 


                                          


              <input name='doit' type='radio' value='yes'>


         ���</span></td>


         <td width='259'><span class='maintext'>


            <input name='submit2' type=submit value='����'>


         </span></td>


                                   </tr>


     </table>


   </div>


</FORM>


<div align="center">


   <?php


}


// resulte close





break; 


//////////////////


case "del"; 


$doit = @$_POST["doit"];


$mailid=@$_POST['mailid'];





if ($doit =="no")


{


echo "


<strong><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><br>


<br>


����� ��� �� ������� .. ����� ����� ��� ��� ������ ����� ������ �������� �������� </font></strong>


";


echo "<META HTTP-EQUIV=Refresh CONTenT=4;URL='{$_SERVER['PHP_SELF']}'>";


}


else {


//// result


$in = mysql_query (" DELETE FROM maillist WHERE mailid='$mailid' ") 


Or Die(MySQL_Error()); 


// data input


echo " 


<strong><font color='red' size='3' face='Arial, Helvetica, sans-serif'><br>


<br>


�� ��� ������ ��������� ����� ..  </font></strong>


";


echo "<META HTTP-EQUIV=Refresh CONTenT=4;URL='{$_SERVER['PHP_SELF']}'>";


// resulte close


exit;


}


break; 


////////////////////////////////





case "search"; 


?>


   


 </div>


<form action="?action=result" method="post" name="search" id="search">


  <p align="center"><strong><font color="#006699">���� �� ���� ��������</font></strong></p>


  <div align="center">


    <TABLE width="500" align="center" cellpadding="3" class=box>


      <TBODY>


        <TR>


          <TD width="108" class=box><strong><font color="#006699">������ ����������</font></strong></TD>


          <TD width="372" class=box><input name="mailme" type="text" id="mailme"></TD>


        </TR>


        <TR>


          <TD class=box>&nbsp;</TD>


          <TD class=box><input type="submit" name="Submit" value="����"></TD>


        </TR>


      </TBODY>


    </TABLE>


  </div>


</form>


<div align="center">


   <?php


//////////





break; 





////////////


case "result"; 


$mailme=@$_POST['mailme'];


if ($mailme =="")


{


echo "


<p>&nbsp;</p>


<p align='center'><font size='3'><strong><font color='#FF0000'>�� ��� �� ���� ��������</font></strong></font></p>


";


}


else


{





$view_all = mysql_query("select * from maillist Where email LIKE '%$mailme%' "); 


$num=mysql_num_rows($view_all);


if($num==0){ 


print"


<div align='center'><font size='4'><strong><font color='#FF0000'>


No result for your search


  </font></strong></font>


"; 


exit;


}





echo "


<br>


<div align='center'  dir='rtl' lang='ar' > 


<center> 


<table width='64%' height='46' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 


<tr align='center'>


  <td width='36%'><div align='center'><font size='2' face='Arial, Helvetica, sans-serif'>������ ����������</font></div></td> 


  <td width='14%'><font size='2' face='Arial, Helvetica, sans-serif'>���� ����� </font></td>


  <td width='7%' height='44' valign='middle'><div align='center'><font size='2' face='Arial, Helvetica, sans-serif'><span lang='ar-sa'>���</span></font></div></td> 


  <td width='10%' height='44' valign='middle'><div align='center'></div> 


    <p align='center'><font size='2' face='Arial, Helvetica, sans-serif'><span lang='ar-sa'>���</span></font></td>


  </tr> 


</table>


";


// data input


while($do = mysql_fetch_array($view_all)){ 


extract ($do);











echo "


<div align='center'  dir='rtl' lang='ar' > 


<center> 


<table width='64%' height='46' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 


<tr align='center'>


  <td width='36%'><div align='center'><FONT face='Arial, Helvetica, sans-serif' color=#52557c size=2><SPAN lang=ar-sa>$email</SPAN></FONT></div></td> 


  <td width='14%'><a href='{$_SERVER['PHP_SELF']}?action=mail&mailid=$mailid'><font face='Tahoma'><span lang='ar-sa'><font size='2' face='Arial, Helvetica, sans-serif'>���� �����</font></span></font></a></td>


  <td width='7%' height='44'><div align='center'><font size='2' face='Arial, Helvetica, sans-serif'><a href='{$_SERVER['PHP_SELF']}?action=edit&mailid=$mailid'><span lang='ar-sa'>���</span></a></font></div></td> 


  <td width='10%' height='44'><div align='center'></div> 


    <p align='center'><font size='2' face='Arial, Helvetica, sans-serif'><span lang='ar-sa'><a href='{$_SERVER['PHP_SELF']}?action=delcon&mailid=$mailid'>���</a></span></font></td>


  </tr> 


</table>


";


}


}





break; 





///////////


///mail////////


case "mail"; 


$mailid=@$_GET['mailid'];


$vall = mysql_query("select * from maillist Where mailid='$mailid'") 


Or Die(MySQL_Error()); 


while ($row = mysql_fetch_array($vall)) { 


extract ($row);





?>


   


 </div>


<form name='mail' method='post' action='?action=send' dir="rtl">


  <div align="center">


    <table width="96%" border="0" align="center" cellpadding="1" cellspacing="1">


      <tr>


        <td valign="top"><font color="#006699"><strong>����� �������</strong></font></td>


        <td><input type="text" name="subject" id="subject"></td>


      </tr>


      <tr>


        <td width="108" valign="top"><strong><font color="#006699">�������</font></strong></td>


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


        <td><input name='mailid' type='hidden' id='mailid' value='<?php echo $mailid; ?>'></td>


      </tr>


      <tr>


        <td>&nbsp;</td>


        <td><input type='submit' name='Submit' value='����'></td>


      </tr>


    </table>


    </div>


</form>


<div align="center">


   <?php


}





break; 








////////


case "send";











//// -----------------------------------------------------------


if (!isset($_POST['subject']) || $_POST['subject']=='') {


echo "


<p>&nbsp;</p>


<p><font color='#FF0000' size='4'>������ ����� ����� �������</font></p>


";








} elseif (!isset($_POST['text']) || $_POST['text']=='') {


echo "


<p>&nbsp;</p>


<p><font color='#FF0000' size='4'>������ ����� �� �������</font></p>


";





} elseif (!isset($_POST['mailid']) || $_POST['mailid']=='' || !numbers_only($_POST['mailid'])) {


echo "


<p>&nbsp;</p>


<p><font color='#FF0000' size='4'>������ ����� ���� ID</font></p>


";





} else {


/* subject */





$subject = stripslashes($_POST['subject']);


$text = stripslashes($_POST['text']);


//////////////


$text=str_replace("/UserFiles/","$inside_domin/UserFiles/",$text);








$text = $text."


<br/><br/>


����� �� �� ����� �� ����� ��� ��� ������� .. � ��� ����� �� ��� ������ ���������� �� ������� �������� ������ ����� ��� ��� ������


<br/>


We apologize for any inconvenience this email may cause you .. if you would like to delete your email address from our mailing list please click on this link 


<br/>


$db_site_add/maillist.php


";








$Select = mysql_query("SELECT * FROM maillist  WHERE mailid='{$_POST['mailid']}' ")Or Die(MySQL_Error()); 


$num_rows = mysql_num_rows($Select);


while ($row = mysql_fetch_array($Select)) { 


extract ($row);





$BCC[]  = "{$row ['email']}" ; // note the comma


}





$BCC_INFO = implode(",", $BCC);


///////////////////////////////////////////////////








/* what is $to?


all emails*/ 


/* To send HTML mail, you can set the Content-type header. */


/* additional headers */


   $headers="";


   $headers .= "X-Sender:  $db_site_name <$db_email>\n"; // 


   $headers .="From: $db_site_name <$db_email>\n";


   $headers .= "Reply-To: $db_site_name <$db_email>\n";


   $headers .= "Date: ".date("r")."\n";


   $headers .= "Message-ID: <".date("YmdHis")."info@".$_SERVER['SERVER_NAME'].">\n";


   $headers .= "Subject: $subject\n"; // subject write here


   $headers .= "Return-Path: $db_site_name <$db_email>\n";


   $headers .= "Delivered-to: $db_site_name <$db_email>\n";


   $headers .= "BCC: $BCC_INFO \n";


   $headers .= "MIME-Version: 1.0\n";


   $headers .= "Content-type: text/html;charset=windows-1256\n";


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


<p><font color='#000099' size='4'> �� ����� ������� ����� </font></p>";


 


} else { 





echo "<p>&nbsp;</p>


<p><font color='#FF0000' size='4'> ��� �� ��� ����� ������ </font></p>"; 





} 











//////////////////////////////


} /// end the last else








break;


//////////////////////////////////


case "mailall";


?>


   


 </div>


<form name="mail" method="post" action="?action=sendall" dir="rtl">


  <div align="center">


    <table width="96%" border="0" align="center" cellpadding="1" cellspacing="1">


      <tr>


        <td valign="top"><font color="#006699"><strong>��������</strong></font></td>


        <td><select name="group" id="group">


          <option value="0">������ ��������</option>


          <?php


$group_all = mysql_query("SELECT * FROM maillist_group ORDER BY name ASC ")Or Die(MySQL_Error()); 


while($row_group = mysql_fetch_array($group_all)){ 





$row_group['name'] = stripslashes ($row_group['name']);


?>


          <option value="<?php echo $row_group['id'];?>"><?php echo $row_group['name'];?></option>


          <?php


}


?>


        </select></td>


      </tr>


      <tr>


        <td valign="top"><font color="#006699"><strong>����� �������</strong></font></td>


        <td><input type="text" name="subject" id="subject"></td>


      </tr>


      <tr>


        <td width="108" valign="top"><strong><font color="#006699">�������</font></strong></td>


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


        <td><strong><font color="#006699">��� �������</font></strong></td>


        <td><input name="max_results" type="text" id="max_results" value="500" size="4"> 


          ��� ��������� ������� �� �� ����</td>


      </tr>


      <tr>


        <td><input name="action" type="hidden" id="action" value="sendall"></td>


        <td><input type="submit" name="Submit" value="����"></td>


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








if (isset($_POST['group'])) { 


$_SESSION['group'] = $_POST['group'];


$group = stripslashes($_SESSION['group']); 


} else {


$group = stripslashes($_SESSION['group']);


}





if (isset($_POST['text'])) { 


$_SESSION['text'] = $_POST['text'];


$text = stripslashes($_SESSION['text']); 


} else {


$text = stripslashes($_SESSION['text']);


}





if (isset($_POST['subject'])) { 


$_SESSION['subject'] = $_POST['subject'];


$subject = stripslashes($_SESSION['subject']); 


} else {


$subject = stripslashes($_SESSION['subject']);


}





if (isset($_POST['max_results'])) { 


$_SESSION['max_results']= stripslashes($_POST['max_results']); 


} 








//// -----------------------------------------------------------


if (!isset($_SESSION['group']) || $_SESSION['group']==''  || $_SESSION['group']=='0') {


echo "


<p>&nbsp;</p>


<p><font color='#FF0000' size='4'>������ ����� ��������</font></p>


";





} elseif (!isset($_SESSION['subject']) || $_SESSION['subject']=='') {


echo "


<p>&nbsp;</p>


<p><font color='#FF0000' size='4'>������ ����� ����� �������</font></p>


";





} elseif (!isset($_SESSION['text']) || $_SESSION['text']=='') {


echo "


<p>&nbsp;</p>


<p><font color='#FF0000' size='4'>������ ����� �� �������</font></p>


";





} elseif (!isset($_SESSION['max_results']) || $_SESSION['max_results']=='') {


echo "


<p>&nbsp;</p>


<p><font color='#FF0000' size='4'>������ ����� ��� ������ ��� �� �� ����</font></p>


";





} else {


/* subject */











//////////////


$text=str_replace("/UserFiles/","$inside_domin/UserFiles/",$text);








$text = $text."


<br/><br/>


����� �� �� ����� �� ����� ��� ��� ������� .. � ��� ����� �� ��� ������ ���������� �� ������� �������� ������ ����� ��� ��� ������


<br/>


We apologize for any inconvenience this email may cause you .. if you would like to delete your email address from our mailing list please click on this link 


<br/>


$db_site_add/maillist.php


";








/////////////////////////////////////////


$Total_emails = mysql_query("SELECT email FROM maillist WHERE e_group='$group' ")Or Die(MySQL_Error()); 


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








$Select = mysql_query("SELECT * FROM maillist  WHERE e_group='$group' ORDER BY mailid ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 


$num_rows = mysql_num_rows($Select);


while ($row = mysql_fetch_array($Select)) { 


extract ($row);





$BCC[]  = "{$row ['email']}" ; // note the comma


}





$BCC_INFO = implode(",", $BCC);


///////////////////////////////////////////////////


if ($num_rows < $max_results) {


$to_write = ($from + $num_rows);


$Sent_num = "  �� ����� ������� ��� $to_write ����� ";


} else {


$to_write = ($from + $max_results);


$Sent_num = "  �� ����� ������� ��� $to_write ����� ";


}


///////////////////////////////////////////////////








/* what is $to?


all emails*/ 


/* To send HTML mail, you can set the Content-type header. */


/* additional headers */


   $headers="";


   $headers .= "X-Sender:  $db_site_name <$db_email>\n"; // 


   $headers .="From: $db_site_name <$db_email>\n";


   $headers .= "Reply-To: $db_site_name <$db_email>\n";


   $headers .= "Date: ".date("r")."\n";


   $headers .= "Message-ID: <".date("YmdHis")."info@".$_SERVER['SERVER_NAME'].">\n";


   $headers .= "Subject: $subject\n"; // subject write here


   $headers .= "Return-Path: $db_site_name <$db_email>\n";


   $headers .= "Delivered-to: $db_site_name <$db_email>\n";


   $headers .= "BCC: $BCC_INFO \n";


   $headers .= "MIME-Version: 1.0\n";


   $headers .= "Content-type: text/html;charset=windows-1256\n";


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


<p><font color='#FF0000' size='4'>��� �� ��� ����� ������</font></p>"; 





} 











//////////////////////////////


} /// end the last else


break;


/////////////////////////////////////////////////////////


////////


case "import";


?>


 </div>


<form action="?action=Get_import" method="post" enctype="multipart/form-data" name="import" dir="rtl">


  <div align="center">


    <table width="500"  border="0" cellspacing="0" cellpadding="3">


      <tr>


        <td width="84">���� �����</td>


        <td width="404"><input name="csv_file" type="file" id="csv_file" size="40" dir="rtl"></td>


      </tr>


      <tr>


        <td>&nbsp;</td>


        <td><font color="#FF0000">*��� �� ���� ������ ����� CSV </font></td>


      </tr>


      <tr>


        <td>��������</td>


        <td><select name="group" id="group">


          <option value="0">������ ��������</option>


<?php


$group_all = mysql_query("SELECT * FROM maillist_group ORDER BY name ASC ")Or Die(MySQL_Error()); 


while($row_group = mysql_fetch_array($group_all)){ 





$row_group['name'] = stripslashes ($row_group['name']);


?>


          <option value="<?php echo $row_group['id'];?>"><?php echo $row_group['name'];?></option>


<?php


}


?>


        </select>


        </td>


      </tr>


      <tr>


        <td>&nbsp;</td>


        <td><font size='2' face='Arial, Helvetica, sans-serif'><span class='maintext'>


          <input name='submit' type=submit id="submit" value='����'>


        </span></font></td>


      </tr>


      <tr>


        <td>&nbsp;</td>


        <td><font color="#FF0000">*��� ���� CSV ����� ����� </font>: Comma Separated Value.<br> 


        ������ ���� �������� ������ ����<font color="#006600">Microsoft Excel</font></td>


      </tr>


      <tr>


        <td>&nbsp;</td>


        <td>��� ��� ����� �� <strong><font color="#003399">.csv</font></strong> - <font color="#006600"><a href="files/csv.png" target="_blank">���� ��� ������� ������ ��������� </a></font></td>


      </tr>


    </table>


  </div>


</form>


<div align="center">


  <?php


/////////


break;


/////////////////////////////////////////////////////////


case "Get_import";


///////////////////////////





/////////////////


$do_update = 1;


$file_name = @$_FILES['csv_file']['name'];


// image


$uploaddir = "files/"; //change the name of the directory to upload files


// image


$uploadfile = $uploaddir . basename(@$_FILES['csv_file']['name']); 


/////////////////////////////////////////


$get_exten = findtype($file_name);


/////////////////////////////////////////





if (!isset($_POST['group']) || $_POST['group']=='' || $_POST['group']=='0' ) {


echo '<div align="center"><font color="#FF0000"><strong>�� ��� ������ ��������</strong></font></div>';





} elseif (@empty($_FILES['csv_file']['name'])) {


echo '<div align="center"><font color="#FF0000"><strong>�� ���� �� ���</strong></font></div>';





} elseif (@$_FILES['csv_file']['type'] !="application/vnd.ms-excel"){


echo '<div align="center"><font color="#FF0000"><strong>������ ����� ��� ����� ��</strong></font></div>';





} elseif ($get_exten !="csv"){


echo '<div align="center"><font color="#FF0000"><strong>������ ����� ��� ����� ��</strong></font></div>';





} elseif (@$_FILES['csv_file']['size'] > 2000000){


echo '<div align="center"><font color="#FF0000"><strong>��� ����� ��� ���� �� ������ ���� � ����� �� ����</strong></font></div>';





} elseif (move_uploaded_file($_FILES['csv_file']['tmp_name'], $uploadfile)) {








$_POST['group']= intval ($_POST['group']);








echo "   


  <p align='center' dir='rtl'>({$_FILES['csv_file']['name']}) �� ����� ����� <br>


                 ����: {$_FILES['csv_file']['size']}<br>


				 ����: {$_FILES['csv_file']['type']}<br>


				 -----------------------------------------------<br>


				 --------------- ����� ����� ������� ----------------<br>


					


";





/////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////


$row = 1;


// adopt the filename


$handle = fopen ("files/{$_FILES['csv_file']['name']}","r");


// ip-to-country.csv must be in the same directory with this php file;


while ($data = fgetcsv ($handle, 1000, "/")) {


/////////////////////





// ck user if exist


$query = MySQL_Query("SELECT mailid FROM maillist WHERE email='$data[0]'") Or Die(MySQL_Error()); 


// if select detact more than 0 result exit


if(MySQL_Num_Rows($query) > 0) 


{ 


mysql_free_result($query);


if ($do_update=='1') {





    // adopt the columnnames


   $query = "UPDATE maillist SET email='".$data[0]."' , e_group='{$_POST['group']}' WHERE email='".$data[0]."'"; 


   $result = mysql_query($query) or die("Invalid query: " . mysql_error().__LINE__.__FILE__);





echo '


<div align="center"><font color="#FF0000" dir="rtl"><strong>('.$data[0].') ��� ������� ������ �����</strong></font></div>'; 


}


else {echo '<div align="center"><font color="#FF0000" dir="rtl"><strong>('.$data[0].') ��� ������� ������ �����</strong></font></div>'; }





} else {


//free the memory from the select result





    // adopt the columnnames


   $query = "INSERT INTO maillist (`email`,`e_group`) VALUES('".$data[0]."','{$_POST['group']}')";


   $result = mysql_query($query) or die("Invalid query: " . mysql_error().__LINE__.__FILE__);


   if(!$result) {echo "<div align='center'><font color='#FF0000' dir='rtl'> ($data[0]) �� ��� ������ </font></div></br>";} 


   else {echo "<div align='center'><font color='#000000' dir='rtl'> ($data[0]) �� ����� </font></div>";}


   


} // end date if exitst


}


fclose ($handle);


/////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////


unlink ("files/{$_FILES['csv_file']['name']}");


/////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////


}  // end if move


else { echo "The file not uploaded"; }


//////////////





/////////


break;


////////////////////////////////////////////////////////////////


/*/////////////////////////////////////////////////////////////


Main control





*////////////////////////////////////////////////////////////


default: 








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








$view_all = mysql_query("SELECT * FROM maillist ORDER BY mailid ASC LIMIT $from, $max_results")Or Die(MySQL_Error()); 





/////////////////////////////////////////////////////////////////////////////////////////////








$emails_all = mysql_query("SELECT * FROM maillist ")Or Die(MySQL_Error()); 


$num_emails = mysql_num_rows($emails_all);


echo "<strong> ��� ��������� �������� ����  $num_emails </strong> <br/> <br/>";





/////////


echo "


<br>


<table width='64%' height='28' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'  dir='rtl'> 


<tr align='center'>


  <td width='9%'>�����</td>


  <td width='59%'><font size='2' face='Arial, Helvetica, sans-serif'>������ ����������</font></td>


  <td width='13%'><font size='2' face='Arial, Helvetica, sans-serif'>���� ����� </font></td>


  <td width='6%' height='26' valign='middle'><font size='2' face='Arial, Helvetica, sans-serif'><span lang='ar-sa'>���</span></font></td>


  <td width='13%' height='26' valign='middle'><p align='center'><font size='2' face='Arial, Helvetica, sans-serif'><span lang='ar-sa'>���</span></font></td>


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


  <td width='13%'><a href='{$_SERVER['PHP_SELF']}?action=mail&mailid=$mailid'><font face='Tahoma'><span lang='ar-sa'><font size='2' face='Arial, Helvetica, sans-serif'>���� �����</font></span></font></a></td>


  <td width='6%' height='22'><font size='2' face='Arial, Helvetica, sans-serif'><a href='{$_SERVER['PHP_SELF']}?action=edit&mailid=$mailid'><span lang='ar-sa'>���</span></a></font></td>


  <td width='13%' height='22'><p align='center'><font size='2' face='Arial, Helvetica, sans-serif'><span lang='ar-sa'><a href='{$_SERVER['PHP_SELF']}?action=delcon&mailid=$mailid'>���</a></span></font></td>


  </tr> 


</table>





";





}





/////////////////////////


// Figure out the total number of results in DB: 


$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM maillist "),0)Or Die(MySQL_Error()); 








// Figure out the total number of pages. Always round up using ceil() 


$total_pages = ceil($total_results / $max_results); 





// Build Page Number Hyperlinks 


if ($total_pages > 1){


echo "<center>Select a Page<br />"; 


}


// Build Previous Link 


if($page > 1){ 


    $prev = ($page - 1); 


    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<������</a> "; 


} 





/*for($i = 1; $i <= $total_pages; $i++){ 


    if(($page) == $i){ 


	if ($total_pages > 1){


        echo "$i "; 


		}


        } else { 


            echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$i\">$i</a> "; 


    } 


} */





// Build Next Link 


if($page < $total_pages){ 


    $next = ($page + 1); 


    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$next\">������>></a>"; 


} 


echo "</center>";





/////////////////





break; 





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