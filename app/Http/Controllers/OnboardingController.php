<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    public function aboutUs()
    {

        return view('onboarding.about-us');
    }

    public function requestQuote()
    {

        $services = Service::all();
        return view('onboarding.request-quote', compact('services'));
    }

    public function contactUs()
    {
        return view('onboarding.contact-us');
    }


}
