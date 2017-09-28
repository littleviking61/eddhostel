<section class="slideshow">
	<?php 

	$highlight = get_field('feature_article_in_blog', 'option');
	if( $highlight ): 
		// override $post
		$post = $highlight;
		setup_postdata( $post ); ?>
			
			<div class="thumbnail">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : 
					the_post_thumbnail('large');
				endif; ?>
				<!-- /post thumbnail -->
			</div>

			<header>
				
				<!-- categorie -->
				<ul class="main-tags">
					<?php $main_tags = get_field('main_tag'); ?>
					<?php foreach ($main_tags as $main_tag): $main_tag = get_term($main_tag); ?>
						<li>
							<a href="<?= get_term_link($main_tag->term_id); ?>"><?= $main_tag->name; ?></a>
						</li>
					<?php endforeach ?>
				</ul>
				<!-- /categorie -->

				<!-- post title -->
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
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

				<div class="detail">
					<p><?php html5wp_excerpt('html5wp_index') ?></p>
				</div>

			</header>

		<?php wp_reset_postdata();  ?>
	<?php endif; ?>

</section>