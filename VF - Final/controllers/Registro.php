<?php
//se incluyen las funciones comunes
include '../functions/FuncionesComunes.php';

	//Se incluye la clase Vista de Registro
	include '../views/V_Registro.php';
	//se instancia la clase vista de Registro
	$registro_view = new Registro(CargaIdioma());
	//se invoca el metodo Display de Registro
	$registro_view->Display();

?>
