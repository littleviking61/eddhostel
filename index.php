<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="container">

			<?php get_template_part('slideshow', 'blog' ); ?>
			
			<nav class="categories">
				<ul class="row">
				  <?php wp_list_categories( array(
				      'orderby' => 'name',
				      'title_li' => '',
				      'show_option_all' => 'All'
				  ) ); ?> 
				</ul>	
			</nav>

			<section class="row">
				<div class="articles row">

					<?php if (is_archive()): ?>
						<h2 class="tag-title">Tag : <?= single_tag_title('', false); ?></h2>
					<?php endif ?>
					<?php get_template_part('loop'); ?>
				
					<?php get_template_part('pagination'); ?>
				</div>

				<?php get_sidebar( ); ?>
			</section>
		</div>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
