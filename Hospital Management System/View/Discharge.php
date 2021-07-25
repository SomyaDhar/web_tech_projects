<?php
	include '../Partial View/header.php';

    require_once('../model/admitModel.php');

	$patients = getAllPatients();

?>

<!DOCTYPE html>
<html>
<head>
    <script>
        function discharge_ajax()
        {
            
            
            const data = document.getElementById('name1').value;
            const xhttp = new XMLHttpRequest();

            xhttp.open('POST','discharge_ajax_model.php',true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){

                    document.getElementById('div1').innerHTML = this.responseText;
                }
            }
            xhttp.send('name='+data);

        }
		function hide_ajax()
		{
			document.getElementById('div1').innerHTML = "";
		}
    
    </script>
</head>
<body>


<div class="container">

	<div class="card">
		<div class="card-header">
			<h3>Admitted Patient List</h3>
		</div>

		<table class="table table-striped" width="100%"  align="center" border="1">
		<thead class="thead-dark">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Emargencey contact</th>
                <th>Bed Number</th>
				<th>Ward Number</th>
				<th>Date of brith</th>
                <th>Gender</th>
                <th>Action</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($patients as $patient): ?>
				<tr>
					<td><?php echo $patient['id'] ?></td>
					<td><?php echo $patient['name'] ?></td>
					<td><?php echo $patient['emargencey_contact']?></td>
					<td><?php echo $patient['bedNumber'] ?></td>
					<td><?php echo $patient['wardNumber'] ?></td>
					<td><?php echo $patient['dob'] ?></td>
                    <td><?php echo $patient['gender'] ?></td>
					<td>
                    <a href="../Controller/patientDischarge.php?id=<?php echo $patient['id']?>" class="btn btn-sm btn-danger"> Discharge </a>
						
					</td>
				</tr>

			<?php endforeach;; ?>
		</tbody>


	</table>


	</div>
	


</div>

<div class="container">

    <div class="card">
    <form>
		<input type="button" class="btn btn-sm btn-info" name="" value="Show Discharged patients list" onclick="discharge_ajax()">
		<input type="button" class="btn btn-sm btn-primary" name="" value="Hide" onclick="hide_ajax()">
		
        <input type="text" name="name1" id="name1"value="" style=" width: 10px " onkeyup="discharge_ajax()">
		
	</form>
    
    
        <br>
        <div id='div1'> 
        
        </div>
        </div>
</div>
	


	
</body>
</html>