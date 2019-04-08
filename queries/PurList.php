<?php

include 'config.php';
// ORDER BY CUS_ID ASC"
$AllPurchase = "SELECT 
                    PUR_ID,
                    PUR_DATE, 
                    EMP_FNAME,
                    EMP_LNAME,
                    CUS_FNAME,
                    CUS_LNAME
                FROM PURCHASE JOIN EMPLOYEE ON PURCHASE.EMP_ID = EMPLOYEE.EMP_ID
                    JOIN CUSTOMER ON PURCHASE.CUS_ID = CUSTOMER.CUS_ID";
$AllPurResult = mysqli_query($conn, $AllPurchase);

//Error message if query doesn't work
if ($AllPurResult == false ) {
  printf("Query error: %s\n", mysqli_error($conn));
}

$Count = 1;

if (mysqli_num_rows($AllPurResult) > 0) {
    $row = mysqli_fetch_assoc($AllPurResult);
    while($row) {
        
//-----------Get the purchase's total price------------------------------

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
            $itemList = $itemList . $rowPrice["PROD_NAME"] . " x" . $rowPrice["PROD_QUANTITY"] . ", ";
            $PurTotPrice = $PurTotPrice + ($rowPrice["PROD_PRICE"] * $rowPrice["PROD_QUANTITY"]);
            $rowPrice = mysqli_fetch_assoc($priceResult);
        }
        
//==================================================================================================
        
        echo '  <tr>
                  <th scope="row">' . $Count . '</th>
                  <td>' . $row["PUR_DATE"] . '</td>
                  <td>' . $row["CUS_FNAME"] . ' ' . $row["CUS_LNAME"] . '</td>
                  <td>' . $row["EMP_FNAME"] . ' ' . $row["EMP_LNAME"] .'</td>
                  <td>' . $itemList . '</td>
                  <td>$' . $PurTotPrice . '</td>
                  <td>        
                      <a href="#" style="text-decoration:none">
                          <span class="glyphicon">&#x270f;</span>
                      </a>
                  </td>
                </tr>';
        $Count = $Count + 1;
        $row = mysqli_fetch_assoc($AllPurResult);
    }
} else {
    echo "<tr> No customers to display.</tr>";
}
mysqli_close($conn);

?>