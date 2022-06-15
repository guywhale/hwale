<?php

namespace App;

class MainNavWalker extends \Walker_Nav_Menu
{
    /*
    Ensures that the correct nav item is highlighted as current no matter which page,
    single post or taxonomy archive the user is on.s
    */
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $currentAria = '';

        if ($item->current) {
            $currentAria = ' aria-current="page"';
        }

        $output .= "<li id='menu-item-" . $item->ID . "' class='" .  implode(" ", $item->classes) . "'>";
        $output .= '<a href="' . $item->url . '"' . $currentAria . '>';
        $output .= '<span class="nav-number number">0' . $item->menu_order . '</span>';
        $output .= '<span class="menu-line"></span>';
        $output .= '<span class="nav-menu title">' . $item->title . '</span>';

        if ($item->description != '' && $depth == 0) {
            $output .= '<small class="description">' . $item->description . '</small>';
        }

        $output .= '</a>';
    }
}
