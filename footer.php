			<!-- booking -->
			<div class="booking bottom">
				<?php get_template_part('booking' ); ?>
			</div>

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="container row">

					<div class="detail row">
						<div class="logo">
							<a href="<?= home_url(); ?>">
								<img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
							</a>
						</div>

						<?php get_template_part('adresse'); ?>
					</div>

					<nav class="quick-menu">
						<?php html5blank_nav('footer-menu'); ?>
					</nav>

					<div class="social">
						<nav>
							<?php html5blank_nav('social-menu'); ?>
						</nav>

						<!-- copyright -->
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> -
							<a href="//wordpress.org">WordPress</a> - <a href="//nuagegraphik.com">Nuagegraphik</a>
						</p>
						<!-- /copyright -->
					</div>
				</div>
				
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

	</body>
</html>
