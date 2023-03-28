<?php

    session_start();
    include '../model/database_connection.php';
    if($con->connect_error)
        die( "Connection failed:".$conn->connect_error);
    else{
        $q="(select * from enroll where Instructor_ID=
        (select Instructor_ID from instructor where Name='".$_SESSION["name"]."'))";
        //$q="select * from course";
        $result=$con->query($q);
        if($result->num_rows>=0)
        {
             echo $result->num_rows;
        }
        else
        {
            echo "No Data";
        }
        
          
        
    }


 
?>