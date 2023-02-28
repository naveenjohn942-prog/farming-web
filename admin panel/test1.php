<?php
    $sql = "SELECT product_id, product_name,username, product_type, price, quantity FROM tbl_product, tbl_dealer WHERE tbl_dealer.d_id = tbl_product.d_id;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
   

    if($resultCheck!=0)
    {
        while(($total=mysqli_fetch_assoc($result)))
        {
            echo "
            <tr>
            <td>".$total['product_id']."</td>
            <td>".$total['product_name']."</td>
            <td>".$total['username']."</td>
            <td>".$total['product_type']."</td>
            <td>".$total['price']."</td>
            <td>".$total['quantity']."</td>";
            ?>
            <td><a href="update_product.php"><i class="mdi mdi-border-color"></i></a>
            <a href="#"><i class="mdi mdi-crosshairs-gps"></i></a>
            <!--  -->
            <a href="#" id="deactivate"><i class="mdi mdi-delete" onclick="deactivate()"></i></a></td>
            <script>
            function deactivate(){document.getElementById("deactivate").blur();}</script>

            <?php
            if($total['quantity']==0){
              ?>
            <td><label for="" class="badge badge-danger">Unavailable</label></td>
            <?php
            }
            else{
              ?>
            <td><label for="" class="badge badge-success">Available</label></td>
            <?php
            }
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