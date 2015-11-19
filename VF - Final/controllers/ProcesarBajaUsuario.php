<?php
include '../functions/FuncionesComunes.php';


//Recogemos las variables que vienen por POST desde el formulario
$login = $_GET['login'];

echo $login;
//Conectamos con el gestor de la bd
ConectarBD();

$consulta = "DELETE FROM usuario WHERE Login = '$login'";

$eliminacion = mysql_query($consulta) or die('error al ejecutar la eliminacion de usuario');
	echo 'El Login <b>' . $login . '</b> ha sido borrado en el sistema' . '<BR>';
		
		
		header('Location:../views/GestionarUsuarios/bu.php');


?>