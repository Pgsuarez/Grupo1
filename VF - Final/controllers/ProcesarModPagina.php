

<?php

  //se incluyen las funciones comunes
  require_once('../../functions/FuncionesComunes.php');

  $descripcion = $_POST['pdescription'];
  $pag = $_POST['pname'];
  $fun = $_POST['func'];
  
  //Conectarmos con la bd
  ConectarBD();

  
  //Guardamos los datos
  if($fun == ''){
	$guardado = mysql_query("UPDATE pagina SET Descrip_pag='$descripcion', Funcionalidad = NULL WHERE Pagina='$pag'")
	or die('No se puede introducir los datos');
  }else{
	  $guardado = mysql_query("UPDATE pagina SET Descrip_pag='$descripcion', Funcionalidad = '$fun' WHERE Pagina='$pag'")
		or die('No se puede introducir los datos');
  }
  echo "<center><h2>Los datos se han actualizado</h2></center>";

  ?>
