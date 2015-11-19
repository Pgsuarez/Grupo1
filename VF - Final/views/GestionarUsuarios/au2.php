<!--
Alta Usuario 2 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'AltaUsuarios2ET1';
if(!ConPermisos($pag)){
	header('Location: ../V_ErrorPermisos.php');
}
?>
<html>
	<!-- Cabecera -->
	<head>
		<!-- Meta -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- CSS -->
		<link rel="stylesheet" href="../css/estilo.css">
		<link rel="stylesheet" href="../css/styles.css">
	</head>
	<!-- Cuerpo  -->
	<body link="#FFFFFF">
		<div style="width:750px; height:450px; overflow:hidden; margin: 0 auto; position:relative; margin-top:0px;">
			<div id="header">
				<h1><?php echo $Idioma['Crear nuevo usuario'] ?></h1>
			</div>
			<div id="section">
				<center><h2><?php echo $Idioma['Usuario dado de alta'] ?></h2></center>
				<a href="au.php" class="menuButton mainMenuButton" style="margin-right:225px"><?php echo $Idioma['Volver'] ?></a>
				<a href="gu.php" class="menuButton mainMenuButton" ><?php echo $Idioma['boton_menu'] ?></a>
			</div>
		</div>
	</body>
</html>
