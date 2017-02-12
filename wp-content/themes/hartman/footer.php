<section id="request_scroll" class="request">
	
	<div class="form">
		
		<span class="gfrom_title">schedule a free consultation</span><!-- gfrom_title -->
		<span class="gform_subheader">all fields required *</span><!-- gform_subheader -->
		<?php gravity_form(1, false, false, false, '', true, 12); ?>

		
	</div><!-- form -->
	
</section><!-- request -->

<section id="location_trigger" class="locations">
	
	<div class="locations_wrapper">
		
		<div class="slide_wrapper mobile">
		
			
			
			
			<?php if(get_field('contacts', 21)): ?>
			
					
							 
				<?php while(has_sub_field('contacts', 21)): ?>
			
			
				<div class="single_location">
				
				
				<div class="header_wrapper">
				
					<span class="large_header"><?php the_sub_field('location_title');?></span><!-- large_header -->
					<span class="blueline"></span><!-- blueline -->
					
				</div><!-- header_wrapper -->
				
				<a class="address" href="<?php the_sub_field('address_link');?>" target="_blank"><?php the_sub_field('address');?></a><!-- address -->
				<a class="tel" href="tel:<?php the_sub_field('phone');?> "><?php the_sub_field('phone');?></a>
				
				<a class="get_directions" href="<?php the_sub_field('address_link');?>" target="_blank">Get Directions</a><!-- get_directions -->
				
			</div><!-- single_location -->
				
				
				<?php endwhile; ?>
							 
			<?php endif; ?>

							
							
			</div><!-- slide_wrapper -->
			

			
			<div class="slide_wrapper desktop">
		

				<?php if(get_field('contacts', 21)): ?>
					
					<?php $count=1;?>
							 
				<?php while(has_sub_field('contacts', 21)): ?>
			
			
					<div class="single_location">
				
				
						<div class="header_wrapper">
				
							<span class="large_header"><?php the_sub_field('location_title');?></span><!-- large_header -->
							<span class="wow slideInLeft blueline blueline_<?php echo $count; ?>"></span><!-- blueline -->
					
						</div><!-- header_wrapper -->
				
						<a class="address" href="<?php the_sub_field('address_link');?>" target="_blank"><?php the_sub_field('address');?></a><!-- address -->
						<a class="tel" href="tel:<?php the_sub_field('phone');?>"><?php the_sub_field('phone');?></a>
				
						<a class="get_directions" href="<?php the_sub_field('address_link');?>" target="_blank">Get Directions</a><!-- get_directions -->
				
					</div><!-- single_location -->
				
					<?php $count++; ?>
				
				<?php endwhile; ?>
							 
			<?php endif; ?>


			</div><!-- slide_wrapper -->
		
	</div><!-- locations_wrapper -->
	
	
	<div class="view_all_locations">
		
		<a href="<?php the_field('mobile_locations_link','options');?>"><?php the_field('mobile_locations_button_title','options');?></a>
		
	</div><!-- view_all_locations -->
	
	
</section><!-- locations -->



<footer>
	
	<div class="inner_footer">
		
		<div class="footer_col footer_col1">
			
			<a href="//ilawyermarketing.com" target="_blank"><img class="ilawyer" src="<?php bloginfo('template_directory');?>/images/footer_logo_ilawyer.svg" alt="iLawyer Marketing"/></a>
			<span><?php the_field('copyright','options');?> &nbsp;|&nbsp; <a href="<?php the_field('disclaimer_link','options');?>"><?php the_field('disclaimer_title','options');?></a></span>
		
		</div><!-- footer_col -->
		
		<div class="footer_col footer_col2">
			
			<a href="<?php bloginfo('url');?>">
				
				<?php $imageID = get_field('footer_logo','option'); ?>
				<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
				<?php $menu_one = wp_get_attachment_image_src(get_field('footer_logo','option'), 'footersize'); ?>

				<img src="<?php echo $menu_one[0]; ?>" alt="<?php echo $alt_text; ?>"/>
				
			</a>
		
		</div><!-- footer_col -->
		
		<div class="footer_col footer_col3">
			
			<div class="social_icon_wrapper">
				
				<div class="social_icon">
				
					<a href="<?php the_field('facebook_link','options');?>" target="_blank">
						<img class="icon" src="<?php bloginfo('template_directory');?>/images/social_fb.svg" alt="Dallas W. Hartman Facebook"/>
						<img class="icon_hover" src="<?php bloginfo('template_directory');?>/images/social_fb_hover.svg" alt="Dallas W. Hartman Facebook Hover"/>
					</a>
				
				</div><!-- social_icon -->
				
				<div class="social_icon">
				
					<a href="<?php the_field('twitter_link','options');?>" target="_blank">
						<img class="icon" src="<?php bloginfo('template_directory');?>/images/social_twitter.svg" alt="Dallas W. Hartman Twitter"/>
						<img class="icon_hover" src="<?php bloginfo('template_directory');?>/images/social_twitter_hover.svg" alt="Dallas W. Hartman Twitter Hover"/>
					</a>
				
				</div><!-- social_icon -->
				
				<div class="social_icon">
				
					<a href="<?php the_field('linkedin_link','options');?>" target="_blank">
						<img class="icon" src="<?php bloginfo('template_directory');?>/images/social_linkedin.svg" alt="Dallas W. Hartman LinkedIn"/>
						<img class="icon_hover" src="<?php bloginfo('template_directory');?>/images/social_linkedin_hover.svg" alt="Dallas W. Hartman LinkedIn Hover"/>
					</a>
				
				</div><!-- social_icon -->
				
				<div class="social_icon">
				
					<a href="<?php the_field('google_plus_link','options');?>" target="_blank">
						<img class="icon" src="<?php bloginfo('template_directory');?>/images/social_google.svg" alt="Dallas W. Hartman Google Plus"/>
						<img class="icon_hover" src="<?php bloginfo('template_directory');?>/images/social_google_hover.svg" alt="Dallas W. Hartman Google Plus Hover"/>
					</a>
				
				</div><!-- social_icon -->
				
			</div><!-- social_icon_wrapper -->
		
		</div><!-- footer_col -->
	
	</div><!-- inner_footer -->

