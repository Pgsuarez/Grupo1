<!--
Consulta Usuario 1 ET1
Descripción:

-->

<?php
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'ConsultaUsuario1ET1';
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
				<h1><?php echo $Idioma['Consultar usuario'] ?></h1>
			</div>
			<div id="section">
				<form action="cu2.php" method="POST" class="elegant-aero">
					<label>
						<span><?php echo $Idioma['Buscar por nombre'] ?></span>
						<input id="buscar_user" type="text" name="uname" placeholder="<?php echo $Idioma['Buscar por nombre'] ?>" />
					</label>
					<label>
						<span><?php echo $Idioma['Buscar por apellidos'] ?></span>
						<input id="buscar_apellido" type="text" name="uap" placeholder="<?php echo $Idioma['Buscar por apellidos'] ?>" />

					</label>
				<a href="gu.php" class="menuButton mainMenuButton" style="margin-right:225px"><?php echo $Idioma['boton_cancelar'] ?></a>
				<button id='button1' type="submit" value="Submit" class="menuButton mainMenuButton" style="margin-right:28px" onClick='validarUsuario()'><?php echo $Idioma['Buscar'] ?></button>
				</form>
			</div>
		</div>
	</body>
</html>
