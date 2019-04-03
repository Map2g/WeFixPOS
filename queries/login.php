<?php

//*****************************************************************************************************

// include("../config.php");
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

//*****************************************************************************************************

$employee_ID = $_POST['EmpID']; 
$password = $_POST['EmpPass']; 

//*****************************************************************************************************

$sql = "SELECT * FROM EMPLOYEE WHERE EMP_ID = '$employee_ID' and EMP_PASS = '$password'"; //Searching for a matching record in the database
$result = mysqli_query($conn, $sql);//result stores the boolean value of the query from the variable sql
$row = mysqli_fetch_assoc($result);//row stores the value of result 
$count = mysqli_num_rows($result);//counts the number of rows that match result

//*****************************************************************************************************

if ($count == 1) {
    // if( isset($_POST['remember'])){
        setcookie('EmpID', $employee_ID, time() + 86400); 
        session_start(); 
        $_SESSION['EmpID'] = $employee_ID; 
        $login = $_SESSION['EmpID']; 
        echo $_SESSION['EmpID']; 
        header("location: ./index.php"); 
    // }
}
else{ 
    echo "Incorrect email or password"; 
} 

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Refresh" content="0; url=/index.php" />
</head>
</html>