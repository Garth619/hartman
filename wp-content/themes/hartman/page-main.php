<?php
/**
 * Template Name: Main
 *
 
 */ get_header(); ?>

		

<section class="main_banner">
	
	<div class="main_inner_banner">
	
		<div class="welcome_content">
		
			<span class="subheader"><?php the_field('main_content_sub_header');?></span><!-- subheader -->
			<span class="largeheader"><?php the_field('main_content_large_header');?></span>
			<a href="" class="free_consultation"><?php the_field('consultation_wrapper');?></a>
		
		</div><!-- welcome_content -->
		
		<div class="lower_content">
			
			
		
				<div class="icon_wrapper">
			
			
				<div class="single_icon">
					
					<img src="<?php bloginfo('template_directory');?>/images/header_icon_v2_sp1.svg"/>
					<span class="largeheader"><?php the_field('main_content_icon_1_title');?></span><!-- largeheader -->
					<span class="subheader"><?php the_field('main_content_icon_1_sub_title');?></span><!-- subheader -->
					
				</div><!-- single_icon -->
				
				<div class="single_icon">
					
					<img src="<?php bloginfo('template_directory');?>/images/header_icon_v2_sp2.svg"/>
					<span class="largeheader"><?php the_field('main_content_icon_2_title');?></span><!-- largeheader -->
					<span class="subheader"><?php the_field('main_content_icon_2_sub_title');?></span><!-- subheader -->
					
				</div><!-- single_icon -->
				
				<div class="single_icon">
					
					<img src="<?php bloginfo('template_directory');?>/images/header_icon_v2_sp3.svg"/>
					<span class="largeheader"><?php the_field('main_content_icon_3_title');?></span><!-- largeheader -->
					<span class="subheader"><?php the_field('main_content_icon_3_sub_title');?></span><!-- subheader -->
					
				</div><!-- single_icon -->
			
		
		</div><!-- icon_wrapper -->
		
	
		
		<div class="video_wrapper">
			
			<div class="video_thumb">
				
					<img class="video_thumb_img" src="<?php the_field('video_thumb');?>"/>
					<img class="play" src="<?php bloginfo('template_directory');?>/images/header_video_playbutton.png"/>
				
				</div><!-- video_thumb -->
			
				<div class="video_content">
				
					<span class="video_header"><?php the_field('video_content_header');?></span><!-- video_header -->
					<p><?php the_field('video_content_body');?></p>
				
				</div><!-- video_content -->
			
	</div><!-- video_wrapper -->
		
	</div><!-- lower_content -->
	
	<div class="arrow_scroll">
		
		<img src="<?php bloginfo('template_directory');?>/images/header_icon_scrollarrow.png"/>
		
	</div><!-- arrow_scroll -->
	
	</div><!-- main_inner_banner -->
	
	
	
	
</section><!-- main_banner -->



<section class="case_results">
	
	<div class="inner_case_wrapper">
	
	
		<?php if(get_field('case_results_main_page')): ?>
		 
			<?php while(has_sub_field('case_results_main_page')): ?>
		 
				<div class="single_case_results">
			
					<a class="case_results_link" href="">
		
					<span class="largeheader"><span class="dollar">$</span><?php the_sub_field('case_results_number');?></span><!-- subheader -->
					<span class="subheader"><?php the_sub_field('case_results_title');?></span><!-- subheader -->
		
					<p><?php the_sub_field('case_results_description');?></p>
		
					<span class="case_link"><?php the_sub_field('case_results_category');?> <img class="case_link_arrow" src="<?php bloginfo('template_directory');?>/images/pa_arrow-01.svg"/></span><!-- case_link -->
			
					</a><!-- case_results_link -->
		
				</div><!-- single_case_results -->
				

			<?php endwhile; ?>
		 
		<?php endif; ?>
		

	</div><!-- inner_case_wrapper -->
	
	
	<div class="view_more mobile">
		
		<a href="<?php the_field('case_results_view_all_link');?>"><?php the_field('case_results_mobile_button');?></a>
		
	</div><!-- view_more -->
	
	<div class="view_more desktop">
		
		<a href="<?php the_field('case_results_view_all_link');?>"><?php the_field('case_results_desktp_button');?></a>
		
	</div><!-- view_more -->


	
</section><!-- case_results -->


