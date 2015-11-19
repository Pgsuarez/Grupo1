<?php
//=====================================================================================================================
// Fichero : ProcesarAltaUsuario.php
// Creado por : jrodeiro
// Fecha : 29/9/2015
// Recoge por post los valores de registro de un usuario. Conecta con el gestor de bd y selecciona la bd
// Comprueba si existe el login. Si no existe lo inserta e informa. Si existe informa y proporciona link a Registro.php
//=====================================================================================================================


//incluimos las funciones comunes para tener la conexion a la bd
include '../functions/FuncionesComunes.php';

//Recogemos las variables que vienen por POST desde el formulario
$login= $_POST['ulogin'];
$pass= $_POST['upass'];
$pass2= $_POST['upass2'];
$nombre= $_POST['uname'];
$apellidos= $_POST['uapellidos'];
$mail= $_POST['umail'];
$calle= $_POST['ucalle'];
$numero= $_POST['unumero'];
$localidad= $_POST['ulocalidad'];


//Conectarmos con la bd
ConectarBD();
$Idioma = CargaIdioma();

//Comprobamos si ya existe ese login
$consultaSilogin = "select Login from usuario where Login = '$login' ";
$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de login');

// Si no devuelve ninguna fila no encontro el login
if (mysql_num_rows($resultado) == 0) 
{

	// insertamos el usuario en la bd
	$InsertaUsuario = "INSERT INTO usuario (Login, Password, Nombre, Apellidos, Mail, Calle, Numero, Localidad) values ('$login','$pass','$nombre','$apellidos','$mail','$calle','$numero','$localidad')";
	$insercion = mysql_query($InsertaUsuario) or die('error al ejecutar la insercion de usuario');

	header('Location:../views/GestionarUsuarios/au2.php');
	
}
// devuelve una fila por lo tanto encontro ese login
else
{
	header('Location:../views/GestionarUsuarios/au3.php');
}


?>
