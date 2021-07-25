<?php
	
	
    require_once("../Model/db.php");
	
	$conn= getConnection();
	$name= $_REQUEST['name'];
	$sql = "select * from doctor where name like '%{$name}%'";
	$result = mysqli_query($conn, $sql);
    echo $name;

	$response = "<table border=1 width=900px>
					<tr>
						<td>Id</td>
						<td>Doctor Name</td>
						<td>Email</td>
						<td>designation</td>
						<td>Email</td>
					</tr>";
	while ($row=mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['id']}</td>
							<td>{$row['name']}</td>
							<td>{$row['email']}</td>
							<td>{$row['designation']}</td>
							<td>{$row['time']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>