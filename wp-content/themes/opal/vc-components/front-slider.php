<?php

defined( 'ABSPATH' ) or exit;

vc_map([
    'name' => 'Front Slider',
    'base' => 'front_slider',
    'html_template' => vc_template_file('sliders/front-slider/container.php'),
    'as_parent'    => [
        'only' => 'front_slider_item'
    ],
    'category'     => 'Opal',
    'is_container'    => true,
    'content_element' => true,
    'js_view'         => 'VcColumnView',
    'params'          => [
        [
            'type'    => 'textfield',
            'heading' => 'CSS Class',
            'param_name' => 'class',
            'value'   => ''
        ],
        [
            'type'        => 'textfield',
            'heading'     => 'Subheading',
            'param_name'  => 'subheading',
            'admin_value' => true
        ],
        [
            'type'    => 'textfield',
            'heading' => 'Heading',
            'param_name' => 'heading',
            'admin_value' => true
        ],
        [
            'type'       => 'textfield',
            'heading'    => 'Text/Location',
            'param_name' => 'location'
        ],
        [
            'type'       => 'textfield',
            'heading'    => 'Above Price',
            'param_name' => 'above_price'
        ],
        [
            'type'       => 'textfield',
            'heading'    => 'Price',
            'param_name' => 'price'
        ],
        [
            'type'    => 'vc_link',
            'heading' => 'URL #1',
            'param_name' => 'url'
        ]
    ]
]);

vc_map([
    'name'   => 'Front Slider Item',
    'base'   => 'front_slider_item',
    'html_template' => vc_template_file('sliders/front-slider/item.php'),
    'as_child' => [
        'only' => 'front_slider'
    ],
    'content_element' => true,
    'params' => [
        [
            'type'       => 'attach_image',
            'heading'    => 'Image',
            'param_name' => 'attachment'
        ]
    ]
]);

class WPBakeryShortCode_Front_Slider extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_Front_Slider_Item extends WPBakeryShortCode {}