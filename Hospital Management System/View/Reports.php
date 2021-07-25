<?php
	include '../Partial View/header.php';

	require_once('../model/reportModel.php');

    $reportsArr =  getAllrepots();

?>
<html>
<head>
    <title> Patients Reports  </title>
	
</head>
<body>
<div  align="right">
    <a href="home.php">Back</a> | 
    <a  href="../controller/logout.php"> logout</a> 
	<script type="text/javascript" src="Delivered.js"></script> 
</div>
<div class="container">

	<div class="card">
		<div class="card-header"align="center">
			<h2>Patient Reports Information </h2>
		</div>

		<table class="table table-striped" width="100%"  align="center" border="1">
		<thead class="thead-dark">
			<tr >
				<th>ID</th>
				<th width="15%" >Patient Name</th>
				<th>Mobile No</th>
				<th>Email</th>
				<th>Test Name</th>
				<th>Report Status </th>
				<th>Payment Status</th>
				<th>Actions</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($reportsArr as $patient): ?>
				<tr>
					<td><?php echo $patient['id'] ?></td>
					<td ><?php echo $patient['PatientName'] ?></td>
					<td><?php echo $patient['phone']?></td>
					<td><?php echo $patient['email'] ?></td>
					<td><?php echo $patient['TestName'] ?></td>
					<td><?php echo $patient['ReportStatus'] ?></td>
					<td><?php echo $patient['PaymentStatus'] ?></td>
					<td>
						<a href="../Resources/reports/<?php echo $patient['id']?>.pdf" terget ="_thapa"class="btn btn-sm btn-info"> View </a> | 
						<a href="../Controller/Delivered.php?id=<?php echo $patient['id']?>" class="btn btn-sm btn-primary" value="" >Delivered</a> |
						<a href="../Controller/reportDelete.php?id=<?php echo $patient['id']?>" class="btn btn-sm btn-danger"> Delete </a>
					</td>
				</tr>

			<?php endforeach;; ?>
		</tbody>


	</table>
	<a href="cookiesView.php" class="btn btn-sm btn-primary"> view recent deleted report information</a>

	<p id ="myid"> </p>



	</div>
	


</div>


	


	
</body>
</html>