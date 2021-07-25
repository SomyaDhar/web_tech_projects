<?php
	include '../Partial View/header.php';
	require 'patient_list.php';

	$patients = getPatients();

?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>


<div class="container">

	<div class="card">
		<div class="card-header">
			<h3>Patient List</h3>
		</div>

		<table class="table table-striped" width="100%"  align="center" border="1">
		<thead class="thead-dark">
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Complain</th>
				<th>Actions</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($patients as $patient): ?>
				<tr>
					<td><?php echo $patient['id'] ?></td>
					<td><?php echo $patient['fName'] ?></td>
					<td><?php echo $patient['lName']?></td>
					<td><?php echo $patient['email'] ?></td>
					<td><?php echo $patient['phone'] ?></td>
					<td><?php echo $patient['complain'] ?></td>
					<td>
						<a href="view.php?id=<?php echo $patient['id']?>" class="btn btn-sm btn-info">View</a>
						<a href="edit.php?id=<?php echo $patient['id']?>" class="btn btn-sm btn-primary">Edit</a>
						
					</td>
				</tr>

			<?php endforeach;; ?>
		</tbody>


	</table>


	</div>
	


</div>


	


	
</body>
</html>