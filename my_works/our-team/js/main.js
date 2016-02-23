;(function($) {
    $(document).ready(function() {
        //slider init
        var slider = $('.ba-team-slider');
        slider.slick({
            dots: true,
            prevArrow: '<svg class="slick-prev"><use xlink:href="#icon-angle-left"></use></svg>',
            nextArrow: '<svg class="slick-next"><use xlink:href="#icon-angle-right"></use></svg>'
        });
    });
})(jQuery);
