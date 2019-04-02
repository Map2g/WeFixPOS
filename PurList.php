<?php

include 'config.php';
// ORDER BY CUS_ID ASC"
$AllPurchase = "SELECT * FROM PURCHASE";
$AllPurResult = mysqli_query($conn, $AllPurchase);

//Error message if query doesn't work
if ($AllPurResult == false ) {
  printf("Query error: %s\n", mysqli_error($conn));
}

$Count = 1;

if (mysqli_num_rows($AllPurResult) > 0) {
    $row = mysqli_fetch_assoc($AllPurResult);
    while($row) {
        echo '  <tr>
                  <th scope="row">' . $Count . '</th>
                  <td>' . $row["PUR_DATE"] . '</td>
                  <td>' . $row["CUS_ID"] . '</td>
                  <td>' . $row["EMP_ID"] . '</td>
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