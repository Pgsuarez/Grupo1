<?php
//se incluyen las funciones comunes
include '../functions/FuncionesComunes.php';

	//Se incluye la clase Vista de Registro
	include '../html/GestionarRoles/ar.php';
	//se instancia la clase vista de Registro
	$registro_view = new AltaRol(CargaIdioma());
	//se invoca el metodo Display de Registro
	$registro_view->Display();

?>