<section class="about_content">
	
	<div class="blue_line"></div><!-- blue_line -->
	
	<div class="col_wrapper">
	
	
		<div class="col">
		
			<span class="largeheader"><?php the_field('about_content_header');?></span><!-- largeheader -->
			
			<span class="subheader"><?php the_field('about_excerpt_main_page');?></span><!-- subheader -->
			
			<span class="content_header">Lorem ipsum dolor sit amet</span><!-- content_header -->
			
			<div class="content">
			
				<?php the_field('about_col1_main');?>
			
			</div><!-- content -->
			
		</div><!-- col_1 -->
		
		<div class="col">
			
			<div class="content">
			
			<?php the_field('about_col2_main');?>
		
			</div><!-- content -->
			
		</div><!-- col_2 -->
	
	</div><!-- col_wrapper -->
	
</section><!-- about_content -->

<section class="practice_areas">
	
	<div class="practice_area_wrapper">
		
		
		
		<?php if(get_field('practice_areas_main_slider')): ?>
		 
			<?php while(has_sub_field('practice_areas_main_slider')): ?>
		 
				
		<div class="single_practice_area">
			
			<a href="<?php the_sub_field('pa_page_link');?>">
			
			<div class="pa_icon_wrapper">
			
				<img class="pa_icon" src="<?php the_sub_field('pa_image');?>"/>
			
			</div>
			
			<span class="subheader"><?php the_sub_field('pa_title');?></span><!-- subheader -->
			
			<div class="arrow_wrapper">
			
				<img class="arrow" src="<?php bloginfo('template_directory');?>/images/pa_arrow-01.svg"/>
			
			</div><!-- arrow_wrapper -->
			
			</a>
			
		</div><!-- single_practice_area -->
				
				
				
				
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
		
		
		
		
		
		
		
	</div><!-- practice_area_wrapper -->
	
	<div class="view_pa">
		
		<a href="<?php the_field('pa_view_button_link');?>"><?php the_field('pa_view_button');?></a>
		
	</div><!-- view_pa -->

</section><!-- practice_areas -->

<section class="reasons">
	
	<div class="reasons_inner">
	
		<div class="large_header_wrapper">
	
			<span class="large_header">6 Reasons to Choose Our Law Office</span><!-- large_header -->
			<span class="red_line"></span><!-- red_line -->
	
		</div><!-- large_header_wrapper -->
		
		
		<div class="reasons_grid mobile">
			
			<div class="single_reason">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
				<span class="sm_red_line"></span><!-- sm_red_line -->
				
				<span class="large_header">free consultations</span><!-- large_header -->
				
				<p>Wondering if you have a case? Call us for a free consultation! This way you can find out if you have a case or not. There is no obligation so contact us anytime.</p>
				
			</div><!-- single_reason -->
			
			<div class="single_reason">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
				<span class="sm_red_line"></span><!-- sm_red_line -->
				
				<span class="large_header">free consultations</span><!-- large_header -->
				
				<p>Wondering if you have a case? Call us for a free consultation! This way you can find out if you have a case or not. There is no obligation so contact us anytime.</p>
				
			</div><!-- single_reason -->
			
			<div class="single_reason">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
				<span class="sm_red_line"></span><!-- sm_red_line -->
				
				<span class="large_header">free consultations</span><!-- large_header -->
				
				<p>Wondering if you have a case? Call us for a free consultation! This way you can find out if you have a case or not. There is no obligation so contact us anytime.</p>
				
			</div><!-- single_reason -->
			
			<div class="single_reason">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
				<span class="sm_red_line"></span><!-- sm_red_line -->
				
				<span class="large_header">free consultations</span><!-- large_header -->
				
				<p>Wondering if you have a case? Call us for a free consultation! This way you can find out if you have a case or not. There is no obligation so contact us anytime.</p>
				
			</div><!-- single_reason -->
			
			<div class="single_reason">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
				<span class="sm_red_line"></span><!-- sm_red_line -->
				
				<span class="large_header">free consultations</span><!-- large_header -->
				
				<p>Wondering if you have a case? Call us for a free consultation! This way you can find out if you have a case or not. There is no obligation so contact us anytime.</p>
				
			</div><!-- single_reason -->
			
			<div class="single_reason">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
				<span class="sm_red_line"></span><!-- sm_red_line -->
				
				<span class="large_header">free consultations</span><!-- large_header -->
				
				<p>Wondering if you have a case? Call us for a free consultation! This way you can find out if you have a case or not. There is no obligation so contact us anytime.</p>
				
			</div><!-- single_reason -->
			
		</div><!-- reasons_grid -->
		
		
		
		
		
		<div class="reasons_grid desktop">
			
			<div class="single_reason">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
				<span class="sm_red_line"></span><!-- sm_red_line -->
				
				<span class="large_header">free consultations</span><!-- large_header -->
				
				<p>Wondering if you have a case? Call us for a free consultation! This way you can find out if you have a case or not. There is no obligation so contact us anytime.</p>
				
			</div><!-- single_reason -->
			
			<div class="single_reason">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
				<span class="sm_red_line"></span><!-- sm_red_line -->
				
				<span class="large_header">free consultations</span><!-- large_header -->
				
				<p>Wondering if you have a case? Call us for a free consultation! This way you can find out if you have a case or not. There is no obligation so contact us anytime.</p>
				
			</div><!-- single_reason -->
			
			<div class="single_reason">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
				<span class="sm_red_line"></span><!-- sm_red_line -->
				
				<span class="large_header">free consultations</span><!-- large_header -->
				
				<p>Wondering if you have a case? Call us for a free consultation! This way you can find out if you have a case or not. There is no obligation so contact us anytime.</p>
				
			</div><!-- single_reason -->
			
			<div class="single_reason">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
				<span class="sm_red_line"></span><!-- sm_red_line -->
				
				<span class="large_header">free consultations</span><!-- large_header -->
				
				<p>Wondering if you have a case? Call us for a free consultation! This way you can find out if you have a case or not. There is no obligation so contact us anytime.</p>
				
			</div><!-- single_reason -->
			
			<div class="single_reason">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
				<span class="sm_red_line"></span><!-- sm_red_line -->
				
				<span class="large_header">free consultations</span><!-- large_header -->
				
				<p>Wondering if you have a case? Call us for a free consultation! This way you can find out if you have a case or not. There is no obligation so contact us anytime.</p>
				
			</div><!-- single_reason -->
			
			<div class="single_reason">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
				<span class="sm_red_line"></span><!-- sm_red_line -->
				
				<span class="large_header">free consultations</span><!-- large_header -->
				
				<p>Wondering if you have a case? Call us for a free consultation! This way you can find out if you have a case or not. There is no obligation so contact us anytime.</p>
				
			</div><!-- single_reason -->
			
		</div><!-- reasons_grid -->
		
	
	</div><!-- reasons_inner -->
	
