<?php 
try {
  $connect = new PDO("mysql:host=localhost;dbname=furniture", "root", "");
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage();
  die();
}
