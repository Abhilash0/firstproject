<?php

$email = $_POST['email'];
$name = $_POST['name'];
$pass = $_POST['pass'];

if (!empty($_POST['email']) || !empty($_POST['pass']) || !empty($_POST['name'])) {
	die('123');
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "data";

			$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

			if(mysqli_connect_error()){
				die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
			}else{
				die('123');
				//$SELECT = "SELECT email From register Where email = ? Limit 1";
				$INSERT = "INSERT Into register (email, name, pass) values('$email', '$name', '$pass')";


				$stmt = $conn->prepare($SELECT);
				$stmt->bind_param("s", $email);
				$stmt->execute();
				$stmt->bind_result($email);
				$stmt->store_result();
				$rnum = $stmt->num_rows;

				if($rnum==0) {
					$stmt->close();

					$stmt = $conn->prepare($INSERT);
					$stmt->bind_param("sss", $email, $name, $pass);

					$stmt->execute();
					echo "New record added succesfully";
					
				} else{
					echo "Someone already register using this email";
				}

				echo json_encode($output);
				$stmt->close();
				$conn->close();

			}


}else {
	echo "All fields are required";
	die();
}

?>