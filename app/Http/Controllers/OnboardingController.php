<?php

namespace App\Http\Controllers;

use App\Mail\BookingConfirmationMail;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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


    public function bookService(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
            'admin_response' => 'nullable',
            'service_status' => 'nullable',
            'urgency' => 'required|string',
            'service_date' => 'required|date',
            'service_time' => 'required',
            'service_id' => 'required|exists:services,id',
            'service_location' => 'required|string',
            'service_description' => 'required|string'
        ]);

        $booking = Booking::create($request->all());

        if ($booking) {

            Mail::to(env('MAIL_FROM_ADDRESS'))
                ->cc($request->email)
                ->send(new BookingConfirmationMail($booking));
        }

        // dd('test');

        // Alert::success('Success', 'Service successfully booked.');

        return redirect()->back();
    }


}
