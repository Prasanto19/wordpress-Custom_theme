<?php
// Adding css and js files

function theme_setup() {
    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');//Adding google fonts
    wp_enqueue_style('fontawesome','//use.fontawesome.com/releases/v5.1.0/css/all.css');//Adding font-awesome
    wp_enqueue_style('style',get_stylesheet_uri());//(name,wp_style_function,dependency,version(for developing purpose microtime, it returns current time in micro time),supporting device)
    wp_enqueue_script('main',get_theme_file_uri('./js/main.js'),NULL,'1.0',true);//(handle,src,dependency,version,in_footer)

}

add_action('wp_enqueue_scripts','theme_setup');//add function into the wordpress scripts

//Adding theme support

function theme_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');//Dynamic title of a page
    add_theme_support('html5',
        array('comment-list','comment-form','search-form')
    );

}

add_action('after_setup_theme','theme_init');//add function into the wordpress theme

//Projects Post Type

function custom_theme_post_type() {
    // Permalink -> Post name	..../%postname%/
    register_post_type('projects',
        array(
            'rewrite' => array( 'slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project',
            ),
            'menu-icon' => 'deshicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title','thumbnail','editor','excerpt','comments'
            ),
            //'taxonomies' => array('post_tag','category'), 

        )
            );
}
add_action('init','custom_theme_post_type');

//Add sidebar

function custom_widgets() {
	register_sidebar(
		array(
			'name' => 'Main Sidebar' ,
			'id' => 'main_sidebar' ,
			'before_title' => '<h3>' ,
			'after_title' => '</h3>' 
		)
	);
}

add_action('widgets_init','custom_widgets');

// Filters

function search_filter($query) {
    if($query-> is_search()) {
        $query->set('post_type',array('post','projects'));
    }
}

add_filter('pre_get_posts','search_filter');

?>