
<?php 
    require '../controller/profile_controller.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style/view_profile3.css">
</head>
<body>
    <div class="container">

    <div class="title">
        <h2>My Profile</h2>

    </div>

  
           <?php 
           
            session_start();

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
                    <td>Name</td>
                    <td>:</td>
                    <td><?php echo  $_SESSION["name"]; ?></td>
                </tr>
                <tr>
                    <td>Email Address</td>
                    <td>:</td>
                    <td><?php echo $_SESSION["email"]; ?></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>:</td>
                    <td><?php  echo  $_SESSION["phone"]; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td><?php  echo  $_SESSION["address"]; ?></td>
                </tr>
                <tr>
                    <td>Qualification</td>
                    <td>:</td>
                    <td><?php   echo  $_SESSION["qualification"]; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td ><input type="submit" name="logout_btn" id="logout_btn" value="Logout"></td>
                </tr>
                
            </table>
        </form>
      

        

    </div>
</body>
</html>