<?php
	include '../Partial View/header.php';

	require_once('../model/appoinmentModel.php');

    $appoArr =  getAllappoinment();

?>
<html>
<head>
    <title> Appoinment List  </title>
	<script>
	      function Alert_delet(){
			  return confirm("Are you confirm to delete it ?");
			  
		  }
	</script>	
</head>
<body>
<div  align="right">
    <a href="Appointments.php">Back</a> | 
    <a  href="../controller/logout.php"> logout</a>
</div>
<div class="container">

	<div class="card">
		<div class="card-header"align="center">
			<h2>Appoinment List Information </h2>
		</div>

		<table class="table table-striped" width="100%"  align="center" border="1">
		<thead class="thead-dark">
			<tr>
				<th>ID</th>
				<th width="15%" >Patient Name</th>
				<th>Doctor Name</th>
				<th>Actions</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($appoArr as $patient): ?>
				<tr>
					<td><?php echo $patient['Id'] ?></td>
					<td ><?php echo $patient['Patient Name'] ?></td>
					<td><?php echo $patient['Doctor Name']?></td>
					<td>
						<a href="../Controller/appoinmentDelete.php?id=<?php echo $patient['Id']?>" class="btn btn-sm btn-danger" onclick="return Alert_delet();"> Delete </a>
					</td>
				</tr>

			<?php endforeach;; ?>
		</tbody>


	</table>
	
	</div>
	


</div>


	


	
</body>
</html>