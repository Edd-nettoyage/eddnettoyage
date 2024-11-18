<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceDetailsComponent extends Component
{

    public $service;
    public $categories;
    public $services;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($service, $categories, $services)
    {
        $this->service = $service;
        $this->categories = $categories;
        $this->services = $services;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.service-details-component');
    }
}
