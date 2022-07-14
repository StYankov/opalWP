<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>
<header class="featured-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">
<?php else: ?>
<header class="featured-hero" role="banner">
<?php endif; ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php if( function_exists( 'yoast_breadcrumb' ) ) : ?>
		<?php yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); ?>
	<?php endif; ?>
</header>
