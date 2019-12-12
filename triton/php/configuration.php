<?php
$dbname = 'webeng19g6';
$dbuser = 'webeng19g6';
$dbpass = '19g6webeng';
$dbhost = 'localhost:3306';

$link = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
?>
?>