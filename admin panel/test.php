<?php include './include/connection.php';
include './include/header.html'; 
 ?>
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Order Details</h4>
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="myTable">
                      <thead>
<tr>
<th>Order Id</th>
<th>Farmer ID</th>
<th>expert id</th>
<th>product id</th>
<th>order date</th>
<th>Order status</th>
<th>total amount</th>
</tr>
                      </thead>


<?php
    $sql = "SELECT * FROM tbl_orders;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

   

    if($resultCheck!=0)
    {
        while(($total=mysqli_fetch_assoc($result)))
        {
            echo "
            <tr>
            <td>".$total['order_id']."</td>
            <td>".$total['f_id']."</td>
            <td>".$total['e_id']."</td>
            <td>".$total['product_id']."</td>
            <td>".$total['order_date']."</td>
            <td>".$total['order_status']."</td>
            <td>".$total['total_amt']."</td>

            
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
