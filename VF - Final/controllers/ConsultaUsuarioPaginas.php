<?php
	require_once '../../functions/FuncionesComunes.php';

function tablaR($log)
{
  //Conectamos con el gestor de la bd
  ConectarBD();

  //Comprobamos si existe ese Rol
  $consulta = "SELECT * FROM tiene_acceso WHERE Login='$log'";
  $funcion = mysql_query($consulta) or die('error al ejecutar la consulta de pag');

  while($fila = mysql_fetch_array($funcion))
  {
    echo "<option value=".$fila['Pagina'].">".$fila['Pagina']."</option>";
  }
}

function tablaF($log)
{
  //Conectamos con el gestor de la bd
  ConectarBD();

	
   $consulta = "SELECT DISTINCT p.Pagina FROM pagina p LEFT JOIN tiene_acceso t ON p.Pagina = t.Pagina WHERE t.Login IS NULL OR (t.Login <> '$log' AND t.Pagina NOT IN (SELECT Pagina FROM tiene_acceso WHERE Login = '$log'))";
   $funcion = mysql_query($consulta) or die('error al ejecutar la consulta de Pag 2');
   
   while($fila = mysql_fetch_array($funcion))
   {
	  echo "<option value=".$fila[0].">".$fila[0]."</option>";
   }
}

 ?>
