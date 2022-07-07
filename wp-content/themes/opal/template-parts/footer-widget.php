<div class="footer-widget">
    <div class="footer-widget__form-container">
        <h4>Свържете се с нас</h4>
        <div class="agent-short">
            <img src="https://via.placeholder.com/100x100" />
            <div class="agent">
                <h6 class="agent__name"><strong>Gosho Petrov</strong></h6>
                <h6 class="agent__occupation">Certified Owner</h6>
                <p class="address-row">
                    <a href="tel:+359 123 123 12"><i class="fa-solid fa-phone"></i> +359 123 123 12</a>
                </p>
                <p class="address-row"><a href="mailto:contact@agent.com"><i class="fa-solid fa-envelope"></i> contact@agent.com</a>
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
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/map.png" alt="map" />
        </div>
        <div class="footer-widget__contacts">
            <div class="footer-widget__location footer-widget__info-box">
                <h4>Локация</h4>
                <ul class="icons-list">
                    <li class="list-item">
                        <span class="list-item__icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <span class="list-item__text">
                            Box 565, Pinney's Beach, Charlestown, West Indies, Caribbean
                        </span>
                    </li>

                    <li class="list-item">
                        <span class="list-item__icon">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <span class="list-item__text">
                            <span class="black">Телефон:</span>
                            + 844 123 456 78 90
                        </span>
                    </li>

                    <li class="list-item">
                        <span class="list-item__icon">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <span class="list-item__text">
                            <span class="black">Имейл:</span>
                            contact@company.com
                        </span>
                    </li>
                </ul>
            </div>
            <div class="footer-widget__hours footer-widget__info-box">
                <h4>Работно време</h4>

                <ul class="icons-list">
                    <li class="list-item">
                        <span class="list-item__icon">
                            <i class="fa-solid fa-clock"></i>
                        </span>
                        <span class="list-item__text">
                            Monday - Friday: <span class="black">9 am to 6 pm</span>
                        </span>
                    </li>

                    <li class="list-item">
                        <span class="list-item__icon">
                            <i class="fa-solid fa-clock"></i>
                        </span>
                        <span class="list-item__text">
                            Saturday - Sunday: <span class="black">10 am to 4 pm</span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>