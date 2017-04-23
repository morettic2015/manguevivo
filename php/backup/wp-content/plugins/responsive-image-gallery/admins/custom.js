var images, setting;
jQuery(document).ready(function($){
	$.fn.OneClickSelect = function () {
	  return $(this).on('click', function () {
	
	    // In here, "this" is the element
	
	    var range, selection;
	
	    // non-IE browsers account for 60% of users, this means 60% of the time,
	    // the two conditions are evaluated since you check for IE first. 
	
	    // Instead, reverse the conditions to get it right on the first check 60% of the time.
	
	    if (window.getSelection) {
	      selection = window.getSelection();
	      range = document.createRange();
	      range.selectNodeContents(this);
	      selection.removeAllRanges();
	      selection.addRange(range);
	    } else if (document.body.createTextRange) {
	      range = document.body.createTextRange();
	      range.moveToElementText(this);
	      range.select();
	    }
	  });
	};
	
	GalleryImage();
	CollageSetting();
	FancyBoxSetting();
	
	$("#shortcode-display, #style-example pre").OneClickSelect();
	
	function CollageSetting(){
		setting = {
	            'fadeSpeed'       : 500,
	            'effect'          : 'default',
	            'direction'       : 'vertical',
	            'allowPartialLastRow'       : false
	        };
		
		$(".settingCollage").change(function(){
			var fadeSpeed = $("#fadeSpeed").val();
			var effect = $("#effect").val();
			var direction = $("#direction").val();
			var allow = $("#last-image").val();
			
			var object = {'fadeSpeed':fadeSpeed, 'effect':effect, 'direction':direction, 'allowPartialLastRow':allow};
			
			$("#responsive_image_collage").val(JSON.stringify(object));
		});
	}
	
	function FancyBoxSetting(){
		setting = {
				'single' : 0, //can be false
				'autoplay' : 0,
				'time' : 3000,
				'loop' : 1,
				'thumbs' : 1,
				'zoomable' : 1
	      };
		
		$(".settingFancybox").change(function(){
			var navigation_button = $("#navigation_button").val();
			var autoplay = $("#autoplay").val();
			var time = $("#time").val();
			var loop = $("#loop").val();
			var thumbs = $("#thumbs").val();
			var zoomable = parseInt($("#zoomable").val());
			
			var object = {
				single : navigation_button, //can be false
				time : time,
				autoplay : autoplay,
				loop : loop,
				thumbs : thumbs,
				zoomable : zoomable
	      };
			
			$("#responsive_image_photobox").val(JSON.stringify(object));
		});
	}
	
	function GalleryImage(){
		var json_string = $("#responsive_image_gallery_images").val();
		if(json_string == ''){
			images = {};
		}else{
			images = JSON.parse(json_string);
		}
		
		function createUUID() {
		    var s = [];
		    var hexDigits = "0123456789abcdef";
		    for (var i = 0; i < 36; i++) {
		        s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
		    }
		    s[14] = "4";  // bits 12-15 of the time_hi_and_version field to 0010
		    s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1);  // bits 6-7 of the clock_seq_hi_and_reserved to 01
		    s[8] = s[13] = s[18] = s[23] = "-";
		
		    var uuid = s.join("");
		    return uuid;
		}
	
		$('#upload-btn').click(function(e) {
			e.preventDefault();
				var image = wp.media({
				title: 'Upload Image',
				// mutiple: true if you want to upload multiple files at once
				multiple: true
				}).open()
			.on('select', function(e){
				var temp_images = {};
				var selection = image.state().get('selection');
			    selection.map( function( attachment ) {
				    attachment = attachment.toJSON();
				    console.log(attachment);
				    var uuid = createUUID();
				    images[ parseInt(Object.keys(images).length) + 1 ] = {image:attachment.id, id:uuid};
				    temp_images[ parseInt(Object.keys(images).length) + 1 ] = {image:attachment.url, id:uuid};
			    });
			    
			    $("#responsive_image_gallery_images").val(JSON.stringify(images));
			    
			    for(var value in temp_images) {
			    	$(".images- ul").prepend('<li class="gallery-item" id="'+temp_images[value].id+'"><span class="update"></span><span class="delete"></span><img src="'+temp_images[value].image+'"></li>');
			    }
			    
			});
		});
		
		var dialog, form;
		
		form = $( "#dialog-form" );
		form.on( "submit", function( event ) {
			event.preventDefault();
		});
		
		dialog = $( "#dialog-form" ).dialog({
			autoOpen: false,
			height: 300,
			width: 350,
			modal: true,
			buttons: {
				Ok: function() {
					dialog.dialog( "close" );
				}
			},
			close : function() {
				var id = form.find("#image-id").val();
				var description = form.find("#image-description").val();
				var flag = false;
				
				for(var value in images) {
					if(images[value].id == id){
						images[value].description = description;
						flag = true;
						break;
					}
				}
				
				if(flag){
					$("#responsive_image_gallery_images").val(JSON.stringify(images));
				}
				
				form.find("#image-description").val("");
			}
		});
		
		$("body").on("click", ".gallery-item .update", function(){
			var obj = $(this).parent(".gallery-item");
			var id = obj.attr("id");
			
			form.find("#image-id").val(id);
			
			for(var value in images) {
				if(images[value].id == id){
					if(images[value].hasOwnProperty('description')){
						form.find("#image-description").val(images[value].description);
					}
					break;
				}
			}
			
			dialog.dialog( "open" );
		});
		
		$("body").on("click", ".gallery-item .delete", function(){
			var obj = $(this).parent(".gallery-item");
			var id = obj.attr("id");
			var flag = false;
			
			for(var value in images) {
				if(images[value].id == id){
					delete images[value];
					$(obj).remove();
					flag = true;
					break;
				}
			}
			
			if(flag){
				$("#responsive_image_gallery_images").val(JSON.stringify(images));
			}
	});
	}
});