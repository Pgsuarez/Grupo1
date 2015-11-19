<?php
include '../functions/FuncionesComunes.php';


//Recogemos las variables que vienen por POST desde el formulario
$rol = $_GET['rol'];

//Conectamos con el gestor de la bd
ConectarBD();

$consulta = "DELETE FROM rol WHERE Rol = '$rol'";

$eliminacion = mysql_query($consulta) or die('error al ejecutar la eliminacion de rol');
	echo 'El Rol <b>' . $rol . '</b> ha sido borrado en el sistema' . '<BR>';

			header('Location:../views/GestionarRoles/br.php');
/*
//Comprobamos si existe ese login
$consultaSilogin = "select * from Usuario where Login = '$login' ";
$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de login');
	

// Si no devuelve ninguna fila no encontro el login
if (mysql_num_rows($resultado) == 1) 
{
	
	//eliminamos la fila entera correspondiente con ese login.
	//$eliminado = baja($login);
	$consulta = "DELETE FROM tabla WHERE id = $login";
	
	// insertamos el usuario en la bd
	$eliminacion = mysql_query($consulta) or die('error al ejecutar la eliminacion de usuario');
	echo 'El Login <b>' . $login . '</b> ha sido borrado en el sistema' . '<BR>';
	
	//se incluye la clase de vista de error V_Error.php
	include '../views/V_Error.php';
	//se instancia dandole el texto a mostrar y la referencia a donde ir y el texto
	//del hiperenlace
	$mensaje = $Idioma['Ha sido registrado en el sistema el usuario : ']. $login . '<BR>';	
	$error = new Error($mensaje,'../controllers/Login.php',$Idioma['Ir al login'],$Idioma);
	//se invoca el metodo Display()
	$error->Display();
	
}
// devuelve una fila por lo tanto encontro ese login
else
{
	
	echo 'El usuario <b>' . $login . '</b> no existe en la bd <BR>';
	echo '<a href=\'../views/Menu.php\'>Volver al menu</a><BR>';

	//se incluye la clase de vista de error V_Error.php
	include '../views/V_Error.php';
	//se instancia dandole el texto a mostrar y la referencia a donde ir y el texto
	//del hiperenlace
	$mensaje = $Idioma['Ha sido registrado en el sistema el Rol : ']. $rol . '<BR>';	
	$error = new Error($mensaje,'../controllers/Login.php',$Idioma['Ir al login'],$Idioma);
	//se invoca el metodo Display()
	$error->Display();
	
	
}
*/


?>