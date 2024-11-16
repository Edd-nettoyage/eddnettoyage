<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    public function aboutUs()
    {

        return view('onboarding.about-us');
    }
}
