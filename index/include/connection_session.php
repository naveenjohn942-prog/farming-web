<?php
// syntax
// mysqli_connect("server" , "username" , "password" , "database");
$conn = mysqli_connect("localhost" , "root" , "" , "sdp") or die("Connection Failed");


if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>