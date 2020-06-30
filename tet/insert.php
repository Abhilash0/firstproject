<?php
$emailErr = $nameErr = $passErr  = "";
     $email = $name = $pass = "";


     if ($_SERVER["REQUEST_METHOD"] == "POST") {
     	 
         if (empty($_POST["email"])) {
             $emailErr = "Required*";
         }
         else {
             $email = $_POST["email"];
         }
         if (empty($_POST["name"])) {
             $nameErr = "Required*";
         }
         else {
             $name = $_POST["name"];
         }
         if (empty($_POST["pass"]))  {
             $passErr = "Required*";
         }
         else {
             $pass = $_POST["pass"];
             
         }
       $host = "localhost";
       $user = "root";
       $db_pass = "";
       $dbname= "tests";
        // create connection
       $conn = mysqli_connect($host,$user,$db_pass,$dbname);
       // check connection
       if(!$conn){
         die("connection Failed" . mysqli_connect_error());
       }
       
       $sql = "INSERT INTO sample (email,name,pass) values ('$email','$name', '$pass')";
       if(mysqli_query($conn,$sql)){

 
         echo "New record created Successfully";
       }else{
         echo "Error" .$sql. "<br />" . mysqli_error($conn);
       }
     }
      								



      			// 					//show fbsql_database(link_identifier)
										$sql1 = "SELECT email, name, pass from sample";
										$result = $conn->query($sql1);
										$output = '
										<table>
										<tr>
										<th>Email</th>
										<th>Name</th>
										<th>Password</th>
									</tr>
									';

									$row = mysqli_fetch_array($result);
									


										if($row) {
											while ($row = mysqli_fetch_array($result)) {
												$output.=
												 "<tr>
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

										mysqli_close($conn);
									

     ?>