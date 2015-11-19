<?php

  //se incluyen las funciones comunes
  require_once '../../functions/FuncionesComunes.php';

  //Conectarmos con la bd
  ConectarBD();

  //Realizamos la consulta
  $consulta = mysql_query("SELECT * FROM usuario")
  or die('No se puede hacer la consulta'. mysql_error());

  while($row = mysql_fetch_array($consulta)) {
    echo "<tr><td> <a href='mu2.php?usuario=".$row['Login']."'>".$row['Login']."</a></td>
    <td> <a>".$row['Nombre']."<a/></td>
    <td> <a>".$row['Apellidos']."</a></td>
    <td> <a>".$row['Mail']."</a></td>
    </tr>";
  }

?>
