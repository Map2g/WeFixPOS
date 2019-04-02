<?php

include 'config.php';
//*******************************************************************************************************************

//This must be included within <ul class="list-group"></ul> tags to display properly

$search = $_POST['prodSearch'];

$pSearch = "SELECT * FROM PRODUCT WHERE (PROD_NAME LIKE '%prodSearch%')";
$pSResult = mysqli_query($conn, $pSearch);

if ($pSResult == false ) {
  printf("Query error: %s\n", mysqli_error($conn));
}

$Count = 1;

if (mysqli_num_rows($pSResult) > 0) {
    $row = mysqli_fetch_assoc($pSResult);
    while($row) {
        echo '<li class="list-group-item">' . $row["PROD_NAME"] . '</li>';
        $pID[$Count] = $row["PROD_ID"];
        $Count = $Count + 1;
        $row = mysqli_fetch_assoc($pSResult);
    }
} else {
    echo '<li class="list-group-item">
             No products match your search.
          </li>';
}

mysqli_close($conn);

?>