<!--
Gestión de Usuarios Páginas 1 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'GestionarUsuariosPaginas1ET1';
if(!ConPermisos($pag)){
	header('Location: ../V_ErrorPermisos2.php');
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
				<h1><?php echo $Idioma['Gestionar Pagina/Usuarios'] ?></h1>
			</div>
			<div id="section">
				<form action="gup2.php" method="post" class="elegant-aero">
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
