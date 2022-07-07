$(document).ready(function() {
    var $slider = $('.front-slider');

    if( $slider.length === 0 )
        return;

    $slider.slick({
        autoplay: true,
        autoplaySpeed: 4500,
        infinite: true,
        slidesToShow: 1,
        fade: true,
        arrows: false,
        dots: true,
        touchMove: false,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>',
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    dots: false
                }
            }
        ]
    });
});