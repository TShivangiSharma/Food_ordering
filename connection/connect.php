<?php

$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "food_ordering_project";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname,3306); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>