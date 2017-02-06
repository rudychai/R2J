<?php
include 'connection.php';
$user = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
mysqli_query($conn, "UPDATE user_regis SET firstname='$firstname', lastname='$lastname', address='$address' WHERE username='$user' ");
header("location:../after_login_customer.php");
?>