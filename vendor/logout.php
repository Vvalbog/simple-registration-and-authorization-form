<?php 
session_start();
unset($_SESSION['user']);
header('Locaction: ../index.php');
?>