<?php
include ('header.php');
//////////////////////////////////////////////////
if ($authorization != '1') {

print "<script language=\"JavaScript\">";
print "window.location = 'login.php' ";
print "</script>";/* include ("login.php");  Redirect browser */
exit;

} else { 

// backup.php Configuration 

// DB Configuration
$server = $db_host;
$username = $db_user;
$password = $db_pass;
$dbToDump = $db_name;
// password to access the php page. PLEASE change the default password!!!
// filename to save
$filename = "backup_".date("d-m-Y_H-i-s").".sql";

// html parameters

//Include the library
@include_once('../includes/lib_dump.php');
//Db connection
$connection = @mysql_connect($server,$username,$password);
//Create the MySQLDump class instance
//1° parameter: db name
//2° parameter: the exported file that will contain the dump
//3° parameter: create zipped file (true = zipped, false = normal)
//4° parameter: data encode (true = hexadecimal, false = plain text)
$dumper = new MySQLDump($dbToDump,$filename,false,false);


/////-------------------------------------------
if ($dumper->doDump()){

echo "
<div align='center'><strong>
The full backup has been taken successfully 
<br/>
&#1578;&#1605; &#1575;&#1606;&#1588;&#1575;&#1569; &#1606;&#1587;&#1582;&#1577; &#1575;&#1581;&#1578;&#1610;&#1575;&#1591;&#1610;&#1577; &#1576;&#1606;&#1580;&#1575;&#1581;
</strong></div>
";
}
////
//$dumper->getDatabaseStructure();
//$dumper->getDatabaseData();

/////-------------------------------------------
//Structure export of the table 'mytable'
//$dumper->getTableStructure('admin');
//Data export of the table 'mytable'
//$dumper->getTableData('admin');

///////////// end protect
}
?> 