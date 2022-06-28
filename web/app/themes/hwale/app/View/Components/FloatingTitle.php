<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FloatingTitle extends Component
{
    public $pageTitle;
    public $pageNumber;
    public $position;
    public $contactH1Size;
    public $contactNumberPosition;
    public $contactNumberSize;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        global $post;

        $this->pageNumber = $post->menu_order ?? 6;
        $this->pageTitle = get_the_title() ?? 'Search';
        $this->position = 'top-40 left-7 lg:top-1/3-screen lg:right-15 lg:left-unset';
        $this->contactH1Size = null;
        $this->contactNumberPosition = 'lg:-top-32.5 lg:-left-12';
        $this->contactNumberSize = 'lg:text-h1-number';

        if (is_front_page()) {
            $this->position = 'top-40 right-7 lg:top-1/3-screen lg:right-15 lg:left-unset';
        }

        if (get_the_title() === 'Work') {
            $this->position = 'top-40 left-7 md:top-1/2-screen-26 md:right-7 md:left-unset lg:top-1/3-screen lg:right-15';
        }

        if (get_the_title() === 'Contact') {
            $this->contactH1Size = 'lg:text-h1-contact xl:text-h1';
            $this->contactNumberPosition = 'lg:-top-17 xl:-top-32.5 lg:-left-12';
            $this->contactNumberSize = 'lg:text-h1-contact-number xl:text-h1-number';
        }

        if (is_search()) {
            $this->pageNumber = 6;
            $this->pageTitle = 'Search';
            $this->position = 'top-40 left-7 lg:top-1/3-screen lg:right-15 lg:left-unset';
        }

        if ($this->pageNumber < 10) {
            $this->pageNumber = "0{$this->pageNumber}";
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
