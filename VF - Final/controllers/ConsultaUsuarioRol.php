<?php
	require_once '../../functions/FuncionesComunes.php';

function tablaR($log)
{
  //Conectamos con el gestor de la bd
  ConectarBD();

  //Comprobamos si existe ese Rol
  $consulta = "SELECT * FROM realiza WHERE Login='$log'";
  $funcion = mysql_query($consulta) or die('error al ejecutar la consulta de Rol');

  while($fila = mysql_fetch_array($funcion))
  {
    echo "<option value=".$fila['Rol'].">".$fila['Rol']."</option>";
  }
}

function tablaF($log)
{
  //Conectamos con el gestor de la bd
  ConectarBD();

	
   $consulta = "SELECT DISTINCT r.Rol FROM rol r LEFT JOIN realiza z ON r.Rol = z.Rol WHERE z.Login IS NULL OR (z.Login <> '$log' AND z.Rol NOT IN (SELECT Rol FROM realiza WHERE Login = '$log'))";
   $funcion = mysql_query($consulta) or die('error al ejecutar la consulta de Rol 2');
   
   while($fila = mysql_fetch_array($funcion))
   {
	  echo "<option value=".$fila[0].">".$fila[0]."</option>";
   }
}

 ?>
