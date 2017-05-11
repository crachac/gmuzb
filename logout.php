<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
// header("Location: index1.php"); // Redirecting To Home Page
	         if (test){
       //do something
       echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index1.php">';//This causes the browser to open the new page after 0 seconds, i.e immediately.
    }  else {
       return false;
    }
}
?>