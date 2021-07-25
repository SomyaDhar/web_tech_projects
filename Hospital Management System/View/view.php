<?php
	include '../Partial View/header.php';
	require 'patient_list.php';


	if(!isset($_GET['id']))
	{
		echo "No Paitent Found!";
		exit;

	}

	$id = $_GET['id'];
	$patient = getPatientById($id); 
	if(!$patient)
	{
		include "../Partial View/not_found.php";
		exit;
	}

?>





<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

	<title>Patient List</title>
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

	<!-- jQuery library -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 -->
	<!-- Latest compiled JavaScript -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 -->
</head>
<body>

	<div class="card">
		<div class="card-header">
			<h3>Patient Profile</h3>
		</div>

		<table class="table">
			<tr>
				<th>First Name: </th>
				<td><?php echo $patient['fName']?></td>
			</tr>

			<tr>
				<th>Last Name: </th>
				<td><?php echo $patient['lName']?></td>
			</tr>

			<tr>
				<th>Email: </th>
				<td><?php echo $patient['email']?></td>
			</tr>

			<tr>
				<th>Phone: </th>
				<td><?php echo $patient['phone']?></td>
			</tr>

			<tr>
				<th>Complain: </th>
				<td><?php echo $patient['complain']?></td>
			</tr>
		</table>
	</div>

	

</body>
</html>

