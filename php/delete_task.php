<?php  
	include_once('db_connection.php');
	if(isset($_GET) && $_GET['pid'] != ''){
	 	$id = $_GET['pid'];
		$query = "DELETE FROM list WHERE id='$id'";
		 if($conn->query($query) === true){
		 	$data['status'] = 1;
		 	$data['msg'] = "Successfully deleted a task";
		 	echo json_encode($data);
		 }else{
		 	echo "Failed to add";
		 }
	 }else{
	 	echo "Invalid Input";
	 } 

?>