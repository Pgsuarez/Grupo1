<!--
Consulta de Roles 1 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'ConsultaRoles1ET1';
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
		<script language='JavaScript'>

			function focusBorder(elem) {
				elem.style.border = 'thin solid #000000';
				elem.style.backgroundColor = '#A9F5A9';
				document.getElementById('button1').disabled=false;
			}

			function nofocusBorder(elem) {
				elem.style.border = '';
				elem.style.backgroundColor = 'white';
			}

		</script>
	</head>
	<!-- Cuerpo  -->
	<body link="#FFFFFF">
		<div style="width:750px; height:450px; overflow:hidden; margin: 0 auto; position:relative; margin-top:0px;">
			<div id="header">
				<h1><?php echo $Idioma['Consultar rol'] ?></h1>
			</div>
			<div id="section">
				<form action="cr2.php" method="POST" class="elegant-aero">
					<label>
						<span><?php echo $Idioma['Buscar por nombre'] ?>:</span>
						<input id="buscar_user" type="text" name="rol" placeholder="<?php echo $Idioma['Buscar por nombre'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'>
					</label>
					<button id='button1' type="submit" value="Submit" class="menuButton mainMenuButton" style="margin-right:28px" ><?php echo $Idioma['Buscar'] ?></button>
					<a href="gr.php" class="menuButton mainMenuButton" style="margin-right:28px"><?php echo $Idioma['Volver'] ?></a>
				</form>
			</div>
		</div>
	</body>
</html>
