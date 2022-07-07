<?php

/**
 * Shortcode attributes
 * @var array $atts
 * @var string $class
 * @var string $icon
 * @var string $heading
 * @var string $description
 */
$atts             = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
ob_start();
?>
<div class="icon-box">
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