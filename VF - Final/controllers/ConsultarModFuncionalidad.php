<?php

  require_once '../../functions/FuncionesComunes.php';

function descrip($fun)
{
  //Conectamos con el gestor de la bd
  ConectarBD();

  $consulta = mysql_query("SELECT * FROM funcionalidad WHERE Funcionalidad='$fun'")
	or die('No se puede hacer la consulta'. mysql_error());

	//creamos un array asociativo y extraemos la información
		while($fila = mysql_fetch_assoc($consulta))
		{
			return $fila["Descrip_fun"];
		}

}

function tablaF($fun)
{
  //Conectamos con el gestor de la bd
  ConectarBD();

  $consulta = "SELECT * FROM pagina WHERE Funcionalidad='$fun'";
  $funcion = mysql_query($consulta) or die('error al ejecutar la consulta de Funcionalidad');

  while($fila = mysql_fetch_array($funcion))
  {
    echo "<option value='".$fila['Pagina']."'>".$fila['Pagina']."</option>";
  }

}

function tablaR($fun)
{
  //Conectamos con el gestor de la bd
  ConectarBD();

  //Muestra las paginas que no tienen asignadas una funcionalidad
   $consulta = "SELECT * FROM pagina WHERE Funcionalidad IS NULL";
   $funcion = mysql_query($consulta) or die('error al ejecutar la consulta de Funcionalidad');

   while($fila = mysql_fetch_array($funcion))
   {
         echo "<option value='".$fila['Pagina']."'>".$fila['Pagina']."</option>";
   }
}
   
   function tabla2F($fun)
{
  //Conectamos con el gestor de la bd
  ConectarBD();
  
  $consulta = "SELECT * FROM tiene WHERE Funcionalidad='$fun'";
  $funcion = mysql_query($consulta) or die('error al ejecutar la consulta de Rol');

  while($fila = mysql_fetch_array($funcion))
  {
    echo "<option value='".$fila['Rol']."'>".$fila['Rol']."</option>";
  }

}

function tabla2R($fun)
{
  //Conectamos con el gestor de la bd
 
  ConectarBD();

  //Muestra las paginas que no tienen asignadas una funcionalidad
   $consulta = "SELECT DISTINCT r.Rol FROM rol r LEFT JOIN tiene t ON r.Rol = t.Rol WHERE t.Funcionalidad IS NULL OR (t.Funcionalidad <> '$fun' AND t.Rol NOT IN (SELECT Rol FROM tiene WHERE Funcionalidad = '$fun'))";
   $funcion = mysql_query($consulta) or die('error al ejecutar la consulta de Rol 2');

   while($fila = mysql_fetch_array($funcion))
   {
	  echo "<option value=".$fila['Rol'].">".$fila['Rol']."</option>";
   }
}



?>
