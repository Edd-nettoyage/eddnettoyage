<?php

namespace App\View\Components;

use App\Models\Coverage;
use Illuminate\View\Component;

class FooterLayoutComponent extends Component
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
        $data['coverage']= Coverage::latest()->take(3)->get();
        return view('components.footer-layout-component', $data);
    }
}
