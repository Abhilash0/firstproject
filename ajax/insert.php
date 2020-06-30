<?php
$conn = mysqli_connect('localhost', 'root', '', 'demos');

extract($_POST);

/////to show data 
if(isset($_POST['readrecord'])){
	$data = '<table class="table table-bordered table-striped">
	<tr>
		<th>No.	</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Edit</th>
		<th>Delete</th>
	<tr>';

		$displayquery = " SELECT * FROM `demo` ";
		$result = mysqli_query($conn,$displayquery);

		if(mysqli_num_rows($result) > 0) {

			$number = 1;
			while ($row = mysqli_fetch_array($result)){

				$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row["firstname"].'</td>
				<td>'.$row["lastname"].'</td>
				<td>'.$row["email"].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['id'].')"
							class="btn btn-warning">Edit</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['id'].')"
							class="btn btn-danger">Delete</button>
				</td>
				</tr>';
				$number++;

			}
		}

		$data .= '</table>';
		echo $data;
}

///to insert query
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']))

{
	$query = "INSERT INTO `demo`(`firstname`, `lastname`, `email`) VALUES  ('$firstname', '$lastname', '$email') ";


	mysqli_query($conn, $query);
}

/////delete record

if(isset($_POST['deleteid'])){

	$userid = $_POST['deleteid'];
	$deletequery = " delete from demo where id='$userid'";
	mysqli_query($conn, $deletequery);
}

////get user id for update
		
		if(isset($_POST['id'])  && isset($_POST['id']) != "")
		{
			$user_id = $_POST['id'];
			$query ="SELECT * FROM demo WHERE id = '$user_id'";
			if (!$result = mysqli_query($conn,$query)) {
				exit(mysqli_error());
			}

			$response = array();

			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {

					$response = $row;
				}
			}

			else
			{
				$response['status'] = 200;
				$response['message'] = "Data Not Found!	";
			}

			echo json_encode($response);
		}

		else{
			    $response['status'] = 200;
				$response['message'] = "Invalid Request!";
		}

		////update table

		if(isset($_POST['hidden_user_idupd'])) {

			$hidden_user_idupd = $_POST['hidden_user_idupd'];
			$firstnameupd = $_POST['firstnameupd'];
			$lastnameupd = $_POST['lastnameupd'];
			$emailupd = $_POST['emailupd'];

			$query = "UPDATE `demo` SET `firstname`='$firstnameupd',`lastname`='$lastnameupd',`email`='$emailupd' WHERE id = '$hidden_user_idupd' ";

			mysqli_query($conn,$query);
		}

?>