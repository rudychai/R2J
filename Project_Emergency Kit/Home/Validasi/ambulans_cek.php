<?php
	session_start();
include 'connection.php';
$cek = $_POST['submit'];

if ($cek == "submit") {
	$name = $_POST['ambulance_nama_emergency'];
	$address = $_POST['ambulance_address_emergency'];
	$phonenumber = $_POST['ambulance_number_emergency'];
	$situation = $_POST['ambulance_detail_emergency'];
	$moredetail = $_POST['ambulance_moredetail_emergency'];

	$query = mysqli_query($conn, "INSERT INTO call_ambulans(name, address, phonenumber, situation, moredetail) VALUES('$name', '$address',  '$phonenumber',  '$situation',  '$moredetail' )");
	echo "<script>alert('Thank you $name. Ambulans will be there in an hour or less')</script>";
	echo "<meta http-equiv='refresh' content='0 url=../after_login_customer.php'>";
	
}
?>