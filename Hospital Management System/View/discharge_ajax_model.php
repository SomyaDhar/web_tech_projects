<?php
	
	
    require_once("../Model/db.php");
	
	$conn= getConnection();
	$name= $_REQUEST['name'];
	$sql = "select * from backup_patients where name like '%{$name}%'";
	$result = mysqli_query($conn,$sql);
    echo $name;

	$response1 = "<table class=table table-striped border=1 width=1140px >
					<thead class=thead-dark style=font-weight:bold;>
						<tr>
							<td>Id</td>
							<td>Patient Name</td>
							<td>Emargencey contact </td>
							<td>Email</td>
							<td>Datee of birth </td>
							<td>Address</td>
							<td>Gender</td>
							<td>Problems</td>
							<td>DischargeDate</td>
							
						</tr>
					</thead>";

	while ($row=mysqli_fetch_assoc($result)) {
		$response1 .= 	"
						<tbody>
							<tr>
								<td>{$row['id']}</td>
								<td>{$row['name']}</td>
								<td>{$row['emargencey_contact']}</td>
								<td>{$row['email']}</td>
								<td>{$row['dob']}</td>
								<td>{$row['address']}</td>
								<td>{$row['gender']}</td>
								<td>{$row['problems']}</td>
								<td>{$row['DischargeDate']}</td>
							</tr>
						</tbody>";
	}

	$response1 .= "</table>";
	
	echo $response1;	
?>