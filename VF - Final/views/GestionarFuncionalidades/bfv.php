<!--
Baja Funcionalidades Validación ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'BajaFuncionalidadesVET1';
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
				<h1><?php echo $Idioma['Eliminar funcionalidad'] ?></h1>
			</div>
			<div id="section">
				<div align="center">
					<center><h2><?php echo $Idioma['confirm_delete_funcionalidad'] ?></h2></center>

					<a href="../../controllers/ProcesarBajaFuncionalidad.php?func=<?php echo $_GET['func'] ?>" class="menuButton confirmButton"><?php echo $Idioma['boton_si'] ?></a>
					<a href="bf.php" class="menuButton confirmButton"><?php echo $Idioma['boton_no'] ?></a>
				</div>
			</div>
		</div>
	</body>
</html>
