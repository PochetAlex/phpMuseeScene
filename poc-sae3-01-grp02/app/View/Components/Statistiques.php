<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class statistiques extends Component
{

    public $scene;
    /**
     * Create a new component instance.
     */
    public function __construct($scene)
    {
        $this->scene = $scene;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.statistiques');
    }
}
