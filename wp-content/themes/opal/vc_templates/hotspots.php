<?php

/**
 * Shortcode attributes
 * @var array $atts
 * @var string $hotspot_id
 */
$atts             = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$post = get_post( $hotspot_id );
if( ! $post )
    return;

$data   = get_post_meta( $post->ID, 'hotspot_content', true );
$points = isset( $data['data_points'] ) ? $data['data_points'] : [];

ob_start();
?>
<div class="image-hotspot">
    <div class="pins-list">
        <ul class="accordion" data-accordion>
            <?php foreach( $points as $i => $point ) : ?>
                <li class="accordion-item<?= $i === 0 ? ' is-active' : '' ?>" data-accordion-item>
                    <a href="#tab-<?= $i ?>" class="accordion-title"><?= $point['title'] ?></a>
                    <div class="accordion-content" data-tab-content>
                        <?= $point['content'] ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>        
    </div>
    <div class="hotspot-map">
        <?php echo do_shortcode( sprintf( '[devvn_ihotspot id="%s"]', $post->ID ) ); ?>
    </div>
</div>
<?php
return ob_get_clean();