
<?php 
/**
 *  Template Name: FAQ
 *

 *

 */
	
	get_header(); ?>

	<?php include('banner.php');?>
	

		<div class="inner_main_with_sidebar">
			
						
			<?php include('sidebar.php');?>
			
			<div class="inner_container">
				
				
				<div class="content">
					
					<h1>FAQ<span class="s">s</span></h1>
					
					
					
					<?php if(get_field('faqs')): ?>
					 
						<?php while(has_sub_field('faqs')): ?>
					 

							
							<h2><?php the_sub_field('question');?></h2>
					
							<p><?php the_sub_field('answer');?></p>
							
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
					
				</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->

			<?php  // get_template_part( 'loop', 'page' );?>

			

<?php get_footer(); ?>
