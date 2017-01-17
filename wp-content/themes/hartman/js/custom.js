	jQuery(document).ready(function(){
	
		
		
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
  
  
  
  
  

/*
  jQuery('.inner_case_wrapper').slick({
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

  });
  





  jQuery(window).on('resize', function() {
    if (jQuery(window).width() > 730) {
      if (jQuery('.inner_case_wrapper').hasClass('slick-initialized')) {
        jQuery('.inner_case_wrapper').slick('unslick');
      }
      return
    }

    if (!jQuery('.inner_case_wrapper').hasClass('slick-initialized')) {
      return jQuery('.inner_case_wrapper').slick({
	      
	      
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
	      
	      
	      
	      
      });
    }
  });
*/



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
	
	
	
/*
	jQuery('.sidebar ul.sub-menu li').mouseenter(function(){
		
		jQuery(this).next('li').children('a').addClass('subactive')

	});
	
	

	jQuery('.sidebar ul.sub-menu li').mouseout(function(){
		
		jQuery(this).next('li').children('a').removeClass('subactive');

	});
*/

  
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
  
  
  
  // Mobile Menu SlideToggle
  
  
/*
jQuery(function(){
    
    jQuery(window).bind("resize",function(){
        console.log(jQuery(this).width())
            if (jQuery(this).width() > 730){
             jQuery('nav').removeClass('garrett')
            }
            else {
                jQuery('nav').addClass('garrett')
         }
    })
})
*/
	
	
	
	

/*
	jQuery('nav.desktop li.menu-item-has-children a').click(function() {
		
		winWidth = jQuery(window).width();
 
    if ( winWidth < 730 ) return;
   
   
   
		jQuery(this).next('ul.sub-menu').slideToggle(200);
		
		
	});
*/









/*
 var isLargeWindow;
    
    jQuery(window).on('resize', function() {
        isLargeWindow = jQuery(this).width() > 730;
    });

    jQuery('nav.desktop li.menu-item-has-children a').on('click', function(e) {
        if (isLargeWindow)
          {
	           
          }
        else
          {
	           jQuery(this).next('ul.sub-menu').slideToggle(200);
           }
    });
*/



// Maybe use modernizr 


function checkWidth() {
    if (jQuery(window).width() < 730) {
        jQuery("nav.desktop li.menu-item-has-children a").click(function(){
	        
	        jQuery(this).next('ul.sub-menu').slideToggle(200);
            
        });
    } else {

    }
};


checkWidth();


  
	
	
	
	}); // document ready