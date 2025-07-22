<?php


///////////////////////////////////////////////////// Functions/////////////////////////////////////////////////////////////////////////////////  


////////////// USER IP ///////////


  function get_user_ip() {


    global $HTTP_SERVER_VARS, $HTTP_ENV_VARS;


    $ip = (!empty($HTTP_SERVER_VARS['REMOTE_ADDR'])) ? $HTTP_SERVER_VARS['REMOTE_ADDR'] : ((!empty($HTTP_ENV_VARS['REMOTE_ADDR'])) ? $HTTP_ENV_VARS['REMOTE_ADDR'] : getenv("REMOTE_ADDR"));


    $ip = preg_replace("/[^\.0-9]+/", "", $ip);


    return substr($ip, 0, 50);


  }


////////////// END USER IP ///////////


////////////// SESSION Log in///////////


function session_login($login_adminid,$session_time,$session_id){


if($login_adminid !=0){ 


$del_user_sess = mysql_query (" DELETE FROM admin_sessions WHERE session_user='$login_adminid'") Or Die(MySQL_Error()); 


if (!$del_user_sess) {


$tracking=mysql_query("UPDATE admin_sessions SET session_update='$session_time', session_user='$login_adminid' WHERE session_id='$session_id'")Or Die(mysql_error()); 


} else {


$tracking=mysql_query("UPDATE admin_sessions SET session_update='$session_time', session_user='$login_adminid' WHERE session_id='$session_id'")Or Die(mysql_error()); 


} /// end if del or not


}// end check user db


} // end function


////////////// END SESSION Log in///////////


////////////// SESSION Log out///////////


function session_logout($session_id){


$in = mysql_query (" DELETE FROM admin_sessions WHERE session_id='$session_id'") Or Die(MySQL_Error()); 


session_destroy();


} // end function


////////////// END SESSION Log out///////////





///////////////////////////////////////////////////// END Functions/////////////////////////////////////////////////////////////////////////////////  


$session_id = session_id();


////////////// GET USER ID


if ($session_id) {


$check_loged_user =mysql_query("SELECT * FROM admin_sessions WHERE session_id='$session_id' ")or die(mysql_error()); 


$num_loged=mysql_num_rows($check_loged_user);


if ($num_loged != 1) {


$adminid= 0;


} else {


while($row_loged = mysql_fetch_array($check_loged_user))


{


extract($row_loged);


$adminid= $row_loged ['session_user'];


} // end while


} // end inside else


} // end cond


//////////////////////////////////////////////


$session_time = time();


$user_ip = get_user_ip();





/////////////////////////////////////////////// LOGIC ////////////////////////////////////////////////////////////////


if($adminid ==0){ 


$check_user=mysql_query("SELECT * FROM admin_sessions WHERE session_id='$session_id'")Or Die(mysql_error()); 


$num=mysql_num_rows($check_user);


if ($num != 1) {


$authorization = '0';


////////////////////////////////////////////


$query = mysql_query("INSERT INTO admin_sessions (session_id,session_time,session_update,session_user,session_ip) VALUES ('$session_id', '$session_time', '$session_time', '$adminid', '$user_ip')") or die(mysql_error()); 


} else {


$authorization = '0';


$tracking=mysql_query("UPDATE admin_sessions SET session_update='$session_time' WHERE session_id='$session_id'")Or Die(mysql_error()); 


}


// do in not 0


} else {


$authorization = '1';


$tracking=mysql_query("UPDATE admin_sessions SET session_update='$session_time', session_user='$adminid' WHERE session_id='$session_id'")Or Die(mysql_error()); 


}// end check user db





// end authorization


/////////////DELETE EXPIRED admin_sessions///////////////


$yesterday = 100000; 


// the time 


$current_time = time(); 


$timeout = $current_time-$yesterday; 


////


if ($timeout <= $current_time) {


$Delete_expired = mysql_query("DELETE FROM admin_sessions WHERE session_time<='$timeout'")or die(mysql_error()); 


} 


/////////////END DELETE EXPIRED admin_sessions/////////



//==================================
$view_super = mysql_query("SELECT super FROM admin WHERE adminid='$adminid' AND super='1' ") Or Die(MySQL_Error()); 
//---
$num_super = mysql_num_rows($view_super);

if ($num_super != 1) {
$super_info = "WHERE adminid='$adminid'"; 
} else {
$super_info = ""; 
}
//==================================




?>