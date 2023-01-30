<?php include './include/header.html'; ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Category</h4>
                  
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Category  Id</label>
                      <input type="text" class="form-control" id="exampleInputName1"  value="1" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Category  Name</label>
                        <select class="form-control">
                          <option>Flower Seeds</option>
                          <option>seasonal seeds</option>
                          <option>tool and equipment</option>
                          <option>bio fertilizer</option>
                          <option>chemical fertilizer</option>
                        </select>
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
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <?php include './include/footer.html'; ?>