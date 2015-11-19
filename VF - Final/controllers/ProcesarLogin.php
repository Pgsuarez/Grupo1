<?php
//========================================================================================
//Fichero: ProcesarLogin.php V2
//Creado por: jrodeiro
//Fecha:29/9/2015
//Recoge login y password del formulario de login Login.php. Accede a la bd y comprueba si
//el login existe, si no existe informa. Despues comprueba si la password coincide, si no coincide informa.
//Si el login existe y la password coincide redirige a Menu.php
//----------------------------------------------------------------------------------------
//Fecha:5/10/2015
// Incluido registro de sesión del login de usuario e idioma
//----------------------------------------------------------------------------------------
//Se utiliza una libreria de funciones FuncionesComunes.php para la funcion de conexion a la bd
//========================================================================================

//incluimos las funciones comunes para tener la conexion a la bd
include '../functions/FuncionesComunes.php';

//Recogemos las variables que vienen por POST desde el formulario

$login= $_POST['login'];
$pass= $_POST['pass'];

//Conectarmos con la bd
ConectarBD();
$Idioma = CargaIdioma();

//comprobamos la identidad
$ExisteLogin = 'select * from usuario where Login = \''. $login . '\'';
$ResultadoExisteLogin = mysql_query($ExisteLogin) or die('No se puede comprobar si existe login');

if (mysql_num_rows($ResultadoExisteLogin)==1)
{
	//si existe el login
	//sacamos la fila de usuario del recordset
	$TuplaLogin = mysql_fetch_array($ResultadoExisteLogin);
	//comprobamos si el atributo PASSWORD coincide con lo introducido por el usuario como password para ese login
	if ($TuplaLogin['Password'] == $pass)
	{
		//Registramos el login del usuario y el idioma en la sesion
		session_start();
		$_SESSION['Login'] = $login;
		header('Location:../controllers/Menu.php');
	}
	else
	//la pass introducida por el usuario no es correcta para ese login
	{
		header('Location:../views/V_Pass_Error.html');
	}	
}
//si es incorrecta
else
{
	header('Location:../views/V_Login_Error.html');
}

?>
