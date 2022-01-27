<?php

namespace BaseTheme;

/**
* Loads the base theme class.  The base_theme_class is extended here.
* Please see wiki documentation for full set of features and helpers available in the base_theme_class.
*/
include_once( 'core/base-theme-class.php' );  

class Theme extends base_theme_class {


    /*
    
    Allows you to disable WordPress from including jQuery by default.

    You should only set this to value if your theme.js file includes jQuery.

    */
    var $include_jquery = true;


    /*
    
    Loads an options panel in wp-admin.
    If this is enabled, you create custom fields and target them to this option panel.

    */
    var $load_options_panel = true;


    /*

    if you want to force disable to WP theme editor, set this to true.
    Since we keep our WP themes in version control, we set this to true by default.

    */
    var $disabled_theme_editor = true;


    /*

    toggle featured image support on your posts and pages

    */
    var $load_thumbnail_support = true;


    /*

    this allows you to edit the default text that appears with post excerpts.
    If you set this to null, a simple "..." will output at the end of each excerpt.

    */
    var $excerpt_text = 'Read More';


    /*

    by default, the theme will disable the ACF Options menu in wp-admin, unless WP_DEBUG is set to true.
    If you want to force enable to ACF options panel to display, you can set this variable as true
    
    */
    var $force_enable_acf_option_panel = true;


    public function __construct()
    {

        parent::__construct(); 

        $this->theme_name = defined('THEME_NAME') ? THEME_NAME : 'base-theme';
        $this->version = getenv('VERSION') ? getenv('VERSION') : '1.0';

    }


    /* Load more custom post types here */
    public function load_custom_post_types()
    {
         
        $this->custom_post_types['person'] = array(

            'label' => 'People',            
            'description' => 'This is the People custom post type',
            'public' => true,
            'exclude_from_search' => true,
            'show_ui' => true,
            'supports' => array('title'),
            'has_archive' => false,
            'rewrite' => true
        ); 
        
        $this->custom_post_types['article'] = array(

            'label' => 'News & Events',            
            'description' => 'This is the News & Events custom post type',
            'public' => true,
            'exclude_from_search' => true,
            'show_ui' => true,
            'supports' => array('title', 'editor'),
            'has_archive' => false,
            'rewrite' => true
        );
        $this->custom_post_types['podcast'] = array(

            'label' => 'Podcasts',            
            'description' => 'This is the podcasts custom post type',
            'public' => true,
            'exclude_from_search' => true,
            'show_ui' => true,
            'supports' => array('title', 'editor'),
            'has_archive' => false,
            'rewrite' => true
        );

        $this->custom_post_types['case_study'] = array(

            'label' => 'Case Studies',            
            'description' => 'This is the Case Studies custom post type',
            'public' => true,
            'exclude_from_search' => true,
            'show_ui' => true,
            'supports' => array('title', 'editor'),
            'has_archive' => false,
            'rewrite' => array( 'slug' => 'case-study' )

        );


        $this->custom_post_types['testimonial'] = array(

            'label' => 'Customer Testimonials',            
            'description' => 'This is the Customer Testimonials custom post type',
            'public' => false,
            'exclude_from_search' => true,
            'show_ui' => true,
            'supports' => array('title'),
            'has_archive' => false,
            'rewrite' => true

        );

        $this->custom_post_types['partner'] = array(

            'label' => 'Partners',
            'description' => 'This is the Partners custom post type',
            'public' => false,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'show_in_nav_menus' => false,
            'show_ui' => true,
            'supports' => array('title', 'editor'),
            'has_archive' => false,
            'rewrite' => false

        );

        $this->custom_post_types['scorecard'] = array(
            'label' => 'Score Card',
            'description' => 'This is the Score Card custom post type',
            'public' => false,
            'exclude_from_search' => true,
            'show_ui' => true,
            'supports' => array('title'),
            'has_archive' => false,
            'rewrite' => false
        );

        $this->custom_post_types['resource'] = array(
            'label' => 'Resources',
            'description' => 'This is the Resources custom post type',
            'public' => false,
            'exclude_from_search' => true,
            'show_ui' => true,
            'supports' => array('title'),
            'has_archive' => false,
            'rewrite' => false
        );

    }


