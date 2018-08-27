(function( root, $, undefined ) {
	"use strict";

	$(function () {
    	$('.slider').slick({
    		dots: true,
    		slidesToShow: 1,
			slidesToScroll: 1,
    		autoplay: true,
    		autoplaySpeed: 3000,
    		infinite: true
    	});

        AOS.init({
          duration: 1200,
          delay: 0,
          once: false,
          mirror: true,
          easing: 'ease-out-quad',
          offset: 120
        });

        // $('body').click(function(){
        //     if ($('.nav').hasClass('active')) {
        //         $('.nav').removeClass('active');
        //     }
        // })

        $('.menu-toggle').click(function(){
            $('.nav').toggleClass('active');
        });


	});

} ( this, jQuery ));