</section><!-- reasons -->

<section class="addtional_about_content">
	

	
	<div class="col_1">
		
		<span class="large_header">Lorem Ipsum Eli Dolor Sit Amet Consect etur Adip</span><!-- large_header -->
		
		<div class="content">
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.</p>

		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.</p>
		
		</div><!-- content -->
		
	</div><!-- col_1 -->
	
	<div class="col_2">
		
		<div class="video_wrapper">
			
			<img class="video_image" src="<?php bloginfo('template_directory');?>/images/content_video_thumb.jpg"/>
			<img class="play" src="<?php bloginfo('template_directory');?>/images/play.png"/>
			
		</div><!-- video_wrapper -->
		
		<div class="blueline"></div><!-- blueline -->
		
		<div class="testimonial">
			
			<span class="large_header">Marlaina</span><!-- large_header -->
			
			<p>I contacted Dallas Hartman. It just wasn’t about, ok, we are going to go after this insurance company and that’s it. They always go a step further. I knew that my son was being taken care of and they made that happen.</p>
			
		</div><!-- testimonial -->
		
		<div class="more_clients">
			
			<a href="">
				
				<span>View More Client Testimonials</span>
				<img src="<?php bloginfo('template_directory');?>/images/content_test_arrow.svg"/>
				
			</a>
			
		</div><!-- more_clients -->
		
	</div><!-- col_2 -->
	
</section><!-- addtional_about_content -->


