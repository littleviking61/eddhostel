<section class="slideshow">

	<header>

		<?php 
		$miss = get_field('mr_or_m');
		$accroche = get_field('image_accroche');

		if ($miss): ?>

			<p><?= get_field('introduction_texte') ?></p>
			<div class="miss miss-id-<?= get_the_id() ?>"></div>
			<div class="detail">
				<i class="eddicon-croix-big"></i>
				<h3><?= get_field('appelation') ?></h3>
				<p><i><?= get_field('description') ?></i></p>
			</div>

		<?php else:

			if (!empty($accroche)) { ?>
				<img class="avatar" src="<?= esc_url(wp_get_attachment_image_url( $accroche, 'medium' )); ?>">
			<?php }else{ ?>
				<div class="logo-color">
					<img src="<?= get_template_directory_uri() ?>/img/logo-color.png" />
				</div>
			<?php } ?>

		<?php endif; ?>

	</header>

	<ul class="slides">
		<?php $i = 0;  ?>
		<?php while( have_rows('slides') ): the_row();?>

			<li class="slide slide-<?= $i ?>">

				<img class="avatar" src="<?= esc_url(wp_get_attachment_image_url( get_sub_field('image'), 'medium' )); ?>" srcset="<?= esc_attr( wp_get_attachment_image_srcset( get_sub_field('image'), 'small') ); ?>" />
				<div class="titre">
					<h3><?= get_sub_field('texte') ?></h3>
				</div>
					
			</li>
			<?php $i++; ?>
		<?php endwhile; ?>
		
	</ul>

</section>