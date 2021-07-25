<?php

    
    $id1= $_GET['id'];
    $id=$id1;
	require_once('../model/reportModel.php');
    
    
    $status=updateReportById($id);
    if($status)
    {
        echo $status;

        header('location: ../View/Reports.php');

    }
    else
    {
        echo " error" ;
        echo " <a href='../View/Reports.php'> <h2> Back to see Reports </h2> </a> ";

    }

?>