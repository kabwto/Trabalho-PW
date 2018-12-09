<?php
session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);

//Redireciona para a paginal principal
header('Location: index.php');

?>