(function($){
	$(document).ready( function() {
		$('.slider').slick({ 
			dots: false, 
			arrows: false,
			responsive: [
				{ 
					breakpoint: 768, 
					settings: { 
						arrows: false, 
						centerMode: true, 
						centerPadding: '0', 
						slidesToShow: 1 
					} 
				}, 
				{ 
					breakpoint: 480, 
					settings: { 
						arrows: false, 
						centerMode: true, 
						centerPadding: '0', 
						slidesToShow: 1 
					} 
				}
			] 
		});
	});
})(jQuery);