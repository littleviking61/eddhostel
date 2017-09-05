<?php get_header(); ?>

<?php /* Around */ ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="container">

			<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<?php get_template_part('slideshow' ); ?>
				
				<section class="story">

					<div class="title">
						<i class="eddicon-line"></i>
						<h2><?= get_field('titre_around') ?></h2>
					</div>

					<div class="map">
						<img src="<?= esc_url( wp_get_attachment_image_url( get_field('map'), 'large' ) ); ?>" srcset="<?= esc_attr( wp_get_attachment_image_srcset( get_field('map'), 'medium' ) ); ?>">
					</div>
					
					<div class="stories">
						<?php while( have_rows('lieux') ): the_row();?>
								
							<?php $acccroche = get_sub_field('accroche'); ?>
							
							<?php if ($acccroche): ?>
								<div class="mixstory row vcenter">

									<div class="story">
										<div class="photo">
											<img src="<?= esc_url(wp_get_attachment_image_url( get_sub_field('photo'), 'large' )); ?>">
										</div>

										<div class="detail">
											<h4><?= get_sub_field('titre') ?></h4>
											<div><i class="eddicon-croix-big"></i></div>
											<p><?= get_sub_field('texte') ?></p>
										</div>
									</div>

									<div class="accroche">
											<p><?= get_sub_field('texte_accroche') ?></p>
									</div>

								</div>

							<?php else: ?>

								<div class="story row vcenter">
									<div class="photo">
										<img src="<?= esc_url(wp_get_attachment_image_url( get_sub_field('photo'), 'large' )); ?>">
									</div>

									<div class="detail">
										<h4><?= get_sub_field('titre') ?></h4>
										<div><i class="eddicon-croix-big"></i></div>
										<p><?= get_sub_field('texte') ?></p>
									</div>
								</div>

							<?php endif ?>
							
  								
						<?php endwhile; ?>
					</div>

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
