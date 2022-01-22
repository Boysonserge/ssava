<?php
$host = 'localhost';
$username = 'hkasetgm_serge';
$pass = 'Akaramata@123';
$db = 'hkasetgm_cougar';

$db = new mysqli($host,$username,$pass,$db);

if ($db->connect_error) {
	 die("Connection Failed". $db->connect_error);
}

?>