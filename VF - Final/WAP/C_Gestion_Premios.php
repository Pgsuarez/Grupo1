<?php

include('../functions/FuncionesComunes.php');

$accion = $_REQUEST['accion'];

switch ($accion) 
{
case '0':
	
	$pag = 'AltaPremioWAP';
	if(!ConPermisos($pag)){
		header('Location: ../views/V_ErrorPermisos.php');
	}
	?>	
		<h1>Esta es la funcionalidad de alta de premio</h1>
		<a href="C_Menu.php">Volver al menú</a>
	<?php
	include 'Administrar.php';
	break;

case '1':

	$pag = 'BajaPremioWAP';
	if(!ConPermisos($pag)){
		header('Location: ../views/V_ErrorPermisos.php');
	}
	?>	
		<h1>Esta es la funcionalidad de baja de premio</h1>
		<a href="C_Menu.php">Volver al menú</a>
	<?php
	include 'Administrar.php';
	break;
	
case '2':

	$pag = 'ModificarPremioWAP';
	if(!ConPermisos($pag)){
		header('Location: ../views/V_ErrorPermisos.php');
	}
	?>	
		<h1>Esta es la funcionalidad de modificar premio</h1>
		<a href="C_Menu.php">Volver al menú</a>
	<?php
	include 'Administrar.php';
	break;

case '3':

	$pag = 'ConsultarPremioWAP';
	if(!ConPermisos($pag)){
		header('Location: ../views/V_ErrorPermisos.php');
	}
	?>	
		<h1>Esta es la funcionalidad de consultar premio</h1>
		<a href="C_Menu.php">Volver al menú</a>
	<?php
	include 'Administrar.php';
	break;

default:
	break;
	
}// fin del switch

?>
