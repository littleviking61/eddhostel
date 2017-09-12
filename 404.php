<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<div class="container ">

			<section class="slideshow">
				<header>
					<h4><?php __( 'Error 404', 'html5blank' ); ?></h4>
					<h1><?php __( 'Page not found', 'html5blank' ); ?><br><br></h1>
					<div class="detail">
						<i class="eddicon-croix-big"></i>
						<a href="<?php echo home_url(); ?>"><?php __( 'Return home?', 'html5blank' ); ?></a>
					</div>
				</header>
				<div class="thumbnail">
					<img class="avatar" src="<?= esc_url(wp_get_attachment_image_url( get_field('image_erreur_404','option'), 'medium' )); ?>" srcset="<?= esc_attr( wp_get_attachment_image_srcset( get_field('image_erreur_404','option'), 'small') ); ?>" />
				</div>

			</section>

		</div>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
