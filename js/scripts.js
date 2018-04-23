(function($){
  "use strict";

  $(".navbar-toggle").click(function() {
	  	$(this).toggleClass('in');
	});

    $('.banner').slick({
    	arrows: true,
    	dots: true,
    	responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false
	      }
	    }
	  ]
	  });


	/*** Sticky header */
	$(window).scroll(function() {
		if ($(window).scrollTop() > 30) {
			$(".header").addClass("sticky");
		} 
		else {
			$(".header").removeClass("sticky");
		}
	});

	/*** Header height = gutter height */
	 function setGutterHeight(){
	  	var header = document.querySelector('.header'),
  		gutter = document.querySelector('.header_gutter');
 	 	gutter.style.height = header.offsetHeight + 'px';
	}

	window.onload = setGutterHeight;
	window.onresize = setGutterHeight;

	$('.signal-slider').slick({
		infinite: true,
		arrows:false,
		dots: true,
	});
 
})(jQuery);