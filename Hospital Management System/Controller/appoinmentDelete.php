<?php

    
    $id1= $_GET['id'];
    $id=$id1;
	require_once('../model/appoinmentModel.php');
    
    
    $status = deleteappoinment($id);
    if($status)
    {
        echo $status;

        header('location: ../View/appointment_list.php');

    }
    else
    {
        echo "delete error" ;
        echo " <a href='../View/appointment_list.php'> <h2> Back to see Reports </h2> </a> ";

    }

?>