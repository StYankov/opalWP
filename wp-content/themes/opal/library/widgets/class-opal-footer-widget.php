<?php

defined( 'ABSPATH' ) or exit;

class Opal_Footer_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'opal_footer_widget',
            'Opal Footer Widget'
        );

        add_action( 'admin_enqueue_scripts', [$this, 'widget_scripts'] );
    }

    public function widget_scripts( $hook ) {
        if( 'widgets.php' !== $hook )
            return;
        
        wp_enqueue_style( 'thickbox' );
        wp_enqueue_script( 'media-upload' );
        wp_enqueue_script( 'thickbox' );
        wp_enqueue_script( 'footer-widget', get_template_directory_uri() . '/dist/assets/js/footer-widget.js', false, false, true );
    }

    public function widget($args, $instance) {
        get_template_part( 'template-parts/footer-widget', null, $instance );
    }

    public function form($instance) {
        $form    = isset( $instance['form'] ) ? $instance['form'] : null;
        $address = isset( $instance['address'] ) ? $instance['address'] : null; 
        $phone   = isset( $instance['phone'] ) ? $instance['phone'] : null;
        $email   = isset( $instance['email'] ) ? $instance['email'] : null;
        
        $agent_image = isset( $instance['agent_image'] ) ? $instance['agent_image'] : null;
        $agent_name  = isset( $instance['agent_name'] ) ? $instance['agent_name'] : null;
        $agent_title = isset( $instance['agent_title'] ) ? $instance['agent_title'] : null;
        $agent_phone = isset( $instance['agent_phone'] ) ? $instance['agent_phone'] : null;
        $agent_email = isset( $instance['agent_email'] ) ? $instance['agent_email'] : null;

        $opening_hours_weekday = isset( $instance['opening_hours_workday'] ) ? $instance['opening_hours_workday'] : null;
        $opening_hours_weekend = isset( $instance['opening_hours_weekend'] ) ? $instance['opening_hours_weekend'] : null;

        $facebook   = isset( $instance['facebook'] ) ? $instance['facebook'] : null;
        $instagram  = isset( $instance['instagram'] ) ? $instance['instagram'] : null;
        $youtube    = isset( $instance['youtube'] ) ? $instance['youtube'] : null;

        $map        = isset( $instance['map'] ) ? $instance['map'] : null;

        $forms = get_posts( ['post_type'     => 'wpcf7_contact_form', 'numberposts'   => -1] );

        ?>
            <p>
                <label for="<?= $this->get_field_id( 'form' ) ?>">
                    <?php _e( 'Form', 'golfvilla' ); ?>
                </label>
                <select id="<?= $this->get_field_id( 'form' ) ?>" class="widefat" name="<?= $this->get_field_name( 'form' ) ?>">
                    <?php foreach( $forms as $f ) : ?>
                        <option value="<?= $f->ID ?>" <?php selected($form, $f->ID) ?>><?= $f->post_title ?></option>
                    <?php endforeach; ?>
                </select>
            </p>

            <p>
                <label for="<?= $this->get_field_id( 'map' ) ?>">
                    <?php _e( 'Map URL', 'golfvilla' ); ?>
                </label>
                <textarea id="<?= $this->get_field_id( 'map' ) ?>" class="widefat" name="<?= $this->get_field_name( 'map' ) ?>" value="<?= $map ?>"><?= $map ?></textarea>
            </p>

            <h5><?php _e( 'Agent Details', 'golfvilla' ); ?></h5>
            <div class="media-widget-control">
                <p class="media-widget-buttons">
                    <label for="<?php echo $this->get_field_id( 'agent_image' ); ?>">Agent Image</label>
                    <input type="text" class="fw-image-url" name="<?= $this->get_field_name( 'agent_image' ) ?>" value="<?= $agent_image ?>">
                </p>
                <div class="media-widget-preview media_image">
                    <div class="attachment-media-view">
                        <button type="button" class="select-media button-add-media fw-upload not-selected">Add Image</button>
                    </div>
                </div>
            </div>

            <label for="<?= $this->get_field_id( 'agent_name' ) ?>"><?php _e( 'Agent Name', 'golfvilla' ); ?></label>
            <p>
                <input type="text" id="<?= $this->get_field_id( 'agent_name' ) ?>" name="<?= $this->get_field_name( 'agent_name') ?>" value="<?= $agent_name ?>">
            </p>

            <label for="<?= $this->get_field_id( 'agent_title' ) ?>"><?php _e( 'Agent Title', 'golfvilla' ); ?></label>
            <p>
                <input type="text" id="<?= $this->get_field_id( 'agent_title' ) ?>" name="<?= $this->get_field_name( 'agent_title') ?>" value="<?= $agent_title ?>">
            </p>

            <label for="<?= $this->get_field_id( 'agent_phone' ) ?>"><?php _e( 'Agent Phone', 'golfvilla' ); ?></label>
            <p>
                <input type="text" id="<?= $this->get_field_id( 'agent_phone' ) ?>" name="<?= $this->get_field_name( 'agent_phone') ?>" value="<?= $agent_phone ?>">
            </p>

            <label for="<?= $this->get_field_id( 'agent_email' ) ?>"><?php _e( 'Agent Email', 'golfvilla' ); ?></label>
            <p>
                <input type="email" id="<?= $this->get_field_id( 'agent_email' ) ?>" name="<?= $this->get_field_name( 'agent_email') ?>" value="<?= $agent_email ?>">
            </p>

            <h5><?php _e( 'Location', 'golfvilla' ); ?></h5>
            <label for="<?= $this->get_field_id( 'address' ) ?>"><?php _e( 'Address', 'golfvilla' ); ?></label>
            <p><input type="text" id="<?= $this->get_field_id( 'address' ) ?>" name="<?= $this->get_field_name( 'address' ) ?>" value="<?= $address ?>"></p>
            <label for="<?= $this->get_field_id( 'phone' ) ?>"><?php _e( 'Phone', 'golfvilla' ) ?></label>
            <p>
                <input type="tel" id="<?= $this->get_field_id( 'phone' ) ?>" name="<?= $this->get_field_name( 'phone' ) ?>" value="<?= $phone ?>">
            </p>

            <label for="<?= $this->get_field_id( 'email' ) ?>"><?php _e( 'Email', 'golfvilla' ); ?></label>
            <p>
                <input type="email" id="<?= $this->get_field_id( 'email' ) ?>" name="<?= $this->get_field_name( 'email') ?>" value="<?= $email ?>">
            </p>

            <h5><?php _e( 'Working hours', 'golfvilla' ); ?></h5>
            <label for="<?= $this->get_field_id( 'opening_hours_workday' ) ?>"><?php _e( 'Workday hours', 'golfvilla' ); ?></label>
            <p>
                <input type="text" id="<?= $this->get_field_id( 'opening_hours_workday' ) ?>" name="<?= $this->get_field_name( 'opening_hours_workday' ) ?>" value="<?= $opening_hours_weekday ?>">
            </p>

            <label for="<?= $this->get_field_id( 'opening_hours_weekend' ) ?>"><?php _e( 'Weekend hours', 'golfvilla' ); ?></label>
            <p>
                <input type="text" id="<?= $this->get_field_id( 'opening_hours_weekend' ) ?>" name="<?= $this->get_field_name( 'opening_hours_weekend' ) ?>" value="<?= $opening_hours_weekend ?>">
            </p>

            <h5><?php _e( 'Socials', 'golfvilla' ); ?></h5>

            <label for="<?= $this->get_field_id( 'facebook' ) ?>"><?php _e( 'Facebook', 'golfvilla' ); ?></label>
            <p>
                <input type="url" id="<?= $this->get_field_id( 'facebook' ) ?>" name="<?= $this->get_field_name( 'facebook' ) ?>" value="<?= $facebook ?>">
            </p>

            <label for="<?= $this->get_field_id( 'instagram' ) ?>"><?php _e( 'Instagram', 'golfvilla' ); ?></label>
            <p>
                <input type="url" id="<?= $this->get_field_id( 'instagram' ) ?>" name="<?= $this->get_field_name( 'instagram' ) ?>" value="<?= $instagram ?>">
            </p>

            <label for="<?= $this->get_field_id( 'youtube' ) ?>"><?php _e( 'Youtube', 'golfvilla' ); ?></label>
            <p>
                <input type="url" id="<?= $this->get_field_id( 'youtube' ) ?>" name="<?= $this->get_field_name( 'youtube' ) ?>" value="<?= $youtube ?>">
            </p>

        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = [];
        $instance['form']           = isset( $new_instance['form'] ) ? abs($new_instance['form']) : null;
        $instance['address']        = isset( $new_instance['address'] ) ? sanitize_text_field( $new_instance['address'] ) : null; 
        $instance['phone']          = isset( $new_instance['phone'] ) ? sanitize_text_field( $new_instance['phone'] ) : null; 
        $instance['email']          = isset( $new_instance['email'] ) ? sanitize_email( $new_instance['email'] ) : null; 
        $instance['opening_hours_workday']        = isset( $new_instance['opening_hours_workday'] ) ? sanitize_text_field( $new_instance['opening_hours_workday'] ) : null; 
        $instance['opening_hours_weekend']        = isset( $new_instance['opening_hours_weekend'] ) ? sanitize_text_field( $new_instance['opening_hours_weekend'] ) : null; 

        $instance['agent_image'] = isset( $new_instance['agent_image'] ) ? sanitize_text_field( $new_instance['agent_image'] ) : null;

        $instance['agent_name'] = isset( $new_instance['agent_name'] ) ? sanitize_text_field( $new_instance['agent_name'] ) : null;

        $instance['agent_title'] = isset( $new_instance['agent_title'] ) ? sanitize_text_field( $new_instance['agent_title'] ) : null;

        $instance['agent_phone'] = isset( $new_instance['agent_phone'] ) ? sanitize_text_field( $new_instance['agent_phone'] ) : null;

        $instance['agent_email'] = isset( $new_instance['agent_email'] ) ? sanitize_text_field( $new_instance['agent_email'] ) : null;

        $instance['facebook']  = isset( $new_instance['facebook'] ) ? $new_instance['facebook'] : null;
        $instance['instagram'] = isset( $new_instance['instagram'] ) ? $new_instance['instagram'] : null;
        $instance['youtube']   = isset( $new_instance['youtube'] ) ? $new_instance['youtube'] : null;

        $instance['map']       = isset( $new_instance['map'] ) ? $new_instance['map'] : null;

        return $instance;
    }
}