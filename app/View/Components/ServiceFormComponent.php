<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class ServiceFormComponent extends Component
{

    public $services;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->services=Service::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.service-form-component', [
            'services'=>$this->services,
        ]);
    }
}
