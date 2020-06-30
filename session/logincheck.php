<?php
session_start();

$con = mysqli_connect('localhost', 'root', );
if($con){
	echo "connected";
}else{
	echo "Not connected";
}

$db = mysqli_select_db($con, 'registration');

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";	

	$query = mysqli_query($con, $sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successfull";
			$_SESSION['user'] = $username;
			header('location:home.php');
		}else{
			echo "login failed";
			header('location:login.php');
		}
}

?>