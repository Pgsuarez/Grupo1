
<?php
require_once '../../functions/FuncionesComunes.php';

	//Conectamos con el gestor de la bd
	ConectarBD();
	
$func=$_POST['func'];

	$sql = "select * from funcionalidad where Funcionalidad like '%".$func."%'"  ;
	$result = mysql_query ($sql)or die('No funsiona');

	//obtenemos los datos resultado de la consulta
    while ($row = mysql_fetch_row($result)){
                echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td></tr>';
   }
?>