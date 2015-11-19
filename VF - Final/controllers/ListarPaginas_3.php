
<?php 
	require_once '../../functions/FuncionesComunes.php';

	//Conectamos con el gestor de la bd
	ConectarBD();

	//Comprobamos si existe ese Rol
	$consultaSilogin = "SELECT * FROM pagina WHERE Funcionalidad IS NULL";
	$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de Paginas');
	

	//Lista Usuarios tabla
	while($row = mysql_fetch_array($resultado)) {
		echo "<option value=".$row['Pagina'].">".$row['Pagina']."</option>";
	}
						
?> 

