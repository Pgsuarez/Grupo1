<!--
Vista Menú Gestión de Páginas ET1
Descripción:
	Menú de opciones de Gestión de Páginas
-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'MenuGestionPaginasET1';
if(!ConPermisos($pag)){
	header('Location: ../V_ErrorPermisos.php');
}
?>
<html>
	<!-- Cabecera -->
	<head>
		<!-- Meta -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- Scripts -->
		<script type="text/javascript" src="../js/TweenLite.min.js"></script>
		<script type="text/javascript" src="../js/TweenMax.min.js"></script>
		<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
		<!-- CSS -->
		<link rel="stylesheet" href="../css/estilo.css">
	</head>
	<!-- Cuerpo  -->
	<body link="#FFFFFF">
	<!-- Menú -->
		<div style="width:750px; height:450px; overflow:hidden; margin: 0 auto; position:relative; margin-top:0px;">
			<a href="ap.php" target="main"><div id="btn1" style="float:left"> <p> <?php echo $Idioma['Crear nueva página'] ?> </p> </div> </a>
			<a href="bp.php" target="main"><div id="btn2" style="float:left"> <p> <?php echo $Idioma['Eliminar página'] ?> </p> </div> </a>
			<a href="mp.php" target="main"><div id="btn3" style="float:left"> <p> <?php echo $Idioma['Modificar página'] ?> </p> </div> </a>
			<a href="cp.php" target="main"><div id="btn4" style="float:left"> <p> <?php echo $Idioma['Consultar página'] ?> </p> </div> </a>
			<a href="sp.php" target="main"><div id="btn5" style="float:left"> <p> <?php echo $Idioma['Subir página'] ?> </p> </div> </a>
		</div>
	<!-- Script -->
		<script type="text/javascript" src="../js/botones3.js"></script>
	</body>
</html>
