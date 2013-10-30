<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: index.php');
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Information System</title>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js/jquery.onepage-scroll.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
        <script type = "text/javascript" src = "js/bootstrap.js"></script>
        <script type = "text/javascript" src = "js/bootstrap-dropdown.js"></script>
        <script src="lib/picker.js"></script>
        <script src="lib/picker.date.js"></script>
        <script src="lib/picker.time.js"></script>
        <script src="lib/legacy.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="lib/themes/default.css" id="theme_base">
        <link rel="stylesheet" href="lib/themes/default.date.css" id="theme_date">
        <link rel="stylesheet" href="lib/themes/default.time.css" id="theme_time">
        <link href="css/onepage-scroll.css" rel="stylesheet" type="text/css">
        <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css">
        <link rel = "stylesheet" type = "text/css" href = "css/bootstrap-responsive.css">
        <link href="css/core.css" rel="stylesheet" type="text/css">
        <link href="css/student.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="img/small.ico" type="img/x-icon">
        <link rel="shortcut icon" href="img/small.ico" type="image/x-icon">
    </head>
    <body>
        <div class="row" id="banner">
            <div class = "span3 pull-left">
                <h6>Student Information System</h6>	
            </div>
            <div class = "span4  pull-right">
                <h6>Developed by: Research and Development Unit</h6>
            </div>
        </div>
        <div class="wrapper">
            <div class="main">
                <form action ="handler/register_handler.php" method ="post">
                    <section id="basicinfo">
                        <div class="pagecontainer">
                            <div class = "row">
                                <div class = "span12">
                                    <h1>Basic Information</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row">
                                    <div class = "span3">
                                        <input type="text" name="student_number" maxlength = "20" id ="student_number" class="studentbox" placeholder="Student Number" value="<?php echo $_SESSION['student_number'] ?>" readonly><br>
                                    </div>
                                    <div class ="span3">
                                        <input type="text" name="birthdate" class="datepicker" placeholder="Birthdate">
                                        <input type="hidden" name="prefix_birthdate_suffix"> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class = "span2">
                                        <input type="text" name="last_name" value="<?php echo $_SESSION['last_name'] ?>" class="studentbox" placeholder="Last Name">
                                    </div>
                                    <div class = "span2">
                                        <input type="text" name="first_name" value="<?php echo $_SESSION['first_name'] ?>" class="studentbox" placeholder="Given Name">
                                    </div>
                                    <div class = "span2">
                                        <input type="text" name="middle_name" class="studentbox" value="<?php echo $_SESSION['middle_name'] ?>" placeholder="Middle Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class = "span3">
                                        <select name="course" class="studentselect">
                                            <option value="0" selected="selcted" style='display: none;' readonly selected>Course</option>
                                            <option value="BSCS">BSCS</option>
                                            <option value="BSIT">BSIT</option>
                                            <option value="ACT">ACT</option>
                                            <option value="BSIS">BSIS</option>
                                            <option value="BSEMC">BSEMC</option>
                                        </select>
                                    </div>
                                    <div class = "span3">
                                        <select name="year_level" class="studentselect">
                                            <option value="0" selected="selcted" style='display: none;' readonly selected>Year Level</option>
                                            <option value="1">1st Year</option>
                                            <option value="2">2nd Year</option>
                                            <option value="3">3rd Year</option>
                                            <option value="4">4th Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class = "span3">
                                        <select name="scholarship_type" class="studentselect">
                                            <option value="0" selected="selcted" style='display: none;' readonly selected>Scholarship Type</option>
                                            <option value="Not Scholar">Not Scholar</option>
                                            <option value="Tan Yan Kee">Tan Yan Kee</option>
                                            <option value="University President Scholar">University President Scholar</option>
                                            <option value="University Scholar">University Scholar</option>
                                            <option value="College Scholar">College Scholar</option>
                                        </select>
                                    </div>
                                    <div class="span3">
                                        <select name="type" class="studentselect">
                                            <option value="0" selected="selcted" style='display: none;' readonly selected>Student Type</option>
                                            <option value="Regular">Regular</option>
                                            <option value="Irregular">Irregular</option>
                                            <option value="Foreign">Foreign</option>
                                        </select>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class="span3">
                                        <select name="sex" class="studentselect">
                                            <option value="0" selected="selcted" style='display: none;' readonly selected>Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="span3">
                                        <select name="nationality" class="studentselect">
                                            <option value="0" selected="selcted" style='display: none;' readonly selected>Nationality</option>
                                            <option value="Filipino">Filipino</option>
                                            <option value="Iranian">Iranian</option>
                                            <option value="Korean">Korean</option>
                                            <option value="Indian">Indian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class = "span3">
                                        <input name="mobile_number" value="<?php echo $_SESSION['mobile_number'] ?>" type="text" class="studentbox" placeholder="Mobile Number">
                                    </div>
                                    <div class = "span3">
                                        <input type="text" name="telephone_number" value="<?php echo $_SESSION['telephone_number'] ?>" class="studentbox" placeholder="Telephone Number">
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class = "span6">
                                        <input type="text" name="email_address" class="studentbox" value="<?php echo $_SESSION['email_address'] ?>" placeholder="E-mail Adress">
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class = "span12">
                                        Step 1 of 3
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="address">
                        <div class="pagecontainer">
                            <div class = "row">
                                <div class = "span12">
                                    <h1>Address</h1>
                                </div>
                                <div class = "span12">
                                    <textarea class="studentarea" name="permanent_address" placeholder="Permanent Adress"> <?php echo $_SESSION['permanent_address'] ?> </textarea><br>
                                </div>
                                <div class = "span12">
                                    <textarea class="studentarea" name="city_address" placeholder="City Adress"> <?php echo $_SESSION['city_address'] ?></textarea>
                                </div>
                                <div class = "span12">
                                    Step 2 of 3
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="guardianinfo">
                        <div class = "row">
                            <div class="pagecontainer">
                                <div class = "row">
                                    <div class = "span12">
                                        <h1>Guardian Information</h1>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class = "span2">
                                        <input type="text" name ="guardian_name"  value="<?php echo $_SESSION['guardian_name'] ?>" class="studentbox" placeholder="Guardian's Name">

                                    </div>
                                    <div class = "span2">
                                        <input type="text" name="guardian_relationship"  value="<?php echo $_SESSION['guardian_relationship'] ?>" class="studentbox" placeholder="Relationship"><br>
                                    </div>
                                    <div class = "span2">
                                        <input type="text" name="guardian_contact_number"  value="<?php echo $_SESSION['guardian_contact_number'] ?>" class="studentbox" placeholder="Contact Number"><br>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class="span6">
                                        <textarea class="studentarea" name="guardian_address" id = "guardian_placeholder" placeholder="Adress"><?php echo $_SESSION['guardian_address']?> </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class = "span12">
                                        Step 3 of 3
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class="span6">
                                        <input type="submit" class="buttons">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </body>
</html>