

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style/dashboard3.css">

</head>
<body>

<div class="header">
 
               
                <!-- <input type="submit" name="logout_btn" id="logout_btn" value="Logout">   -->
                <h2>
                <?php  session_start(); echo  "Welcome ".$_SESSION["name"]."!"; ?>
                
                </h2>
                <p><b>Have a good journey ✔<b></p>
               

            </tr>
        </table>
</div>
<hr>
    <div class="txt">
        <marquee behavior="alternate" direction="">
            <?php 
                require '../controller/dashboard_controller.php';
            ?>
            </marquee>
        </div>
<hr>
<div class="navbar" style="padding:10px">
                    <ul >
                        <li> <b><a href="login.php">Logout</a></b></li>
                        <!-- <li> <b><a href="#history">Personal History</a></b></li> -->
                        <li> <b><a href="enroll_courses.php">Enroll Courses</a></b></li>
                        <li> <b><a href="view_courses.php">View Courses</a></b></li>
                        <li> <b><a href="update_profile.php">Update Profile</a></b></li>
                        <li> <b><a href="view_profile.php">View Profile</a></b></li>
                        
                        
                       
                        
                       
                    </ul>
            </div>
    <div class="body">
            <img width='300px' src="images/e_learning_12.jpg">
            
    </div>

<hr >
    
<?php require "footer.php"?>

    
</body>
</html>