<?php
try {
$connString = "mysql:host=localhost;dbname=vysalipughazhendi_portfolio";
$user = "root";
$pass = "";
$pdo = new PDO($connString,$user,$pass);
}
catch (PDOException $e) 
{
die( $e->getMessage() );
}
?>