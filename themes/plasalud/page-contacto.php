	<?php get_header(); ?>

		<h2>
			<img src="<?php echo THEMEPATH; ?>images/h_contacto.png" alt="Quienes Somos" title="Quienes Somos">
		</h2>

		<form id="forma_contacto" class="clearfix" method="post" action="<?php echo site_url( '/contacto-recibido' ); ?>">

			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre">

			<label for="email">E-mail:</label>
			<input type="email" name="email">

			<label for="telefono">Teléfono:</label>
			<input type="text" name="telefono">

			<label for="asunto">Asunto:</label>
			<input type="text" name="asunto">

			<label for="mensaje">Mensaje:</label>
			<textarea name="mensaje"></textarea>

			<div class="clear"></div>

			<input type="submit" value="enviar" >

		</form><!-- forma_contacto -->

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>