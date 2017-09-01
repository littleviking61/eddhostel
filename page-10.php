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

			<?php endwhile; endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
