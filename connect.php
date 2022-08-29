<?php
 //  username = user mysql
 // password = password mysql
 // database name = database in mysql
$conn = mysqli_connect('localhost', 'username', 'password', 'database name');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>
