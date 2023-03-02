<?php include './include/header.html'; 
include './include/connection.php';?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Payment Details</h4>
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="myTable">
                      <thead>
                        <tr>
                          <th style="width: 85.613px;">
                            Payment id
                          </th>
                          <th>
                            Payment Mode
                          </th>
                          <th>
                          Date    
                          </th>
                          <th>Payment Status</th>
                        </tr>
                      </thead>
 <?php
    $sql = "SELECT payment_id, payment_mode,created_on, payment_status FROM tbl_payment;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
   

    if($resultCheck!=0)
    {
        while(($total=mysqli_fetch_assoc($result)))
        {
            echo "
            <tr>
            <td>".$total['payment_id']."</td>
            <td>".$total['payment_mode']."</td>
            <td>".$total['created_on']."</td>
            
            ";
            ?>
            
            <?php
            if($total['payment_status']=='Rejected'){
              ?>
            <td><label for="" class="badge badge-danger">Rejected</label></td>
            <?php
            }
            elseif($total['payment_status']=='success'){?>
              <td><label for="" class="badge badge-success">Successful</label></td>
            <?php }
            else{
              ?>
            <td><label for="" class="badge badge-warning">Pending</label></td>
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