    public function load_custom_taxonomies()
    {

        $this->custom_taxonomies['article_categories'] = array(

            'belongs_to_post_type' => 'article',
            'label' => 'News & Events Post Categories',
            'description' => 'These are the categories used to sort news, event, webinar and press release posts',
            'public' => true,
            'show_admin_column' => true,
            'hierarchical' => true
        );

        $this->custom_taxonomies['podcast_categories'] = array(

            'belongs_to_post_type' => 'podcast',
            'label' => 'Podcast Post Categories',
            'description' => 'These are the categories used to sort podcasts',
            'public' => true,
            'show_admin_column' => true,
            'hierarchical' => true
        );

        $this->custom_taxonomies['people_categories'] = array(

            'belongs_to_post_type' => 'person',
            'label' => 'People Categories',
            'description' => 'Determines which heading a person comes in under',
            'public' => true,
            'show_admin_column' => true,
            'hierarchical' => true
        );

        $this->custom_taxonomies['case_study_categories'] = array(

            'belongs_to_post_type' => 'case_study',
            'label' => 'Case Study Categories',
            'description' => 'These are the categories used to sort case studies',
            'public' => true,
            'show_admin_column' => true,
            'hierarchical' => true
        );

        $this->custom_taxonomies['partner_categories'] = array(

            'belongs_to_post_type' => 'partner',
            'label' => 'Partner Categories',
            'description' => 'These are the categories used to group partners visually',
            'public' => true,
            'show_admin_column' => true,
            'hierarchical' => true
        );
        
        $this->custom_taxonomies['resource_categories'] = array(

            'belongs_to_post_type' => 'resource',
            'label' => 'Resource Categories',
            'description' => 'These are the categories used to sort resources',
            'public' => true,
            'show_admin_column' => true,
            'hierarchical' => true
        );
        
    }

    public function load_shortcodes()
    {

        //This is a sample shortcode.  Please see full shortcode documentation. 
        
        /* */

        /*add_shortcode( 'contact_form', function($atts) {

            return view('forms/contact-form')->with(array(

                'form_title' => 'Contact Us',
                'atts' => $atts

            ));

        });*/

       

    }



    public function load_sidebars()
    {

        /*register_sidebar(array(
            'name'          => 'Primary',
            'id'            => 'sidebar-primary',
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));*/

        
    }

    public function load_options_panel()
    {

        acf_add_options_page(array(
            'page_title'    => 'Theme Options',
            'menu_title'    => 'Options',
            'menu_slug'     => 'theme-options-settings',
            'capability'    => 'edit_posts',
            'redirect'      => true
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Header & Footer Options',
            'menu_title'    => 'Header / Footer',
            'parent_slug'   => 'theme-options-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'JavaScript & CSS Options',
            'menu_title'    => 'Javascript / CSS',
            'parent_slug'   => 'theme-options-settings',
        ));

        

    }

    public function set_menus()
    {

        $this->menus = array(
            'main_nav' => 'Main Navigation', 
            'footer_nav' => 'Footer Navigation'
        );
        
    }

    /**
    * Set the image size array.
    *
    * $image_sizes[] = array('name' => 'image-size-name', 'width' => 600, 'height' => 400, 'crop' => true)  
    * set width/height to 9999 to not force that size.
    * set crop to false to not force the size.
    */
    public function set_image_sizes()
    {

        $this->image_sizes[] = array(
            'name' => 'featured-size',
            'width' => 326,
            'height' => 250,
            'crop' =>true
        );

        $this->image_sizes[] = array(
            'name' => 'person',
            'width' => 255,
            'height' => 255,
            'crop' =>true
        );

        $this->image_sizes[] = array(
            'name' => 'logo',
            'width' => 252,
            'height' => 173,
            'crop' =>false
        );

        $this->image_sizes[] = array(
            'name' => 'square-306',
            'width' => 306,
            'height' => 306,
            'crop' =>true
        );

        $this->image_sizes[] = array(
            'name' => 'medium-size',
            'width' => 600,
            'height' => 400,
            'crop' =>true
        );
    }

}

$theme = new \BaseTheme\Theme;

