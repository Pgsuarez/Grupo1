<!--
Error Permisos ET1
Descripción:
	Mensage de error de Permisos.
-->

<html>
	<!-- Cabecera -->
	<head>
		<!-- Meta -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- CSS -->
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<!-- Cuerpo  -->
	<body link="#FFFFFF">
		<div style="width:750px; height:450px; overflow:hidden; margin: 0 auto; position:relative; margin-top:0px;">
			<div id="header">
				<h1><?php echo $Idioma['Error'] ?></h1>
			</div>
			<div id="section">
				<div align="center">
					<h1><?php echo $Idioma['El Usuario no tiene permisos'] ?></h1>
					<a href="<?=$_SERVER['HTTP_REFERER'] ?>" class="menuButton confirmButton"><?php echo $Idioma['boton_volver'] ?></a>
				</div>
			</div>
		</div>
	</body>
</html>
