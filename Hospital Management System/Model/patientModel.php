<?php
	
require_once('db.php');


function insertPatient($patient){
	$conn = getConnection();
	$sql = "INSERT INTO patients1 VALUES('', '{$patient['fName']}',  '{$patient['email']}', '{$patient['phone']}', '{$patient['password']}', '{$patient['dob']}', '{$patient['blood_group']}', '{$patient['gender']}', '{$patient['med_history']}', '{$patient['reference']}', '{$patient['profile_picture']}', '{$patient['Purpose']}' )";

	$result = mysqli_query($conn, $sql);
    

	if($result){
		return true;
	}else{
		return false;
	}

}

# .......................................................

function getPatientById($id){
	
	$conn = getConnection();
	$sql = "select * from patients where id='{$id}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getAllPatients(){

	$conn = getConnection();
	$sql = "select * from patients";
	$result = mysqli_query($conn, $sql);
	$services = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($services, $row);
	}
	return $services;
}

function getAllPatientNames(){

	$conn = getConnection();
	$sql = "select fName from patients";
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

function uploadImage($file)
{
	$img_name = $file['profile_pic']['name'];
	$img_size = $file['profile_pic']['size'];
	$file_type = $file['profile_pic']['type'];

	if($file_type == 'image/jpeg')
	{
		return $file;
	}

}




?>