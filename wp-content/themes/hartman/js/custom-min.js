jQuery(document).ready(function(){function e(){jQuery(window).width()<1200?jQuery("nav.desktop li.menu-item-has-children a").click(function(){jQuery(this).next("ul.sub-menu").toggleClass("slide")}):jQuery("nav.desktop li.menu-item-has-children a").click(function(){jQuery("ul.sub-menu").removeClass("active"),jQuery(this).next("ul.sub-menu").addClass("active")})}var i=new Waypoint.Sticky({element:jQuery(".my_sticky")[0]});jQuery(".awards_inner").slick({arrows:!1,slidesToShow:4,dots:!0,slidesToScroll:1,responsive:[{breakpoint:1200,settings:{arrows:!1,slidesToShow:3,dots:!0,slidesToScroll:1}},{breakpoint:645,settings:{arrows:!1,slidesToShow:2,dots:!0,slidesToScroll:1}},{breakpoint:500,settings:{arrows:!1,slidesToShow:1,dots:!0,slidesToScroll:1}}]}),jQuery(".slide_wrapper.mobile").slick({arrows:!1,slidesToShow:1,dots:!0,slidesToScroll:1}),jQuery(".headline_wrapper.mobile").slick({arrows:!1,slidesToShow:1,dots:!0,slidesToScroll:1}),jQuery(".reasons_grid.mobile").slick({arrows:!1,slidesToShow:1,dots:!0,slidesToScroll:1}),jQuery(".practice_area_wrapper").slick({arrows:!1,slidesToShow:6,dots:!1,slidesToScroll:1,responsive:[{breakpoint:1300,settings:{arrows:!1,slidesToShow:3,dots:!1,slidesToScroll:3}},{breakpoint:790,settings:{arrows:!1,slidesToShow:2,dots:!1,slidesToScroll:2}},{breakpoint:545,settings:{arrows:!1,slidesToShow:1,dots:!1,slidesToScroll:1}}]}),$slick_slider=jQuery(".inner_case_wrapper"),settings={arrows:!1,slidesToShow:4,dots:!1,slidesToScroll:4,responsive:[{breakpoint:1775,settings:"unslick"},{breakpoint:730,settings:{arrows:!1,slidesToShow:1,dots:!1,slidesToScroll:1}}]},$slick_slider.slick(settings),jQuery(window).on("resize",function(){return jQuery(window).width()>730?void($slick_slider.hasClass("slick-initialized")&&$slick_slider.slick("unslick")):$slick_slider.hasClass("slick-initialized")?void 0:$slick_slider.slick(settings)}),jQuery(".svg_hover_wrapper").hide(),jQuery(".single_reason").mouseenter(function(){jQuery(this).find("img.mobile_reasons_checkmark").hide(),jQuery(this).find("svg.mycheckmark").fadeOut(200),jQuery(this).find(".svg_hover_wrapper").fadeIn(200),jQuery(this).find(".svg_hover_wrapper").addClass("svg_delay")}),jQuery(".single_reason").mouseleave(function(){jQuery(this).find("img.mobile_reasons_checkmark").fadeIn(500),jQuery(this).find("svg.mycheckmark").fadeIn(200),jQuery(this).find(".svg_hover_wrapper").fadeOut(200),jQuery(".svg_hover_wrapper").removeClass("svg_delay")}),jQuery(".sidebar li.menu-item-has-children a").click(function(){jQuery(this).next("ul.sub-menu").slideToggle(200),jQuery(this).toggleClass("active")}),jQuery("img.play_hover").hide(),jQuery(".inner_banner .video_wrapper").mouseenter(function(){jQuery("img.play_reg").fadeOut(200),jQuery("img.play_hover").fadeIn(200)}),jQuery(".inner_banner .video_wrapper").mouseleave(function(){jQuery("img.play_reg").fadeIn(200),jQuery("img.play_hover").fadeOut(200)}),jQuery("img.icon_hover").hide(),jQuery(".social_icon").mouseenter(function(){jQuery(this).find("img.play_reg").fadeOut(200),jQuery(this).find("img.icon_hover").fadeIn(200)}),jQuery(".social_icon").mouseleave(function(){jQuery(this).find("img.play_reg").fadeIn(200),jQuery(this).find("img.icon_hover").fadeOut(200)}),jQuery(".mobile_wrapper").click(function(){jQuery("nav.desktop").slideDown()}),jQuery("<li class='search'><a>Search</a></li>").insertAfter("nav.desktop ul.menu li:last-of-type"),jQuery("<div class='close_wrapper'><div class='x_first'></div><div class='x_second'></div></div>").insertBefore("nav.desktop ul.menu"),jQuery(".close_wrapper").click(function(){jQuery("nav.desktop").slideUp()}),jQuery("<div class='search_close_wrapper'><div class='x_first'></div><div class='x_second'></div></div>").insertBefore(".inner_search_wrapper form"),jQuery("li.search").click(function(){jQuery(".search_wrapper").slideDown(),jQuery("html, body").addClass("fixed")}),jQuery(".search_close_wrapper").click(function(){jQuery(".search_wrapper").slideUp(),jQuery("html, body").removeClass("fixed")}),jQuery('.inner_search_wrapper input[type="text"]').click(function(){}),e(),jQuery(function(){jQuery('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=jQuery(this.hash);if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return jQuery("html, body").animate({scrollTop:e.offset().top},600),!1}})}),jQuery("img.light_blue_icon").hide(),jQuery(".more_clients").mouseenter(function(){jQuery("img.dark_blue_icon").fadeOut(200),jQuery("img.light_blue_icon").fadeIn(200)}),jQuery(".more_clients").mouseleave(function(){jQuery("img.light_blue_icon").fadeOut(200),jQuery("img.dark_blue_icon").fadeIn(200)}),jQuery(".video_thumb .video_thumb_overlay").hide(),jQuery(".video_wrapper .video_thumb").mouseenter(function(){jQuery(this).children(".video_thumb_overlay").fadeIn(300)}),jQuery(".video_wrapper .video_thumb").mouseleave(function(){jQuery(this).children(".video_thumb_overlay").fadeOut(300)}),jQuery(".col_2 .video_wrapper .video_overlay").hide(),jQuery(".col_2 .video_wrapper").mouseenter(function(){jQuery(this).find(".video_overlay").fadeIn(300)}),jQuery(".col_2 .video_wrapper").mouseleave(function(){jQuery(this).find(".video_overlay").fadeOut(300)}),jQuery(".case_results .single_case_results:nth-of-type(3)").addClass("case_results_active"),jQuery(".case_results .inner_case_wrapper").mouseenter(function(){jQuery(".case_results .single_case_results:nth-of-type(3)").removeClass("case_results_active")});var s=new Waypoint({element:document.getElementById("location_trigger"),handler:function(e){}});(new WOW).init(),jQuery(".mymatch").matchHeight(),jQuery(".video_page_overlay").hide(),jQuery(".video_link").mouseenter(function(){jQuery(this).find(".video_page_overlay").fadeIn(200)}),jQuery(".video_link").mouseleave(function(){jQuery(this).find(".video_page_overlay").fadeOut(200)})});