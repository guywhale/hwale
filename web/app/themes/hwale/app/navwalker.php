<?php

namespace App;

class MainNavWalker extends \Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $itemClasses = implode(" ", $item->classes);
        $itemClasses .= ' py-3.75 px-0 lg:py-0 lg:px-6 2xl:px-11.25';
        $currentAria = '';
        $linkClasses = 'relative flex flex-wrap items-center overflow-hidden group';
        $numberClasses = 'nav-number-sm md:text-nav-number-lg lg:text-nav-number basis-full max-w-full mb-0.5';
        $numberColour = 'text-grey';
        $interactClasses = 'group-hover:translate-x-0 group-active:translate-x-0 group-focus:translate-x-0 transition-transform';
        $lineColourPosition = 'bg-grey -translate-x-3.75';
        $lineClasses = 'relative left-0 w-3.75 h-0.5 mr-2.5';
        $titlePosition = '-translate-x-6.25';
        $titleClasses = 'text-nav-sm md:text-nav-lg lg:text-nav';

        if ($item->current) {
            $currentAria = 'aria-current="page"';
            $numberColour = 'text-red';
            $lineColourPosition = 'bg-red translate-x-0';
            $titlePosition = 'translate-x-0';
        }

        $output .= "<li id=\"menu-item-{$item->ID}\" class=\"{$itemClasses}\">";
        $output .= "<a href=\"{$item->url}\" class=\"{$linkClasses}\" {$currentAria}>";
        $output .= "<span class=\"{$numberClasses} {$numberColour}\">0{$item->menu_order}</span>";
        $output .= "<span class=\"{$lineClasses} {$lineColourPosition} {$interactClasses}\"></span>";
        $output .= "<span class=\"{$titleClasses} {$titlePosition} {$interactClasses}\">{$item->title}</span>";

        if ($item->description != '' && $depth == 0) {
            $output .= "<small class=\"description\">{$item->description}</small>";
        }

        $output .= '</a>';
    }
}
