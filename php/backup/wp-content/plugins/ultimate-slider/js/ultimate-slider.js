jQuery(document).ready(function(){


	//enable carousel slider styling and set title animation
	jQuery('.ewd-slider-section .slider').each(function(){
		var sliderThisAgain = jQuery(this);
		if(sliderThisAgain.find('.carouselSlider').length != 0){
			jQuery('.ewd-slider-section .slider').addClass('carouselArrows');
		}

		if(ewd_us_php_data.title_animate == 'SlideFromLeft' || ewd_us_php_data.title_animate == 'SlideFromRight'){
			sliderThisAgain.find('.ewd-slide .slideText .slideTitle').hide();
		}
		if(ewd_us_php_data.title_animate == 'FadeIn'){
			sliderThisAgain.find('.ewd-slide .slideText .slideTitle').fadeTo(50, .1);
		}
		if(ewd_us_php_data.title_animate == 'ScrollDown'){
			sliderThisAgain.find('.ewd-slide .slideText .slideTitle').slideUp(10);
		}
		if(ewd_us_php_data.title_animate == 'SlideFromLeft'){
			sliderThisAgain.find('.ewd-slide .slideText .slideTitle').delay(400).show("slide", { direction: "left" }, 1000);
		}
		if(ewd_us_php_data.title_animate == 'SlideFromRight'){
			sliderThisAgain.find('.ewd-slide .slideText .slideTitle').delay(400).show("slide", { direction: "right" }, 1000);
		}
		if(ewd_us_php_data.title_animate == 'FadeIn'){
			sliderThisAgain.find('.ewd-slide .slideText .slideTitle').delay(500).fadeTo(1500, 1);
		}
		if(ewd_us_php_data.title_animate == 'ScrollDown'){
			sliderThisAgain.find('.ewd-slide .slideText .slideTitle').delay(500).slideDown(1200);
		}
	});
	//enable carousel slider styling and set title animation


	jQuery('.ewd-slide').each(function(index, el) {
		jQuery(this).removeClass('ewd-us-hidden');
	});

	jQuery('.ewd-us-meta-menu-item').on('click', function() {
		var ID = jQuery(this).attr('id');
		var ID_Base = ID.substring(5);

		jQuery(".ewd-us-meta-body").each(function() {
			jQuery(this).addClass("ewd-us-hidden");
		});
		jQuery('#Body_'+ID_Base).removeClass("ewd-us-hidden");

		jQuery(".ewd-us-meta-menu-item").each(function() {
			jQuery(this).removeClass("meta-menu-tab-active");
		});
		jQuery(this).addClass("meta-menu-tab-active");
	});


	/////////////////////////////
	/////////TIMER BAR///////////
	/////////////////////////////
	jQuery('.ewd-slider-section').each(function(){

		var sliderThisAgainAgain = jQuery(this);
		var delayTime = ewd_us_php_data.autoplay_delay * 1000;
		var intervalTime = ewd_us_php_data.autoplay_interval * 1000;
		var firstLoopTime = delayTime + intervalTime;
		var terminate;

		if(ewd_us_php_data.timer_bar == 'Off'){
			sliderThisAgainAgain.find('#timerBar').css('height', '0');
		}

		function firstLoop(){
			if (terminate){
				return;
			}
			sliderThisAgainAgain.find('#innerTimerBar').css('width', '0%');
			sliderThisAgainAgain.find('#innerTimerBar').animate({
					width: '+=100%'
				}, firstLoopTime, 'linear', function(){
					loop();
				}
			);
		}

		function loop(){
			if (terminate){
				return;
			}
			sliderThisAgainAgain.find('#innerTimerBar').css('width', '0%');
			sliderThisAgainAgain.find('#innerTimerBar').animate({
					width: '+=100%'
				}, intervalTime, 'linear', function(){
					loop();
				}
			);
		}

		firstLoop();

		sliderThisAgainAgain.find('.nav-arrow').click(function(){
			terminate=true;
			sliderThisAgainAgain.find('#timerBar').css('height', '0');
		});
		sliderThisAgainAgain.find('.ewd-slider-control-thumbnail').click(function(){
			terminate=true;
			sliderThisAgainAgain.find('#timerBar').css('height', '0');
		});
		sliderThisAgainAgain.find('.ewd-slider-control-button').click(function(){
			terminate=true;
			sliderThisAgainAgain.find('#timerBar').css('height', '0');
		});

	}); //END EACH SLIDER

	//Thumbnail IMG clicks
	jQuery('.ewd-slider-control-thumbnail').on('click', function() {
		clearInterval(ewd_slider.interval);
		SlideTransition(jQuery(this).data('slidenumber'), true);
	});

	//Stop slider on video play
	jQuery('.ewd-us-video').iframeTracker({
		blurCallback: function(){
			clearInterval(ewd_slider.interval);
		},
	});

	if (ewd_us_php_data.lightbox == "Yes") {
		/*jQuery('.slider-window').lightGallery({
			thumbnail:true
		});*/

		jQuery(".slideTitle a, .slideExcerpt a, .ewd-us-slide-button").click(function (e) {
		    e.stopPropagation();
		});
	}


	// center lightbox image on click
	jQuery('.ewd-slide').click(function(){
		jQuery('.lg-img-wrap').each(function(){
			var thisLightbox = jQuery(this);
			var lightboxWidth = thisLightbox.width();
			var lightboxImageWidth = thisLightbox.find('img').width();
			var lightboxImageMargin = (lightboxWidth - lightboxImageWidth) / 2;
			thisLightbox.find('img').css('margin-left', lightboxImageMargin+'px');
		});
	});
	jQuery('.lg-thumb-item').click(function(){
		jQuery('.lg-img-wrap').each(function(){
			var thisLightboxTwo = jQuery(this);
			var lightboxWidthTwo = thisLightboxTwo.width();
			var lightboxImageWidthTwo = thisLightboxTwo.find('img').width();
			var lightboxImageMarginTwo = (lightboxWidthTwo - lightboxImageWidthTwo) / 2;
			thisLightboxTwo.find('img').css('margin-left', lightboxImageMarginTwo+'px');
		});
	});

}); //END DOCUMENT READY

