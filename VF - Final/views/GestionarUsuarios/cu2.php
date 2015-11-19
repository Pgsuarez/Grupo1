<!--
Consulta Usuario 2 ET1
Descripción:

-->

<?php
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'ConsultaUsuario2ET1';
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
		<div style="width:750px; height:565px; overflow:hidden; margin: 0 auto; position:relative; margin-top:0px;">
			<div id="header">
				<h1><?php echo $Idioma['Consultar usuario'] ?></h1>
			</div>
			<div id="section">
				<div id="table-wrapper">
					<div id="table-scroll">
						<table class="listaxe">
							<thead>
								<tr>
									<th><?php echo $Idioma['Login'] ?></th>
									<th><?php echo $Idioma['Nombre'] ?></th>
									<th><?php echo $Idioma['Apellidos'] ?></th>
									<th><?php echo $Idioma['Email'] ?></th>
									<th><?php echo $Idioma['Calle'] ?></th>
									<th><?php echo $Idioma['Numero'] ?></th>
									<th><?php echo $Idioma['Localidad'] ?></th>
								</tr>
							</thead>
							<tbody>
								 <?php include '../../controllers/ConsultaUsuario.php'; ?>
							</tbody>
						</table>
					</div>
				</div>
				<a href="cu.php" class="menuButton mainMenuButton" style="margin-right:225px"><?php echo $Idioma['boton_cancelar'] ?></a>
				<a href="gu.php" class="menuButton mainMenuButton"><?php echo $Idioma['boton_menu'] ?></a>
			</div>
		</div>
	</body>
</html>