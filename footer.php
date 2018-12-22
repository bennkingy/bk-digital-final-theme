<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BK_Digital_FINAL_THEME
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url(__('https://wordpress.org/', 'bk-digital-final-theme')); ?>">
				<?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf(esc_html__('Proudly powered by %s', 'bk-digital-final-theme'), 'WordPress');
                ?>
			</a>
			<span class="sep"> | </span>
				<?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf(esc_html__('Theme: %1$s by %2$s.', 'bk-digital-final-theme'), 'bk-digital-final-theme', '<a href="https://github.com/bennkingy/">Benn Kingy</a>');
                ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- JS files -->
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-grid-only@1.0.0/index.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.21/js/lightgallery-all.min.js'></script>
<script src='https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js'></script>
<script src='https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.js'></script>

<?php wp_footer(); ?>

</body>
</html>
