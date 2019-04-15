<?php
//=========================================================================================
//      Adds a device record to the DEVICE table
//
//      Called from AddDevForm.php
//      Calls nothing
//=========================================================================================


include 'config.php'; // config.php connects to the database
//*************************************************************************************************************************************

//creates the variables and stores the user input to that variable
$cusID = $_POST['id'];
$model = mysql_real_escape_string(htmlspecialchars($_POST['model']));
    //mysql_real_escape_string is a php function that escapes all special characters so they can be inserted.
$phone = preg_replace("/[^0-9]/", "", $_POST['phone']);
    //php function to remove anything that is not a digit from the string. In this case, the hyphens from the phone number

//*************************************************************************************************************************************

// inserts the variables into the columns of the table
$sql = "INSERT INTO DEVICE (DEV_MODEL, DEV_PHONE, CUS_ID) VALUES ('$model', '$phone', '$cusID')";

//*************************************************************************************************************************************

//if the query is successful, redirects to CusSummary page for the individual customer. If not, displays query and error message
if(mysqli_query($conn, $sql)){
    header("location: CusSummary.php?id=" . $cusID);
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>