<!DOCTYPE html>
<html>
<head>
	<title>Add_Details</title>
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

		<div class="container"><br>
				<h1 class="text-success text-center">ADD_DETAILS</h1><br>
				<div class="col-lg-8 m-auto d-block shadow">
						<form class="bg-light" action="home.php" method="post" enctype="multipart/form-data">	

								<div class="form_group">
									<label for="text">Title</label>
									<input type="text" name="title" class="form-control" id="text">	
									<span id="titles" class="text-danger font-weight-bold"></span>								
								</div><br>

								<div class="form_group">
									<label for="texts">About</label>
									<input type="text" name="about" class="form-control" id="texts">
									<span id="abouts" class="text-danger font-weight-bold"></span>									
								</div><br>

								<div class="form_group">
									<label for="file">Add Image</label>
									<input type="file" name="file" class="form-control" id="file"> 
									<span id="images" class="text-danger font-weight-bold"></span>									
								</div>
								<br>

								<input type="submit" name="submit" value="submit" class="btn btn-success">

								<!--  <button type="button" class="btn btn-primary" onclick="addRecord()">Save</button>-->
 
						</form>

</body>
</html>