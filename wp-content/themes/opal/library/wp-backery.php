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
                'Left'   => 'left',
                'Center' => 'center',
                'Right'  => 'right'
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

add_filter( 'vc_element_settings_filter', 'foundationpress_vc_column_inner_animation', 10, 2 );
function foundationpress_vc_column_inner_animation( $attributes, $tag ) {
    if( 'vc_column_inner' === $tag ) {
        array_unshift( $attributes['params'], vc_map_add_css_animation() );
    }

    return $attributes;
}

add_filter( 'vc_shortcodes_css_class', 'foundationpress_vc_column_inner_animation_class', 10, 3 );
function foundationpress_vc_column_inner_animation_class( $classes, $tag, $atts ) {
    if( 'vc_column_inner' === $tag ) {
        if( !empty($atts['css_animation']) )
            $classes .= (' wpb_animate_when_almost_visible wpb_' . $atts['css_animation'] . ' ' . $atts['css_animation']);
    }

    return $classes;
}