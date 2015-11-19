<?php
//Inclusion de funciones comunes
require_once '../functions/FuncionesComunes.php';
//si esta logueado se le muestra el Menu
$pag = 'Menu';
if (ConPermisos($pag))
{
	//Se incluye la clase de vista de Menu
	include '../views/V_Menu.php';
	//Se instancia la clase Menu
	$menu = new Menu(CargaIdioma());
	//Se muestra el Menu
	$menu->Display();
}
else{
//Si no tiene permisos se redirige al Login
	$pag = 'MenuWAP';
	if (conPermisos($pag)){
		header('Location:../WAP/C_Menu.php');
	}else{
		header('Location:../views/V_ErrorPermisos.php');
	}
}
?>
