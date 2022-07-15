<?php

/**
 * @var string $target
 * @var string $duration
 * @var string $text_color
 * @var string $wrapper_class
 */

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$container_classes = ['count-up'];

if( !empty($wrapper_class) )
    $container_classes[] = $wrapper_class;

ob_start();
?>
<h2 class="<?= implode(' ', $container_classes) ?>" style="color: <?= $text_color ?>" data-duration="<?= abs( $duration ) ?>" data-target="<?= $target ?>">0</h2>
<?php
return ob_get_clean();