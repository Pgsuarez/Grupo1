<?php
//se incluyen las funciones comunes
include '../functions/FuncionesComunes.php';

	//Se incluye la clase Vista de Registro
	include '../html/GestionarUsuario/au.html';
	
	//se instancia la clase vista de Registro
	$registro_view = new AltaUsuario(CargaIdioma());
	//se invoca el metodo Display de Registro
	$registro_view->Display();

?>