</footer>

<?php wp_footer(); ?>
	
<?php include('js/conditional-jquery.php');?>

<script type="text/javascript">

jQuery(document).ready(function(){

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
  
  
  // Mouse Enter Six Reasons
  
  
	jQuery('.svg_hover_wrapper').hide();
  
  
  
  jQuery('.single_reason').mouseenter(function(){
	  
	  	jQuery(this).find('img.mobile_reasons_checkmark').hide();
	  	
			jQuery(this).find('svg.mycheckmark').fadeOut(200);
			jQuery(this).find('.svg_hover_wrapper').fadeIn(200);
		
		
			
			jQuery(this).find('.svg_hover_wrapper').addClass('svg_delay');
			
	
	
	});
	


	
	jQuery('.single_reason').mouseleave(function(){
	  
	 
	  jQuery(this).find('img.mobile_reasons_checkmark').fadeIn(500);
	  
	  
	  jQuery(this).find('svg.mycheckmark').fadeIn(200);
		jQuery(this).find('.svg_hover_wrapper').fadeOut(200);
		
		jQuery('.svg_hover_wrapper').removeClass('svg_delay');
		
	});



	// Sidebar Slide Toggle
	
	
// 	jQuery('.sidebar ul.sub-menu').hide();
	
	
	jQuery('.sidebar li.menu-item-has-children a').click(function() {
		
		jQuery(this).next('ul.sub-menu').slideToggle(200);
		jQuery(this).toggleClass('active');
		
	});
	
	
	jQuery('div.sidebar ul.menu > li').mouseenter(function(){
		
		jQuery(this).next().find('a').addClass('remove_border');
		
		
	});
	
	jQuery('div.sidebar ul.menu > li').mouseleave(function(){
		
		jQuery(this).next().find('a').removeClass('remove_border');
		
		
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
	  
	  jQuery('nav.desktop').slideDown();
	  
  });
  
  
  
  // Mobile Menu SlideToggle
  
  

jQuery( "<li class='search'><a>Search</a></li>" ).insertAfter( "nav.desktop ul.menu li:last-of-type" );
 
jQuery( "<div class='close_wrapper'><div class='x_first'></div><div class='x_second'></div></div>" ).insertBefore( "nav.desktop ul.menu" );

jQuery(".close_wrapper").click(function(){
	        
	  jQuery('nav.desktop').slideUp();
     
 });
 
 
 // Search Overlay
 
 jQuery( "<div class='search_close_wrapper'><div class='x_first'></div><div class='x_second'></div></div>" ).insertBefore( ".inner_search_wrapper form" );
 
 jQuery('li.search').click(function(){
	 
	 jQuery('.search_wrapper').slideDown();
	 jQuery('html, body').addClass('fixed')
	 
 });
 
 jQuery('.search_close_wrapper').click(function(){
	 
	 jQuery('.search_wrapper').slideUp();
	 jQuery('html, body').removeClass('fixed')
	 
 });
 

 
// Disables nav cick function on smaller screens after page load only



jQuery('.inner_search_wrapper input[type="text"]').click(function(){
	
// 	jQuery('body').css("overflow-x","hidden");
	
});






function checkWidth() {
    
    if (jQuery(window).width() < 1200) {
        
       jQuery("nav.desktop li.menu-item-has-children a").click(function(){
	        
// 	        jQuery(this).next('ul.sub-menu').slideToggle(500);

				jQuery(this).next('ul.sub-menu').toggleClass('slide');
     
    		});
    		
    	   		
    		
    } else {
	    
	    
/*
       jQuery("nav.desktop li.menu-item-has-children a").click(function(){
	        
					
					
					
					
		jQuery('ul.sub-menu').removeClass('active');
		jQuery(this).next('ul.sub-menu').addClass('active');
		

	        
	     });
*/
    		

	    	 
 	      
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
	
	jQuery(this).children('.video_thumb_overlay').fadeIn(300);
	
});

jQuery('.video_wrapper .video_thumb').mouseleave(function() {
	
	jQuery(this).children('.video_thumb_overlay').fadeOut(300);
	
});


// Additional Content Main Page Video


jQuery('.col_2 .video_wrapper .video_overlay').hide();


jQuery('.col_2 .video_wrapper').mouseenter(function() {
	
	jQuery(this).find('.video_overlay').fadeIn(300);
	
});

jQuery('.col_2 .video_wrapper').mouseleave(function() {
	
	jQuery(this).find('.video_overlay').fadeOut(300);
	
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

jQuery('.video_link').mouseenter(function(){
	
	jQuery(this).find('.video_page_overlay').fadeIn(200);
	
});

jQuery('.video_link').mouseleave(function(){
	
	jQuery(this).find('.video_page_overlay').fadeOut(200);
	
});







});

</script>

</body>
</html>
