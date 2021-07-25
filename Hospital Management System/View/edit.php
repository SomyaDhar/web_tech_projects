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

	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		updatePatient($_POST, $id);

		$fileName = $_FILES['picture']['name'];
		$dotPosition = strpos($fileName, ".");
		$extension = substr($fileName, $dotPosition+1);

		if(isset($_FILES['picture'])){
			move_uploaded_file($_FILES['picture']['tmp_name'], "../Resources/Images/$id.$extension");
		}

		header("Location: patients.php");
	}



	
?>

<div class="container">


	<div class="card">
		<div class="card-header">
			<h3>Update Patient</h3>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data" action="">
					<div class="form-group">
						<label>ID</label>
						<input name="id" value="<?php echo $patient['id'] ?>" class="form-control" readonly>
					</div>

					<div class="form-group">
						<label>Name</label>
						<input name="fName" value="<?php echo $patient['fName'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Name</label>
						<input name="lName" value="<?php echo $patient['lName'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input name="email" value="<?php echo $patient['email'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Phone No.</label>
						<input name="phone" value="<?php echo $patient['phone'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Complain</label>
						<input name="complain" value="<?php echo $patient['complain'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Picture</label>
						<input type="file" name="picture">
					</div>

					<button class="btn btn-success">Submit</button>
			</form>
		  </div>
		</div>
		
	</div>
	
	
</div>