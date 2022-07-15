<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-loop' ); ?>>
	<a href="<?php the_permalink() ?>">
		<header>
			<?php if( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?>
			<?php endif; ?>
		</header>
		<div class="entry-content">
			<h4><?php the_title(); ?></h4>
			<div class="post-meta">
				<span class="posted-on">
					<time datetime="<?= get_the_date() ?>"><?= get_the_date('F m, Y'); ?></time>
				</span>
			</div>
		</div>
	</a>
</article>
