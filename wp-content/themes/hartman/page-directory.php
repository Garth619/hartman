<?php 
	
/**
 * Template Name: Practice Areas Directory
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
					

						<div class="pracrice_areas_wrapper">
						
							<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'sidebar' ) ); ?>
						
						</div>
						
						
<!--
						<?php if(get_field('practice_areas_directory')): ?>
						
								
							<h2>Header</h2>
							
							<ul class="grid">
							 
								<?php while(has_sub_field('practice_areas_directory')): ?>
							 
									<li><a href="<?php the_sub_field('practice_area_link');?>"><?php the_sub_field('practice_areas_title');?></a></li>
									<?php the_sub_field('');?>
							    
								<?php endwhile; ?>
								
								</ul><!-- grid -->
							 
							<?php endif; ?>
							

							
														
							
						
													
					</div><!-- inner_content -->
				
				</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->

			<?php  // get_template_part( 'loop', 'page' );?>

			

<?php get_footer(); ?>
