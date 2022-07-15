<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header" role="banner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
					<div class="title-bar-left">
						<?php if( get_theme_mod( 'custom_logo' ) ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' ) ?>
							</a>
						<?php else: ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
						<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
					</div>
				</div>

				<nav class="site-navigation top-bar" role="navigation" id="<?php foundationpress_mobile_menu_id(); ?>">
					<div class="top-bar-left">
						<div class="site-desktop-title top-bar-title">
							<?php if( get_theme_mod( 'custom_logo' ) ) : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' ) ?>
								</a>
							<?php else: ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<?php endif; ?>
						</div>
					</div>
					<div class="top-bar-right">
						<?php foundationpress_top_bar_r(); ?>

						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
						<?php endif; ?>

						<div class="top-bar-wrap">
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
					</div>
				</nav>
			</div>
		</div>
	</header>
