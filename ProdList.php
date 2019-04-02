<?php

include 'config.php';

$AllProduct = "SELECT * FROM PRODUCT ORDER BY PROD_NAME ASC";
$AllProdResult = mysqli_query($conn, $AllProduct);

//Error message if query doesn't work
if ($AllProdResult == false ) {
  printf("Query error: %s\n", mysqli_error($conn));
}


//For search query
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $search = $_POST['prodSearch'];
    
    $pSearch = "SELECT * FROM PRODUCT WHERE (PROD_NAME LIKE '%" . $search . "%')";
    $pSResult = mysqli_query($conn, $pSearch);

    if ($pSResult == false ) {
        printf("Query error: %s\n", mysqli_error($conn));
    }

    $thisQuery = $pSResult;
} else {
    $thisQuery = $AllProdResult;
}



$Count = 1;

if (mysqli_num_rows($thisQuery) > 0) {
    $row = mysqli_fetch_assoc($thisQuery);
    while($row) {
        echo '  <tr>
                  <th scope="row">' . $Count . '</th>
                  <td>' . $row["PROD_NAME"] . '</td>
                  <td>' . $row["PROD_DESC"] . '</td>
                  <td>$' . $row["PROD_PRICE"] . '</td>
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
mysqli_close($conn);

?>