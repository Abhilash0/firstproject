<?php
$conn = new mysqli("localhost", "root", "", "crud_vue");
if($conn->connect_error){
	die("connection_failed!".$conn->connect_error);
}
 
 		$result = array('error' =>  false );
 		$action = '';

 		if(isset($_GET['action'])){
 			$action = $_GET['action'];
 		}

/////display query
 		if($action == 'read'){
 			$sql = $conn->query("SELECT * from users");
 			$users = array();
 			while($row = $sql->fetch_assoc()){
 				array_push($users, $row);
 			}
 			$result['users'] = $users;
 		}

////insert query
 		if($action == 'create'){
 			$name = $_POST['name'];
 			$email = $_POST['email'];
 			$phone = $_POST['phone'];

 			$sql = $conn->query("INSERT INTO users (name,email,phone) VALUES('$name', '$email', '$phone')");
 			
 			if($sql){
 				$result['message'] = "User added Successfully";
 			}
 			else{
 				$result['error'] = true;
 				$result['message'] = "Failed to add user!";
 			}
 		}

////Update user
 		if($action == 'update'){
 			//print_r($_POST['data']);exit();
 			$id = $_POST['id'];
 			$name = $_POST['name'];
 			$email = $_POST['email'];
 			$phone = $_POST['phone'];
             //print_r($name);exit();
 			$sql1 = $conn->query("UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id='$id'");
 			echo $sql1;
 			if($sql1){
 				$result['message'] = "User updated Successfully";
 			}
 			else{
 				$result['error'] = true;
 				$result['message'] = "Failed to update user!";
 			}
 		}

////delete user
 		if($action == 'delete'){
 			$id = $_POST['id'];
 			
 
 			$sql = $conn->query("DELETE FROM users WHERE id='$id'");
 			
 			if($sql){
 				$result['message'] = "User Deleted Successfully";
 			}
 			else{
 				$result['error'] = true;
 				$result['message'] = "Failed to Delete user!";
 			}
 		}


 		$conn->close();
 		echo json_encode($result);
?>

