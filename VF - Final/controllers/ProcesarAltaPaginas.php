<?php
//=====================================================================================================================
// Fichero : ProcesarRegistro.php
// Creado por : jrodeiro
// Fecha : 29/9/2015
// Recoge por post los valores de registro de un usuario. Conecta con el gestor de bd y selecciona la bd
// Comprueba si existe el login. Si no existe lo inserta e informa. Si existe informa y proporciona link a Registro.php
//=====================================================================================================================


//incluimos las funciones comunes para tener la conexion a la bd
require_once '../functions/FuncionesComunes.php';

//Recogemos las variables que vienen por POST desde el formulario
$pag= $_POST['pname'];
$des= $_POST['pdescription'];
$func= $_POST['func'];

//Conectarmos con la bd
ConectarBD();
$Idioma = CargaIdioma();

//Comprobamos si ya existe ese Rol
$consultaSilogin = "select * from pagina where Pagina = '$pag' ";
$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de la Pagina');

// Si no devuelve ninguna fila no encontro el login
if (mysql_num_rows($resultado) == 0) 
{
	if($func == ''){
		$InsertaRol = "INSERT INTO pagina (Pagina, Descrip_pag) values ('$pag','$des')";
		$insercion = mysql_query($InsertaRol) or die('error al ejecutar la insercion de  Pagina Null');
	}
	else{
	// insertamos el usuario en la bd
			$InsertaRol = "INSERT INTO pagina (Pagina, Descrip_pag, Funcionalidad) values ('$pag','$des', '$func')";
			$insercion = mysql_query($InsertaRol) or die('error al ejecutar la insercion de  Pagina');
		}
	header('Location:../views/GestionarPaginas/ap2.php');
	
}
// devuelve una fila por lo tanto encontro ese login
else
{
	header('Location:../views/GestionarPaginas/ap3.php');
}


?>
