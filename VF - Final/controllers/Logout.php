<?php
//Se inicializa la sesión
session_start();
//se destruye la sesión
session_destroy();
//se redirige al Login (/controllers/V_Login.php)
header('Location:../controllers/Login.php');
?>
