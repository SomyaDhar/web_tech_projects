<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: login.html');
	}
?>
<style>
body {
  background-image: url('../Resources/img/6.jpg');
  background-repeat: no-repeat;
  background-size: 100% 100%;
}
</style>

	<html>
	<head>
		<title> Home </title>
	</head>
	<body >
		<table border="0" width="90%" align="center">
			<tr>
				<td width="30px">
					<!--<img src="../Resources/img/01.png" width="250px" height="200px">-->
				</td>
				<th colspan="2"> <h1> Welcome Receptionist home </h1></th>
				<td align="right">
					<a href="../controller/logout.php"><h2> Logout </h2></a>
				</td>
			</tr>

			<tr align="left">
				<td width="5%">
					<!--<img src="../Resources/img/02.jpg" width="200px" height="300px">-->
				</td>
				

				<td> 
					<h2> Services : </h2> 
					<ul>
						<li><a href="patient_registration.php"><h2>Register patients </h2></a> </li>
						<li><a href="Admit_patient.php"><h2>Admit Patients </h2></a></li>
						<li><a href="patients.php"><h2>Patients Information</h2></a></li>
						<li><a href="doctor_List.php"><h2>Doctor Information</h2></a> </li>
						<li><a href="Appointments.php"><h2>Appointments</h2></a></li>
						<li><a href="Reports.php"><h2>Reports</h2></a> </li>
						<li><a href="addBill.php"><h2>Billing Information</h2></a> </li>
						<li><a href="services.php"><h2>Services Information</h2></a> </li>
						<li><a href="Discharge.php"><h2>Discharge Admited Patients & view </h2></a> </li>
						<li><a href="about.html"><h2>About</h2></a> </li>
					</ul>
				</td>
				<td width="30%"><h2>Important Links :</h2>
					<ul>
						<li><a href="https://www.google.com" target="_blank"><h2> Google </h2> </a></li>
						<li><a href="https://dghs.gov.bd" target="_blank">   <h2> DGHS </h2></a></li>
						<li><a href="https://corona.gov.bd" target="_blank"> <h2> Covid-19 Update </h2></a></li>
						<li><a href="https://bma.org.bd" target="_blank">    <h2> bd medical association </h2></a></li>
					</ul>
				</td>			
			</tr>
			<tr align="center" >
				<td colspan="3" height="50px">
					<br><br><br>   Copyright@ 2021
				</td>
			</tr>

			
		</table>

	</body>
	</html>