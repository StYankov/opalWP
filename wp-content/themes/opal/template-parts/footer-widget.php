<div class="footer-widget">
    <div class="footer-widget__form-container">
        <h4><?php _e( 'Contact Agent', 'golfvilla' ); ?></h4>
        <div class="agent-short">
            <img src="<?= $args['agent_image'] ?>" alt="agent-avatar" />
            <div class="agent">
                <h6 class="agent__name"><strong><?= isset( $args['agent_name'] ) ? $args['agent_name'] : null ?></strong></h6>
                <h6 class="agent__occupation"><?= isset( $args['agent_title'] ) ? $args['agent_title'] : null ?></h6>
                <p class="address-row">
                    <a href="tel:<?= isset( $args['agent_phone'] ) ? $args['agent_phone'] : null ?>"><i class="fa-solid fa-phone"></i><?= isset( $args['agent_phone'] ) ? $args['agent_phone'] : null ?></a>
                </p>
                <p class="address-row"><a href="mailto:<?= isset( $args['agent_email'] ) ? $args['agent_email'] : null ?>"><i class="fa-solid fa-envelope"></i> <?= isset( $args['agent_email'] ) ? $args['agent_email'] : null ?></a>
            </div>
        </div>
        <div class="footer-widget__form">
            <?php if( !empty( $args['form'] ) ) : ?>
                <?php echo do_shortcode( sprintf( '[contact-form-7 id="%s"]', $args['form'] ) ) ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="footer-widget__details">
        <div class="footer-widget__map">
            <?php if( !empty($args['map']) ) : ?>
                <iframe src="<?= $args['map'] ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php else: ?>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/map.png" alt="map" />
            <?php endif; ?>
        </div>
        <div class="footer-widget__contacts">
            <div class="footer-widget__location footer-widget__info-box">
                <h4><?php _e( 'Location', 'golfvilla' ); ?></h4>
                <ul class="icons-list">
                    <li class="list-item">
                        <span class="list-item__icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <span class="list-item__text">
                            <?= isset( $args['address'] ) ? $args['address'] : null; ?>
                        </span>
                    </li>

                    <li class="list-item">
                        <span class="list-item__icon">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <span class="list-item__text">
                            <span class="black"><?php _e( 'Phone', 'golfvilla' ); ?>:</span>
                            <?= isset( $args['phone'] ) ? $args['phone'] : null; ?>
                        </span>
                    </li>

                    <li class="list-item">
                        <span class="list-item__icon">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <span class="list-item__text">
                            <span class="black"><?php _e( 'Email', 'golfvilla' ) ?>:</span>
                            <?= isset( $args['email'] ) ? $args['email'] : null; ?>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="footer-widget__hours footer-widget__info-box">
                <h4><?php _e( 'Working hours', 'golfvilla' ); ?></h4>

                <ul class="icons-list">
                    <li class="list-item">
                        <span class="list-item__icon">
                            <i class="fa-solid fa-clock"></i>
                        </span>
                        <span class="list-item__text">
                            <?php _e( 'Monday - Friday', 'golfvilla' ) ?>: <span class="black"><?= isset( $args['opening_hours_workday'] ) ? $args['opening_hours_workday'] : '' ?></span>
                        </span>
                    </li>

                    <li class="list-item">
                        <span class="list-item__icon">
                            <i class="fa-solid fa-clock"></i>
                        </span>
                        <span class="list-item__text">
                            <?php _e( 'Saturday - Sunday', 'golfvilla' ); ?>: <span class="black"><?= isset( $args['opening_hours_weekend'] ) ? $args['opening_hours_weekend'] : '' ?></span>
                        </span>
                    </li>
                </ul>

                <div class="social-icons">
                    <?php if( !empty( $args['facebook'] ) ) : ?>
                        <a href="<?= $args['facebook'] ?>" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    <?php endif; ?>

                    <?php if( !empty( $args['instagram'] ) ) : ?>
                        <a href="<?= $args['instagram'] ?>" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    <?php endif; ?>

                    <?php if( !empty( $args['youtube'] ) ) : ?>
                        <a href="<?= $args['youtube'] ?>" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>