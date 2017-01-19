<?php
session_start();
include 'connection.php';
$cek = $_POST['submit'];

if ($cek == "Sign up") {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$pass = $_POST['password'];
	$con_pass = $_POST['con_password'];

	$query = mysqli_query($conn, "SELECT * FROM user_regis WHERE username='$username' ");
	$status = mysqli_num_rows($query);
	
	if($status == 0)
	{
		$masuk = mysqli_query($conn, "INSERT INTO user_regis(firstname,lastname,username,email,address,password,con_password) VALUES('$firstname','$lastname','$username','$email','$address','$pass' , '$con_pass') ");
		echo '<script type="text/javascript">alert("Register Success");</script>';
		echo "<meta http-equiv='refresh' content='0 url=../LoginRegistrationForm/LoginAndRegis.php#tologin'>";
		
	}
	
	else
	{
		echo '<script type="text/javascript">alert("Username Sudah dipakai");</script>';
		echo '<script type="text/javascript">history.back()</script>';
	}
}

elseif ($cek == "Login") {
	$username = $_POST['username'];
	$pass = $_POST['password'];

	$query = mysqli_query($conn, "SELECT * FROM user_regis WHERE (username='$username' OR email='$username') AND (password='$pass') ");
	
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_array($query)) {
			if($row['level']==1){
				$_SESSION['username'] = $username;
				header("location: ../After_login_admin/After_login_admin.php");
			}
			else{
				$_SESSION['username'] = $username;
			header("location: ../after_login_customer.php");
			}
		}
	}
	else {
		echo '<script type="text/javascript">alert("Username or Password is Incorrect");</script>';
		echo '<script type="text/javascript">history.back()</script>';	
	}
}
?>
