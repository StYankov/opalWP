<?php

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

extract( $atts );

$link = vc_build_link( $url );

$classes = ['button'];

if( !empty($styles) )
    $classes[] = $styles;

ob_start();
?>
<a target="<?= $link['target'] ?>" href="<?= $link['url'] ?>" class="<?= implode( ' ', $classes ) ?>"><?= $link['title'] ?></a>
<?php
return ob_get_clean();