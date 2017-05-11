<?php 
 $conn = mysqli_connect("127.0.0.1:3306", "root", "", "dbfc"); 
 $sql = "DELETE FROM CarModel WHERE id = '".$_POST["id"]."'"; 
 if(mysqli_query($conn, $sql)) 
 { 
 echo 'Data Deleted Successufully!'; 
 } 
 ?>