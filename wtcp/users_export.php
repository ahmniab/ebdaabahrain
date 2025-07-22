<?php
include ('../includes/config.php');
//////////////////
// find rows out
$n_fields = "";
$info = "";

$result = mysql_query('select userid,user_group,username,fname,useremail,tel,mobile,fax from users') or die(mysql_error()); 
$count = mysql_num_fields($result); 
//echo $count;
for ($i = 0; $i < $count; $i++){ 
$n_fields .= mysql_field_name($result, $i)."\t"; 
} 
// extract data
while($row = mysql_fetch_row($result)){ 
$ln = ''; 
foreach($row as $value){ 
if(!isset($value) || $value == ""){ 
$value = "\t"; 
}else{ 

$value = str_replace('"', '""', $value); 
$value = '"' . $value . '"' . "\t"; 
} 
$ln .= $value; 
} 
$info .= trim($ln)."\n"; 
} 

$info = str_replace("\r", "", $info); 

if ($info == "") { 
echo "\n No result found\n"; 
} else {
// headers vnd/ms-excel 
header("Content-Type: application/vnd.ms-excel; name='excel'"); 
header("Content-Disposition: attachment; filename=users_list.xls"); 
header("Pragma: no-cache");
header("Expires: 0");
$xls=$n_fields."\n".$info; 
print $xls; 
}


////////////////////////////////////////////////////////
?>