<?php 
session_start(); //no longer used
include 'top.php'; //navbar
?>
<!DOCTYPE html>
  
  <div class="container">
        
        <div class="row align-items-center">
          <div class="col-4">
              <h1 class="my-4">
                  Customers: 
              </h1>
          </div> 
            
            <!--Search bar, implemented as form calling CusList-->
            <div class="col-5">
              <form action = "Customers.php" method = "post">
                <input type="search" name="cusSearch" placeholder="Search"><input type = "submit" value = "Search">
              </form>
            </div>
            
            <div class="col-3">
                <a href = "AddCus.html"><button type="button">&plus; Customer</button></a>
            </div>
            
        </div>
       
      <div class="row align-items-center">
        <!--<div class="col-lg-9">-->
          
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                  
                  
                <?php include 'CusList.php'; ?>
           
            
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
