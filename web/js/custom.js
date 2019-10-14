(function () {
    'use strict';
    //--------------------------------------------------
    // OWl Carousel Setup
    //--------------------------------------------------
    $(function(){
        $.scrollIt({
            upKey: 38,             // key code to navigate to the next section
            downKey: 40,           // key code to navigate to the previous section
            easing: 'linear',      // the easing function for animation
            scrollTime: 600,       // how long (in ms) the animation takes
            activeClass: 'active', // class given to the active nav element
            onPageChange: null,    // function(pageIndex) that is called when page is changed
            topOffset: -50           // offste (in px) for fixed top navigation
        });
    });

    //--------------------------------------------------
    // Preloader 
    //--------------------------------------------------
    /*jQuery(window).on("load", function () {
        $(".akar-loader").fadeOut("slow");
    });*/

    $('.navbar-toggler').on('click', function(){
        var navbar =  $('.navbar');
        var color = $(document).find('header').attr('data-color');
        var state = $(this).attr('aria-expanded');
        
        
        if(state=='false'){
           
            navbar.css({
                backgroundColor: color
            });
            //navbar.css('backgroundColor', color+'!important');
        }else{
            navbar.css({
                backgroundColor: 'transparent'
            });
        }
        
    })

    AOS.init({
        throttleDelay: 99,
        mirror: true,
    });


    //--------------------------------------------------
    // Owl Carousel
    //--------------------------------------------------
    $('.reviews .owl-carousel').owlCarousel({
        loop: true,
        margin: 80,
        items:1,
        mouseDrag:true,
        autoplay:false,
        dots: true,
        nav: false,
        responsiveClass:false

    });




    $('.partner .owl-carousel').owlCarousel({
        animateOut: 'zoomOut',
        animateIn: 'zoomIn',
        loop: true,
        margin: 70,
        mouseDrag:true,
        autoplay:false,
        dots: false,
        nav: false,
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                margin: 20,
            },
            600:{
                items:4
            },
            1000:{
                items:5
            }
        }
    });




    //--------------------------------------------------
    // Custom Buttom
    //--------------------------------------------------
    var owl = $('.owl-carousel');
    owl.owlCarousel();
    // Go to the next item
    $('.customNextBtn').on("click", function() {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.customPrevBtn').on("click", function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [700]);
    })


    //--------------------------------------------------
    // Scroll control
    //--------------------------------------------------
    $(window).on("scroll", function(){
        
        let colorHeader;
        $('.footer').css("opacity", -2 + $(window).scrollTop() / 300);
        
        if($(window).scrollTop()>=600){
            $('.navbar').attr('data-state', 'scroll-down');
            colorHeader = $(document).find('header').attr('data-color');
            $('.navbar').css('backgroundColor', colorHeader);
        }else{
            $('.navbar').attr('data-state', 'scroll-top');
            $('.navbar').css('backgroundColor', 'transparent');
        }

    });




    //--------------------------------------------------
    // Portfolio (animate + owl Carousel)
    //--------------------------------------------------

    // add animate.css class(es) to the elements to be animated
    function setAnimation ( _elem, _InOut ) {
        // Store all animationend event name in a string.
        // cf animate.css documentation
        var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

        _elem.each ( function () {
        var $elem = $(this);
        var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

        $elem.addClass($animationType).one(animationEndEvent, function () {
            $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
        });
        });
    }

    // Fired before current slide change
    owl.on('change.owl.carousel', function(event) {
        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-out]");
        setAnimation ($elemsToanim, 'out');
    });

    // Fired after current slide has been changed
    var round = 0;
    owl.on('changed.owl.carousel', function(event) {

        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-in]");
        
        setAnimation ($elemsToanim, 'in');
    })
    
    owl.on('translated.owl.carousel', function(event) {
        
        
        if (event.item.index == (event.page.count - 1))  {
            if (round < 1) {
            round++
           
            } else {
            owl.trigger('stop.owl.autoplay');
            var owlData = owl.data('owl.carousel');
            owlData.settings.autoplay = false; //don't know if both are necessary
            owlData.options.autoplay = false;
            owl.trigger('refresh.owl.carousel');
            }
        }
    });


 }());
