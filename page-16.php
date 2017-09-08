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

					<ul class="rooms row">
					  <?php while( have_rows('rooms') ): the_row();?>

  						<li class="room">
								<div class="detail">
									<img src="<?= esc_url(wp_get_attachment_image_url( get_sub_field('photo'), 'large' )); ?>">
									<h4><?= get_sub_field('appelation') ?></h4>
									<p><i class="eddicon-croix-big"></i></p>
									<p><?= get_sub_field('description') ?></p>
								</div>
								<a href="#book" class="button"><?= __('Book now', 'html5blank') ?></a>
  								
  						</li>

  					<?php endwhile; ?>
					</ul>
				</section>

				<section class="row vcenter">

					<div class="accomodation">
						<?php while( have_rows('accomodation') ): the_row();?>
							<div>
								<i class="eddicon-<?= get_sub_field('icon') ?> big-icon"></i>
								<h4><?= get_sub_field('titre') ?></h4>
							</div>
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
