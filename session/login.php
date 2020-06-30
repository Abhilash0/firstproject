<?php
session_start();

if(isset($_SESSION['user'])){

	header('location:home.php');

}

$con = mysqli_connect('localhost', 'root', );
if($con){
	echo "connected";
}else{
	echo "Not connected";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>
<body>

			<div class="container">
				<h1 class="text-success text-center">Login Form</h1>
					<div class="col-lg-8 m-auto d-block shadow">

						<form class="bg-light" action="logincheck.php" method="POST">
															
								<div class="form_group">
									<label>User Name</label>
									<input type="text" name="user" class="form-control" value="" id="username">									
								</div>
								<div class="form_group">
									<label>Password</label>
									<input type="password" name="pass" class="form-control" value="" id="password">									
								</div><br>

								<input type="submit" class="btn btn-primary" name="submit" value="Login" id="btn">

								
								

						</form>
						
							<h6>If you are not registered then jump to REGISTER Page</h6><a href="register.php">Register</a>
							<a href="Forget.php">Forget Password</a>

					
				</div>
				
			</div>
</body>
</html>

