<?php
	
require_once('db.php');



function insertService($service){
	$conn = getConnection();
	$sql = "INSERT INTO services VALUES('', '{$service['service_name']}', '{$service['service_price']}')";

	$result = mysqli_query($conn, $sql);
    

	if($result){
		return true;
	}else{
		return false;
	}

}

function getUserbyId($id){
	
	$conn = getConnection();
	$sql = "select * from users where id='{$id}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getAllServices(){

	$conn = getConnection();
	$sql = "select * from services";
	$result = mysqli_query($conn, $sql);
	$services = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($services, $row);
	}
	return $services;
}

function getAllServiceNames(){

	$conn = getConnection();
	$sql = "select service_name from services";
	$result = mysqli_query($conn, $sql);
	$services = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($services, $row);
	}
	return $services;
}

// function updateUser($user){
// 	$conn = getConnection();
// 	$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}', type='{$user['type']}'";
// 	$result = mysqli_query($conn, $sql);
	
// 	if($result){
// 		return true;
// 	}else{
// 		return false;
// 	}
// }

function deleteService($id){
	$conn = getConnection();
	$sql = "delete from users where id='{$id}";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function getServiceByName($username){
	$conn = getConnection();
	$sql = "select * from users where username='{$username}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}   


function checkService($service)
{
	$conn = getConnection();
	$check="SELECT * FROM services WHERE service_name = '$_POST[service_name]'";
	$result = mysqli_query($conn, $check);
	$data = mysqli_fetch_array($result, MYSQLI_NUM);
	if($data[0] > 1) {
		return false;
	}

	else
	{
		return true;
	}
}



?>