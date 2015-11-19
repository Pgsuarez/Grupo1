<?php
  //se incluyen las funciones comunes
  require_once('../../functions/FuncionesComunes.php');

  //Conectarmos con la bd
  ConectarBD();


  $funR=$_POST['funR'];
  $descrip=$_POST['rdescription'];
  $rol=$_POST['rname'];



  //Realizamos la actualizacion
  $update = mysql_query("UPDATE rol SET Descrip_rol='$descrip' WHERE Rol='$rol' ")
  or die('No se puede actualizar: ' . mysql_error());

  //Eliminamos todas las tablas de la relacion
  $borrar= mysql_query("DELETE FROM tiene WHERE rol = '$rol'")
  or die('No se puede borrar: ' . mysql_error());

  //Cogemos el array de la lista de funcionalidades de rol y creamos todas las relaciones
  foreach($funR as $a)
  {
    $borrar= mysql_query("INSERT INTO tiene (Funcionalidad, Rol) VALUES ('$a','$rol')")
    or die('No se puede actualizar: ' . mysql_error());
  }

 ?>
