<?php
include ('includes/header.php');

//////////////////////////////////////////////////

$update = mysql_query ("UPDATE images_cat SET view_dir='1' , view_market='1' , view_req='1'   ") or die(mysql_error()); 

?>