<?php 
	
/**
 * Template Name: Contact
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
					
						<div class="contact_wrapper">
							
							<div class="single_contact">
								
								<div class="contact_info">
									
									<span class="large_header">New Castle</span><!-- large_header -->
									<a class="address" href="">201 Green Ridge Dr<br/>New Castle, PA 16105</a><!-- address -->
									
									<a class="tel" href="tel:724-652-4081">724-652-4081</a>
									
									<a class="get_directions" href="">Get Directions</a><!-- get_directions -->
									
								</div><!-- contact_info -->
								
							</div><!-- single_contact -->
							
						</div><!-- contact_wrapper -->
							
					</div><!-- inner_content -->
				
				</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->

			<?php  // get_template_part( 'loop', 'page' );?>

			

<?php get_footer(); ?>
