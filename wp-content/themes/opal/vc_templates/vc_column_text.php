<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $el_id
 * @var $css_animation
 * @var $css
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Column_text $this
 */
$el_class = $el_id = $css = $css_animation = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$class_to_filter = 'wpb_text_column wpb_content_element ' . $this->getCSSAnimation( $css_animation );
$class_to_filter .= vc_shortcode_custom_css_class( $css, ' ' ) . $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );
$wrapper_attributes = array();
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}

$css_varaibles = [];
if( is_numeric($spacing_bottom) )
    $css_varaibles['--text-block-margin-bottom'] = intval($spacing_bottom) . 'px';

if( is_numeric($spacing_bottom_tablet) ) 
    $css_varaibles['--text-block-margin-bottom-tablet'] = intval($spacing_bottom_tablet) . 'px';

if( is_numeric($spacing_bottom_desktop) ) 
    $css_varaibles['--text-block-margin-bottom-desktop'] = intval($spacing_bottom_desktop) . 'px';

$style_content = [];
foreach( $css_varaibles as $key => $value )
    $style_content[] = $key . ': ' . $value;

$wrapper_attributes[] = 'style="' . implode('; ', $style_content) . '"';

$dots_html = '';
if( $heading_dots ) {
	$dots_html = '<div class="dots dots-' . $dots_position .'"><div class="dot"></div><div class="dot"></div><div class="dot"></div></div>';
}
$output = '
	<div class="' . esc_attr( $css_class ) . '" ' . implode( ' ', $wrapper_attributes ) . '>
		<div class="wpb_wrapper">
			' . $dots_html . wpb_js_remove_wpautop( $content, true ) . '
		</div>
	</div>
';

echo $output;
