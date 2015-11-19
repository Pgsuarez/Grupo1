<?php
	require_once '../../functions/FuncionesComunes.php';

function descrip($rol)
{
  //Conectamos con el gestor de la bd
  ConectarBD();

  $consulta = mysql_query("SELECT * FROM rol WHERE Rol='$rol'")
	or die('No se puede hacer la consulta'. mysql_error());

	//creamos un array asociativo y extraemos la información
		while($fila = mysql_fetch_assoc($consulta))
		{
			return $fila["Descrip_rol"];
		}

}

function tablaR($rol)
{
  //Conectamos con el gestor de la bd
  ConectarBD();

  //Comprobamos si existe ese Rol
  $consulta = "SELECT * FROM tiene WHERE Rol='$rol'";
  $funcion = mysql_query($consulta) or die('error al ejecutar la consulta de Funcionalidad');

	$i=0;
	$array=array();

  while($fila = mysql_fetch_array($funcion))
  {
    echo "<option value=".$fila['Funcionalidad'].">".$fila['Funcionalidad']."</option>";
  }
}

function tablaF($rol)
{
	
//Conectamos con el gestor de la bd
 
  ConectarBD();

  //Muestra las paginas que no tienen asignadas una funcionalidad
   $consulta = "SELECT DISTINCT f.Funcionalidad FROM funcionalidad f  LEFT JOIN tiene t ON f.Funcionalidad = t.Funcionalidad WHERE t.Rol IS NULL OR (t.Rol <> '$rol' AND t.Funcionalidad NOT IN (SELECT Funcionalidad FROM tiene WHERE Rol = '$rol'))";
   $funcion = mysql_query($consulta) or die('error al ejecutar la consulta de Rol 2');

   while($fila = mysql_fetch_array($funcion))
   {
	  echo "<option value=".$fila['Funcionalidad'].">".$fila['Funcionalidad']."</option>";
   }
   
   
   
  //Conectamos con el gestor de la bd
  ConectarBD();

  //Comprobamos si existe ese Rol
   $consulta = "SELECT * FROM funcionalidad";
   $funcionR = mysql_query($consulta) or die('error al ejecutar la consulta de Funcionalidad');

   $a=array();
   $i=0;

   while($row = mysql_fetch_assoc($funcionR))
   {
     $a[$i]=$row['Funcionalidad'];
     $i++;
   }

   $consulta = "SELECT * FROM tiene WHERE Rol='$rol'";
   $funcion = mysql_query($consulta) or die('error al ejecutar la consulta de Funcionalidad');

   while($fila = mysql_fetch_array($funcion))
   {
     foreach($a as $b)
     {
       if($b!=$fila["Funcionalidad"])
       {
         echo "<option value=".$b.">".$b."</option>";
       }
     }
   }
}

 ?>
