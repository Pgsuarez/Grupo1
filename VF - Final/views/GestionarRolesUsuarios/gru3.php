<!--
Gestión Roles Usuarios 3 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
require_once '../../functions/FuncionesComunes.php';
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'GestionarRolesUsuarios3ET1';
if(!ConPermisos($pag)){
	header('../V_ErrorPermisos.php');
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
				<h1><?php echo $Idioma['Gestionar Rol/Usuarios'] ?></h1>
			</div>
			<div id="section">
			<center><h2><?php echo $Idioma['Relacion modificada'] ?></h2></center>
        <?php
	        include '../../controllers/ProcesarUsuarioRol.php';
        ?>
				<a href="gru.php" class="menuButton mainMenuButton" style="margin-right:300px">volver</a>
			</div>
		</div>
	</body>
</html>
