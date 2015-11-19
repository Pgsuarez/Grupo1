<?php
	require_once '../../functions/FuncionesComunes.php';

	//Conectamos con el gestor de la bd
	ConectarBD();

	//Comprobamos si existe ese Rol
	$consultaSilogin = "SELECT * FROM pagina";
	$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de Pagina');

	//Lista Usuarios tabla
	while($row = mysql_fetch_array($resultado)) {
		echo "<tr><td> <a href='mp2.php?pagina=".$row['Pagina']."'>".$row['Pagina']."</a></td>
		<td> <a>".$row['Descrip_pag']."<a/></td>
		<td> <a>".$row['Funcionalidad']."<a/></td>
		</tr>";
	}

?>
