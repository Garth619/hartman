<?php 
	
/**
 * Template Name: Attorneys Directory
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
					
					<span class="my_excerpt"><?php the_field('att_excerpt');?></span>
					
					<div class="col">
					
					

					<?php the_field('att_col_1');?>
					
					</div><!-- col -->
					
					<div class="col">
					
						<?php the_field('att_col_2');?>
					
					</div><!-- col -->
					
				
				
				
				
				<div class="top_attorneys_wrapper">
					

							
					<?php

						$post_object = get_field('dallas');

						if( $post_object ): 

						// override $post
						$post = $post_object;
						setup_postdata( $post ); 

					?>
							
	
				<a class="single_attorney_link" href="<?php the_permalink();?>">	
							
					<div class="single_attorney top">
							
							
							<div class="image_wrapper">
								
								<?php if(get_field('attorney_image')):?>
								
									<img src="<?php the_field('attorney_image');?>"/>
								
								<?php else:?>
								
									<img src="<?php bloginfo('url');?>/wp-content/uploads/2017/01/placeholder.jpg"/>
								
								<?php endif;?>
								
								
								
								<span class="attorney_name"><?php the_title();?></span><!-- attorney_name -->
								
							</div><!-- image_wrapper -->
							
							<div class="attorney_overlay">
								
								<span class="view_profile">View Profile</span><!-- view_profile -->
								
							</div><!-- attorney_overlay -->
							
						</div><!-- single_attorney -->
						
					</a><!-- single_attorney_link -->
    
							
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>



				<?php

						$post_object = get_field('douglas');

						if( $post_object ): 

						// override $post
						$post = $post_object;
						setup_postdata( $post ); 

					?>
							
	
				<a class="single_attorney_link" href="<?php the_permalink();?>">	
							
					<div class="single_attorney top">
							
							
							<div class="image_wrapper">
								
								<?php if(get_field('attorney_image')):?>
								
									<img src="<?php the_field('attorney_image');?>"/>
								
								<?php else:?>
								
									<img src="<?php bloginfo('url');?>/wp-content/uploads/2017/01/placeholder.jpg"/>
								
								<?php endif;?>
								
								<span class="attorney_name"><?php the_title();?></span><!-- attorney_name -->
								
							</div><!-- image_wrapper -->
							
							<div class="attorney_overlay">
								
								<span class="view_profile">View Profile</span><!-- view_profile -->
								
							</div><!-- attorney_overlay -->
							
						</div><!-- single_attorney -->
						
					</a><!-- single_attorney_link -->
    
							
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
							
	
					
				</div><!-- top_attorneys_wrapper -->
				
				<div class="all_attorneys_wrapper">
					
					
					<?php $posts = get_field('attorneys_directory');
					
					if( $posts ): ?>
					   
					    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
					        
					        
					        	<a class="single_attorney_link" href="<?php the_permalink();?>">
						
											<div class="single_attorney bottom">
							
												<div class="image_wrapper">
								
													<?php if(get_field('attorney_image')):?>
								
														<img src="<?php the_field('attorney_image');?>"/>
								
														<?php else:?>
								
														<img src="<?php bloginfo('url');?>/wp-content/uploads/2017/01/placeholder.jpg"/>
								
													<?php endif;?>
													
													<span class="attorney_name"><?php the_title();?></span><!-- attorney_name -->
								
												</div><!-- image_wrapper -->
							
												<div class="attorney_overlay">
								
													<span class="view_profile">View Profile</span><!-- view_profile -->
								
												</div><!-- attorney_overlay -->
							
										</div><!-- single_attorney -->
						
								</a><!-- single_attorney_link -->

								
								<?php endforeach; ?>
					    
					    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
					

					</div><!-- all_attorneys_wrapper -->
				
			
				
								
				</div><!-- inner_content -->
				
				</div><!-- content -->
				
				
			</div><!-- inner_container -->
			
			
		</div><!-- inner_main_with_sidebar -->

			<?php  // get_template_part( 'loop', 'page' );?>

			

<?php get_footer(); ?>
