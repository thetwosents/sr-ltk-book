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
	});

} ( this, jQuery ));