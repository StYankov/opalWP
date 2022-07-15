<?php

defined( 'ABSPATH' ) or exit;

vc_map([
    'name' => 'Testimonials',
    'base' => 'testimonials',
    'category'     => 'Opal',
    'params'          => [
        [
            'type'    => 'textfield',
            'heading' => 'Class Name',
            'param_name' => 'wrapper_class'
        ],
        [
            'type'    => 'param_group',
            'heading' => 'Slides',
            'param_name' => 'slides',
            'params'  => [
                [
                    'type'        => 'textfield',
                    'heading'     => 'Client Name',
                    'param_name'  => 'name'
                ],
                [
                    'type'        => 'textfield',
                    'heading'     => 'Client Titlte',
                    'param_name'  => 'title'
                ],
                [
                    'type'        => 'textarea',
                    'heading'     => 'Description',
                    'param_name'  => 'description'
                ]
            ]
        ]
    ]
]);

class WPBakeryShortCode_Testimonials extends WPBakeryShortCode {}
