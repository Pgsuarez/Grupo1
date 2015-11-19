<?php


  //se incluyen las funciones comunes
  require_once('../../functions/FuncionesComunes.php');


  $fun=$_POST['fname'];
  $descrip=$_POST['fdescription'];
  $pag=$_POST['fpagesd'];
  $rol=$_POST['froles'];

  //Conectarmos con la bd
  ConectarBD();

  //Realizamos la actualizacion
  $update = mysql_query("UPDATE funcionalidad SET Descrip_fun='$descrip' WHERE Funcionalidad='$fun' ")
  or die('No se puede actualizar: ' . mysql_error());
	
	$setnull= mysql_query("UPDATE pagina SET Funcionalidad = NULL WHERE Funcionalidad = '$fun'")
	or die('No se puede borrar: ' . mysql_error());
  //Aqui solo tiene que actulizar con update el campo de Funcionalidad de pagina , que deberia estar vacio
  foreach($pag as $p)
  {
    $update = mysql_query("UPDATE pagina SET Funcionalidad='$fun' WHERE Pagina='$p'")
    or die('No se puede actualizar: ' . mysql_error());
 }
 
	$borrar= mysql_query("DELETE FROM tiene WHERE  Funcionalidad ='$fun'")
	or die('No se puede borrar: ' . mysql_error());
	
 foreach($rol as $p)
  {
    $update = mysql_query("INSERT INTO tiene (Funcionalidad, Rol) values ('$fun', '$p')")
    or die('No se puede actualizar: ' . mysql_error());
 }

  echo "<center><h2>Los datos se han actualizado</h2><center>";

 ?>
