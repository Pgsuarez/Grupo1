<!--
Modificación de Roles 2 ET1
Descripción:

-->
<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'ModificarRoles2ET1';
if(!ConPermisos($pag)){
	header('../V_ErrorPermisos.php');
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
		<script type="text/javascript">
		<!--
		function pasar(param1,param2)
		{
				obj=document.getElementById(param1);
				if (obj.selectedIndex==-1) return;
			for (i=0; opt=obj.options[i]; i++)
				if (opt.selected)
				{
						valor=opt.value; // almacenar value
						txt=obj.options[i].text; // almacenar el texto
						obj.options[i]=null; // borrar el item si está seleccionado
						obj2=document.getElementById(param2);
						var opc = new Option(txt,valor);
						obj2.add(opc);
				 }
		}
		-->
		</script>

		<script language='JavaScript'>
			function validarRol(){

				var des = document.getElementById('rdescription').value;
				var name = document.getElementById('rname').value;

				//$('#sel1 option').prop('selected', true);

				va=document.getElementById('sel1');
				for(var i = 0; i < va.options.length; i++)
				{
					va.options[i].selected = true;
				}

				if(name.length < 1 || name.length > 30){
					document.getElementById('rname').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}

				if(des.length < 1 || des.length > 200){
					document.getElementById('rdescription').style.backgroundColor = 'red';
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

	$rol=$_GET["rol"];
	$array=array();

	include '../../controllers/ConsultaModRol.php';
	?>


	<body link="#FFFFFF">
		<div style="width:750px; height:660px; overflow:hidden; margin: 0 auto; position:relative; margin-top:0px;">
			<div id="header">
				<h1><?php echo $Idioma['Modificar rol'] ?></h1>
			</div>
			<div id="section">
				<form action="mr3.php" method="post" class="elegant-aero">
					<label>
						<span><?php echo $Idioma['Nombre2'] ?></span>
						<input id="rname" type="text" value='<?php echo $rol;?>' readonly='readonly' name="rname" placeholder="Nombre del rol" onFocus='focusBorder(this)' onBlur='nofocusBorder(this)'/>
					</label>
					<label>
						<span><?php echo $Idioma['Descripcion'] ?></span>
						<textarea id="rdescription" name="rdescription"  placeholder="Descripción del rol"  onBlur='nofocusBorder(this)' onFocus='focusBorder(this)'><?php echo descrip($rol);?></textarea>
					</label>
					
					<div class="inline">
						<label>
							<span><?php echo $Idioma['Funcionalidades'] ?>:</span>
							<select id="sel1" name="funR[]" size="5" multiple><?php tablaR($rol); ?></select>
						</label>
						<label style="display: inline-block; width: 70px; background: #6af; vertical-align: top;">
							<input type="button" value=">" style="width: 70px;" onclick="pasar('sel1','sel2')">
							<input type="button" value="<" style="width: 70px;" onclick="pasar('sel2','sel1')">
						</label>
						<label style="display: inline-block; width:300px;">
							<span><?php echo $Idioma['Funcionalidades asignadas'] ?>:</span>
							<select id="sel2" name="fun" size="5" multiple style="width:180px;"><?php tablaF($rol); ?></select>
						</label>
					</div>
					
					<a href="mr.php" class="menuButton mainMenuButton"><?php echo $Idioma['boton_cancelar'] ?></a>
					<button id='button1' type="submit" value="Submit" class="menuButton mainMenuButton" style="margin-top:28px" onClick='validarRol()'><?php echo $Idioma['boton_modificar'] ?></button>
				</form>
			</div>
		</div>
	</body>
</html>