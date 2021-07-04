<?php 
global $pdo;
session_start();
unset($_SESSION["token"]);
header('Location: auth.php');
?>