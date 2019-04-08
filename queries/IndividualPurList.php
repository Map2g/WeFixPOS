<?php

include 'config.php';

$purchaseSql = "SELECT 
                    PUR_ID,
                    PUR_DATE, 
                    EMP_FNAME,
                    EMP_LNAME
                FROM PURCHASE JOIN EMPLOYEE ON PURCHASE.EMP_ID = EMPLOYEE.EMP_ID
                WHERE PURCHASE.CUS_ID = '$customerID'
                ORDER BY PUR_DATE";
                
// $AllPur = "SELECT * FROM PURCHASE_INVOICE";
// $AllPurchaseResult = mysqli_query($conn, $AllCustomer);

            
$purchaseDetails = mysqli_query($conn, $purchaseSql);

//Error checking
if ($purchaseDetails == false){
  printf("Connection error: %s\nQuery error: %s\n", mysqli_error($conn), $purchaseSql); 
}

//$PurTotPrice = 0.00; //calculate from prod_price, prod_quantity
//SELECT SUM(PROD_PRICE) FROM PURCHASE_INVOICE WHERE PUR_ID = 7;

// $AllPurResult = mysql_query("SELECT SUM(PROD_PRICE) AS 'value_sum' FROM PURCHASE_INVOICE"); 
// $row = mysql_fetch_assoc($AllPurResult); 
// $PurSum = $row['value_sum'];


$prodList = "Placeholder"; //placeholder. Need a method to put all product names into a list in a string.


//displaying purchase details
$CountP = 1;

if (mysqli_num_rows($purchaseDetails) > 0) {
    //$rowQ = mysqli_fetch_assoc($AllPurchaseResult);
    $rowP = mysqli_fetch_assoc($purchaseDetails);
    while($rowP) {
        $PurTotPrice = 0.00;
        $itemList = "";
        
        $priceSql = "SELECT  
                    PROD_NAME,
                    PURCHASE_INVOICE.PROD_PRICE,
                    PURCHASE_INVOICE.PROD_QUANTITY
                FROM PURCHASE_INVOICE JOIN PRODUCT ON PURCHASE_INVOICE.PROD_ID = PRODUCT.PROD_ID
                WHERE PUR_ID = '" . $rowP["PUR_ID"] . "'";
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
        
        echo '
                    <tr>
                        <th scope="row">' . $CountP . '</th>
                        <td>' . $rowP["PUR_DATE"] . '</td>
                        <td>' . $rowP["EMP_FNAME"] . ' ' . $rowP["EMP_LNAME"] . '</td>
                        <td>' . $itemList . '</td>
                        <td>$' . $PurTotPrice . '</td>
                        <td>
                            <a href="ViewPurSum.php?id=' . $rowQ["PUR_ID"] . '" style="text-decoration:none">
                              <span class="glyphicon">&#x270f;</span>
                            </a>
                        </td>
                    </tr>';
        $CountP = $CountP + 1;
        $rowP = mysqli_fetch_assoc($purchaseDetails);
    }
} else {
    echo '<tr> No existing purchases to display.</tr>';
}
mysqli_close($conn);

?>