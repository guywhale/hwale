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
     * @param  string $positionOnMobile
     * @return void
     */
    public function __construct($positionOnMobile = 'left')
    {
        global $post;

        $this->pageTitle = get_the_title();

        if ($post->menu_order < 10) {
            $this->pageNumber = "0{$post->menu_order}";
        } else {
            $this->pageNumber = $post->menu_order;
        }

        if ($positionOnMobile === 'left') {
            $this->positionOnMobile = 'left-7';
        } elseif ($positionOnMobile === 'right') {
            $this->positionOnMobile = 'right-7';
        }

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
