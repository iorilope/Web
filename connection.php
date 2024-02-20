<?php
try {
   $conn = new PDO('mysql:host=localhost:3306; dbname=piraguismo', 'root', 'mysql');
} catch (PDOException $e) {
   echo "Error: " . $e->getMessage();
   die();
}
?>