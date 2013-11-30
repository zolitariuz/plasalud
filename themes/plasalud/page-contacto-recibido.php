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

	get_header();
	?>

		<h2>
			<img src="<?php echo THEMEPATH; ?>images/h_contacto.png" alt="Quienes Somos" title="Quienes Somos">
		</h2>

		<p>Hemos recibido tu mensaje, nos pondrémos en contacto contigo pronto.</p>


	<?php get_sidebar(); ?>
	<?php get_footer(); ?>