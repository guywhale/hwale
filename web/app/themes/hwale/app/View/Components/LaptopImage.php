<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LaptopImage extends Component
{
    public $laptopImage;
    /**
     * Create a new component instance.
     *
     * @param  array $laptopImage
     * @return void
     */
    public function __construct(array $laptopImage = null)
    {
        $this->laptopImage = $laptopImage;
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
