<?php 
 $conn = mysqli_connect("127.0.0.1:3306", "root", "", "dbfc"); 
 $sql = "INSERT INTO CarModel(first_name, last_name) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."')"; 
 if(mysqli_query($conn, $sql)) 
 { 
 echo 'Record Inserted Successfully!'; 
 } 
 ?> 