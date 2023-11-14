<<<<<<< HEAD
$(document).ready(function($) {


// FUNKCIA DARKEN NA STMAVENIE FARBY
    jQuery.fn.darken = function(options) {

        var settings = {
            'percent'	: 15
        };
        
        if ( options ) { 
            $.extend( settings, options );
        }
    
        $(this).each(function() {
            var darkenPercent = settings.percent;
            var rgb = $(this).css('background-color').replace('rgb(', '').replace(')', '').split(',');
            var red = $.trim(rgb[0]);
            var green = $.trim(rgb[1]);
            var blue = $.trim(rgb[2]);
                    
            red = parseInt(red * (100 - darkenPercent) / 100);
            green = parseInt(green * (100 - darkenPercent) / 100);
            blue = parseInt(blue * (100 - darkenPercent) / 100);
            
            rgb = 'rgb(' + red + ', ' + green + ', ' + blue + ')';
            $(this).css('background-color', rgb);
        });
        return this;
    }

    // FUNKCIA LIGHTEN NA ZOSVETLENIE FARBY
    jQuery.fn.lighten = function(options) {

        var settings = {
            'percent'	: 15
        };
        
        if ( options ) { 
            $.extend( settings, options );
        }
    
        $(this).each(function() {
            var darkenPercent = settings.percent;
            var rgb = $(this).css('background-color').replace('rgb(', '').replace(')', '').split(',');
            var red = $.trim(rgb[0]);
            var green = $.trim(rgb[1]);
            var blue = $.trim(rgb[2]);
                    
            red = parseInt(red * (100 + darkenPercent) / 100);
            green = parseInt(green * (100 + darkenPercent) / 100);
            blue = parseInt(blue * (100 + darkenPercent) / 100);
            
            rgb = 'rgb(' + red + ', ' + green + ', ' + blue + ')';
            $(this).css('background-color', rgb);
        });
        return this;
    }


    
    // ROZROLOVANIE MENU

    var navigation = $('.navigation'),
        menu = $('.menu'),
        startingPosition = navigation.css('left');
        margin = $('header').height();
    $('main').css({'margin-top': margin});
    
    $(window).scroll(function() {
        var header = $('header');

            header.css({position: 'fixed', zIndex: '10'});
    });

    // rozrolovanie menu pri malom rozliseni

    var menuIcon = $('.menu-icon');
        // maxWidth = menuIcon.find('i').css({'maxWidth' : newWidth});

    menuIcon.on('click', function () {
        // $(this).find('i').css({'maxWidth': ( $(window).width() + 'px')});
        if( $(window).width() <= 420) {
            navigation.stop().slideToggle(500);
        };
    });


    // podciarknutie linku v menu podla vysky zoskrolovania

    var navLi = $('.navigation li'),
        href = navLi.attr('href');

    navLi.find('a').on('click', function (){
        $(this).addClass('active');
        $(this).parent().siblings().find('a').removeClass('active');
    });

    var prefaceTop = $('#preface').offset().top,
        profileTop = $('#profile').offset().top,
        aboutTop = $('#about').offset().top,
        moreTop = $('#more').offset().top,
        contactTop = $('#contact').offset().top


        
    // ODCHYTIM HODNOTY top VSETKYCH SEKCII DO POLA 
    var mySection = $('main section')
    var allOffset =[]
    var windowTop = Math.floor($(window).scrollTop())
    var myMenuItem = $('.navigation li')
    
    mySection.each(function(){
        allOffset.push(Math.floor($(this).offset().top))
    })
    

    // VYRATANIE POMERU MEDZI VYSKOU DOKUMENTU A SIRKOU NAVBARU

    var scrollingLine = $('.scrolling-line')
    
    var winHeight = $(window).height()                                          // 722
    var docHeight = $(document).height()                                        // 4062
    var docUnit = docHeight / 100                                               // 40.62
    var navigationWidth = $('.navigation').width()                              // 548
    var newWidth = navigationWidth / 100                                        // 5.4875
    var myRatio = newWidth / docUnit                                            // 40.62 / 5.4875 = 7.402277904328018
    // console.log(newWidth + ' / ' + docUnit + ' = ' + newWidth / docUnit)
    
    var startingWidth = winHeight * myRatio
    scrollingLine.css({width: startingWidth})
    var myColor = $('#menu-about').find('a').css('color')

    $(window).on('scroll', function() {
        var myTop = win.scrollTop()
        var actualWidth = (myTop * myRatio) + startingWidth
        scrollingLine.css({width: actualWidth})


        var colorPrefaceBg =  '#a4abb8'
        var colorProfileBg =  '#8fe3fa'
        var colorAboutBg =  '#fa949c'
        var colorMoreBg =  '  #b0ff8e'
        var colorContactBg =  '#fbf893'

        if( myTop < (profileTop -300)) {
            scrollingLine.css({backgroundColor: colorPrefaceBg})
            $('#menu-preface').find('a').addClass('active');
            $('#menu-preface').find('a').parent().siblings().find('a').removeClass('active');
        } else if (myTop < (aboutTop - 300)) {
            scrollingLine.css({backgroundColor: colorProfileBg})
            $('#menu-profile').find('a').addClass('active');
            $('#menu-profile').find('a').parent().siblings().find('a').removeClass('active');
        } else if (myTop < (moreTop - 300)) {
            scrollingLine.css({backgroundColor: colorAboutBg})
            $('#menu-about').find('a').addClass('active');
            $('#menu-about').find('a').parent().siblings().find('a').removeClass('active');
        } else if (myTop < (contactTop - 300)) {
            scrollingLine.css({backgroundColor: colorMoreBg})
            $('#menu-more').find('a').addClass('active');
            $('#menu-more').find('a').parent().siblings().find('a').removeClass('active');
        } else {
            scrollingLine.css({backgroundColor: colorContactBg})
            $('#menu-contact').find('a').addClass('active');
            $('#menu-contact').find('a').parent().siblings().find('a').removeClass('active');
        }
    })



    // 
	// 
	// ===== BACK-TO-TOP SIPKA =====
	// 
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
    $('html, body').animate({ scrollTop: 100});
    });

    var win = $(window);

    win.on('scroll', function () {
    if ( win.scrollTop() >= 200 ) backToTop.fadeIn();
    else backToTop.hide();
    });



    // 
    // SCROLLOVANIE MENU LINKOV
    // 
    

    var menuLinks = menu.find('a');
    var scrollToSection = function (event) {

        var id = this.hash;

        $('html,body').stop().animate( { scrollTop: $(id).offset().top }, 750, function() {
        window.location.hash = id});

        event.preventDefault();
    };
    
    // Menu link scroll
	menuLinks.on('click', scrollToSection);

    // Preface btn scroll
    $('.preface').find('.btn a').on('click', scrollToSection);

    // Profile btn scroll
    $('.profile').find('.btn a').on('click', scrollToSection);

    // About btn scroll
    $('.about').find('.btn a').on('click', scrollToSection);

    // More btn scroll
    $('.more').find('.btn a').on('click', scrollToSection);


  // 
    // skrolovanie technologii po hoveri nad obrazkom podstranky
    // 
    var techFamily = $('.tech-family'),
        techFiato = $('.tech-fiato'),
        techGallery = $('.tech-gallery'),
        presentationFamily = $('.presentation-family-game'),
        presentationFiato = $('.presentation-fiato-rosa'),
        presentationGallery = $('.presentation-gallery')
    
    presentationFamily.on('mouseenter', function(){
        techFamily.stop().slideDown(500)
    })
    presentationFamily.on('mouseleave', function(){
        techFamily.stop().slideUp(500)
    })
    
    presentationFiato.on('mouseenter', function(){
        techFiato.stop().slideDown(500)
    })
    presentationFiato.on('mouseleave', function(){
        techFiato.stop().slideUp(500)
    })
    
    presentationGallery.on('mouseenter', function(){
        techGallery.stop().slideDown(500)
    })
    presentationGallery.on('mouseleave', function(){
        techGallery.stop().slideUp(500)
    })



    // 
	// LIGHTBOX
	// 

	var cv = $('.cv').find('li'),
	    overlay = $('<div/>', { id: 'overlay' }),
        close = $( '<div/>', { id: 'close-icon', html: '<i class="fas fa-solid fa-xmark">X</i>'});

    overlay.appendTo('body').hide();
    close.appendTo('body').hide();
	


    // 
	// 
	// === AJAX ===
	// 
	// 

	var moreItem = $('.more-item'),
    selected = $('.cv').find('.selected');

    // 
    $('.cv a').on('click', function(event) {

        
        // vytiahneme adresu linku
        var a = $(this),
        li = a.parent(),
        href = a.attr('href');
        
        // vyznacime noveho selected rodica
        selected = li;
        
        // oznacime link, na ktory sme klikli ako selected
        li.addClass('selected')
        .siblings().removeClass('selected');
        
        overlay.show().load(href);
        close.show();

        // nechcem ist na podstranku
        event.preventDefault();
    });

    	// PO KLIKNUTI NA KRIZIK SKRYJEME OVERLAY
	close.on('click', function() {
        overlay.remove();
        close.remove();
    });



    // 
    // AKORDEON EFEKT - WORK
    // 

    var description = $('.job-description'),
        jobWrap = $('.job-wrap');

    
    description.hide();

    jobWrap.on('click', function() {
        description.removeClass('opened');
        $(this).siblings().addClass('opened').stop().slideToggle(1000);
        // $(this).siblings().slideToggle(1000);
        description.not($('.opened')).slideUp(1000);
    });


