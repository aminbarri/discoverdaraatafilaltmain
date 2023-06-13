<?php 
session_start();
$_SESSION['login']= 'none';
session_unset();
session_destroy();
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>