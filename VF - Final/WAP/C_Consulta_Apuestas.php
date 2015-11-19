<!--
Consulta Apuestas WAP ET1
Descripción:

-->

<?php
require_once('../functions/FuncionesComunes.php');
//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'ConsultaApuestasWAP';
if(!ConPermisos($pag)){
	header('Location: ../views/V_ErrorPermisos.php');
}
?>

<h1>Esta es la funcionalidad de consulta de apuestas</h1>

<a href="C_Menu.php">Volver al menú</a>


<?php
include 'Administrar.php';
?>
