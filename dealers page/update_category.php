<?php include './include/header.html';
include './include/connection.php';
$uid = $_GET['id'];
$usql = "SELECT * FROM `tbl_category` WHERE c_id = $uid";
$uquery = mysqli_query($conn, $usql);
$urow = mysqli_fetch_assoc($uquery);

$cid = $_GET['id'];
$csql = "SELECT * FROM `tbl_category` WHERE c_id = $cid";
$cquery = mysqli_query($conn, $csql);
$crow = mysqli_fetch_assoc($cquery);

?>


      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Category</h4>
                  
                  <form class="forms-sample" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">Category  Id</label>
                      <input type="text" class="form-control" id="exampleInputName1"  value="<?php echo $urow['c_id']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1" >Category  Name</label>
                        <input type="text" class="form-control" name="cat_details" id="exampleInputName1"  value="<?php echo $crow['c_name']; ?>">
                      </div>
                    
                    
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <?php include './include/footer.html'; 
          if($_SERVER["REQUEST_METHOD"] == "POST"){

            if (isset($_POST['submit']))
            {
              
               
                $cat_details=$_POST['cat_details'];
                
                $update_query="UPDATE tbl_category SET c_name = '$cat_details' WHERE c_id = '$cid' ";
            
            
                $res = mysqli_query($conn, $update_query);
              
                if($res){
                
                  echo "<script>alert('Updated successfully');</script>";
                }
                else{
                  echo "<script>alert('Updated unsuccessfully');</script>";
                }
              }
              
            }
            ?>