
<?php
require_once '../../functions/FuncionesComunes.php';

	//Conectamos con el gestor de la bd
	ConectarBD();

$nombre=$_POST['uname'];
$apellidos=$_POST['uap'];


	$sql = "select * from usuario where (Nombre like '%".$nombre."%') and (Apellidos like '%".$apellidos."%')" ;
	$result = mysql_query ($sql)or die('No funsiona');
	// Listamos
	while ($row = mysql_fetch_row($result)){
         echo '<tr><td>'.$row[0].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td><td>'.$row[7].'</td></tr>';
   }
 
?>