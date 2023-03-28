<?php
    session_start();
    
    if(isset($_POST["logout_btn"]))
    {
        session_destroy();
        header("location:login.php");
    }

    //echo "Logged out successfully";
?>