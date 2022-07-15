<?php

defined( 'ABSPATH' ) or exit;

vc_map([
    'name' => 'Amenity',
    'base' => 'amenity',
    'category'     => 'Opal',
    'params'          => [
        [
            'type'    => 'textfield',
            'heading' => 'Amenity',
            'param_name' => 'text',
            'admin_label' => true
        ]
    ]
]);

class WPBakeryShortCode_Amenity extends WPBakeryShortCode {}
