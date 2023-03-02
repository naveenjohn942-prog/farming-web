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
<th>Dealer Id</th>
<th>Username </th>
<th>first name</th>
<th>last name</th>
<th>Dealer email</th>
<th>phone no</th>
<th>GST no</th>
<th>Action</th>
<th>Status</th>
</tr>
                      </thead>


<?php
    $sql = "SELECT * FROM tbl_dealer;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

   

    if($resultCheck!=0)
    {
        while(($total=mysqli_fetch_assoc($result)))
        {
            echo "
            <tr>
            <td>".$total['d_id']."</td>
            <td>".$total['username']."</td>
            <td>".$total['first_name']."</td>
            <td>".$total['last_name']."</td>
            <td>".$total['d_email']."</td>
            <td>".$total['phone_no']."</td>
            <td>".$total['gst_no']."</td>
";?>
          <td><a href="update_user_dealer.php?id=<?php echo $total['d_id']; ?>"><i class="mdi mdi-border-color"></i></a>
            <a href="dealer-enable.php?id=<?php echo $total['d_id']; ?>"><i class="mdi mdi-crosshairs-gps"></i></a>
            <!--  -->
            <a href="dealer-disable.php?id=<?php echo $total['d_id']; ?>"><i class="mdi mdi-delete"></i></a></td>

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
