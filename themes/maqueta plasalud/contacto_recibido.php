<!doctype html>
<html>
<head>
	
	<link rel="stylesheet" href="style.css" media="screen" />
	<meta charset="UTF-8">
	<title>Pla Salud</title>
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
	
	<?php
	$nombre = $mail = $tel = $asunto = $mensaje = '';
	
	$nombre = ( isset($_POST['nombre']) ) ? $_POST['nombre'] : '' ;
	$email = ( isset($_POST['email']) ) ? $_POST['email'] : '' ;
	$telefono = ( isset($_POST['telefono']) ) ? $_POST['telefono'] : '' ;
	$asunto = ( isset($_POST['asunto']) ) ? $_POST['asunto'] : '' ;
	$mensaje = ( isset($_POST['mensaje']) ) ? $_POST['mensaje'] : '' ;
	
	
	$mail_to = 'raul@zamacona.me';
	$subject = 'Contacto web '.$nombre;
	
	$body_message = 'Nombre: '.$nombre."\n";
	$body_message .= 'Email: '.$email."\n";
	$body_message .= 'Telefono: '.$telefono."\n";
	$body_message .= 'Asunto: '.$asunto."\n";
	$body_message .= 'Mensaje: '.$mensaje;
	
	$headers = 'From: '.$email."\r\n";
	$headers .= 'Reply-To: '.$email."\r\n";
	
	$mail_status = mail($mail_to, $subject, $body_message, $headers);
	
	?>
	
</head>
<body>
	
	<div id="container">
		
		<div id="header">
			
			<div id="logo">
				<h1>
				  <a href="http://stackoverflow.com">
					<img src="images/logo_pla.png" alt="Pla Salud" title="Click para regresar al inicio" />
				  </a>
				</h1>
			</div><!--logo-->
			
			<ul id="nav">
				<li> <a href="quienes.html">Quienes Somos</a> </li>
				<li> <a href="comercializacion.html">Comercialización</a> </li>
				<li> <a href="clientes.html">Clientes</a> </li>
				<li> <a href="contacto.html">Contacto</a> </li>
			</ul><!--nav-->
			
		</div><!-- header -->
		
		<div id="main_wrap">
			<div id="main">
				<h2>
					<img src="images/h_contacto.png" alt="Quienes Somos" title="Quienes Somos">
				</h2>
				
				<p>Hemos recibido tu mensaje, nos pondrémos en contacto contigo pronto.</p>
				
			</div><!-- main -->
		</div><!-- main_wrap -->
		
	</div><!--container-->
	
	<div id="footer">
		
		<ul id="menu_home">
			<ul id="menu_home">
				<li><a href="/">[Inicio]</a></li>
                <li><a href="quienes.html">[Quienes Somos]</a></li>
                <li><a href="comercializacion.html">[Comercialización]</a></li>
                <li><a href="clientes.html">[Clientes]</a></li>
                <li><a href="contacto.html">[Contacto]</a></li>
			</ul><!-- menu_home -->
		</ul><!-- menu_home -->
		
	</div><!-- footer -->

</body>
</html>