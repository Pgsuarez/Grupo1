<?php
//=====================================================================================================================
// Fichero : ProcesarRegistro.php
// Creado por : jrodeiro
// Fecha : 29/9/2015
// Recoge por post los valores de registro de un usuario. Conecta con el gestor de bd y selecciona la bd
// Comprueba si existe el login. Si no existe lo inserta e informa. Si existe informa y proporciona link a Registro.php
//=====================================================================================================================


//incluimos las funciones comunes para tener la conexion a la bd
require_once '../../functions/FuncionesComunes.php';



//Recogemos las variables que vienen por POST desde el formulario
$roles= $_POST['roles'];
$log= $_POST['log'];


//Conectarmos con la bd
ConectarBD();

$borrarRelacion = "DELETE FROM realiza WHERE Login ='$log'";
$resultado = mysql_query($borrarRelacion) or die ('error al ejecutar el borrado relacion');

foreach($roles as $a)
  {
    $insertar= mysql_query("INSERT INTO realiza (Login, Rol) VALUES ('$log','$a')")
    or die('No se puede actualizar: ' . mysql_error());
  }

?>
