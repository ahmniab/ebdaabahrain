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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//en">
<html>
<head>
<title>Registrations</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link href="images/cpstyle.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {font-family: Tahoma, Arial, Helvetica, sans-serif; color: #666666;}
.style3 {color: #666666}
.style4 {
	color: #003399;
	font-weight: bold;
}
.style6 {color: #009900; font-weight: bold; }
-->
</style>


<script type="text/javascript">
<!--
function send_email()
{
	ht = document.getElementsByTagName("html");
	ht[0].style.filter = "progid:DXImageTransform.Microsoft.BasicImage(grayscale=1)";
	if (confirm('Are you sure you want to email the client the Registration to pay'))
	{
		return true;
	}
	else
	{
		ht[0].style.filter = "";
		return false;
	}
}
//-->
</script>


<script type="text/javascript" src="scripts/form.js"></script>

<script type="text/javascript" src="scripts/DateTime/datetimepicker_css.js"></script>

<script type="text/javascript" src="images/form.js"></script>

<SCRIPT>

function formvalidation(thisform) {
with (thisform) {

if (emptyvalidation(name,"Please write the client name")==false) {name.focus(); return false;};
if (emptyvalidation(telephone,"Please write the client telephone")==false) {telephone.focus(); return false;};
if (emailvalidation(email,"Please write the client email & make sure to use a vlaid email format")==false) {email.focus(); return false;};

if (emptyvalidation(items,"Please write the order info")==false) {items.focus(); return false;};

/*if (emptyvalidation(weight,"Please write the items weight")==false) {weight.focus(); return false;};
if (emptyvalidation(items_cost,"Please write the items cost")==false) {items_cost.focus(); return false;};
if (emptyvalidation(shipping_cost,"Please write the shipping cost")==false) {shipping_cost.focus(); return false;};*/

}
}

</SCRIPT>


</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<?php

/////////////////////////////////////////////////////////////////////////////
switch(@$_GET['action']){ 
/////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
case "add"; 
///////////------------------------------------------------------------------------------------------

?>

<form action='?action=get_add' method='post' name='add' id="add"  onSubmit="return formvalidation(this)">
  <div align="center">
    <table width='700'  border='0' align='center' cellpadding='1' cellspacing='1'>
      <tr>
        <td><span class="style3"><strong>Client Name: </strong></span><span class="error"><strong>*</strong></span></td>
        <td><input name='name' type='text' id='name' value='<?php if(isset($_SESSION["orders_name"])) { echo stripslashes($_SESSION["orders_name"]);} ?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Client Tel: </strong></span><span class="error"><strong>*</strong></span></td>
        <td><input name='telephone' type='text' id='telephone' value='<?php if(isset($_SESSION["orders_telephone"])) { echo stripslashes($_SESSION["orders_telephone"]);} ?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Client Tel2:</strong></span></td>
        <td><input name='tel2' type='text' id='tel2' value='<?php if(isset($_SESSION["orders_tel2"])) { echo stripslashes($_SESSION["orders_tel2"]);} ?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Client Mobile: </strong></span></td>
        <td><input name='mobile' type='text' id='mobile' value='<?php if(isset($_SESSION["orders_mobile"])) { echo stripslashes($_SESSION["orders_mobile"]);} ?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Client Fax:</strong></span></td>
        <td><input name='fax' type='text' id='fax' value='<?php if(isset($_SESSION["orders_fax"])) { echo stripslashes($_SESSION["orders_fax"]);} ?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Client Email: </strong></span><span class="error"><strong>*</strong></span></td>
        <td><input name='email' type='text' id='email' value='<?php if(isset($_SESSION["orders_email"])) { echo stripslashes($_SESSION["orders_email"]);} ?>'></td>
      </tr>
      
      <tr>
        <td colspan="2" bgcolor="#CCCCCC">SHIPPING ADDRESS</td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Country:</strong></span></td>
        <td><input name='country' type='text' id='country' value='<?php if(isset($_SESSION["orders_country"])) { echo stripslashes($_SESSION["orders_country"]);}?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>City:</strong></span></td>
        <td><input name='city' type='text' id='city' value='<?php if(isset($_SESSION["orders_city"])) { echo stripslashes($_SESSION["orders_city"]);}?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Block:</strong></span></td>
        <td><input name='block' type='text' id='block' value='<?php if(isset($_SESSION["orders_block"])) { echo stripslashes($_SESSION["orders_block"]);}?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Street:</strong></span></td>
        <td><input name='street' type='text' id='street' value='<?php if(isset($_SESSION["orders_street"])) { echo stripslashes($_SESSION["orders_street"]);}?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Building:</strong></span></td>
        <td><input name='building' type='text' id='building' value='<?php if(isset($_SESSION["orders_building"])) { echo stripslashes($_SESSION["orders_building"]);}?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Post:</strong></span></td>
        <td><input name='post' type='text' id='post' value='<?php if(isset($_SESSION["orders_post"])) { echo stripslashes($_SESSION["orders_post"]);}?>'></td>
      </tr>
      <tr>
        <td valign="top"><strong>Client Note</strong></td>
        <td><textarea name="message" id="message" cols="60" rows="7"><?php if(isset($_SESSION["orders_message"])) { echo stripslashes($_SESSION["orders_message"]);}?></textarea></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC">ORDER DETAILS</td>
      </tr>
      <tr>
        <td valign="top"><span class="style3"><strong>Order Items /Info</strong></span> <strong class="error">*</strong></td>
        <td><textarea name="items" id="items" cols="60" rows="7"><?php if(isset($_SESSION["orders_items"])) { echo stripslashes($_SESSION["orders_items"]);}?></textarea></td>
      </tr>
    <!--  <tr>
        <td><label for="checkbox_row_22"><strong>Weight <span class="error">*</span></strong></label></td>
        <td><input name='weight' type='text' id='weight' value='<?php if(isset($_SESSION["orders_weight"])) { echo stripslashes($_SESSION["orders_weight"]);}?>'> <strong>Gram</strong></td>
      </tr>
      <tr>
        <td><label for="checkbox_row_22"><strong>Items Cost <span class="error">*</span></strong></label></td>
        <td><input name='items_cost' type='text' id='items_cost' value='<?php if(isset($_SESSION["orders_items_cost"])) { echo stripslashes($_SESSION["orders_items_cost"]);}?>'></td>
      </tr>
      <tr>
        <td><label for="checkbox_row_22"><strong>Shipping Cost <span class="error">*</span></strong></label></td>
        <td><input name='shipping_cost' type='text' id='shipping_cost' value='<?php if(isset($_SESSION["orders_shipping_cost"])) { echo stripslashes($_SESSION["orders_shipping_cost"]);}?>'></td>
      </tr>-->
      <tr>
        <td><label for="checkbox_row_22"><strong>Total Cost</strong></label></td>
        <td><input name='total_cost' type='text' id='total_cost' value=''></td>
      </tr>
      <tr>
        <td><span class="style4">Order Date</span></td>
        <td><?php echo date("Y-m-d");?><strong>
          <input name='date' type='hidden' id='date' value='<?php echo time();?>'>
        </strong></td>
      </tr>
      <!--<tr>
        <td><span class="style4">Pickup Date &amp; Time</span></td>
        <td>
        


        
<input name='pickup_time' type='text' id='pickup_time' value='<?php if(isset($_SESSION["orders_pickup_time"])) { echo stripslashes($_SESSION["orders_pickup_time"]);}?>' class="datetimepicker" style="background: url(scripts/CalendarTime/calendar.png;) no-repeat scroll right center rgb(255, 255, 255); padding-right: 20px;" readonly>
&nbsp;
<a href="javascript: NewCssCal('pickup_time','yyyymmdd','dropdown', true,24,false)">
<img src="scripts/DateTime/images/cal.gif" alt="Pick a date" width="16" height="16" border="0">
</a>



</td>
      </tr>-->
      <tr>
        <td width='26%'><strong>
          <input name='weight' type='hidden' id='weight' value='<?php if(isset($_SESSION["orders_weight"])) { echo stripslashes($_SESSION["orders_weight"]);}?>'>
        </strong><strong>
        <input name='items_cost' type='hidden' id='items_cost' value='<?php if(isset($_SESSION["orders_items_cost"])) { echo stripslashes($_SESSION["orders_items_cost"]);}?>'>
        <input name='shipping_cost' type='hidden' id='shipping_cost' value='<?php if(isset($_SESSION["orders_shipping_cost"])) { echo stripslashes($_SESSION["orders_shipping_cost"]);}?>'>
        <input name='pickup_time' type='hidden' id='pickup_time' value='<?php if(isset($_SESSION["orders_pickup_time"])) { echo stripslashes($_SESSION["orders_pickup_time"]);}?>'>
        </strong></td>
        <td width='74%'><input name='submit' type='submit' id="submit" value='Insert'></td>
      </tr>
    </table>
  </div>
</form>

<?php

///////////------------------------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////////////////////
case "get_add"; 
///////////------------------------------------------------------------------------------------------

//////////////////////////////////
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
//////////////

/////// SET SESSIONS IF POSTED
if (isset($_POST['submit'])) {

foreach($_POST as $key=>$value){
if ($key!="submit"){
$_SESSION["orders_"."$key"] = $value;
} // end if key is not submit
} // end foreach
} // end if posted
/////// END SET SESSIONS IF POSTED


/*function convert_datetime($str) {

list($date, $time) = explode(' ', $str);
list($year, $month, $day) = explode('-', $date);
list($hour, $minute, $second) = explode(':', $time);

$timestamp = mktime($hour, $minute, $second, $month, $day, $year);

return $timestamp;
}*/

//echo convert_datetime($_GET['start_date'])."<br>";
//$date_update_ORDERS = convert_datetime($_POST['pickup_time']);
 $date_update_ORDERS = "";  
//////////////////////
if ($_POST['name'] == "") {
print "
<div class='error'>
Please write the client Name
</div>
";

} elseif($_POST['telephone'] == ""){
print "
<div class='error'>
Please write the client telephone
</div>
";

} elseif($_POST['email'] == "" || !isemail($_POST['email'])){
print "
<div class='error'>
Make sure to write a vaild email.
</div>
";

} elseif($_POST['items'] == ""){
print "
<div class='error'>
Please write the ordered items
</div>
";

/*} elseif($_POST['weight'] == ""){
print "
<div class='error'>
Please write the items weight
</div>
";

} elseif($_POST['items_cost'] == ""){
print "
<div class='error'>
Please write the order items cost
</div>
";

} elseif($_POST['shipping_cost'] == ""){
print "
<div class='error'>
Please write the order shipping cost
</div>
";*/

} elseif($_POST['email'] == "" || !isemail($_POST['email'])){
print "
<div class='error'>
Make sure to write a vaild email.
</div>
";


} else {
///////// ck email
$TOTAL_AMOUNT = ($_POST['total_cost']);


// Insert Order
$Insert2Orders = MySQL_Query("
INSERT INTO orders 

(name,mobile,telephone,tel2,fax,email,items,status,country,city,block,street,building,post,weight,items_cost,shipping_cost,total_cost,date,pickup_time) 

VALUES 

('{$_POST['name']}', '{$_POST['mobile']}', '{$_POST['telephone']}', '{$_POST['tel2']}', '{$_POST['fax']}', '{$_POST['email']}','{$_POST['items']}','0','{$_POST['country']}','{$_POST['city']}','{$_POST['block']}', '{$_POST['street']}', '{$_POST['building']}' , '{$_POST['post']}' , '{$_POST['weight']}', '{$_POST['items_cost']}' , '{$_POST['shipping_cost']}', '{$TOTAL_AMOUNT}', '{$_POST['date']}', '{$date_update_ORDERS}')

") or die(mysql_error());

$ORDER_ID= mysql_insert_id();

if(!$Insert2Orders)  {
echo "
<p align='center'><font color='#FF0000'><strong>Error, Not done </strong></font></p>
"; 
} else { 
echo "
<p align='center'><strong><font size='4'>The Order has been inserted successfully</font></strong></p> 
";
echo "<META HTTP-EQUIV=Refresh CONTenT=3;URL='?action=edit&orderid={$ORDER_ID}'>";

/////// UNSET SESSIONS IF POSTED
if (isset($_POST['submit'])) {
foreach($_POST as $key=>$value){
if ($key!="submit"){
unset($_SESSION["orders_"."$key"]);
} // end if key is not submit
} // end foreach
} // end if posted
/////// END UNSET SESSIONS IF POSTED
} // end else insert

} // end else all

///////////------------------------------------------------------------------------------------------
break; 
//////////////////////////////////////////////////////////////////////////////////////////////
case "edit"; 
///////////------------------------------------------------------------------------------------------

$orderid=@$_GET['orderid'];
$in = mysql_query (" SELECT * FROM orders WHERE orderid='$orderid' ") Or Die(MySQL_Error()); 
// while 
while($action = mysql_fetch_array($in)){ 
// data input
extract ($action); 

$items=str_replace("<br>","\n",$items); 


if ($action["status"]==1) {
$status_info = "
<option value='0'>Unpaid</option>
<option value='1' selected>Paid</option>
";
} else {
$status_info = "
<option value='0' selected>Unpaid</option>
<option value='1'>Paid</option>
";
}

///////////////////// 
if ($action['pickup_time']==0) {
$pickup_time_info = "0";
} else {
$pickup_time_info = date("Y-m-d H:i:s", $action['pickup_time']);
}

?>
  <br>

<form action='?action=update' method='post' name='update' id="update">

    <table width='700'  border='0' align='center' cellpadding='1' cellspacing='1'>
      <tr>
        <td class="style2"><span class="marktext"><strong>Order ID:</strong></span></td>
        <td><span class="marktext"><strong><?php echo $orderid; ?>
          <input name='orderid' type='hidden' id='orderid' value='<?php echo $orderid; ?>'>
        </strong></span></td>
      </tr>
      <tr>
        <td class="style2"><span class="style6"><strong>Order Link:</strong></span></td>
        <td><span class="marktext"><strong><a href="../order_details.php?orderid=<?php echo $orderid;?>" target="_blank">View Order</a></strong></span></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Client Name:</strong></span></td>
        <td><input name='name' type='text' id='name' value='<?php echo $name; ?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Client Tel:</strong></span></td>
        <td><input name='telephone' type='text' id='telephone' value='<?php echo $telephone; ?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Client Tel2:</strong></span></td>
        <td><input name='tel2' type='text' id='tel2' value='<?php echo $tel2; ?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Client Mobile:</strong></span></td>
        <td><input name='mobile' type='text' id='mobile' value='<?php echo $mobile; ?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Client Fax:</strong></span></td>
        <td><input name='fax' type='text' id='fax' value='<?php echo $fax; ?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Client Email:</strong></span></td>
        <td><input name='email' type='text' id='email' value='<?php echo $email; ?>'></td>
      </tr>
      
      <tr>
        <td colspan="2" bgcolor="#CCCCCC">SHIPPING ADDRESS</td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Country:</strong></span></td>
        <td><input name='country' type='text' id='country' value='<?php echo $country;?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>City:</strong></span></td>
        <td><input name='city' type='text' id='city' value='<?php echo $city;?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Block:</strong></span></td>
        <td><input name='block' type='text' id='block' value='<?php echo $block;?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Street:</strong></span></td>
        <td><input name='street' type='text' id='street' value='<?php echo $street;?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Building:</strong></span></td>
        <td><input name='building' type='text' id='building' value='<?php echo $building;?>'></td>
      </tr>
      <tr>
        <td><span class="style3"><strong>Post:</strong></span></td>
        <td><input name='post' type='text' id='post' value='<?php echo $post;?>'></td>
      </tr>
      <tr>
        <td valign="top"><span class="marktext"><strong>Client Note</strong></span></td>
        <td><?php echo $message;?></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC">ORDER DETAILS</td>
      </tr>
      <tr>
        <td valign="top"><span class="style3"><strong>Order Info</strong></span></td>
        <td><textarea name="items" id="items" cols="60" rows="7"><?php echo trim(str_replace("<br />","",$items));?></textarea></td>
      </tr>
<!--      <tr>
        <td><label for="checkbox_row_22"><strong>Weight</strong></label></td>
        <td><input name='weight' type='text' id='weight' value='<?php echo $weight;?>'> <strong>Gram</strong></td>
      </tr>
      <tr>
        <td><label for="checkbox_row_22"><strong>Items Cost</strong></label></td>
        <td><input name='items_cost' type='text' id='items_cost' value='<?php echo $items_cost;?>'></td>
      </tr>
      <tr>
        <td><label for="checkbox_row_22"><strong>Shipping Cost</strong></label></td>
        <td><input name='shipping_cost' type='text' id='shipping_cost' value='<?php echo $shipping_cost;?>'></td>
      </tr>-->
      <tr>
        <td><label for="checkbox_row_22"><strong>Total Cost</strong></label></td>
        <td><input name='total_cost' type='text' id='total_cost' value='<?php echo $total_cost;?>' readonly></td>
      </tr>
      <tr>
        <td><span class="style4">Order Date</span></td>
        <td><?php echo date("Y-m-d",$date);?></td>
      </tr>
<!--      <tr>
        <td><span class="style4">Pickup Date &amp; Time</span></td>
        <td><input name='pickup_time' type='text' id='pickup_time' value='<?php echo $pickup_time_info;?>' class="datetimepicker" style="background: url(scripts/CalendarTime/calendar.png;) no-repeat scroll right center rgb(255, 255, 255); padding-right: 20px;" readonly>
          &nbsp; <a href="javascript: NewCssCal('pickup_time','yyyymmdd','dropdown', true,24,false)"> <img src="scripts/DateTime/images/cal.gif" alt="Pick a date" width="16" height="16" border="0"> </a> </td>
      </tr>-->
      
      
      <tr>
        <td colspan="2" bgcolor="#CCCCCC">PAYMENT DETAILS</td>
      </tr>
      <tr>
        <td><span class="style6">Status</span></td>
        <td><select name="status" id="status">
            <?php
echo $status_info;
?>
          </select>        </td>
      </tr>
      <tr>
        <td><strong>Transaction ID</strong></td>
        <td><?php echo $trans_id;?></td>
      </tr>
      <tr>
        <td><strong>Receipt ID</strong></td>
        <td><?php echo $receipt_id;?></td>
      </tr>
      <tr>
        <td><strong>Acquirer Response Code</strong></td>
        <td><?php echo $acqResponseCode;?></td>
      </tr>
      <tr>
        <td><strong>Bank Authorization ID</strong></td>
        <td><?php echo $authorizeID;?></td>
      </tr>
      <tr>
        <td><strong>Batch Number</strong></td>
        <td><?php echo $batchNo;?></td>
      </tr>
      <tr>
        <td><strong>Card Type</strong></td>
        <td><?php echo $cardType;?></td>
      </tr>
      <tr>
        <td width='26%'><strong>
          <input name='weight' type='hidden' id='weight' value='<?php echo $weight;?>'>
        </strong><strong>
        <input name='items_cost' type='hidden' id='items_cost' value='<?php echo $items_cost;?>'>
        <input name='shipping_cost' type='hidden' id='shipping_cost' value='<?php echo $shipping_cost;?>'>
        <input name='pickup_time' type='hidden' id='pickup_time' value='<?php echo $pickup_time_info;?>'>
        </strong></td>
        <td width='74%'><input type='submit' name='Submit' value='Edit'></td>
      </tr>
    </table>
  
</form>

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
  $_POST[$k] = addslashes($v); 
} 
} 
//////////////

/*function convert_datetime($str) {

list($date, $time) = explode(' ', $str);
list($year, $month, $day) = explode('-', $date);
list($hour, $minute, $second) = explode(':', $time);

$timestamp = mktime($hour, $minute, $second, $month, $day, $year);

return $timestamp;
}*/

//echo convert_datetime($_GET['start_date'])."<br>";
//$date_update_ORDERS = convert_datetime($_POST['pickup_time']);
   $date_update_ORDERS = "";
//////////////////////
if ($_POST['email'] == ""){
print "
<div class='error'>
The email is required
</div>
";
} elseif(!isemail($_POST['email'])){  
echo "
<div class='error'>
The email is invalid
</div>
";  

} else {
///////// ck email
$TOTAL_AMOUNT = ($_POST['total_cost']);
// add to admin table
$in = mysql_query (" UPDATE orders SET name='{$_POST['name']}', mobile='{$_POST['mobile']}', telephone='{$_POST['telephone']}', tel2='{$_POST['tel2']}',  fax='{$_POST['fax']}',email='{$_POST['email']}', items='{$_POST['items']}',  status='{$_POST['status']}',  country='{$_POST['country']}',  city='{$_POST['city']}',  block='{$_POST['block']}',  street='{$_POST['street']}',  building='{$_POST['building']}',  post='{$_POST['post']}',  weight='{$_POST['weight']}',  items_cost='{$_POST['items_cost']}',  shipping_cost='{$_POST['shipping_cost']}',  total_cost='{$TOTAL_AMOUNT}' ,  pickup_time='{$date_update_ORDERS}' WHERE orderid='{$_POST['orderid']}' ")  
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
<p align='center'><strong><font size='4'>The Order has been edited successfully</font></strong></p> 
";
echo "<META HTTP-EQUIV=Refresh CONTenT=4;URL='?action=edit&orderid={$_POST['orderid']}'>";
}
///////////
}
break; 

///////////////////

//////////////////
case "delcon"; 
$orderid=@$_GET['orderid'];
//// result
$in = mysql_query (" SELECT * FROM orders WHERE orderid='$orderid' ") 
Or Die(MySQL_Error()); 


// while 
while($action = mysql_fetch_array($in)){ 
// data input
extract ($action); 
///////////

?>

<form action='?action=del' method='POST' name='delete' id='delete'>

     <table width='572' border='0' align='center' cellpadding='3' cellspacing='0'>
       <tr>
         <td colspan='3' align="center" class='text'><font color='#FF0000'><strong>Delete Order</strong></font></td>
       </tr>
       <tr valign='top' class='bodytextgrey'>
         <td class='text'><strong>Order ID:</strong></td>
         <td colspan='2'><?php echo $orderid; ?>
             <input name='orderid' type='hidden' id='orderid' value='<?php echo $orderid; ?>'>         </td>
       </tr>
       <tr valign='top' class='bodytextgrey'>
         <td class='text'><strong>Client Name:</strong></td>
         <td colspan='2'><?php echo $name; ?></td>
       </tr>
       <tr valign='top' class='bodytextgrey'>
         <td class='text'><strong>Client Tel:</strong></td>
         <td colspan='2'><?php echo $telephone; ?></td>
       </tr>
       <tr valign='top' class='bodytextgrey'>
         <td class='text'><strong>Client Email:</strong></td>
         <td colspan='2'><?php echo $email; ?></td>
       </tr>
       <tr valign='top' class='bodytextgrey'>
         <td class='text'><strong>Items:</strong></td>
         <td colspan='2'><?php echo $items; ?></td>
       </tr>
       <tr>
         <td class='text'>&nbsp;</td>
         <td colspan='2'><strong><font color='#FF0000'>Are you sure you want to delete it?</font></strong></td>
       </tr>
       <tr>
         <td width='128' class='text'>&nbsp;</td>
         <td width='167'><span class='maintext'>                                      <span class='text'>
            <input name='doit' type='radio' value='no' checked>
            No</span> 
                                          
              <input name='doit' type='radio' value='yes'>
         Yes</span></td>
         <td width='259'><span class='maintext'>
            <input name='submit2' type=submit value='Proceed'>
         </span></td>
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
$orderid=@$_POST['orderid'];

if ($doit =="no")
{
echo "
<strong><font color='#0000FF' size='3' face='Arial, Helvetica, sans-serif'><br>
<br>
You selected not to delete, please wait until you are redirected </font></strong>
";
echo "<META HTTP-EQUIV=Refresh CONTenT=4;URL='{$_SERVER['PHP_SELF']}'>";
}
else {
//// result
$in = mysql_query (" DELETE FROM orders WHERE orderid='$orderid' ") 
Or Die(MySQL_Error()); 
// data input
echo " 
<strong><font color='red' size='3' face='Arial, Helvetica, sans-serif'><br>
<br>
The order has been deleted successfully </font></strong>
";
echo "<META HTTP-EQUIV=Refresh CONTenT=4;URL='{$_SERVER['PHP_SELF']}'>";
// resulte close
exit;
}
break; 
////////////////////////////////

case "search"; 
?>
   

<form action="?action=result" method="get" name="search" id="search">
  <p align="center"><strong><font color="#006699">Order Search</font></strong></p>

    <TABLE width="500" align="center" cellpadding="3" class=box>
      <TBODY>
        <TR>
          <TD width="108" class=box><strong><font color="#006699">Criteria</font></strong></TD>
          <TD width="372" class=box><input name="criteria" type="text" id="criteria" value="<?php if(isset($_GET['criteria'])){echo stripslashes($_GET['criteria']);}?>"></TD>
        </TR>
        <TR>
          <TD class=box><strong><font color="#006699">Search for</font></strong></TD>
          <TD class=box>
<select name="search_for" id="search_for">
<option value="1" <?php if (isset($_GET['search_for']) && $_GET['search_for']==1){?> selected<?php }?>>Order ID</option>
<option value="2" <?php if (isset($_GET['search_for']) && $_GET['search_for']==2){?> selected<?php }?>>Item Name</option>
<option value="3" <?php if (isset($_GET['search_for']) && $_GET['search_for']==3){?> selected<?php }?>>Client Name</option>
<option value="4" <?php if (isset($_GET['search_for']) && $_GET['search_for']==4){?> selected<?php }?>>Client Tel</option>
<option value="5" <?php if (isset($_GET['search_for']) && $_GET['search_for']==5){?> selected<?php }?>>Client Email</option>
<option value="6" <?php if (isset($_GET['search_for']) && $_GET['search_for']==6){?> selected<?php }?>>Client Country</option>
</select>
</TD>
        </TR>
        <TR>
          <TD class=box><strong><font color="#006699">Status</font></strong></TD>
          <TD class=box><select name="status" id="status">
            <option value="-1">All</option>
            <option value="1" <?php if (isset($_GET['status']) && $_GET['status']==1){?> selected<?php }?>>Paid</option>
            <option value="0" <?php if (isset($_GET['status']) && $_GET['status']==0){?> selected<?php }?>>Unpaid</option>
                    </select></TD>
        </TR>
        <TR>
          <TD class=box><strong>Date</strong></TD>
          <TD class=box><input name="date_search" type="checkbox" id="date_search" value="1" <?php if (isset($_GET['date_search']) && $_GET['date_search']==1) {?>checked<?php }?>>
            Use date wise search</TD>
        </TR>
        <TR>
          <TD class=box><strong><font color="#006699">From</font></strong></TD>
          <TD class=box><INPUT   name="AncDate" type="image" id="AncDate" onClick="cal1x.select(document.search.start_date,'AncDate','yyyy-MM-dd'); return false;" src="scripts/CALENDAR.gif" alt="Calendar">
&nbsp;
<input name="start_date" id="start_date" value="<?php if (isset($_GET['start_date'])) {echo $_GET['start_date'];} else {echo date("Y-m-d",mktime( "0", "0", "0", date("m"), 1, date("Y") ));} ?>" size="25" maxlength="255" readonly></TD>
        </TR>
        <TR>
          <TD class=box><strong><font color="#006699">To</font></strong></TD>
          <TD class=box><INPUT   name="AncDate2" type="image" id="AncDate2" onClick="cal1x.select(document.search.end_date,'AncDate2','yyyy-MM-dd'); return false;" src="scripts/CALENDAR.gif" alt="Calendar">
&nbsp;
<input name="end_date" id="end_date" value="<?php if (isset($_GET['end_date'])) {echo $_GET['end_date'];}  else {echo date("Y-m-d", mktime( "0", "0", "0", date("m")+1, 1-1, date("Y") ));}?>" size="25" maxlength="255" readonly></TD>
        </TR>
        <TR>
          <TD class=box><input name="find" type="hidden" id="find" value="result">
          <input name="action" type="hidden" id="action" value="search"></TD>
          <TD class=box><input type="submit" name="Submit" value="Search"></TD>
        </TR>
      </TBODY>
    </TABLE>

  
  <DIV id="GetDate" style="VISIBILITY: hidden; POSITION: absolute; BACKGROUND-COLOR: white; layer-background-color: white"></DIV>
<DIV id="GetDate2" style="VISIBILITY: hidden; POSITION: absolute; BACKGROUND-COLOR: white; layer-background-color: white"></DIV>
</form>

<?php
 

if (isset($_GET['find']) && $_GET['find']=="result") {





if (isset($_GET['search_for']) && $_GET['criteria']!='' && $_GET['search_for']=="1") {
$_GET['criteria'] = addslashes($_GET['criteria']);
$criteria_query = "AND orderid LIKE '%{$_GET['criteria']}%' ";
$criteria_url = "&search_for={$_GET['search_for']}&criteria={$_GET['criteria']}";

}elseif (isset($_GET['search_for']) && $_GET['criteria']!='' && $_GET['search_for']=="2") {
$_GET['criteria'] = addslashes($_GET['criteria']);
$criteria_query = "AND items LIKE '%{$_GET['criteria']}%' ";
$criteria_url = "&search_for={$_GET['search_for']}&criteria={$_GET['criteria']}";

}elseif (isset($_GET['search_for']) && $_GET['criteria']!='' && $_GET['search_for']=="3") {
$_GET['criteria'] = addslashes($_GET['criteria']);
$criteria_query = "AND name LIKE '%{$_GET['criteria']}%' ";
$criteria_url = "search_for={$_GET['search_for']}";

}elseif (isset($_GET['search_for']) && $_GET['criteria']!='' && $_GET['search_for']=="4") {
$_GET['criteria'] = addslashes($_GET['criteria']);
$criteria_query = "AND telephone LIKE '%{$_GET['criteria']}%' ";
$criteria_url = "&search_for={$_GET['search_for']}&criteria={$_GET['criteria']}";

}elseif (isset($_GET['search_for']) && $_GET['criteria']!='' && $_GET['search_for']=="5") {
$_GET['criteria'] = addslashes($_GET['criteria']);
$criteria_query = "AND email LIKE '%{$_GET['criteria']}%' ";
$criteria_url = "&search_for={$_GET['search_for']}&criteria={$_GET['criteria']}";

}elseif (isset($_GET['search_for']) && $_GET['criteria']!='' && $_GET['search_for']=="6") {
$_GET['criteria'] = addslashes($_GET['criteria']);
$criteria_query = "AND country LIKE '%{$_GET['criteria']}%' ";
$criteria_url = "&search_for={$_GET['search_for']}&criteria={$_GET['criteria']}";


} else {
$criteria_query = "";
$criteria_url = "";
}


////================================
if (isset($_GET['status']) && $_GET['status']=="1") {
$_GET['status'] = addslashes($_GET['status']);
$status_query = "AND status='{$_GET['status']}'";
$status_U = "&status={$_GET['status']}";

}elseif (isset($_GET['status']) && $_GET['status']=="0") {
$_GET['status'] = addslashes($_GET['status']);
$status_query = "AND status='{$_GET['status']}'";
$status_U = "&status={$_GET['status']}";

} else {
$status_query = "";
$status_U = "";
}
////================================

if (isset($_GET['start_date']) && isset($_GET['end_date']) && $_GET['end_date']!=0 && $_GET['end_date']!='' && $_GET['start_date']!=0 && $_GET['start_date']!='') {

//==
list( $Y, $m, $d) = split( '-', $_GET['start_date']);
$c_month_start = mktime( "0", "0", "0", "$m", "$d", "$Y" ); 
//==
list( $Y_e, $m_e, $d_e) = split( '-', $_GET['end_date']);
$c_month_end = mktime( "0", "0", "0", "$m_e", "$d_e", "$Y_e" );
//==

$date_Query = "(orders_items.date BETWEEN '{$_GET['start_date']} ' AND '{$_GET['end_date']}') OR (orders_receipts.date BETWEEN '$c_month_start ' AND '$c_month_end')";
$date_Query_NONE = "AND date BETWEEN '$c_month_start ' AND '$c_month_end'";
$DATE_U = "&start_date={$_GET['start_date']}&end_date={$_GET['end_date']}";

} else {
$c_month_start = mktime( "0", "0", "0", date("m"), 1, date("Y"));
$c_month_end = mktime( "0", "0", "0", date("m")+1, 1-1, date("Y"));

$c_month_start_u = date("Y-m-d",$c_month_start);
$c_month_end_u = date("Y-m-d", $c_month_end );

$date_Query = " (orders_items.date BETWEEN '{$_GET['start_date']}' AND '{$_GET['end_date']}') OR (orders_receipts.date BETWEEN '$c_month_start ' AND '$c_month_end')";
$date_Query_NONE = "AND date BETWEEN '$c_month_start ' AND '$c_month_end'";
$DATE_U = "&start_date={$c_month_start_u}&end_date={$c_month_end_u}";
}

////================================
if (isset($_GET['date_search']) && $_GET['date_search']==1) {

$USE_DATE = "$date_Query_NONE";
$USE_DATE_U = "&date_search=1";
} else {
$USE_DATE = "";
$USE_DATE_U = "";
}
////================================

if(!isset($_GET['page'])){ 
    $page = 1; 
} else { 
    $page = $_GET['page']; 
} 

// Define the number of results per page 
$max_results = 100; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 

// Perform MySQL query on only the current page number's results 
//echo "select * from orders WHERE orderid!=0 $criteria_query $USE_DATE $status_query  ORDER BY orderid DESC LIMIT $from, $max_results";

$view_all = mysql_query("select * from orders WHERE orderid!=0 $criteria_query  $USE_DATE $status_query ORDER BY pickup_time DESC LIMIT $from, $max_results") or (mysql_error()); 

$view_TOTAL_Amount = mysql_query("select sum(total_cost) from orders WHERE orderid!=0 $criteria_query  $USE_DATE $status_query ORDER BY orderid DESC ") or (mysql_error()); 
while($row_TOTAL_Amount = mysql_fetch_array($view_TOTAL_Amount)){
$TOTAL_AMOUNT = $row_TOTAL_Amount['sum(total_cost)'];
echo "
<br>
<table width='950' height='28' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
  <td width='158' align='left'><strong>Total Amount</strong></td>
  <td height='26' align='left'><font color='#FF0000'>BD. $TOTAL_AMOUNT</font></td>
  </tr> 
</table>

";


}

$num=mysql_num_rows($view_all);
if($num==0){ 


echo "<div class='error'>No result for your search</div>";
exit;
}

echo "
<br>
<table width='950' height='28' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
  <td width='22'> ID</td>
  <td width='71'>No. Of Seats</td>
  <td width='105'>Date</td>
  <td width='191'>Name</td>
  <td width='105'>Tel</td>
  <td width='149'>Event</td>
  <td width='71'>Total </td>
  <td width='51'>Status</td>
  <td width='41'> Email</td>
  <td width='30' height='26' valign='middle'>Edit</td>
  <td width='46' height='26' valign='middle'>Delete</td>
  </tr> 
</table>
";

// data input
while($action = mysql_fetch_array($view_all)){ 
extract ($action);
$orderid = $action["orderid"]; 
$name = $action["name"];
$telephone = $action["telephone"];
$email = $action["email"]; 
$date  = date("Y-m-d",$action["date"]);

$Pickup_T = date("Y-m-d H:i:s", $action['pickup_time']);

$Seats  = $action["Seats"];
$eventsid  = $action["eventsid"];

$EVENTS_DETAILS = mysql_query("SELECT * FROM events WHERE eventsid='$eventsid'")Or Die(MySQL_Error()); 
while($EVENTS_ROW = mysql_fetch_array($EVENTS_DETAILS)){ 
$EVENTS_TITLE = $EVENTS_ROW['title'];
} // end check event
///// Active OR Not
/// stat
if ($action["status"]==1) {
$status = "<font color='green'>Paid</font>";
} else {
$status = "<font color='red'>UnPaid</font>";
}
////////////
if ($num_super != 1) { 
$EDIT_LINK = "--";
$DELET_LINK = "--";
} else {
$EDIT_LINK = "<a href='?action=edit&orderid=$orderid'>Edit</a>";
$DELET_LINK = "<a href='?action=delcon&orderid=$orderid'>Delete</a>";
}
//
// go on
echo "
<table width='950' height='28' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
  <td width='22'> <a href='../print_receipts.php?orderid=$orderid' target='_blank'>$orderid</a></td>
  <td width='71'>$Seats</td>
  <td width='105'>$date</td>
  <td width='191'>$name</td>
  <td width='105'>$telephone</td>
  <td width='149'>$EVENTS_TITLE</td>
  <td width='71'>$total_cost </td>
  <td width='51'>$status</td>
  <td width='41'> <a href='?action=mail&orderid=$orderid'  onClick='return send_email()'>Send</a></td>
  <td width='30' height='26' valign='middle'>$EDIT_LINK</td>
  <td width='46' height='26' valign='middle'>$DELET_LINK</td>
  </tr> 
</table>
";


} // end while


/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM orders WHERE orderid!=0 $criteria_query  $USE_DATE $status_query"),0)Or Die(MySQL_Error()); 


// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 

// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center>Select a Page<br />"; 
}
// Build Previous Link 
if($page > 1){ 
    $prev = ($page - 1); 
    echo "<a href=\"".$_SERVER['PHP_SELF']."?action=search&find=result&page=$prev{$criteria_url}{$DATE_U}{$status_U}{$USE_DATE_U}\"><< Prev</a> "; 
} 

for($i = 1; $i <= $total_pages; $i++){ 
    if(($page) == $i){ 
	if ($total_pages > 1){
        echo "$i "; 
		}
        } else { 
            echo "<a href=\"".$_SERVER['PHP_SELF']."?action=search&find=result&page=$i{$criteria_url}{$DATE_U}{$status_U}{$USE_DATE_U}\">$i</a> "; 
    } 
} 

// Build Next Link 
if($page < $total_pages){ 
    $next = ($page + 1); 
    echo "<a href=\"".$_SERVER['PHP_SELF']."?action=search&find=result&page=$next{$criteria_url}{$DATE_U}{$status_U}{$USE_DATE_U}\">Next >></a>"; 
} 
echo "</center>";



} // End if search

break; 

///////////

/*/////////////////////////////////////////////////////////////
Main control

*////////////////////////////////////////////////////////////
default: 

/// stat
if (isset($_GET["status"]) && $_GET["status"]==1) {
$status_query = "WHERE status='1'";
$status_url =   "&status=1";

} elseif (isset($_GET["status"]) && $_GET["status"]==0) {
$status_query = "WHERE status='0'";
$status_url =   "&status=2";

} else {
$status_query = "";
$status_url =   "";
}

if(!isset($_GET['page'])){ 
    $page = 1; 
} else { 
    $page = $_GET['page']; 
} 

// Define the number of results per page 
$max_results = 100; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results); 

// Perform MySQL query on only the current page number's results 


$view_all = mysql_query("SELECT * FROM orders $status_query ORDER BY pickup_time DESC LIMIT $from, $max_results")Or Die(MySQL_Error()); 

/////////////////////////////////////////////////////////////////////////////////////////////


$orders_all = mysql_query("SELECT * FROM orders $status_query")Or Die(MySQL_Error()); 
$num_orders = mysql_num_rows($orders_all);
echo "<div class='error' align='center'><strong>You have ($num_orders) Registrations</strong></div> <br/> <br/>";

/////////
echo "
<br>
<table width='950' height='28' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
  <td width='22'> ID</td>
  <td width='71'>No. Of Seats</td>
  <td width='105'>Date</td>
  <td width='191'>Name</td>
  <td width='105'>Tel</td>
  <td width='149'>Event</td>
  <td width='71'>Total </td>
  <td width='51'>Status</td>
  <td width='41'> Email</td>
  <td width='30' height='26' valign='middle'>Edit</td>
  <td width='46' height='26' valign='middle'>Delete</td>
  </tr> 
</table>
"; 



///////
while($action = mysql_fetch_array($view_all)){ 
$orderid = $action["orderid"]; 
$name = $action["name"];
$telephone = $action["telephone"];
$email = $action["email"]; 
$total_cost = $action["total_cost"]; 
$Seats  = $action["Seats"];
$date  = date("Y-m-d",$action["date"]);
$Pickup_T = date("Y-m-d H:i:s", $action['pickup_time']);


$eventsid  = $action["eventsid"];

$EVENTS_DETAILS = mysql_query("SELECT * FROM events WHERE eventsid='$eventsid'")Or Die(MySQL_Error()); 
while($EVENTS_ROW = mysql_fetch_array($EVENTS_DETAILS)){ 
$EVENTS_TITLE = $EVENTS_ROW['title'];
} // end check event
///// Active OR Not
/// stat
if ($action["status"]==1) {
$status = "<font color='green'>Paid</font>";
} else {
$status = "<font color='red'>UnPaid</font>";
}
////////////
if ($num_super != 1) { 
$EDIT_LINK = "--";
$DELET_LINK = "--";
} else {
$EDIT_LINK = "<a href='?action=edit&orderid=$orderid'>Edit</a>";
$DELET_LINK = "<a href='?action=delcon&orderid=$orderid'>Delete</a>";
}
// go on
echo "
<table width='950' height='28' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#0000FF' bgcolor='#F5F4F3' id='AutoNumber1' style='border-collapse: collapse'> 
<tr align='center'>
  <td width='22'> <a href='../print_receipts.php?orderid=$orderid' target='_blank'>$orderid</a></td>
  <td width='71'>$Seats</td>
  <td width='105'>$date</td>
  <td width='191'>$name</td>
  <td width='105'>$telephone</td>
  <td width='149'>$EVENTS_TITLE</td>
  <td width='71'>$total_cost </td>
  <td width='51'>$status</td>
  <td width='41'> <a href='?action=mail&orderid=$orderid'  onClick='return send_email()'>Send</a></td>
  <td width='30' height='26' valign='middle'>$EDIT_LINK</td>
  <td width='46' height='26' valign='middle'>$DELET_LINK</td>
  </tr> 
</table>
";

}

/////////////////////////
// Figure out the total number of results in DB: 
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM orders $status_query"),0)Or Die(MySQL_Error()); 


// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results); 

// Build Page Number Hyperlinks 
if ($total_pages > 1){
echo "<center>Select a Page<br />"; 
}
// Build Previous Link 
if($page > 1){ 
    $prev = ($page - 1); 
    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$prev{$status_url}\"><<Prev</a> "; 
} 

for($i = 1; $i <= $total_pages; $i++){ 
    if(($page) == $i){ 
	if ($total_pages > 1){
        echo "$i "; 
		}
        } else { 
            echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$i{$status_url}\">$i</a> "; 
    } 
} 

// Build Next Link 
if($page < $total_pages){ 
    $next = ($page + 1); 
    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$next{$status_url}\">Next>></a>"; 
} 
echo "</center>";

/////////////////

break; 

///////////////////
/////////////////////
case "mail"; 

$orderid=@$_GET['orderid'];
$in = mysql_query (" SELECT email,orderid,name FROM orders WHERE orderid='$orderid' limit 1") Or Die(MySQL_Error()); 
// while 
while($action = mysql_fetch_array($in)){ 
extract ($action);

$to  = "{$name}" . ", " ; // note the comma
/* subject */
$subject = "Your Order at $db_site_name";
$text = "
Your Order  is ready for payment
<br>

please click on this link to make the payment
<br>

<a href='$db_site_add/order_details.php?orderid={$orderid}'>$db_site_add/order_details.php?orderid={$orderid}</a>
<br>

$db_site_add/order_details.php?orderid={$orderid}
";
/* what is $to?
all emails*/
/* To send HTML mail, you can set the Content-type header. */
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=windows-1256\r\n";

/* additional headers */
$headers .= "To: {$name} <{$email}>\r\n";
$headers .= "From: $db_site_name <$db_email>\r\n";

//send

$Send = mail($to, $subject, "$text", $headers);
//see if sent
if ($Send) { echo "<p>&nbsp;</p><p><strong><font color='#000099' size='5'>The order sent to ({$name})</font></strong></p>"; }
else { echo "<p>&nbsp;</p><p><strong><font color='#FF0000' size='5'>Error .. The order not sent </font></strong></p>"; }


} // end while

echo "<META HTTP-EQUIV=Refresh CONTenT=4;URL='?'>";
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