<!--
Modificación Usuario 2 ET1
Descripción:

-->
<?php

//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'ModificarUsuario2ET1';
if(!ConPermisos($pag)){
	header('Location: ../V_ErrorPermisos.php');
}
?>
  <!-- Cabecera -->
	<head>
		<!-- Meta -->
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- CSS -->
			<link rel="stylesheet" href="../css/estilo.css">
			<link rel="stylesheet" href="../css/styles.css">

			<script language='JavaScript'>
			function validarUsuario(){

				var pass = document.getElementById('upass').value;
				var pass2 = document.getElementById('upass2').value;
				var name = document.getElementById('uname').value;
				var apellidos = document.getElementById('uapellidos').value;
				var mail = document.getElementById('umail').value;
				var calle = document.getElementById('ucalle').value;
				var numero = document.getElementById('unumero').value;
				var localidad = document.getElementById('ulocalidad').value;
				
				if (pass != pass2) 
				{
					document.getElementById('upass2').style.backgroundColor = 'red';
					document.getElementById('upass').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}
				
				if(name.length < 1 || name.length > 30){
					document.getElementById('uname').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}
				
				if(apellidos.length < 1 || apellidos.length > 30){
					document.getElementById('uapellidos').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}

				if(mail.length < 1 || mail.length > 30){
					document.getElementById('umail').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}
				if(!(/^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*(.[a-z]{2,3})$/.test(mail)))
				{
					document.getElementById('umail').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}
				if(calle.length > 30){
					document.getElementById('ucalle').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}
				if(numero.length > 3 || (!/^([0-9])*$/.test(numero))){
					document.getElementById('unumero').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}
				if(localidad.length > 30){
					document.getElementById('ulocalidad').style.backgroundColor = 'red';
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
		include '../../controllers/ConsultarModUsuario.php';

		$usuario=$_GET["usuario"];

		$array=ConsultarUsuario($usuario);
	?>

	<body link="#FFFFFF">
			<div style="width:700px; height:900px; overflow:hidden; margin: 0 auto; position:relative; margin-top:0px;">
				<div id="header">
					<h1><?php echo $Idioma['Modificar usuario'] ?></h1>
				</div>
			<div id="section">
			<form action="mu3.php" method="post" class="elegant-aero">
				<label>
					<span><?php echo $Idioma['Usuario'] ?>:</span>
					<input id="ulogin" type="text" name="ulogin" placeholder="<?php echo $Idioma['Usuario'] ?>" value='<?php echo $array["Login"]; ?>' readonly="readonly" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>
				<label>
					<span><?php echo $Idioma['Password'] ?>:</span>
					<input id="upass" type="text" name="upass" placeholder="<?php echo $Idioma['Password'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>
				<label>
					<span><?php echo $Idioma['Verificar_Password'] ?>:</span>
					<input id="upass2" type="text" name="upass2" placeholder="<?php echo $Idioma['Verificar_Password'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>
				<label>
					<span><?php echo $Idioma['Nombre'] ?>:</span>
					<input id="uname" type="text" name="uname" value='<?php echo $array["Nombre"];?>' placeholder="<?php echo $Idioma['Nombre usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>
				<label>
					<span><?php echo $Idioma['Apellidos'] ?>:</span>
					<input id="uapellidos" type="text" name="uapellidos" value='<?php echo $array["Apellidos"];?>' placeholder="<?php echo $Idioma['Apellidos usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>
				<label>
					<span><?php echo $Idioma['Email'] ?>:</span>
					<input id="umail" type="text" name="umail" name='mail' value='<?php echo $array["Mail"]; ?>' placeholder="<?php echo $Idioma['Email usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>
				<label>
					<span><?php echo $Idioma['Calle'] ?>:</span>
				</label>
				<input id="ucalle" type="text" name="ucalle" value='<?php echo $array["Calle"];?>' placeholder="<?php echo $Idioma['Calle usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				<label>
					<span><?php echo $Idioma['Numero'] ?>:</span>
					<input id="unumero" type="text" name="unumero" value='<?php echo $array["Numero"]; ?>' placeholder="<?php echo $Idioma['Número calle usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>
				<label>
					<span><?php echo $Idioma['Localidad'] ?>:</span>
					<input id="ulocalidad" type="text" name="ulocalidad" value='<?php echo $array["Localidad"]; ?>' placeholder="<?php echo $Idioma['Localidad usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>

			<a href="gu.php" class="menuButton mainMenuButton"><?php echo $Idioma['boton_cancelar'] ?></a>
			<button id='button1' type="submit" value="Submit" class="menuButton mainMenuButton" style="margin-top:28px" onClick='validarUsuario()'><?php echo $Idioma['boton_modificar'] ?></button>
			</form>
			</div>
		</div>
	</body>
	</div>
</html>
