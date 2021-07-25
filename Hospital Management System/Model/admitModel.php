<?php
	
require_once('db.php');


function insertPatient($patient){
	$conn = getConnection();
	$sql = "INSERT INTO admit_patient VALUES('', '{$patient['pname']}', '{$patient['emargencey_contact']}', '{$patient['bedNumber']}', '{$patient['wardNumber']}', '{$patient['email']}', '{$patient['dob']}', '{$patient['address']}', '{$patient['gender']}', '{$patient['problems']}')";

	$result = mysqli_query($conn, $sql);
    

	if($result){
		return true;
	}else{
		return false;
	}

}

function getAllPatients(){

	$conn = getConnection();
	$sql = "select * from admit_patient";
	$result = mysqli_query($conn, $sql);
	$services = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($services, $row);
	}
	return $services;
}

function deleteAdmittedPatients($id)
{
	$conn = getConnection();
	$sql = "delete from admit_patient where id='{$id}'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}
function getAdmittedPatientById($id){
	
	$conn = getConnection();
	$sql = "select * from admit_patient where id='{$id}'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function insert_Discharge_Patient($patient){
	$conn = getConnection();
	$sql = "INSERT INTO backup_patients VALUES('', '{$patient['pname']}', '{$patient['emargencey_contact']}', '{$patient['email']}', '{$patient['dob']}', '{$patient['address']}', '{$patient['gender']}', '{$patient['problems']}', '{$patient['DischargeDate']}')";

	$result = mysqli_query($conn, $sql);
    

	if($result){
		return true;
	}else{
		return false;
	}

}
####################################################33333333333333333


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


function getServiceByName($username){
	$conn = getConnection();
	$sql = "select * from users where username='{$username}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}





?>