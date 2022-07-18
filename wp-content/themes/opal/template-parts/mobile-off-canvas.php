<?php
/**
 * Template part for off canvas menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<nav class="mobile-off-canvas-menu off-canvas position-left" id="<?php foundationpress_mobile_menu_id(); ?>" data-off-canvas data-auto-focus="false" role="navigation">
	<?php foundationpress_mobile_nav(); ?>

	<div class="quick-nav">
		<?php if( get_theme_mod( 'opal_header_phone' ) ) : ?>
			<a class="top-bar-phone" href="tel:<?= get_theme_mod( 'opal_header_phone' ) ?>">
				<i class="fa-solid fa-phone"></i>
			</a>
		<?php endif; ?>

		<?php if( get_theme_mod( 'opal_header_contact_form' ) ) : ?>
			<button type="button" class="button schedule-visit" data-open="schedule-call">
				<i class="fa-solid fa-calendar-check"></i>
				<?php _e( 'schedule a visit', 'golfvilla' ); ?>
			</button>
		<?php endif; ?>
	</div>
</nav>

<div class="off-canvas-content" data-off-canvas-content>
