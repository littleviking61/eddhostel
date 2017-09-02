<?php get_header(); ?>


<?php /* HOME */ ?>

	<main role="main" aria-label="Content">

		<!-- booking -->
		<div class="booking top"></div>
		
		<!-- section -->
		<section class="container">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				
				<div class="introduction row">
					<div class="accroche">
						<i class="eddicon-line"></i>
						<h2><?= get_field('titre_daccroche') ?><span class="big color">Edd</span></h2>
					</div>
					<div class="texte">
						<p><span class="big color">Edd</span> <span class="big">Hostel</span> <?= get_field('texte_daccroche') ?></p>
					</div>
				</div>

				<?php if( have_rows('pages_link') ): ?>

					<ul class="pages-links row">

					<?php while( have_rows('pages_link') ): the_row(); 

						$page_link = get_sub_field('link');?>

						<li class="link page-id-<?= $page_link ?>">
							<a href="<?= get_permalink( $page_link ); ?>">

								<p><?= get_field('introduction_texte', $page_link) ?></p>
								<i class="eddicon-croix-big"></i>
								<h3><?= get_field('appelation', $page_link) ?></h3>
								
							</a>
						</li>

					<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			<?php endwhile; endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
