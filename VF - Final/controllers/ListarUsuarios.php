
<?php 
	require_once '../../functions/FuncionesComunes.php';

	//Conectamos con el gestor de la bd
	ConectarBD();

	//Comprobamos si existe ese login
	$consultaSilogin = "select * from usuario";
	$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de login');
	
	//Lista Usuarios tabla
	while($row = mysql_fetch_array($resultado)) {
		echo "<tr><td> <a href='buv.php?login=".$row['Login']."'>".$row['Login']."</a></td>
		<td> <a>".$row['Nombre']."<a/></td>
		<td> <a>".$row['Apellidos']."</a></td>
		<td> <a>".$row['Mail']."</a></td>
		</tr>";
	}
						
?> 

