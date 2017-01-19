
<?php 
/**
 * Template for displaying all default pages
 *

 *

 */
	
	get_header(); ?>

	<?php include('banner.php');?>
	

		<div class="inner_main_with_sidebar">
			
						
			<?php include('sidebar.php');?>
			
			<div class="inner_container">
				
				
				<div class="content">
					
					<h1><?php the_title();?></h1>
					
					<?php get_template_part( 'loop', 'page' );?>
					
				</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->

	<?php get_footer(); ?>
