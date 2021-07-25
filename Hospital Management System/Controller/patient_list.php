<?php
	
	function getPatients()
	{
		$patientsArr = file_get_contents('../model/patients.json');
		echo '<pre>';
		var_dump($patientsArr);
		echo '<pre>';

	}

	function getPatientId($id)
	{

	}

	function createPatient($data)
	{

	}

	function updatePatient($data, $id)
	{

	}

	function deleteUser($id)
	{

	}




?>