<?php

function load_stylesheets() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(),false,'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('custom_style', get_template_directory_uri() . '/css/custom.css', array(),false,'all');
    wp_enqueue_style('custom_style');

    wp_register_style('style', get_template_directory_uri() . '/style.css, array(),false','all');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts','load_stylesheets');

function load_js() {
    wp_register_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', '' , 1, true );
    wp_enqueue_script('boostrap_js');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', '' , 1, true );
    wp_enqueue_script('jquery');

    wp_register_script('custom_js', get_template_directory_uri() . '/js/custom.js', '' , 1, true );
    wp_enqueue_script('custom_js');
}

add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');
add_theme_support('thumbnails');

register_nav_menus(

    array(

        'primary' => __('Test Menu', 'theme'),
        'footer_menu' => __('Footer Menu', 'theme'),
    )
);

function reading_time($post) {
    // function code here
  }

  function eleventails_setup_theme() {
    // Add support for post thumbnails
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'small_rectangle', 300, 240, true );
    // Set default post thumbnail size
    set_post_thumbnail_size( 600, 350, true );
  }
  add_action( 'after_setup_theme', 'eleventails_setup_theme' );

  add_filter( 'comment_form_default_fields', 'wc_comment_form_change_cookies' );
function wc_comment_form_change_cookies( $fields ) {
	$commenter = wp_get_current_commenter();

	$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

	$fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
					 ' <label for="wp-comment-cookies-consent">'.__('Remeber name and email for next comments', 'textdomain').'</label></p>';
	return $fields;
}

