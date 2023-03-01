<?php include './include/header.html';
include './include/connection.php';



if($_SERVER["REQUEST_METHOD"] == "POST"){

if (isset($_POST['submit']))
{
  
   
    $cat_name=$_POST['cat_name'];
    $cat_id=$_POST['cat_id'];
    $update_query="UPDATE tbl_category SET c_name = '$cat_name' WHERE c_id = '$cat_id' ";


    $res = mysqli_query($conn, $update_query);
  
    if($res){
    
      echo "<script>alert('Updated successfully');</script>";
    }
    else{
      echo "<script>alert('Updated successfully');</script>";
    }
  }
  
}
  ?>

      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
        <?php $result=$conn->query("SELECT * FROM tbl_category WHERE c_id = '".$_GET['c_id']."'");
        $row = $result->fetch_assoc();


       $result1=$conn->query("SELECT c_name FROM tbl_category ");
        $row1 = $result1->fetch_assoc();

        ?>    
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Category</h4>
                  
                  <form action="update_category.php" method="POST" class="forms-sample" >
                    <div class="form-group">
                      <label for="exampleInputName1">Category  Id</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $row["c_id"]; ?>" name="cat_id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1" >Category  Name</label>
                        <select class="form-control" name="cat_name" >
                        <!-- <option></option>
                          <option>Flower Seeds</option>
                          <option>seasonal seeds</option>
                          <option>tool and equipment</option>
                          <option>bio fertilizer</option>
                          <option>chemical fertilizer</option> -->
                          <?php while($row1 = $result1->fetch_assoc()){ ?>
                            <option> <?php echo $row1["c_name"];?></option>
                            <?php } ?>
                            


                        </select>
                      </div>
                    
                    
                    <button type="submit" class="btn btn-primary mr-2" name ="submit">Submit</button>
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
          <?php include './include/footer.html'; ?>