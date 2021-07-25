<?php
 session_start();
 require_once('../Model/patientModel.php');

    $name = $_POST['username'];
    $email = $_POST['email'];
    $gender=$_POST['gender'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $phone = $_POST['phone'];
    $Purpose = $_POST['Purpose'];

    $flag=False;

    if(isset($_POST['submit']))
    {
        if(empty($_POST['username']))                        
        {
            echo "<p> Please Enter Name	</p>";
            $flag=True;

         }
   
        if(empty($_POST['email']))
        {
            echo "<p> Please Enter  Email	</p>";
            $flag=True;

        }
        if(empty($_POST['phone']))
        {
            echo "<p> Please Enter Phone No	</p>";
            $flag=True;

        }
        

        if(empty($_POST['day']))
        {
            echo "<p> Please Enter today Date	</p>";
            $flag=True;

        }
        if(empty($_POST['month']))
        {
            echo "<p> Please Enter  Month</p>";
            $flag=True;

        }
        if(empty($_POST['year']))
        {
             echo "<p> Please Enter Year	</p>";
             $flag=True;

        }
        if(empty($_POST['bg']))
        {
             echo "<p> Please Select Blood Group	</p>";
             $flag=True;

        }
        if(empty($_POST['gender']))
        {
             echo "<p> Please Select Gender	</p>";
             $flag=True;

        }
        if(empty($_POST['reference']))
        {
             echo "<p> Please  Enter reference	</p>";
             $flag=True;

        }
        if(empty($_POST['Purpose']))
        {
             echo "<p> Please Enter Purpose	</p>";
             $flag=True;

        }


    $s_email =str_split($email,1);          

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
       

        if ( !in_array('@',$s_email) || !in_array('.',$s_email)  )   
        {
             echo "<p> Please Enter a valid email with @ and .	</p>";
             $flag=True;

        }

       
        if(strlen($day)<2 || $day>32)
        {
        echo "<p> Day  Error    </p>";
        $flag=True;
        }

    

        if(strlen($month)<2 || $month>12)
        {
                echo "<p> Month Error    </p>";
                $flag=True;
        }

    

        if(strlen($year)<4 ||strlen($year)>4)
        {
        echo "<p> Year Error    </p>";
        $flag=True;
        }

        if(strlen($phone)<11 || !ctype_alnum($phone))
        {
        echo "<p> phone no error    </p>";
        $flag=True;
        }
   
        if ($flag!=True)                                       
        {
        echo"<p> Sucessfully Registered ! ! ! </p>";

        $dob = $day."-".$month."-".$year;

        $blood_group = $_POST['bg'];
        $reference = $_POST['reference'];


        if(isset($_FILES['profile_pic']))
            {
                $profile_pic = uploadImage($_FILES['profile_pic']);
            }




            if(isset($_POST['med_history']))
            {
                $med_arr = $_POST['med_history'];
                $med_hisory = "";
                foreach($med_arr as $result)
                {
                    $med_hisory .= $result.", ";
                }
            }
            else
            {
                $med_hisory = null;
            }

           
            $password="123"  ;
            

            $patient = [	
                'fName'	=> $name, 
                'email' => $email,
                'phone' => $phone,
                'password' => $password,
                'dob'   => $dob,
                'blood_group' => $blood_group,
                'gender' => $gender,
                'med_history' => $med_hisory,
                'reference' => $reference,
                'profile_pic' => $profile_pic,
                'Purpose' => $Purpose
                ];
    
            
    
            $status = insertPatient($patient);	
            if($status)
            {
                echo "Patient added successfully!";
                header('location: ../View/patient_registration.php');
            }
    
            else
            {
                echo "Something is wrong";
            }

        }
}
?>