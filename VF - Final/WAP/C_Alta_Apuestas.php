<!--
Alta Apuestas WAP ET1
Descripción:

-->

<?php
//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
require_once('../functions/FuncionesComunes.php');

$pag = 'AltaApuestasWAP';
if(!ConPermisos($pag)){
	header('Location: ../views/V_ErrorPermisos.php');
}
?>

<h1>Esta es la funcionalidad de alta de apuestas</h1>

<a href="C_Menu.php">Volver al menú</a>


<?php
include 'Administrar.php';
?>
