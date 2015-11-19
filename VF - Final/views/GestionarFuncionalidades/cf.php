<!--
Consulta Funcionalidades 1 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'ConsultaFuncionalidades1ET1';
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
				<h1><?php echo $Idioma['Consultar funcionalidad'] ?></h1>
			</div>
			<div id="section">
				<form action="cf2.php" method="POST" class="elegant-aero">
					<label>
						<span><?php echo $Idioma['Buscar funcionalidad'] ?>:</span>
						<input id="buscar_func" type="text" name="func" placeholder="<?php echo $Idioma['Buscar funcionalidad'] ?>" >
					</label>
					<button id='button1' type="submit" value="Submit" class="menuButton mainMenuButton" style="margin-right:28px"><?php echo $Idioma['Buscar'] ?></button>
					<a href="gf.php" class="menuButton mainMenuButton" style="margin-right:28px"><?php echo $Idioma['boton_cancelar'] ?></a>
				</form>

			</div>
		</div>
	</body>
</html>
