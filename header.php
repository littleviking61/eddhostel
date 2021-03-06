<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?= get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?= get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?= get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<?php $extra_class = (is_home() || is_single() || is_category() || is_archive()) ? 'blog' : '' ?>
	<body <?php body_class($extra_class); ?>>
		<!-- wrapper -->
		<div class="wrapper">
			
			<!-- header -->
			<header class="header clear" role="banner" >

					<!-- logo -->
					<div class="container">
						<div class="menu-mobile">
							<span class="close"><i class="eddicon-close"></i></span>
							<span class="open"><i class="eddicon-bars"></i></span>
						</div>

						<div class="logo">
							<a href="<?= home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
								<?php edit_post_link('<i class="icon-edit"></i>'); ?>
							</a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>

							<?php html5blank_nav('social-menu'); ?>

							<div class="switcher">
								<?php qtranxf_generateLanguageSelectCode('dropdown','switch') ?>
							</div>
						</nav>
						<!-- /nav -->

					</div>

					<?php //check if has background defined
					$background_image = get_field('backgoound_image'); 
					if(!empty($background_image)) :
						$background_src = wp_get_attachment_image_url( $background_image, 'full' );
						$background_medium = wp_get_attachment_image_url( $background_image, 'portrait' );
					?>
						<div class="background-image">
							<img src="<?= esc_url( $background_src ); ?>"
					     srcset="<?= esc_url($background_src) ?> 2000w, <?= esc_url($background_medium) ?> 675w">
					     <div class="intro-text">
					    	<h2><?= get_field('texte_image') ?></h2>
					    	<i class="eddicon-croix-big"></i>
					     </div>
						</div>
					<?php endif; ?>

			</header>
			<!-- /header -->
