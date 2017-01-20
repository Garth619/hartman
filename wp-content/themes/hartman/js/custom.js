	jQuery(document).ready(function(){
	
		




/*

jQuery(function () {
        // Define your callback
        var myCallback = function () {};

        // Get your HTMLCollection of SVG to animate
        var myElements = document.getElementsByClassName("svg-icons");

        // Go across them to create a Vivus instance
        // with each of them
        for (var i = myElements.length - 1; i >= 0; i--) {
          new Vivus(myElements[i], {duration: 180, type: 'onyByOne' }, myCallback);
        }
      });
*/


	


// Sticky Mobile Header on scroll 
		
		
		

var sticky = new Waypoint.Sticky({
  element: jQuery('.my_sticky')[0]
})



		
		
		
		jQuery('.awards_inner').slick({
			arrows:false,
			slidesToShow: 4,
			dots:true,
			slidesToScroll: 1,

			responsive: [
    {
      breakpoint: 1200,
      settings: {
        arrows:false,
				slidesToShow: 3,
				dots:true,
				slidesToScroll: 1,
      }
    },
    {
      breakpoint: 645,
      settings: {
        arrows:false,
				slidesToShow: 2,
				dots:true,
				slidesToScroll: 1,
      }
    },
    {
      breakpoint: 500,
      settings: {
        arrows:false,
				slidesToShow: 1,
				dots:true,
				slidesToScroll: 1
      }
    }
  ]

  });
  
  
  jQuery('.slide_wrapper.mobile').slick({
		arrows:false,
		slidesToShow: 1,
		dots:true,
		slidesToScroll: 1
  });
  
  
  
  jQuery('.headline_wrapper.mobile').slick({
		arrows:false,
		slidesToShow: 1,
		dots:true,
		slidesToScroll: 1,
  });
  
  
  jQuery('.reasons_grid.mobile').slick({
		arrows:false,
		slidesToShow: 1,
		dots:true,
		slidesToScroll: 1
  });
  
	
	jQuery('.practice_area_wrapper').slick({
			arrows:false,
			slidesToShow: 6,
			dots:false,
			slidesToScroll: 1,

			responsive: [
    {
      breakpoint: 1300,
      settings: {
        arrows:false,
				slidesToShow: 3,
				dots:false,
				slidesToScroll: 3,
      }
    },
    {
      breakpoint: 790,
      settings: {
        arrows:false,
				slidesToShow: 2,
				dots:false,
				slidesToScroll: 2,
      }
    },
    {
      breakpoint: 545,
      settings: {
        arrows:false,
				slidesToShow: 1,
				dots:false,
				slidesToScroll: 1
      }
    }
  ]

  });
  
  
  
  
// Unslick Custom Function 

$slick_slider = jQuery('.inner_case_wrapper');
  
  settings = {
    
    
    arrows:false,
			slidesToShow: 4,
			dots:false,
			slidesToScroll: 4,

			responsive: [
    {
      breakpoint: 1775,
      settings: "unslick"   
      },
    {
      breakpoint: 730,
      settings: {
        arrows:false,
				slidesToShow: 1,
				dots:false,
				slidesToScroll: 1
      }
    }
		]

  }
  
  
  
  $slick_slider.slick(settings);

  
  
  // reslick only if it's not slick()
  
  jQuery(window).on('resize', function() {
    
    if (jQuery(window).width() > 730) {
      
      if ($slick_slider.hasClass('slick-initialized')) {
        $slick_slider.slick('unslick');
      }
      
      return
    
    }

    if (!$slick_slider.hasClass('slick-initialized')) {
      return $slick_slider.slick(settings);
    }
  
  });



	// Sidebar Slide Toggle
	
	
	jQuery('.sidebar ul.sub-menu').hide();
	
	
	jQuery('.sidebar li.menu-item-has-children a').click(function() {
		
		jQuery(this).next('ul.sub-menu').slideToggle(200);
		jQuery(this).toggleClass('active');
		
	});
	
	

  
  // Inner Banner Play Button Hover
  
  
  jQuery('img.play_hover').hide();
  
  
  jQuery('.inner_banner .video_wrapper').mouseenter(function(){
	  
	  jQuery('img.play_reg').fadeOut(200);
	  jQuery('img.play_hover').fadeIn(200);
	  
  });
  
  
  jQuery('.inner_banner .video_wrapper').mouseleave(function(){
	  
	  jQuery('img.play_reg').fadeIn(200);
	  jQuery('img.play_hover').fadeOut(200);
	  
  });
  
  // Social Icon Hover in Footer
  
  
  jQuery('img.icon_hover').hide();
	
	
  jQuery('.social_icon').mouseenter(function(){
	  
	  jQuery(this).find('img.play_reg').fadeOut(200);
	  jQuery(this).find('img.icon_hover').fadeIn(200);
	  
  });
  
  jQuery('.social_icon').mouseleave(function(){
	  
	  jQuery(this).find('img.play_reg').fadeIn(200);
	  jQuery(this).find('img.icon_hover').fadeOut(200);
	  
  });
  
  
  // Open Mobile Overlay
  

  jQuery('.mobile_wrapper').click(function() {
	  
	  jQuery('nav.desktop').fadeIn();
	  
  });
  
  
  
  // Mobile Menu SlideToggle
  
  

jQuery( "<li class='search'><a>Search</a></li>" ).insertAfter( "nav.desktop ul.menu li:last-of-type" );
 
jQuery( "<div class='close_wrapper'><div class='x_first'></div><div class='x_second'></div></div>" ).insertBefore( "nav.desktop ul.menu" );

jQuery(".close_wrapper").click(function(){
	        
	  jQuery('nav.desktop').fadeOut();
     
 });
 
 
 // Search Overlay
 
 jQuery( "<div class='search_close_wrapper'><div class='x_first'></div><div class='x_second'></div></div>" ).insertBefore( ".inner_search_wrapper form" );
 
 jQuery('li.search').click(function(){
	 
	 jQuery('.search_wrapper').fadeIn();
	 jQuery('html, body').addClass('fixed')
	 
 });
 
 jQuery('.search_close_wrapper').click(function(){
	 
	 jQuery('.search_wrapper').fadeOut();
	 jQuery('html, body').removeClass('fixed')
	 
 });
 



// Disables nav cick function on smaller screens after page load only


function checkWidth() {
    
    if (jQuery(window).width() < 1200) {
        
       jQuery("nav.desktop li.menu-item-has-children a").click(function(){
	        
	        jQuery(this).next('ul.sub-menu').slideToggle(200);
     
    		});
    		
    	   		
    		
    } else {

    }
};


checkWidth();



// Consultation Scroll 



jQuery(function() {
  jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 600);
        return false;
      }
    }
  });
});




