<?php 
	
/**
 * Template Name: About
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
					
					<span class="my_excerpt"><?php the_field('excerpt');?></span>
					
					<div class="col">
					
					<?php the_field('coulumn_1');?>
										
					</div><!-- col -->
					
					<div class="col">
					
						<?php the_field('coulumn_2');?>
					
					</div><!-- col -->
					
				
				
				<div class="about_icons_wrapper">
					
					<div class="about_icon">
						
						<img src="<?php bloginfo('template_directory');?>/images/header_icon_v2_sp1.svg"/>
						<span class="large_header">Record Setting</span><!-- large_header -->
						<span class="sub_header">Verdicts</span><!-- sub_header -->
						
					</div><!-- about_icon -->
					
					<div class="about_icon">
						
						<img src="<?php bloginfo('template_directory');?>/images/header_icon_v2_sp2.svg"/>
						<span class="large_header">Winner of</span><!-- large_header -->
						<span class="sub_header">Numerous Awards</span><!-- sub_header -->
						
					</div><!-- about_icon -->
					
					<div class="about_icon">
						
						<img src="<?php bloginfo('template_directory');?>/images/header_icon_v2_sp3.svg"/>
						<span class="large_header">Dallas Gives Back</span><!-- large_header -->
						<span class="sub_header">To the Community</span><!-- sub_header -->
						
					</div><!-- about_icon -->
					
				</div><!-- about_icons_wrapper -->
				
				</div><!-- inner_content -->
				
				</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->

			<?php  // get_template_part( 'loop', 'page' );?>

			

<?php get_footer(); ?>
