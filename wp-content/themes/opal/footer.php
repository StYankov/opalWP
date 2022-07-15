<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer id="footer">
	<div class="grid-container">
		<div class="grid-x">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
		</div>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<a href="#" class="scrollup">
	<i class="fa-solid fa-angle-up"></i>
</a>
<?php wp_footer(); ?>
</body>
</html>
