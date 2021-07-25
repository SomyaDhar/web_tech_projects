<?php

    
    $id1= $_GET['id'];
    $id=$id1;
    require_once('../model/admitModel.php');
    
    $raw = getAdmittedPatientById($id1);


    $patient = [	
        'pname'	=> $raw['name'], 
        'emargencey_contact' => $raw['emargencey_contact'],
        'email' =>$raw['email'],
        'dob'   => $raw['dob'],
        'address' =>$raw['address'],
        'gender' => $raw['gender'],
        'problems' => $raw['problems'],
        'DischargeDate' => date("Y-m-d")

    ];  

    $status1 = insert_Discharge_Patient($patient);
    require_once('../model/admitModel.php');
    if($status1){

        $status = deleteAdmittedPatients($id);
        if($status)
        {
            echo $status;
    
            header('location: ../View/Discharge.php');
    
        }



    }   
   
    else
    {
        echo "delete error" ;
        echo " <a href='../View/Discharge.php'> <h2> Back to see Reports </h2> </a> ";

    }

?>