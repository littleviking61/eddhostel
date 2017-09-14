<?php 

global $wp_query;
$args = array_merge( $wp_query->query_vars, array( 'post__not_in' => array(get_field('feature_article_in_blog', 'option')->ID) ) );
query_posts( $args ); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) :  ?>
					<div class="thumbnail">
						<?php the_post_thumbnail('medium');  ?>
					</div>
				<?php endif; ?>
				<!-- /post thumbnail -->

				<div class="content">
					<!-- categorie -->
					<ul class="main-tags">
						<?php $main_tags = get_field('main_tag'); ?>
						<?php foreach ($main_tags as $main_tag): $main_tag = get_term($main_tag); ?>
							<li><?= $main_tag->name; ?></li>
						<?php endforeach ?>
					</ul>
					<!-- /categorie -->

					<!-- post title -->
					<h4>
						<?php the_title(); ?>
					</h4>
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
				</div>
			</a>

		</article>
		<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<div class="nothing">
		<p><?php __( 'Sorry, nothing to display.', 'html5blank' ); ?></p>
	</div>
	<!-- /article -->

<?php endif; ?>
