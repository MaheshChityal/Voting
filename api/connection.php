<?php
$connect = new mysqli("localhost", "root", "", "voting");
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  } 
?>