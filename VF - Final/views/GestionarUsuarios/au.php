<!--
Alta Usuario 1 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'AltaUsuarios1ET1';
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
			function validarUsuario(){

				var login = document.getElementById('ulogin').value;
				var pass = document.getElementById('upass').value;
				var pass2 = document.getElementById('upass2').value;
				var name = document.getElementById('uname').value;
				var apellidos = document.getElementById('uapellidos').value;
				var mail = document.getElementById('umail').value;
				var calle = document.getElementById('ucalle').value;
				var numero = document.getElementById('unumero').value;
				var localidad = document.getElementById('ulocalidad').value;

				if(login.length < 1 || login.length > 30){
					document.getElementById('ulogin').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}

				if(name.length < 1 || name.length > 30){
					document.getElementById('uname').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}
				
				if ((pass != pass2) || (pass == '') || (pass2 == '')) 
				{
					document.getElementById('upass2').style.backgroundColor = 'red';
					document.getElementById('upass').style.backgroundColor = 'red';
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
				
				if(!(/^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-z0-9A-Z-]+)*(.[a-z]{2,3})$/.test(mail)))
				{
					document.getElementById('umail').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}
				if(calle.length > 30){
					document.getElementById('ucalle').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}
				if(numero.length > 4 || !/^([0-9])*$/.test(numero)){
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

	<body link="#FFFFFF">
			<div style="width:700px; height:900px; overflow:hidden; margin: 0 auto; position:relative; margin-top:0px;">
				<div id="header">
					<h1><?php echo $Idioma['au_title'] ?></h1>
				</div>
			<div id="section">
			<form action="../../controllers/ProcesarAltaUsuario.php" method="POST" class="elegant-aero">
				<label>
					<span><?php echo $Idioma['Usuario'] ?>:</span>
					<input id="ulogin" type="text" name="ulogin" placeholder="<?php echo $Idioma['Usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
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
					<input id="uname" type="text" name="uname" placeholder="<?php echo $Idioma['Nombre usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>
				<label>
					<span><?php echo $Idioma['Apellidos'] ?>:</span>
					<input id="uapellidos" type="text" name="uapellidos" placeholder="<?php echo $Idioma['Apellidos usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>
				<label>
					<span><?php echo $Idioma['Email'] ?>:</span>
					<input id="umail" type="text" name="umail" placeholder="<?php echo $Idioma['Email usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>
				<label>
					<span><?php echo $Idioma['Calle'] ?>:</span>
				</label>
				<input id="ucalle" type="text" name="ucalle" placeholder="<?php echo $Idioma['Calle usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				<label>
					<span><?php echo $Idioma['Numero'] ?>:</span>
					<input id="unumero" type="text" name="unumero" placeholder="<?php echo $Idioma['Número calle usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>
				<label>
					<span><?php echo $Idioma['Localidad'] ?>:</span>
					<input id="ulocalidad" type="text" name="ulocalidad" placeholder="<?php echo $Idioma['Localidad usuario'] ?>" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
				</label>

			<a href="../GestionarUsuarios/gu.php" class="menuButton mainMenuButton"><?php echo $Idioma['boton_cancelar'] ?></a>
			<button id='button1' type="submit" value="Submit" class="menuButton mainMenuButton" style="margin-top:28px" onClick='validarUsuario()'><?php echo $Idioma['boton_crear'] ?></button>
			</form>
			</div>
		</div>
	</body>
	</div>
</html>