=======
$(document).ready(function($) {


// FUNKCIA DARKEN NA STMAVENIE FARBY
    jQuery.fn.darken = function(options) {

        var settings = {
            'percent'	: 15
        };
        
        if ( options ) { 
            $.extend( settings, options );
        }
    
        $(this).each(function() {
            var darkenPercent = settings.percent;
            var rgb = $(this).css('background-color').replace('rgb(', '').replace(')', '').split(',');
            var red = $.trim(rgb[0]);
            var green = $.trim(rgb[1]);
            var blue = $.trim(rgb[2]);
                    
            red = parseInt(red * (100 - darkenPercent) / 100);
            green = parseInt(green * (100 - darkenPercent) / 100);
            blue = parseInt(blue * (100 - darkenPercent) / 100);
            
            rgb = 'rgb(' + red + ', ' + green + ', ' + blue + ')';
            $(this).css('background-color', rgb);
        });
        return this;
    }

    // FUNKCIA LIGHTEN NA ZOSVETLENIE FARBY
    jQuery.fn.lighten = function(options) {

        var settings = {
            'percent'	: 15
        };
        
        if ( options ) { 
            $.extend( settings, options );
        }
    
        $(this).each(function() {
            var darkenPercent = settings.percent;
            var rgb = $(this).css('background-color').replace('rgb(', '').replace(')', '').split(',');
            var red = $.trim(rgb[0]);
            var green = $.trim(rgb[1]);
            var blue = $.trim(rgb[2]);
                    
            red = parseInt(red * (100 + darkenPercent) / 100);
            green = parseInt(green * (100 + darkenPercent) / 100);
            blue = parseInt(blue * (100 + darkenPercent) / 100);
            
            rgb = 'rgb(' + red + ', ' + green + ', ' + blue + ')';
            $(this).css('background-color', rgb);
        });
        return this;
    }


    
    // ROZROLOVANIE MENU

    var navigation = $('.navigation'),
        menu = $('.menu'),
        startingPosition = navigation.css('left');
        margin = $('header').height();
    $('main').css({'margin-top': margin});
    
    $(window).scroll(function() {
        var header = $('header');

            header.css({position: 'fixed', zIndex: '10'});
    });

    // rozrolovanie menu pri malom rozliseni

    var menuIcon = $('.menu-icon');
        // maxWidth = menuIcon.find('i').css({'maxWidth' : newWidth});

    menuIcon.on('click', function () {
        // $(this).find('i').css({'maxWidth': ( $(window).width() + 'px')});
        if( $(window).width() <= 420) {
            navigation.stop().slideToggle(500);
        };
    });


    // podciarknutie linku v menu podla vysky zoskrolovania

    var navLi = $('.navigation li'),
        href = navLi.attr('href');

    navLi.find('a').on('click', function (){
        $(this).addClass('active');
        $(this).parent().siblings().find('a').removeClass('active');
    });

    var prefaceTop = $('#preface').offset().top,
        profileTop = $('#profile').offset().top,
        aboutTop = $('#about').offset().top,
        moreTop = $('#more').offset().top,
        contactTop = $('#contact').offset().top


        
    // ODCHYTIM HODNOTY top VSETKYCH SEKCII DO POLA 
    var mySection = $('main section')
    var allOffset =[]
    var windowTop = Math.floor($(window).scrollTop())
    var myMenuItem = $('.navigation li')
    
    mySection.each(function(){
        allOffset.push(Math.floor($(this).offset().top))
    })
    

    // VYRATANIE POMERU MEDZI VYSKOU DOKUMENTU A SIRKOU NAVBARU

    var scrollingLine = $('.scrolling-line')
    
    var winHeight = $(window).height()                                          // 722
    var docHeight = $(document).height()                                        // 4062
    var docUnit = docHeight / 100                                               // 40.62
    var navigationWidth = $('.navigation').width()                              // 548
    var newWidth = navigationWidth / 100                                        // 5.4875
    var myRatio = newWidth / docUnit                                            // 40.62 / 5.4875 = 7.402277904328018
    // console.log(newWidth + ' / ' + docUnit + ' = ' + newWidth / docUnit)
    
    var startingWidth = winHeight * myRatio
    scrollingLine.css({width: startingWidth})
    var myColor = $('#menu-about').find('a').css('color')

    $(window).on('scroll', function() {
        var myTop = win.scrollTop()
        var actualWidth = (myTop * myRatio) + startingWidth
        scrollingLine.css({width: actualWidth})


        var colorPrefaceBg =  '#a4abb8'
        var colorProfileBg =  '#8fe3fa'
        var colorAboutBg =  '#fa949c'
        var colorMoreBg =  '  #b0ff8e'
        var colorContactBg =  '#fbf893'

        if( myTop < (profileTop -300)) {
            scrollingLine.css({backgroundColor: colorPrefaceBg})
            $('#menu-preface').find('a').addClass('active');
            $('#menu-preface').find('a').parent().siblings().find('a').removeClass('active');
        } else if (myTop < (aboutTop - 300)) {
            scrollingLine.css({backgroundColor: colorProfileBg})
            $('#menu-profile').find('a').addClass('active');
            $('#menu-profile').find('a').parent().siblings().find('a').removeClass('active');
        } else if (myTop < (moreTop - 300)) {
            scrollingLine.css({backgroundColor: colorAboutBg})
            $('#menu-about').find('a').addClass('active');
            $('#menu-about').find('a').parent().siblings().find('a').removeClass('active');
        } else if (myTop < (contactTop - 300)) {
            scrollingLine.css({backgroundColor: colorMoreBg})
            $('#menu-more').find('a').addClass('active');
            $('#menu-more').find('a').parent().siblings().find('a').removeClass('active');
        } else {
            scrollingLine.css({backgroundColor: colorContactBg})
            $('#menu-contact').find('a').addClass('active');
            $('#menu-contact').find('a').parent().siblings().find('a').removeClass('active');
        }
    })



    // 
	// 
	// ===== BACK-TO-TOP SIPKA =====
	// 
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
    $('html, body').animate({ scrollTop: 100});
    });

    var win = $(window);

    win.on('scroll', function () {
    if ( win.scrollTop() >= 200 ) backToTop.fadeIn();
    else backToTop.hide();
    });



    // 
    // SCROLLOVANIE MENU LINKOV
    // 
    

    var menuLinks = menu.find('a');
    var scrollToSection = function (event) {

        var id = this.hash;

        $('html,body').stop().animate( { scrollTop: $(id).offset().top }, 750, function() {
        window.location.hash = id});

        event.preventDefault();
    };
    
    // Menu link scroll
	menuLinks.on('click', scrollToSection);

    // Preface btn scroll
    $('.preface').find('.btn a').on('click', scrollToSection);

    // Profile btn scroll
    $('.profile').find('.btn a').on('click', scrollToSection);

    // About btn scroll
    $('.about').find('.btn a').on('click', scrollToSection);

    // More btn scroll
    $('.more').find('.btn a').on('click', scrollToSection);




    // 
	// LIGHTBOX
	// 

	var cv = $('.cv').find('li'),
	    overlay = $('<div/>', { id: 'overlay' }),
        close = $( '<div/>', { id: 'close-icon', html: '<i class="fas fa-solid fa-xmark">X</i>'});

    overlay.appendTo('body').hide();
    close.appendTo('body').hide();
	


    // 
	// 
	// === AJAX ===
	// 
	// 

	var moreItem = $('.more-item'),
    selected = $('.cv').find('.selected');

    // 
    $('.cv a').on('click', function(event) {

        
        // vytiahneme adresu linku
        var a = $(this),
        li = a.parent(),
        href = a.attr('href');
        
        // vyznacime noveho selected rodica
        selected = li;
        
        // oznacime link, na ktory sme klikli ako selected
        li.addClass('selected')
        .siblings().removeClass('selected');
        
        overlay.show().load(href);
        close.show();

        // nechcem ist na podstranku
        event.preventDefault();
    });

    	// PO KLIKNUTI NA KRIZIK SKRYJEME OVERLAY
	close.on('click', function() {
        overlay.remove();
        close.remove();
    });



    // 
    // AKORDEON EFEKT - WORK
    // 

    var description = $('.job-description'),
        jobWrap = $('.job-wrap');

    
    description.hide();

    jobWrap.on('click', function() {
        description.removeClass('opened');
        $(this).siblings().addClass('opened').stop().slideToggle(1000);
        // $(this).siblings().slideToggle(1000);
        description.not($('.opened')).slideUp(1000);
    });


>>>>>>> ac9cc4e (Obnovenie)
})(jQuery);