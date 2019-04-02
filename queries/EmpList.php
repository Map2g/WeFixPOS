<?php

include 'config.php';

$AllEmployee = "SELECT * FROM EMPLOYEE";
$AllEmpResult = mysqli_query($conn, $AllEmployee);

//Error message if query doesn't work
if ($AllEmpResult == false ) {
  printf("Query error: %s\n", mysqli_error($conn));
}

$Count = 1;

if (mysqli_num_rows($AllEmpResult) > 0) {
    $row = mysqli_fetch_assoc($AllEmpResult);
    while($row) {
        echo '  <tr>
                  <th scope="row">' . $Count . '</th>
                  <td>' . $row["EMP_FNAME"] . '</td>
                  <td>' . $row["EMP_LNAME"] . '</td>
                  <td>' . $row["EMP_EMAIL"] . '</td>
                  <td>' . $row["EMP_PHONE"] . '</td>
                  <td>        
                      <a href="#" style="text-decoration:none">
                          <span class="glyphicon">&#x270f;</span>
                      </a>
                  </td>
                </tr>';
        $Count = $Count + 1;
        $row = mysqli_fetch_assoc($AllEmpResult);
    }
} else {
    echo "<tr> No employees to display.</tr>";
}
mysqli_close($conn);

?>