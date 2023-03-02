<?php
include './include/connection.php';


$id = $_GET['id'];

$insert_query = "UPDATE `tbl_product` SET `p_status` = 'DEACTIVE' WHERE `product_id` = '$id'";
$res = mysqli_query($conn, $insert_query);
// $row=mysqli_fetch_assoc($res);






?>
<script>
    window.location.href = 'product.php';
</script>