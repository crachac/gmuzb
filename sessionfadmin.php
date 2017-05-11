<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect('127.0.0.1:3306','root', '', 'dbfc');
// Selecting Database
$db = mysql_select_db("dbfc", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_admin'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select admin_Name from Admins where admin_Name='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
// header('Location: index1.php'); // Redirecting To Home Page
    //      if (test){
    //    //do something
    //    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index1.php">';//This causes the browser to open the new page after 0 seconds, i.e immediately.
    // }  else {
    //    return false;
    // }
}
?>