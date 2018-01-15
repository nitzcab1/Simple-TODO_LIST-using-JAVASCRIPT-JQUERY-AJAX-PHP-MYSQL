<?php  
	include_once('db_connection.php');
	if(isset($_POST) && $_POST['ptask'] != ''){
	 	$task = $_POST['ptask'];
		$id = $_POST['pid'];
		$query = "UPDATE list set description='$task' WHERE id='$id'";
		 if($conn->query($query) === true){
		 	$data['status'] = 1;
		 	$data['msg'] = "Successfully updated a task";
		 	echo json_encode($data);
		 }else{
		 	echo "Failed to add";
		 }
	 }else{
	 	echo "Invalid Input";
	 } 

?>