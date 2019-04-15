<?php
//=========================================================================================
//      Generates list of products in the PRODUCT table
//
//      Called from AddPurchaseForm.php, AddRepPartsForm.php, Inventory.php
//      Calls EditProd.php
//=========================================================================================

include 'config.php';       //establish database connection

$AllProduct = "SELECT * FROM PRODUCT ORDER BY PROD_NAME ASC";
$AllProdResult = mysqli_query($conn, $AllProduct);

//Error message if query doesn't work or there is a connection error
if ($AllProdResult == false ) {
  printf("Query error: %s\n", mysqli_error($conn));
}


//For search query. This file is called as a form action with search as the only input.
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //This executes only if the file is called as a form.
    
    $search = $_POST['prodSearch'];     //The user's search input
    
    $pSearch = "SELECT * FROM PRODUCT WHERE (PROD_NAME LIKE '%" . $search . "%')";
    $pSResult = mysqli_query($conn, $pSearch);

    if ($pSResult == false ) {
        printf("Query error: %s\n", mysqli_error($conn));
    }

//determines which resulting table will be displayed as the customer list
    $thisQuery = $pSResult;
} else {
    $thisQuery = $AllProdResult;
}

//dropdown = true when ProdList is called from AddPurchase and AddRepRarts forms
if ($dropdown != true){
    $Count = 1;     //simply numbers the rows in the produced table
    
    if (mysqli_num_rows($thisQuery) > 0) {
        $row = mysqli_fetch_assoc($thisQuery);
        while($row) {
            //first line of echo makes whole row red if stock is 0
            echo '  <tr '; if($row["PROD_STOCK"] == 0){echo 'style="color:red"';} echo '>
                      <th scope="row">' . $Count . '</th>
                      <td>' . $row["PROD_NAME"] . '</td>
                      <td>$' . $row["PROD_PRICE"] . '</td>
                      <td>$' . $row["PROD_RETAIL"] . '</td>
                      <td>' . $row["PROD_STOCK"] . '</td>
                      <td>        
                          <a href="EditProd.php?id=' . $row["PROD_ID"] . '" style="text-decoration:none">
                              <span class="glyphicon">&#x270f;</span>
                          </a>
                      </td>
                    </tr>';
            $Count = $Count + 1;
            $row = mysqli_fetch_assoc($thisQuery);
        }
    } else {
        echo "<tr> No products to display.</tr>";
    }

//DROPDOWN USED IN FORMS
} else {
    $row = mysqli_fetch_assoc($thisQuery);          //thisQuery will always be $AllCusResult in this case
    while($row){
        if ($row["PROD_STOCK"] != 0){   //Item will not display as purchasable (in form dropdown list) when the stock is 0.
            echo '<option value="'. $row["PROD_ID"] .'">' . $row["PROD_NAME"] . '</option>';
        }
        $row = mysqli_fetch_assoc($thisQuery);
    }
}

mysqli_close($conn);

?>