<?php
function ConsultarPagina($pag)
{
  require_once '../../functions/FuncionesComunes.php';

  //Conectarmos con la bd
  ConectarBD();
  //$Idioma = CargaIdioma();

  //Realizamos la consulta
  $consulta = mysql_query("SELECT * FROM pagina WHERE Pagina='$pag'")
  or die('No se puede hacer la consulta'. mysql_error());

  //creamos un array asociativo y extraemos la información
    while($fila = mysql_fetch_assoc($consulta))
    {
      return $fila;
    }
}
?>
