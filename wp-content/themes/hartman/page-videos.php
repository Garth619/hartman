<?php 
	
/**
 * Template Name: Videos
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
					

					
					<div class="video_page_wrapper">
						
					
						<?php if(get_field('video_center')): ?>
						 
							<?php while(has_sub_field('video_center')): ?>
						 
								<div class="video_link">
							
									<div class="single_video">
								
										<?php the_sub_field('video_code');?>
								
										<span class="video_title">	<?php the_sub_field('video_title');?></span><!-- video_title -->
								
										<div class="video_page_overlay">
								
											<span class="video_page_title">View Video</span>
							
										</div><!-- video_page_overlay -->							
							
									</div><!-- single_video -->
							
								</div><!-- video_link -->

						    <?php endwhile; ?>
						 
						<?php endif; ?>
					
															
					</div><!-- video_wrapper -->
				
								
				</div><!-- inner_content -->
				
					</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->

			<?php  // get_template_part( 'loop', 'page' );?>

			

<?php get_footer(); ?>
