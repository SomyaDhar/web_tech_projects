<?php
	
require_once('db.php');


function getAllappoinment(){

	$conn = getConnection();
	$sql = "select * from appoinments_list";
	$result = mysqli_query($conn, $sql);
	$services = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($services, $row);
	}
	return $services;
}

function deleteappoinment($id)
{
	$conn = getConnection();
	$sql = "delete from appoinments_list where id='{$id}'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}




?>