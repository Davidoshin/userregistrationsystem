<?php	
//include Logged_session.php file on all user panel pages
include("logged_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>Welcome to your Dashboard</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
