<?php 
	 include_once('db_connection.php');
	 if(isset($_POST) && $_POST['ptask'] != ''){
	 	$task = $_POST['ptask'];
		$query = "INSERT INTO list VALUES('','$task')";
		 if($conn->query($query) === true){
		 	$data['status'] = 1;
		 	$data['msg'] = "Successfully added a task";
		 	echo json_encode($data);
		 }else{
		 	echo "Failed to add";
		 }
	 }else{
	 	echo "Invalid Input";
	 } 
?>