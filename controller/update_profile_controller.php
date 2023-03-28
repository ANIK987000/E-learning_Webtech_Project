<?php 


    if(isset($_POST["logout_btn"]))
    {
        header("Location: login.php");
    }


    $isPost=false;

    $instructor_name="";
    $instructor_username="";
    $instructor_password="";
    $instructor_phone="";
    $instructor_email="";
    $instructor_address="";
    $instructor_qualification="";

    $nameErrorMessage="";
    $unameErrorMessage="";
    $passwordErrorMessage="";
    $cpasswordErrorMessage="";
    $genderErrorMessage="";
    $phoneErrorMessage="";
    $emailErrorMessage="";
    $addressErrorMessage="";
    $qualificationErrorMessage="";
    $passwordCPasswordErrorMessage="";

    $updated="";
    $notupdated="";

    session_start();

    
    if(isset($_POST["update_btn"]))
    {
        $isPost=true;
        if(isset($_POST["name"]))
        {
            $instructor_name=$_POST["name"];
        }
     
        if(isset($_POST["uname"]))
        {
            $instructor_username=$_POST["uname"];
        }
        if(isset($_POST["password"]))
        {
            $instructor_password=$_POST["password"];
        }
        if(isset($_POST["email"]))
        {
            $instructor_email=$_POST["email"];
        }
        if(isset($_POST["phone"]))
        {
            $instructor_phone=$_POST["phone"];
        }
        
        if(isset($_POST["address"]))
        {
            $instructor_address=$_POST["address"];
        }
        if(isset($_POST["qualification"]))
        {
            $instructor_qualification=$_POST["qualification"];
        }
        
    }
   

    
    // Error Message 

    if(empty($instructor_name) && $isPost==true)
    {
        $nameErrorMessage="*First name cannot be empty";
    
    }

    else if(empty($instructor_username) && $isPost==true)
    {
        $unameErrorMessage="*Username cannot be empty";
    }

    else if(empty($instructor_password) && $isPost==true)
    {
        $passwordErrorMessage="*Password cannot be empty";
    }


    else if(empty($instructor_email) && $isPost==true)
    {
        $emailErrorMessage="*Email address cannot be empty";
    }
    else if(empty($instructor_phone) && $isPost==true)
    {
        $phoneErrorMessage="*Phone number cannot be empty";
    }

    else if(empty($instructor_address) && $isPost==true)
    {
        $addressErrorMessage="*Address cannot be empty";
    }

    else if(empty($instructor_qualification) && $isPost==true)
    {
        $qualificationErrorMessage="*Qualification cannot be empty";
    }
    else
    {
        if(isset($_POST["update_btn"]))
         {

            
            include '../model/database_connection.php';
            if($con->connect_error)
            {
                die("Connection Falied:".$con->connect_error);
            
            }
            else
            {
                $q="update instructor set Name='".$instructor_name."',Username='".$instructor_username."',Password='".$instructor_password."',Email_Address='".$instructor_email."',Phone_Number='".$instructor_phone."',Address='".$instructor_address."',Qualification='".$instructor_qualification."' where Name='".$_SESSION["name"]."'";
                //$q="insert into instructor(Name,Username,Password,Email_Address,Phone_Number,Address,Qualification) values ('".$instructor_name."','".$instructor_username."','".$instructor_password."','".$instructor_email."','".$instructor_phone."','".$instructor_address."','".$instructor_qualification."')";
                if($result=$con->query($q))
                {
                    $updated= "Profile updated successfully ! ";
                }
                else
                {
                    $notupdated="*Error in updating";
                }
                
            }
        }
    }


    
            
   

    

    
?>