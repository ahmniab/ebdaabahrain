<?php
include ('includes/header.php');

//////////////////////////////////////////////////
// add to table
$edit_images = mysql_query("select * from images ")Or Die(MySQL_Error());
$i = 1;
/// cer
while($edit = mysql_fetch_array($edit_images)){ 

if ($edit['price_old']!='0.000' && $edit['price_old']>$edit['price']) {
$update = mysql_query ("UPDATE images SET price='{$edit['price_old']}' , price_old='{$edit['price']}'  WHERE  imageid='{$edit['imageid']}' ") or die(mysql_error()); 
$i+=1;
echo "ID: {$edit['imageid']}<br />";
} // end conditions
}
echo $i;
?>