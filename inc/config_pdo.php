<?php 

error_reporting(E_ALL);
error_reporting(0);
$pdo = new PDO('mysql:host=localhost;dbname=test', 'test', 'test');

print_r ($pdo->connect_error);


?>