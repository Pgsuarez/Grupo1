<?php
//=====================================================================================
//Fichero : V_Menu.php
//Creado por : jrodeiro
//Fecha : 6/10/2015
//Clase de Vista Error. Incluye la plantilla con css estructurada en V_Cabecera.php y 
//V_Footer.php
//=====================================================================================

//-------------------------------------------------------------------------------------
//Clase Menu
//Metodos: 
//	construct()
//	Display()
//Atributos :
//TextoError - texto de error a mostrar
//PaginaRegreso - Pagina a indicar en el hiperenlace
//TextoEnlace - Texto a mostrar en el hiperenlace
//--------------------------------------------------------------------------------------
class Error 
{

var $TextoError;
var $PaginaRegreso;
var $TextoEnlace;
var $Idioma;


//metodo constructor. No precisa parametros y por lo tanto no se le colocan
function __construct($textoerror,$paginaregreso, $textoenlace, $idioma)
{

$this->TextoError = $textoerror;
$this->PaginaRegreso = $paginaregreso;
$this->TextoEnlace = $textoenlace;
$this->Idioma = $idioma;

}
//metodo de envio al cliente de la vista
Function Display()
{
	//se carga el menu de idioma
	$Idioma = $this->Idioma;
	//Se incluye la cabecera de la pagina html que llevan todas las paginas de la web,
	//si esta logueado la general, sino la de sin loguear
	if (ConPermisos())//1
		//include 'V_Cabecera.php';
		include '../html/Menus/index.html';
	else
		include 'V_Cabecera_Simple.php';

	//Aqui va el cuerpo principal de la pagina

	?>
	<div id='box'>

		<?php echo $this->TextoError.'<br>';?>
		<a href='<?php echo $this->PaginaRegreso; ?>'>
			<?php echo $this->TextoEnlace; ?>
		</a>

	</div>

	<?php
	//Fin de cuerpo de pagina
}

}
?>
