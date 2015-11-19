<?php
//=====================================================================================================================
// Fichero : ProcesarRegistro.php
// Creado por : jrodeiro
// Fecha : 29/9/2015
// Recoge por post los valores de registro de un usuario. Conecta con el gestor de bd y selecciona la bd
// Comprueba si existe el login. Si no existe lo inserta e informa. Si existe informa y proporciona link a Registro.php
//=====================================================================================================================


//incluimos las funciones comunes para tener la conexion a la bd
include '../functions/FuncionesComunes.php';

//Recogemos las variables que vienen por POST desde el formulario
$rol= $_POST['rname'];
$des= $_POST['rdescription'];
$func= $_POST['func'];


//Conectarmos con la bd
ConectarBD();
$Idioma = CargaIdioma();

//Comprobamos si ya existe ese Rol
$consultaSilogin = "select * from rol where Rol = '$rol' ";
$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de Rol');

// Si no devuelve ninguna fila no encontro el login
if (mysql_num_rows($resultado) == 0) 
{
	// insertamos el usuario en la bd
	$InsertaRol = "Insert into rol (Rol, Descrip_rol) values ('$rol','$des')";
	$insercion = mysql_query($InsertaRol) or die('error al ejecutar la insercion de Rol');
	
	for ($i = 0 ; $i < count($func) ; $i++){
		$InsertaRelacion = "Insert into tiene (Funcionalidad, Rol) values ('$func[$i]', '$rol')";
		$insercion = mysql_query($InsertaRelacion) or die('error al ejecutar la insercion de RelacionRolFunc');
		}
	
	
	header('Location:../views/GestionarRoles/ar2.php');
	
}
// devuelve una fila por lo tanto encontro ese login
else
{
	header('Location:../views/GestionarRoles/ar3.php');
}


?>
