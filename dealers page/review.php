<?php include './include/header.html';
include './include/connection.php'; ?>
      <!-- partial --><style>
       table {border-collapse:collapse; table-layout:fixed; width:310px;}
   table td {border:solid 1px #fab; width:100px; word-wrap:break-word; overflow: hidden;}
      </style>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Review Details</h4>
                  
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
                          <th>Status</th>
                        </tr>
                      </thead>
                      <?php
    $sql = "SELECT review_id, review_details,review_date, ratings, status FROM tbl_reviews;";
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
            <td><a href="update_review.php?id=<?php echo $total['review_id']; ?>"><i class="mdi mdi-border-color"></i></a>
            <a href="review-enable.php?id=<?php echo $total['review_id']; ?>"><i class="mdi mdi-crosshairs-gps"></i></a>
            <!--  -->
            <a href="review-disable.php?id=<?php echo $total['review_id']; ?>"><i class="mdi mdi-delete"></i></a></td>
            
            <?php
            echo "<td>".$total['ratings']."</td>";
            echo "<td>".$total['status']."</td>";
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
