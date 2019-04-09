<?php 

include 'config.php';
session_start(); 

if(isset($_GET['id'])){
  $repairID = $_GET['id'];
} else {
  echo "Could not get ID";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add parts</title>

  <!-- Custom fonts for this template-->
  <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->

  <!-- Custom styles for this template-->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body class="bg-light">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add parts to repair</div>
      <div class="card-body">
        <form action = "AddParts.php" method = "post">
        
        <input type="hidden" name="repID" value="<?php echo $repairID; ?>" >
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-8">
                Part: 
                <select name="prodID" class="form-control"> 
                  <?php $dropdown = true; include 'ProdList.php'; ?>
                </select>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  Quantity: <input type="number" name="pQuantity" class="form-control form-control-lg" min="0" placeholder="0" required="required">
                  <!--<input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">-->
                  <!--<label for="lastName">Last name</label>-->
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-group">
                  Item List:
                            <table class="table">
                              <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    
                                </tr>
                              </thead>
                              <tbody>
                                <?php $purchase = false; include 'PartList.php'; ?>
                              </tbody>
                            </table>
                             
                </div>
              </div>
            </div>
          </div>
          
          <hr>
          
          <a href = "Repairs.php"><button type="button">Exit</button></a>          
          <!--<input type = "submit" value = "Save and continue">-->
          <input type = "submit" value = "Add part">
          <!--<a class="btn btn-primary btn-block" href="login.html">Register</a>-->
        </form>
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