<!--
Alta Páginas 1 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'AltaPaginas1ET1';
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
			function validarPagina(){

				var des = document.getElementById('pdescription').value;
				var name = document.getElementById('pname').value;

				if(name.length < 1 || name.length > 30){
					document.getElementById('pname').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}

				if(des.length > 200){
					document.getElementById('pdescription').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}

				elem.style.border = '';
			}

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
		<div style="width:750px; height:525px; overflow:hidden; margin: 0 auto; position:relative; margin-top:0px;">
			<div id="header">
				<h1><?php echo $Idioma['ap_title'] ?></h1>
			</div>
			<div id="section">
				<form action="../../controllers/ProcesarAltaPaginas.php" method="post" class="elegant-aero">
					<label>
						<span><?php echo $Idioma['Nombre de la página'] ?>:</span>
						<input id="pname" type="text" name="pname" placeholder="<?php echo $Idioma['Nombre de la página'] ?>"onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'>
					</label>
					<label>
						<span><?php echo $Idioma['Descripcion'] ?>:</span>
						<textarea id="pdescription" name="pdescription" placeholder="<?php echo $Idioma['Descripcion de la pagina'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'></textarea>
					

						<span><?php echo $Idioma['Funcionalidades asignadas'] ?>:</span>
						<select name="func">
							<?php
								include '../../controllers/ListarFuncionalidades_2.php';
							?>
						</select>
					</label>
					<a href="gp.php" class="menuButton mainMenuButton"><?php echo $Idioma['boton_cancelar'] ?></a>
					<button id='button1' type="submit" value="Submit" class="menuButton mainMenuButton" style="margin-top:28px" onClick='validarPagina()'><?php echo $Idioma['boton_crear'] ?></button>
				</form>
			</div>
		</div>
	</body>
</html>
