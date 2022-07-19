<?php

// 固定ページとMW WP Formでビジュアルモードを使用しない
function stop_rich_editor($editor) {
    global $typenow;
    global $post;
    if(in_array($typenow, array('page', 'post', 'news', 'partners', 'mw-wp-form'))) {
        $editor = false;
    }
    return $editor;
}

add_filter('user_can_richedit', 'stop_rich_editor');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function custom_excerpt_length( $length ) {
    return 70;
}

add_filter( 'excerpt_length', 'custom_excerpt_length' );

function new_excerpt_more($more) {
    return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');

function theme_custom_setup() {
    add_theme_support( 'post-thumbnails' ); 
    add_image_size( "blog_thumbnail", 358, 358, true );
    set_post_thumbnail_size( 349, 218, true );
}

add_action( 'after_setup_theme', 'theme_custom_setup' );

function replaceImagePath( $arg ) {
    $content = str_replace('"images/', '"' . get_template_directory_uri() . '/assets/img/', $arg);
    $content = str_replace('"/images/', '"' . get_template_directory_uri() . '/assets/img/', $content);
    $content = str_replace(', images/', ', ' . get_template_directory_uri() . '/assets/img/', $content);
    $content = str_replace("('images/", "('". get_template_directory_uri() . '/assets/img/', $content);
    return $content;
}

add_action('the_content', 'replaceImagePath');

function custom_query_vars_filter($vars) {
    $vars[] .= 'category_id';
    return $vars;
}
add_filter( 'query_vars', 'custom_query_vars_filter' );

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
    function add_my_media_controls($wp_customize) {
    $wp_customize->add_section('video', array(
        'title' => 'Video',
        'description' => 'Add Video',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_setting('add_video', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'add_video', array(
        'section' => 'video',
        'label' => 'Video',
    )));
}
add_action('customize_register', 'add_my_media_controls');





