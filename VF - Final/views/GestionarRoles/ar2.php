<!--
Alta Roles 2 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'AltaRoles2ET1';
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
				<h1><?php echo $Idioma['Alta Rol'] ?></h1>
			</div>
			<div id="section">
				<center><h2><?php echo $Idioma['Rol registrado'] ?></h2></center>
				<a href="ar.php" class="menuButton mainMenuButton" style="margin-right:300px"><?php echo $Idioma['boton_volver'] ?></a>
				<a href="gr.php" class="menuButton mainMenuButton" style="margin-right:300px"><?php echo $Idioma['boton_menu'] ?></a>
			</div>
		</div>
	</body>
</html>
