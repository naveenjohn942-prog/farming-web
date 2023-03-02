<?php
include './include/connection.php';


$id = $_GET['id'];

$insert_query = "UPDATE `tbl_response` SET `status` = 'DEACTIVE' WHERE `response_id` = $id";
$res = mysqli_query($conn, $insert_query);
// $row=mysqli_fetch_assoc($res);






?>
<script>
    window.location.href = 'response.php';
</script>