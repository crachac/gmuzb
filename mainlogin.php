<?php 
 session_start();
$db1 = mysqli_connect('127.0.0.1:3306','root', '', 'dbfc') or die("Unable connect");

if($_SERVER["REQUEST_METHOD"] == "POST"){
// $customers_Name = mysqli_real_escape_string($db,$_POST['username']);
// $customers_Password = mysqli_real_escape_string($db,$_POST['password']);
	 $username = $_POST['username'];
	  $password = $_POST['passcode'];
$sql = "SELECT customers_Id FROM Customers WHERE username = '$customers_Name' and passcode = '$customers_Password'";
$result = mysqli_query($db1,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];
$count = mysqli_num_rows($result);
      if($count == 1) {
         session_register("username");
         $_SESSION['login_user'] = $customers_Name;
         
                  if (test){
       //do something
       echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';//This causes the browser to open the new page after 0 seconds, i.e immediately.
    }  else {
       return false;
    }
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>