<?php include './include/header.html'; 
include './include/connection.php';


if (isset($_POST['active']))
{
  $total=mysqli_fetch_assoc($result);
    $uc_id = $total['c_id'];
    $query = "UPDATE tbl_category SET c_status = 'ACTIVE' WHERE c_id='$uc_id'";
   

    if ($conn->query($query) === TRUE) {
    echo "<script>alert('Done');</script>";
    }
    else{
      echo $aid;
      echo "Error".mysqli_error($conn);
    }
  }
  if (isset($_POST['deactive']))
{
    
    
    $query = "UPDATE tbl_category SET c_status = 'INACTIVE' WHERE c_status = ACTIVE;";
   

    if ($conn->query($query) === TRUE) {
    echo "<script>alert('Done');</script>";
    }
    else{
      echo $aid;
      echo "Error".mysqli_error($conn);
    }
  }  




?>
      <!-- partial -->
      <style>
    i.mdi{
      font-size: 18px !important;
      padding-left: 5% !important;
      cursor:pointer;
    }
  </style>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Category Details</h4>
                  <div>
                    <a href="add_category.php">
                    <button class="btn-primary">Add New Category</button>
                  </a>
                  </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="myTable">
                      <thead>
                        <tr>
                          <th>
                            Category id
                          </th>
                          <th>
                            Category name
                          </th>
                          
                          <th>
                            Action
                          </th>
                          <th>
                            Status
                          </th>
                        </tr>
                      </thead>
                      <?php
    $sql = "SELECT c_id, c_name, c_status FROM tbl_category;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
   

    if($resultCheck!=0)
    {
      
        while(($total=mysqli_fetch_assoc($result)))
        {
          
            echo "
            <tr>
            <td>".$total['c_id']."</td>
            <td>".$total['c_name']."</td>
            
           ";
            ?>
            <td><a href="update_category.php?id=<?php echo $total['c_id']; ?>"><i class="mdi mdi-border-color"></i></a>
            <a href="category-enable.php?id=<?php echo $total['c_id']; ?>"><i class="mdi mdi-crosshairs-gps"></i></a>
            <!--  -->
            <a href="category-disable.php?id=<?php echo $total['c_id']; ?>"><i class="mdi mdi-delete"></i></a>
            <?php 
            echo "<td>".$total['c_status']."</td>"
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


        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous"></script>
        <script src="src/tableHTMLExport.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
        <?php include './include/footer.html'; ?>
