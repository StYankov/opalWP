<?php

defined( 'ABSPATH' ) or exit;

vc_map([
    'name'   => 'Button',
    'base'   => 'button',
    'category' => 'Opal',
    'params' => [
        [
            'type'    => 'textfield',
            'heading' => 'CSS Classes',
            'param_name'  => 'styles',
        ],
        [
            'type'        => 'vc_link',
            'heading'     => 'Link',
            'param_name'  => 'url',
            'admin_value' => true
        ]
    ]
]);

class WPBakeryShortCode_Button extends WPBakeryShortCode {}