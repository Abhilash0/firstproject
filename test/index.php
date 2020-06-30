<!DOCTYPE html>
<html lang="en">
<head>
	<title>test</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript">

							    function validation(){
							    	var email = document.getElementById('email').value;
							    	var name = document.getElementById('name').value;
							    	var pass = document.getElementById('pass').value;
                                    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

							    	if (email == "") {
							    		document.getElementById('emailids').innerHTML ="Please fill email";
							    		return false;
							    	}
							    	//console.log(email.indexof('@'));
							    	if(email.match(mailformat) ){
							    		document.getElementById('emailids').innerHTML ="Valid Position";
							    	}
							    	else {
							    		document.getElementById('emailids').innerHTML ="Not validemail";
							    		return false;
							    	}



							    	if(name == "") {
							    		document.getElementById('username').innerHTML ="Please fill name";
							    		return false;
							    	}

							    	if((user.length <= 2) || (user.length > 20)){
							   		    document.getElementById('username').innerHTML ="Name must be between 2 and 20";
							   		    return false;
							    	}

							    	if(!isNaN(user)) {
							    		document.getElementById('username').innerHTML ="Only caharacter are allowed";
							    		return false;
							    	}


							    	if(pass == "") {
							    		document.getElementById('passwords').innerHTML ="Please fill password";
							    		return false;
							    	}
							    	if((pass.length <= 5) || (pass.length > 20)){
							    		document.getElementById('passwords').innerHTML ="Password must be between 5 and 20";
							    		return false;
							    	}

                                      return true;
							    }
</script>	
 
	
</head>
<body>


									<form id="add_details" name="registration" >	
																			
										<input type="text" name="email" placeholder="Enter Your Email"  id="email" autocomplete="off" ><br><br>
										
										<input type="text" name="name" placeholder="Name"  id="name" autocomplete="off" ><br><br>				
																
										<input type="text" name="pass" placeholder="Password"  id="pass" autocomplete="off"><br><br>
										<input type="submit" id="add" value="submit" name="submit">
										
									</form>

		 <table id="table_data">
			<tr>
				<th>Email</th>
				<th>Name</th>
				<th>Password</th>
			</tr>
			<?php
				$conn = mysqli_connect("localhost", "root", "", "data");
				if($conn-> connect_error) {   
					die("Connection failed:". $conn-> connect_error);
				}

				$sql = "SELECT email, name, pass from register";
				$result = $conn-> query($sql);

				if ($result-> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
						echo "<tr><td>". $row["email"] ."</td><td>". $row["name"] ."</td><td>". $row["pass"] ."</td></tr>";
					}
					echo "</table>";
				}
				else {
					echo " 0 result";
				}

				$conn-> close();
			?>
					  
		</table> 

									
			
									

</body>
</html>

<script>
$(document).ready(function(){
 
 $('#submit').click(function(){
  //event.preventDefault();
  var email = $('#email').val();
  var name = $('#name').val();
  var pass = $('#pass').val();

  $.ajax({
   url:"insert.php",
   method:"POST",
   dataType:"json",
   data:{
         "done": 1,
         "name": name,
         "email": email,
         "phone": phone
       },
   success:function(data){
   	  var email = $('#email').val('');
	  var name = $('#name').val('');
	  var pass = $('#pass').val('');
	     
   	// $('#add_details')[0].reset();
   }
 	 })
 });
 
});
</script>