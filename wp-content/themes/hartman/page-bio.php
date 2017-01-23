<?php 
	
/**
 * Template Name: Attorney Bio
 *
 
 */
	
	get_header(); ?>

	<?php include('banner.php');?>
	

		<div class="inner_main_no_sidebar">
			
			<div class="greyline"></div>
			
			<div class="inner_container">
				
				
				<div class="content">
					
					
					<div class="sidebar_bio">
					
					
					
						<table class="blue_header_wrapper">
					
							<tr>
								
								<td class="header_blue_line"></td><!-- blue_line -->
								
								<td class="bio_cell">
									
									
									<?php if(get_field('attorney_image')):?>
								
										<img src="<?php the_field('attorney_image');?>" alt="<?php the_title();?>"/>
								
										<?php else:?>
								
										<img src="<?php bloginfo('url');?>/wp-content/uploads/2017/01/placeholder.jpg"/>
								
										<?php endif;?>
									
	
									
									<div class="email_wrapper">
									
										<a class="email_attorney" href="mailto:<?php the_field('attorney_email');?>"><?php the_field('email_button_verbaige');?></a><!-- email_attorney -->
									
									</div><!-- email_wrapper -->
								
								</td>
						
							</tr>
							
							<tr>
								<td class="spacer"></td><!-- spacer -->
								<td class="bio_content_cell">
									
									<div class="sidebar_bio_content">
										
										
										
										<?php if(get_field('attorney_title')):?>
										
										<span class="bio_row">Title &nbsp;<span class="lightblue">|</span>&nbsp; <span class="description"><?php the_field('attorney_title');?></span></span><!-- bio_row -->
										
										<?php endif;?>
										
										
										<?php if(get_field('attorney_location')):?>
										
										<span class="bio_row">Location &nbsp;<span class="lightblue">|</span>&nbsp; <span class="description"><?php the_field('attorney_location');?></span></span><!-- bio_row -->
										
										<?php endif;?>
										
										
										<?php if(get_field('attorney_phone_number')):?>
										
										<span class="bio_row">Phone &nbsp;<span class="lightblue">|</span>&nbsp; <a class="description" href="tel:<?php the_field('attorney_phone_number');?>"><?php the_field('attorney_phone_number');?></a></span><!-- bio_row -->
										
										<?php endif;?>
										
										<?php if(get_field('attorney_phone_number')):?>
										
											<span class="bio_row">Fax &nbsp;<span class="lightblue">|</span>&nbsp; <span class="description"><?php the_field('attorney_fax_number');?></span></span><!-- bio_row -->
										
										<?php endif;?>
							
									</div><!-- sidebar_bio -->
									
								</td>
							</tr>
					
						</table><!-- blue_header_wrapper -->
						
						
					
					
					
					</div><!-- sidebar_bio -->
					
					<div class="inner_content">
						
					<h1><?php the_title();?></h1>
					
					<span class="my_excerpt"><?php the_field('attorney_bio_excerpt');?></span>
					
					
					<?php get_template_part( 'loop', 'page' );?>					
					
			
				
				
				
				</div><!-- inner_content -->
				
					</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->

	
	<?php get_footer(); ?>
