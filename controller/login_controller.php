<?php   

    $isPost=false;
    $isValid=true;

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
    

    $emailErrorMessage="";
    $passwordErrorMessage="";
    $errorMessage="";
    //$emailPasswordErrorMessage="";

    $valid="";
    $notvalid="";




    // function read()
    // {
    //     $filename = '../model/user.json';
    //     $fo = fopen($filename, 'r');
    //     $fz = filesize($filename);
    //     $data = array();
    //     if ($fz > 0) {
    //         $fr = fread($fo, $fz);
    //         $data = json_decode($fr);
    //     }
    //     fclose($fo);
    //     return $data;
    // }
    

    // function isValidCredentials($email, $password)
    // {
    //     $found = false;
    //     $users = read();
    //     if (count($users) > 0) {
    //         for ($i = 0; $i < count($users); $i++) {
    //             if ($users[$i]->Email_Address === $email and $users[$i]->Password === $password) {
    //                 $found = true;
    //                 break;
    //             }
    //         }
    //     }
    //     return $found;
    // }
    


    // function fetch($email, $password)
    // {
    //     $users = read();
    //     for ($i = 0; $i < count($users); $i++) {
    //         if ($users[$i]->Email_Address === $email and $users[$i]->Password === $password) {
    //             return $users[$i];
    //         }
    //     }
    //     return array();
    // }
    
    if(isset($_POST["Remember"]))
    {
        setcookie("Email_Address",$_POST["email"],time()+60);
        setcookie("Password",$_POST["pass"],time()+60);

    }



    if(isset($_POST["login_btn"]))
    {
        $isPost=true;
        if(isset($_POST["email"]))
        {
            $instructor_email=$_POST["email"];
        }
        if(isset($_POST["pass"]))
        {
            $instructor_password=$_POST["pass"];
        }
    }

    // Error Message
    if(empty($instructor_email) && $isPost==true)
    {
        $emailErrorMessage="*Provide email address";
    }
    
    else if(empty($instructor_password) && $isPost==true)
    {
        $passwordErrorMessage="*Provide Password";
    }
    else
    {
        if(isset($_POST["login_btn"]))
         {


            session_start();
            include '../model/database_connection.php';
            if($con->connect_error)
            {
                die("Connection Falied:".$con->connect_error);
            
            }
            else
            {
                $q="(select * from instructor where Email_Address='".$instructor_email."' and Password='".$instructor_password."')";
                $result=$con->query($q);
                if($result->num_rows>0)
                {
                    echo "Successfully logged in";
                    while($rows=$result->fetch_assoc())
                    {

                        $_SESSION["Instructor_ID"] = $rows["Instructor_ID"];    
                        $_SESSION["name"] = $rows["Name"];
                        $_SESSION["uname"] =  $rows["Username"];
                        $_SESSION["password"] =  $rows["Password"];
                        $_SESSION["email"] =  $rows["Email_Address"];
                        $_SESSION["phone"] =  $rows["Phone_Number"];
                        $_SESSION["address"] =  $rows["Address"];
                        $_SESSION["qualification"] =  $rows["Qualification"];
                        header("location: dashboard.php");
                    }
                }
                
                else 
                {
                    $errorMessage = "Sorry, Login failed!";
                }
            }
            
            // if ($isValid) {
            //     $result = isValidCredentials($email, $password);
            //     if ($result)
            //     {
            //         $loggedInUser = fetch($email, $password);
            //         session_start();
            //         $_SESSION["name"] = $loggedInUser->Name;
            //         $_SESSION["uname"] = $loggedInUser->Username;
            //         $_SESSION["email"] = $loggedInUser->Email_Address;
            //         $_SESSION["password"] = $loggedInUser->Password;
            //         $_SESSION["phone"] = $loggedInUser->Phone_Number;
            //         $_SESSION["address"] = $loggedInUser->Address;
            //         $_SESSION["qualification"] = $loggedInUser->Qualification;
            //         header("Location: dashboard.php");
            //     }
            //     else 
            //     {
            //         $errorMessage = "Sorry, Login failed!";
            //     }
            //}


         }
         
       
    }



?>