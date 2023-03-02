<?php include './include/header.html'; 
include './include/connection.php';



 
            
?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Category</h4>
                  
                  <form class="forms-sample" method="POST" action="add_category.php">
                    
                    <div class="form-group">
                      <label for="exampleInputName1">Category  Name</label>
                      <input type="text" class="form-control" placeholder="Name" name="c_name">
                      
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary mr-2" name='submit'>Submit
                      
                    </button>
                       
                    
                    <button class="btn btn-light">Cancel</button>
                    
                  </form>
                  
                </div>
              </div>
            </div>
            
          </div>
        </div><?php
        if (isset($_POST['submit']))
{
    $category = $_POST['c_name'];
    
    $query = "INSERT INTO tbl_category(c_name,c_status) VALUES('$category','ACTIVE')";
   

    if ($conn->query($query) === TRUE) {
    echo "<script>alert('Done');</script>";
    }
    else{
      
      echo "Error".mysqli_error($conn);
    }
  } ?>  

        
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php include './include/footer.html'; ?>