<?php include './include/header.html'; 
include './include/connection.php';?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Order Details</h4>
                  
                  <div class="table-responsive pt-3">
                  <button type="submit" class="btn btn-primary mr-2" name="submit"><a href="../../Report/order_reportrpt.php" style="
    color: white;
">Report</a></button><br><br>
                    <table class="table table-bordered" id="myTable">
                      <thead>
                        <tr>
                          <th>
                            Order id
                          </th>
                          <th>
                            Product name
                          </th>
                          <th>
                            username
                          </th>
                          
                         <th>
                            Price   
                          </th>
                          <th>
                            Quantity
                          </th>
                          <th>
                            Date    
                          </th>
                          <th style="width: 150px;">
                            Status
                          </th>
                          
                        </tr>
                      </thead>
                      <?php
    $sql = "SELECT order_id, product_name,username, price, quantity, order_date,order_status FROM tbl_orders, tbl_farmer, tbl_product WHERE tbl_farmer.f_id = tbl_orders.f_id AND tbl_product.product_id = tbl_orders.product_id;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
   
  
    if($resultCheck!=0)
    {
        while(($total=mysqli_fetch_assoc($result)))
        {
            echo "
            <tr>
            <td>".$total['order_id']."</td>
            <td>".$total['product_name']."</td>
            <td>".$total['username']."</td>
            
            <td>".$total['price']."</td>
            <td>".$total['quantity']."</td>
            <td>".$total['order_date']."</td>
            ";
            
            ?>
            
            <?php
            if($total['order_status']=='Completed'){
              ?>
            <td><label for="" class="badge badge-success">Completed</label></td>
            <?php
            }
            elseif($total['order_status']=='Pending'){?>
              <td><label for="" class="badge badge-warning">Pending</label></td>
            <?php }
            else{
              ?>
            <td><label for="" class="badge badge-danger">Rejected</label></td>
            <?php
            }
            
            ?>
            <?php
            echo "</tr>";
            
            
        }

    }
    else
    {
        echo "No Records Found";
    }
?>
                    </table>
                    
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php include './include/footer.html'; ?>
