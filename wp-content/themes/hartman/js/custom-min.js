jQuery(document).ready(function(){jQuery(".awards_inner").slick({arrows:!1,slidesToShow:4,dots:!0,slidesToScroll:1,responsive:[{breakpoint:1200,settings:{arrows:!1,slidesToShow:3,dots:!0,slidesToScroll:1}},{breakpoint:645,settings:{arrows:!1,slidesToShow:2,dots:!0,slidesToScroll:1}},{breakpoint:500,settings:{arrows:!1,slidesToShow:1,dots:!0,slidesToScroll:1}}]}),jQuery(".slide_wrapper.mobile").slick({arrows:!1,slidesToShow:1,dots:!0,slidesToScroll:1}),jQuery(".headline_wrapper.mobile").slick({arrows:!1,slidesToShow:1,dots:!0,slidesToScroll:1}),jQuery(".reasons_grid.mobile").slick({arrows:!1,slidesToShow:1,dots:!0,slidesToScroll:1}),jQuery(".practice_area_wrapper").slick({arrows:!1,slidesToShow:6,dots:!1,slidesToScroll:1,responsive:[{breakpoint:1300,settings:{arrows:!1,slidesToShow:3,dots:!1,slidesToScroll:3}},{breakpoint:790,settings:{arrows:!1,slidesToShow:2,dots:!1,slidesToScroll:2}},{breakpoint:545,settings:{arrows:!1,slidesToShow:1,dots:!1,slidesToScroll:1}}]}),$slick_slider=jQuery(".inner_case_wrapper"),settings={arrows:!1,slidesToShow:4,dots:!1,slidesToScroll:4,responsive:[{breakpoint:1775,settings:"unslick"},{breakpoint:730,settings:{arrows:!1,slidesToShow:1,dots:!1,slidesToScroll:1}}]},$slick_slider.slick(settings),jQuery(window).on("resize",function(){return jQuery(window).width()>730?void($slick_slider.hasClass("slick-initialized")&&$slick_slider.slick("unslick")):$slick_slider.hasClass("slick-initialized")?void 0:$slick_slider.slick(settings)}),jQuery(".sidebar ul.sub-menu").hide(),jQuery(".sidebar li.menu-item-has-children a").click(function(){jQuery(this).next("ul.sub-menu").slideToggle(200),jQuery(this).toggleClass("active")})});