jQuery(document).ready(function() {
	SetButtonDeleteHandlers();
	SetButtonDisableHandlers();

	jQuery('.ewd-us-add-button-list-item').on('click', function(event) {
		var ID = jQuery(this).data('nextid');

		var HTML = "<tr id='ewd-us-button-list-item-" + ID + "'>";
		HTML += "<td><a class='ewd-us-delete-button-list-item' data-buttonid='" + ID + "'>Delete</a></td>";
		HTML += "<td><input type='text' name='Button_List_" + ID + "_Text'></td>";
		HTML += "<td><select name='Button_List_" + ID + "_Post_ID' class='ewd-us-post-select' id='ewd-us-post-select-" + ID + "'><option value='0'>Custom Link</option></select></td>";
		HTML += "<td><input type='text' name='Button_List_" + ID + "_Custom_Link' id='ewd-us-post-link-" + ID + "'></td>";
		HTML += "</tr>";

		//jQuery('table > tr#ewd-uasp-add-reminder').before(HTML);
		jQuery('#ewd-us-buttons-list-table tr:last').before(HTML);

		AJAXPostIDs("#ewd-us-post-select-" + ID);

		ID++;
		jQuery(this).data('nextid', ID); //updates but doesn't show in DOM

		SetButtonDeleteHandlers();
		SetButtonDisableHandlers();

		event.preventDefault();
	});
});

function SetButtonDeleteHandlers() {
	jQuery('.ewd-us-delete-button-list-item').on('click', function(event) {
		var ID = jQuery(this).data('buttonid');
		var tr = jQuery('#ewd-us-button-list-item-'+ID);

		tr.fadeOut(400, function(){
            tr.remove();
        });

		event.preventDefault();
	});
}

