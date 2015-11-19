<?php
// CambioIdioma.php
// Creado por: jrodeiro
// Fecha: 19/10/2015
// Esta pagina es invocada por los enlaces de cambio de idioma
// Trae el idioma nuevo a poner en la aplicacion en la variable $idioma

// Recogemos la variable de idioma
$Lenguaje = $_GET['idioma'];

// iniciamos la sesiÃ³n
session_start();
// Sustituimos la variable de sesion de idioma por el nuevo valor
$_SESSION['idioma'] = $Lenguaje;

// obtenemos el nombre de la pagina que llamo a esta 
// guardamos en $salto el string con el nombre de la pagina desde el ultimo /
$salto = strrchr($_SERVER['HTTP_REFERER'],'/');
// eliminamos el / del nombre de la pagina
$salto = str_replace('/','',$salto);

//en el caso de que la pagina de vuelta sea ProcesarLogin.php o ProcesarRegistro.php lo
//enviaremos a Login.php o Registro.php
//if (!strpos($salto,'ProcesarLogin.php'))
	//$salto = '../controllers/Login.php';
//if (!strpos($salto,'ProcesarRegistro.php'))
	//$salto = '../controllers/Registro.php';

// invocamos la pagina desde donde se llamo a esta
header("location: ".$salto." "); 

?> 
