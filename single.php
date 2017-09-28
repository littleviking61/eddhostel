<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<div class="container ">

			<?php get_template_part('slideshow', 'single' ); ?>

			<div class="row hcenter">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
						<header class="single-header">

							<!-- categorie -->
							<ul class="main-tags">
								<?php $main_tags = get_field('main_tag'); ?>
								<?php foreach ($main_tags as $main_tag): $main_tag = get_term($main_tag); ?>
									<li><a href="<?= get_term_link($main_tag->term_id); ?>"><?= $main_tag->name; ?></a></li>
								<?php endforeach ?>
							</ul>
							<!-- /categorie -->

							<!-- post title -->
							<h1>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h1>
							<!-- /post title -->

							<!-- post details -->
							<div class="entry-meta">
								<span class="date">
									<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
										<?php the_time('d/m/y'); ?>
									</time>
								</span>
								<span class="author"><?php the_author(); ?></span>
							</div>

							<div class="interact">
								<span class="likes"><?= get_simple_likes_button( get_the_ID() ); ?></span>
								<a href="#respond"><i class="eddicon-comment"></i> <?php comments_number('%','%','%'); ?></a>
							</div>

						</header>

						<?php the_content(); // Dynamic Content ?>

						<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
						<p><?php _e( 'In: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

						
						<div class="social">
							<?= show_share_buttons() ?>
						</div>

						<p><a href="/blog"><i class="eddicon-reply"></i> <?= __('Back') ?></a></p>

						<?php comments_template(); ?>
	

					</article>


					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php __( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>
			</div>

		</div>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
