<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'sekolah';
  $conn = mysqli_connect($host, $user, $pass, $db);
  if($conn){
    //echo "Koneksi Berhasil";
  }
  mysqli_select_db($conn, $db);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>