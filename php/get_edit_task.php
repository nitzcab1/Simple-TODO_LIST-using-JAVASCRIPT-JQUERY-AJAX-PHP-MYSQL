<?php  
	include_once('db_connection.php');
	if(isset($_POST) && $_POST['pid'] != ''){
		$id = $_POST['pid'];
		$query2 = "SELECT * FROM list WHERE id='$id'";
		$result = $conn->query($query2);
		$arr;
		$i = 0;
		$row = $result->fetch_array();
		$arr[$i]['id'] = $row['id'];
		$arr[$i]['description'] = $row['description'];
		$data['data'] = $arr;
		echo json_encode($data);		
		}else{
			$data['data'] = array('msg' => "No records", 'status' => 0);
			echo json_encode($data);
		}
	
?>