<?php 
	
/**
 * Template Name: Testimonials
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
					

						<span class="my_excerpt"><?php the_field('testimmonials_excerpt');?></span>
					
										
						<div class="testimonials_wrapper">
							
							<div class="testimonials_column">
								
								
								
								<?php if(get_field('testimonials_column_1')): ?>
								 
									<?php while(has_sub_field('testimonials_column_1')): ?>
								 
								<div class="single_testimonial">
									
									<div class="stars">
										
										<img class="star" src="<?php bloginfo('template_directory');?>/images/star.png"/>
										<img class="star" src="<?php bloginfo('template_directory');?>/images/star.png"/>
										<img class="star" src="<?php bloginfo('template_directory');?>/images/star.png"/>
										<img class="star" src="<?php bloginfo('template_directory');?>/images/star.png"/>
										<img class="star" src="<?php bloginfo('template_directory');?>/images/star.png"/>
									
									</div><!-- stars -->
									
									<span class="large_header"><?php the_sub_field('testimonail_title');?></span><!-- large_header -->
									
									<p><?php the_sub_field('testimonial_content');?></p>
									
									<span class="testimonial_name"><?php the_sub_field('first_name');?></span><!-- testimonial_name -->
									
								</div><!-- single_testimonial -->
										
										
										
										<?php the_sub_field('');?>
								    
									<?php endwhile; ?>
								 
								<?php endif; ?>
								

							</div><!-- testimonials_column -->
							
							<div class="testimonials_column">
								
								
								<?php if(get_field('testimonials_column_2')): ?>
								 
									<?php while(has_sub_field('testimonials_column_2')): ?>
								 
								<div class="single_testimonial">
									
									<div class="stars">
										
										<img class="star" src="<?php bloginfo('template_directory');?>/images/star.png"/>
										<img class="star" src="<?php bloginfo('template_directory');?>/images/star.png"/>
										<img class="star" src="<?php bloginfo('template_directory');?>/images/star.png"/>
										<img class="star" src="<?php bloginfo('template_directory');?>/images/star.png"/>
										<img class="star" src="<?php bloginfo('template_directory');?>/images/star.png"/>
									
									</div><!-- stars -->
									
									<span class="large_header"><?php the_sub_field('testimonail_title');?></span><!-- large_header -->
									
									<p><?php the_sub_field('testimonial_content');?></p>
									
									<span class="testimonial_name"><?php the_sub_field('first_name');?></span><!-- testimonial_name -->
									
								</div><!-- single_testimonial -->
										
										
										
										<?php the_sub_field('');?>
								    
									<?php endwhile; ?>
								 
								<?php endif; ?>
								
								
							</div><!-- testimonials_column -->
							
						</div><!-- testimonials_wrapper -->
					
					
					
					</div><!-- inner_content -->
					
					
				
				
				</div><!-- content -->
			
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->

			<?php  // get_template_part( 'loop', 'page' );?>

			

<?php get_footer(); ?>
