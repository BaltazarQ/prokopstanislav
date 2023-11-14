(function($, window, document, undefined) {

    $.fn.parallax = function( options ) {
        // zakladne nastavenie
        var settings = $.extend({

        }, options);

        // ulozime si jquery verziu okna
        var $win = $(window);

        // vratime object pre chaining [tatum]
        return this.each ( function() {

            var element = $(this);

            $win.on('scroll', function() {
                var bgTop = element.offset().top,
                    winTop = $win.scrollTop(),
                    bgPositionLeft = element.css('backgroundPositionX');

                element.css({ backgroundPosition: bgPositionLeft + ' ' + Math.floor( (bgTop - winTop) * 0.5) + 'px' });
            });

        });
    }
})(jQuery, window, document);