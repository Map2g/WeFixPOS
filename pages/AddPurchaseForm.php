<?php 

//include 'config.php';
session_start();    //no longer used

//Get purchase ID to determine which buttons need to be disabled and send the purID to AddParts.php
if(isset($_GET['pid'])){
  $purchaseID = $_GET['pid'];
} else {
  //echo "Could not get purID";
}

$purchase = true;     //this is a purchase

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>New Purchase</title>

  <!-- Custom fonts for this template-->
  <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->

  <!-- Custom styles for this template-->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body class="bg-light">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">New Purchase</div>
      <div class="card-body">
        
        <form action = "AddPurchase.php" method = "post">
          <!--Sends info to create record in PURCHASE table-->
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                Customer: 
                <select name="cusID" class="form-control" required="required" <?php if(isset($_GET['pid'])){ echo "readonly"; } ?>>
                  <?php $dropdown = true; include 'CusList.php'; ?>
                </select>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  Employee:
                  <select name="EmpID" class="form-control" required="required" <?php if(isset($_GET['pid'])){ echo "readonly"; } ?>>
                    <?php $dropdown = true; include 'EmpList.php'; ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          
            <input type = "submit" value = "Submit" <?php if(isset($_GET['pid'])){ echo "disabled"; } ?> >
          </form>
          
          <br>
          
          <form action = "AddParts.php" method = "post">
            <!--Sends info to create corresponding record in PURCHASE_INVOICE table-->
            
            <input type="hidden" name="purchase" value="true">
            <input type="hidden" name="purID" value="<?php echo $purchaseID; ?>" >
            
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-8">
                Part: 
                <select name="prodID" class="form-control">
                  <?php $dropdown = true; include 'ProdList.php'; ?>
                </select>
              </div>
              <div class="col-md-2">
                <div class="form-label-group">
                  Quantity: <input type="number" name="pQuantity" class="form-control form-control-lg" min="0" placeholder="0" required="required">
                  <!--<input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">-->
                  <!--<label for="lastName">Last name</label>-->
                </div>
              </div>
            </div>
          </div>
          
          <input type = "submit" value = "Add item" <?php if(!isset($_GET['pid'])){ echo "disabled"; } ?>>
          </form>
          
          <br>
          
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
                                <?php $purchase = true; include 'PartList.php'; ?>
                              </tbody>
                            </table>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <center><a href = "Purchase.php"><button type="button">Finish</button></a></center>
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