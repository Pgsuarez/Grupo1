<!--
Modificación Páginas 2 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'ModificarPaginas2ET1';
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

      var name = document.getElementById('pname').value;
      var descript = document.getElementById('pdescript').value;
      var url = document.getElementById('purl').value;

      if(name.length < 1 || name.length > 30){
        document.getElementById('pname').style.backgroundColor = 'red';
        document.getElementById('button1').disabled=true;
      }

      if(url.length < 1 || url.length > 30){
        document.getElementById('purl').style.backgroundColor = 'red';
        document.getElementById('button1').disabled=true;
      }

      if(descript.length < 1 || descript.length > 200){
        document.getElementById('pdescript').style.backgroundColor = 'red';
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
	<?php
		include '../../controllers/ConsultaModPagina.php';

	  $pag=$_GET["pagina"];

		$array=ConsultarPagina($pag);
		?>
	<body link="#FFFFFF">
		<div style="width:750px; height:525px; overflow:hidden; margin: 0 auto; position:relative; margin-top:0px;">
			<div id="header">
				<h1><?php echo $Idioma['Modificar página'] ?></h1>
			</div>
			<div id="section">
				<form action="mp3.php" method="post" class="elegant-aero">
					<label>
						<span><?php echo $Idioma['Pagina'] ?>: </span>
						<input id="pname" type="text" name="pname" placeholder="<?php echo $Idioma['Nombre de la página'] ?>" value='<?php echo $array["Pagina"]; ?>' readonly='readonly' onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
					</label>
					<label>
						<span><?php echo $Idioma['Descripción'] ?>: </span>
						<textarea id="pdescription" name="pdescription" placeholder="<?php echo $Idioma['Descripción de la página'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'><?php echo $array["Descrip_pag"]; ?></textarea>
					</label>
					<label>
						<span><?php echo $Idioma['Funcionalidad'] ?>: </span>
						<select name="func" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'>
							<?php
								include '../../controllers/ListarFuncionalidades_2.php';
							?>
						</select>
					</label>
					<a href="gp.php" class="menuButton mainMenuButton"><?php echo $Idioma['boton_cancelar'] ?></a>
					<button id='button1' type="submit" value="Submit" class="menuButton mainMenuButton" style="margin-top:28px" onClick='validarPagina()' ><?php echo $Idioma['boton_modificar'] ?></button>
				</form>
			</div>
		</div>
	</body>
</html>
