<?php include './include/header.html'; 
include './include/connection.php';?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Naveen John</h3>
                  
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Ahemdabad</h4>
                        <h6 class="font-weight-normal">India</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Today’s Orders</p>
                      <p class="fs-30 mb-2">4</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Orders</p>
                      <p class="fs-30 mb-2">10</p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                
                
              </div>
            </div>
          </div>
          
          <div class="row">
            
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Top Products</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Date</th>
                          
                        </tr>  
                      </thead>
                      <?php
    $sql = "SELECT * FROM tbl_product;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
   

    if($resultCheck!=0)
    {
        while(($total=mysqli_fetch_assoc($result)))
        {
            echo "
            <tr>
            
            <td>".$total['product_name']."</td>
            
            <td>".$total['price']."</td>
            <td>".$total['p_description']."</td>
            
            
            </tr>";
            
            
        }

      }
?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          
          
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <?php include './include/footer.html'; ?>

