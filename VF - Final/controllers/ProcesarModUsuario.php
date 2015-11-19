<?php

function procesarModUsuario($usuario,$pass,$nombre,$apellido,$mail,$calle,$num,$localidad)
{
	
  //se incluyen las funciones comunes
  require_once('../../functions/FuncionesComunes.php');
  
  $Idioma = CargaIdioma();

  //Conectarmos con la bd
  ConectarBD();
  //$Idioma = CargaIdioma();

  if($pass!='')
  {
    //Guardamos los datos de la contraseña
    $guardado = mysql_query("UPDATE usuario SET Password='$pass' WHERE Login='$usuario'")
    or die('No se puede introducir los datos');

    echo "<h2>Su password ha sido actualizada</h2>";
  }

  //Guardamos los datos
  $guardado = mysql_query("UPDATE usuario SET Login='$usuario',Nombre='$nombre',Apellidos='$apellido',Mail='$mail',Calle='$calle',
    Numero='$num',Localidad='$localidad' WHERE Login='$usuario'")
  or die('No se puede introducir los datos');

  echo "<h2>Los datos se han actualizado</h2>";
}
  ?>
