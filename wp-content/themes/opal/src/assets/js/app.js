import $ from 'jquery';
// import whatInput from 'what-input';

window.$ = $;

// import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
import './lib/foundation-explicit-pieces';
import './lib/front-slider';
import './lib/isotope-gallery';
import './lib/hotspots';
import './lib/slider-testimonials';
import './lib/count-up';

$(document).foundation();

// Jumpy Background Image Quick Fixs
$(document).ready(function() {
    if(jQuery('.home .image-background').length === 0)
        return;

    var currentHeight = jQuery('.home .image-background').height();

    jQuery('.home .image-background').css('min-height', (currentHeight + 35) + 'px');
});

$(document).ready(function() {
    $(window).on('scroll', function() {
        var scrollTop = $(document).scrollTop();

        if(scrollTop > 500) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').on('click', function(e) {
        e.preventDefault();

        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});