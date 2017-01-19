<?php
/**
 * Template for displaying Search Results pages
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
					
					
					
							
<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				/*
				
				 */
				get_template_part( 'loop', 'search' );
				?>


<?php else : ?>
				
						<h2 style="margin-top:15px;"><?php _e( 'Sorry, but nothing matched your search criteria.', 'twentyten' ); ?></h2>
						
				
<?php endif; ?>
					
				</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->

	<?php get_footer(); ?>






		


