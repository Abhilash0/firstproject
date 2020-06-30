<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

</head>
<body>

		

		<div id="input_form">
			<label>email</label>									
				<input type="text" name="email" placeholder="Enter Your Email" class="form-control" id="email" required ><br><br>
				
				<label>name</label>
				<input type="text" name="name" placeholder="Name" class="form-control" id="name"  ><br><br>

				<label>pass</label>						
				<input type="text" name="pass" placeholder="Password" class="form-control" id="pass" ><br><br>
				
				<input type="submit" id="submit" name="submit" value="Insert">
		</div>

<div id="add">
			
      
      <?php
        $conn = mysqli_connect("localhost", "root", "", "tests");
        if($conn->connect_error) {   
          die("Connection failed:". $conn->connect_error);
        }

        $sqli = "SELECT email, name, pass from sample";
        $result = $conn->query($sqli);
        $output = '
        <table>
        <tr>
        <th>Email</th>
        <th>Name</th>
        <th>Password</th>
      </tr>
      ';

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $output.= "<tr>
            <td>". $row["email"] ."</td>
            <td>". $row["name"] ."</td>
            <td>". $row["pass"] ."</td>
            </tr>";
          }
          $output .= "</table>";
          echo $output;
        }
        else {
          echo " 0 result";
        }

        $conn->close();
      ?>
            
      
    

</div>

<script type="text/javascript">
$(document).ready(function(){
 
 $('#submit').click(function(){
  //event.preventDefault();
  var email = $('#email').val();
  var name = $('#name').val();
  var pass = $('#pass').val();
console.log('dd')
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:{
         "done": 1,
         "email": email,
         "name": name,
         "pass": pass
       },
   success:function(data){
   	console.log(data);
   	  $('#add').html(data);
      $('#email').val('');
	  $('#name').val('');
	  $('#pass').val('');
   }
 	})
 });
 
});
</script>					

</body>
</html>




