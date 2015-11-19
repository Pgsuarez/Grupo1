
<?php 
	require_once '../../functions/FuncionesComunes.php';

	//Conectamos con el gestor de la bd
	ConectarBD();

	//Comprobamos si existe ese Rol
	$consultaSilogin = "select * from funcionalidad";
	$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de funcionalidad');
	
	
	//Lista Usuarios tabla
	echo "<option value=''>No asignar</option>";
	while($row = mysql_fetch_array($resultado)) {
		echo "<option value=".$row['Funcionalidad'].">".$row['Funcionalidad']."</option>";
	}
						
?> 

