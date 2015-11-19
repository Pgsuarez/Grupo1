<?php
	 require_once '../../functions/FuncionesComunes.php';

	//Conectamos con el gestor de la bd
	ConectarBD();

	//Comprobamos si existe ese Rol
  $consulta = mysql_query("SELECT * FROM rol")
  or die('No se puede hacer la consulta'. mysql_error());

	//Lista Usuarios tabla
	while($row = mysql_fetch_array($consulta)) {
		echo "<tr><td> <a href='mr2.php?rol=".$row['Rol']."'>".$row['Rol']."</a></td>
		<td> <a>".$row['Descrip_rol']."<a/></td>
		</tr>";
	}

?> 
