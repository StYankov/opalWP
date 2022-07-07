<?php

/**
 * Shortcode attributes
 * @var array $atts
 * @var string $text
 */
$atts             = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
ob_start();
?>
<div class="amenity">
    <i class="fa-solid fa-circle-check"></i>
    <h6><?= $text ?></h6>
</div>
<?php
return ob_get_clean();