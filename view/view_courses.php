
<?php
    include '../controller/view_courses3_controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view_courses1_controller</title>
    <link rel="stylesheet" href="style/view_courses3.css">

    <script src="../controller/javascript/jquery.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

</head>
<body>
    <div class="container">

        <div class="title">
            <h2>View Courses</h2>

        </div>
        <div class="form1">
            <form action="#" method="post">
                    <input type="submit" name="logout_btn" id="logout_btn" value="Logout">
            </form>
        </div>

        <div class="form2">
       
            <button id="all_course">All courses</button>
                <div id="main1">
                    <!-- <?php 
                        include '../controller/view_courses1_controller.php';
                    ?> -->
                </div>
        </div>


                <div class="form3">
                     <button id="enroll_course">My courses</button>
                        <div id="main2">
                            <!-- <?php 
                                 include '../controller/view_courses2_controller.php';
                            ?> -->


                        </div>


                </div>

            <div class="form4">
                <form action="#" method="post">
                    <button id="enroll_course1" name="enroll_course1">Enroll courses</button>
            
                </form>
            </div>

            
          
    </div>
        <script> 
            $(document).ready(function(){
                $("#all_course").on("click",function(e){
                    $.ajax({
                        url:"../controller/view_courses1_controller.php",
                        type:"post",
                        success:function(data){
                            $("#main1").html(data);
                        }
                    });
                });
            });


            $(document).ready(function(){
                $("#enroll_course").on("click",function(e){
                    $.ajax({
                        url:"../controller/view_courses2_controller.php",
                        type:"post",
                        success:function(data){
                            $("#main2").html(data);
                        }
                    });
                });
            });


            $(document).ready(function(){
                $("#all_course").click(function(){
                    $("#main1").slideToggle("slow");
                });
            });
            $(document).ready(function(){
                $("#enroll_course").click(function(){
                    $("#main2").slideToggle("slow");
                });
            });
        </script>
    <!-- <script src="../controller/javascript/jquery.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script src="../controller/Javascript/view_courses1.js" ></script> -->
</body>
</html>