<?php

defined( 'ABSPATH' ) or exit;

vc_map([
    'name' => 'Agent',
    'base' => 'agent',
    'category'     => 'Opal',
    'params'          => [
        [
            'type'    => 'textfield',
            'heading' => 'Name',
            'param_name' => 'name',
            'admin_value' => true
        ],
        [
            'type'    => 'textfield',
            'heading' => 'Title',
            'param_name' => 'title',
            'admin_value' => true
        ],
        [
            'type'    => 'attach_image',
            'heading' => 'Avatar',
            'param_name' => 'avatar_id'
        ],
        [
            'type'    => 'textfield',
            'heading' => 'Phone Number',
            'param_name' => 'phone'
        ],
        [
            'type'    => 'textfield',
            'heading' => 'Email',
            'param_name' => 'email'
        ],
        [
            'type'    => 'textfield',
            'heading' => 'Facebook',
            'param_name' => 'facebook'
        ],
        [
            'type'    => 'textfield',
            'heading' => 'Twitter',
            'param_name' => 'twitter'
        ],
        [
            'type'    => 'textfield',
            'heading' => 'Youtube',
            'param_name' => 'Youtube'
        ]
    ]
]);

class WPBakeryShortCode_Agent extends WPBakeryShortCode {}
