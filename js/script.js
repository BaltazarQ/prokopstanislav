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


    // 
    //
    // SCROLLOVANIE Z MENU LINKOV NA SEKCIU
    //
    // 
    var menu = $('.menu');
    var menuLinks = menu.find('a');
    var scrollToSection = function (event) {

        var id = this.hash;

        $('html,body').stop().animate( { scrollTop: $(id) .offset().top }, 750, function() {
        window.location.hash = id});

        event.preventDefault();
    };
    
    // Menu link scroll
	menuLinks.on('click', scrollToSection);


    //
    // 
    // zvyraznenie linku v menu podla vysky zoskrolovania
    //
    //
    var navLink = $('.menu li'),
        href = navLink.attr('href');

    navLink.find('a').on('click', function (){
        $(this).addClass('active');
        $(this).parent().siblings().find('a').removeClass('active');
    });

    // ODCHYTIM HODNOTY top VSETKYCH SEKCII DO POLA 
    var mySection = $('main section')
    var allOffset =[]
    var windowTop = Math.floor($(window).scrollTop())
    var myMenuItem = $('.navigation li')
    
    mySection.each(function(){
        allOffset.push(Math.floor($(this).offset().top))
    })
    

    $(window).on('scroll', function() {
        var myTop = win.scrollTop()

        if( myTop < (aboutTop+300)) {
            $('#menu-about').find('a').addClass('active');
            $('#menu-about').find('a').parent().siblings().find('a').removeClass('active');
        } else if (myTop < (profileTop+300)) {
            $('#menu-profile').find('a').addClass('active');
            $('#menu-profile').find('a').parent().siblings().find('a').removeClass('active');
        } else if (myTop < (worksTop+300)) {
            $('#menu-works').find('a').addClass('active');
            $('#menu-works').find('a').parent().siblings().find('a').removeClass('active');
        } 

    })

})(jQuery);