<?php
include('loginadmin.php'); // Includes Login Script

if (isset($_SESSION['login_admin'])) {
// header("location: profile.php");
    if (test) {
        //do something
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=profileadmin.php">';//This causes the browser to open the new page after 0 seconds, i.e immediately.
    } else {
        return false;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form in PHP Session</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
    <h1> Control panel for admin</h1>
    <div id="login">
        <h2>Login Form</h2>
        <form action="" method="post">
            <label>UserName :</label>
            <input id="name" name="username" placeholder="adminname" type="text">
            <label>Password :</label>
            <input id="password" name="password" placeholder="**********" type="password">
            <input name="submit" type="submit" value=" Login ">

            <span><?php echo $error; ?></span>
        </form>
    </div>
</div>
</body>
</html>