function SetButtonDisableHandlers() {
	jQuery('.ewd-us-post-select').on('change', function() {
		var Full_ID = jQuery(this).attr('id');
		var ID = Full_ID.substring(19);

		if (jQuery(this).val() != 0) {
			jQuery('#ewd-us-post-link-'+ID).prop('disabled', true);
		}
		else {
			jQuery('#ewd-us-post-link-'+ID).prop('disabled', false);
		}
	})
}

function AJAXPostIDs(selectID) {
	var data = '&action=ewd_us_get_post_ids';
    jQuery.post(ajaxurl, data, function(response) {
		response = response.substring(0, response.length - 1);
		var posts_array = jQuery.parseJSON(response);
		jQuery(posts_array).each(function(index, post) {
			//console.log('post', post);
			jQuery(selectID).append("<option value='"+post.ID+"'>"+post.Name+"</option>");
		});
    });
}


// MAIN FUNCTION CALLS
jQuery(document).ready(function() {
	onResizeSliderText();
	slideMain(ewd_us_php_data.slide_transition_effect, ewd_us_php_data.autoplay_delay, ewd_us_php_data.autoplay_interval, ewd_us_php_data.transition_time);

	jQuery(window).bind('resize', onResizeSliderText);
	jQuery(window).bind('resize', slideResize);
});

var ewd_slider = {slide :"1", slidecount : "0", transitionType : "slide", interval : "", fadeTime : "800", transitionTime : ""};

function slideMain(transitionType, delay, autoplayInterval, transitionTime)
  {
    ewd_slider.slide = 0;
    jQuery(".ewd-slider-section .slider ul.slider-window li.ewd-slide:nth-child(1)").addClass('ewd-slider-main');
    ewd_slider.transitionType = transitionType;

    if(transitionType != "slide")
    {
    	jQuery("li.ewd-slide").css('float', 'none');
    	jQuery("li.ewd-slide").css('position', 'absolute');
    }

    if(transitionTime != "" && transitionTime > 0)
    {
    	   jQuery('.ewd-slide').css({
                'animation-duration' : (transitionTime + 's'),
                '-webkit-animation-duration' : (transitionTime + 's'),
            });
    	   ewd_slider.transitionTime = transitionTime;
    	   ewd_slider.fadeTime = (transitionTime * 100);
    }

    slideResize();
	initSlideButtons();
	if (ewd_us_php_data.autoplay_slideshow  == "Yes") {slideAutoPlay(delay*1000, autoplayInterval*1000);}
  };

 function slideAutoPlay(delay, interval)
 {
	setTimeout(function() {
	  ewd_slider.interval =
	  setInterval(function() {
		Slide(1);
		}, interval);
	}, delay);
 }

function initSlideButtons()
{
   //Init Buttons
   for( i = 0; i < ewd_slider.slidecount; i++)
   {
    jQuery(".ewd-slider-control-button-list").append("<div class='ewd-slider-control-button ewd-slider-control-button-" + i + "'><span class='ewd-slider-control-click' onclick='clearInterval(ewd_slider.interval); SlideTransition(" + i + ",true)'></span></div>");
   }
    jQuery(".ewd-slider-control-button-0 span").addClass("ewd-slide-button-active");
    jQuery('#left').click(function() { clearInterval(ewd_slider.interval); Slide('-1'); });
    jQuery('#right').click(function() { clearInterval(ewd_slider.interval); Slide('1'); });
}

