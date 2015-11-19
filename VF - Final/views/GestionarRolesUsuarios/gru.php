<!--
Gestión Roles Usuarios 1 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
require_once '../../functions/FuncionesComunes.php';
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'GestionarRolesUsuarios1ET1';
if(!ConPermisos($pag)){
	header('../V_ErrorPermisos2.php');
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
				<h1><?php echo $Idioma['Gestionar roles de usuario'] ?></h1>
			</div>
			<div id="section">
				<form action="gru2.php" method="post" class="elegant-aero">
					<div class="inline">
						<label>
							<span><?php echo $Idioma['Usuario'] ?>:</span>
							<select id='user' name="user" size='5'>
								<?php
									include '../../controllers/ListarUsuarios_2.php';
								?>

							</select>
						</label>
					</div>
					<button type="submit" value="Submit" class="menuButton mainMenuButton"><?php echo $Idioma['Buscar'] ?></button>
				</form>
			</div>
		</div>
	</body>
</html>
