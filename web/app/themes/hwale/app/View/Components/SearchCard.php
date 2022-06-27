<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchCard extends Component
{
    public $link;
    public $previewImage;
    public $title;
    public $previewText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->link = get_the_permalink() ?? null;
        $this->previewImage = get_field('preview_image') ?? null;
        $this->title = get_the_title() ?? null;
        $this->previewText = get_field('preview_text') ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-card');
    }
}
