"use strict"

function doctor_ajax()
{
	
	
	const data = document.getElementById('name').value;
	const xhttp = new XMLHttpRequest();

	xhttp.open('POST','doctor_list_model.php',true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){

			document.getElementById('table').innerHTML = this.responseText;
		}
	}
	xhttp.send('name='+data);

}