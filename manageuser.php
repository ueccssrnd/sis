<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Module | Manage User</title>
        <link href="css/core.css" rel="stylesheet" type="text/css">
        <link href="css/admincore.css" rel="stylesheet" type="text/css">
        <link href="css/manageuser.css" rel="stylesheet" type="text/css">
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
                    <tr><th>ID</th><th>Username</th><th>User Type</th><th>Last Login</th><th colspan="2">Option</th></tr>
                    <tr><td>1</td><td>JMIdol</td><td>Admin</td><td>01/01/1991</td><td>Edit</td><td>Delete</td></tr>
                    <tr><td>2</td><td>Keithong</td><td>Admin</td><td>01/01/1991</td><td>Edit</td><td>Delete</td></tr>
                    <tr><td>3</td><td>Danny</td><td>Admin</td><td>01/01/1991</td><td>Edit</td><td>Delete</td></tr>
                    <tr><td>4</td><td>Igop</td><td>Admin</td><td>01/01/1991</td><td>Edit</td><td>Delete</td></tr>
                </table>
                <span class="adminbutton" id="addbutton">Add New</span>
            </div>
            
        </div>
    </body>
</html>