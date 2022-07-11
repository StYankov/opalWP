<?php

defined( 'ABSPATH' ) or exit;

vc_map([
    'name' => 'Latest Posts',
    'base' => 'latest_posts',
    'category'     => 'Opal',
    'params'          => [
        [
            'type'    => 'textfield',
            'heading' => 'Class',
            'param_name' => 'text'
        ]
    ]
]);

class WPBakeryShortCode_Latest_Posts extends WPBakeryShortCode {}
