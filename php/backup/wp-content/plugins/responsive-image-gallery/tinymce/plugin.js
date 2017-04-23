( function() {
	
	var $values_;
	
	jQuery.ajax({
		url : ajaxurl,
		type : 'POST',
		async : false,
		data : {action : 'get_galleries'},
		success : function($data){
			$values_ = $data;
						
			    tinymce.PluginManager.add( 'responsive_image_gallery', function( editor, url ) {

			        // Add a button that opens a window
			        editor.addButton( 'responsive_galleries', {
						type: 'listbox',
			            text : 'Gallery',
			            tooltip : 'Puts the Selected image gallery in the Content',
			            icon: true,
			            image : url+'/icon.png',
			            onselect: function(e) {
			                editor.insertContent('[show-responsive-image-gallery-by-sajesh gallery="'+this.value()+'"]');
			            },
			            values: JSON.parse($values_)	        
					});
			
			    });
		}
	});

})();