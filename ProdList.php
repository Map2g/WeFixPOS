<?php

include 'config.php';

$AllProduct = "SELECT * FROM PRODUCT";
$AllProdResult = mysqli_query($conn, $AllProduct);

//Error message if query doesn't work
if ($AllProdResult == false ) {
  printf("Query error: %s\n", mysqli_error($conn));
}

$Count = 1;

if (mysqli_num_rows($AllProdResult) > 0) {
    $row = mysqli_fetch_assoc($AllProdResult);
    while($row) {
        echo '  <tr>
                  <th scope="row">' . $Count . '</th>
                  <td>' . $row["PROD_NAME"] . '</td>
                  <td>' . $row["PROD_DESC"] . '</td>
                  <td>' . $row["PROD_PRICE"] . '</td>
                  <td>' . $row["PROD_STOCK"] . '</td>
                  <td>        
                      <a href="#">
                          <span class="glyphicon">&#x270f;</span>
                      </a>
                  </td>
                </tr>';
        $Count = $Count + 1;
        $row = mysqli_fetch_assoc($AllProdResult);
    }
} else {
    echo "<tr> No products to display.</tr>";
}
mysqli_close($conn);

?>