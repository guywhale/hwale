<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SlideText extends Component
{
    public $title;
    public $content;
    public $tags;
    public $button;
    /**
     * Create a new component instance.
     * @param  string  $title
     * @param  string  $content
     * @param  mixed[]   $tags
     * @param  array   $button
     * @return void
     */
    public function __construct(string $title = null, string $content = null, $tags = null, array $button = null)
    {
        $this->title = $title;
        $this->content = $content;
        $this->tags = $tags;
        $this->button = $button;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slide-text');
    }
}
