<?php
/*
@author Dhruvi
@date 27-08-2022
*/
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
	$dbname = "sctdb";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);    
    if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
?>