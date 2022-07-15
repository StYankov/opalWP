<?php

/**
 * Shortcode attributes
 * @var array $atts
 * @var array $floors
 * @var string $wrapper_class
 */
$atts             = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$floors = vc_param_group_parse_atts( $atts['floors'] );

$container_class = ['floor-plans'];

if( !empty($wrapper_class) )
    $container_class[] = $wrapper_class;

ob_start();
?>
<div class="<?= implode(' ', $container_class) ?>">
    <ul class="tabs" data-deep-link="true" data-deep-link-smudge="true" data-deep-link-smudge-delay="500" data-tabs id="deeplinked-tabs">
        <?php foreach( $floors as $i => $floor ) : ?>
            <li class="tabs-title<?= $i == 0 ? ' is-active' : '' ?>"><a href="#floor-<?= $i + 1 ?>" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>"><?= $floor['name'] ?></a></li>
        <?php endforeach; ?>
    </ul>

    <div class="tabs-content" data-tabs-content="deeplinked-tabs">
        <?php foreach( $floors as $i => $floor ) : ?>
            <div class="tabs-panel<?= $i === 0 ? ' is-active' : '' ?>" id="floor-<?= $i + 1 ?>">
                <div class="floor-panel">
                    <div class="floor-panel__details">
                        <h4 class="floor-panel__floor-nane"><?= $floor['name'] ?></h4>
                        <p class="floor-panel__floor-description">
                            <?= rawurldecode(base64_decode($floor['description'])); ?>
                        </p>
                        <div class="floor-panel__list">
                            <div class="floor-panel__list-item">
                                <h6 class="floor-panel__list-name"><?php _e( 'Floor No', 'golfvilla' ); ?></h6>
                                <h6 class="floor-panel__list-value"><?= $floor['floor_no'] ?></h6>
                            </div>
                            <div class="floor-panel__list-item">
                                <h6 class="floor-panel__list-name"><?php _e( 'Rooms', 'golfvilla' ); ?></h6>
                                <h6 class="floor-panel__list-value"><?= $floor['rooms'] ?></h6>
                            </div>
                            <div class="floor-panel__list-item">
                                <h6 class="floor-panel__list-name"><?php _e( 'Total Area', 'golfvilla' ); ?></h6>
                                <h6 class="floor-panel__list-value"><?= $floor['total_area'] ?></h6>
                            </div>
                            <div class="floor-panel__list-item">
                                <h6 class="floor-panel__list-name"><?php _e( 'Bathroom', 'golfvilla' ); ?></h6>
                                <h6 class="floor-panel__list-value"><?= $floor['bathroom'] === 'yes' ? __('yes', 'golfvila') : __('no', 'golfvilla') ?></h6>
                            </div>
                            <div class="floor-panel__list-item">
                                <h6 class="floor-panel__list-name"><?php _e( 'Windows', 'golfvilla' ); ?></h6>
                                <h6 class="floor-panel__list-value"><?= $floor['windows'] ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="floor-panel__image">
                        <img class="floor-panel__floor-image" src="<?= wp_get_attachment_image_url( $floor['floor_plan'], 'full' ) ?>" />
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
return ob_get_clean();