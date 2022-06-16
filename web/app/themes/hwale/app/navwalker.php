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
        $itemClasses = implode(" ", $item->classes);
        $itemClasses .= ' py-3.75 px-0 lg:py-0 lg:px-6 2xl:px-11.25';
        $currentAria = '';
        $linkClasses = 'relative flex flex-wrap items-center overflow-hidden group';
        $numberClasses = 'nav-number-sm lg:text-nav-number-lg xl:text-nav-number basis-full max-w-full mb-0.5';
        $numberColour = 'text-grey';
        $interactClasses = 'group-hover:translate-x-0 group-active:translate-x-0 group-focus:translate-x-0 transition-transform';
        $lineClasses = 'relative left-0 w-3.75 h-0.5 mr-2.5 bg-grey -translate-x-3.75';
        $titleClasses = 'text-nav-sm lg:text-nav-lg xl:text-nav -translate-x-6.25';

        if ($item->current) {
            $currentAria = 'aria-current="page"';
            $numberColour = 'text-red';
        }

        $output.= "<li id=\"menu-item-{$item->ID}\" class=\"{$itemClasses}\">";
        $output .= "<a href=\"{$item->url}\" class=\"{$linkClasses}\" {$currentAria}>";
        $output .= "<span class=\"{$numberClasses} {$numberColour}\">0{$item->menu_order}</span>";
        $output .= "<span class=\"{$lineClasses} {$interactClasses}\"></span>";
        $output .= "<span class=\"{$titleClasses} {$interactClasses}\">{$item->title}</span>";

        if ($item->description != '' && $depth == 0) {
            $output .= "<small class=\"description\">{$item->description}</small>";
        }

        $output .= '</a>';
    }
}
