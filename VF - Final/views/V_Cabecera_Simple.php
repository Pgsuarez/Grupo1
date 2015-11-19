<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title><?php echo $Idioma['Demo ejemplo para la ET1']; ?></title>
	<link rel="stylesheet" href="../views/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="../views/css/registro.css" type="text/css" media="all" />
	
</head>
<body>
	<script language="JavaScript" src="../views/js/md5.js" type="text/javascript"></script> 
	<script language="JavaScript">

	function validarRegistro(){
		
		//Validar Campos
		var login = document.getElementById('login').value;
		var pass = document.getElementById('pass').value;
		var name = document.getElementById('name').value;
		var lname = document.getElementById('lname').value;
		var calle = document.getElementById('calle').value;
		var num = document.getElementById('num').value;
		var mail = document.getElementById('mail').value;
		var loc = document.getElementById('loc').value;
		
		if(login.length < 1 || login.length > 30){
			document.getElementById('login').style.backgroundColor = 'red';
			document.getElementById('button1').disabled=true;
		}
		
		if(pass.length < 1 || pass.length > 30){
			document.getElementById('pass').style.backgroundColor = 'red';
			document.getElementById('button1').disabled=true;
		}
		
		if(name.length < 1 || name.length > 30){
			document.getElementById('name').style.backgroundColor = 'red';
			document.getElementById('button1').disabled=true;
		}
		
		if(lname.length < 1 || lname.length > 30){
			document.getElementById('lname').style.backgroundColor = 'red';
			document.getElementById('button1').disabled=true;
		}
		
		if(calle.length < 1 || calle.length > 30){
			document.getElementById('calle').style.backgroundColor = 'red';
			document.getElementById('button1').disabled=true;
		}
		
		if(num.length < 1 || num.length > 3){
			document.getElementById('num').style.backgroundColor = 'red';
			document.getElementById('button1').disabled=true;
		}
		if(mail.length < 1 || mail.length > 30){
			document.getElementById('mail').style.backgroundColor = 'red';
			document.getElementById('button1').disabled=true;
		}
		if(loc.length < 1 || loc.length > 30){
			document.getElementById('loc').style.backgroundColor = 'red';
			document.getElementById('button1').disabled=true;
		}
		
		document.forms["formulario"].elements["pass"].value = (hex_md5(document.forms["formulario"].elements["pass"].value));
		
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
/*	
	window.onload = function () {
	document.formulario.nombre.focus();
	document.formulario.addEventListener('submit', validarFormulario);
	}

	function validarFormulario(evObject) {
		evObject.preventDefault();
		var todoCorrecto = true;
		var formulario = document.formulario;
		for (var i=0; i<formulario.length; i++) {
                if(formulario[i].type =='text') {
                               if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)){
	                               alert (formulario[i].name+ ' no puede estar vacío o contener sólo espacios en blanco');
	                               todoCorrecto=false;
                               }
                }
	   }
		if (todoCorrecto ==true) {formulario.submit();}
	}*/
	</script>
	
	<!-- Header -->
	<div id="header">
		<div class="shell">
			
			<div id="head">
				<h1><a href="#"><?php echo $Idioma['Gestión de permisos (Admin)']; ?></a></h1>
				<div class="right">
					<p>
						<a href="../controllers/CambioIdioma.php?idioma=english"><img src='../views/img/ico_en.png'></a>
						<a href="../controllers/CambioIdioma.php?idioma=espanhol"><img src='../views/img/ico_es.png'></a>
						<a href="../controllers/Registro.php"><?php echo $Idioma['Registro']; ?></a> 
						
					</p>
				</div>
			</div>
			
			<!-- Navigation -->
			<div id="navigation">
				<ul>
				    
				</ul>
			</div>
			<!-- End Navigation -->
			
		</div>
	</div>
	<!-- End Header -->


