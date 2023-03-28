<?php

    $isPost=false;

    $instructor_id="";
    $course_id="";
    $student_id="";

    $deleted="";
    $notDeleted="";

    if(isset($_POST["delete_btn"]))
    {
        $isPost=true;
        if(isset($_POST["name1"]))
        {
            $instructor_id=$_POST["name1"];
        }
        if(isset($_POST["name2"]))
        {
            $course_id=$_POST["name2"];
        }
        if(isset($_POST["name3"]))
        {
            $student_id=$_POST["name3"];
        }
        
    }
   


    if(empty($instructor_id) && $isPost==true)
    {
        $insError="*Instructor ID cannot be empty";
    
    }
    
    else if(empty($course_id) && $isPost==true)
    {
        $couError="*Course ID cannot be empty";
    }

    else if(empty($student_id) && $isPost==true)
    {
        $StuError="*Student ID cannot be empty";
    }

    else
    {
    
            if(isset($_POST["delete_btn"]))
            {

                include '../model/database_connection.php';
                if($con->connect_error)
                {
                    die("Connection Falied:".$con->connect_error);
                
                }
                else
                {
                    $q="delete from enroll where Instructor_ID='".$instructor_id."' and Course_ID='".$course_id."' and Student_ID='".$student_id."'";
                    if($result=$con->query($q))
                    {
                
                        $deleted= "Deleted successfully ! ";
                    }
                    else
                    {
                        $notDeleted="*Error in deleting";
                    }
                    
                }
            }
    }





?>