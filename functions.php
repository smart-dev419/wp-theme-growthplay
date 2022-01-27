<?php

require( 'theme-config.php' );  


/**
 * Customize the classes added to next/prev post links
 */
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="btn btn-load"';
}

class GrowthPlayWalkerMenu extends Walker_Nav_Menu {
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown\">\n";
  }
}

/**
 * Adds the ability for v-card to be uploaded to media uploader.  Add additional mime types here as needed.
 */
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
    // add your extension to the array
    $existing_mimes['vcf'] = 'text/x-vcard';
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}


/**
 * add 'active' class to current menu item
 */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if ( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }    
    if ( in_array('current-menu-parent', $classes) ){
        $classes[] = 'drop-active ';
    }
    return $classes;
}



/*
 * Used by bio-page-template.blade.php
 */
function gp_get_people_categories($id) {
    $terms = get_the_terms(get_the_ID(), 'people_categories')[0];

    if ($terms) {
        return $terms;
    } else {
        $terms = new stdClass();
        $terms->name = 'Leadership';
        $terms->slug = 'leadership';
        return $terms;
    }
}


function wpb_list_child_pages() {
    global $post;

    if ( is_page() && $post->post_parent ) {
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
    }
    else {
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
    }

    if ( $childpages ) {
        $string = '<ul class="box-list">' . $childpages . '</ul>';
    }

    return $string;
}