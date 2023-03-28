
<?php include '../controller/login_controller.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/login3.css">
    
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h3>LOGIN</h3>
        </div>
        <form class="form" id="form" onsubmit="return validate()" action="#" method="post">
            <div class="email" id="form1">
                <label for="">Email Address:</label>
                <input type="text" name="email" id="email" placeholder="Email Address" value="<?php if(isset($_COOKIE["Email_Address"])) {echo $_COOKIE["Email_Address"] ;} else {echo $instructor_email;}?>">
                <i id="success" class="fas fa-check-circle"></i>
				<i id="error" class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
            </div>
            <div class="password" id="form2">
                <label for="">Password:</label>
                <input type="password" name="pass" id="pass" placeholder="Password"  value="<?php if(isset($_COOKIE["Password"])) {echo $_COOKIE["Password"] ;} else {echo $instructor_password;} ?>"> 
                <i id="success1" class="fas fa-check-circle"></i>
				<i id="error1" class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
            </div>
            <div class="remember">
                    <input type="checkbox" name="Remember" value="Remember">
                    <label for="Remember">Remember me</label>
            </div>
            <button type="submit" id="name" name="login_btn">LOG IN</button><br>
            <span style="color:red;margin-left:100px"> <?php echo  $errorMessage; ?> </span>
            
   
            
        </form>
        <div class="footer">
                <p>Don't have an account? <a href="registration.php">Sign Up</a><br>
                <a href="#">Forgot your password?</a></p>
        </div>

    
    </div>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="../controller/Javascript/login_validate8.js"></script>
</body>
</html>