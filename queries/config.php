<?php
//=========================================================================================
//      Connects to the database
//
//      Called from nearly everything
//=========================================================================================

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WeFix";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

?>