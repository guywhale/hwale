<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
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
