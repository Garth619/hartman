<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		
				


<?php include('banner.php');?>
		

		<div class="inner_main_with_sidebar">
			
						
			<?php include('sidebar.php');?>
			
			<div class="inner_container">
				
				
				<div class="content">
					
					<h1 class="page-title"><?php printf( __( ' %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );?></h1>
				
				
				<?php $category_description = category_description();
					
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

					get_template_part( 'loop', 'category' );?>
					
				</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->
			
	
	<?php get_footer(); ?>