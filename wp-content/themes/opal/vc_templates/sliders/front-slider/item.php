<?php

/**
 * Shortcode attributes
 * @var $atts
 */
$atts             = vc_map_get_attributes( $this->getShortcode(), $atts );
$background_image = wp_get_attachment_image_url( $atts['attachment'], 'full' );

ob_start();
?>
<div class="front-slider__item">
    <img src="<?= $background_image ?>" />
</div>
<?php
return ob_get_clean();