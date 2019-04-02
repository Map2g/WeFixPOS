<?php

include 'config.php';

$AllCustomer = "SELECT * FROM CUSTOMER";
$AllCusResult = mysqli_query($conn, $AllCustomer);

//Error message if query doesn't work
if ($AllCusResult == false ) {
  printf("Query error: %s\n", mysqli_error($conn));
}

$Count = 1;

if (mysqli_num_rows($AllCusResult) > 0) {
    $row = mysqli_fetch_assoc($AllCusResult);
    while($row) {
        echo '  <tr>
                  <th scope="row">' . $Count . '</th>
                  <td>' . $row["CUS_FNAME"] . '</td>
                  <td>' . $row["CUS_LNAME"] . '</td>
                  <td>' . $row["CUS_EMAIL"] . '</td>
                  <td>' . $row["CUS_PHONE"] . '</td>
                  <td>        
                      <a href="#">
                          <span class="glyphicon">&#x270f;</span>
                      </a>
                  </td>
                </tr>';
        $Count = $Count + 1;
        $row = mysqli_fetch_assoc($AllCusResult);
    }
} else {
    echo "<tr> No customers to display.</tr>";
}
mysqli_close($conn);

?>