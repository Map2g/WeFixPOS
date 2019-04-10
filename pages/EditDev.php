<?php

include 'config.php';

if(isset($_GET['id'])){
  $deviceID = $_GET['id'];
} else {
  echo "Could not get ID";
}

$sql = "SELECT * FROM DEVICE WHERE DEV_ID = '". $deviceID ."'";
$devDetails = mysqli_query($conn, $sql);

if ($devDetails == false ) {
  printf("Query error: %s\n%s", mysqli_error($conn), $sql);
}

$row = mysqli_fetch_assoc($devDetails);

$model = $row["DEV_MODEL"];
$phone = $row["DEV_PHONE"];
$owner = $row["CUS_ID"];

?>

<!DOCTYPE html>
<html lang="en">
  
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Device</title>

  <!-- Custom fonts for this template-->
  <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->

  <!-- Custom styles for this template-->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body class="bg-light">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit device</div>
      <div class="card-body">
        <form action = "UpdateDev.php" method = "post">
          
           <input type="hidden" name="id" value=" <?php echo $_GET['id']; ?> ">
           
           <input type="hidden" name="cusID" value=" <?php echo $owner; ?> ">
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  Model: <input type="text" name="model" class="form-control" value="<?php echo $model; ?>" required="required">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  Phone Number: <input type="tel" name="phone" class="form-control" value="<?php echo substr($phone, 0, 3) .'-'. substr($phone, 3, 3) .'-'. substr($phone, 6, 4); ?>" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required">
                  <!--<input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">-->
                  <!--<label for="lastName">Last name</label>-->
                </div>
              </div>
            </div>
          </div>
          
          <a href = "CusSummary.php?id=<?php echo $owner ?>"><button type="button">Cancel</button></a>
          <input type = "submit" value = "Submit">
          <!--<a class="btn btn-primary btn-block" href="login.html">Register</a>-->
        </form>
        
        <!--<form action = "DeleteDev.php" method = "post">-->
        <!--    <input type="hidden" name="id" value="">-->
        <!--    <br>-->
        <!--    <center><input type = "submit" value = "Delete"></center>-->
        <!--</form>-->

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