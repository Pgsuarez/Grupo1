<!--
Baja Roles Validación ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'BajaRolesVET1';
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
				<h1><?php echo $Idioma['Eliminar rol'] ?></h1>
			</div>
			<div id="section">
				<div align="center">
					<h2><?php echo $Idioma['confirm_delete_rol'] ?></h2>

					<a href="../../controllers/ProcesarBajaRol.php?rol=<?php echo $_GET['rol'] ?>" class="menuButton confirmButton"><?php echo $Idioma['boton_si'] ?></a>

					<a href="br.php" class="menuButton confirmButton"><?php echo $Idioma['boton_no'] ?></a>
				</div>
			</div>
		</div>
	</body>
</html>
