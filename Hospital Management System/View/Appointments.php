<?php
    $title = "User List Page";
   //session_start();
    //$_SESSION['flag'] = true;
    //include('header.php');

?>

 

    <a href="home.php">Back</a> |
    <a href="../controller/logout.php">logout</a>    
    <br><br>


    
    <h1> Appoinments list</h1>

 

    <table border="1" width="100%">
        <tr>
            <th>DOCTOR NAME</th>
            <th>Count </th>
            <th>Actions </th>
        </tr>
        <?php

 

        $userArr = file_get_contents('../model/appoinment.json');
        $userArr = json_decode($userArr);
        foreach($userArr as $user)
        {
            
            echo "<tr>";
            
            
                 echo "<td>"; echo $user->name;  echo "</td>";
                 echo "<td>"; echo $user->count; echo "</td>"; 
            echo '
            
                <td>
                    <a href="appointment_list.php?id=1"  > Edit / View </a> 
                </td>
            </tr>
            
            
            ';

 

        }    

 

        ?>

 

        
        
    </table>

 
<!-- 
<?php
    include('footer.php');
?> -->