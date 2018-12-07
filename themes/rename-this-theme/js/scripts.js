(function($){
	$(document).ready( function() {
		$('.slider').slick({ 
			dots: false, 
			arrows: false,
			prevArrow: '<button type="button" class="slick-prev nobutton"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path style="fill: rgba(255,255,255,.8);" d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/></svg></button>',
			nextArrow: '<button type="button" class="slick-next nobutton"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path style="fill: rgba(255,255,255,.8);" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/></svg></button>',
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
		// Select all links with hashes
		$('a[href*="#"]')
		  // Remove links that don't actually link to anything
		  .not('[href="#"]')
		  .not('[href="#0"]')
		  .click(function(event) {
		    // On-page links
		    if (
		      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		      && 
		      location.hostname == this.hostname
		    ) {
		      // Figure out element to scroll to
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		      // Does a scroll target exist?
		      if (target.length) {
		        // Only prevent default if animation is actually gonna happen
		        event.preventDefault();
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 1000, function() {
		          // Callback after animation
		          // Must change focus!
		          var $target = $(target);
		          $target.focus();
		          if ($target.is(":focus")) { // Checking if the target was focused
		            return false;
		          } else {
		            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		            $target.focus(); // Set focus again
		          };
		        });
		      }
		    }
	  	});
	});
})(jQuery);