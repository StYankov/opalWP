<?php

defined( 'ABSPATH' ) or exit;

vc_map([
    'name' => 'Isotope Gallery',
    'base' => 'isotope_gallery',
    'category'     => 'Opal',
    'params'          => [
        [
            'type'       => 'textfield',
            'heading'    => 'Class Name',
            'param_name' => 'wrapper_class'
        ],
        [
            'type'        => 'dropdown',
            'heading'     => 'Columns',
            'param_name'  => 'columns',
            'value'       => [
                'Three Columns' => 'three-column',
                'Four Columns'  => 'four-column'
            ]
        ],
        [
            'type'        => 'param_group',
            'heading'     => 'Categories',
            'param_name'  => 'categories',
            'admin_label' => true,
            'params'      => [
                [
                    'type'       => 'textfield',
                    'heading'    => 'Category Name',
                    'param_name' => 'category_name',
                    'admin_label'=> true
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
