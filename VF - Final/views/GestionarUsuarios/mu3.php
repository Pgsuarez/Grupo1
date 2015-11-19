<!--
Modificación Usuario 3 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include '../../functions/FuncionesComunes.php';
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'ModificarUsuario3ET1';
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
				<center><h1><?php echo $Idioma['Modificar usuario'] ?></h1></center>
			</div>
			<div id="section">
			<?php
			include '../../controllers/ProcesarModUsuario.php';

	        procesarModUsuario( $_POST['ulogin'],$_POST['upass'],$_POST['uname'],$_POST['uapellidos'],$_POST['umail'],$_POST['ucalle'],$_POST['unumero'],$_POST['ulocalidad']);
			?>
			<a href="mu.php" class="menuButton mainMenuButton" style="margin-right:300px"><?php echo $Idioma['boton_volver'] ?></a>
			</div>
		</div>
	</body>
</html>
