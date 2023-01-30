<?php include './include/header.html'; ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Category</h4>
                  
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Category  Name</label>
                      <input type="text" class="form-control" required onkeyup="text(this)" invalid-text="exampleInputName1" placeholder="Name">
                      <small id="exampleInputName1" style="color: red; display: none;">Please Enter valid category.<br/></small>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php include './include/footer.html'; ?>