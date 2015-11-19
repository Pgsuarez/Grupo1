<!--
Gestión de Usuarios Páginas 3 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'GestionUsuariosPaginas3ET1';
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
				<h1>Gestion Usuarios Paginas</h1>
			</div>
			<div id="section">
			<a>Relacion modificada</a>
        <?php
	        include '../../controllers/ProcesarUsuarioPaginas.php';
        ?>
				<a href="gup.php" class="menuButton mainMenuButton" style="margin-right:300px">volver</a>
			</div>
		</div>
	</body>
</html>
