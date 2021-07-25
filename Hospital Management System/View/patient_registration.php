<!DOCTYPE html>
<html>
<head>
    <title>Patient Registration</title>
    <script>
	"use strict"
	
	function validateForm()
	{
        let f1= false;
	   let name= document.forms["myForm"] ["username"].value;
	   if(name=="")
	   {
        document.getElementById('name_err').innerHTML = 'User name must  given';
        document.getElementById('name_err').style.color = "#FF0000";
		f1= true;
	   
	   }
	   
	  let email= document.forms["myForm"] ["email"].value;
	   if(email=="" || email.length <=5)
	   {
        document.getElementById('email_err').innerHTML = 'User email must be valid';
        document.getElementById('email_err').style.color = "#FF0000";
        f1= true;
	   
	   }
       let phone= document.forms["myForm"] ["phone"].value;
	   if(phone=="" || phone.length <=10)
	   {
        document.getElementById('phone_err').innerHTML = 'phone no  must be valid';
        document.getElementById('phone_err').style.color = "#FF0000";
        f1= true;
	   
	   }
       let dd= document.forms["myForm"] ["dd"].value;
       let month= document.forms["myForm"] ["month"].value;
       let year= document.forms["myForm"] ["year"].value;
	   if(dd=="" || dd >=32 || month==""  || year=="" || month>12 || year.length >4)
	   {
        document.getElementById('dob_err').innerHTML = 'DoB  must be valid';
        document.getElementById('dob_err').style.color = "#FF0000";
        f1= true;
	   
	   }
       if ( (document.getElementById("male").checked === false) && (document.getElementById("female").checked === false )  && (document.getElementById("other").checked === false))
        {
            document.getElementById('gender_err').innerHTML = 'Please slect a geneder.';
            document.getElementById('gender_err').style.color = "#FF0000";
            f1= true;
        } 

        let reference= document.forms["myForm"] ["reference"].value;
	   if(reference=="")
	   {
        document.getElementById('reference_err').innerHTML = 'reference must be given';
        document.getElementById('reference_err').style.color = "#FF0000";
        f1= true;
	   
	   }
       let Purpose= document.forms["myForm"] ["Purpose"].value;
	   if(Purpose=="" || Purpose.length <=3)
	   {
        document.getElementById('Purpose_err').innerHTML = 'Purpose must be given with min 4 char ';
        document.getElementById('Purpose_err').style.color = "#FF0000";
        f1= true;
	   
	   } 

       if(f1)
       {
        return false;
       }	   
	   
	   
	}
		
	</script>    
</head>
<body bgcolor="PaleGreen" >
    <div id = "frm">
 
        <form id="myForm" name="myForm" method="post" onsubmit="return validateForm();" action="../controller/registration_check.php">
            <table width="70%" align="center" border="0">

                <tr >
                    <th colspan="2">
                       <h1>Patient Registration</h1> 
                       <a href="home.php" align="right" > <h3> Home   </h3></a>
                    </th>
                    


                </tr>


                <tr height="40px">
                    <td> <b>* Name: </b> </td>
                    <td><input type="text" id="username" name="username" placeholder="Full Name"> <span id="name_err"></span></td>
                </tr>


 
 
                <tr height="40px">
                    <td> <b>* Email Address: </b> </td>
                    <td><input type="email" id="email" name="email" placeholder="Email Address"><span id="email_err"></span></td>
                </tr >

                 <tr height="40px">
                    <td> <b> * Phone No : </b>  </td>
                    <td><input type="text" id="phone" name="phone" placeholder="01XXXXXXXXX"><span id="phone_err"></span></td>
                </tr>

                 <tr height="40px">
                    <td><b>* Date of Birth: </b></td>
                    <td><input size="2" type="text" id="dd" name="day" placeholder="dd">
                        /<input size="2" type="text" name="month" placeholder="mm">
                        /<input size="4" type="text" name="year" placeholder="yyyy">

                        (dd/mm/yyyy)
                    <span id="dob_err"></span>    
                        
                    </td>
                </tr>
 
                
 
                <tr height="40px">
                    <td><b> Blood Group:</b> </td>
                    <td>
                    <select id="bg" name="bg">
                        <option value="def">--Select Group--</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="B+">B+</option>
                        <option value="B+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>

                    </select>
                    </td>
                </tr>
 
                <tr height="40px">
                    <td><b>* Gender: </b></td>
                    <td><input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other"><label for="other">Other</label>
                    <span id="gender_err"> </span>
                
                   
                </tr>
 
                <tr height="40px">
                    <td><b>Medical History:</b>  </td>
                    <td><input type="checkbox" id="1" name="med_history[]" value="Diabetes">
                        <label for="1">Diabetes</label>

                        <input type="checkbox" id="2" name="med_history[]" value="Allergies">
                        <label for="2">Allergies</label>

                        <input type="checkbox" id="3" name="med_history[]" value="Taiphoid">
                        <label for="3">Taiphoid</label>

                        <input type="checkbox" id="4" name="med_history[]" value="High Blood Pressure">
                        <label for="4">High Bloood Pressure</label>

                         <input type="checkbox" id="4" name="med_history[]" value="Low Blood Pressure">
                        <label for="5">Low Blood Pressure</label>

                    </td>

                </tr>

                 <tr height="40px">
                    <td><b>* Reference</b></td>
                    <td><input type="text" id="reference" name="reference" placeholder=""><span id="reference_err"> </span></td>
                </tr>
 
                <tr height="40px">
                    <td><b>Photo:</b> </td>
                    <td><input type="file" id="upload" name="profile_pic"></td>
                </tr>

                <tr height="40px">
                    <td><b>* Purpose:</b> </td>
                    <td><input type="text" id="Purpose" name="Purpose" placeholder="test/appoinment"><span id="Purpose_err"> </span></td>
                </tr>

                <tr height="40px">
                    <td colspan="3">
                        * Default password will be applied patient can change .
                    </td>
                    
                </tr>
 
                <tr align="left" height="40px">

                    <td colspan="2">
                        <input type="Submit" name="submit" value="Submit">
                        <input type="Reset" name="btn" value="Reset">
                    </td>
                    
                </tr>


 
            </table>
        </form>
 
    </div>
 
</body>
</html>