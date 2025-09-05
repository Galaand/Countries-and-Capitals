<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Question extends Component
{

    public String $country;
    public String $currentQuestion;
    public String $totalQuestion;
    /**
     * Create a new component instance.
     */
    public function __construct($country, $currentQuestion, $totalQuestion)
    {
        $this->country = $country;
        $this->currentQuestion = $currentQuestion;
        $this->totalQuestion = $totalQuestion;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.question');
    }
}
