<?php include './include/connection.php';
include './include/header.html'; 
 ?>
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dealers Details</h4>
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="myTable">
                      <thead>
<tr>
<th>Expert Id</th>
<th>Username </th>
<th>first name</th>
<th>last name</th>
<th>Verification</th>
<th>phone no</th>
<th>Qualification</th>
<th>Experience</th>
<th>Action</th>
<th>Status</th>
</tr>
                      </thead>


<?php
    $sql = "SELECT * FROM tbl_expert_details;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

   

    if($resultCheck!=0)
    {
        while(($total=mysqli_fetch_assoc($result)))
        {
            echo "
            <tr>
            <td>".$total['e_id']."</td>
            <td>".$total['username']."</td>
            <td>".$total['first_name']."</td>
            <td>".$total['last_name']."</td>
            ";
           
            if($total['e_verify']==0){
            ?><td><label for="" class="badge badge-danger">Inactive</label></td>
            <?php
            }
            else{
              ?>
            <td><label for="" class="badge badge-success">Active</label></td>
            <?php
            }
            ?>
            <?php
            echo "
            <td>".$total['phone_no']."</td>
            <td>".$total['e_qualification']."</td>
            <td>".$total['e_experience']."</td>
";?>
          <td><a href="update_user_expert.php?id=<?php echo $total['e_id']; ?>"><i class="mdi mdi-border-color"></i></a>
            <a href="expert-enable.php?id=<?php echo $total['e_id']; ?>"><i class="mdi mdi-crosshairs-gps"></i></a>
            <!--  -->
            <a href="expert-disable.php?id=<?php echo $total['e_id']; ?>"><i class="mdi mdi-delete"></i></a></td>

<?php
echo "      <td>".$total['status']."</td>
</tr>
            
            ";
        }

    }
    else
    {
        echo "No Records Found";
    }
?>
</tbody>
</table>

<?php include './include/footer.html';?>
