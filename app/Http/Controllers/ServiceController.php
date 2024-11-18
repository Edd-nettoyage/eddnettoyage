<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function aService($slug)
    {

        $service = Service::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        $services = Service::all();
        return view('onboarding.services.index', compact('service', 'categories','services'));
    }
}
