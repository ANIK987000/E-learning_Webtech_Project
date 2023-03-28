

<?php
    include '../controller/view_my_courses_controller2.php';
    include '../controller/view_my_courses_controller1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view_courses1_controller</title>
    <link rel="stylesheet" href="style/view_my_courses3.css">

    <script src="../controller/javascript/jquery.js"></script>
    <!-- <script src="../controller/javascript/view_courses1.js" ></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

</head>
<body>
  
    <div class="container">

        <div class="title">
            <h2>Enroll Courses</h2>

        </div>
        <div class="form1">
            <form action="#" method="post">
                    <input type="submit" name="logout_btn" id="logout_btn" value="Logout">
            </form>
        </div>

        <div class="form2">
       
        
            <button id="load1">Student Details</button>
                <div id="main1">


                </div>

        </div>
        <div class="form3">
       
        
            <button id="load2">Total Students</button>
                <div id="main2">


                </div>

        </div>

        <div class="form4">
            <form action="#" method="post">
            
            <div class="name">
                <label for="">Instructor_ID:</label>
                <input type="text" name="name1" id="name1"  value="<?php echo  $instructor_id; ?>">
            
                <label for="">Course_ID:</label>
                <input type="text" name="name2" id="name2"  value="<?php echo $course_id ;?>">
          
                <label for="">Student_ID:</label>
                <input type="text" name="name3" id="name3"  value="<?php echo $student_id; ?>">
            </div>
            <button type="submit" id="delete" name="delete_btn">Delete Students</button>
            <span style="color:black;margin-left:50px"> <?php echo  $deleted ; ?> </span>
            <span style="color:red;margin-left:50px"> <?php echo  $notDeleted; ?> </span>
            </form>
        </div>

        <div class="form5">
       
        <form action="#" method="post">
            <button id="materials" name="materials">See Study Materials</button>
               
            </form>
        </div>
        <div class="form6">
       
        <form action="#" method="post">
        <button id="create_exam" name="create_exam"> <a href="https://docs.google.com/forms/d/1OqROmMJH2OQWcXKHTf-Dcpt56CLGZH6fYYec2O7XzoE/edit">Create Exam</a></button>
            <!-- <a href="https://docs.google.com/forms/d/1OqROmMJH2OQWcXKHTf-Dcpt56CLGZH6fYYec2O7XzoE/edit"><button id="create_exam" name="create_exam">Create Exam</button></a> -->
               
            </form>
        </div>
       
          
    </div>
        <script> 
     
            $(document).ready(function(){
                    $("#load2").on("click",function(e){
                        $.ajax({
                            url:"../controller/view_my_courses_controller3.php",
                            type:"post",
                            success:function(data){
                                $("#main2").html(data);
                            }
                        });
                    });
                });
            $(document).ready(function(){
                $("#load1").on("click",function(e){
                    $.ajax({
                        url:"../controller/view_my_courses_controller.php",
                        type:"post",
                        success:function(data){
                            $("#main1").html(data);
                        }
                    });
                });
            });


            $(document).ready(function(){
                $("#load2").click(function(){
                    $("#main2").animate({left:'45px',height: '30px',width: '30px'});
                });
            });
            $(document).ready(function(){
                $("#load1").click(function(){
                    $("#main1").slideToggle(1000);
                });
            });
         
        </script>
    <!-- <script src="../controller/javascript/jquery.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script src="../controller/Javascript/view_courses1.js" ></script> -->
</body>
</html>