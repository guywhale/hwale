<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BGLines extends Component
{
    public $showLines;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $pageHasLines = true;

        switch ($pageHasLines) {
            case is_front_page():
                $pageHasLines = false;
                break;
            case get_the_title() === 'Work':
                $pageHasLines = false;
                break;
            case is_search():
                $pageHasLines = false;
                break;
            default:
                $pageHasLines = true;
                break;
        }

        $this->showLines = $pageHasLines;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.b-g-lines');
    }
}
