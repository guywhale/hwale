<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $url;
    public $classes;
    public $target;
    public $label;

    /**
     * Create a new component instance.
     *
     * @param  string  $type
     * @param  string  $url
     * @param  string  $classes
     * @param  string  $label
     * @param  string  $target
     * @return void
     */
    public function __construct($type = 'link', $classes = '', $url = null, $target = null, $label = 'Button Label')
    {
        if ('link' == $type) {
            $type = 'a';
        } elseif ('button' == $type) {
            $type = 'button';
        } else {
            $type = '';
        }

        $this->type = $type;
        $this->url = $url ? "href={$url}" : '';
        $this->classes = $classes;
        $this->target = $target ? "target=\"{$target}\"" : '';
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
