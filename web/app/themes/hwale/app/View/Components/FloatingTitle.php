<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FloatingTitle extends Component
{
    public $pageTitle;
    public $pageNumber;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        global $post;

        $this->pageTitle = get_the_title();
        $this->pageNumber = $post->menu_order;
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
