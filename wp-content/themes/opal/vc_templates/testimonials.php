<?php

/**
 * Shortcode attributes
 * @var array $atts
 * @var array $slides
 */
$atts             = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$slides = vc_param_group_parse_atts( $slides );

ob_start();
?>
<div class="slider-testimonials">
    <?php foreach( $slides as $slide ) : ?>
        <div class="testimonial-item">
            <div class="testimonial-item__inner">
                <p class="testimonial-item__content"><?= $slide['description'] ?></p>
                <p class="testimonial-item__client"><?= $slide['name'] ?></p>
                <p class="testimonial-item__title"><?= $slide['title'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php
return ob_get_clean();