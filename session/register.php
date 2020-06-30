<!DOCTYPE html>
<html>
<head>

	<title>Registration Form</title>
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
				<h1 class="text-success text-center">Registration Form</h1><br>
				<div class="col-lg-8 m-auto d-block shadow">
						<form class="bg-light">							
								<div class="form_group">
									<label>User Name</label>
									<input type="text" name="" class="form-control" id="username">	
									<span id="usernames" class="text-danger font-weight-bold"></span>								
								</div>
								<div class="form_group">
									<label>Name</label>
									<input type="text" name="" class="form-control" id="name">
									<span id="names" class="text-danger font-weight-bold"></span>									
								</div>
								<div class="form_group">
									<label>Email</label>
									<input type="text" name="" class="form-control" id="email">
									<span id="emails" class="text-danger font-weight-bold"></span>									
								</div>
								<div class="form_group">
									<label>Password</label>
									<input type="password" name="" class="form-control" id="password">
									<span id="passwords" class="text-danger font-weight-bold"></span>										
								</div>
								<div class="form_group">
									<label>Conf-Password</label>
									<input type="password" name="" class="form-control" id="confpass">
									<span id="confpasss" class="text-danger font-weight-bold"></span>										
								</div><br>

								<button type="button" name="submit" class="btn btn-success" onclick="addRecord()"> submit</button>

				
						</form>

						<h6>If you are already register then jump to LOGIN Page</h6><a href="login.php">Login</a>
						
				</div>
				
			</div>
             <script type="text/javascript">

							    function validation(){
							    
							    	var username = document.getElementById('username').value;
							    	var name = document.getElementById('name').value;
							    	var email = document.getElementById('email').value;		    	
                                    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
							    	var password = document.getElementById('password').value;
							    	var confpass = document.getElementById('confpass').value;

							    	
                                    	if(usernames == " ") {
							    		document.getElementById('usernames').innerHTML ="Please fill name";
							    	}
							    		if(usernames != " ") {
							    		document.getElementById('usernames').innerHTML ="";
							    	}

							    	if((username.length <= 2) || (username.length > 20)){
							   		    document.getElementById('usernames').innerHTML ="Name must be between 2 and 20";
							   		    return false;
							    	}

							    	if(!isNaN(username)) {
							    		document.getElementById('usernames').innerHTML ="Only caharacter are allowed";
							    		return false;
							    	}


							    	if(name == "") {
							    		document.getElementById('names').innerHTML ="Please fill name";
							    		return false;
							    	}

							    	// if(name != "") {
							    	// 	document.getElementById('names').innerHTML ="Please fill name";
							    	// 	return false;
							    	// }

							    	if((name.length <= 2) || (name.length > 20)){
							   		    document.getElementById('names').innerHTML ="Name must be between 2 and 20";
							   		    return false;
							    	}

							    	if(!isNaN(name)) {
							    		document.getElementById('names').innerHTML ="Only caharacter are allowed";
							    		return false;
							    	}



							    		if (email == "") {
							    		document.getElementById('emails').innerHTML ="Please fill email";
							    		return false;
							    	}

							    	// if (email != " ") {
							    	// 	document.getElementById('emails').innerHTML ="Please fill email";
							    	// 	return false;
							    	// }
							    	//console.log(email.indexof('@'));
							    	if(email.match(mailformat) ){
							    	//	document.getElementById('emails').innerHTML ="Valid Position";
							    	}
							    	else {
							    		document.getElementById('emails').innerHTML ="Not validemail";
							    		return false;
							    	}




							    	if(password == " ") {
							    		document.getElementById('passwords').innerHTML ="Please fill password";
							    		return false;
							    	}

							    	// if(password != " ") {
							    	// 	document.getElementById('passwords').innerHTML ="Please fill password";
							    	// 	return false;
							    	// }

							    	if((password.length <= 5) || (password.length > 20)){
							    		document.getElementById('passwords').innerHTML ="Password must be between 6 and 20";
							    		return false;
							    	}	



							    	if(password!=confpass)  {
							    		document.getElementById('confpasss').innerHTML ="Password Do Not Match";
							    		return false;
							    	}



							    	// if(confpass != " ")	 {
							    	// 	document.getElementById('confpasss').innerHTML ="Please fill conf-password";
							    	// 	return false;
							    	// }	

							    	if(confpass == "")	 {
							    		document.getElementById('confpasss').innerHTML ="Please fill conf-password";
							    		return false;
							    	}			    	

                                      return true;
							    }
</script>	

<!-- <script type="text/javascript">
	$(document).ready(function(){
		$("input").keyup(function(){
		 console.log(this.value.length)
		});
	});
</script> -->

             <script type="text/javascript">
             	
             		function addRecord(){
             			//validation();
             			if(validation()){
             			var username = $('#username').val();
             			var name = $('#name').val();
             			var email = $('#email').val();
             			var password = $('#password').val();
             			var confpass = $('#confpass').val();

             			

             			$.ajax({
             				url: "insert.php",
             				type: "post",
             				data: {
             					username : username,
             					name : name,
             					email : email,
             					password : password,
             					confpass : confpass
             				},
             				success:function(data,status){
             					console.log(data);
             					//readRecords();
             					document.getElementById('usernames').innerHTML = data;
             					var username = $('#username').val('');
		             			var name = $('#name').val('');
		             			var email = $('#email').val('');
		             			var password = $('#password').val('');
		             			var confpass = $('#confpass').val('');

             				}

             			});
             		 }
             		}

             </script>
</body>
</html>