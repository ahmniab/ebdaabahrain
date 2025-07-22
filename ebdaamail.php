<!DOCTYPE HTML>  
<html>
<head>
<title>الابداع للتمويل متناهي الصغر -البحرين </title>
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
	text-align:right;
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
// creating values 
$Name = $Name_err = $errorMSG = $success="";
$ID = $ID_err = $IDc="";
$Number = $Number_err = $Numberc="";
$Email = $Email_err = "";

// linking html with php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
//Name chaking 

  if (empty($_POST["Name"]))
  {
    $Name_err = " Enter Your Full Name  || الرجاء ادخال الاسم الرباعي ";
  }
  else if(!preg_match("/^[a-zA-Z-' ]*$/",$Name))
  {
    $Name_err = " Please Inter Your Name Correctly || الرجاء أدخال الاسم بشكل صحيح ";
  }
  else
  {
    $Name =($_POST["Name"]);
  }

  
// id chaking 
  if (empty($_POST["ID"]))
  {
    $ID_err = " Enter your ID  || الرجاء أدخال الرقم الشخصي ";
  }
  elseif((strlen($_POST["ID"]) < 9))
  {
    $ID_err = " Your ID is incorrect  || الرقم الشخصي غير صحيح ";
  }
  else
  {
    $IDc= is_numeric($_POST["ID"]);
  }
  if ( $IDc==1)
  {
	$ID = $_POST["ID"];
  }
  else 
  {
	$ID_err = " Your ID is incorrect  || الرقم الشخصي غير صحيح ";
  }

// Number Chaking 
  if (empty($_POST["Number"]))
  {
    $Number_err = " Enter your Mobile Number  || الرجاء ادخال رقم المحمول ";
  }
  elseif((strlen($_POST["Number"]) < 8))
  {
    $Number_err = " Mobile Number is incorrect || رقم الهاتف غير صحيح ";
  }
  else
  {
    $Numberc= is_numeric($_POST["Number"]);
  }
  if ($Numberc==1)
  {
	$Number = $_POST["Number"];
  }
  else 
  {
	$Number_err = " Mobile Number is incorrect || رقم الهاتف غير صحيح ";
  }

// Email Chaking

  if (empty($_POST["Email"]))
  {
    $Email_err = " Please Enter Your Email  |  الرجاء ادخال البريد الالكتروني ";
  }
  else if(!preg_match("/^[a-zA-Z-' ]*$/",$Email))
  {
    $Email_err = "Please Inter Your Email Correctly || الرجاء أدخال الإيميل بشكل صحيح";
  }
  else
  {
    $Email =($_POST["Email"]);
  }
  

// Assining values

if (empty($ID_err) && empty($Name_err) && empty($Number_err)&& empty($Email_err))
  {
	 (String)$Name=(String)$_POST['Name'];
	 (int)$ID=(int)$_POST['ID'];
     (int)$Number=(int)$_POST['Number'];
	 (String)$Email=(String)$_POST['Email'];
	  $Month = $_POST['month'];

  }  
  }
// Reset Button

if (isset($_POST["reset"]))
{
$Name = $Name_err = $errorMSG = $success="";
$ID = $ID_err ="";
$Number = $Number_err = $Numberc="";
$Email = $Email_err = "";
}

// creating random number and send it

if (isset($_POST["submit"]))
{
    if((empty($ID_err)) && (empty($Name_err)) && (empty($Number_err)) && (empty($Email_err))&& (!empty($_POST['month'])))
	{
		$OTP= rand (99 ,999);
		$EmailTo ="sayedooo96@gmail.com";
		$Subject = " OTP ";
		$EmailFrom = "It@ebdaabank.com";
		
		$Body = "
			<html>
				<head>
				</head>
				<body style='background-color: #e4e4e4; direction: rtl; font-size:20px;'>
				<div style='width:100%;height:10%;'></div>
				<table cellspacing='0' style='border-collapse: collapse; border: 5px black; width: 80%; min-height: 40%; margin:50px auto; background-color:white'>
				<tr>
				<th rowspan='5' style='border: 1px solid black; width:10%;'> OTP </th>
				<td rowspan='5' colspan='3' style='border: 1px solid black; width:30%;'>$OTP</td>
				</tr>
				</table>
				<div style='width:100%;height:15%;'></div>
				</body>
			</html>
		";
		$headers = "From: " . $EmailFrom . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$success = mail( $EmailTo , $Subject , $Body , $headers );
		setcookie("OTP" , $OTP , time()+3600  , "/");
	    setcookie("Name" , $Name , time()+3600 , "/");
	    setcookie("ID" , $ID , time()+3600 , "/");
	    setcookie("Number" , $Number , time()+3600 , "/");
	    setcookie("Month" , $Month , time()+3600 , "/");
		if ($success)
		{
			echo " <script type='text/javascript'>setTimeout('OTP()',1); </script> ";	
		}
    }
}
?>
<div class = "contenar">
<form accept-charset="UTF-8" action="ebdaamail.php" role="form" method="post" >
<div class="row">
<div class="col-sm-3">
<img src="assets/img/ebdaa2.jpg" alt="Italian Trulli" alt="Ebdaa Bahrain" width="1000" height="160" class="center">

