<!--
Baja Páginas Validacion ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'BajaPaginasVET1';
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
				<h1><?php echo $Idioma['Eliminar página'] ?></h1>
			</div>
			<div id="section">
				<div align="center">
					<h1><?php echo $Idioma['confirm_delete_pagina'] ?></h1>

					<a href="../../controllers/ProcesarBajaPagina.php?pag=<?php echo $_GET['pag'] ?>" class="menuButton confirmButton"><?php echo $Idioma['boton_si'] ?></a>
					<a href="bp.php" class="menuButton confirmButton"><?php echo $Idioma['boton_no'] ?></a>
				</div>
			</div>
		</div>
	</body>
</html>
