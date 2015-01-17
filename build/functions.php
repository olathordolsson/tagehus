<?php // INITS, REGISTER AND SUPPORT
//====================================================================

function register_my_menu(){
	register_nav_menu('navigation', __('Huvudnavigation'));
}
add_action('init', 'register_my_menu');

//-------------------------------------------------------------------

if ( function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'Sidebar',
		'before_title' => '<h3 class="t-small">',
		'after_title' => '</h3>',
		'before_widget' => '<li class="m-sidebar__widget">',
		'after_widget' => '</li>',
	));
	
	register_sidebar(array(
		'name'=>'Footer',
		'before_title' => '<h3 class="t-small">',
		'after_title' => '</h3>',
		'before_widget' => '<div class="m-footer__widget">',
		'after_widget' => '</div>',
	));
}
		
//-------------------------------------------------------------------
		
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	//add_theme_support( 'post-formats', array('aside'));
}

//-------------------------------------------------------------------

require_once 'partials/Mobile_Detect.php';

//-------------------------------------------------------------------

function script_handler(){
	
	if( !is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), null, true);
		wp_enqueue_script('jquery');
	}
	wp_register_script('scripts', get_template_directory_uri() . '/js/bundled.min.js', array('jquery'), null, true);
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_script('scripts');
}

add_action( 'wp_enqueue_scripts', 'script_handler' );

//-------------------------------------------------------------------

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


//FILTER-FUNCTIONS
//====================================================================

function complete_version_removal() {
	return '';
}
add_filter('the_generator', 'complete_version_removal');

//-------------------------------------------------------------------

remove_filter('term_description','wpautop');

//-------------------------------------------------------------------

function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );



// FUNCTIONS
//====================================================================

if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
	function post_is_in_descendant_category( $cats, $_post = null ) {
		foreach ( (array) $cats as $cat ) {
			// get_term_children() accepts integer ID only
			$descendants = get_term_children( (int) $cat, 'category' );
			if ( $descendants && in_category( $descendants, $_post ) )
				return true;
		}
		return false;
	}
}

//-------------------------------------------------------------------

function fixed_img_caption_shortcode($attr, $content = null) {
	// New-style shortcode with the caption inside the shortcode with the link and image tags.
	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}

	// Allow plugins/themes to override the default caption template.
	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
	if ( $output != '' )
		return $output;

	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> 'alignnone',
		'width'	=> '',
		'caption' => ''
	), $attr));

	if ( 1 > (int) $width || empty($caption) )
		return $content;

	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >' . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}

add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');

//-------------------------------------------------------------------


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

//-------------------------------------------------------------------


//-------------------------------------------------------------------


//-------------------------------------------------------------------

function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('template_url').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

//-------------------------------------------------------------------


function remove_more_jump_link($link) { 
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');
?>