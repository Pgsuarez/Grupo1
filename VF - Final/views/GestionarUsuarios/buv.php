<!--
Baja Usuario Valiodacion ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'BajaUsuarioVET1';
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
				<h1><?php echo $Idioma['Eliminar usuario'] ?></h1>
			</div>
			<div id="section">
				<div align="center">
					<center><h2><?php echo $Idioma['Confirmar eliminacion usuario'] ?></h2></center>

					<a href="../../controllers/ProcesarBajaUsuario.php?login=<?php echo $_GET['login'] ?>" class="menuButton confirmButton" style="margin-top:28px"><?php echo $Idioma['boton_si'] ?></a>
					<a href="bu.php" class="menuButton confirmButton" style="margin-top:28px"><?php echo $Idioma['boton_no'] ?></a>
				</div>
			</div>
		</div>
	</body>
</html>
