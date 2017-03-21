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

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />


<style type="text/css">


.main_banner {
	background: rgba(0, 0, 0, 0) url(<?php the_field('main_banner_desktop_image');?>) no-repeat scroll center top / cover ;
}

.banner_wrapper {
	background: rgba(0, 0, 0, 0) url(<?php the_field('inner_banner_desktop_image','option');?>) no-repeat scroll center top / cover ;
}

@media screen and (max-width: 1200px) {
	
	.main_banner {
		background: rgba(0, 0, 0, 0) url(<?php the_field('main_banner_tablet_image');?>) no-repeat scroll center top;
	}



} /* Media Query */


@media screen and (max-width: 1090px) {


.banner_wrapper {
	background: rgba(0, 0, 0, 0) url(<?php the_field('inner_banner_tablet_image','option');?>) no-repeat scroll center top;
}

} /* Media Query */



@media screen and (max-width: 730px) {
	
	.main_banner {
		background: rgba(0, 0, 0, 0) url(<?php the_field('main_banner_mobile_image');?>) no-repeat scroll center top / cover ;
	}
	
} /* Media Query */


</style>

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29356247-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="application/ld+json">
{
     "@context": "http://schema.org",
     "@type": "Attorney",
     "name": "Dallas W. Hartman P.C., Attorneys at Law",
     "alternateName": " ",
         "description": "Pittsburgh Personal Injury Attorney",
     "url" : "http://www.dallashartman.com/",
     "logo" : "http://www.dallashartman.com/wp-content/uploads/2017/01/logo_hartman.png",
     "image" : "http://www.dallashartman.com/wp-content/uploads/2017/01/internal_bio_hartman-b.jpg",
     "telephone": " (412) 262-2888",
     "openingHours" : "Mo,Tu,We,Th,Fr 09:00-17:00",
     "hasMap": "https://www.google.com/maps/place/Dallas+W.+Hartman+P.C.,+Attorneys+at+Law/@40.438011,-79.998148,15z/data=!4m5!3m4!1s0x0:0xed2717d370b4a054!8m2!3d40.438011!4d-79.998148",
     "address":
          {
          "@type": "PostalAddress",
          "streetAddress": "One Oxford Centre, 301 Grant St #4300",
          "addressLocality": "Pittsburgh",
          "addressRegion": "PA",
          "postalCode": "15219",
          "addressCountry": "USA"
          },
     "sameAs": [
     "https://twitter.com/dallashartman",
     "http://www.linkedin.com/company/2358083",
     "https://www.facebook.com/DallasHelps",
     "https://plus.google.com/+Dallashartman"
     ]
}
</script>


</head>

<body <?php body_class(); ?>>



<header>
	

	
		<div class="logo_wrapper">
		
			<a href="<?php bloginfo('url');?>">
				
				<?php $imageID = get_field('logo','option'); ?>
				<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
				<?php $menu_one = wp_get_attachment_image_src(get_field('logo','option'), 'logosize'); ?>

				<img class="logo" src="<?php echo $menu_one[0]; ?>" alt="<?php echo $alt_text; ?>"/>
				
			</a>
		
		</div><!-- logo_wrapper -->
	
		
		<div class="header_col_right">
		
		
			<nav class="desktop">
	
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
	
			</nav>
			
			
		
			<div class="search_wrapper">
				
				<div class="inner_search_wrapper">
		
				<?php get_search_form(); ?>
				
			
			
				</div><!-- inner_search_wrapper -->
		
			</div><!-- search_wrapper -->
	
			
			<div class="my_sticky">
			
			<div class="free_consultation_wrapper">
		
				<span class="sub_header">Free Consultation</span><!-- sub_header -->
				<a class="large_header" href="tel:<?php the_field('dwh_phone_numer','option');?>"><?php the_field('dwh_phone_numer','option');?></a><!-- large_header -->
				
				
				
			
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


		
