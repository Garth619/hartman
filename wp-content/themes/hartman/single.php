<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<?php include('banner.php');?>
		

		<div class="inner_main_with_sidebar">
			
						
			<?php include('sidebar-blog.php');?>
			
			<div class="inner_container">
				
				
				<div class="content">
					
					<?php get_template_part( 'loop', 'single' );?>
					
				</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->
			
	
	<?php get_footer(); ?>
