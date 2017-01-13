	jQuery(document).ready(function(){
	
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

  
	
	
  
  
	
	
	
	}); // document ready