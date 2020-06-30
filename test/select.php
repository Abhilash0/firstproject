<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>
		<table>
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