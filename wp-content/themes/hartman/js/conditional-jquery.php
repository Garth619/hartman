<?php if(is_front_page()):?>

<script src="<?php bloginfo('template_directory');?>/js/vivus/dist/vivus.min.js"></script>

<script type="text/javascript">

jQuery(document).ready(function(){

	
	
// Greyline Animation in About Section


var waypointabout = new Waypoint({
  element: document.getElementById('about_line_animation'),
  handler: function(direction) {
    
	
	jQuery(".about_content .greyline").animate({height: '100%'}, 1200);
// 	jQuery(".header_blue_line").delay(200).animate({left: '-2px'}, 500);
	jQuery(".about_content .header_blueline_main").delay(800).queue(function(){
		
		
		jQuery(this).css({"opacity":"1","visibility":"visible","left":"-2px"});
		
		
	});

	
	
		}
})




// Greyline Animation in Additional About Section


var waypointabout = new Waypoint({
  element: document.getElementById('addtional_greyline'),
  handler: function(direction) {
    
	
	jQuery(".col_1 .greyline").animate({height: '100%'}, 1200);
	jQuery(".greyline_mobile").animate({height: '100%'}, 1200);


	jQuery(".col_2 .blueline").delay(1000).queue(function(){
		
		
		jQuery(this).addClass("move");
		
		
	});


	
	
		}
})	


	

	

new Vivus('text',
   {
     type: 'oneByOne',
     duration: 180,
     forceRender: false,
     dashGap: 2
   }
 );
 
 
new Vivus('text2',
   {
     type: 'oneByOne',
     duration: 180,
     forceRender: false,
     dashGap: 2
   }
 );



new Vivus('text3',
   {
     type: 'oneByOne',
     duration: 180,
		 forceRender: false,
     dashGap: 2
   }
 );
 
 




 new Vivus('svg_1',
   {
     type: 'oneByOne',
     duration: 40,
     file: '<?php bloginfo('template_directory');?>/images/sp_checkmark.svg'
		
    
   }
 );
 
 
 new Vivus('svg_2',
   {
     type: 'oneByOne',
     duration: 40,
     file: '<?php bloginfo('template_directory');?>/images/sp_checkmark.svg'
		
    
   }
 );
 
 
 new Vivus('svg_3',
   {
     type: 'oneByOne',
     duration: 40,
     file: '<?php bloginfo('template_directory');?>/images/sp_checkmark.svg'
		
    
   }
 );
 
 
 new Vivus('svg_4',
   {
     type: 'oneByOne',
     duration: 40,
     file: '<?php bloginfo('template_directory');?>/images/sp_checkmark.svg'
		
    
   }
 );
 
 
 
 new Vivus('svg_5',
   {
     type: 'oneByOne',
     duration: 40,
     file: '<?php bloginfo('template_directory');?>/images/sp_checkmark.svg'
		
    
   }
 );
 
 
 
 
 new Vivus('svg_6',
   {
     type: 'oneByOne',
     duration: 40,
     file: '<?php bloginfo('template_directory');?>/images/sp_checkmark.svg'
		
    
   }
 );
 



// Six reasons red line Animation


var waypoint = new Waypoint({
  element: document.getElementById('reasons_trigger'),
  handler: function(direction) {
    
	jQuery(".red_line").animate({
        
        width: '155px'
			
			});
		}
})



// Dallas Gives Back Redline Animation 




var waypoint = new Waypoint({
  element: document.getElementById('community_trigger'),
  handler: function(direction) {
    
	jQuery(".community .give_back .give_back_inner span.redline").animate({
        
        width: '100px'
			
			});
		}
})


 

}); // Doucment Ready

</script>

<?php endif;?>

<?php if(is_page_template( 'page-about.php') || is_page_template('page-directory.php') || is_page_template('page-contact.php') || is_page_template('page-videos.php') || is_page_template('page-testimonials.php') || is_page_template('page-attorneysdirectory.php') || is_page_template('page-bio.php') || is_page_template('page-caseresults.php')): ?>

<script type="text/javascript">

jQuery(document).ready(function(){

	
	// greyline that grows on content areas
	
	
	var waypointthree = new Waypoint({
  element: document.getElementById('greylinestart'),
  handler: function(direction) {
    
	jQuery(".greyline").animate({height: '100%'}, 1200);
// 	jQuery(".header_blue_line").delay(200).animate({left: '-2px'}, 500);
	jQuery(".header_blue_line").delay(800).queue(function(){
		
		
		jQuery(this).css({"opacity":"1","visibility":"visible","left":"-2px"});
		
		
	});
	
	
		
		
		}
})	
	


}); // document ready

</script>


<?php endif;?>
