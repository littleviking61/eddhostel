<section class="slideshow">
	<?php $slideshow = get_field('slideshow'); ?>

	<?php if ($slideshow): ?>
		<ul <?= count(get_field('slides'))> 1 ? 'id="slidr-top"' : '' ;?> class="slides">
			<?php $i = 1;  ?>
			<?php while( have_rows('slides') ): the_row();?>

				<li class="slide" data-slidr="<?= $i ?>">

					<img class="avatar" src="<?= esc_url(wp_get_attachment_image_url( get_sub_field('image'), 'large' )); ?>" srcset="<?= esc_attr( wp_get_attachment_image_srcset( get_sub_field('image'), 'medium') ); ?>" />
						
				</li>
				<?php $i++; ?>
				
			<?php endwhile; ?>
			
		</ul>

	<?php else: ?>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

	<?php endif ?>

</section>