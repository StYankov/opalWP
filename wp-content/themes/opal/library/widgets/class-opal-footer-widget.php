<?php

defined( 'ABSPATH' ) or exit;

class Opal_Footer_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'opal_footer_widget',
            'Opal Footer Widget'
        );
    }

    public function widget($args, $instance) {
        get_template_part( 'template-parts/footer-widget', null, $instance );
    }

    public function form($instance) {
        $form    = isset( $instance['form'] ) ? $instance['form'] : null;
        $address = isset( $instance['address'] ) ? $instance['address'] : null; 
        $phone   = isset( $instance['phone'] ) ? $instance['phone'] : null;
        $email   = isset( $instance['email'] ) ? $instance['email'] : null;

        $opening_hours_weekday = isset( $instance['opening_hours_workday'] ) ? $instance['opening_hours_workday'] : null;
        $opening_hours_weekend = isset( $instance['opening_hours_weekend'] ) ? $instance['opening_hours_weekend'] : null;

        $forms = get_posts( ['post_type'     => 'wpcf7_contact_form', 'numberposts'   => -1] );

        ?>
            <p>
                <label for="<?= $this->get_field_id( 'form' ) ?>">
                    Форма
                </label>
                <select id="<?= $this->get_field_id( 'form' ) ?>" class="widefat" name="<?= $this->get_field_name( 'form' ) ?>">
                    <?php foreach( $forms as $f ) : ?>
                        <option value="<?= $f->ID ?>" <?php selected($form, $f->ID) ?>><?= $f->post_title ?></option>
                    <?php endforeach; ?>
                </select>
            </p>

            <h5>Локация</h5>
            <label for="<?= $this->get_field_id( 'address' ) ?>">Адрес</label>
            <p><input type="text" id="<?= $this->get_field_id( 'address' ) ?>" name="<?= $this->get_field_name( 'address' ) ?>" value="<?= $address ?>"></p>
            <label for="<?= $this->get_field_id( 'phone' ) ?>">Телефон</label>
            <p>
                <input type="tel" id="<?= $this->get_field_id( 'phone' ) ?>" name="<?= $this->get_field_name( 'phone' ) ?>" value="<?= $phone ?>">
            </p>

            <label for="<?= $this->get_field_id( 'email' ) ?>">Имейл</label>
            <p>
                <input type="email" id="<?= $this->get_field_id( 'email' ) ?>" name="<?= $this->get_field_name( 'email') ?>" value="<?= $email ?>">
            </p>

            <h5>Работно време</h5>
            <label for="<?= $this->get_field_id( 'opening_hours_workday' ) ?>">Работн време през седмицата</label>
            <p>
                <input type="text" id="<?= $this->get_field_id( 'opening_hours_workday' ) ?>" name="<?= $this->get_field_name( 'opening_hours_workday' ) ?>" value="<?= $opening_hours_weekday ?>">
            </p>

            <label for="<?= $this->get_field_id( 'opening_hours_weekend' ) ?>">Работн време през уикенд</label>
            <p>
                <input type="text" id="<?= $this->get_field_id( 'opening_hours_weekend' ) ?>" name="<?= $this->get_field_name( 'opening_hours_weekend' ) ?>" value="<?= $opening_hours_weekend ?>">
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
        
        return $instance;
    }
}