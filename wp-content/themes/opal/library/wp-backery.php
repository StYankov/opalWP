<?php

defined( 'ABSPATH' ) or exit;

add_filter( 'vc_element_settings_filter', 'foundationpress_vc_text_block_settings', 10, 2 );
function foundationpress_vc_text_block_settings( $attributes, $tag ) {
    if( 'vc_column_text' === $tag || 'vc_row' === $tag ) {
        $attributes['params'][] = [
            'type'    => 'textfield',
            'heading' => 'Spacing Bottom',
            'param_name' => 'spacing_bottom' 
        ];

        $attributes['params'][] = [
            'type'    => 'textfield',
            'heading' => 'Spacing Bottom Tablet',
            'param_name' => 'spacing_bottom_tablet' 
        ];

        $attributes['params'][] = [
            'type'    => 'textfield',
            'heading' => 'Spacing Bottom Desktop',
            'param_name' => 'spacing_bottom_desktop' 
        ];
    }

    if( 'vc_column_text' === $tag ) {
        $attributes['params'][] = [
            'type'       => 'checkbox',
            'heading'    => 'Heading Dots',
            'param_name' => 'heading_dots'
        ];

        $attributes['params'][] = [
            'type'       => 'dropdown',
            'heading'    => 'Dots Position',
            'param_name' => 'dots_position',
            'value'      => [
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ]
        ];
    }

    return $attributes;
}

add_filter( 'vc_element_settings_filter', 'foundationpress_vc_spacer_settings', 10, 2 );
function foundationpress_vc_spacer_settings( $attributes, $tag ) {
    if( 'vc_empty_space' === $tag ) {
        array_unshift( $attributes['params'], [
            'type'       => 'textfield',
            'heading'    => 'Височина мобилно',
            'param_name' => 'height_mobile' 
        ] );
    }
    return $attributes;
}