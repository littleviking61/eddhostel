<?php get_header(); ?>

<?php /* HOSTEL */ ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="container">

			<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<section class="slideshow">
					Slideshow
				</section>

				<section class="history">
					<div class="title">
						<i class="eddicon-line"></i>
						<h2><?= get_field('titre_history') ?></h2>
					</div>
					<div class="row vcenter">
						<div class="accroche">
							<p><?= get_field('accroche_history') ?></p>
						</div>
						<div class="texte">
							<p><?= get_field('texte_history') ?></p>
						</div>
					</div>
				</section>

				<section class="team">
					<div class="title">
						<i class="eddicon-line"></i>
						<h2><?= get_field('titre_team') ?></h2>
					</div>
					<ul class="members row">
					  <?php while( have_rows('team') ): the_row();?>

  						<li class="member page-id-<?= get_sub_field('categorie') ?>">

								<img class="avatar" src="<?= esc_url(wp_get_attachment_image_url( get_sub_field('photo'), 'small' )); ?>">
								<p><i class="eddicon-croix-big"></i></p>
								<h3><?= get_sub_field('appelation') ?></h3>
								<p class="color"><i><?= get_sub_field('titre') ?></i></p>
								<p><?= get_sub_field('presentation') ?></p>
  								
  						</li>

  					<?php endwhile; ?>
					</ul>
				</section>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