<div class="h1">
<h1>  Welcome To Reschedule Loan Page | مرحبا بكم في صفحة تأجيل أقساط القروض </h1>
</div>
<p>
</p>
<div class="contact-block">
<label for="Name"><b> Please Enter Your Full Name  |  الرجاء ادخال الاسم الرباعي </b></label>
<p>
<input type="text" placeholder=" Full Name | ألاسم الرباعي " name="Name" maxlength="30" value="<?php echo $Name?>" required>
<p>
<span class="error" ><?php echo $Name_err;?></span>
</p>
</p>


<label for="ID"><b> Please Enter Your Parsonal ID  |  الرجاء ادخال الرقم الشخصي   </b></label>
<p>
<input type="text" placeholder=" Parsonal ID |  الرقم الشخصي "name="ID" maxlength="9" value="<?php echo $ID?>" required>
<p>
<span class="error" ><?php echo $ID_err;?></span>
</p>
</p>


<label for= "number"><b> Please Enter Your Phone Number  |  الرجاء ادخال رقم الهاتف النقال  </b></label>
<p>
<input type="text" placeholder=" Phone Number | رقم الهاتف النقال  " name="Number" maxlength ="8" value="<?php echo $Number?>" required>
<p>
<span class="error" ><?php echo $Number_err;?></span>
</p>
</p>

<label for= "Email"><b> Please Enter Your Email  |  الرجاء ادخال البريد الالكتروني </b></label>
<p>
<input type="text" placeholder="  Email | البريد الالكتروني  " name="Email" value="<?php echo $Email?>" required>
<p>
<span class="error" ><?php echo $Email_err;?></span>
</p>
</p>
<div class= "selection">
<p>
<label for="Loan2"> <b> Please Choose Number Of Months For Rescheduling Loan | الرجاء اختيار عدد أشهر تأجيل أقساط القرض  </b> </label>
<p>
<select id="Loan2" name="month">
<option class="M1" value="none" selected disabled hidden>  Choose The Number of months   |   أختار عدد الشهور   </option>
<option class="M1" value=" <b> One Month ( 1 ) </b>"    > 1 </option>
<option class="M1" value=" <b> Two Months ( 2 ) </b>"   > 2 </option>
<option class="M1" value=" <b> Three Months ( 3 ) </b>" > 3 </option>
<option class="M1" value=" <b> Four Months ( 4 ) </b>"  > 4 </option>
<option class="M1" value=" <b> Five Months ( 5 ) </b>"  > 5 </option>
<option class="M1" value=" <b> Six Months ( 6 ) </b>"   > 6 </option>
</select>
</p>
</p>
</div>
<div class= "note">
<p>  .عميلنا العزيز يرجى العلم بأن سوف يتم ارسال رقم تحقق على الإيميل *</p>
<p>   لإتمام هذه العملية يتطلب منكم الموافقة على الشروط والأحكام وملء الاستمارة  *</p>
<p> .عميلنا العزيز يرجى العلم بأن طلبك سوف يتم دراسته في حالة الموافقة او الرفض سوف يتم التواصل معكم*</p>
</div>
</label>
<p>
<div class="form-group">
<label class="container"><b> You Must Agree To Postponement Your Loan  |   يجب عليك ان توافق لاكمال عملية تأجيل اقساط القرض </b>
<input type="checkbox" name="otherForm-chcekbox" required>
<span class="checkmark"></span>
</label>
</div>
</p>
<div class="form-group">
   <p>
<input id="otherForm-submitBtn" class="monitored-btn" type="submit" name="submit"  disabled >
<input class="btn btn-primary" type="reset"  id="reset" name="reset" value="CLEAR">
</p>
</div>
</div>
</div>
</form>
<script>
function OTP()
{
  window.location=("ebdaaotp.php");
}
  const inputSelector = ':input[required]:visible';
    function checkForm() {
        var isValidForm = false;
        $(this.form).find(inputSelector).each(function() {
            if (((this.type != 'checkbox') && (this.value.trim() != "")) || (this.type == 'checkbox' && this.checked)) {
                isValidForm = true;		
            }
            else
			{
            isValidForm = false
                return false
            }
        });
        $(this.form).find('.monitored-btn').prop('disabled', !isValidForm);
        return isValidForm;	
    }
    $('.monitored-btn').closest('form')
        .submit(function() 
		{
            return checkForm.apply($(this).find(':input')[0]);
        })
        .find(inputSelector).on("keyup change", checkForm);	
		
</script>
</body>
</html>