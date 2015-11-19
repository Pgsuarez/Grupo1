<!--
Consulta Paginas 1 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'SubirPaginaET1';
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
				<h1><?php echo $Idioma['Subir página'] ?></h1>
			</div>
			<div id="section">
				<form action="sp2.php" enctype="multipart/form-data" method="POST">
					<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
					Enviar este fichero: <input name="fichero" type="file" id="fichero" />
					<input type="submit" value="Enviar fichero" />
				</form>
				<a href="gp.php" class="menuButton mainMenuButton" style="margin-right:20px"><?php echo $Idioma['boton_cancelar'] ?></a>
			</div>
		</div>
	</body>
</html>
