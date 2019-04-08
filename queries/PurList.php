<?php

include 'config.php';
     
//List an individual's purchases                    
$purchaseSql = "SELECT 
                    PUR_ID,
                    PUR_DATE, 
                    EMP_FNAME,
                    EMP_LNAME
                FROM PURCHASE JOIN EMPLOYEE ON PURCHASE.EMP_ID = EMPLOYEE.EMP_ID
                WHERE PURCHASE.CUS_ID = '$customerID'
                ORDER BY PUR_DATE DESC";
                
$purchaseDetails = mysqli_query($conn, $purchaseSql);
                
//List all purchases.
$purchaseSqlAll = "SELECT 
                    PUR_ID,
                    PUR_DATE, 
                    EMP_FNAME,
                    EMP_LNAME,
                    CUS_FNAME,
                    CUS_LNAME
                FROM PURCHASE JOIN EMPLOYEE ON PURCHASE.EMP_ID = EMPLOYEE.EMP_ID
                    JOIN CUSTOMER ON PURCHASE.CUS_ID = CUSTOMER.CUS_ID
                    ORDER BY PUR_DATE DESC";
                    
$purchaseDetailsAll = mysqli_query($conn, $purchaseSqlAll);

//Error message if query doesn't work
if ($purchaseDetailsAll == false || $purchaseDetails == false) {
  printf("Query error: %s\n", mysqli_error($conn));
}


//For search query. Search option only available for full purchase list.
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $search = $_POST['purSearch'];
    
    $pSearch = "SELECT 
                    PUR_ID,
                    PUR_DATE, 
                    EMP_FNAME,
                    EMP_LNAME,
                    CUS_FNAME,
                    CUS_LNAME
                FROM PURCHASE JOIN EMPLOYEE ON PURCHASE.EMP_ID = EMPLOYEE.EMP_ID
                    JOIN CUSTOMER ON PURCHASE.CUS_ID = CUSTOMER.CUS_ID
                    WHERE (CUS_FNAME LIKE '%" . $search . "%') OR (CUS_LNAME LIKE '%" . $search . "%')
                        OR (EMP_FNAME LIKE '%" . $search . "%') OR (EMP_LNAME LIKE '%" . $search . "%')
                        OR (PUR_DATE LIKE '%" . $search . "%')
                    ORDER BY PUR_DATE DESC";
    $pSResult = mysqli_query($conn, $pSearch);

    if ($pSResult == false ) {
        printf("Query error: %s\n", mysqli_error($conn));
    }

    $thisQuery = $pSResult;
    
} else if ($all == true){
    $thisQuery = $purchaseDetailsAll;
} else {
    $thisQuery = $purchaseDetails;
}

$Count = 1;

if (mysqli_num_rows($thisQuery) > 0) {
    $row = mysqli_fetch_assoc($thisQuery);
    while($row) {
        
//-----------Get the purchase's total price and list of items bought------------------------------

        $PurTotPrice = 0.00;
        $itemList = "";
        
        $priceSql = "SELECT
                    PROD_NAME,
                    PURCHASE_INVOICE.PROD_PRICE,
                    PURCHASE_INVOICE.PROD_QUANTITY
                FROM PURCHASE_INVOICE JOIN PRODUCT ON PURCHASE_INVOICE.PROD_ID = PRODUCT.PROD_ID
                WHERE PUR_ID = '" . $row["PUR_ID"] . "'";
        $priceResult = mysqli_query($conn, $priceSql);
        
        if ($priceResult == false){
            printf("Connection error: %s\nQuery error: %s\n", mysqli_error($conn), $priceSql); 
        }
        
        $rowPrice = mysqli_fetch_assoc($priceResult);
        
        while($rowPrice){
            $itemList = $itemList . $rowPrice["PROD_NAME"] . " x" . $rowPrice["PROD_QUANTITY"] . "<br>";
            $PurTotPrice = $PurTotPrice + ($rowPrice["PROD_PRICE"] * $rowPrice["PROD_QUANTITY"]);
            $rowPrice = mysqli_fetch_assoc($priceResult);
        }
        
//==================================================================================================
        
        if ($all == true){
                echo '  <tr>
                  <th scope="row">' . $Count . '</th>
                  <td>' . $row["PUR_DATE"] . '</td>
                  <td>' . $row["CUS_FNAME"] . ' ' . $row["CUS_LNAME"] . '</td>
                  <td>' . $row["EMP_FNAME"] . ' ' . $row["EMP_LNAME"] .'</td>
                  <td>' . $itemList . '</td>
                  <td>$' . $PurTotPrice . '</td>
                  <td>
                          <a href="DeletePur.php?id=' . $row["PUR_ID"] . '" style="text-decoration:none">
                              <span class="glyphicon">&#x274C;</span>
                          </a>
                      </td>
                </tr>';
        }else {
                 echo '
                    <tr>
                        <th scope="row">' . $Count . '</th>
                        <td>' . $row["PUR_DATE"] . '</td>
                        <td>' . $row["EMP_FNAME"] . ' ' . $row["EMP_LNAME"] . '</td>
                        <td>' . $itemList . '</td>
                        <td>$' . $PurTotPrice . '</td>
                        <td>
                          <a href="DeletePur.php?id=' . $row["PUR_ID"] . '" style="text-decoration:none">
                              <span class="glyphicon">&#x274C;</span>
                          </a>
                      </td>
                    </tr>';
        }
        $Count = $Count + 1;
        $row = mysqli_fetch_assoc($thisQuery);
    }
} else {
    echo "<tr> No purchases to display.</tr>";
}

mysqli_close($conn);

?>