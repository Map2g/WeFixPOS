<?php

include 'config.php'; // config.php connects to the database
//*************************************************************************************************************************************

//creates the variables and stores the user input to that variable
$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
$price = $_POST['price'];
$stock = $_POST['stock'];
$retail = $_POST['retail'];
$type = $_POST['submit'];

//*************************************************************************************************************************************

// inserts the variables into the columns of the table
$sql = "INSERT INTO PRODUCT (PROD_PRICE, PROD_NAME, PROD_RETAIL, PROD_STOCK) VALUES ('$price', '$name', '$retail', '$stock')";

//*************************************************************************************************************************************

if(mysqli_query($conn, $sql)){
    if ($type == "Save and exit"){
        header("location: Inventory.php");
    } else
        header("location: AddProd.html");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>