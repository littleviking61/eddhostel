<?php get_header(); ?>

<?php /* Recrutement */ ?>

	<main role="main" aria-label="Content">
		<!-- container -->
		<div class="container">

			<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<?php get_template_part('slideshow' ); ?>
				
				<section class="recrutement-intro">
					<div class="title">
						<i class="eddicon-line"></i>
						<h2><?= get_field('titre') ?></h2>
					</div>
					<div class="texte">
						<?= get_field('texte') ?>
					</div>
				</section>

				<?php while( have_rows('postes') ): the_row();?>

					<section class="posts">
						<div class="title">
							<i class="eddicon-line"></i>
							<h2><?= get_sub_field('titre') ?></h2>
						</div>
						<div class="texte">
							<?= get_sub_field('texte') ?>
						</div>
						<p>
							<?php if (get_sub_field('pdf')): ?>
								<a class="button" href="<?= get_sub_field('pdf') ?>" target="_blank"><?= __('Download application', 'html5blank') ?></a>
							<?php endif ?>
						</p>
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
