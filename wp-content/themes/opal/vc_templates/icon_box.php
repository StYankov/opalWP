<?php

/**
 * Shortcode attributes
 * @var array $atts
 * @var string $class
 * @var string $icon
 * @var string $heading
 * @var string $description
 * @var string $animate
 */
$atts             = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$container_classes = ['icon-box'];

if( $animate ) {
    $container_classes[] = 'wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp';
}

ob_start();
?>
<div class="<?= implode( ' ', $container_classes ) ?>">
    <div class="icon-box__icon">
        <i class="<?= $icon ?>"></i>
    </div>
    <div class="icon-box__content">
        <h6 class="icon-box__heading"><?= $heading ?></h6>
        <p class="icon-box__description"><?= $description ?></p>
    </div>
</div>
<?php
return ob_get_clean();