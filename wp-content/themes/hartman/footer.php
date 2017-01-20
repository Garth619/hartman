<section id="request_scroll" class="request">
	
	<div class="form">
		
		<span class="gfrom_title">schedule a free consultation</span><!-- gfrom_title -->
		<span class="gform_subheader">all fields required *</span><!-- gform_subheader -->
		<?php gravity_form(1, false, false, false, '', true, 12); ?>

		
	</div><!-- form -->
	
</section><!-- request -->

<section class="locations">
	
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
							 
				<?php while(has_sub_field('contacts', 21)): ?>
			
			
					<div class="single_location">
				
				
						<div class="header_wrapper">
				
							<span class="large_header"><?php the_sub_field('location_title');?></span><!-- large_header -->
							<span class="blueline"></span><!-- blueline -->
					
						</div><!-- header_wrapper -->
				
						<a class="address" href="<?php the_sub_field('address_link');?>" target="_blank"><?php the_sub_field('address');?></a><!-- address -->
						<a class="tel" href="tel:<?php the_sub_field('phone');?>"><?php the_sub_field('phone');?></a>
				
						<a class="get_directions" href="<?php the_sub_field('address_link');?>" target="_blank">Get Directions</a><!-- get_directions -->
				
					</div><!-- single_location -->
				
				
				<?php endwhile; ?>
							 
			<?php endif; ?>


			</div><!-- slide_wrapper -->
		
	</div><!-- locations_wrapper -->
	
	
	<div class="view_all_locations">
		
		<a href="<?php the_field('mobile_locations_link');?>"><?php the_field('mobile_locations_button_title');?></a>
		
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
	
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/custom-min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/waypoints/lib/shortcuts/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/vivus/dist/vivus.min.js"></script>


</body>
</html>
