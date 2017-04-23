<?php
// Add in a new column option for the US post type
function EWD_US_Columns_Head($defaults) {
	$defaults['us_categories'] = __('Categories', 'EWD_US');
	$defaults['us_thumbnail'] = __('Thumbnail', 'EWD_US');

	return $defaults;
}

// Set display order of columns
function EWD_US_Columns_Display_Order($columns) {
	return array(
		'us_thumbnail' => __('Slide', 'EWD_US'),
		'title' => __('Title', 'EWD_US'),
		'us_categories' => __('Categories', 'EWD_US'),
		'us_menu_order' => __('Order', 'EWD_US'),
		'date' => __('Date', 'EWD_US')
	);
}

// Show the number of times the FAQ post has been clicked
function EWD_US_Columns_Content($column_name, $post_ID) {
	if ($column_name == 'us_categories') {
		$categories = EWD_US_Get_Categories($post_ID);
		echo $categories;
	}
	if ($column_name == 'us_thumbnail') {
		$Slide_Image_Source = EWD_US_Get_Slide_Image_Source($post_ID);
		echo '<img src="' . $Slide_Image_Source . '" class="ewd-us-admin-table-thumbnail" />';
	}
}

function EWD_US_Register_Post_Column_Sortables( $column ) {
    $column['us_categories'] = 'us_categories';
    return $column;
}

function EWD_US_Get_Slide_Image_Source($post_ID) {
	$Content_Type = get_post_meta($post_ID, "EWD_US_Content_Type", true);
	$UPCP_Product_ID = get_post_meta($post_ID, "EWD_US_UPCP_Product_ID", true);
	$WC_Product_ID = get_post_meta($post_ID, "EWD_US_WC_Product_ID", true);
	$Image_Type = get_post_meta($post_ID, "EWD_US_Image_Type", true);

	if ($Content_Type == 'upcp_product') {
		if (class_exists('UPCP_Product')) {
			$Product = new UPCP_Product(array('ID' => $UPCP_Product_ID));
			$Image_URL = $Product->Get_Field_Value('Item_Photo_URL');
		}
	}
	elseif ($Content_Type == 'woocommerce_product') {
		$post_thumbnail_id = get_post_thumbnail_id($WC_Product_ID);
		$Image_URL = wp_get_attachment_url( $post_thumbnail_id );
	}
	else {
		$post_thumbnail_id = get_post_thumbnail_id($post_ID);
		$Image_URL = wp_get_attachment_url( $post_thumbnail_id );
	}

	return $Image_URL;
}


function EWD_US_mbe_sort_custom_column($clauses, $wp_query){
	global $wpdb;
	if(isset($wp_query->query['orderby']) && $wp_query->query['orderby'] == 'us_categories'){
		$clauses['join'] .= <<<SQL
LEFT OUTER JOIN {$wpdb->term_relationships} ON {$wpdb->posts}.ID={$wpdb->term_relationships}.object_id
LEFT OUTER JOIN {$wpdb->term_taxonomy} USING (term_taxonomy_id)
LEFT OUTER JOIN {$wpdb->terms} USING (term_id)
SQL;
		$clauses['where'] .= "AND (taxonomy = 'ultimate_slider_categories' OR taxonomy IS NULL)";
		$clauses['groupby'] = "object_id";
		$clauses['orderby'] = "GROUP_CONCAT({$wpdb->terms}.name ORDER BY name ASC)";
		if(strtoupper($wp_query->get('order')) == 'ASC'){
		    $clauses['orderby'] .= 'ASC';
		} else{
		    $clauses['orderby'] .= 'DESC';
		}
	}
	return $clauses;
}


function EWD_US_Get_Categories($post_id) {
	echo get_the_term_list($post_id, 'ultimate_slider_categories', '', ', ', '').PHP_EOL;
}

add_action('restrict_manage_posts','EWD_US_Restrict_By_Category');
function EWD_US_Restrict_By_Category() {
    global $typenow;
    global $wp_query;
    if ($typenow=='ultimate_slider') {
        $taxonomy = 'ultimate_slider_categories';
        $faq_taxonomy = get_taxonomy($taxonomy);
        wp_dropdown_categories(array(
            'show_option_all' =>  __("Show All {$faq_taxonomy->label}"),
            'taxonomy'        =>  $taxonomy,
            'name'            =>  'ultimate_slider_categories',
            'orderby'         =>  'name',
            'selected'        =>  $wp_query->query['term'],
            'hierarchical'    =>  true,
            'depth'           =>  3,
            'show_count'      =>  true, // Show # listings in parens
            'hide_empty'      =>  true,
        ));
    }
}

add_filter('parse_query','Convert_US_Category_To_Taxonomy_Term_In_Query');
function Convert_US_Category_To_Taxonomy_Term_In_Query($query) {
    global $pagenow;
    $post_type = 'ultimate_slider'; // change HERE
    $taxonomy = 'ultimate_slider_categories'; // change HERE
    $q_vars = &$query->query_vars;
    if ($pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0) {
        $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
        $q_vars[$taxonomy] = $term->slug;
    }
}

add_filter('manage_ultimate_slider_posts_columns', 'EWD_US_Columns_Head');
add_filter('manage_ultimate_slider_posts_columns' , 'EWD_US_Columns_Display_Order');
add_action('manage_ultimate_slider_posts_custom_column', 'EWD_US_Columns_Content', 10, 2);

add_filter( 'manage_edit-ultimate_slider_sortable_columns', 'EWD_US_Register_Post_Column_Sortables' );
add_filter('posts_clauses', 'EWD_US_mbe_sort_custom_column', 10, 2);




////////////////////////////////////
/////// CATEGORY ADMIN TABLE ///////
////////////////////////////////////

function EWD_US_Category_Columns_Head($columns){
	$columns['us_category_shortcode'] = __('Shortcode', 'EWD_US');
	return $columns;
}
add_filter('manage_edit-ultimate_slider_categories_columns', 'EWD_US_Category_Columns_Head');

// Remove Slug column
add_filter('manage_ultimate_slider_categories_columns', 'EWD_US_Category_Columns_Remove_Slug');
function EWD_US_Category_Columns_Remove_Slug($defaults) {
	unset($defaults['slug']);
	return $defaults;
}

// Set display order of columns
function EWD_US_Category_Columns_Display_Order($columns) {
	return array(
		'name' => __('Name', 'EWD_US'),
		'description' => __('Description', 'EWD_US'),
		'us_category_shortcode' => __('Shortcode', 'EWD_US'),
		'posts' => __('Count', 'EWD_US'),
	);
}
add_filter('manage_edit-ultimate_slider_categories_columns', 'EWD_US_Category_Columns_Display_Order');

function EWD_US_Category_Columns_Content($content,$column_name,$term_id){
	$term = get_term($term_id, 'ultimate_slider_categories');
	if($column_name == 'us_category_shortcode'){
		$slug = $term->slug;
		$content .= "[ultimate-slider category='" . $slug . "']";
		return $content;
	}
}
add_filter('manage_ultimate_slider_categories_custom_column', 'EWD_US_Category_Columns_Content', 10, 3);
