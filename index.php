<?php
    session_start();
    if(isset($_SESSION['student_number'])){
        header('Location: register.php');
    }else if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 0){
            
        }else{
            
        }
    }
?>
<!doctype>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Information System - Login</title>
        <link rel="shortcut icon" href="img/small.ico" type="image/x-icon">
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type = "text/javascript" src = "js/bootstrap.js"></script>
    </head>
    <body>
        <div id ="login_form">
            <form action ="handler/login_handler.php" method="post">
                <h4>Student Information System</h4>
                <div class ="row">
                    <div class="span2">
                        Student Number
                    </div>
                </div>
                <div class="row">
                    <div class="span2">
                        <input type="text" name="student_number" maxlength="11" required>
                    </div>
                </div>
                <div class ="row">
                    <div class="span2">
                        Access Code
                    </div>
                </div>
                <div class="row">
                    <div class="span2">
                        <input type="password" name="access_code" maxlength="20" required>
                    </div>
                </div>
                <div class="row">
                    <div class ="span2">
                        <input type ="submit" value ="Login" class="btn-success">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>