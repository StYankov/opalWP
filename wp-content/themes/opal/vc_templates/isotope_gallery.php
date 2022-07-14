<?php

$atts             = vc_map_get_attributes( $this->getShortcode(), $atts );
$categories       = vc_param_group_parse_atts( $atts['categories'] );

$category_to_images = [];
foreach( $categories as $item ) {
    $category  = $item['category_name'];
    $image_ids = $item['images'];

    $image_ids  = explode(',', $image_ids);
    $image_urls = array_map( function($id) { return wp_get_attachment_image_url( $id, 'full'); }, $image_ids );

    $category_to_images[$category] = $image_urls;
}

ob_start();
?>
    <div class="isotope-gallery">
        <div class="gallery-filters">
            <button class="button active" data-filter="*"><?php _e( 'All', 'opal' ); ?></button>
            <?php foreach( array_keys( $category_to_images ) as $category_name ) : ?>
                <button class="button" data-filter="<?= sanitize_title( $category_name ) ?>"><?= $category_name ?></button> 
            <?php endforeach; ?>
        </div>

        <div class="gallery-items <?= $atts['columns'] ?>">
            <?php foreach( $category_to_images as $category_name => $image_urls ) : ?>
                <?php foreach( $image_urls as $image_url ) : ?>
                    <div class="gallery-item <?= sanitize_title( $category_name ) ?>" data-mfp-src="<?= $image_url ?>" data-category="<?= sanitize_title( $category_name ) ?>">
                        <img src="<?= $image_url ?>" />
                        <div class="gallery-item__overlay">
                            <div class="icon-container">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php
return ob_get_clean();