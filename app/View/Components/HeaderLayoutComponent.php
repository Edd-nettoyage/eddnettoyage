<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;
use Psy\CodeCleaner\ReturnTypePass;

class HeaderLayoutComponent extends Component
{

    public $services;
    public $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {


        // remeber the service
        $this->services = Cache::remember('service', 3600, function () {
            return Service::all();
        });

        // remeber the category
        $this->categories = Cache::remember('categories', 3600, function () {
            return Category::all();
        });
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-layout-component', [
            'services'=>$this->services,
            'categories'=>$this->categories,
        ]);
    }
}
