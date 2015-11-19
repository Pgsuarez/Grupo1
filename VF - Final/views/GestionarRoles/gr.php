<!--
Vista Menú Gestión de Roles ET1
Descripción:
	Menú de opciones de Gestión de Roles
-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'MenuGestionRolesET1';
if(!ConPermisos($pag)){
	header('../V_ErrorPermisos.php');
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
			<a href="ar.php" target="main"><div id="btn1" style="float:left"> <p> <?php echo $Idioma['Crear nuevo rol'] ?> </p> </div> </a>
			<a href="br.php" target="main"><div id="btn2" style="float:left"> <p> <?php echo $Idioma['Eliminar rol'] ?> </p> </div> </a>
			<a href="mr.php" target="main"><div id="btn3" style="float:left"> <p> <?php echo $Idioma['Modificar rol'] ?> </p> </div> </a>
			<a href="cr.php" target="main"><div id="btn4" style="float:left"> <p> <?php echo $Idioma['Consultar rol'] ?> </p> </div> </a>
		</div>
	<!-- Script -->
		<script type="text/javascript" src="../js/botones2.js"></script>
	</body>
</html>
