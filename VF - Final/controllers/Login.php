<?php
//se incluyen las funciones comunes
include_once '../functions/FuncionesComunes.php';

	//Se incluye la clase Vista de Login
	include '../views/V_Login.php';
	//se instancia la clase vista de Login
	$login_view = new Login(CargaIdioma());
	//se invoca el metodo Display de Login
	$login_view->Display();

?>
