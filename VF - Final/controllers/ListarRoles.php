
<?php 
	require_once '../../functions/FuncionesComunes.php';

	//Conectamos con el gestor de la bd
	ConectarBD();

	//Comprobamos si existe ese Rol
	$consultaSilogin = "select * from rol";
	$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de login');
	
	//Lista Usuarios tabla
	while($row = mysql_fetch_array($resultado)) {
		echo "<tr><td> <a href='brv.php?rol=".$row['Rol']."'>".$row['Rol']."</a></td>
		<td> <a>".$row['Descrip_rol']."<a/></td>
		</tr>";
	}
						
?> 

