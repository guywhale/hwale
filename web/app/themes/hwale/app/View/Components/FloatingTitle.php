<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FloatingTitle extends Component
{
    public $pageTitle;
    public $pageNumber;
    public $position;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        global $post;

        $this->position = 'top-40 left-7 lg:top-1/3-screen lg:right-15 lg:left-unset';

        if (is_front_page()) {
            $this->position = 'top-40 right-7 lg:top-1/3-screen lg:right-15 lg:left-unset';
        } elseif (get_the_title() === 'Work') {
            // $this->position = 'hidden';
            $this->position = 'top-40 left-7 md:top-1/2-screen-50 md:right-7 md:left-unset lg:top-52';
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
