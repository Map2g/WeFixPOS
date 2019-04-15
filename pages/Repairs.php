<?php 
session_start(); //no longer used
include 'top.php'; //navbar
?>
<!DOCTYPE html>

  <div class="container">
        
        <div class="row align-items-center">
          <div class="col-4">
              <h1 class="my-4">
                  Repairs: 
              </h1>
          </div>
            
            <!--Search bar, implemented as form calling RepList-->
            <div class="col-5">
              <form action = "Repairs.php" method = "post">
                <input type="search" name="repSearch" placeholder="Search"><input type = "submit" value = "Search">
              </form>
            </div>
            
            <div class="col-3">
                <a href = "AddRepairFormGeneral.php"><button type="button">&plus; Repair</button></a>
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
                      <th scope="col">Locker No.</th>
                      <th scope="col">Description</th>
                      <th scope="col">Price</th>
                      <th scope="col">Void</th>
                      <!--Column holding option to delete repair -->
                    </tr>
                </thead>
                <tbody>
                    <?php $all = true; include 'RepList.php'; ?>
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