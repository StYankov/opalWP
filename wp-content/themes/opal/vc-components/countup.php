<?php

defined( 'ABSPATH' ) or exit;

vc_map([
    'name' => 'Count Up',
    'base' => 'countup',
    'category'     => 'Opal',
    'params'          => [
        [
            'type'    => 'textfield',
            'heading' => 'Target Value',
            'param_name' => 'target',
            'admin_label' => true
        ],
        [
            'type'       => 'textfield',
            'heading'    => 'Duration',
            'param_name' => 'duration',
            'description' => 'Animation duration in ms',
            'default'    => '2000',
            'value'      => '2000'
        ],
        [
            'type'       => 'colorpicker',
            'heading'    => 'Color Picker',
            'param_name' => 'text_color',
            'default'    => '#000'
        ],
        [
            'type'       => 'textfield',
            'heading'    => 'Class Name',
            'param_name' => 'wrapper_class'
        ]
    ]
]);

class WPBakeryShortCode_Countup extends WPBakeryShortCode {}
