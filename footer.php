<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prettyfunx3
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-page">
		<div class="footer-page-content">
			<div class="footer-title-con">
				<div class="logo-container">
					<div class="logo hp-sec">
						<h1>Pretty Funxional</h1>
					</div>
				</div>
				<div class="footer-title">
					<h1>Keep in touch-ish</h1>
				</div>
				<h4 class="footer-subtitle">
					Sign up and stay up-to-date with our sporadic newsletters
				</h4>
			</div>
			<div class="email-input-con">
				<input class="name-input n-input" placeholder="Name*" />
				<input class="email-input n-input" placeholder="Email*" />
			</div>
			<div class="sign-up-btn-con">
				<button type="button" class="btn btn-lg btn-news">Sign Up</button>
			</div>
			<div class="bottom-footer-con">
				<div class="social-media-con">
					<span class="social-icon"> <i class="bi bi-instagram"></i></span>
					<span class="social-icon"><i class="bi bi-pinterest"></i></span>
					<span class="social-icon"><i class="bi bi-youtube"></i></span>
					<span class="social-icon"><i class="bi bi-envelope"></i></span>
				</div>

				<div class="pf-copyr-con">
					<p>&copy; Pretty Funxional Pty Ltd 2023 All right reserved</p>
				</div>
			</div>
		</div>
	</div>
	<div class="site-info">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'prettyfunx3')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'prettyfunx3'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'sirru'), 'prettyfunx3', '<a href="http://underscores.me/">SirRu</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>