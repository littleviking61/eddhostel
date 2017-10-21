<?php get_header(); ?>

<?php /* HOWTO */ ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="container">

			<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php get_template_part('slideshow' ); ?>
				
				<section class="find-us">
					<div class="title">
						<i class="eddicon-line"></i>
						<h2><?= get_field('titre_find_us') ?></h2>
					</div>

					<div class="location row	">
						<div class="map">
							<div id="map" class="map" data-location="<?= get_field('gps_location', 'option') ?>" data-zoom="10"></div>
							<!-- <img src="<?= esc_url( wp_get_attachment_image_url( get_field('map'), 'large' ) ); ?>" srcset="<?= esc_attr( wp_get_attachment_image_srcset( get_field('map'), 'medium' ) ); ?>"> -->
						</div>

						<div class="information">
							<div class="logo-color">
								<img src="<?= get_template_directory_uri() ?>/img/logo-color.png" />
							</div>

							<div class="adress">
								<?php get_template_part('adresse'); ?>

								<a href="<?= get_field('lien_googlemap') ?>" target="new">
									<?= get_field('texte_lien_googlemap') ?> >
								</a>
							</div>

						</div>
					</div>
				</section>

				<section class="get-there">
					<div class="title">
						<i class="eddicon-line"></i>
						<h2><?= get_field('titre_get_there') ?></h2>
					</div>
					
					<ul class="parcours row">
					  <?php while( have_rows('parcours') ): the_row();?>
							<?php if (get_sub_field('circle')): ?>
								<li class="circles">
									<p>
										<div class="button circle nohover">
											<?= get_sub_field('first_circle') ?>
										</div>
									</p>
									<p>
										<div class="button circle nohover">
											<?= get_sub_field('second_circle') ?>
										</div>
									</p>

								</li>
							<?php else: ?>
	  						<li class="type">

									<i class="eddicon-<?= get_sub_field('icon') ?> big-icon"></i>
									<h4><?= get_sub_field('titre') ?></h4>
									<p><i class="eddicon-croix-big"></i></p>
									<p><?= get_sub_field('texte') ?></p>
	  								
	  						</li>
							<?php endif ?>

  					<?php endwhile; ?>
					</ul>

				</section>

				<section class="row vcenter">

					<div class="quick-links">
						<?php while( have_rows('quick_link') ): the_row();?>
							<?php if (!empty(get_sub_field('photo'))): ?>
								<div class="bloc photo">
									<img src="<?= esc_url( wp_get_attachment_image_url( get_sub_field('photo'), 'large' ) ); ?>">
								</div>
							<?php else: ?>
								<a class="bloc" href="<?= get_sub_field('link') ?>">
									<i class="eddicon-<?= get_sub_field('icon') ?> big-icon"></i>
									<h4><?= get_sub_field('titre') ?></h4>
								</a>
							<?php endif ?>
						<?php endwhile; ?>
					</div>

					<div class="accroche">
						<p><?= get_field('texte_accroche') ?></p>
					</div>

				</section>
				
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwK9XxcgcYEmsrK_msSgAnYYbCkcC-jI0&callback=initMap">
</script>

<?php get_footer(); ?>
