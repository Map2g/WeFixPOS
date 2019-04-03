<?php

include 'config.php';

$AllEmployee = "SELECT * FROM EMPLOYEE ORDER BY EMP_LNAME ASC";
$AllEmpResult = mysqli_query($conn, $AllEmployee);

//Error message if query doesn't work
if ($AllEmpResult == false ) {
  printf("Connection error: %s\nQuery error: %s\n", mysqli_error($conn), $AllEmployee);
}


//For search query
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $search = $_POST['empSearch'];
    
    $eSearch = "SELECT * FROM EMPLOYEE WHERE (EMP_FNAME LIKE '%" . $search . "%') OR (EMP_LNAME LIKE '%" . $search . "%')";
    $eSResult = mysqli_query($conn, $eSearch);

    if ($eSResult == false ) {
        printf("Query error: %s\n", mysqli_error($conn));
    }

    $thisQuery = $eSResult;
} else {
    $thisQuery = $AllEmpResult;
}



$Count = 1;

if (mysqli_num_rows($thisQuery) > 0) {
    $row = mysqli_fetch_assoc($thisQuery);
    while($row) {
        echo '  <tr>
                  <th scope="row">' . $Count . '</th>
                  <td>' . $row["EMP_FNAME"] . '</td>
                  <td>' . $row["EMP_LNAME"] . '</td>
                  <td>' . $row["EMP_EMAIL"] . '</td>
                  <td>' . $row["EMP_PHONE"] . '</td>
                  <td>        
                      <a href="EditEmp.php?id=' . $row["EMP_ID"] . '" style="text-decoration:none">
                          <span class="glyphicon">&#x270f;</span>
                      </a>
                  </td>
                </tr>';
        $Count = $Count + 1;
        $row = mysqli_fetch_assoc($thisQuery);
    }
} else {
    echo "<tr> No employees to display.</tr>";
}
mysqli_close($conn);

?>