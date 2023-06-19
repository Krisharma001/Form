<?php

$server = 'localhost';
      $user = 'root';
      $pass = 'root';
      $dbname = 'Form1';
      
      $conn = mysqli_connect($server,$user,$pass,$dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

?>