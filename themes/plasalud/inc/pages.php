<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// Clientes
		if( ! get_page_by_path('clientes') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Clientes',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Comercializacion
		if( ! get_page_by_path('comercializacion') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Comercialización',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Quienes
		if( ! get_page_by_path('quienes') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Quienes',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Contacto
		if( ! get_page_by_path('contacto') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});