<?php
include '../functions/FuncionesComunes.php';


//Recogemos las variables que vienen por POST desde el formulario
$pag = $_GET['pag'];

//Conectamos con el gestor de la bd
ConectarBD();

$consulta = "DELETE FROM pagina WHERE Pagina = '$pag'";

$eliminacion = mysql_query($consulta) or die('error al ejecutar la eliminacion de la Pagina');
	echo 'La Pagina <b>' . $pag . '</b> ha sido borrado en el sistema' . '<BR>';

	header('Location:../views/GestionarPaginas/bp.php');
?>