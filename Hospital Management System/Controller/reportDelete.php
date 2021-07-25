<?php

    
    $id1= $_GET['id'];
    $id=$id1;
	require_once('../model/reportModel.php');
    
    $raw = getReportById($id1);

    echo  $raw['PatientName'];


    setcookie('p_id', $raw['id'], time() + (86400 * 30), "/");
    setcookie('p_name', $raw['PatientName'], time() + (86400 * 30), "/");
    setcookie('p_phone', $raw['phone'], time() + (86400 * 30), "/");
    setcookie('p_TestName', $raw['TestName'], time() + (86400 * 30), "/");
    setcookie('p_ReportStatus', $raw['ReportStatus'], time() + (86400 * 30), "/");
    setcookie('p_Payment', $raw['PaymentStatus'], time() + (86400 * 30), "/");


	require_once('../model/reportModel.php');
    
    $status = deleteReport($id);
    if($status)
    {
        echo $status;

        header('location: ../View/Reports.php');

    }
    else
    {
        echo "delete error" ;
        echo " <a href='../View/Reports.php'> <h2> Back to see Reports </h2> </a> ";

    }

?>