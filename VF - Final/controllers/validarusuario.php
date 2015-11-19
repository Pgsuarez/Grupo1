<?php
include '../functions/FuncionesComunes.php';

$login=$_POST['login'];

ConectarBD();

$consultaSilogin = "select * from Usuario where LOGIN = '$login' ";
$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de login');

// Si no devuelve ninguna fila no encontro el login
if (mysql_num_rows($resultado) !=0 ) 
{
	document.getElementById("login").style.color = "red";
	
}else{

document.getElementById("login").style.color = "red";

}

?>