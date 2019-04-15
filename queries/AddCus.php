<?php
//=========================================================================================
//      Adds a customer record to the CUSTOMER table
//
//      Called from AddCus.html
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
$sql = "INSERT INTO CUSTOMER (CUS_FNAME, CUS_LNAME, CUS_PHONE, CUS_EMAIL) VALUES ('$first_name', '$last_name', '$phone', '$email')";

//*************************************************************************************************************************************

//if the query is successful, redirects to Customers page. If not, displays query and error message
if(mysqli_query($conn, $sql)){
    header("location: Customers.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>