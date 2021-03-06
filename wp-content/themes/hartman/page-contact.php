<?php 
	
/**
 * Template Name: Contact
 *
 
 */
	
	get_header(); ?>

	<?php include('banner.php');?>
	

		<div class="inner_main_no_sidebar">
			
			<div class="greyline"></div>
			
			<div class="inner_container">
				
				
				<div class="content">
					
					
					<table class="blue_header_wrapper">
					
					<tr>
						<td class="header_blue_line"></td><!-- blue_line -->
						<td><h1><?php the_title();?></h1></td>
					</tr>
					
					</table><!-- header_wrapper -->
					
					<div class="inner_content">
					
						<div class="contact_wrapper">
							
							<div id="request_scroll" class="request">
	
								<div class="form">
									
									<span class="gfrom_title">schedule a free consultation</span><!-- gfrom_title -->
									<span class="gform_subheader">all fields required *</span><!-- gform_subheader -->
									<?php gravity_form(1, false, false, false, '', true, 12); ?>

									
								</div><!-- form -->
								
							</div><!-- request -->
							
							<?php if(get_field('contacts')): ?>
							 
								<?php while(has_sub_field('contacts')): ?>
							 
									
								<div class="single_contact">
								
										<div class="contact_info">
									
										<span class="large_header"><?php the_sub_field('location_title');?></span><!-- large_header -->
										<a class="address" href="<?php the_sub_field('address_link');?>" target="_blank"><?php the_sub_field('address');?></a><!-- address -->
									
										<a class="tel" href="tel:<?php the_sub_field('phone');?>"><?php the_sub_field('phone');?></a>
									
										<a class="get_directions" href="<?php the_sub_field('address_link');?>" target="_blank">Get Directions</a><!-- get_directions -->
									
									</div><!-- contact_info -->
								
									<div class="map">
									
										<?php the_sub_field('iframe_map');?>
									
									</div><!-- map -->
								
							</div><!-- single_contact -->
									
						<?php endwhile; ?>
							 
					<?php endif; ?>
							

							
						</div><!-- contact_wrapper -->
							
					</div><!-- inner_content -->
				
				</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->

		

			

<?php get_footer(); ?>
