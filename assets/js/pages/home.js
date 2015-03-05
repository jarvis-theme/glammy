define(['jquery','bootstrap','jq_flexslider','jq_carousel'], function($)
{
	return new function(){
		var self = this;
		self.run = function(){
			tovarView();
			flexsliderImg();
			iframeTransparent();
		};

		var tovarView = function(){
			/*-----------------------------------------------------------------------------------*/
			/*	MODAL TOVAR VIEW
			/*-----------------------------------------------------------------------------------*/
			$(window).load(function() {
				(function(){
					var container = $( "#modal-body" );
					var $items = $('.open-project-link');
					index = $items.length;
					$('.open-project-link').click(function(){
						$('#modal-body').addClass('modal-active');
						if ($(this).hasClass('active')){
						} 
						else { 
							lastIndex = index;
							index = $(this).index();
							$items.removeClass('active');
							$(this).addClass('active');
				
							var myUrl = $(this).find('.open-project').attr("href") + " .tover_view_page"; 
					  
							$('#tovar_content').animate({opacity:0},function(){
								$("#tovar_content").load(myUrl,function(e){
									
									//Tovar View Carousel
									$('#carousel1').flexslider({
										animation: "slide",
										controlNav: false,
										directionNav: false,
										animationLoop: false,
										slideshow: false,
										direction: "vertical",
										asNavFor: '#slider1'
									});
									$('#slider1').flexslider({
										animation: "fade",
										controlNav: false,
										directionNav: false,
										animationLoop: false,
										slideshow: false,
										sync: "#carousel1"
									});
									
									$('#carousel1 .slides li').click(function(){
										$('#carousel1 .slides li').removeClass('flex-active-slide');
										$(this).addClass('flex-active-slide');
										return false;
									});
									
									//fancySelect
									$('.basic').fancySelect();
									
								});
								$('#tovar_content').animate({opacity:1});
							});
							
					    
							//Project Page Open
							$('#modal-body').show(function(){
								$('#tovar_content');}).show(2000,function(){
									$('.element_fade_in').each(function (){
										$(this).appear(function(){
											$(this).delay(100).animate({opacity:1,right:"0px"},1000);
										});	
									});
								});
						} return false;       
					});
				
					//Project Page Close
					$(document).on('click', '#tover_view_page_close, .close_block', function(event) {
						$('#tovar_content').animate({opacity:0}, 400,function(){	
							$('#modal-body').removeClass('modal-active').hide(400);
						});
						
						$items.removeClass('active');
						return false;
					});
				
				})();
			});	    	
	    }

		var flexsliderImg = function(){
			/*-----------------------------------------------------------------------------------*/
			/*	FLEXSLIDER
			/*-----------------------------------------------------------------------------------*/
			$(window).load(function(){
				//Top Slider
				$('.flexslider.top_slider').flexslider({
					animation: "fade",
					controlNav: true,
					directionNav: false,
					prevText: "",
					nextText: ""
				});
				
				//Top Slider BG
				$('.flexslider.top_slider li img.slide_bg').each(function(){
					$(this).parent().attr('style', 'background-image:url('+$(this).attr('src')+');');		
				});
				
				//Tovar View Carousel
				$('#carousel2').flexslider({
					animation: "slide",
					controlNav: false,
					directionNav: false,
					animationLoop: false,
					slideshow: false,
					direction: "vertical",
					asNavFor: '#slider2'
				});
				$('#slider2').flexslider({
					animation: "fade",
					controlNav: false,
					directionNav: false,
					animationLoop: false,
					slideshow: false,
					sync: "#carousel2"
				});
				$('#carousel2 .slides li').click(function(){
					$('#carousel2 .slides li').removeClass('flex-active-slide');
					$(this).addClass('flex-active-slide');
					return false;
				});
					
				//Article Slider
				$('.flexslider.article_slider').flexslider({
					animation: "fade",
					controlNav: true,
					directionNav: false,
					prevText: "",
					nextText: ""
				});
			});
		};

		var iframeTransparent = function(){
			/*-----------------------------------------------------------------------------------*/
			/*	IFRAME TRANSPARENT
			/*-----------------------------------------------------------------------------------*/
			$(document).ready(function() {
				$("iframe").each(function(){
					var ifr_source = $(this).attr('src');
					var wmode = "wmode=transparent";
					if(ifr_source.indexOf('?') != -1) {
					var getQString = ifr_source.split('?');
					var oldString = getQString[1];
					var newString = getQString[0];
					$(this).attr('src',newString+'?'+wmode+'&'+oldString);
					}
					else $(this).attr('src',ifr_source+'?'+wmode);
				});
			});	
		};
	}
});