function slideResize(){
	jQuery('.ewd-slider-section').each(function(){
		var sliderThisFive = jQuery(this);
		var sliderWidthFive = sliderThisFive.width();
		var numberOfThumbs = sliderThisFive.find('.ewd-slider-control-thumbnail').length;
		var thumbsWidth = (numberOfThumbs * 100) + ( (numberOfThumbs - 1) * 8 );
		var thumbsMargin = (sliderWidthFive - thumbsWidth) / 2;
		sliderThisFive.find('.ewd-slider-control-thumbnail').first().css('margin-left', thumbsMargin+'px');
	});
	jQuery('.ewd-slider-section .slider').each(function(){
		var sliderThisFour = jQuery(this);
		var SliderWidth = sliderThisFour.width();
		var SlideCount = sliderThisFour.find('.ewd-slide').length;
		sliderThisFour.find('.ewd-slide').css('width', SliderWidth+'px');
		sliderThisFour.find('.ewd-slide').css('height', sliderThisFour.height() +'px');
		if(sliderThisFour.find('.carouselSlider').length != 0){
			if(ewd_us_php_data.carousel_columns == '2'){
				sliderThisFour.find('.ewd-slide.carouselSlider').css('width', (SliderWidth * .48)+'px');
				if(ewd_us_php_data.carousel_advance == 'Full'){
					SlideCount = Math.ceil(SlideCount / 2);
				}
				else{
					SlideCount = SlideCount - 1;
				}
			}
			if(ewd_us_php_data.carousel_columns == '3'){
				sliderThisFour.find('.ewd-slide.carouselSlider').css('width', (SliderWidth * .313)+'px');
				if(ewd_us_php_data.carousel_advance == 'Full'){
					SlideCount = Math.ceil(SlideCount / 3);
				}
				else{
					SlideCount = SlideCount - 2;
				}
			}
			if(ewd_us_php_data.carousel_columns == '4'){
				sliderThisFour.find('.ewd-slide.carouselSlider').css('width', (SliderWidth * .23)+'px');
				if(ewd_us_php_data.carousel_advance == 'Full'){
					SlideCount = Math.ceil(SlideCount / 4);
				}
				else{
					SlideCount = SlideCount - 3;
				}
			}
		}
		sliderThisFour.find('.ewd-slide.carouselSlider').css('height', ( sliderThisFour.find('.ewd-slide.carouselSlider').width() * EWD_US_Get_Aspect_Ratio() )+'px');
		sliderThisFour.find('.ewd-slide.carouselSlider').css('margin', '0 '+( SliderWidth / 100 )+'px');

		if(ewd_slider.transitionType == 'slide'){
			var SlideWidth = SlideCount * SliderWidth;
			sliderThisFour.find('ul.slider-window').css('width',SlideWidth+'px');
		}

		if(ewd_slider.transitionType == 'slide'){
			var $sliderwidth = sliderThisFour.width();
			var $margin = $sliderwidth * ewd_slider.slide;
			sliderThisFour.find('ul.slider-window').css('transform','translate3d(-'+$margin+'px,0px,0px)');
			sliderThisFour.find('ul.slider-window').css({
				'transform' : ('translate3d(-'+$margin+'px,0px,0px)'),
				'-webkit-transform' :  ('translate3d(-'+$margin+'px,0px,0px)'),
				'-moz-transform' :  ('translate3d(-'+$margin+'px,0px,0px)'),
				'-ms-transform' :  ('translate3d(-'+$margin+'px,0px,0px)'),
				'-o-transform' :  ('translate3d(-'+$margin+'px,0px,0px)')
			});
		}

		ewd_slider.slidecount = SlideCount;
	}); //each slider
}

function EWD_US_Get_Aspect_Ratio() {
	if (jQuery(window).width() >= 568) {var aspect_ratio = ewd_us_php_data.aspect_ratio;}
	else {var aspect_ratio = ewd_us_php_data.mobile_aspect_ratio;}

	return aspect_ratio;
}

