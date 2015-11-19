<?php

Class Menu
{

function __construct()
{
}

function Display()
{


	$Idioma = CargaIdioma();

	echo $Idioma['Bienvenido'].' : '.$_SESSION['login'];

}

}

?>
