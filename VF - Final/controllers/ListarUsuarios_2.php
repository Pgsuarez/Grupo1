
<?php 
	require_once '../../functions/FuncionesComunes.php';

	//Conectamos con el gestor de la bd
	ConectarBD();

	//Comprobamos si existe ese login
	$consultaSilogin = "select * from usuario";
	$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de login');
	
	//Lista Usuarios tabla
	while($row = mysql_fetch_array($resultado)) {
		echo "<option value=".$row['Login'].">".$row['Nombre'].", ".$row['Apellidos']."</option>";
	}
						
?> 

