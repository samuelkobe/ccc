			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<div class="copyright container">
					<p class"twelve columns">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.</p>
				</div>
				<!-- /copyright -->

				<nav class="nav footer-nav" role="navigation">
					<div class="nav-inner-wrap container">
						<?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
					</div>
				</nav>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
