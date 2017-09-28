<?php get_header(); ?>

<?php /* FACILITIES */ ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="container">

			<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<?php get_template_part('slideshow' ); ?>
				
				<section class="rooms">
					<div class="title">
						<i class="eddicon-line"></i>
						<h2><?= get_field('titre_room') ?></h2>
					</div>

					<ul class="menu-facilities">
 					  <?php while( have_rows('rooms') ): the_row();?>
				      <li>
				 				<a href="#<?= sanitize_title(get_sub_field('appelation')) ?>"><?= get_sub_field('appelation') ?></a></li>
				 			</li>
  				 	<?php endwhile; ?>
				 	</ul>

					<ul class="rooms row">
					  <?php while( have_rows('rooms') ): the_row();?>

  						<li class="room" id="<?= sanitize_title(get_sub_field('appelation')) ?>">
								<a href="<?= get_sub_field('book_link') ?>">
									<div class="detail">
										<div class="thumbnail">
											<img src="<?= esc_url(wp_get_attachment_image_url( get_sub_field('photo'), 'large' )); ?>">
										</div>
										<h4><?= get_sub_field('appelation') ?></h4>
										<p><i class="eddicon-croix-big"></i></p>
										<p><?= get_sub_field('description') ?></p>
									</div>
									<span class="button"><?= __('Book Now', 'html5blank') ?></span>
									
								</a>
  								
  						</li>

  					<?php endwhile; ?>
					</ul>
				</section>

				<section class="row vcenter">

					<div class="accomodations">
						<?php while( have_rows('accomodation') ): the_row();?>
							<?php if (!empty(get_sub_field('info_supplementaire'))): ?>
								<div class="bloc flip-container">
									<div class="flipper">
										<div class="front">
											<i class="eddicon-<?= get_sub_field('icon') ?> big-icon"></i>
											<h4><?= get_sub_field('titre') ?></h4>
										</div>
										<div class="back">
											<div class="content">
												<?= get_sub_field('info_supplementaire') ?>
											</div>
										</div>
									</div>
								</div>
							<?php else: ?>
								<div class="bloc">
									<i class="eddicon-<?= get_sub_field('icon') ?> big-icon"></i>
									<h4><?= get_sub_field('titre') ?></h4>
								</div>
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

<section class="footer-informations" id="faq">

	<div class="container">
		<div class="title">
			<i class="eddicon-line"></i>
			<h2><?= get_field('titre_faq', 'option') ?></h2>
		</div>

		<ol class="faq row">
		  <?php while( have_rows('faq', 'option') ): the_row();?>

				<li class="question">
					<p><?= get_sub_field('question') ?></p>
					<p class="answer"><i><?= get_sub_field('answer') ?></i></p>
				</li>

			<?php endwhile; ?>
		</ol>

	</div>

</section>
	
<?php get_footer(); ?>
