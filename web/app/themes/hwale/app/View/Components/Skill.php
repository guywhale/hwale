<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Skill extends Component
{
    public $skill;
    public $score;
    /**
     * Create a new component instance.
     * @param  string  $skill
     * @param  string  $score
     * @return void
     */
    public function __construct($skill = null, $score = null)
    {
        $this->skill = $skill;
        $this->score = $score;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.skill');
    }
}
