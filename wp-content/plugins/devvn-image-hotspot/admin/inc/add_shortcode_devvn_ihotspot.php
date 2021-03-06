<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );?>
<?php
function devvn_ihotspot_shortcode_func($atts){
	
	$atts = shortcode_atts( array(
		'id' => '',
	), $atts, 'devvn_ihotspot' );
	
	$idPost =  intval($atts['id']);
	
	if(get_post_status($idPost) != "publish") return;
	
	$data_post = get_post_meta($idPost, 'hotspot_content', true);

	if(!$data_post){
		$data_post = maybe_unserialize(get_post_field('post_content', $idPost));
	}
		
	$maps_images = (isset($data_post['maps_images']))?$data_post['maps_images']:'';
	$data_points = (isset($data_post['data_points']))?$data_post['data_points']:'';
	$pins_image = (isset($data_post['pins_image']))?$data_post['pins_image']:'';
	$pins_image_hover = (isset($data_post['pins_image_hover']))?$data_post['pins_image_hover']:'';
	$pins_more_option = wp_parse_args($data_post['pins_more_option'],array(
		'position'			=>	'center_center',
		'custom_top'		=>	0,
		'custom_left'		=>	0,
		'custom_hover_top'	=>	0,
		'custom_hover_left'	=>	0,
		'pins_animation'	=>	'none'
	));	
	ob_start();
	if($maps_images):
	?>
	<div class="wrap_svl_center">
	<div class="wrap_svl_center_box">
	<div class="wrap_svl" id="body_drag_<?php echo $idPost;?>">
		<div class="images_wrap">
		<img src="<?php echo $maps_images; ?>">
		</div>	
		 <?php if(is_array($data_points)):?>
		 <?php $stt = 1;foreach ($data_points as $i => $point):
		 $pins_image = (isset($data_post['pins_image']))?$data_post['pins_image']:'';
		$pins_image_hover = (isset($data_post['pins_image_hover']))?$data_post['pins_image_hover']:'';
		
		 $linkpins = isset($point['linkpins'])?esc_url($point['linkpins']):'';	 
		 $link_target = isset($point['link_target'])?esc_attr($point['link_target']): '_self';
		 $pins_image_custom = isset($point['pins_image_custom'])?esc_url($point['pins_image_custom']):'';
		 $pins_image_hover_custom = isset($point['pins_image_hover_custom'])?esc_url($point['pins_image_hover_custom']):'';
		 $placement = (isset($point['placement']) && $point['placement'] != '')?esc_attr($point['placement']):'n';
		 $pins_id = (isset($point['pins_id']) && $point['pins_id'] != '')?esc_attr($point['pins_id']):'';
         $pins_class = (isset($point['pins_class']) && $point['pins_class'] != '')?esc_attr($point['pins_class']):'';

         if($pins_image_custom) $pins_image = $pins_image_custom;
		 if($pins_image_hover_custom) $pins_image_hover = $pins_image_hover_custom;
		 
		 $noTooltip = false;
		 ?>
		 <div class="drag_element tips <?php echo ($pins_class)?$pins_class:''?>" style="top:<?php echo $point['top']?>%;left:<?php echo $point['left']?>%;" <?php echo ($pins_id)?'id="'.$pins_id.'"':''?>>
		 	<div class="point_style <?php echo ($pins_image_hover)?'has-hover':''?> ihotspot_tooltop_html" data-point-id="<?= $i ?>" data-placement="n" data-html="<?= $point['title'] ?>">
		 		<?php if($linkpins):?><a href="<?php echo $linkpins;?>" title="" <?php echo ($link_target)?'target="'.$link_target.'"':'';?>><?php endif;?>
			 		<?php if($pins_more_option['pins_animation'] != 'none'):?>
			 			<div class="pins_animation ihotspot_<?php echo $pins_more_option['pins_animation'];?>" style="top:-<?php echo $pins_more_option['custom_top']?>px;left:-<?php echo $pins_more_option['custom_left']?>px;height:<?php echo intval($pins_more_option['custom_top']*2)?>px;width:<?php echo intval($pins_more_option['custom_left']*2)?>px"></div>
			 		<?php endif;?>
					 <div class="pin-circle ihotspot_hastooltop"></div>
		 		<?php if($linkpins):?></a><?php endif;?>
		 	</div>
		 </div>
		 <?php $stt++;endforeach;?>		 
		 <?php endif;?> 		 	
	 </div>
	 </div>
	 </div>
	<?php
	endif;	
	return ob_get_clean();
}
add_shortcode('devvn_ihotspot','devvn_ihotspot_shortcode_func');