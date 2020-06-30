<?php

$conn = mysqli_connect('localhost', 'root', '', 'registration');
	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confpass = $_POST['confpass'];
	    $sql_u = "SELECT * FROM register WHERE username = '$username'";
		//$sql_e = "SELECT * FROM register WHERE email = '$email'";
		$res_u = mysqli_query($conn,$sql_u) or die(mysqli_error($conn));
		//$res_e = mysqli_query($db,$sql_e) or die(mysqli_error($db));
		if (mysqli_num_rows($res_u) > 0) {
			echo "sorry...username already taken";
		} /*else if(mysqli_num_rows($res_e) > 0) {
			 echo "sorry...email already taken";
		} */
		else{
			$query = "INSERT INTO `register`(`username`, `name`, `email`, `password`, `confpass`) VALUES ('$username', '$name', '$email', '$password', '$confpass')";
			$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
			//echo "saved";
			exit();
}


?>
