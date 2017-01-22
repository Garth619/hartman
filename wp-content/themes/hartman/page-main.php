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
			
			<a href="#request_scroll" class="free_consultation">
				<?php the_field('consultation_wrapper');?>
			</a>
			
			
			
<!--
			<a href="#request_scroll" class="free_consultation">
				<?php the_field('consultation_wrapper');?>
				<div class="free_consultation_inner_wrapper">
					
					<?php the_field('consultation_wrapper');?>
					
				</div>
			</a>
-->
		
		</div><!-- welcome_content -->
		
		<div class="lower_content">
			
			
		
				<div class="icon_wrapper">
			
			
				<div class="single_icon">
					
<svg id="text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1051.4 919.52"><defs><style>.cls-1{fill:#007ddc;}</style></defs><title>header_icon_sp1</title><path class="cls-1" d="M150.3,362.1a58,58,0,1,1,0-116H185a8,8,0,1,1,0,16H150.3a42,42,0,0,0,0,84,8,8,0,1,1,0,16Z" transform="translate(0 0.02)"/><path class="cls-1" d="M298,362.1a8,8,0,0,1,0-16,42,42,0,0,0,0-84H185a8,8,0,0,1,0-16H298a58,58,0,1,1,0,116Z" transform="translate(0 0.02)"/><path class="cls-1" d="M177.6,774a8,8,0,0,1-8-8V281.1a8,8,0,0,1,16,0V766A8,8,0,0,1,177.6,774Z" transform="translate(0 0.02)"/><path class="cls-1" d="M224.1,774a8,8,0,0,1-8-8V281.1a8,8,0,0,1,16,0V766A8,8,0,0,1,224.1,774Z" transform="translate(0 0.02)"/><path class="cls-1" d="M270.6,774a8,8,0,0,1-8-8V281.1a8,8,0,0,1,16,0V766A8,8,0,0,1,270.6,774Z" transform="translate(0 0.02)"/><path class="cls-1" d="M451.9,362.1a58,58,0,0,1,0-116h34.7a8,8,0,1,1,0,16H451.9a42,42,0,0,0,0,84,8,8,0,0,1,0,16Z" transform="translate(0 0.02)"/><path class="cls-1" d="M599.5,362.1a8,8,0,0,1,0-16,42,42,0,0,0,0-84h-113a8,8,0,0,1,0-16h113a58,58,0,1,1,0,116Z" transform="translate(0 0.02)"/><path class="cls-1" d="M479.2,774a8,8,0,0,1-8-8V281.1a8,8,0,0,1,16,0V766A8,8,0,0,1,479.2,774Z" transform="translate(0 0.02)"/><path class="cls-1" d="M525.7,774a8,8,0,0,1-8-8V281.1a8,8,0,0,1,16,0V766A8,8,0,0,1,525.7,774Z" transform="translate(0 0.02)"/><path class="cls-1" d="M572.2,774a8,8,0,0,1-8-8V281.1a8,8,0,0,1,16,0V766A8,8,0,0,1,572.2,774Z" transform="translate(0 0.02)"/><path class="cls-1" d="M753.4,362.1a58,58,0,0,1,0-116h34.7a8,8,0,1,1,0,16H753.4a42,42,0,1,0,0,84,8,8,0,0,1,0,16Z" transform="translate(0 0.02)"/><path class="cls-1" d="M901.1,362.1a8,8,0,0,1,0-16,42,42,0,1,0,0-84h-113a8,8,0,0,1,0-16h113a58,58,0,1,1,0,116Z" transform="translate(0 0.02)"/><path class="cls-1" d="M780.8,774a8,8,0,0,1-8-8V281.1a8,8,0,0,1,16,0V766A8,8,0,0,1,780.8,774Z" transform="translate(0 0.02)"/><path class="cls-1" d="M827.3,774a8,8,0,0,1-8-8V281.1a8,8,0,0,1,16,0V766A8,8,0,0,1,827.3,774Z" transform="translate(0 0.02)"/><path class="cls-1" d="M873.8,774a8,8,0,0,1-8-8V281.1a8,8,0,0,1,16,0V766A8,8,0,0,1,873.8,774Z" transform="translate(0 0.02)"/><path class="cls-1" d="M938,822.5H113.4a8,8,0,0,1-8-8V766a8,8,0,0,1,8-8H938a8,8,0,0,1,8,8v48.5A8,8,0,0,1,938,822.5Zm-816.6-16H930V774H121.4Z" transform="translate(0 0.02)"/><path class="cls-1" d="M1002.9,871H48.5a8,8,0,0,1-8-8V814.5a8,8,0,0,1,8-8H1003a8,8,0,0,1,8,8V863A8.11,8.11,0,0,1,1002.9,871ZM56.5,855H995V822.5H56.5Z" transform="translate(0 0.02)"/><path class="cls-1" d="M1043.4,919.5H8a8,8,0,0,1-8-8V863a8,8,0,0,1,8-8H1043.4a8,8,0,0,1,8,8v48.5A8,8,0,0,1,1043.4,919.5ZM16,903.5H1035.4V871H16Z" transform="translate(0 0.02)"/><path class="cls-1" d="M951.1,220.4H100.3a8,8,0,1,1,0-16H951.1a8,8,0,0,1,0,16Z" transform="translate(0 0.02)"/><path class="cls-1" d="M953.7,176.3H97.7a8,8,0,0,1-7.9-6.6,7.88,7.88,0,0,1,5.1-8.9L522.9.5a7.73,7.73,0,0,1,5.6,0L956.2,160.6a8.08,8.08,0,0,1,5.6,7.6A8.2,8.2,0,0,1,953.7,176.3Zm-811.8-16H909.6L525.7,16.5Z" transform="translate(0 0.02)"/><path class="cls-1" d="M828.7,176.3h-606a8,8,0,0,1-7.9-6.6,7.88,7.88,0,0,1,5.1-8.9l303-113.5a7.73,7.73,0,0,1,5.6,0L831.2,160.6a8,8,0,0,1-2.5,15.7Zm-561.8-16H784.6l-258.9-97Z" transform="translate(0 0.02)"/></svg>

					
<!-- 		<img src="<?php bloginfo('template_directory');?>/images/header_icon_v2_sp1_animated.svg"/> -->
					<span class="largeheader"><?php the_field('main_content_icon_1_title');?></span><!-- largeheader -->
					<span class="subheader"><?php the_field('main_content_icon_1_sub_title');?></span><!-- subheader -->
					
				</div><!-- single_icon -->
				
				<div class="single_icon">
					
					<svg id="text2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 896.6 862.62"><defs><style>.cls-1{fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:19px;}</style></defs><title>header_icon_v2_sp2</title><path class="cls-1" d="M301,102.5S70.9,186.6,77,451.5c6,261,238.3,352,325.7,358.7" transform="translate(0 0)"/><path class="cls-1" d="M292.7,102.2c19.3,4,29.3-22,31.3-42s-9.3-50.7-9.3-50.7S293.2,29.7,284,46.8C274,65.5,273.3,98.2,292.7,102.2Z" transform="translate(0 0)"/><path class="cls-1" d="M187.3,73.5s-26,37.3-24.7,60,20,40.7,26.7,40,26.7-24,22.7-49.3S187.3,73.5,187.3,73.5Z" transform="translate(0 0)"/><circle class="cls-1" cx="446.3" cy="513.6" r="21.7"/><line class="cls-1" x1="447.3" y1="302.8" x2="447.3" y2="484.8"/><path class="cls-1" d="M446,538.8V732.7h20s22.7-109.9,44.7-151.9,70.7-74.7,70.7-74.7l-66-204" transform="translate(0 0)"/><line class="cls-1" x1="413.3" y1="305.5" x2="356" y2="483.5"/><polygon class="cls-1" points="334 258.8 555.3 258.8 537.3 301.5 356 301.5 334 258.8"/><path class="cls-1" d="M375.3,304.2,310.6,507.5s44,31.1,67.3,64.7c33.3,48,44.7,160.7,44.7,160.7h22.7V543.5" transform="translate(0 0)"/><rect class="cls-1" x="333.3" y="175.3" width="222.7" height="82.7"/><path class="cls-1" d="M110.5,274s24-19.5,11-50-37-45.5-37-45.5-13.5,37-7,64.5S110.5,274,110.5,274Z" transform="translate(0 0)"/><path class="cls-1" d="M73.5,409.5s6.5-35-6.5-52-46-33-46-33S17.5,361,29.5,386,73.5,409.5,73.5,409.5Z" transform="translate(0 0)"/><path class="cls-1" d="M149.7,676.5c1-2.3-7-32.3-33.3-44.7s-56.9-5.5-56.9-5.5,16.9,34,40.3,48.9S148.7,678.8,149.7,676.5Z" transform="translate(0 0)"/><path class="cls-1" d="M80.5,542.5c3.5-1.5,6.5-32-16.5-51S9.5,470,9.5,470s8.5,42.5,24,56.5S77,544,80.5,542.5Z" transform="translate(0 0)"/><path class="cls-1" d="M151,759.8s32-19.7,54.7-19c32.3,1,45.7,25.3,45.7,25.3s-5.3,21-39.3,21C177,787.2,151,759.8,151,759.8Z" transform="translate(0 0)"/><path class="cls-1" d="M373.3,811.2c-8.7-9.3-20.7-11.7-44.7-1.7s-41.3,41.3-41.3,41.3,47.7,7.3,67.3-4C371.5,837.2,382,820.5,373.3,811.2Z" transform="translate(0 0)"/><path class="cls-1" d="M595.6,102.5s230.1,84.1,224,349c-6,261-238.3,352-325.7,358.7" transform="translate(0 0)"/><path class="cls-1" d="M604,102.2c-19.3,4-29.3-22-31.3-42S582,9.5,582,9.5s21.5,20.2,30.7,37.3C622.6,65.5,623.3,98.2,604,102.2Z" transform="translate(0 0)"/><path class="cls-1" d="M709.3,73.5s26,37.3,24.7,60-20,40.7-26.7,40-26.7-24-22.7-49.3S709.3,73.5,709.3,73.5Z" transform="translate(0 0)"/><path class="cls-1" d="M786.1,274s-24-19.5-11-50,37-45.5,37-45.5,13.5,37,7,64.5S786.1,274,786.1,274Z" transform="translate(0 0)"/><path class="cls-1" d="M823.1,409.5s-6.5-35,6.5-52,46-33,46-33,3.5,36.5-8.5,61.5S823.1,409.5,823.1,409.5Z" transform="translate(0 0)"/><path class="cls-1" d="M747,676.5c-1-2.3,7-32.3,33.3-44.7s56.9-5.5,56.9-5.5-16.9,34-40.3,48.9S748,678.8,747,676.5Z" transform="translate(0 0)"/><path class="cls-1" d="M816.1,542.5c-3.5-1.5-6.5-32,16.5-51S887.1,470,887.1,470s-8.5,42.5-24,56.5S819.6,544,816.1,542.5Z" transform="translate(0 0)"/><path class="cls-1" d="M745.6,759.8s-32-19.7-54.7-19c-32.3,1-45.7,25.3-45.7,25.3s5.3,21,39.3,21C719.6,787.2,745.6,759.8,745.6,759.8Z" transform="translate(0 0)"/><path class="cls-1" d="M523.3,811.2c8.7-9.3,20.7-11.7,44.7-1.7s41.3,41.3,41.3,41.3-47.7,7.3-67.3-4C525.2,837.2,514.6,820.5,523.3,811.2Z" transform="translate(0 0)"/></svg>					
					
<!-- 					<img src="<?php bloginfo('template_directory');?>/images/header_icon_v2_sp2.svg"/> -->
					<span class="largeheader"><?php the_field('main_content_icon_2_title');?></span><!-- largeheader -->
					<span class="subheader"><?php the_field('main_content_icon_2_sub_title');?></span><!-- subheader -->
					
				</div><!-- single_icon -->
				
				<div class="single_icon">
					
					<svg id="text3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 786.9 788.32"><title>header_icon_v2_sp3_test</title><line x1="286.8" y1="622.1" x2="187.8" y2="721.1" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M341.5,659.2a12.46,12.46,0,0,1-13,3.2c-5-1.6-16.5-13.4-16.5-13.4l-98.5,99s13.1,12.1,14.1,18.1a14,14,0,0,1-2.6,10.4l-.8.8a12,12,0,0,1-17,0l-54.3-53.8a12,12,0,0,1,0-17L271.6,587.8a12,12,0,0,1,17,0l48.6,48.6s6.8,6.2,7.9,9.9C346.8,652.5,343.6,656.8,341.5,659.2Z" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><line x1="260.3" y1="596" x2="241.3" y2="577" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><line x1="161" y1="693.7" x2="141.8" y2="674.5" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M390.2,423.2,132.4,681c-6.3,6.3-17.7,7.3-25.8-3.5-7.7-10.2-2.7-21.3,1.2-25.2L365.5,394.6" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M396.5,363.5s87.5-87,91-92,10-18,10-33.5-6-36-6-36" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M522,210.5s6,29,3.5,51" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M661,123.7c4-27-2.3-54.5-32.5-84.7-35.5-35.5-79-29.5-99-25.5s-55.4,26.3-70,61C444.5,110,447,144,475,182.5c26.2,36,72.5,26.5,72.5,26.5s37.4-7.2,44-45c6.5-37-29.5-59.5-29.5-59.5s-9-2.5-14.5,2-5,10-3.5,16,19,10.5,19.5,30c.5,17.7-10.3,26.6-24,30.5-19.5,5.5-40-10-50-28.5C479.1,135.2,468,89,502.5,59S577.3,32,606,53.5s31,56.5,30,66a109.61,109.61,0,0,1-2.3,14.2" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M639.4,48.9a73.71,73.71,0,1,1,98.2,98.7" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M658.5,81.6a46.6,46.6,0,1,1,46.6,46.6" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M422.9,390.4s87-87.5,92-91,18-10,33.5-10,36,6,36,6" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M575.9,264.9S551,258.5,529,261" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M663,125.3c27-4,54.2,2.9,84.4,33.1,35.5,35.5,29.5,79,25.5,99s-26.3,55.4-61,70c-35.5,15-69.5,12.5-108-15.5-36-26.2-26.5-72.5-26.5-72.5s7.2-37.4,45-44c37-6.5,59.5,29.5,59.5,29.5s2.5,9-2,14.5-10,5-16,3.5-10.5-19-30-19.5c-17.7-.5-26.6,10.3-30.5,24-5.5,19.5,10,40,28.5,50,19.3,10.4,65.5,21.5,95.5-13s27.7-75.4,5.5-103.5c-24.5-31-56.5-29.5-66-30-3.8-.2-9.6,1.3-13.2,2.1" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M737.5,147.5a73.71,73.71,0,1,0-98.7-98.2" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M704.8,128.4a46.6,46.6,0,1,0-46.6-46.6" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M634,133.3s-2.5,10.2,3.5,16.2c6.8,6.8,18.5,2.8,18.5,2.8" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><line x1="500" y1="622.1" x2="599" y2="721.1" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M445.3,659.2a12.46,12.46,0,0,0,13,3.2c5-1.6,16.5-13.5,16.5-13.5l98.5,99S560.2,760,559.2,766a14,14,0,0,0,2.6,10.4l.8.8a12,12,0,0,0,17,0l54.3-53.8a12,12,0,0,0,0-17L515.2,587.8a12,12,0,0,0-17,0l-48.6,48.6s-6.8,6.2-7.9,9.9C440.1,652.5,443.2,656.8,445.3,659.2Z" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><line x1="526.5" y1="596" x2="545.5" y2="577" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M396.6,423.2,654.4,681c6.3,6.3,17.7,7.3,25.8-3.5,7.7-10.2,2.7-21.3-1.2-25.2L421.3,394.6" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M452.9,426.1S302.8,276.5,299.3,271.5s-10-18-10-33.5,6-36,6-36" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M264.8,210.5s-6,29-3.5,51" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M125.8,123.7c-4-27,2.3-54.5,32.5-84.7,35.5-35.5,79-29.5,99-25.5s55.4,26.3,70,61c15,35.5,12.5,69.5-15.5,108-26.2,36-72.5,26.5-72.5,26.5s-37.4-7.2-44-45c-6.5-37,29.5-59.5,29.5-59.5s9-2.5,14.5,2,5,10,3.5,16-19,10.5-19.5,30c-.5,17.7,10.3,26.6,24,30.5,19.5,5.5,40-10,50-28.5,10.4-19.3,21.5-65.5-13-95.5s-74.8-27-103.5-5.5-31,56.5-30,66a109.61,109.61,0,0,0,2.3,14.2" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M147.4,48.9a73.67,73.67,0,1,0-98.1,98.7" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M128.3,81.6a46.65,46.65,0,1,0-46.7,46.6" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M426.5,453S276.9,302.9,271.9,299.4s-18-10-33.5-10-36,6-36,6" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M210.9,264.9S239,259.5,261,262" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M123.8,125.3c-27-4-54.2,2.9-84.4,33.1-35.5,35.5-29.5,79-25.5,99s26.3,55.4,61,70c35.5,15,69.5,12.5,108-15.5,36-26.2,26.5-72.5,26.5-72.5s-7.2-37.4-45-44c-37-6.5-59.5,29.5-59.5,29.5s-2.5,9,2,14.5,10,5,16,3.5,10.5-19,30-19.5c17.7-.5,26.6,10.3,30.5,24,5.5,19.5-10,40-28.5,50-19.3,10.4-65.5,21.5-95.5-13S31.7,209,53.9,180.9c24.5-31,56.5-29.5,66-30,3.8-.2,9.6,1.3,13.2,2.1" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M49.4,147.5A73.65,73.65,0,1,1,148,49.4" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M82,128.4a46.65,46.65,0,1,1,46.6-46.7" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><path d="M152.8,133.3S154,142,148,148c-6.8,6.8-17.2,4.3-17.2,4.3" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/><line x1="646" y1="674" x2="627" y2="693" style="fill:none;stroke:#007ddc;stroke-linecap:round;stroke-linejoin:round;stroke-width:15px"/></svg>
					
<!-- 					<img src="<?php bloginfo('template_directory');?>/images/header_icon_v2_sp3.svg"/> -->
					<span class="largeheader"><?php the_field('main_content_icon_3_title');?></span><!-- largeheader -->
					<span class="subheader"><?php the_field('main_content_icon_3_sub_title');?></span><!-- subheader -->
					
				</div><!-- single_icon -->
			
		
		</div><!-- icon_wrapper -->
		
	
		
		<div class="video_wrapper">
			
			<div class="video_thumb">
				
					<img class="video_thumb_img" src="<?php the_field('video_thumb');?>"alt="Learn about Dallas W. Hartman in 80 Seconds"/>
					<img class="play" src="<?php bloginfo('template_directory');?>/images/header_video_playbutton.png"/>
					
					<div class="video_thumb_overlay"></div><!-- video_thumb_overlay -->
				
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
			
					<a class="case_results_link">
		
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
			
			<span class="content_header"><?php the_field('about_subheader');?></span><!-- content_header -->
			
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

<section id="reasons_trigger" class="reasons">
	
	<div class="reasons_inner">
	
		<div class="large_header_wrapper">
	
			<span class="large_header"><?php the_field('six_resaons_title');?></span><!-- large_header -->
			<span class="red_line"></span><!-- red_line -->
	
		</div><!-- large_header_wrapper -->
		
		
		<div class="reasons_grid mobile">
			
			
			
			<?php if(get_field('six_reasons')): ?>
			 
				<?php while(has_sub_field('six_reasons')): ?>
			 
					
					<div class="single_reason">
				
						<img class="icon" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.svg"/>
				
						<span class="sm_red_line"></span><!-- sm_red_line -->
				
						<span class="large_header"><?php the_sub_field('single_reason_title');?></span><!-- large_header -->
				
						<p><?php the_sub_field('single_reason_content');?></p>
				
					</div><!-- single_reason -->
					
	
			   <?php endwhile; ?>
			 
			<?php endif; ?>
			
			
						
		</div><!-- reasons_grid -->
		
		
		
		
		
		<div class="reasons_grid desktop">
			
			
					<div class="single_reason">
						
						<div id="svg_1">
							
							<div class="svg_hover_wrapper">
							
								<img class="check_hover" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.png"/>
							
							</div><!-- svg_hover_wrapper -->


						</div><!-- svg_1 -->
						
				
						<span class="sm_red_line"></span><!-- sm_red_line -->
				
						<span class="large_header">test</span><!-- large_header -->
				
						<p>test</p>
				
			</div><!-- single_reason -->
			
			
			
			
					<div class="single_reason">
						
						
						<div id="svg_2">
							
							<div class="svg_hover_wrapper">
							
								<img class="check_hover" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.png"/>
							
							</div><!-- svg_hover_wrapper -->

							
						</div><!-- svg_2 -->
						
						
						<span class="sm_red_line"></span><!-- sm_red_line -->
				
						<span class="large_header">test</span><!-- large_header -->
				
						<p>test</p>
				
				
				</div><!-- single_reason -->





					<div class="single_reason">
						
						
						<div id="svg_3">
						
							<div class="svg_hover_wrapper">
							
								<img class="check_hover" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.png"/>
							
							</div><!-- svg_hover_wrapper -->
						
						
						</div><!-- svg_3 -->
						
										
						<span class="sm_red_line"></span><!-- sm_red_line -->
				
						<span class="large_header">test</span><!-- large_header -->
				
						<p>test</p>
				
				</div><!-- single_reason -->
			
			
				
				
				<div class="single_reason">
						
						
						<div id="svg_4">
							

							<div class="svg_hover_wrapper">
							
								<img class="check_hover" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.png"/>
							
							</div><!-- svg_hover_wrapper -->

							
						</div><!-- svg_4 -->
						
										
						<span class="sm_red_line"></span><!-- sm_red_line -->
				
						<span class="large_header">test</span><!-- large_header -->
				
						<p>test</p>
				
			
			</div><!-- single_reason -->
			
			
			<div class="single_reason">
						
						
						<div id="svg_5">
							

							<div class="svg_hover_wrapper">
							
								<img class="check_hover" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.png"/>
							
							</div><!-- svg_hover_wrapper -->

							
						</div><!-- svg_5 -->
						
										
						<span class="sm_red_line"></span><!-- sm_red_line -->
				
						<span class="large_header">test</span><!-- large_header -->
				
						<p>test</p>
				
			</div><!-- single_reason -->
			
			
			
			<div class="single_reason">
						
						
						<div id="svg_6">
							

							<div class="svg_hover_wrapper">
							
								<img class="check_hover" src="<?php bloginfo('template_directory');?>/images/sp_checkmark.png"/>
							
							</div><!-- svg_hover_wrapper -->


							
						</div><!-- svg_6 -->
						
										
						<span class="sm_red_line"></span><!-- sm_red_line -->
				
						<span class="large_header">test</span><!-- large_header -->
				
						<p>test</p>
				
			</div><!-- single_reason -->
			

		</div><!-- reasons_grid -->
		
	
	</div><!-- reasons_inner -->
	
</section><!-- reasons -->

<section class="addtional_about_content">
	

	
	<div class="col_1">
		
		<span class="large_header"><?php the_field('additonal_content_header');?></span><!-- large_header -->
		
		<div class="content">
		
			<?php the_field('additional_content');?>
		
		</div><!-- content -->
		
	</div><!-- col_1 -->
	
	<div class="col_2">
		
		<div class="video_wrapper">
			
			<img class="video_image" src="<?php the_field('additonal_video_thumb');?>" alt="Dallas W. Hartman Testimonial Video"/>
			<img class="play" src="<?php bloginfo('template_directory');?>/images/play.png"/>
			
			<div class="video_overlay"></div><!-- video_overlay -->
			
		</div><!-- video_wrapper -->
		
		<div class="blueline"></div><!-- blueline -->
		
		<div class="testimonial">
			
			<span class="large_header"><?php the_field('video_content_title');?></span><!-- large_header -->
			
			<p><?php the_field('video_content');?></p>
			
		</div><!-- testimonial -->
		
		<div class="more_clients">
			
			<a href="<?php the_field('view_more_testimonials_page_link');?>">
				
				<span><?php the_field('view_more_testimonials_verbiage');?></span>
				
				<div class="more_clients_img_wrapper">
				
					<img class="dark_blue_icon" src="<?php bloginfo('template_directory');?>/images/content_test_arrow.svg"/>
					<img class="light_blue_icon" src="<?php bloginfo('template_directory');?>/images/content_test_arrow_hover.svg"/>
				
				</div><!-- more_clients_img_wrapper -->
				
			</a>
			
		</div><!-- more_clients -->
		
	</div><!-- col_2 -->
	
</section><!-- addtional_about_content -->


<section class="community">
	
	<div class="give_back mymatch">
		
		
		<div class="give_back_inner">
		
			<div class="give_back_logo">
			
				<img src="<?php bloginfo('template_directory');?>/images/givebacklogo.png"/>
			
			</div><!-- give_back_logo -->
			
			
			<div class="give_back_lower_content">
			
			
				<span class="large_header_give_back"><?php the_field('dallas_gives_back_title');?></span><!-- large_header_give_back -->
				<span class="redline"></span><!-- redline -->
				
				
				<div class="headline_wrapper mobile">
				
					
					
					
				<?php $posts = get_field('dallas_gives_back');
					
					if( $posts ): ?>
					   
					    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
					        
					        
					        	<div class="headline">
						
											<a href="<?php the_permalink();?>">
							
												<div class="title_wrapper">
							
													<span class="title"><?php the_title();?></span><!-- title -->
													<span class="author">POSTED BY <?php the_author();?></span><!-- author -->
							
												</div><!-- title_wrapper -->
							
												<img class="arrow" src="<?php bloginfo('template_directory');?>/images/content_test_arrow_lightblue.svg"/>
						
											</a>
						
										</div><!-- headline -->
					        
					        
					    <?php endforeach; ?>
					    
					    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
					
					
					
					
				
				</div><!-- headline_wrapper -->
				
				
				
				<div class="headline_wrapper desktop">
				
					
					
					
					<?php $posts = get_field('dallas_gives_back');
					
					if( $posts ): ?>
					   
					    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
					        
					        
					        	<div class="headline">
						
											<a href="<?php the_permalink();?>">
							
												<div class="title_wrapper">
							
													<span class="title"><?php the_title();?></span><!-- title -->
													<span class="author">POSTED BY <?php the_author();?></span><!-- author -->
							
												</div><!-- title_wrapper -->
							
												<img class="arrow" src="<?php bloginfo('template_directory');?>/images/content_test_arrow_lightblue.svg"/>
						
											</a>
						
										</div><!-- headline -->
					        
					        
					    <?php endforeach; ?>
					    
					    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
					
					
					
					
					
				
				</div><!-- headline_wrapper -->

			
			</div><!-- give_back_lower_content -->
			
		
		</div><!-- give_back_inner -->
		
	
	</div><!-- give_back -->
	
	<div class="video_wrapper mymatch">
			
<!-- 			<img src="<?php bloginfo('template_directory');?>/images/community_image.jpg"/> -->
			
			
		</div><!-- video_wrapper -->
		
		<div style="clear:both"></div>
	
</section><!-- community -->

<section class="awards">
	
	
	<div class="awards_inner">
	
	
	
	
	<?php if(get_field('awards_slider')): ?>
	 
		<?php while(has_sub_field('awards_slider')): ?>
	 
			
			<div class="award_slide">
			
				<img src="<?php the_sub_field('awards_image');?>"/>
			
			</div><!-- award_slide -->

	    
		<?php endwhile; ?>
	 
	<?php endif; ?>
	
		
	
	
	</div><!-- awards_inner -->
	
	
</section><!-- awards -->


			

<?php get_footer(); ?>
