
<?php include '../controller/register_controller.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/registration3.css">
    
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h3>SIGN UP</h3>
        </div>
        <form class="form" onsubmit="return validate()" action="#" method="post">
            <div class="name">
                <label for="">Name:</label>
                <input type="text" name="name" id="name" placeholder="Your Name" value="<?php echo $instructor_name; ?>">
            </div>
            <div class="username">
                <label for="">Username:</label>
                <input type="text" name="uname" id="uname" placeholder="Username" value="<?php echo $instructor_username; ?>">
            </div>
            <div class="password">
                <label for="">Password:</label>
                <input type="password" name="pass" id="pass"  placeholder="Should be minimum 8 characters" value="<?php echo $instructor_password; ?>">
            </div>
            <div class="cpassword">
                <label for="">Confirm Password:</label>
                <input type="password" name="cpassword" id="cpassword"  placeholder="Re-type your password" value="<?php echo $instructor_cpassword; ?>">
            </div>
            <div class="phone">
                <label for="">Phone Number:</label>
                <input type="text" name="phone" id="phone" placeholder="Phone Number" value="<?php echo $instructor_phone; ?>">
            </div>
            <div class="email">
                <label for="">Email Address:</label>
                <input type="email" name="email" id="email" placeholder="Email Address" value="<?php echo $instructor_email; ?>">
            </div>

            <div class="address">
                <label for="">Address:</label><br>
                <textarea name="address" id="address"  cols="39"placeholder="street,city,state, postal code" value="<?php echo $instructor_address; ?>"></textarea>
            </div>
            <div class="qualification">
                <label for="">Qualification:</label>
                <input type="text" name="qualification" id="qualification" placeholder="Qualification" value="<?php echo $instructor_qualification; ?>">
            </div>
            <button type="submit" id="register_btn" name="register_btn">Register</button><br>
            <span style="color:black;margin-left:80px"> <?php echo  $added ; ?> </span>
            <span style="color:red;margin-left:80px"> <?php echo  $notadded; ?> </span>
               
            
        </form>
        <div class="footer">
                <p>Already have an account? <a href="login.php">Sign in</a></p><br>
                <!-- <a href="password_recovery.php">Forgot your password?</a></p> -->
        </div>

    
    </div>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="../controller/Javascript/register_validation1.js"></script>
</body>
</html>