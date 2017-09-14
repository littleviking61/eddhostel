<?php get_header(); ?>

<?php /* Policies */ ?>

	<main role="main" aria-label="Content">
		<!-- container -->
		<div class="container">

			<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<?php get_template_part('slideshow' ); ?>

				<?php while( have_rows('policies') ): the_row();?>

					<section class="policies">
						<div class="title">
							<i class="eddicon-line"></i>
							<h2><?= get_sub_field('titre') ?></h2>
						</div>
						<div class="texte">
							<?= get_sub_field('texte') ?>
						</div>
					</section>

				<?php endwhile; ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

		</div>
		<!-- /container -->
	</main>

<?php get_footer(); ?>
