<?php
////////////////////////////
header ("Cache-Control: no-store, no-cache, must-revalidate");
header ("Cache-Control: pre-check=0, post-check=0, max-age=0", false);
header ("Pragma: no-cache");
header ("Expires: " . gmdate("D, d M Y H:i:s", time()) . " GMT");
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
date_default_timezone_set("Asia/Bahrain");
//echo date_default_timezone_get();
//////////////////////
session_start();
error_reporting(E_ALL);
/////////////
if (!@ini_get('safe_mode')) {
set_time_limit(60);  // shouldn't take nearly this long in most cases, but with many filter and/or a slow server...
}
/////////////// INCLUDES /////////////////////////////////
include("../includes/config.php");
include ('site_info.php');
include ('functions.php');
include ('func_cats.php');
include ('func_serv.php');
include ('sessions.php');
//////////////////////////////////////////////////////////
?>