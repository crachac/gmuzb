<?php
include('login.php'); // Includes Login Script

if (isset($_SESSION['login_user'])) {
// header("location: profile.php");
    if (test) {
        //do something
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=profile.php">';//This causes the browser to open the new page after 0 seconds, i.e immediately.
    } else {
        return false;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form in PHP with Session</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
    <h1> Login Session </h1>
    <div id="login">
        <h2>Login Form</h2>
        <form action="" method="post">
            <label>UserName :</label>
            <input id="name" name="username" placeholder="username" type="text">
            <label>Password :</label>
            <input id="password" name="password" placeholder="**********" type="password">
            <input name="submit" type="submit" value=" Login ">
            <!-- <input name="submit" type="submit" value=" Regitration "> -->
            <b id="Regitration"><a href="form.php">Regitration</a></b>
            <br>
            <br>
            <b id="Admins"><a href="loginfadmin.php">Admins</a></b>
            <span><?php echo $error; ?></span>
        </form>
    </div>
</div>
</body>
</html>