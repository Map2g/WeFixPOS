<?php
//=========================================================================================
//      Adds a product record to the PRODUCT table
//
//      Called from AddProd.html
//      Calls nothing
//=========================================================================================


include 'config.php'; // config.php connects to the database
//*************************************************************************************************************************************

//creates the variables and stores the user input to that variable
$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
    //mysql_real_escape_string is a php function that escapes all special characters so they can be inserted.
$price = $_POST['price'];
$stock = $_POST['stock'];
$retail = $_POST['retail'];

//stores what type of submit button was clicked to determine where to redirect
$type = $_POST['submit'];

//*************************************************************************************************************************************

// inserts the variables into the columns of the table
$sql = "INSERT INTO PRODUCT (PROD_PRICE, PROD_NAME, PROD_RETAIL, PROD_STOCK) VALUES ('$price', '$name', '$retail', '$stock')";

//*************************************************************************************************************************************

//if the query is successful, redirects to inventory page or addprod page. If not, displays query and error message
if(mysqli_query($conn, $sql)){
    if ($type == "Save and exit"){
        header("location: Inventory.php");
    } else
        header("location: AddProd.html");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>