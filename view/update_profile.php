
<?php
    require "../controller/update_profile_controller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="style/update_profile3.css">
</head>
<body>
    <div class="container">

        <div class="title">
            <h2>Update Profile</h2>

        </div>
        
           <?php 
           
            //session_start();

           if($_SESSION["email"]=="anikdas987000@gmail.com")
            {
                echo '<img src="images/My_Profile_Picture.jpg" alt="My Profile Picture" > '; 
            }
            else if($_SESSION["email"]=="shakib000@gmail.com")
            {
                echo '<img src="images/Shakib_Al_Hasan.jpg" alt="My Profile Picture" > '; 
            }
            else if($_SESSION["email"]=="tamim234@gmail.com")
            {
                echo '<img src="images/Tamim_Iqbal.jpg" alt="My Profile Picture" > '; 
            }
            ?>

            <br>
         <!-- <img src="images/MyPhoto.jpg" alt="My Profile Picture" > <br><br><br> -->
         <form action="#" method="post">
             
            <table> 
            
            
            <tr>
                    <td> Name</td>
                    <td>:</td>
                    <td><input type="text" name="name" id="name" placeholder="Your Name" value="<?php echo $instructor_name; ?>"><br>
                        <span style="color:red"> <?php echo  $nameErrorMessage ; ?> </span>
                    </td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="uname" id="uname"  placeholder="Username" value="<?php echo $instructor_username; ?>"><br>
                        <span style="color:red"> <?php echo  $unameErrorMessage ; ?> </span>
                </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" id="password"  placeholder="Should be minimum 8 characters" value="<?php echo $instructor_password; ?>" ><br>
                        <span style="color:red"> <?php echo  $passwordErrorMessage ; ?> </span>
                </td>
                </tr>
                </tr>
                <tr>
                    <td>Email Address</td>
                    <td>:</td>
                    <td><input type="email" name="email" id="email" placeholder="Email Address" value="<?php echo $instructor_email; ?>"><br>
                        <span style="color:red"> <?php echo  $emailErrorMessage ; ?> </span>
                </td>
                    
                </tr>
    
                <tr>
                    <td>Phone Number</td>
                    <td>:</td>
                    <td><input type="text" name="phone" id="phone" placeholder="Phone Number" value="<?php echo $instructor_phone; ?>"><br>
                        <span style="color:red"> <?php echo  $phoneErrorMessage ; ?> </span>
                </td>
               

                <tr>
                    <td>Address</td>
                    <td>:</td>
                     <td><textarea name="address" id="address" rows="3" cols="23"placeholder="street,city,state, postal code" value="<?php echo $instructor_address; ?>"></textarea><br> 
                        <span style="color:red"> <?php echo  $addressErrorMessage ; ?> </span>
        </td>
                    
                </tr>
                <tr>
                    <td>Qualification</td>
                    <td>:</td>
                    <td><input type="text" name="qualification" id="qualification" placeholder="Qualification" value="<?php echo $instructor_qualification; ?>"><br>
                        <span style="color:red"> <?php echo  $qualificationErrorMessage ; ?> </span>
                        
                </td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="update_btn" id="update_btn" value="Update"><br>
                        <span style="color:black;margin-left:25px"> <?php echo  $updated ; ?> </span>
                        <span style="color:red"> <?php echo  $notupdated; ?> </span>
                </td>
        </tr>
        <tr>
                    <td></td>
                    <td></td>
                    <td></td>
        </tr>
        <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="logout_btn" id="logout_btn" value="Logout"><br>
                        
                </td>
        </tr>
            </table>
        </form>
        

    </div>
</body>
</html>