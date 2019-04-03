<?php

include 'config.php';

$AllCustomer = "SELECT * FROM CUSTOMER ORDER BY CUS_LNAME ASC";
$AllCusResult = mysqli_query($conn, $AllCustomer);

//Error message if query doesn't work
if ($AllCusResult == false ) {
  printf("Query error: %s\n", mysqli_error($conn));
}


//For search query
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $search = $_POST['cusSearch'];
    
    $cSearch = "SELECT * FROM CUSTOMER WHERE (CUS_FNAME LIKE '%" . $search . "%') OR (CUS_LNAME LIKE '%" . $search . "%')";
    $cSResult = mysqli_query($conn, $cSearch);

    if ($cSResult == false ) {
        printf("Query error: %s\n", mysqli_error($conn));
    }

    $thisQuery = $cSResult;
} else {
    $thisQuery = $AllCusResult;
}


$Count = 1;

if (mysqli_num_rows($thisQuery) > 0) {
    $row = mysqli_fetch_assoc($thisQuery);
    while($row) {
        echo '  <tr>
                  <th scope="row">' . $Count . '</th>
                  <td>
                      <a href="CusSummary.php?id=' . $row["CUS_ID"] . '" style="text-decoration:none">
                      ' . $row["CUS_FNAME"] . '</a>
                  </td>
                  <td>' . $row["CUS_LNAME"] . '</td>
                  <td>' . $row["CUS_EMAIL"] . '</td>
                  <td>' . $row["CUS_PHONE"] . '</td>
                  <td>        
                      <a href="EditCus.php?id=' . $row["CUS_ID"] . '" style="text-decoration:none">
                          <span class="glyphicon">&#x270f;</span>
                      </a>
                  </td>
                </tr>';
        $Count = $Count + 1;
        $row = mysqli_fetch_assoc($thisQuery);
    }
} else {
    echo "<tr> No customers to display.</tr>";
}
mysqli_close($conn);

?>