<!--
Consulta Paginas 2 ET1
Descripción:

-->

<?php
//Se incluyen las funciones comunes y se carga el idioma.
include('../../functions/FuncionesComunes.php');
$Idioma = CargaIdioma();

//Revisamos que el usuario tiene permiso en la página, si no, vuelve a la página anterior.
$pag = 'SubirPagina2ET1';
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
				<h1><?php echo $Idioma['Consultar página'] ?></h1>
			</div>
			
			<div id="section">
			<?php 
				if ($_FILES['fichero']["error"] > 0)
					  {
					  echo "Error: " . $_FILES['fichero']['error'] . "<br>";
					  }
					else
					  {
					  echo "Nombre: " . $_FILES['fichero']['name'] . "<br>";
					  echo "Tipo: " . $_FILES['fichero']['type'] . "<br>";
					  echo "Tamaño: " . ($_FILES["fichero"]["size"] / 1024) . " kB<br>";
					  echo "Carpeta temporal: " . $_FILES['fichero']['tmp_name'];
					  }
					  /*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/
					  
					  move_uploaded_file($_FILES['fichero']['tmp_name'],"../Archivos/" . $_FILES['fichero']['name']);
			?>
				<a href="sp.php" class="menuButton mainMenuButton"><?php echo $Idioma['boton_atras'] ?></a>
				<a href="gp.php" class="menuButton mainMenuButton"><?php echo $Idioma['boton_menu'] ?></a>
			</div>
		</div>
	</body>
</html>
