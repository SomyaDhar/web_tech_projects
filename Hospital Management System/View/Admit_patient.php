<html>
<head>
	<title>Admit Patient in hospital</title>

<script>

function bedno_validation(){
'use strict';
let bed_name = document.getElementById("bed_number");
let bed_value = document.getElementById("bed_number").value;

if(bed_value <1 || bed_value>1000)
{
document.getElementById('bed_err').innerHTML = 'Value must not be less than 1  and greater than 1000';
bed_name.focus();
document.getElementById('bed_err').style.color = "#FF0000";
}
else
{
document.getElementById('bed_err').innerHTML = 'Valid bed number';
document.getElementById('bed_err').style.color = "#00AF33";
}
}

function wordno_validation(){
'use strict';
let word_name = document.getElementById("word_number");
let word_value = document.getElementById("word_number").value;

if(word_value <1 || word_value>50)
{
document.getElementById('word_err').innerHTML = 'Value must not be less than 1  and greater than 50';
word_name.focus();
document.getElementById('word_err').style.color = "#FF0000";
}
else
{
document.getElementById('word_err').innerHTML = 'Valid word number';
document.getElementById('word_err').style.color = "#00AF33";
}
}

function phoneno_validation(){
'use strict';
let phone_no= document.getElementById("M_number");
let phone_value = document.getElementById("M_number").value;
let phone_length=phone_value.length;
if(phone_length<11)
{
document.getElementById('phone_err').innerHTML = 'phone number must be at least 11 chracters long';
phone_no.focus();
document.getElementById('phone_err').style.color = "#FF0000";
}
else
{
document.getElementById('phone_err').innerHTML = 'phone no given ';
document.getElementById('phone_err').style.color = "#00AF33";
}
}


function username_validation(){
'use strict';
let username_name = document.getElementById("username");
let username_value = document.getElementById("username").value;
let username_length = username_value.length;

if(username_length < 4 )
{
document.getElementById('name_err').innerHTML = 'Username must be 4 chracters ';
username_name.focus();
document.getElementById('name_err').style.color = "#FF0000";
}
else
{
document.getElementById('name_err').innerHTML = 'Valid username';
document.getElementById('name_err').style.color = "#00AF33";
}
}


function email_validation(){
'use strict';
var email_name = document.getElementById("email");
var email_value = document.getElementById("email").value;
var email_length = email_value.length;
if( email_length < 5)
{
document.getElementById('email_err').innerHTML = 'This is not a valid email ';
email_name.focus();
document.getElementById('email_err').style.color = "#FF0000";
}
else
{
document.getElementById('email_err').innerHTML = 'Valid email format';
document.getElementById('email_err').style.color = "#00AF33";
}
}


function gender_validation(){
'use strict';
if ( (document.getElementById("gender1").checked === false) && (document.getElementById("gender2").checked === false )  && (document.getElementById("gender3").checked === false))
{
document.getElementById('gender_err').innerHTML = 'Please slect a geneder.';
document.getElementById('gender_err').style.color = "#FF0000";
document.getElementById("gender1").checked = true;
}
else
{
document.getElementById('gender_err').innerHTML = 'Gender selected';
document.getElementById('gender_err').style.color = "#00AF33";
}
}

</script>
</head>
<body  bgcolor="PaleTurquoise">

	<form method="post" action="../controller/admit_check.php">
		<fieldset width : "30px" align="center">
			

			<table   >
                <tr>
					<td colspan="2"> <h2> Patient addmission  </h2></td>
					
				</tr>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="username" id="username"  placeholder="username" onBlur="username_validation();"/> <span id="name_err"></span></td>
				</tr>
				<tr>
					<td>Emargencey contact: </td>
					<td> <input type="text" name="M_number" id="M_number"  placeholder="01xxxxxxxxx"onBlur="phoneno_validation();"/> <span id="phone_err"></span></td>
				</tr>
                <tr>
					<td> Bed Number: </td>
					<td> <input type="number" name="bed_number" id="bed_number" onBlur="bedno_validation();"/><span id="bed_err"></span> </td>
				</tr>
                <tr>
					<td> Ward Number: </td>
					<td> <input type="number" name="word_number" id="word_number" onBlur="wordno_validation();"/><span id="word_err"></span></td>
				</tr>

				<tr>
					<td>email: </td>
					<td> <input type="email" name="email" id="email" onBlur="email_validation();" /> <span id="email_err"></span></td>
				</tr>
				<tr>
					<td>DOB: </td>
					<td> <input type="date" name="dob" id="dob" /> <span id="dob_err"></span></td>
				</tr>
				<tr>
					<td>Address: </td>
					<td> <textarea name="add" id="add"></textarea> <span id="add_err"></span> </td>
				</tr>
				<tr>
					<td>Gender: </td>
					<td>  
						<input type="radio" name="gender" id="gender1"  value="Male" onBlur="gender_validation();"> Male
						<input type="radio" name="gender" id="gender2"  value="Female" onBlur="gender_validation();"> Female
						<input type="radio" name="gender" id="gender3"  value="Other" onBlur="gender_validation();"> Other 
						<span id="gender_err"></span>
					</td>
				</tr>
				<tr>
                    <td>Problems : </td>
					<td> <textarea name="problem" id="problem"></textarea> </td>
					
				</tr>
				<tr>
					<td colspan="2">  
						<input type="submit" name="submit" id="submit" value="Submit"> 
						<input type="reset" name="click" value="reset">	
					</td>
				</tr>
			</table>		
		</fieldset>
	</form>
</body>
</html>