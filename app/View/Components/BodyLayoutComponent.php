<?php

namespace App\View\Components;

use App\Models\Review;
use Illuminate\View\Component;

class BodyLayoutComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $data['review']= Review::latest()->get();
        return view('components.body-layout-component', $data);
    }
}
