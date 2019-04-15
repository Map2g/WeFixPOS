<?php 
session_start();  //no longer used
include 'top.php'; //navbar
?>
<!DOCTYPE html>

  <div class="container">
        
        <div class="row align-items-center">
          <div class="col-4">
              <h1 class="my-4">
                  Purchases: 
              </h1>
          </div> 
            
            <!--Search bar, implemented as form calling PurList-->
            <div class="col-5">
              <form action = "Purchase.php" method = "post">
                <input type="search" name="purSearch" placeholder="Search"><input type = "submit" value = "Search">
              </form>
            </div>
            
            <div class="col-3">
                <a href = "AddPurchaseForm.php"><button type="button">&plus; Purchase</button></a>
            </div>
            
        </div>
       
      <div class="row align-items-center">
        <!--<div class="col-lg-9">-->
          
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Date</th>
                  <th scope="col">Customer</th>
                  <th scope="col">Employee</th>
                  <th scope="col">Item List</th>
                  <th scope="col">Total Price</th>
                  <th scope="col">Void</th>
                  <!--column holding delete option-->
                </tr>
              </thead>
              <tbody>
                  
                  
                <?php $all = true; include 'PurList.php'; ?>
           
            
            </tbody>
          </table>
  
        <!--</div> -->
        <!--/col-lg-9-->
      </div>
      <!--/row-->
  
  </div>
  <!--/.container-->
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
