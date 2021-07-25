<?php
	
	function getPatients()
	{
		return json_decode(file_get_contents('../model/patients.json'), true);
	}

	function getPatientById($id)
	{
		$patients = getPatients();

		foreach ($patients as $patient) {
			if ($patient['id'] == $id) {
				return $patient;
			}
		}

		return null;

	}

	function createPatient($data)
	{

	}
 
	function updatePatient($data, $id)
	{
		$patients = getPatients();
		foreach ($patients as $i => $patient) {
			if($patient['id'] == $id)
			{
				$patients[$i] = array_merge($patient, $data);
			}
		}     

		file_put_contents('../model/patients.json', json_encode($patients));

		

	}

	function deleteUser($id)
	{

	}




?>