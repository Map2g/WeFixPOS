<?php
include 'config.php'; // config.php connects to the database

//*************************************************************************************************************************************

//creates the variables and stores the user input to that variable
$first_name = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
$last_name = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = mysql_real_escape_string(htmlspecialchars($_POST['Password']));

//*************************************************************************************************************************************

// inserts the variables into the columns of the table
$sql = "INSERT INTO EMPLOYEE (EMP_FNAME, EMP_LNAME, EMP_PHONE, EMP_EMAIL, EMP_PASS) VALUES ('$first_name', '$last_name', '$phone', '$email', '$password')";

//*************************************************************************************************************************************

if(mysqli_query($conn, $sql)){
    $last_id = mysqli_insert_id($conn);
    $message = "This employee's ID is ". $last_id;
    echo '<script type="text/javascript">
    alert("'. $message. '");
    location="Employees.php";
    </script>';
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>