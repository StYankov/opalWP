$(document).ready(function() {
    $('.pin-circle').click(function(e) {
        var id = $(this).closest('.point_style').data('point-id');

        var $target = $(`[href="#tab-${id}"]`).parent().find('.accordion-content');
        
        $('.pins-list .accordion').foundation('down', $target);
    });

    var $hotspot = $('.image-hotspot');

    if($hotspot.length) {
        $hotspot.css('height', ($hotspot.height() + 10) + 'px');
    }
});