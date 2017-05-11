<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect('127.0.0.1:3306','root', '', 'dbfc');
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("dbfc", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from Customers where customers_Password='$password' AND customers_Name='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
// header("location: profile.php"); // Redirecting To Other Page
    //      if (test){
    //    //do something
    //    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=profile.php">';//This causes the browser to open the new page after 0 seconds, i.e immediately.
    // }  else {
    //    return false;
    // }
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>