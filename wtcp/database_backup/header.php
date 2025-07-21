<?php
////////////////////////////
  header ("Cache-Control: no-store, no-cache, must-revalidate");
  header ("Cache-Control: pre-check=0, post-check=0, max-age=0", false);
  header ("Pragma: no-cache");
  header ("Expires: " . gmdate("D, d M Y H:i:s", time()) . " GMT");
  header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
//////////////////////
session_start();


/////////////
if (!@ini_get('safe_mode')) {
    set_time_limit(60);  // shouldn't take nearly this long in most cases, but with many filter and/or a slow server...
}

/////////////// INCLUDES /////////////////////////////////
include("../../includes/config.php");
include ('../includes/functions.php');
include ('../includes/sessions.php');
//////////////////////////////////////////////////////////
?>
