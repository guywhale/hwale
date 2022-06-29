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
        $numberClasses = 'w-10.75 md:w-15.5 nav-number-sm md:text-nav-number-lg lg:w-auto lg:text-nav-number lg:basis-full lg:max-w-full lg:mb-0.5';
        $numberColour = 'text-grey';
        $interactClasses = 'lg:group-hover:translate-x-0 lg:group-active:translate-x-0 lg:group-focus:translate-x-0 transition-all';
        $lineColourPosition = 'bg-grey lg:-translate-x-3.75';
        $lineClasses = 'relative top-1/2 w-full h-1 max-w-0 group-hover:max-w-7.5 md:h-1.5 lg:top-unset left-0 lg:max-w-full lg:w-3.75 lg:h-0.5 lg:mr-2.5';
        $titlePosition = 'translate-x-0 group-hover:translate-x-3.75 lg:-translate-x-6.25';
        $titleClasses = 'text-nav-sm md:text-nav-lg lg:text-nav';

        if ($item->current) {
            $currentAria = 'aria-current="page"';
            $numberColour = 'text-red';
            $lineColourPosition = 'bg-red max-w-[30px] lg:translate-x-0';
            $titlePosition = 'translate-x-3.75 lg:translate-x-0';
        }

        $output .= "<li id=\"menu-item-{$item->ID}\" class=\"{$itemClasses}\">";
        $output .= "<a href=\"{$item->url}\" class=\"{$linkClasses}\" {$currentAria} [data-swup-preload]>";
        $output .= "<span class=\"{$numberClasses} {$numberColour}\">0{$item->menu_order}</span>";
        $output .= "<span class=\"{$lineClasses} {$lineColourPosition} {$interactClasses}\"></span>";
        $output .= "<span class=\"{$titleClasses} {$titlePosition} {$interactClasses}\">{$item->title}</span>";

        if ($item->description != '' && $depth == 0) {
            $output .= "<small class=\"description\">{$item->description}</small>";
        }

        $output .= '</a>';
    }
}
