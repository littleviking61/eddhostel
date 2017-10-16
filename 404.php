<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<div class="container ">

			<section class="slideshow error">
				<header>
					<div class="logo-color">
						<img src="<?= get_template_directory_uri() ?>/img/logo-color.png" />
					</div>
				</header>
				<div class="thumbnail">
					<h1><?= __( '404 ERROR<br> Page', 'html5blank' ); ?></h1>
				</div>

			</section>

		</div>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
