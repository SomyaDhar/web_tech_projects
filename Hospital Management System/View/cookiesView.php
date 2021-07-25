<html>
<h1> view recent deleted report information </h1>
<div align="left">
<?php

echo "<h3>id : </h3> ";
print_r($_COOKIE['p_id']);

echo "<h3>PatientName:</h3> ";
print_r($_COOKIE['p_name']);
echo "<h3>phone:</h3> ";
print_r($_COOKIE['p_phone']);
echo "<h3>TestName:</h3> ";
print_r($_COOKIE['p_TestName']);
echo "<h3>ReportStatus :</h3> ";
print_r($_COOKIE['p_ReportStatus']);
echo "<h3>PaymentStatus:</h3> ";
print_r($_COOKIE['p_Payment']);

?>
</div>
</html>
