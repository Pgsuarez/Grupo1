<?php
session_start();
if (!(isset($_SESSION['login'])))
	header('location:./controllers/Login.php');
else
	header('location:./controllers/Menu.php');

?>
