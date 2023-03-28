<?php

    session_start();
    include '../model/database_connection.php';
    if($con->connect_error)
        die( "Connection failed:".$conn->connect_error);
    else{
        $q="(select * from course where Course_ID  in(select Course_ID from enroll where Instructor_ID=
        (select Instructor_ID from instructor where Name='".$_SESSION["name"]."')))";
        //$q="select * from course";
        $result=$con->query($q);
        $output='<a href="enroll_courses.php"><table border="5" > <tr><th>Course_ID</th> <th>Course_Name</th><th>Duration</th><th>Price</th></tr>';
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                $output.='<tr><td>'.$row["Course_ID"].'</td><td>'.$row["Course_Name"].'</td><td>'.$row["Duration"].'</td><td>'.$row["Price"].'</td></tr>';
            }
            $output.='</table></a>';
            echo $output;
        }
        else
            echo "No data";
    }


 
?>