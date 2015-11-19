<!--
Baja Socios WAP ET1
Descripción:

-->

<?php
require_once('../functions/FuncionesComunes.php');
//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'BajaSociosWAP';
if(!ConPermisos($pag)){
	header('Location: ../views/V_ErrorPermisos.php');
}
?>

<h1>Esta es la funcionalidad de baja de socios</h1>

<a href="C_Menu.php">Volver al menú</a>


<?php
include 'Administrar.php';
?>
