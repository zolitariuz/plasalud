	<?php get_header(); the_post(); ?>

		<h2>
			<img src="<?php echo THEMEPATH; ?>images/h_quienes_somos.png" alt="Quienes Somos" title="Quienes Somos">
		</h2>

		<?php the_content(); ?>

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>