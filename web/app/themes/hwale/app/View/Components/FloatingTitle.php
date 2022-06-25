<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FloatingTitle extends Component
{
    public $pageTitle;
    public $pageNumber;
    public $positionOnMobile;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        global $post;

        $this->positionOnMobile = 'top-40 left-7';

        if (is_front_page()) {
            $this->positionOnMobile = 'top-40 right-7';
        } elseif (get_the_title() === 'Work') {
            $this->positionOnMobile = 'top-1/2-screen-50 right-7';
        }

        $this->pageNumber = $post->menu_order;

        if ($post->menu_order < 10) {
            $this->pageNumber = "0{$post->menu_order}";
        }

        $this->pageTitle = get_the_title();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.floating-title');
    }
}
