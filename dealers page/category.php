<?php include './include/header.html'; ?>
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
                            Created By
                          </th>
                          <th>
                            Action
                          </th>
                          <th>
                            Status
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Flower Seeds
                          </td>
                          <td>
                            naveenpatel
                          </td>
                          <td>
                            <i class="mdi mdi-crosshairs-gps"></i>
                            <a href="update_category.php"><i class="mdi mdi-border-color"></i></a>
                            <i class="mdi mdi-delete"></i>
                          </td>
                          <td>
                          <label for="" class="badge badge-success">Active</label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Seasonal Seeds
                          </td>
                          <td>
                            rajivshah
                          </td>
                          <td>
                            <i class="mdi mdi-crosshairs-gps"></i>
                            <a href="update_category.php"><i class="mdi mdi-border-color"></i></a>
                            <i class="mdi mdi-delete"></i>
                          </td>
                          <td>
                          <label for="" class="badge badge-danger">Deactive</label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Bio Fertilizers
                          </td>
                          <td>
                            jenson
                          </td>
                          <td>
                            <i class="mdi mdi-crosshairs-gps"></i>
                            <a href="update_category.php"><i class="mdi mdi-border-color"></i></a>
                            <i class="mdi mdi-delete"></i>
                          </td>
                          <td>
                          <label for="" class="badge badge-danger">Deactive</label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Flower Seeds
                          </td>
                          <td>
                            Ramjoshi
                          </td>
                          <td>
                            <i class="mdi mdi-crosshairs-gps"></i>
                            <a href="update_category.php"><i class="mdi mdi-border-color"></i></a>
                            <i class="mdi mdi-delete"></i>
                          </td>
                          <td>
                          <label for="" class="badge badge-success">Active</label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Tools and equipments
                          </td>
                          <td>
                            snehadas
                          </td>
                          <td>
                            <i class="mdi mdi-crosshairs-gps"></i>
                            <a href="update_category.php"><i class="mdi mdi-border-color"></i></a>
                            <i class="mdi mdi-delete"></i>
                          </td>
                          <td>
                          <label for="" class="badge badge-success">Active</label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Chemical fertilizers
                          </td>
                          <td>
                            joychristian
                          </td>
                          <td>
                            <i class="mdi mdi-crosshairs-gps"></i>
                            <a href="update_category.php"><i class="mdi mdi-border-color"></i></a>
                            <i class="mdi mdi-delete"></i>
                          </td>
                          <td>
                          <label for="" class="badge badge-danger">Deactive</label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Flower Seeds
                          </td>
                          <td>
                            tusharjohn
                          </td>
                          <td>
                            <i class="mdi mdi-crosshairs-gps"></i>
                            <a href="update_category.php"><i class="mdi mdi-border-color"></i></a>
                            <i class="mdi mdi-delete"></i>
                          </td>
                          <td>
                          <label for="" class="badge badge-success">Active</label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Seasonal Seeds
                          </td>
                          <td>
                            princelalwani
                          </td>
                          <td>
                            <i class="mdi mdi-crosshairs-gps"></i>
                            <a href="update_category.php"><i class="mdi mdi-border-color"></i></a>
                            <i class="mdi mdi-delete"></i>
                          </td>
                          <td>
                          <label for="" class="badge badge-success">Active</label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Bio Fertilizers
                          </td>
                          <td>
                            arjuntekwani
                          </td>
                          <td>
                            <i class="mdi mdi-crosshairs-gps"></i>
                            <a href="update_category.php"><i class="mdi mdi-border-color"></i></a>
                            <i class="mdi mdi-delete"></i>
                          </td>
                          <td>
                          <label for="" class="badge badge-danger">Deactive</label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Chemical Fertilizers
                          </td>
                          <td>
                            himanshudas
                          </td>
                          <td>
                            <i class="mdi mdi-crosshairs-gps"></i>
                            <a href="update_category.php"><i class="mdi mdi-border-color"></i></a>
                            <i class="mdi mdi-delete"></i>
                          </td>
                          <td>
                          <label for="" class="badge badge-success">Active</label>
                          </td>
                        </tr>
                        
                      </tbody>
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
