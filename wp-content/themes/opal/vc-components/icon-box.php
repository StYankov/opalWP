<?php

defined( 'ABSPATH' ) or exit;

vc_map([
    'name' => 'Icon Box',
    'base' => 'icon_box',
    'category'     => 'Opal',
    'params'          => [
        [
            'type'    => 'textfield',
            'heading' => 'CSS Class',
            'param_name' => 'class',
            'value'   => ''
        ],
        [
            'type'        => 'textfield',
            'heading'     => 'Icon',
            'description' => 'Font Awesome Icon Class',
            'param_name'  => 'icon',
        ],
        [
            'type'    => 'textfield',
            'heading' => 'Heading',
            'param_name' => 'heading',
            'admin_value' => true
        ],
        [
            'type'       => 'textfield',
            'heading'    => 'Short Description',
            'param_name' => 'description'
        ]
    ]
]);

class WPBakeryShortCode_Icon_Box extends WPBakeryShortCode {}
