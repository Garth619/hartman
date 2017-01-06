
	<?php wp_footer(); ?>
	
	

<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick/slick.min.js"></script>
	
	<script type="text/javascript">
	
	jQuery(document).ready(function(){
	
		jQuery('.awards_inner').slick({
			arrows:false,
			slidesToShow: 4,
			dots:true,
			slidesToScroll: 1,
/*
			responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
*/
  });
	
	
	
	}); // document ready
	
	</script>

</body>
</html>
