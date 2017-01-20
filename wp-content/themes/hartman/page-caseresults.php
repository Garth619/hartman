<?php 
	
/**
 * Template Name: Case Results
 *
 
 */
	
	get_header(); ?>

	<?php include('banner.php');?>
	

		<div class="inner_main_no_sidebar">
			
			<div class="inner_container">
				
				
				<div class="content">
					
					
					<table class="blue_header_wrapper">
					
					<tr>
						<td class="header_blue_line"></td><!-- blue_line -->
						<td><h1><?php the_title();?></h1></td>
					</tr>
					
					</table><!-- header_wrapper -->
					
					<div class="inner_content">
					
					
							<div class="case_results_page_wrapper">
							
								<?php if(get_field('case_results')): ?>
								 
									<?php while(has_sub_field('case_results')): ?>
									
										
										<div class="single_case_results_page">
											
											<a href="">
										
												<span class="large_header"><?php the_sub_field('case_results_number');?></span><!-- large_header -->
												<span class="sub_header"><?php the_sub_field('case_results_title');?></span><!-- sub_header -->
											
											</a>
										
									</div><!-- single_case_results -->
								 
										
								    
									<?php endwhile; ?>
								 
								<?php endif; ?>
									
							
							</div><!-- case_results_page_wrapper -->
					
					
					</div><!-- inner_content -->
				
				</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->

			<?php  // get_template_part( 'loop', 'page' );?>

			

<?php get_footer(); ?>
