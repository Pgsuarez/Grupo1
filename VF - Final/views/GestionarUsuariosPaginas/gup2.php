<!--
Gestión de Usuarios Páginas 2 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'GestionarUsuariosPaginas2ET1';
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
		function validarClick(){
			var va=document.getElementById('sel1');
				for(var i = 0; i < va.options.length; i++)
				{
					va.options[i].selected = true;
				}
		}
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
	$log=$_POST["user"];
	include '../../controllers/ConsultaUsuarioPaginas.php';
	?>


	<body link="#FFFFFF">
		<div style="width:750px; height:5000px; overflow:hidden; margin: 0 auto; position:relative; margin-top:0px;">
			<div id="header">
				<span><h1><?php echo $Idioma['Gestionar Pagina/Usuarios'] ?></h1></span>
			</div>
			<div id="section">
				<form action="gup3.php" method="post" class="elegant-aero">
				<label>
				<span><?php echo $Idioma['Paginas asignadas a'] ?>:</span>
				</label>
					<input id="log" type="text" name="log" readonly="readonly" value="<?php echo $log ?>" placeholder="<?php echo $log ?>" />
					<div div class="inline">
							<label>
								<span><?php echo $Idioma['Roles asignados'] ?>:</span>
									<select multiple id="sel1" name="paginas[]">
										<?php
										//Llamamos a la funcion para crear la tabla de  rol
											tablaR($log);
									  ?>
									</select>
									<label style="display: inline-block; width: 70px; background: #6af; vertical-align: top;">
										<input type="button" style="width: 70px;" value=">" onclick="pasar('sel1','sel2')">
										<input type="button" style="width: 70px;" value="<" onclick="pasar('sel2','sel1')">
									</label>
									<label style="display: inline-block; width:310px;">
										<span><?php echo $Idioma['Roles'] ?>:</span>
										<select id="sel2" name="rpag" multiple style="width:180px;">
											<?php
												tablaF($log);
										  ?>
										</select>
									</label>
			
							</label>
				</div>
					<a href="gup.php" class="menuButton mainMenuButton"><?php echo $Idioma['boton_cancelar'] ?></a>
					<button id='button1' type="submit" value="Submit" class="menuButton mainMenuButton" style="margin-top:28px" onClick='validarClick()'><?php echo $Idioma['boton_modificar'] ?></button>
				</form>
			</div>
		</div>
	</body>
</html>
