<?php
	Class Menu
{


function __construct($Idioma)
{

	$this->Idioma = $Idioma;
	
}

function Display()
{
?>

<?php 
		$Idioma = $this->Idioma;
		//include '../views/V_Cabecera_Simple.php';

	?>
<html>
	<!-- Cabecera -->
	<head>
		<!-- Meta -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- Scripts -->		
		<script type="text/javascript" src="../views/js/TweenLite.min.js"></script>
		<script type="text/javascript" src="../views/js/TweenMax.min.js"></script>
		<script type="text/javascript" src="../views/js/jquery-1.8.3.min.js"></script>
		<!-- Título -->
		<title><?php echo $Idioma['Menu Principal'] ?></title>
		<!-- CSS -->
		<link rel="stylesheet" href="../views/css/menu.css">
	</head>
	<!-- Cuerpo  -->
	<body link="#FFFFFF">
	<!-- Barra superior -->
		<div style="width:100%; height:80px; overflow:hidden; margin: 0 auto; background-color:#333">
			<div style="width:750px; height:80px; margin: 0 auto; overflow:hidden; position:relative">
				<div id="caption" style="height:44px; margin-top:20px;float:left; margin-left:12px; position:absolute"> <?php echo $Idioma['Menu Principal'] ?> </div>
				<div id="backbutton" style="height:44px; width:44px; margin-top:15px; float:left; position:absolute"> <img src="../views/img/backbtn.png" width="44" height="44" /> </div>
				<div id="logout" style="height:44px; width:44px; margin-top:25px; float:left; position:absolute"><img src="../views/img/logout.png" width="80" height="26" /></div>
				<div id="pagecaption" style="height:44px; margin-top:20px;float:left; margin-left:12px; position:absolute"> Caption </div>
                                <!-- Language Selector -->
                                <div id="langs" style="left:10px; height:44px; width:144px; margin-top:60px; float:right; position:relative">
								<a href="../WAP/C_Menu.php"> WAP</a>|
                                    <a href="../controllers/CambioIdioma.php?idioma=english"><img src='../views/img/ico_en.png'></a> |
                                    <a href="../controllers/CambioIdioma.php?idioma=espanhol"><img src='../views/img/ico_es.png'></a> |
                                    <a href="../controllers/CambioIdioma.php?idioma=francais"><img src='../views/img/ico_fr.png'></a><p>
                                </div>
                                
			</div>
		</div>
	<!-- Menú -->
		<div style="width:800px; height:675px; overflow:hidden; margin: 0 auto; position:relative; margin-top:35px;">
                    	<a href="../views/GestionarUsuarios/gu.php" target="main"><div id="btn1" style="float:left"> <p> <?php echo $Idioma['Gestionar usuarios'] ?> </p> </div> </a>
			<a href="../views/GestionarRoles/gr.php" target="main"><div id="btn2" style="float:left"> <p> <?php echo $Idioma['Gestionar roles'] ?> </p> </div> </a>
			<a href="../views/GestionarFuncionalidades/gf.php" target="main"><div id="btn3" style="float:left"> <p> <?php echo $Idioma['Gestionar funcionalidades'] ?> </p> </div> </a>
			<a href="../views/GestionarPaginas/gp.php" target="main"><div id="btn4" style="float:left"> <p> <?php echo $Idioma['Gestionar páginas'] ?> </p> </div> </a>
			<a href="../views/GestionarRolesUsuarios/gru.php" target="main"><div id="btn5" style="float:left"> <p> <?php echo $Idioma['Gestionar roles de usuario'] ?> </p> </div> </a>
			<a href="../views/GestionarUsuariosPaginas/gup.php" target="main"><div id="btn6" style="float:left"> <p> <?php echo $Idioma['Gestionar páginas de usuario'] ?> </p> </div> </a>
			<div id="content" style="position:absolute"> <iframe name="main" frameborder=0 height=675 width=850></iframe>  </div>
		</div>
	<!-- Script -->
        	<script>
		var btn1_text = "<?php echo $Idioma['Gestionar usuarios'] ?>"
		var btn2_text = "<?php echo $Idioma['Gestionar roles'] ?>"
		var btn3_text = "<?php echo $Idioma['Gestionar funcionalidades'] ?>"
		var btn4_text = "<?php echo $Idioma['Gestionar páginas'] ?>"
		var btn5_text = "<?php echo $Idioma['Gestionar roles de usuario'] ?>"
		var btn6_text = "<?php echo $Idioma['Gestionar páginas de usuario'] ?>"
		</script>
		<script type="text/javascript" src="../views/js/botones1.js"></script>
	</body>
</html>
<?php
}
}
?>