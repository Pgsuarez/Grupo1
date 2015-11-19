<?php
	require_once '../../functions/FuncionesComunes.php';

	//Conectamos con el gestor de la bd
	ConectarBD();

	//Comprobamos si existe ese Rol
	$consultaSilogin = "select * from funcionalidad";
	$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de Funcionalidad');

	//Lista Usuarios tabla
	while($row = mysql_fetch_array($resultado)) {
		echo "<tr><td> <a href='mf2.php?func=".$row['Funcionalidad']."'>".$row['Funcionalidad']."</a></td>
		<td> <a>".$row['Descrip_fun']."<a/></td>
		</tr>";
	}

?>
