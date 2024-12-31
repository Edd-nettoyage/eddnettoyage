<?php

namespace App\View\Components;

use App\Models\Booking;
use App\Models\Company;
use App\Models\Review;
use App\Models\Service;
use Illuminate\View\Component;

class DashBodyComponent extends Component
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

        $data['bookings'] = Booking::latest()->get();
        $data['services'] = Service::latest()->get();
        $data['affiliates'] = Company::latest()->get();
        $data['reviews'] = Review::latest()->get();
        return view('components.dash-body-component', $data);
    }
}
