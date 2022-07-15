$(document).ready(function() {
    $('.count-up').each(function() {
        $(this).waypoint(function() {
            var that = jQuery(this.element);
            var target = that.data('target');
            var duration = that.data('duration');

            $({ countNum: 0 }).animate({ countNum: target }, {
                duration: duration, // tune the speed here
                easing: 'linear',
                step: function() {
                    that.text(Math.ceil(this.countNum));
                },
                complete: function() {
                    that.text(Math.ceil(this.countNum));
                }
            });
            this.destroy();
        }, { offset: '75%' });
    });
});