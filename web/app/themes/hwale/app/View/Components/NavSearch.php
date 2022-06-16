<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavSearch extends Component
{
    public $isSearchPage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->isSearchPage = is_search() ? 'true' : 'false';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-search');
    }
}
