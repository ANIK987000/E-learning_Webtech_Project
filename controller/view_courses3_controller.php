<?php 

        if(isset($_POST["enroll_course1"]))
        {
            header("location:enroll_courses.php");
        }

        if(isset($_POST["logout_btn"]))
        {
            header("location:login.php");
        }

?>