<?php
//=========================================================================================
//      Adds an employee record to the EMPLOYEE table
//
//      Called from AddEmp.html
//      Calls nothing
//=========================================================================================

include 'config.php'; // config.php connects to the database

//*************************************************************************************************************************************

//creates the variables and stores the user input to that variable
$first_name = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
$last_name = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
    //mysql_real_escape_string is a php function that escapes all special characters so they can be inserted.
$email = $_POST['email'];
$phone = preg_replace("/[^0-9]/", "", $_POST['phone']);
    //php function to remove anything that is not a digit from the string. In this case, the hyphens from the phone number

//*************************************************************************************************************************************

// inserts the variables into the columns of the table
$sql = "INSERT INTO EMPLOYEE (EMP_FNAME, EMP_LNAME, EMP_PHONE, EMP_EMAIL) VALUES ('$first_name', '$last_name', '$phone', '$email')";

//*************************************************************************************************************************************

    //if the query is successful, shows message and redirects to Employees page. If not, displays query and error message
if(mysqli_query($conn, $sql)){
    $message = "Employee successfully added";
    echo '<script type="text/javascript">
    alert("'. $message. '");
    location="Employees.php";
    </script>';
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>