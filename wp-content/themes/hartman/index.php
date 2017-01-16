<?php
/**

 */

get_header(); ?>

<?php include('banner.php');?>

<div class="inner_main_with_sidebar">
			
						
			<?php include('sidebar.php');?>
			
			<div class="inner_container">
				
				
				<div class="content">
					
					<h1>Blog</h1>
					
					<?php get_template_part( 'loop', 'index' ); ?>
					
				</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->
		

	<?php get_footer(); ?>
