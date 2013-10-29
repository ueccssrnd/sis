<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Module | Manage Student</title>
        <link href="css/core.css" rel="stylesheet" type="text/css">
        <link href="css/admincore.css" rel="stylesheet" type="text/css">
        <link href="css/managestudent.css" rel="stylesheet" type="text/css">
        <link href="css/datatable.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="header">
            <span class="headertext" id="welcome">Welcome, Danny!</span>
            <span class="headertext" id="logout">Logout</span>
        </div>
        <div class="container">
            <div class="searchcontainer">
                <input type="text" id="searchbox" placeholder="Search.."> <input type="submit" value="Search" class="searchbutton">
            </div>
            <div class="buttoncontainer">
                <a href="manageuser.php"><span class="adminbutton" id="userbutton">User</span></a>
                <a href="managestudent.php"><span class="adminbutton" id="studentbutton">Student</span></a>
                <span class="adminbutton" id="studentlogsbutton">Student Logs</span>
                <span class="adminbutton" id="userlogsbutton">User Logs</span>
            </div>
            <div class="tablecontainer">
                <div class="tableheader"></div>
                <table class="datatable">
                    <tr><th>ID</th><th>Student Number</th><th>Last Name</th><th>First Name</th><th>Middle Initial</th><th>Course</th><th>Option</th></tr>
                    <tr><td>1</td><td>20100105337</td><td>Samson</td><td>Keith</td><td>C</td><td>BSCS</td><td>View More</td></tr>
                    <tr><td>2</td><td>20100100101</td><td>Doe</td><td>John</td><td>X</td><td>BSIT</td><td>View More</td></tr>
                    <tr><td>3</td><td>20100106969</td><td>Doe</td><td>Jane</td><td>X</td><td>Dentistry</td><td>View More</td></tr>
                    <tr><td>4</td><td>20100119999</td><td>Rizal</td><td>Jose</td><td>M</td><td>Philosophy</td><td>View More</td></tr>
                </table>
                <span class="adminbutton" id="addbutton">Add New</span>
            </div>
            
        </div>
    </body>
</html>