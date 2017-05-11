<?php 
 $conn = mysqli_connect("127.0.0.1:3306", "root", "", "dbfc"); 
 $id = $_POST["id"]; 
 $text = $_POST["text"]; 
 $column_name = $_POST["column_name"]; 
 $sql = "UPDATE CarModel SET ".$column_name."='".$text."' WHERE id='".$id."'"; 
 if(mysqli_query($conn, $sql)) 
 { 
 echo 'Data Updated'; 
 } 
 ?>