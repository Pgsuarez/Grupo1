<?php

Class Login
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
	//	include '../views/V_Cabecera_Simple.php';

	?>

<html>
	<head>
		<title>Login</title>
		<link href="../views/css/login.css" rel="stylesheet" type="text/css" media="all" />
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<script language = 'JavaScript'>
	/*
	function blurUsuario(){
		document.getElementById('login').style.border = '';
		document.getElementById('login').style.backgroundColor = 'white';
		
		if (this.value == '') {return <?php echo $Idioma['Usuario']; ?>;}
		else {return document.getElementById('login').value;}
	}
	function blurPass(){
		document.getElementById('pass').style.border = '';
		document.getElementById('pass').style.backgroundColor = 'white';
		if (this.value == '') {return 'Password';}
		else {return document.getElementById('pass').value;}
	}*/
	function focusPass() {
		document.getElementById('button1').disabled=false;
		document.getElementById('pass').style.border = 'medium inset';
		document.getElementById('pass').style.backgroundColor = '#A9F5A9';
		return '';
	}
	function focusLogin() {
		document.getElementById('button1').disabled=false;
		document.getElementById('login').style.border = 'medium inset';
		document.getElementById('login').style.backgroundColor = '#A9F5A9';
		return '';
	}
	function validarLogin(){
		
		var log = document.getElementById('login').value;
		var pass = document.getElementById('pass').value;
		
		if(log.length < 1 || log == '<?php echo $Idioma['Usuario']; ?>') {
			document.getElementById('login').style.backgroundColor = 'red';
			document.getElementById('button1').disabled=true;
			document.getElementById('login').style.border = 'medium outset';
		}
		
		if(pass.length < 1 || pass == 'Password')  {
			document.getElementById('pass').style.backgroundColor = 'red';
			document.getElementById('button1').disabled=true;
			document.getElementById('pass').style.border = 'medium outset';
		}
	}
	</script>
	<body>
	<div>
		<div class="shell">
			
			<div id="head">
				
				<div class="right" style="margin-top:20px">
					<p>
						<a href="../controllers/CambioIdioma.php?idioma=english"><img src='../views/img/ico_en.png'></a> |
						<a href="../controllers/CambioIdioma.php?idioma=espanhol"><img src='../views/img/ico_es.png'></a> |
						<a href="../controllers/CambioIdioma.php?idioma=francais"><img src='../views/img/ico_fr.png'></a> 
					</p>
				</div>
			</div>
		</div>
	</div>
		<div class="message warning">
			<div class="inset">
				<div class="login-head">
					<h1><?php echo $Idioma['Login']; ?></h1>	
				</div>
				<form name='formulario' action='../controllers/ProcesarLogin.php' method='POST'>
					<li>
						<input id='login' name='login' type="text" class="text" value=<?php echo $Idioma['Usuario']; ?> onfocus="this.value = focusLogin();" onblur="if (this.value == '') {this.value = '<?php echo $Idioma['Usuario']; ?>';} this.style.border = '';
		this.style.backgroundColor = 'white';"><a class="icon user"></a>
					</li>
					<div class="clear"></div>
					<li>
						<input id='pass' name='pass' type="Password" value="Password" onfocus = "this.value = focusPass();" onblur="if (this.value == '') {this.value = 'Password';} this.style.border = '';
		this.style.backgroundColor = 'white';"><a class="icon lock"></a>
					</li>
					<div class="clear"></div>
					<div class="submit">
					<input id='button1' type="image" src="../views/img/login.png" alt="Submit" name='accion' onClick="validarLogin();"> 
						<div class="clear"></div>
					</div>
				</form>
			</div>					
		</div>
	</body>
</html>
<?php
}

} //fin de clase
?>