$(document).ready(function($) {

    //
    // VARIABLES
    //
    var header = $('header'),
        win = $(window),
        aboutTop = $('.about').offset().top,
        profileTop = $('.profile').offset().top,
        worksTop = $('.works').offset().top;


    //
    // ZOBRAZENIE HEADER
    //

    header.hide();
    win.on('scroll', function () {
        if ( $(this).scrollTop() < aboutTop ) {
            header.slideUp(200);
        } else {
            header.slideDown(200);
        }
    });


    //
    // PARALLAX EFEKT NA PREFACE SECTION
    //

    $(window).scroll(function() {
        // Získanie hodnoty skrolovania
        var scrollPosition = $(this).scrollTop();
  
        // Výpočet hodnoty pre background - parallax
        var parallaxValue = scrollPosition * 0.5;
  
        // Použitie transformacie pre posun pozadia preface section
        $('.preface-bg img').css('transform', 'translateY(' + parallaxValue + 'px)');
    });


    //
    // SCROLLOVANIE Z MENU LINKOV NA SEKCIU
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
    // zvyraznenie linku v menu podla vysky zoskrolovania
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
    // var windowTop = Math.floor($(window).scrollTop())
    // var myMenuItem = $('.navigation li')
    
    mySection.each(function(){
        allOffset.push(Math.floor($(this).offset().top))
    })

    // SLEDUJEM TOP POZICIU NA STRANKE A ZVYRAZNIM V MENU ELEMENT, PODLA VYSKY ZOSKROLOVANIA
    $(window).on('scroll', function() {
        var myTop = win.scrollTop()
        if( myTop < (aboutTop+300)) {
            $('.menu-about').find('a').addClass('active');
            $('.menu-about').find('a').parent().siblings().find('a').removeClass('active');
        } else if (myTop < (profileTop+300)) {
            $('.menu-profile').find('a').addClass('active');
            $('.menu-profile').find('a').parent().siblings().find('a').removeClass('active');
        } else if (myTop < (worksTop+300)) {
            $('.menu-works').find('a').addClass('active');
            $('.menu-works').find('a').parent().siblings().find('a').removeClass('active');
        } 
    })


	// 
	// ===== BACK-TO-TOP SIPKA =====
	// 

	var backToTop = $( '<a>', {
        href: '#home',
        class: 'back-to-top',
        html: '<i class="fa fa-caret-up fa-5x"></i>'
    });

    backToTop
    .hide()
    .appendTo('body')
    .on('click', function () {
        $('html, body').animate({ scrollTop: 0});
    });

    win.on('scroll', function () {
        if ( win.scrollTop() >= 200 ) backToTop.fadeIn();
        else backToTop.hide();
    });


    // 
	// ===== SWITCH LANGUAGE =====
	// 

    var lng = $('.lng-select a'),
        lng_en = $('.lng-en'),
        lng_sk = $('.lng-sk'),
        menu_en = $('.menu-en'),
        menu_sk = $('.menu-sk');

    lng_sk.hide();
    menu_sk.hide();

    lng.on('click', function(event){
        event.preventDefault();

        lng_sk.toggle();
        lng_en.toggle();
        menu_sk.toggle();
        menu_en.toggle();
    })

})(jQuery);