<?php

defined( 'ABSPATH' ) or exit;

vc_map([
    'name' => 'Isotope Gallery',
    'base' => 'isotope_gallery',
    'category'     => 'Opal',
    'params'          => [
        [
            'type'        => 'param_group',
            'heading'     => 'Categories',
            'param_name'  => 'categories',
            'admin_value' => true,
            'params'      => [
                [
                    'type'       => 'textfield',
                    'heading'    => 'Category Name',
                    'param_name' => 'category_name',
                    'admin_value'=> true
                ],
                [
                    'type'       => 'attach_images',
                    'heading'    => 'Images',
                    'param_name' => 'images'
                ]
            ]
        ]
    ]
]);

class WPBakeryShortCode_Isotope_Gallery extends WPBakeryShortCode {}
