<?php
/*
 *  Author: Geekhive
 *  URL: Geekhive.com | @geekhive
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load Redux Framework Configuration
require_once ( 'inc/redux-config.php' );

// Load Simmons Custom Comments
require_once ( 'inc/comments.php' );

// Load Simmons Custom Comments
require_once ( 'inc/custom_post_types.php' );

// Load Advanced custom fields export
require_once ( 'inc/advanced_custom_fields.php' );

// Load custom ACF field groups
require_once ( 'assets/php/components.php' );
require_once ( 'assets/php/contact.php' );
require_once ( 'assets/php/dhea.php' );
require_once ( 'assets/php/downloads.php' );
require_once ( 'assets/php/downloadable-article.php' );
require_once ( 'assets/php/dyspareunia.php' );
require_once ( 'assets/php/histology.php' );
require_once ( 'assets/php/home.php' );
require_once ( 'assets/php/sex-health.php' );
require_once ( 'assets/php/thanks.php' );
require_once ( 'assets/php/unsubscribe.php' );
require_once ( 'assets/php/videos.php' );

// Load Custom Post Types
require_once ( 'assets/php/custom-post-types.php' );

/*------------------------------------*\
	Theme Support
\*------------------------------------*/


if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
//    add_image_size('banner', 1920, '', false); // Large Thumbnail
//    add_image_size('feature-article', 600, 500, array( 'right', 'center'));
//    add_image_size('article', 380, 185, array( 'right', 'center')); // Medium Thumbnail

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('geekhive', get_template_directory() . '/languages');
}




/*------------------------------------*\
	Functions
\*------------------------------------*/


// Load scripts
function geekhive_scripts(){
	if(WP_DEBUG){
		if('SCRIPT_DEBUG'){
			wp_register_script('simmonsJs', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true); // Custom scripts
			wp_enqueue_script('simmonsJs');
		}
	} else {
		wp_register_script('simmonsJs', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'), null, true); // Custom scripts
		wp_enqueue_script('simmonsJs');
	}
}

// Load conditional scripts
function geekhive_conditional_scripts()
{
    //if (is_page('pagenamehere')) {
        //wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        //wp_enqueue_script('scriptname');
    //}
}

// Load HTML5 Blank styles
function geekhive_styles()
{
	if(WP_DEBUG){
		wp_register_style('simmons', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
		wp_enqueue_style('simmons');
	} else {
		wp_register_style('simmons', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0', 'all');
		wp_enqueue_style('simmons');
	}

	//wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Lato:400,900|Oswald|PT+Mono', array(), '1.0', 'all');
	//wp_enqueue_style('googlefonts');
}

// Register HTML5 Blank Navigation
function register_geekhive_menu()
{
	register_nav_menus(
		array(
			'main-header-menu' => __( 'Main Header Menu', 'simmons' ),
			'footer-primary-menu' => __( 'Footer Primary Menu', 'simmons' ),
		)
	);
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
//    register_sidebar(array(
//        'name' => __('Front Page - Featured Area Widget 1', 'simmons'),
//        'description' => __('Poll location on homepage in the featured content area', 'simmons'),
//        'id' => 'home-featured-widget-1',
//        'before_widget' => '<div id="%1$s" class="%2$s">',
//        'after_widget' => '</div>',
//        'before_title' => '<h3>',
//        'after_title' => '</h3>'
//    ));

//    // Define Sidebar Widget Area 2
//    register_sidebar(array(
//        'name' => __('Front Page - Featured Area Widget 2', 'simmons'),
//        'description' => __('Login / Registration location on homepage in the featured content area', 'simmons'),
//        'id' => 'home-featured-widget-2',
//        'before_widget' => '<div id="%1$s" class="featured__widget-content">',
//        'after_widget' => '</div>',
//        'before_title' => '',
//        'after_title' => ''
//    ));

	// Define Sidebar Widget Area 2
	register_sidebar(array(
		'name' => __('Single Post - Interior Sidebar', 'simmons'),
		'description' => __('Related Posts sidebar for interior pages / single posts', 'simmons'),
		'id' => 'single-interior-sidebar-1',
		'before_widget' => '<div id="%1$s" class="single__sidebar sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="sidebar__title">',
		'after_title' => '</h3>'
	));

}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Add custom class to reply comment button after element
function comment_reply_link_filter($content){
  return '<span class="reply-comment-icon">' . $content . '</span>';
}


// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Hide default content editor from pages
function hide_editor() {
  global $pagenow;
  if( !( 'post.php' == $pagenow ) ) {
    return;
  }

  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) {
    return;
  }

  $pages_to_hide = array( 'Home' );
  $page_name = get_the_title($post_id);
  if( in_array( $page_name, $pages_to_hide ) ){
    remove_post_type_support('page', 'editor');
  }

  $templates_to_hide = array( 'dhea.php', 'dyspareunia.php', 'histology.php', 'sex-health.php', 'thanks.php', 'unsubscribe.php' );
  $template = get_post_meta($post_id, '_wp_page_template', true);
  if( in_array( $template, $templates_to_hide ) ){
    remove_post_type_support('page', 'editor');
  }
}


/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'geekhive_scripts'); // Add Custom Scripts
add_action('wp_print_scripts', 'geekhive_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'geekhive_styles'); // Add Theme Stylesheet
add_action('init', 'register_geekhive_menu'); // Add Navigation Menus
add_action('get_header', 'enable_threaded_comments');
add_action('admin_head', 'hide_editor');

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_filter( 'comment_text', 'wpautop', 30 );
remove_filter('the_excerpt', 'wpautop'); // Remove automatic inclusion of <p> tags from Excerpt

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
add_filter('comment_reply_link', 'comment_reply_link_filter', 99); // Add custom class to reply comment button after element

// Add ShortCodes



