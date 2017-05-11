<?php 
 $conn = mysqli_connect("127.0.0.1:3306", "root", "", "dbfc"); 
 $output = ''; 
 $sql = "SELECT * FROM CarModel ORDER BY id DESC"; 
 $result = mysqli_query($conn, $sql); 
 $output .= ' 
 <div align="center"> 
 <table border="1" bordercolor="#00CCCC"> 
 <tr> 
 <th width="10%">Id</th> 
 <th width="40%">Model Code</th> 
 <th width="40%">Model Name</th> 
 <th width="10%">Delete</th> 
 </tr>'; 
 if(mysqli_num_rows($result) > 0) 
 { 
 while($row = mysqli_fetch_array($result)) 
 { 
 $output .= ' 
 <tr> 
 <td>'.$row["id"].'</td> 
 <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["first_name"].'</td> 
 <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["last_name"].'</td> 
 <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" id="delete">Delete</button></td> 
 </tr> 
 '; 
 } 
 $output .= ' 
 <tr> 
 <td></td> 
 <td id="first_name" contenteditable></td> 
 <td id="last_name" contenteditable></td> 
 <td><button type="button" name="add" id="add">Add</button></td> 
 </tr> 
 '; 
 } 
 else 
 { 
 $output .= '<tr> 
 <td colspan="4">Data not Found</td> 
 </tr>'; 
 } 
 $output .= '</table> 
 </div>'; 
 echo $output; 
 ?>