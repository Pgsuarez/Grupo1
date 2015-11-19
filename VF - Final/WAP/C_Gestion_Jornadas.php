<?php

include('../functions/FuncionesComunes.php');

$accion = $_REQUEST['accion'];

switch ($accion) 
{
case 'alta':
	
	$pag = 'AltaJornadaWAP';
	if(!ConPermisos($pag)){
		header('Location: ../views/V_ErrorPermisos.php');
	}
	?>	
		
		<h1>Esta es la funcionalidad de alta de jornada</h1>
		<a href="C_Menu.php">Volver al menú</a>
	<?php
	include 'Administrar.php';
	break;

case 'baja':

	$pag = 'BajaJornadaWAP';
	if(!ConPermisos($pag)){
		header('Location: ../views/V_ErrorPermisos.php');
	}
	?>	
		<h1>Esta es la funcionalidad de baja de jornada</h1>
		<a href="C_Menu.php">Volver al menú</a>
	<?php
	include 'Administrar.php';
	break;
	
case 'modificar':
	
	$pag = 'ModificarJornadaWAP';
	if(!ConPermisos($pag)){
		header('Location: ../views/V_ErrorPermisos.php');
	}
	?>	
		<h1>Esta es la funcionalidad de modificar jornada</h1>
		<a href="C_Menu.php">Volver al menú</a>
	<?php
	include 'Administrar.php';
	break;

case 'consultar':

	$pag = 'ConsultarJornadaWAP';
	if(!ConPermisos($pag)){
		header('Location: ../views/V_ErrorPermisos.php');
	}
	?>	
		<h1>Esta es la funcionalidad de consultar jornada</h1>
		<a href="C_Menu.php">Volver al menú</a>
	<?php
	include 'Administrar.php';
	break;

default:
	break;
	
}// fin del switch

?>
