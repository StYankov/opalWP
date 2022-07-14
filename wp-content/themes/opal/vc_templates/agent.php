<?php

/**
 * @var string $name
 * @var string $title
 * @var int $avatar_id
 * @var string $phone
 * @var string $email
 * @var string $facebook
 * @var string $twitter
 * @var string $youtube
 */
defined( 'ABSPATH' ) or exit;

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$avatar = wp_get_attachment_image_url( $avatar_id, 'full' );

ob_start();
?>
    <div class="agent">
        <div class="agent__avatar">
            <?php if( $avatar ) : ?>
                <img src="<?= $avatar ?>" alt="<?= sanitize_title( $name ) ?>" />
            <?php endif; ?>

            <div class="agent__backpanel">
                <?php if( !empty($phone) ) : ?>
                    <p class="agent__phone"><i class="fa-solid fa-phone"></i> <?= $phone ?></p>
                <?php endif; ?>

                <?php if( !empty($email) ) : ?>
                    <p class="agent__email"><i class="fa-solid fa-envelope"></i> <?= $email ?></p>
                <?php endif; ?>

                <div class="agent__socials">
                    <?php if( !empty($facebook) ) : ?>
                        <a href="<?= $facebook ?>" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    <?php endif; ?>

                    <?php if( !empty($youtube) ) : ?>
                        <a href="<?= $youtube ?>" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    <?php endif; ?>

                    <?php if( !empty($twitter) ) : ?>
                        <a href="<?= $twitter ?>" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="agent__details">
            <?php if( !empty($name) ) : ?>
                <h6 class="agent__name"><?= $name ?></h6>
            <?php endif; ?>

            <?php if( !empty($title) ) : ?>
                <p class="agent__title"><?= $title ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php
return ob_get_clean();