function onResizeSliderText(){

	// center lightbox image
	jQuery('.lg-img-wrap').each(function(){
		var thisLightbox = jQuery(this);
		var lightboxWidth = thisLightbox.width();
		var lightboxImageWidth = thisLightbox.find('img').width();
		var lightboxImageMargin = (lightboxWidth - lightboxImageWidth) / 2;
		thisLightbox.find('img').css('margin-left', lightboxImageMargin+'px');
	});

	// rest of slider on resize
	jQuery('.ewd-slider-section .slider').each(function(){
		var sliderThis = jQuery(this);
		var sliderWidth = sliderThis.width();
		var sliderHeight = sliderWidth * EWD_US_Get_Aspect_Ratio();
		sliderThis.find('.ewd-slide').each(function(){
			var slideThis = jQuery(this);
			if( slideThis.hasClass('ewd-us-video') || slideThis.hasClass('ewd-us-hiddenewd-us-video') ){
				var sliderTextMargin = 24;
				var sliderTextMarginMobile = 24;
			}
			else{
				var sliderTextMargin = sliderHeight / 3;
				var sliderTextMarginMobile = sliderHeight / 4;
			}
			if( sliderWidth < 900 ){
				slideThis.find('.slideText').css('margin-top', sliderTextMarginMobile+'px');
			}
			else{
				slideThis.find('.slideText').css('margin-top', sliderTextMargin+'px');
			}
		});
		var sliderArrowHeight = sliderThis.find('.ewd-us-arrow-div ').outerHeight();
		if(sliderThis.find('.carouselSlider').length != 0){
			if(ewd_us_php_data.carousel_columns == '2'){
				var sliderArrowMargin = ( (sliderHeight * .48) - sliderArrowHeight) / 2;
			}
			if(ewd_us_php_data.carousel_columns == '3'){
				var sliderArrowMargin = ( (sliderHeight * .313) - sliderArrowHeight) / 2;
			}
			if(ewd_us_php_data.carousel_columns == '4'){
				var sliderArrowMargin = ( (sliderHeight * .23) - sliderArrowHeight) / 2;
			}
		}
		else{
			var sliderArrowMargin = (sliderHeight - sliderArrowHeight) / 2;
		}
		if(sliderThis.find('.carouselSlider').length != 0){
			if(ewd_us_php_data.carousel_columns == '2'){
				sliderThis.css('height', (sliderHeight * .48)+'px');
			}
			if(ewd_us_php_data.carousel_columns == '3'){
				sliderThis.css('height', (sliderHeight * .313)+'px');
			}
			if(ewd_us_php_data.carousel_columns == '4'){
				sliderThis.css('height', (sliderHeight * .23)+'px');
			}
		}
		else{
			sliderThis.css('height', sliderHeight+'px');
		}
		sliderThis.find('.ewd-us-arrow-div').css('margin-top', sliderArrowMargin+'px');
		if(sliderWidth <= 959){
			sliderThis.find('.ewd-slide .slideText .slideTitle').css('font-size', '2.5rem');
			//sliderThis.find('.ewd-slide .slideText .slideExcerpt').hide();
		}
		if(sliderWidth <= 768){
			sliderThis.find('.ewd-slide .slideText .slideTitle').css('font-size', '2rem');
		}
		if(sliderWidth <= 568){
			sliderThis.find('.ewd-slide .slideText .slideTitle').css('font-size', '1.5rem');
			//sliderThis.find('.ewd-slide .slideText ul.slideButtons').hide();
		}
		if(sliderWidth > 568){
			sliderThis.find('.ewd-slide .slideText .slideTitle').css('font-size', '2rem');
			//sliderThis.find('.ewd-slide .slideText ul.slideButtons').show();
		}
		if(sliderWidth > 768){
			sliderThis.find('.ewd-slide .slideText .slideTitle').css('font-size', '2.5rem');
		}
		if(sliderWidth > 959){
			sliderThis.find('.ewd-slide .slideText .slideTitle').css('font-size', '3.5rem');
			//sliderThis.find('.ewd-slide .slideText .slideExcerpt').show();
		}
	});
	jQuery(".ewd-slider-section .slider .nav-arrow").css('height', jQuery(".ewd-slider-section .slider").height());
}

