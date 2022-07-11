<?php

defined( 'ABSPATH' ) or exit;

$hotspots = get_posts([
    'post_type'      => 'points_image',
    'posts_per_page' => -1
]);

$options = [];
foreach( $hotspots as $post )
    $options[$post->post_title] = $post->ID;

vc_map([
    'name' => 'Hotspots',
    'base' => 'hotspots',
    'category'        => 'Opal',
    'params'          => [
        [
            'type'    => 'dropdown',
            'heading' => 'HotSpot',
            'param_name'  => 'hotspot_id',
            'value'       => $options,
            'admin_value' => true
        ]
    ]
]);

class WPBakeryShortCode_Hotspots extends WPBakeryShortCode {}
