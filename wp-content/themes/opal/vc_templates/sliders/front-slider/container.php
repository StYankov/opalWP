<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$classes = ['front-slider'];

if( !empty($atts['class']) )
    $classes[] = $atts['class'];

$link = vc_build_link( $url );

ob_start();
?>
<div class="front-slider-container">
    <div class="<?= implode( ' ', $classes ) ?>">
        <?= do_shortcode( $content ); ?>
    </div>
    <div class="front-slider__overlay">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell medium-5 left-col">
                    <?php if( !empty($subheading) ) : ?>
                        <h6 class="front-slider__subheading show-for-medium"><?= $subheading ?></h6>
                    <?php endif; ?>

                    <?php if( !empty($heading) ) : ?>
                        <h1 class="front-slider__heading"><?= rawurldecode( base64_decode( $heading ) ); ?></h1>
                    <?php endif; ?>
                    <div class="dots">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                </div>
                <div class="cell medium-6 right-col">
                    <?php if( !empty($subheading) ) : ?>
                        <h6 class="front-slider__subheading hide-for-medium"><?= $subheading ?></h6>
                    <?php endif; ?>

                    <?php if( !empty( $location ) ) : ?>
                        <h4 class="front-slider__location"><?= $location ?></h4>
                    <?php endif; ?>
                    
                    <?php if( !empty( $above_price ) ) : ?>
                        <h6 class="front-slider__above-price"><?= $above_price ?></h6> 
                    <?php endif; ?>

                    <?php if( !empty( $price ) ) : ?>
                        <h1 class="front-slider__price"><?= $price ?></h1> 
                    <?php endif; ?>
                    <a class="button button--white button--big button--hover-white" href="<?= $link['url'] ?>"><?= $link['title'] ?></a>
                </div>
            </div>
        </div>
    </div>
</div>