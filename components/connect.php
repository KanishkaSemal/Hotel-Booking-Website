<?php

$host = 'localhost';
$dbUser = 'root'; // Replace with your MySQL username
$dbPass = ''; // Replace with your MySQL password
$dbName = 'hotel_db';

$conn = new mysqli($host, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

   function create_unique_id(){
      $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $rand = array();
      $length = strlen($str) -1;

      for($i = 0; $i < 20; $i++){
        $n = mt_rand(0, $length);
        $rand[] = $str[$n];
      }
      return implode($rand);
   }


?>