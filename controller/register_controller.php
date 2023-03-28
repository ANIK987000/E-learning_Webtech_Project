<?php 


    $isPost=false;

    $instructor_name="";
    //$lname="";
    $instructor_username="";
    $instructor_password="";
    $instructor_cpassword="";
    //$gender="";
    $instructor_phone="";
    $instructor_email="";
    $instructor_address="";
    $instructor_qualification="";

    $nameErrorMessage="";
    //$lnameErrorMessage="";
    $unameErrorMessage="";
    $passwordErrorMessage="";
    $cpasswordErrorMessage="";
    $genderErrorMessage="";
    $phoneErrorMessage="";
    $emailErrorMessage="";
    $addressErrorMessage="";
    $qualificationErrorMessage="";
    $passwordCPasswordErrorMessage="";
    
    $male="";
    $female="";

    $added="";
    $notadded="";


    if(isset($_POST["register_btn"]))
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
        if(isset($_POST["pass"]))
        {
            $instructor_password=$_POST["pass"];
        }
        if(isset($_POST["cpassword"]))
        {
            $instructor_cpassword=$_POST["cpassword"];
        }
        
        
        if(isset($_POST["phone"]))
        {
            $instructor_phone=$_POST["phone"];
        }
        if(isset($_POST["email"]))
        {
            $instructor_email=$_POST["email"];
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


    else if(empty($instructor_cpassword) && $isPost==true)
    {
        $cpasswordErrorMessage="*Confirm Password cannot be empty";
    }

    else if(empty($instructor_phone) && $isPost==true)
    {
        $phoneErrorMessage="*Phone number cannot be empty";
    }

    else if(empty($instructor_email) && $isPost==true)
    {
        $emailErrorMessage="*Email address cannot be empty";
    }

    else if(empty($instructor_address) && $isPost==true)
    {
        $addressErrorMessage="*Address cannot be empty";
    }

    else if(empty($instructor_qualification) && $isPost==true)
    {
        $qualificationErrorMessage="*Qualification cannot be empty";
    }
    else if($instructor_password !=$instructor_cpassword && $isPost==true)
    {
        $passwordCPasswordErrorMessage= "*Password and confirm password does not match";
    }
    else
    {
        if(isset($_POST["register_btn"]))
         {

            include '../model/database_connection.php';
            if($con->connect_error)
            {
                die("Connection Falied:".$con->connect_error);
            
            }
            else
            {
                $q="insert into instructor(Name,Username,Password,Email_Address,Phone_Number,Address,Qualification) values ('".$instructor_name."','".$instructor_username."','".$instructor_password."','".$instructor_email."','".$instructor_phone."','".$instructor_address."','".$instructor_qualification."')";
                if($result=$con->query($q))
                {
                    $added= "Instructor added successfully ! ";
                }
                else
                {
                    $notadded="*Error in adding";
                }
                
            }




            // Registration in Json file

                // if(file_exists("../model/user.json"))
                // {
                //     $current_data=file_get_contents("../model/user.json");
                //     $array_data=json_decode($current_data,true);
        
                //     $new_data=array(
                //         'Name' => $_POST["name"],
                //         'Username' => $_POST["uname"],
                //         'Password' => $_POST["password"],
                //         'Phone_Number' => $_POST["phone"],
                //         'Email_Address'=> $_POST["email"],
                //         'Address' => $_POST["address"],
                //         'Qualification'=> $_POST["qualification"]
        
                //         );
                //     $array_data[]=$new_data;
                //     $json_data=json_encode($array_data,JSON_PRETTY_PRINT);
                //     if(file_put_contents("../model/user.json", $json_data))
                //     {
                //         $added= "Instructor added successfully";
                //     }
                //     else
                //     {
                //         $notadded= "Error in adding";
                //     }
                // }
                // else 
                // {
                //     echo "File doesn't exist";
                // }



                
            // class Instructor
            // {
            //     public $First_Name;
            //     public $Last_Name;
            //     public $Username;
            //     public $Password;
            //     //public $Gender;
            //     public $Phone_Number;
            //     public $Email_Address;
            //     public $Address;
            //     public $Qualification;

            //     function Assign($f_name,$l_name,$username,$password,/*$gender,*/$phone,$email,$address,$qualification)
            //     {
            //         $this->First_Name=$f_name;
            //         $this->Last_Name=$l_name;
            //         $this->Username=$username;
            //         $this->Password=$password;
            //         //$this->Gender=$gender;
            //         $this->Phone_Number=$phone;
            //         $this->Email_Address=$email;
            //         $this->Address=$address;
            //         $this->Qualification=$qualification;

            //     }

            // }
            // $obj=new Instructor();
            // $obj->Assign($fname,$lname,$uname,$password,/*$gender,*/$phone,$email,$address,$qualification);
            
            // $Data=array($obj);
            // $jsonFormatData=json_encode($Data,JSON_PRETTY_PRINT);
            // $file=fopen("../model/Data.json","a") or die("Unable to open file");
            // fwrite($file,$jsonFormatData);
            // fclose($file);
            // echo "<br>";

                
            
    //}

    //}

            }
        }
    

    
?>