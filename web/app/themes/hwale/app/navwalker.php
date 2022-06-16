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
        $numberColour = 'text-grey';

        if ($item->current) {
            $currentAria = ' aria-current="page"';
            $numberColour = 'text-red';
        }

        $output .= "<li id='menu-item-" . $item->ID . "' class='" .  implode(" ", $item->classes) . "'>";
        $output .= '<a href="' . $item->url . '" class="relative flex flex-wrap items-center overflow-hidden group"' . $currentAria . '>';
        $output .= '<span class="nav-number-sm lg:text-nav-number-lg xl:text-nav-number basis-full max-w-full mb-0.5 '
                    . $numberColour . '"> 0' . $item->menu_order . '</span>';
        $output .= '<span class="relative left-0 w-3.75 h-0.5 mr-2.5 bg-grey -translate-x-3.75 group-hover:translate-x-0 group-active:translate-x-0 group-focus:translate-x-0 transition-transform"></span>';
        $output .= '<span class="text-nav-sm lg:text-nav-lg xl:text-nav -translate-x-6.25 group-hover:translate-x-0 group-active:translate-x-0 group-focus:translate-x-0 transition-transform">' . $item->title . '</span>';

        if ($item->description != '' && $depth == 0) {
            $output .= '<small class="description">' . $item->description . '</small>';
        }

        $output .= '</a>';
    }
}
