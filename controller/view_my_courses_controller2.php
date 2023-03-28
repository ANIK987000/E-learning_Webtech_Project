<?php

        if(isset($_POST["logout_btn"]))
        {
            header("location:login.php");
        }
        if(isset($_POST["materials"]))
        {
            header("location:materials.php");
        }
        
?>