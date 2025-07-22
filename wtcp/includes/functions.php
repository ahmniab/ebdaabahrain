<?php





////////////////Check if numbers + samples////////////





function numbers_only($var){





if(!preg_match("/[^0-9\ ]+$/",$var)) return TRUE;





else return FALSE;





}





////////////////Check if numbers only /////////////





function lnonly($string) { 





 $eregi = eregi_replace("([0-9]+)","",$string); 





 if(empty($eregi)){ 





  return true; 





  } 





 return false; 





} 





////////////////////////////////////////////





////////////////Check if email /////////////

function isemail($mail)

   {       // regx to test for valid e-mail adres

       $regex = "/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i";
       if (preg_match($regex, $mail)) return true;
       else return false;
   }



//////////////////////////////////////////////





////////////////Check if site ///////////////





    function issite($site)





   {





       // regx to test for valid website address  





       $regex = '^(http://www)+\.'.'[A-Z a-z_0-9 -]+(\.[a-z0-9-]{2,})+$';





       if (eregi($regex, $site)) return true;





       else return false;





   }





/////////////////////////////////////////////////





////////////////Check pass length ///////////////





function check_password($password)  





    {  





    $check_num=strlen($password);  





    if($check_num < 6)  





    {  





    return false;  





    }else{  





    return true;  





    }      





    } 





/////////////////////////////////////////////////////





//////////////// Check if long length ////////////////////////





function check_length($value,$length)  





    {  





    $check_num=strlen($value);  





    if($check_num > $length)  





    {  





    return false;  





    }else{  





    return true;  





    }      





    } 





///////////////////////////////////////////////// 





//////////////// Check if small length ////////////////////////





function check_s_length($value,$length)  





    {  





    $check_num=strlen($value);  





    if($check_num < $length)  





    {  





    return false;  





    }else{  





    return true;  





    }      





    } 





/////////////////////////////////////////////////





////////////////////////// show error message if exist ///////////////////////  





function show_message()  {  





global $message;  





echo"





<div align='center'><font color='#FF0000' face='Arial, Helvetica, sans-serif'><strong>





$message





</strong></font></div>





";  





} 





////////////////////////// show success message if exist ///////////////////////  





function show_success_message()  





{  





global $success_message;  





echo





"





<div align='center'><font color='#0000CC' face='Arial, Helvetica, sans-serif'><strong>





$success_message





</strong></font></div>





";  





} 











//////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////



function return_bytes($val) {

    $val = trim($val);

    $last = strtolower($val{strlen($val)-1});

    switch($last) {

        // The 'G' modifier is available since PHP 5.1.0

        case 'g':

            $val *= 1024;

        case 'm':

            $val *= 1024;

        case 'k':

            $val *= 1024;

    }

    return $val;

}



////---------------------

$maxsize = return_bytes(ini_get('post_max_size'));

$maxsize_info = ini_get('post_max_size');

//////////////////////////////////////////////////////////////////



function convert_datetime($str) {



list($date, $time) = explode(' ', $str);

list($year, $month, $day) = explode('-', $date);

list($hour, $minute, $second) = explode(':', $time);



$timestamp = mktime($hour, $minute, $second, $month, $day, $year);



return $timestamp;

}

//////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////

/// validate date



 function validateDate( $postedDate ) {

   if ( preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $postedDate) ) {

      list($year , $month , $day) = explode('-',$postedDate);

      return checkdate($month , $day , $year);

   } else {

      return false;

   }

} 



/////    echo MyCheckDate( '2007-04-04' )  ? 'good'. "\n" : 'bad' . "\n";

  

  ////////////////////////////////////////////  ////////////////////////////////////////////

    ////////////////////////////////////////////  ////////////////////////////////////////////



?>