<!--
Modificar Funcionalidades 2 ET1
Descripción:

-->


<?php
//Se incluyen las funciones comunes y se carga el idioma.
	include('../../functions/FuncionesComunes.php');
	$Idioma = CargaIdioma();

	//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
	$pag = 'ModificarFuncionalidades2ET1';
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
			function validarFuncionalidad(){

				var des = document.getElementById('fdescription').value;
				var name = document.getElementById('fname').value;

				va=document.getElementById('fpagesd');
				vb=document.getElementById('froles');
				for(var i = 0; i < va.options.length; i++)
				{
					va.options[i].selected = true;
				}
				for(var i = 0; i < vb.options.length; i++)
				{
					vb.options[i].selected = true;
				}

				if(name.length < 1 || name.length > 30){
					document.getElementById('fname').style.backgroundColor = 'red';
					document.getElementById('button1').disabled=true;
				}

				if(des.length < 1 || des.length > 200){
					document.getElementById('fdescription').style.backgroundColor = 'red';
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
		require_once '../../controllers/ConsultarModFuncionalidad.php';

		$fun=$_GET["func"];
	 ?>
	<body link="#FFFFFF">
		<div style="width:750px; height:660px; overflow:hidden; margin: 0 auto; position:relative; margin-top:0px;">
			<div id="header">
				<h1><?php echo $Idioma['Modificar funcionalidad'] ?></h1>
			</div>
			<div id="section">
				<form action="mf3.php" method="post" class="elegant-aero">
					<label>
						<span><?php echo $Idioma['Nombre'] ?>:</span>
						<input id="fname" type="text" name="fname" readonly='readonly' value='<?php echo $fun; ?>' placeholder="Nombre de la funcionalidad" />
					</label>
					<label>
						<span><?php echo $Idioma['Descripcion'] ?>:</span>
						<textarea id="fdescription" name="fdescription" placeholder="<?php echo $Idioma['Descripcion de la funcionalidad'] ?>"><?php echo descrip($fun); ?></textarea>
					</label>

					<div class="inline">
						<label>
							<span><?php echo $Idioma['Paginas asignadas'] ?>:</span>
							<select id="fpagesd" name="fpagesd[]" size="5" multiple><?php tablaF($fun); ?></select>
						</label>
						<label style="display: inline-block; width: 70px; background: #6af; vertical-align: top;">
							<input type="button" value=">" style="width: 70px;" onclick="pasar('fpagesd','fpages')">
							<input type="button" value="<" style="width: 70px;" onclick="pasar('fpages','fpagesd')">
						</label>
						<label style="display: inline-block; width:300px;">
							<span><?php echo $Idioma['Paginas disponibles']?>:</span>
							<select id="fpages" name="fpages" size="5" multiple style="width:180px;"> <?php tablaR($fun); ?> </select>
						</label>
					</div>

					<div class="inline">
						<label>
							<span>Roles asignados:</span>
							<select id="froles" name="froles[]" size="5" multiple>
								<?php tabla2F($fun); ?>
							</select>
						</label>
						<label style="display: inline-block; width: 70px; background: #6af; vertical-align: top;">
							<input type="button" value=">" style="width: 70px;" onclick="pasar('froles','frol')">
							<input type="button" value="<" style="width: 70px;" onclick="pasar('frol','froles')">
						</label>
						<label style="display: inline-block; width:300px;">
							<span><?php echo $Idioma['Roles disponibles']?>:</span>
							<select id="frol" name="frol" size="5" multiple style="width:180px;"> <?php tabla2R($fun); ?> </select>
						</label>
					</div>

					<a href="mf.php" class="menuButton mainMenuButton"><?php echo $Idioma['boton_cancelar'] ?></a>
					<button type="submit" value="Submit" class="menuButton mainMenuButton" onclick='validarFuncionalidad()' ><?php echo $Idioma['boton_modificar'] ?></button>

				</form>
			</div>
		</div>
	</body>
</html>