<section class="community">
	
	<div class="give_back">
		
		
		<div class="give_back_inner">
		
			<div class="give_back_logo">
			
				<img src="<?php bloginfo('template_directory');?>/images/givebacklogo.png"/>
			
			</div><!-- give_back_logo -->
			
			
			<div class="give_back_lower_content">
			
			
				<span class="large_header_give_back">Dallas Gives Back</span><!-- large_header_give_back -->
				<span class="redline"></span><!-- redline -->
				
				
				<div class="headline_wrapper mobile">
				
					<div class="headline">
						
						<a href="">
							
							<div class="title_wrapper">
							
								<span class="title">Dallas Helps Revitalize Bollinger Park in New Castle</span><!-- title -->
								<span class="author">POSTED BY KATHLEEN ROBERTSOn</span><!-- author -->
							
							</div><!-- title_wrapper -->
							
							<img class="arrow" src="<?php bloginfo('template_directory');?>/images/content_test_arrow.svg"/>
						
						</a>
						
					</div><!-- headline -->
					
					<div class="headline">
						
						<a href="">
							
							<div class="title_wrapper">
							
								<span class="title">Dallas Hartman provides funds to create lawrence county mentoring program</span><!-- title -->
								<span class="author">POSTED BY Dallas Hartman</span><!-- author -->
							
							</div><!-- title_wrapper -->
							
							<img class="arrow" src="<?php bloginfo('template_directory');?>/images/content_test_arrow.svg"/>
						
						</a>
						
					</div><!-- headline -->
					
					<div class="headline">
						
						<a href="">
							
							<div class="title_wrapper">
							
								<span class="title">Help us help the Union Police Department add a canine officer</span><!-- title -->
								<span class="author">POSTED BY Dallas Hartman</span><!-- author -->
							
							</div><!-- title_wrapper -->
							
							<img class="arrow" src="<?php bloginfo('template_directory');?>/images/content_test_arrow.svg"/>
						
						</a>
						
					</div><!-- headline -->
				
				</div><!-- headline_wrapper -->
				
				
				
				<div class="headline_wrapper desktop">
				
					<div class="headline">
						
						<a href="">
							
							<div class="title_wrapper">
							
								<span class="title">Dallas Helps Revitalize Bollinger Park in New Castle</span><!-- title -->
								<span class="author">POSTED BY KATHLEEN ROBERTSOn</span><!-- author -->
							
							</div><!-- title_wrapper -->
							
							<img class="arrow" src="<?php bloginfo('template_directory');?>/images/content_test_arrow.svg"/>
						
						</a>
						
					</div><!-- headline -->
					
					<div class="headline">
						
						<a href="">
							
							<div class="title_wrapper">
							
								<span class="title">Dallas Hartman provides funds to create lawrence county mentoring program</span><!-- title -->
								<span class="author">POSTED BY Dallas Hartman</span><!-- author -->
							
							</div><!-- title_wrapper -->
							
							<img class="arrow" src="<?php bloginfo('template_directory');?>/images/content_test_arrow.svg"/>
						
						</a>
						
					</div><!-- headline -->
					
					<div class="headline">
						
						<a href="">
							
							<div class="title_wrapper">
							
								<span class="title">Help us help the Union Police Department add a canine officer</span><!-- title -->
								<span class="author">POSTED BY Dallas Hartman</span><!-- author -->
							
							</div><!-- title_wrapper -->
							
							<img class="arrow" src="<?php bloginfo('template_directory');?>/images/content_test_arrow.svg"/>
						
						</a>
						
					</div><!-- headline -->
				
				</div><!-- headline_wrapper -->

			
			</div><!-- give_back_lower_content -->
			
		
		</div><!-- give_back_inner -->
		
	
	</div><!-- give_back -->
	
	<div class="video_wrapper">
			
			<img src="<?php bloginfo('template_directory');?>/images/community_image.jpg"/>
			
			
		</div><!-- video_wrapper -->
		
		<div style="clear:both"></div>
	
</section><!-- community -->

<section class="awards">
	
	
	<div class="awards_inner">
	
	
		<div class="award_slide">
			
			<img src="<?php bloginfo('template_directory');?>/images/award_1.png"/>
			
		</div><!-- award_slide -->
		
		<div class="award_slide">
			
			<img src="<?php bloginfo('template_directory');?>/images/award_2.png"/>
			
		</div><!-- award_slide -->
		
		<div class="award_slide">
			
			<img src="<?php bloginfo('template_directory');?>/images/award_3.png"/>
			
		</div><!-- award_slide -->
		
		<div class="award_slide">
			
			<img src="<?php bloginfo('template_directory');?>/images/award_4.png"/>
			
		</div><!-- award_slide -->
		
		<div class="award_slide">
			
			<img src="<?php bloginfo('template_directory');?>/images/award_1.png"/>
			
		</div><!-- award_slide -->
		
		<div class="award_slide">
			
			<img src="<?php bloginfo('template_directory');?>/images/award_2.png"/>
			
		</div><!-- award_slide -->
		
		<div class="award_slide">
			
			<img src="<?php bloginfo('template_directory');?>/images/award_3.png"/>
			
		</div><!-- award_slide -->
		
		<div class="award_slide">
			
			<img src="<?php bloginfo('template_directory');?>/images/award_4.png"/>
			
		</div><!-- award_slide -->
	
	
	</div><!-- awards_inner -->
	
	
</section><!-- awards -->


			

<?php get_footer(); ?>
