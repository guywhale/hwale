<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls'
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage')
    ]);

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style'
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary'
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer'
    ] + $config);
});

/**
 * Add menu order metabox to pages
 *
 * @return void
 **/
add_action('init', function () {
    add_post_type_support('page', 'page-attributes');
});

/**
 * Check for cookie to run exploding letters animation.
 * Create if not found.
 * @return void
 **/
add_action('init', function () {
    if (!isset($_COOKIE['ShowExplodingLetters'])) {
        setcookie('ShowExplodingLetters', 'true', [
            'expires' => time() + 60 * 60 * 24,
            'path' => '/',
            // 'secure' => true,
            'samesite' => 'Lax',
        ]);
    }
});

/**
 * Work Custom Post Type
 *
 * Register 'Work' custom post type
 *
 * @return void
 **/

add_action('init', function () {
    $labels = [
        'name'                  => _x('Work', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Work', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Work', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Work', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Work', 'textdomain'),
        'new_item'              => __('New Work', 'textdomain'),
        'edit_item'             => __('Edit Work', 'textdomain'),
        'view_item'             => __('View Work', 'textdomain'),
        'all_items'             => __('All Work', 'textdomain'),
        'search_items'          => __('Search Work', 'textdomain'),
        'parent_item_colon'     => __('Parent Work:', 'textdomain'),
        'not_found'             => __('No work found.', 'textdomain'),
        'not_found_in_trash'    => __('No work found in Trash.', 'textdomain'),
    ];

    $args = [
        'labels'              => $labels,
        'description'         => 'Work custom post type.',
        'exclude_from_search' => true,
        'public'              => true,
        'publicly_queryable'  => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-media-code',
        'query_var'           => true,
        'rewrite'             => ['slug' => 'work'],
        'capability_type'     => 'post',
        'has_archive'         => false,
        'hierarchical'        => false,
        'menu_position'       => 20,
        'supports'            => ['title', 'editor', 'author', 'thumbnail'],
        'taxonomies'          => ['category', 'post_tag'],
        'show_in_rest'        => true
    ];

    register_post_type('work', $args);
});
