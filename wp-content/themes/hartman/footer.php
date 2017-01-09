<footer>
	
	<div class="inner_footer">
		
		<div class="footer_col footer_col1">
			
			<a href=""><img class="ilawyer" src="<?php bloginfo('template_directory');?>/images/footer_logo_ilawyer.svg"/></a>
			<span>Law Offices of Dallas W. Hartman &copy; 2016. All rights reserved. &nbsp;|&nbsp; <a href="">Disclaimer</a></span>
		
		</div><!-- footer_col -->
		
		<div class="footer_col footer_col2">
			
			<a href=""><img src="<?php bloginfo('template_directory');?>/images/footer_logo_hartman.png"/></a>
		
		</div><!-- footer_col -->
		
		<div class="footer_col footer_col3">
			
			<div class="social_icon_wrapper">
				
				<a href="" target="_blank">
					<img class="icon" src="<?php bloginfo('template_directory');?>/images/social_fb.svg"/>
				</a>
				
				<a href="" target="_blank">
					<img class="icon" src="<?php bloginfo('template_directory');?>/images/social_twitter.svg"/>
				</a>
				
				<a href="" target="_blank">
					<img class="icon" src="<?php bloginfo('template_directory');?>/images/social_linkedin.svg"/>
				</a>
				
				<a href="" target="_blank">
					<img class="icon" src="<?php bloginfo('template_directory');?>/images/social_google.svg"/>
				</a>
				
			</div><!-- social_icon_wrapper -->
		
		</div><!-- footer_col -->
	
	</div><!-- inner_footer -->

</footer>


	<?php wp_footer(); ?>
	
	

<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick/slick.min.js"></script>
	
	<script type="text/javascript">
	
	jQuery(document).ready(function(){
	
		jQuery('.awards_inner').slick({
			arrows:false,
			slidesToShow: 4,
			dots:true,
			slidesToScroll: 1,
/*
			responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
*/
  });
	
	
	
	}); // document ready
	
	</script>

</body>
</html>
