<?php get_header(); ?>

<?php /* HOME */ ?>

	<main role="main" aria-label="Content">

		<!-- section -->
		<div class="container">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				
				<section class="introduction row vcenter">
					<div class="accroche">
						<i class="eddicon-line"></i>
						<h2><?= get_field('titre_daccroche') ?><span class="big color">Edd</span></h2>
					</div>
					<div class="texte">
						<p><span class="big color">Edd</span> <span class="big">Hostel</span> <?= get_field('texte_daccroche') ?></p>
					</div>
				</section>

				<?php if( have_rows('pages_link') ): ?>

					<ul class="pages-links row">

					<?php while( have_rows('pages_link') ): the_row(); 

						$page_link = get_sub_field('link');?>

						<li class="link mrorm page-id-<?= $page_link ?>">
							<a href="<?= get_permalink( $page_link ); ?>">

								<p><?= get_field('introduction_texte', $page_link) ?></p>
								<div class="miss miss-id-<?= $page_link ?>"></div>
								<i class="eddicon-croix-big"></i>
								<h3><?= get_field('appelation', $page_link) ?></h3>
								
							</a>
						</li>

					<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			<?php endwhile; endif; ?>

		</div>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
