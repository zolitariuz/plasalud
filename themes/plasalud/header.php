<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>favicon.png">
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon.png">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">

			<?php if ( is_home() ) {?>
				<div id="logo">
		            <h1>
		              <a href="<?php site_url( 'quienes' ); ?>">
		                <img src="<?php echo THEMEPATH; ?>images/logo_pla_w.png" alt="Pla Salud" title="Click para regresar al inicio" />
		              </a>
		            </h1>
		        </div><!--logo-->

		        <div id="video">

		            <video width="792" height="528s" controls autoplay>
		                <source src="<?php echo THEMEPATH; ?>videos/videoweb.mp4" type="video/mp4">
		                <source src="<?php echo THEMEPATH; ?>videos/videoweb.theora.ogv" type="video/ogg">
		                <source src="<?php echo THEMEPATH; ?>videos/videoweb.webm" type="video/webm">
		            </video>

		        </div><!--video-->

		        <p id="saltar"><a href="<?php echo site_url( 'quienes' ); ?>">Saltar Intro</a></p>

				<div id="footer">

		             <ul id="menu_home">
		                <li><a href="<?php echo home_url(); ?>">[Inicio]</a></li>
		                <li><a href="<?php echo site_url('quienes'); ?>">[Quienes Somos]</a></li>
		                <li><a href="<?php echo site_url('comercializacion'); ?>">[Comercialización]</a></li>
		                <li><a href="<?php echo site_url('clientes'); ?>">[Clientes]</a></li>
		                <li><a href="<?php echo site_url('contacto'); ?>">[Contacto]</a></li>
		            </ul><!-- menu_home -->

		        </div><!-- footer -->

			<?php } else { ?>

				<div id="header">

					<div id="logo">
						<h1>
						  <a href="<?php echo home_url(); ?>">
							<img src="<?php echo THEMEPATH; ?>images/logo_pla.png" alt="Pla Salud" title="Click para regresar al inicio" />
						  </a>
						</h1>
					</div><!--logo-->

					<ul id="nav">
						<li> <a class="selected" href="<?php echo site_url('quienes'); ?>">Quienes Somos</a> </li>
						<li> <a href="<?php echo site_url('comercializacion'); ?>">Comercialización</a> </li>
						<li> <a href="<?php echo site_url('clientes'); ?>">Clientes</a> </li>
						<li> <a href="<?php echo site_url('contacto'); ?>">Contacto</a> </li>
					</ul><!--nav-->

				</div><!-- header -->

				<div id="main_wrap">
					<div id="main">

			<?php } ?>
