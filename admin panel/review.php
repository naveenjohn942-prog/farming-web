<?php include './include/header.html';
include './include/connection.php'; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Order Details</h4>
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="myTable">
                      <thead>
                        <tr>
                          <th>
                            Review id
                          </th>
                          <th>
                            Review Details
                          </th>
                          
                          <th>
                            Date    
                          </th>
                          <th style="width: 150px;">
                            Action
                          </th>
                          <th>Ratings</th>
                        </tr>
                      </thead>
                      <?php
    $sql = "SELECT review_id, review_details,review_date, ratings FROM tbl_reviews;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
   

    if($resultCheck!=0)
    {
        while(($total=mysqli_fetch_assoc($result)))
        {
            echo "
            <tr>
            <td>".$total['review_id']."</td>
            <td>".$total['review_details']."</td>
            <td>".$total['review_date']."</td>
            
            ";
            ?>
            <td><a href="update_review.php"><i class="mdi mdi-border-color"></i></a>
            <a href="#"><i class="mdi mdi-crosshairs-gps"></i></a>
            <!--  -->
            <a href="#" id="deactivate"><i class="mdi mdi-delete" onclick="deactivate()"></i></a></td>
            <script>
            function deactivate(){document.getElementById("deactivate").blur();}</script>

            <?php
            echo "<td>".$total['ratings']."</td>";
         
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
