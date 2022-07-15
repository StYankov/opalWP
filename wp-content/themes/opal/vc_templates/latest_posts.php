<?php

/**
 * Shortcode attributes
 * @var array $atts
 * @var string $text
 */
$atts             = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$classes = ['latest-posts'];
if( !empty($text) )
    $classes[] = $text;

$query = new WP_Query( ['posts_per_page' => 3] );

if( $query->post_count === 0 )
    return;

ob_start();
?>
<div class="<?= implode(' ', $classes) ?>">
    <?php while( $query->have_posts() ) : $query->the_post(); ?>
        <?php get_template_part( 'template-parts/loop', 'post' ); ?>
    <?php endwhile; wp_reset_postdata(); ?>
</div>
<?php
return ob_get_clean();