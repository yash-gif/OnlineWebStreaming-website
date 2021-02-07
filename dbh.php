<?php
   $servername = "localhost:3308";
   $username = "root";
   $password = "";
   $db = "movie_streaming";
   
   // Create connection
   $conn = mysqli_connect($servername, $username, $password,$db);
   
   // Check connection
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
   

 
?>
