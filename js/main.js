(function($) {

	"use strict";

	/*=============================================
    =       Menu sticky & Scroll to top          =
    =============================================*/
    var windows = $(window);
    var screenSize = windows.width();
    var sticky = $('.header-sticky');
    var $html = $('html');
    var $body = $('body');

    windows.on('scroll', function () {
        var scroll = windows.scrollTop();
        var headerHeight = sticky.height();

        if (screenSize >= 320) {
            if (scroll < headerHeight) {
                sticky.removeClass('is-sticky');
            } else {
                sticky.addClass('is-sticky');
            }
        }

    });


    /*----------  Scroll to top  ----------*/
    function scrollToTop() {
        var $scrollUp = $('#scroll-top'),
            $lastScrollTop = 0,
            $window = $(window);

        $window.on('scroll', function () {
            var st = $(this).scrollTop();
            if (st > $lastScrollTop) {
                $scrollUp.removeClass('show');
            } else {
                if ($window.scrollTop() > 200) {
                    $scrollUp.addClass('show');
                } else {
                    $scrollUp.removeClass('show');
                }
            }
            $lastScrollTop = st;
        });

        $scrollUp.on('click', function (evt) {
            $('html, body').animate({scrollTop: 0}, 600);
            evt.preventDefault();
        });
    }
    scrollToTop();


    /*===========================================
    =            Submenu viewport position      =
    =============================================*/

    if ($(".has-children--multilevel-submenu").find('.submenu').length) {
        var elm = $(".has-children--multilevel-submenu").find('.submenu');

        elm.each(function(){
            var off = $(this).offset();
            var l = off.left;
            var w = $(this).width();
            var docH = windows.height();
            var docW = windows.width() - 10;
            var isEntirelyVisible = (l + w <= docW);

            if (!isEntirelyVisible) {
                $(this).addClass('left');
            }
        });
    }
    /*==========================================
    =            mobile menu active            =
    ============================================*/

    $("#mobile-menu-trigger").on('click', function(){
        $("#mobile-menu-overlay").addClass("active");
        $body.addClass('no-overflow');
    });

    $("#mobile-menu-close-trigger").on('click', function(){
        $("#mobile-menu-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });

    $(".offcanvas-navigation--onepage ul li a").on('click', function(){
        $("#mobile-menu-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });

    /*Close When Click Outside*/
    $body.on('click', function(e){
        var $target = e.target;
        if (!$($target).is('.mobile-menu-overlay__inner') && !$($target).parents().is('.mobile-menu-overlay__inner') && !$($target).is('#mobile-menu-trigger') && !$($target).is('#mobile-menu-trigger i')){
            $("#mobile-menu-overlay").removeClass("active");
            $body.removeClass('no-overflow');
        }
        if (!$($target).is('.search-overlay__inner') && !$($target).parents().is('.search-overlay__inner') && !$($target).is('#search-overlay-trigger') && !$($target).is('#search-overlay-trigger i')){
            $("#search-overlay").removeClass("active");
            $body.removeClass('no-overflow');
        }
    });


    /*===================================
    =           Menu Activeion          =
    ===================================*/
    var cururl = window.location.pathname;
    var curpage = cururl.substr(cururl.lastIndexOf('/') + 1);
    var hash = window.location.hash.substr(1);
    if((curpage == "" || curpage == "/" || curpage == "admin") && hash=="")
        {
        //$("nav .navbar-nav > li:first-child").addClass("active");
        } else {
            $(".navigation-menu li").each(function()
        {
            $(this).removeClass("active");
        });
        if(hash != "")
            $(".navigation-menu li a[href*='"+hash+"']").parents("li").addClass("active");
        else
        $(".navigation-menu li a[href*='"+curpage+"']").parents("li").addClass("active");
    }


    /*=========================================
    =             open menu Active            =
    ===========================================*/
     $('.openmenu-trigger').on('click', function (e) {
        e.preventDefault();
        $('.open-menuberger-wrapper').addClass('is-visiable');
    });

    $('.page-close').on('click', function (e) {
        e.preventDefault();
        $('.open-menuberger-wrapper').removeClass('is-visiable');
    });


    /*=========================================
    =             open menu Active            =
    ===========================================*/
    $("#open-off-sidebar-trigger").on('click', function(){
        $("#page-oppen-off-sidebar-overlay").addClass("active");
        $body.addClass('no-overflow');
    });

    $("#menu-close-trigger").on('click', function(){
        $("#page-oppen-off-sidebar-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });

    /*=============================================
    =            search overlay active            =
    =============================================*/

    $("#search-overlay-trigger").on('click', function(){
        $("#search-overlay").addClass("active");
        $body.addClass('no-overflow');
    });

    $("#search-close-trigger").on('click', function(){
        $("#search-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });


    /*=========================================
    =             open menu Active            =
    ===========================================*/
     $('.share-icon').on('click', function (e) {
        e.preventDefault();
        $('.entry-post-share').toggleClass('opened');
    });

    $body.on("click", function () {
        $(".entry-post-share").removeClass('opened');
    });
    // Prevent closing dropdown upon clicking inside the dropdown
    $(".entry-post-share").on("click", function(e) {
        e.stopPropagation();
    });

    /*=============================================
    =            offcanvas mobile menu            =
    =============================================*/
    var $offCanvasNav = $('.offcanvas-navigation'),
        $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu');

    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');

    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();

    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.parent('li').removeClass('active');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active');
                $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.siblings('ul').slideDown();
            }
        }
    });

    //Youtube background
    /*
    This script is based on the iframeResize-Pen (https://codepen.io/Codepalm/pen/XLzbrO) and adds the align-Plugin for jQuery
    */
    (function($) {

        $( document ).ready( function() {
            $( window ).resize( function() {
                iframeResize();
            });
            iframeResize();
        });

        function iframeResize() {
            var iframes = $( 'iframe[data-scaling="true"]' );
            if( iframes.exists() ) {
                iframes.each( function() {
                    let iframe = $( this );
                    let videoFormat = '16:9';
                    if( typeof iframe.attr( 'data-format' ) !== "undefined" && iframe.attr( 'data-format' ).includes( ':' ) )
                        videoFormat = iframe.attr( 'data-format' );
                    iframe.rescale( videoFormat );
                    iframe.iframeCenterAlign();

                });
            }
        }

        $.fn.iframeCenterAlign = function() {

            var wrapperWidth = this.parent().width();
            var iframeWidth = this.width();
            var leftMargin = ( wrapperWidth - iframeWidth ) / 2;

            var wrapperHeight = this.parent().height();
            var iframeHeight = this.height();
            var topMargin = ( wrapperHeight - iframeHeight ) / 2;

            this.parent().css({ 'left': leftMargin+'px', 'top': topMargin+'px' });

        }
        $.fn.rescale = function( format ) {
            let formatWidth = parseInt( format.split(':')[0] );
            let formatHeight = parseInt( format.split(':')[1] );
            let formatRatio = formatHeight / formatWidth;

            let currentWidth = this.width();
            let newHeight = formatRatio * currentWidth;

            this.height( Math.round( newHeight ) );
        };
        $.fn.exists = function() {
            return this.length > 0;
        };

    })(jQuery);



// Portfolio Slides
    $('.card-slides').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            }
        }
    });

    //About grey slider
    $('#slideabout').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            1200: {
                items: 1,
            }
        }
    });

    //About grey slider
    $('#funfactslider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4,
            }
        }
    });

    //About grey slider
    $('#timelineslider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4,
            }
        }
    });

    //About grey slider
    $('#ratesSlider').owlCarousel({
        loop: false,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        autoplay: false,
        margin: 30,
        responsive: {
            0: {
                items: 4,
            }
		}
    });

    //About grey slider
    $('#skills').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            1200: {
                items: 1,
            }
        }
    });
    //About grey slider
    $('#videoslide').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            1200: {
                items: 1,
            }
        }
    });

    //odometer
    if ($(".odometer").length) {
    $(".odometer").appear(function (e) {
      var odo = $(".odometer");
      odo.each(function () {
        var countNumber = $(this).attr("data-count");
        $(this).html(countNumber);
      });
    });
  }

    //LightBox / Fancybox
    $('.lightbox-image').fancybox({
        openEffect  : 'fade',
        closeEffect : 'fade',
        helpers : {
            media : {}
        }
    });



})(window.jQuery);

$(document).ready(function(){

    //set the index counter
    var i = 0;

    //convert all .nav-tabs, except those with the class .keep-tabs
    $('.nav-tabs').not( ".keep-tabs" ).each(function(){

        //init variables
        var $select,
            c       = 0,
            $select = $('<select class="mobile-nav-tabs-' +i+ ' mobile-tab-headings "></select>');

        //add unique class to nav-tabs, so each select works independently
        $(this).addClass('nav-tabs-index-'+i);

        //loop though each <li>, building each into an <option>, getting the text from the a href
        $(this).children('li').each(function() {
            $select.append('<option value="'+c+'">' + $(this).text() + '</option>');
            c++;
        });

        //insert new <select> above <ul nav-tabs>
        $(this).before($select);

        //increase index counter
        i++
    });

    //on changing <select> element
    $('[class^=mobile-nav-tabs]').on('change', function (e) {

        //get index from selected option
        classArray      = $(this).attr('class').split(" ");
        tabIndexArray   = classArray[0].split("mobile-nav-tabs-")
        tabIndex        = tabIndexArray[1];

        //using boostrap tabs, show the selected option tab
        $('.nav-tabs-index-'+tabIndex+' li a').eq($(this).val()).tab('show');
    });

});
