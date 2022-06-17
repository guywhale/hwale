<?php

namespace App;

add_action('init', 'App\addMenuOrder');

/**
 * Add menu order metabox to pages
 *
 * @return void
 **/

function addMenuOrder()
{
    add_post_type_support('page', 'page-attributes');
}
