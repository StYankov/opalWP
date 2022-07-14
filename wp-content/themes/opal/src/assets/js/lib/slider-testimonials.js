$(document).ready(function() {
    var $slider = $('.slider-testimonials');

    if($slider.length === 0)
        return;

    $slider.slick({
        slidesToShow: 1,
        dots: false,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>'
    })
});