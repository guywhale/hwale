<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LaptopImage extends Component
{
    public $laptopImage;
    public $imageSlides;

    /**
     * Create a new component instance.
     *
     * @param  array $laptopImage
     * @param  array $imageSlides
     * @return void
     */
    public function __construct(array $laptopImage = null, array $imageSlides = null)
    {
        $this->laptopImage = $laptopImage;
        $this->imageSlides = $imageSlides;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.laptop-image');
    }
}
