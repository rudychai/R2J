<?php
	session_start();
include 'connection.php';
$cek = $_POST['submit'];

if ($cek == "submit") {
	$name = $_POST['police_nama_emergency'];
	$address = $_POST['police_address_emergency'];
	$phonenumber = $_POST['police_number_emergency'];
	$situation = $_POST['police_detail_emergency'];
	$moredetail = $_POST['police_moredetail_emergency'];

	$query = mysqli_query($conn, "INSERT INTO call_police(name, address, phonenumber, situation, moredetail) VALUES('$name', '$address',  '$phonenumber',  '$situation',  '$moredetail' )");
	echo "<script>alert('Thank you $name. The Police will be there in an hour or less')</script>";
	echo "<meta http-equiv='refresh' content='0 url=../after_login_customer.php'>";
	
}
?>