// Hover View More Clients svg arrows



jQuery('img.light_blue_icon').hide();


jQuery('.more_clients').mouseenter(function(){
	
	jQuery('img.dark_blue_icon').fadeOut(200);
	jQuery('img.light_blue_icon').fadeIn(200);
	
});


jQuery('.more_clients').mouseleave(function(){
	
	jQuery('img.light_blue_icon').fadeOut(200);
	jQuery('img.dark_blue_icon').fadeIn(200);
	
});



// Video Overlay Hovers


// Main Content Hover

jQuery('.video_thumb .video_thumb_overlay').hide();


jQuery('.video_wrapper .video_thumb').mouseenter(function() {
	
	jQuery(this).children('.video_thumb_overlay').fadeIn(100);
	
});

jQuery('.video_wrapper .video_thumb').mouseleave(function() {
	
	jQuery(this).children('.video_thumb_overlay').fadeOut(100);
	
});


// Additional Content Main Page Video


jQuery('.col_2 .video_wrapper .video_overlay').hide();


jQuery('.col_2 .video_wrapper').mouseenter(function() {
	
	jQuery(this).children('.video_overlay').fadeIn(100);
	
});

jQuery('.col_2 .video_wrapper').mouseleave(function() {
	
	jQuery(this).children('.video_overlay').fadeOut(100);
	
});


// Starts the Third Case Result to have a blue background as requested by the designer 


jQuery('.case_results .single_case_results:nth-of-type(3)').addClass('case_results_active');

jQuery('.case_results .inner_case_wrapper').mouseenter(function() {
	
	jQuery('.case_results .single_case_results:nth-of-type(3)').removeClass('case_results_active');
	
	
});


/*
jQuery('.case_results .inner_case_wrapper').mouseleave(function() {
	
	jQuery('.case_results .single_case_results:nth-of-type(3)').addClass('case_results_active');
	
	
});
*/






// Triggers CSS Keyframes for the locatons in the footer

var bluelines = new Waypoint({
  element: document.getElementById('location_trigger'),
  handler: function(direction) {
    
	}
})



// wow.js

new WOW().init();

// Matchheight for Dallas Gives Back and and Video Wrapper

jQuery('.mymatch').matchHeight();

// Video Page Overlay Hover

jQuery('.video_page_overlay').hide();

jQuery('a.video_link').mouseenter(function(){
	
	jQuery(this).find('.video_page_overlay').fadeIn(200);
	
});

jQuery('a.video_link').mouseleave(function(){
	
	jQuery(this).find('.video_page_overlay').fadeOut(200);
	
});
	
	
}); // document ready