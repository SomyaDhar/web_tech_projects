<?php

	session_start();
    require_once('../Model/loginModel.php');
    $userArr =  getAlluser();

	if(isset($_POST['submit'])){
        


		$email = $_POST['email'];
		$password = $_POST['password'];

		if($email == "" || $password == "")
        {
			echo "null input...";
            #header('location: ../View/login.html');
		}
        else
        {


            foreach($userArr as $user)
            {
                if($user['Email'] == $email && $user['Password'] == $password ){
                    $_SESSION['flag'] = true;
                    header('location: ../View/home.php');
                    break;
                }
                else{
                    echo "<h1> Invalid email or password </h1>";
                    #break;
                }
            }

			
		}
	}


?>