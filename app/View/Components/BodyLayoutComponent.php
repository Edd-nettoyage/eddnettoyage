<?php

namespace App\View\Components;

use App\Models\Commitment;
use App\Models\Company;
use App\Models\Coverage;
use App\Models\Faq;
use App\Models\Review;
use App\Models\Work;
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

        $data['review']= Review::where('approved', true)->latest()->get();
        $data['faq']= Faq::latest()->take(4);
        $data['companies']= Company::latest()->get();
        $data['coverage']= Coverage::latest()->get();
        $data['work']= Work::all();
        $data['com']= Commitment::all();
        return view('components.body-layout-component', $data);
    }
}
