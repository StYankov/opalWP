$(document).ready(function() {
    var $gallery = $('.isotope-gallery');

    if($gallery.length === 0)
        return;

    var $grid = $gallery.find('.gallery-items').isotope({
        itemSelector: '.gallery-item',
        layoutMode: 'fitRows'
    });

    $gallery.find('.gallery-filters button').on('click', function(e) {
        if(e.target.classList.contains('active'))
            return;
        
        $gallery.find('button.active').removeClass('active');
        e.target.classList.add('active');

        var filter = $(e.target).data('filter');
        filter = filter !== '*' ? '.' + filter : '*';

        $grid.isotope({ filter: filter });
    });

    $gallery.find('.gallery-item').hover(function(e) {
        var el = $(e.target).closest('.gallery-item')
        var overlay = el.find('.gallery-item__overlay')[0]; 
        const side = closestSide(e.clientX, e.clientY, el[0]);
        
        moveIn(side, overlay);
    }, function(e) {
        var el = $(e.target).closest('.gallery-item');
        var overlay = el.find('.gallery-item__overlay')[0];
        var side = closestSide(e.clientX, e.clientY, el[0]);
        
        moveOut(side, overlay);
    });

    $gallery.find('.gallery-item').magnificPopup({ 
        type:'image',
        gallery:{
            enabled:true
        }
    });

    function closestSide(mouseX, mouseY, htmlElement) {
        var box = htmlElement.getBoundingClientRect();

        var sides = [];
        
        // left
        sides.push({
            type: 'left',
            diff: Math.abs(mouseX - box.left)
        });

        sides.push({
            type: 'top',
            diff: Math.abs(mouseY - box.top)
        });

        sides.push({
            type: 'right',
            diff: Math.abs(mouseX - box.right)
        });

        sides.push({
            type: 'bottom',
            diff: Math.abs(mouseY - box.bottom)
        });

        sides.sort(function(a, b) {
            return a.diff - b.diff;
        });

        return sides[0].type;
    }

    function moveIn(side, htmlElement) {
        if(side === 'left') {
            $(htmlElement).stop().css('top', '0')
                .css('right', '100%')
                .css('left', 'auto')
                .css('bottom', '0')
                .animate({right: 0}, 200)
        } else if(side === 'right') {
            $(htmlElement).stop().css('top', '0')
                .css('right', 'auto')
                .css('left', '100%')
                .css('bottom', '0')
                .animate({left: 0}, 200)
        } else if(side === 'top') {
            $(htmlElement).css('top', 'auto')
                .css('right', '0')
                .css('left', '0')
                .css('bottom', '100%')
                .animate({bottom: 0}, 200)
        } else if(side === 'bottom') {
            $(htmlElement).css('top', '100%')
                .css('right', '0')
                .css('left', '0')
                .css('bottom', 'auto')
                .animate({ top: 0 }, 200)
        }
    }

    function moveOut(side, htmlElement) {
        if(side === 'left') {
            $(htmlElement).stop().css('left', 'auto').animate({ right: '100%' }, 200);
        } else if(side === 'right') {
            $(htmlElement).stop().css('right', 'auto').animate({ left: '100%' }, 200);
        } else if(side === 'top') {
            $(htmlElement).css('top', 'auto').animate({ bottom: '100%' }, 200);
        } else if(side === 'bottom') {
            $(htmlElement).css('bottom', 'auto').animate({ top: '100%' }, 200)
        }
    }
});