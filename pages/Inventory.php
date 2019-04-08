<?php include 'top.php'; session_start();?>
<!DOCTYPE html>
<html lang="en">
  
  <div class="container">
        
        <div class="row align-items-center">
          <div class="col-4">
              <h1 class="my-4">
                  Inventory: 
              </h1>
          </div> 
            
            <div class="col-5">
              <form action = "Inventory.php" method = "post">
                <input type="search" name="prodSearch" placeholder="Search"><input type = "submit" value = "Search">
              </form>
            </div>
            
            <div class="col-3">
                <a href = "AddProd.html"><button type="button">&plus; Product</button></a>
            </div>
            
        </div>
       
      <div class="row align-items-center">
        <!--<div class="col-lg-9">-->
          
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Retail Price</th>
                  <th scope="col">Stock</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                  
                <?php include 'ProdList.php'; ?>
           
            </tbody>
          </table>
  
        <!--</div> -->
        <!--/col-lg-9-->
      </div>
      <!--/row-->
  
  </div>
  <!--/.container-->
  
  <!-- Footer -->
  <footer class="py-5 bg-dark sticky">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; WeFix 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
