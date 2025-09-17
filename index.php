<?php
require_once 'lang/init.php';
if ($lang == 'ar') {
  echo file_get_contents('ar.html');
} else {
  echo file_get_contents('en.html');
}
exit;