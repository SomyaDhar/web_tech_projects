<?php
	
require_once('db.php');


function getAllrepots(){

	$conn = getConnection();
	$sql = "select * from reports_info";
	$result = mysqli_query($conn, $sql);
	$services = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($services, $row);
	}
	return $services;
}

function deleteReport($id)
{
	$conn = getConnection();
	$sql = "delete from reports_info where id='{$id}'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function getReportById($id){
	
	$conn = getConnection();
	$sql = "select * from reports_info where id='{$id}'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function updateReportById($id)
{
	$conn = getConnection();
	$sql = "update reports_info set ReportStatus='Delivered',PaymentStatus='{Clear}' where id='{$id}'";
	$result = mysqli_query($conn, $sql);
	if($result){
		return true;
	}else{
	return false;
 	}
}


?>