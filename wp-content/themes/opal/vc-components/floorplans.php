<?php

defined( 'ABSPATH' ) or exit;

vc_map([
    'name' => 'Floor Plans',
    'base' => 'floor_plans',
    'category'     => 'Opal',
    'params'          => [
        [
            'type'    => 'textfield',
            'heading' => 'Class',
            'param_name' => 'wrapper_class' 
        ],
        [
            'type'    => 'param_group',
            'heading' => 'Floors',
            'param_name' => 'floors',
            'params'  => [
                [
                    'type'        => 'textfield',
                    'heading'     => 'Name',
                    'param_name'  => 'name'
                ],
                [
                    'type'        => 'textarea_raw_html',
                    'heading'     => 'Description',
                    'param_name'  => 'description'
                ],
                [
                    'type'        => 'attach_image',
                    'heading'     => 'Floor Plan',
                    'param_name'  => 'floor_plan'
                ],
                [
                    'type'        => 'textfield',
                    'heading'     => 'Floor Number',
                    'param_name'  => 'floor_no'
                ],
                [
                    'type'        => 'textfield',
                    'heading'     => 'Rooms',
                    'param_name'  => 'rooms'
                ],
                [
                    'type'        => 'textfield',
                    'heading'     => 'Total Area',
                    'param_name'  => 'total_area'
                ],
                [
                    'type'        => 'checkbox',
                    'heading'     => 'Bathroom',
                    'param_name'  => 'bathroom'
                ],
                [
                    'type'        => 'textfield',
                    'heading'     => 'Windows',
                    'param_name'  => 'windows'
                ]
            ]
        ]
    ]
]);

class WPBakeryShortCode_Floor_Plans extends WPBakeryShortCode {}
