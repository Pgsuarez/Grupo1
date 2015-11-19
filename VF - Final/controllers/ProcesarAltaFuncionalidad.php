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
$func= $_POST['fname'];
$des= $_POST['fdescription'];
$pag= $_POST['fpages'];
$rol= $_POST['froles'];
$i = 0;

//Conectarmos con la bd
ConectarBD();
$Idioma = CargaIdioma();

//Comprobamos si ya existe ese Rol
$consultaSilogin = "select * from funcionalidad where Funcionalidad = '$func' ";
$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de la Funcionalidad');

// Si no devuelve ninguna fila no encontro el login
if (mysql_num_rows($resultado) == 0) 
{
	// insertamos el usuario en la bd
	$InsertaRol = "Insert into funcionalidad (Funcionalidad, Descrip_fun) values ('$func','$des')";
	$insercion = mysql_query($InsertaRol) or die('error al ejecutar la insercion de Rol');
	
	
	for ($i = 0 ; $i < count($pag) ; $i++){
		$InsertaRelacion = "UPDATE pagina SET Funcionalidad = '$func' WHERE Pagina = '$pag[$i]'";
		$insercion = mysql_query($InsertaRelacion) or die('error al ejecutar la insercion de RelacionFuncPag');
		}
		
	for ($i = 0 ; $i < count($rol) ; $i++){
		$InsertaRelacion = "INSERT INTO tiene (Funcionalidad, Rol) values ('$func', '$rol[$i]')";
		$insercion = mysql_query($InsertaRelacion) or die('error al ejecutar la insercion de RelacionFuncRoL');
		
	}

			header('Location:../views/GestionarFuncionalidades/af2.php');
	
}
// devuelve una fila por lo tanto encontro ese login
else
{
	header('Location:../views/GestionarFuncionalidades/af3.php');
}


?>
