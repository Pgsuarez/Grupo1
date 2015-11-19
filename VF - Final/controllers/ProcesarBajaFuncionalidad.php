<?php
include '../functions/FuncionesComunes.php';


//Recogemos las variables que vienen por POST desde el formulario
$func = $_GET['func'];

//Conectamos con el gestor de la bd
ConectarBD();

$consulta = "DELETE FROM funcionalidad WHERE Funcionalidad = '$func'";
//$consulta = "DELETE FROM tiene, tiene_pag WHERE Funcionalidad = '$func' IN (SELECT Rol,Url FROM tiene,tiene_pag)";
$eliminacion = mysql_query($consulta) or die('error al ejecutar la eliminacion de la Funcionalidad');
	echo 'La Funcionalidad <b>' . $func . '</b> ha sido borrado en el sistema' . '<BR>';

	header('Location:../views/GestionarFuncionalidades/bf.php');



?>