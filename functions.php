<?php
/**
 * ABB functions and definitions
 */

if ( ! function_exists( 'abb_setup' ) )  {
    /**
     * Sets up theme default and registers support for various Wordpress features.
     * 
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails
     * 
     */
    function abb_setup() {
        /**
         * Make theme available for translation.
         * Translations can be filed in the /language/ directory.
         * If you're building a theme based on Crafty Press, use find and replace
         * to change 'abb' with the name of your theme in all template files
         * */    
        load_theme_textdomain( 'abb', get_template_directory() .'/languages' );

        //Add default posts and comments RSS feed links to head
        add_theme_support( 'automatic-feed-links' );

        /**
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' ); 

       // Setup the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'abb_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        //Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /*
        * Enable support for Post Formats.
        *
        * See: https://codex.wordpress.org/Post_Formats
        */

        /**
         * Add support for core custom logo.
         */
        add_theme_support( 'custom-logo', [
            'height'          =>250,
            'width'           =>250,
            'flex-width'      =>true,
            'flex-height'     =>true,
        ] );

        add_theme_support( 'custom-header', array(
            'height'          =>450,
            'width'           =>1920,
            'flex-width'      =>true,
            'flex-height'     =>true,
        ) );

        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ) );

        /**
         * Set the content width in pixels, based on theme's design and stylesheet.
         * 
         * Priority 0 to make it available to lower priority callbacks.
         * 
         * @global init $content_width
         */
        function abb_content_width() {
            $GLOBALS['content_width'] = apply_filters( 'abb_content_width', 1920 );
        }

        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'abb'),
            'footer' => esc_html__( 'Footer', 'abb'),
            'header_action' => esc_html__( 'Header Action', 'abb'),

        ));

        /**
         *  Enqueue admin scripts and styles.
         */
        function abb_public_scripts(){
        // Styles
            wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css', [], wp_rand(), 'all' );
            wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', [], wp_rand(), 'all' );
            wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css', [], wp_rand(), 'all' );
            wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css', [], wp_rand(), 'all' );
            wp_enqueue_style( 'hero-page', get_template_directory_uri() . '/assets/css/sections/hero.css', [], wp_rand(), 'all' );
        // Scripts
            wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [ 'jquery' ], wp_rand(), true );
            wp_enqueue_script( 'header', get_template_directory_uri() . '/assets/js/header.js', [ 'jquery' ], wp_rand(), true );
        }
        add_action( 'wp_enqueue_scripts', 'abb_public_scripts' );

        function abb_admin_scripts() {
        /**
         *  Enqueue admin scripts and styles.
         */
        }
        add_action( 'admin_enqueue_scripts', 'abb_admin_scripts' );

        /**
         * Removes editor from page
         */
        function remove_editor() {
            remove_post_type_support('page', 'editor');
          }
          add_action('admin_init', 'remove_editor');
               
    }
 }
 add_action ('after_setup_theme', 'abb_setup');
