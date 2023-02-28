<?php include './include/header.html'; 
include './include/connection.php';

  ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Products Details</h4>
                  <div>
                    <a href="add_product.php">
                    <button class="btn-primary">Add New Product</button>
                  </a>
                  </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="myTable">
                      <thead>
                        <tr>
                          <th>
                            Product id
                          </th>
                          <th>
                            Product name
                          </th>
                          <th>
                            Created By
                          </th>
                          <th>
                            Product Type
                          </th>
                          
                          <th>
                            Price   
                          </th>
                          <th>
                            Quantity
                          </th>
                          <th style="width: 70px;">
                            Action
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Product Status
                          </th>
                        </tr>
                      </thead>
                      <?php
    $sql = "SELECT product_id, product_name,username, product_type, price, quantity, p_status FROM tbl_product, tbl_dealer WHERE tbl_dealer.d_id = tbl_product.d_id;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
   

    if($resultCheck!=0)
    {
        while(($total=mysqli_fetch_assoc($result)))
        {
            echo "
            <tr>
            <td>".$total['product_id']."</td>
            <td>".$total['product_name']."</td>
            <td>".$total['username']."</td>
            <td>".$total['product_type']."</td>
            <td>".$total['price']."</td>
            <td>".$total['quantity']."</td>";
            ?>
            <td><a href="update_product.php"><i class="mdi mdi-border-color"></i></a>
            <a href="product-enable.php?id=<?php echo $total['product_id']; ?>"><i class="mdi mdi-crosshairs-gps"></i></a>
            <!--  -->
            <a href="product-disable.php?id=<?php echo $total['product_id']; ?>"><i class="mdi mdi-delete"></i></a></td>
            

            <?php
            if($total['quantity']==0){
              ?>
            <td><label for="" class="badge badge-danger">Unavailable</label></td>
            <?php
            }
            else{
              ?>
            <td><label for="" class="badge badge-success">Available</label></td>
            <?php
            }
            ?>
            <?php
            echo"<td>".$total['p_status']."</td>";
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
        
    
            
        <?php include './include/footer.html'; ?>