function Slide(direction)
    {
    if (direction == '-1') { var target = ewd_slider.slide - 1; }
    if (direction == '1') { var target = ewd_slider.slide + 1; }

    if (target == -1) { SlideTransition(ewd_slider.slidecount-1, true); }
    else if (target == ewd_slider.slidecount) { SlideTransition(0, true); }
    else { SlideTransition(target, true); }
    }

function SlideTransition(target, ease)
  {
  	//no easing on window resize
    if(ease)
    {
        jQuery('.ewd-slider-section .slider ul.slider-window').addClass('slider-ease-transition');
		jQuery('.ewd-slider-section .slider ul.slider-window').css({
		  		'transition' : 'transform ' + (ewd_slider.transitionTime + 's'),
	          '-webkit-transition' : 'transform ' + (ewd_slider.transitionTime + 's'),
	          '-moz-transition' : 'transform ' + (ewd_slider.transitionTime + 's'),
	          '-o-transition' : 'transform ' + (ewd_slider.transitionTime + 's')
	      });
        jQuery(".ewd-slider-section .slider ul.slider-window").on(
            "transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd",
            function() {
                jQuery(this).removeClass("slider-ease-transition");
                jQuery(this).css({
		  		 'transition' : '',
	         	 '-webkit-transition' : '',
	         	 '-moz-transition' : '',
	        	  '-o-transition' : ''
	      });
            }
        );
    }


	//apply transition if target is different than current slide
	if(ewd_slider.slide != target)
	{
		 	var nextSlide = target+1;
		    if(ewd_slider.transitionType == 'slide')
		    {
			 	var $sliderwidth = jQuery('.ewd-slider-section .slider').width();
			    var $margin = $sliderwidth * target;
			    jQuery(".ewd-slider-section .slider ul.slider-window li.ewd-slide:nth-child("+nextSlide+")").addClass('ewd-slider-main');
					if(jQuery('.carouselSlider').length == 0 || ewd_us_php_data.carousel_advance == 'Full'){
						if(jQuery('.slideTitle.ewd-us-mobile-hide').length == 0 || jQuery(window).width() >= 568){
							if(ewd_us_php_data.title_animate == 'SlideFromLeft' || ewd_us_php_data.title_animate == 'SlideFromRight'){
								jQuery('.ewd-slider-section .slider .ewd-slide .slideText .slideTitle').hide();
							}
							if(ewd_us_php_data.title_animate == 'FadeIn'){
								jQuery('.ewd-slider-section .slider .ewd-slide .slideText .slideTitle').fadeTo(50, .1);
							}
							if(ewd_us_php_data.title_animate == 'ScrollDown'){
								jQuery('.ewd-slider-section .slider .ewd-slide .slideText .slideTitle').slideUp(10);
							}
							jQuery('.ewd-slider-section .slider ul.slider-window').css('transform','translate3d(-'+$margin+'px,0px,0px)');
							jQuery('.ewd-slider-section .slider ul.slider-window').css({
								'transform' : ('translate3d(-'+$margin+'px,0px,0px)'),
								'-webkit-transform' :  ('translate3d(-'+$margin+'px,0px,0px)'),
								'-moz-transform' :  ('translate3d(-'+$margin+'px,0px,0px)'),
								'-ms-transform' :  ('translate3d(-'+$margin+'px,0px,0px)'),
								'-o-transform' :  ('translate3d(-'+$margin+'px,0px,0px)')
							});
							if(ewd_us_php_data.title_animate == 'SlideFromLeft'){
								jQuery('.ewd-slider-section .slider .ewd-slide .slideText .slideTitle').delay(400).show("slide", { direction: "left" }, 1000);
							}
							if(ewd_us_php_data.title_animate == 'SlideFromRight'){
								jQuery('.ewd-slider-section .slider .ewd-slide .slideText .slideTitle').delay(400).show("slide", { direction: "right" }, 1000);
							}
							if(ewd_us_php_data.title_animate == 'FadeIn'){
								jQuery('.ewd-slider-section .slider .ewd-slide .slideText .slideTitle').delay(500).fadeTo(1500, 1);
							}
							if(ewd_us_php_data.title_animate == 'ScrollDown'){
								jQuery('.ewd-slider-section .slider .ewd-slide .slideText .slideTitle').delay(500).slideDown(1200);
							}
						}
						else{
							jQuery('.ewd-slider-section .slider .ewd-slide .slideText .slideTitle').hide();
						}
					}
					else{
						if(ewd_us_php_data.carousel_columns == '2'){
							var $margin2col = $margin / 2;
							jQuery('.carouselArrows ul.slider-window').css('transform','translate3d(-'+$margin2col+'px,0px,0px)');
							jQuery('.carouselArrows ul.slider-window').css({
								'transform' : ('translate3d(-'+$margin2col+'px,0px,0px)'),
								'-webkit-transform' :  ('translate3d(-'+$margin2col+'px,0px,0px)'),
								'-moz-transform' :  ('translate3d(-'+$margin2col+'px,0px,0px)'),
								'-ms-transform' :  ('translate3d(-'+$margin2col+'px,0px,0px)'),
								'-o-transform' :  ('translate3d(-'+$margin2col+'px,0px,0px)')
							});
						}
						if(ewd_us_php_data.carousel_columns == '3'){
							var $margin3col = $margin / 3;
							jQuery('.carouselArrows ul.slider-window').css('transform','translate3d(-'+$margin3col+'px,0px,0px)');
							jQuery('.carouselArrows ul.slider-window').css({
								'transform' : ('translate3d(-'+$margin3col+'px,0px,0px)'),
								'-webkit-transform' :  ('translate3d(-'+$margin3col+'px,0px,0px)'),
								'-moz-transform' :  ('translate3d(-'+$margin3col+'px,0px,0px)'),
								'-ms-transform' :  ('translate3d(-'+$margin3col+'px,0px,0px)'),
								'-o-transform' :  ('translate3d(-'+$margin3col+'px,0px,0px)')
							});
						}
						if(ewd_us_php_data.carousel_columns == '4'){
							var $margin4col = $margin / 4;
							jQuery('.carouselArrows ul.slider-window').css('transform','translate3d(-'+$margin4col+'px,0px,0px)');
							jQuery('.carouselArrows ul.slider-window').css({
								'transform' : ('translate3d(-'+$margin4col+'px,0px,0px)'),
								'-webkit-transform' :  ('translate3d(-'+$margin4col+'px,0px,0px)'),
								'-moz-transform' :  ('translate3d(-'+$margin4col+'px,0px,0px)'),
								'-ms-transform' :  ('translate3d(-'+$margin4col+'px,0px,0px)'),
								'-o-transform' :  ('translate3d(-'+$margin4col+'px,0px,0px)')
							});
						}
					} //else
		    }
		    else if (ewd_slider.transitionType == 'fade')
		    {
			    jQuery(".ewd-slider-main").removeClass('ewd-slider-main').siblings().hide();
			    jQuery(".ewd-slider-section .slider ul.slider-window li.ewd-slide:nth-child("+ nextSlide+")").addClass('ewd-slider-main').fadeIn(ewd_slider.fadeTime, "swing");
		    }
		    else
		    {
		    	jQuery(".ewd-slider-main").removeClass('ewd-slider-' + ewd_slider.transitionType).removeClass('ewd-slider-main').siblings().hide();
		    	jQuery(".ewd-slider-section .slider ul.slider-window li.ewd-slide:nth-child("+ nextSlide+")").show().addClass('ewd-slider-main');
			    jQuery(".ewd-slider-section .slider ul.slider-window li.ewd-slide:nth-child("+nextSlide+")").show().addClass('ewd-slider-' + ewd_slider.transitionType);
		    }
		}
    //update control button active
    jQuery(".ewd-slider-control-button span").removeClass("ewd-slide-button-active");
    jQuery(".ewd-slider-control-button-" + target + " span").addClass("ewd-slide-button-active");

    ewd_slider.slide = target;
  }