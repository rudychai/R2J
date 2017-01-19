<?php
	session_start();
include 'connection.php';
$cek = $_POST['submit'];

if ($cek == "submit") {
	$name = $_POST['firefighter_nama_emergency'];
	$address = $_POST['firefighter_address_emergency'];
	$phonenumber = $_POST['firefighter_number_emergency'];
	$situation = $_POST['firefighter_detail_emergency'];
	$moredetail = $_POST['firefighter_moredetail_emergency'];

	$query = mysqli_query($conn, "INSERT INTO call_firefighter(name, address, phonenumber, situation, moredetail) VALUES('$name', '$address',  '$phonenumber',  '$situation',  '$moredetail' )");
	echo "<script>alert('Thank you $name. FireFighter will be there in an hour or less')</script>";
	echo "<meta http-equiv='refresh' content='0 url=../after_login_customer.php'>";
	
}
?>