<?php
include './include/connection.php';


$id = $_GET['id'];

$insert_query = "UPDATE `tbl_dealer` SET `status` = 'ACTIVE' WHERE `d_id` = '$id'";
$res = mysqli_query($conn, $insert_query);
// $row=mysqli_fetch_assoc($res);






?>
<script>
    window.location.href = 'user_dealer.php';
</script>