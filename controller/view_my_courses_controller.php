<?php

    session_start();
    include '../model/database_connection.php';
    if($con->connect_error)
        die( "Connection failed:".$conn->connect_error);
    else{
        // $q="(select * from student where Student_ID  in(select Student_ID from enroll where Instructor_ID=
        // (select Instructor_ID from instructor where Name='".$_SESSION["name"]."')))";
        $q="(select * from enroll,student where enroll.Student_ID=student.Student_ID and Instructor_ID=
        (select Instructor_ID from instructor where Name='".$_SESSION["name"]."'))";
        //$q="select * from course";
        $result=$con->query($q);
        $output='<table border="5"> <tr><th>Student_ID</th> <th>Student_Name</th><th>Username</th><th>Password</th><th>Email_Address</th><th>Phone_Number</th><th>Address</th><th>Course_ID</th></tr>';
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                $output.='<tr><td>'.$row["Student_ID"].'</td><td>'.$row["Student_Name"].'</td><td>'.$row["Username"].'</td><td>'.$row["Password"].'</td><td>'.$row["Email_Address"].'</td><td>'.$row["Phone_Number"].'</td><td>'.$row["Address"].'</td><td>'.$row["Course_ID"].'</td></tr>';
            }
            $output.='</table>';
            echo $output;
        }
        else
            echo "No data";
    }


 
?>