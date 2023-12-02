$(document).ready(function($) {
    //
    //
    // ZOBRAZENIE HEADER, SLIDE-UP preface section
    //
    //
    var header = $('header'),
        preface = $('#preface'),
        win = $(window),
        aboutTop = $('#about').offset().top,
        profileTop = $('#profile').offset().top,
        worksTop = $('#works').offset().top;

    header.hide();
    win.on('scroll', function () {
        if ( $(this).scrollTop() < aboutTop ) {
            header.slideUp(200);
        } else {
            header.slideDown(200);
        }
    });

})(jQuery);