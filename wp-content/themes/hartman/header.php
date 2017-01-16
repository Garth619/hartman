<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory');?>/fonts/montserrat/stylesheet.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory');?>/fonts/utopia/demo-async.css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick/slick.css"/>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick/slick-theme.css"/>


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>



<header>
	

	
		<div class="logo_wrapper">
		
			<a href="<?php bloginfo('url');?>"><img class="logo" src="<?php bloginfo('template_directory');?>/images/logo_hartman.png"/></a>
		
		</div><!-- logo_wrapper -->
	
		
		<div class="header_col_right">
		
		
			<nav class="desktop">
	
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
	
			</nav>
			
			
		
			<div class="search_wrapper">
		
				<?php get_search_form(); ?>
			
<!-- 			<input type="text" onfocus="if(this.value=='<?php _e( 'Search here..' ); ?>'){this.value='';}" onblur="if(this.value==''){this.value='<?php _e( 'Search here..' ); ?>';}" value="<?php _e( 'Search here..' ); ?>"> -->
		
			</div><!-- search_wrapper -->
	
			
			<div class="my_sticky">
			
			<div class="free_consultation_wrapper">
		
				<span class="sub_header">Free Consultation</span><!-- sub_header -->
				<a class="large_header" href="tel:866.586.1910">866.586.1910</a><!-- large_header -->
			
			</div><!-- free_consultation_wrapper -->
			
			
			
			<div class="mobile_wrapper">
				
				<div class="mobile_bar"></div>
				<div class="mobile_bar"></div>
				<div class="mobile_bar"></div>
				
				<span>Menu</span>
				
			</div><!-- mobile_wrapper -->
			
			</div><!-- my_sticky -->
		
		</div><!-- header_col_right -->
	
		
	
</header>


		