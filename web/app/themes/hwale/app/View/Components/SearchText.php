<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchText extends Component
{
    public $searchText;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $redColon = '<span class="text-red">:</span>';
        $blinkingCursor = '<span class="text-red animate-blinking-cursor">_</span>';

        if (have_posts()) {
            $this->searchText = sprintf(
                __(
                    'Search results for' . $redColon . ' "%s' . $blinkingCursor . '"', 'sage'
                ),
                get_search_query()
            );
        } else {
            $this->searchText = __('Sorry, no results were found.' . $blinkingCursor, 'sage');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-text');
    }
}
