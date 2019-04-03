<!DOCTYPE html>
<html lang="en">

<?php

include 'config.php';

if(isset($_GET['id'])){
  $productID = $_GET['id'];
} else {
  echo "Could not get ID";
}

$sql = "SELECT * FROM PRODUCT WHERE PROD_ID = '" . $productID . "'";
$prodDetails = mysqli_query($conn, $sql);

if ($prodDetails == false ) {
  printf("Query error: %s\n%s", mysqli_error($conn), $sql);
}

// if (mysqli_num_rows($empDetails) == 1){
//     printf("Yay!");
// } else {
//     printf("%s\n%s", $sql, $_GET["id"]);
// }

$row = mysqli_fetch_assoc($prodDetails);

$name = mysql_real_escape_string(htmlspecialchars($row["PROD_NAME"]));
$price = $row["PROD_PRICE"];
$retail = $row["PROD_RETAIL"];
$stock = $row["PROD_STOCK"];

?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Inventory Item</title>

  <!-- Custom fonts for this template-->
  <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->

  <!-- Custom styles for this template-->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body class="bg-light">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit an item in inventory</div>
      <div class="card-body">
        <form action = "UpdateProd.php" method = "post">
            
        <input type="hidden" name="id" value="<?php echo $productID; ?>">
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  Product name: <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required="required">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  Number in stock: <input type="number" name="stock" class="form-control" value="<?php echo $stock; ?>" required="required">
                  <!--<input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">-->
                  <!--<label for="lastName">Last name</label>-->
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  Price: <input type="number" name="price" value="<?php echo $price; ?>" min="0" step="any" class="form-control" required="required">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  Retail price: <input type="number" name="retail" class="form-control" required="required" value="<?php echo $retail; ?>" min="0" step="any">
                  <!--<input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">-->
                  <!--<label for="lastName">Last name</label>-->
                </div>
              </div>
            </div>
          </div>
          
          <a href = "Inventory.php"><button type="button">Cancel</button></a>
          <input type = "submit" value = "Submit">
          <!--<a class="btn btn-primary btn-block" href="login.html">Register</a>-->
        </form>
        
        <form action = "DeleteProd.php" method = "post">
            <input type="hidden" name="id" value="<?php echo $productID; ?>">
            <br>
            <center><input type = "submit" value = "Delete"></center>
        </form>
        <!--<div class="text-center">-->
        <!--  <a class="d-block small mt-3" href="login.html">Login Page</a>-->
        <!--  <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
        <!--</div>-->
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</form>
</body>

</html>