<?php
//=================================================================================
//Fichero:FuncionesComunes.php V2
//Creado por: jrodeiro
//Fecha: 29/9/2015
//Funciones generales del proyecto AccessSkeleton 
//=================================================================================

//---------------------------------------------------------------------------------
//Funcion: ConectarBD()
//Creado por: jrodeiro
//Fecha: 29/9/2015
//Establece conexion con el gestor de bd, si no es posible informa y devuelve 0.
//A continuacion selecciona la bd, si no es posible informa y devuelve 0.
//---------------------------------------------------------------------------------
function ConectarBD()
{
	if (!(mysql_connect('localhost','BD','BD')))
	{
		echo 'No es posible conectar al gestor de bd';
		return 0;
	}
	if (!(mysql_select_db('servidor')))
	{
		echo 'No es posible seleccionar la bd';
		return 0;
	}
}


//---------------------------------------------------------------------------------
//Funcion: CargaIdioma()
//Creado por: jrodeiro
//Fecha: 5/10/2015
//Carga en un array el idioma de la aplicacion a partir de un fichero de idioma
//Utiliza un array asociativo
//---------------------------------------------------------------------------------
function CargaIdioma()
{
	$path = '../';

	if(!file_exists($path.'models/ESPANHOL.php'))
		$path .= '../';

	//incluimos el array de idioma correspondiente con el indicado en la session
	switch ($_SESSION['idioma'])
	{
	case 'espanhol':
		include $path.'models/ESPANHOL.php';
		break;
	case 'english':
		include $path.'models/ENGLISH.php';
		break;
	case 'francais':
		include $path.'models/FRANCAIS.php';
		break;
	DEFAULT:
		include $path.'models/ESPANHOL.php';
		break;
	}
	return $Idioma;
}

//---------------------------------------------------------------------------------
//Funcion: ConPermisos()
//Creado por: jrodeiro
//Fecha: 5/10/2015
//Comprueba si existe login registrado en el sistema, si no existe devuelve 0 
//si existe devuelve 1
//---------------------------------------------------------------------------------
function ConPermisos($pag)
{

	ConectarBD();
	$encontrado = false;
	$log = $_SESSION['Login'];
	
	$consulta = "SELECT * FROM tiene_acceso WHERE Login = '$log'";
	$resultado = mysql_query($consulta);
	
	$consulta2 = "SELECT * FROM realiza r INNER JOIN tiene t ON r.Rol = t.Rol INNER JOIN pagina p ON t.Funcionalidad = p.Funcionalidad WHERE r.Login = '$log'";
	$resultado2 = mysql_query($consulta2);
	
	while($row = mysql_fetch_array($resultado)){
		if($row['Pagina'] == $pag){$encontrado = true;}
	}
	while($row = mysql_fetch_array($resultado2)){
		if($row['Pagina'] == $pag){$encontrado = true;}
	}
	if($encontrado){
		return 1;
	}else{return 0;}
/*
if (isset($_SESSION['login']))
	return 1;
else
	return 0;
*/
}

//se inicializa la sesion
session_start();
//si no hay idioma se pone por defecto
if (!(isset($_SESSION['idioma'])))
                $_SESSION['idioma'] = 'ESPANHOL';
			
?>
