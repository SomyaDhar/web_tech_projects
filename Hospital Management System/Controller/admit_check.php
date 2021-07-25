<?php

	
    require_once('../Model/admitModel.php');

	if(isset($_POST['submit']))
    {
        #$users = file_get_contents('../Model/users.json');
        #$users = json_decode($users);
        $gender=[];

		$name = $_POST['username'];
		$phone = $_POST['M_number'];
        $bed_number = $_POST['bed_number'];
        $word_number = $_POST['word_number'];
    
		$email = $_POST['email'];
        $dob = $_POST['dob'];
		$gender = $_POST['gender'];

        $add = $_POST['add'];
		$problems = $_POST['problem'];
        $flag= FALSE;

        echo $gender ;
       

        if($name == "" || $phone == "" || $bed_number == "" || $word_number == "" ||  $email == "" || $dob == "" || $gender == "")
        {
			echo "null value found... in any box";
            #header('location: ../View/login.html');
		}
        if(empty($_POST['gender']))
        {
             echo "<p> Please Select Gender	</p>";
             $flag=True;

        }
        if(empty($_POST['add']))
        {
             echo "<p> Please write  address </p>";
             $flag=True;

        }
        if(empty($_POST['problem']))
        {
             echo "<p> Please write specific problem	</p>";
             $flag=True;

        }
        
        $s_name =str_split($name,1);        

        if (ctype_alnum($name) || in_array('_', $s_name) ||  in_array('-', $s_name) ||  in_array('.',$s_name) )  
        {
		    if(strlen($name)<2)
            {
			    echo "<p> User Name must be greater then 2 letter	</p>";
                $flag=True;
		    }
            echo "User Name Error 	!!! <br>";
            $flag=True;
		
        }
        if(strlen($phone)<11 || !ctype_alnum($phone))
        {
        echo "<p> phone no error    </p>";
        $flag=True;
        }

        if(strlen($bed_number)>1000 || strlen($bed_number)>20)
        {
        echo "<p> minimum bed number is 1000 & ward number is 20   </p>";
        $flag=True;
        }
   
        if ($flag!=True)                                       
        {
        echo"<p> Sucessfully admitted ! ! ! </p>";


            $patient = [	
                'pname'	=> $name, 
                'emargencey_contact' => $phone,
                'bedNumber' => $bed_number,
                'wardNumber' => $word_number,
                'email' => $email,
                'dob'   => $dob,
                'address' => $add,
                'gender' => $gender,
                'problems' => $problems
            ];
            
    
            $status = insertPatient($patient);	
            if($status)
            {
                echo "Patient  admitted successfully!";
                header('location: ../View/Admit_patient.php');
            }
    
            else
            {
                echo "Something is wrong";
            }


        
        }
    }
?>