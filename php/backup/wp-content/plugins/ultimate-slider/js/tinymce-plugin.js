(function() {
    tinymce.PluginManager.add('US_Shortcodes', function( editor, url ) {
        var self = this;
        //editor.on('init', function(args){EWD_OTP_Disable_Non_Premium();});
        editor.addButton( 'US_Shortcodes', {
            title: 'Slider Shortcodes',
            text: 'Slider',
            type: 'menubutton',
            icon: 'wp_code',
            menu: [{
            	text: 'Insert Slider',
            	value: 'ultimate-slider',
            	onclick: function() {
				    var win = editor.windowManager.open( {
				        title: 'Insert Slider Shortcode',
				        body: [{
            				type: 'listbox',
            				name: 'post_count',
            				label: '# of Slides:',
				            'values': [
            				    {text: 'All', value: '-1'},
            				    {text: '1', value: '1'},
            				    {text: '2', value: '2'},
            				    {text: '3', value: '3'},
            				    {text: '4', value: '4'},
            				    {text: '5', value: '5'},
            				    {text: '6', value: '6'},
            				    {text: '7', value: '7'},
            				    {text: '8', value: '8'},
            				    {text: '9', value: '9'},
            				    {text: '10', value: '10'}
            				],
				        },
				        {
            				type: 'listbox',
            				name: 'slider_type',
            				label: 'Type Of Slider:',
				            'values': [
            				    {text: 'Standard (Uses Slides You Create)', value: ''},
            				    {text: 'WooCommerce (Product Slides)', value: 'woocommerce'} /*,
            				    {text: 'Ultimate Product Catalog (Product Slides)', value: 'upcp'} */
            				],
            				onPostRender: function() {Slider_Type_Button = this;},
            				onselect: function() {
            					tinyMCE.activeEditor.plugins.US_Shortcodes.refresh();
            				}
				        },
				        {
            				type: 'listbox',
            				name: 'category',
            				label: 'Selected Category:',
				            'values': EWD_US_Create_Category_List(''),
				            onPostRender: function() {Categories_Button = this;}
				        }],
				        onsubmit: function( e ) {
				            var post_count_text = "posts='" + e.data.post_count + "'";
				            var slider_type_text = "slider_type='" + e.data.slider_type + "'";
				            var category_text = "category='" + e.data.category + "'";

				            editor.insertContent( '[ultimate-slider '+post_count_text+' '+slider_type_text+' '+category_text+']');
				        },
				    });
				}
			}],
        });
		self.refresh = function() {
			Categories_Button.state.set('menu', EWD_US_Create_Category_List(Slider_Type_Button.value()));
		}
    });
})();

function EWD_US_Create_Category_List(Type = '') {
	var result = [{text: 'All', value: ''}];
    var d = {};

    if (Type == 'woocommerce') {
		jQuery(woocommerce_categories).each(function(index, el) {
			var d = {};
			d['text'] = el.Category_Name;
			d['value'] = el.Category_Slug;
			result.push(d);
		});
	}
	else if (Type == 'upcp') {
		jQuery(upcp_categories).each(function(index, el) {
			var d = {};
			d['text'] = el.Category_Name;
			d['value'] = el.Category_Slug;
			result.push(d);
		});
	}
	else {
		jQuery(slider_categories).each(function(index, el) {
			var d = {};
			d['text'] = el.Category_Name;
			d['value'] = el.Category_Slug;
			result.push(d);
		});
	}

    return result;
}
