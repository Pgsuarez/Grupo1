
<?php 
	require_once '../../functions/FuncionesComunes.php';

	//Conectamos con el gestor de la bd
	ConectarBD();

	//Comprobamos si existe ese Rol
	$consultaSilogin = "select * from usuario";
	$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de Usuarios');
	$consultaSilogin2 = "select * from rol";
	$resultado2 = mysql_query($consultaSilogin2) or die('error al ejecutar la consulta de Roles');
	

	//Lista Usuarios tabla
	while($row = mysql_fetch_array($resultado)) {
		echo "<option value=".$row['Login'].">".$row['Login'].", ".$row['Nombre']."</option>";
	}
			
?> 

