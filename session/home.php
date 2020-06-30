<?php
session_start();

if(!isset($_SESSION['user'])){

	header('location:login.php');

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
					<!-- <?php                                                         /////if me want to print the name of login person
						//echo $_SESSION['user']
					?>-->
					<div class="header">
						<div class="nav_bar">
							<ul class="content">
								<li><a href="adddetails.php">AddDetails</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>							
						</div>						
					</div>

					<!-- <h1 class="bg-dark text-white text-center">Details</h1>		
					<div class="table-responsive">
						 
							 <thead class="bg-dark text-white">
								<th>Id</th>
								<th>Title</th>
								<th>About</th>
								<th>Image</th>
							</thead> -->
                    <table class="table table-bordered table-striped table-hover text-centerx">
							<tbody>
								<?php
									$con = mysqli_connect('localhost', 'root', );
									$db = mysqli_select_db($con, 'registration');

									if(isset($_POST['submit'])){

										$title = $_POST['title'];
										$about = $_POST['about'];
										$files = $_FILES['file'];

										// print_r($title);
										// echo "<br>";

										// print_r($about);
										// echo "<br>";

										$filename = $files['name'];
										$fileerror = $files['error'];
										$filetmp = $files['tmp_name'];

										$fileext = explode('.', $filename);
										$filecheck = strtolower(end($fileext));

										$fileextstored = array('png', 'jpg', 'jpeg');

										if(in_array($filecheck, $fileextstored)){

												$destinationfile = 'upload/'.$filename;
												move_uploaded_file($filetmp, $destinationfile);


									$query = "INSERT INTO `upload`(`title`, `about`, `image` ) VALUES ('$title', '$about', '$destinationfile')";
									$result = mysqli_query($con,$query);
											?>

											</tbody>
							
						</table>

<!-- ////continue display table
											//$displayquery = " select * from upload";
											//$querydisplay = mysqli_query($con,$displayquery);

											//$row = mysqli_num_rows($querydisplay);
											//while ($results = mysqli_fetch_array($querydisplay)) { -->
												

												

													<!-- <tr>
														<td> <?php //echo $results['id'];   ?> </td>
														<td> <?php //echo $results['title'];   ?> </td>
														<td> <?php //echo $results['about'];   ?> </td>
														<td> <img src=" <?php //echo $results['image']; ?>" height="100px" width="100px"> </td>
													</tr>// -->
<!-- 
												<?php
											}

										}//else {
											//echo "Extension is not matching";
										//}
									//}

								//?> -->
							
<!-- display table -->
						<h1 class="bg-dark text-white text-center">Details</h1>		
					    <div class="table-responsive">
						<table class="table table-bordered table-striped table-hover text-centerx">
						
							<tr>
								<th>Id</th>
								<th>Title</th>
								<th>About</th>
								<th>Image</th>
								<?php
								$cons = mysqli_connect('localhost', 'root', '', 'registration');
								$select = mysqli_query($con,"select * from upload");
								while ($rows = mysqli_fetch_array($select)) {
								?>


													<tr>
														<td> <?php echo $rows['id'];   ?> </td>
														<td> <?php echo $rows['title'];   ?> </td>
														<td> <?php echo $rows['about'];   ?> </td>
														<td> <img src=" <?php echo $rows['image']; ?>" height="100px" width="100px"> </td>
													</tr>
							</tr>	
							
							<?php } ?>
						
					</div>		
			</div>
</body>
</html>