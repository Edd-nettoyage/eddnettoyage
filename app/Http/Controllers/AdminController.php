<?php

namespace App\Http\Controllers;

use App\Mail\BookerReplyMail;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Commitment;
use App\Models\Review;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    public function replyBooker(Request $request, $booking)
    {


        $request->validate([
            'email'=>'email|required',
            'admin_response'=>'string|required'
        ]);

        $booker = Booking::find($booking);
        if ($booker) {
            $booker->admin_response = $request->admin_response;
            $booker->save();
        }

        if ($booker) {
            Mail::to($request->email)->send(new BookerReplyMail($booker));
        }
        // Alert::success('Success', 'Reply sent successfully');
        return back();

    }

    public function updateBookingStatus(Request $request, $booking)
    {

        $update = Booking::findOrFail($booking);
        $update->service_status = $request->service_status;
        $update->save();

        // Alert::success('Success', 'Booking status upodated.');
        return back();
    }

    public function allBooking()
    {

        $data['bookings'] = Booking::latest()->paginate(10);
        return view('admin.booking-management.booking', $data);
    }

    public function deleteReview($review)
    {

        $r = Review::findOrFail($review);
        $r->delete();
        // Alert::success('Success', 'Review Deleted.');
        return back();
    }


    public function statusReview(Request $request, $review)
    {
        $r = Review::findOrFail($review);
        if ($request->status == 1 ) {
            $r->approved = true;
            $r->save();
            // Alert::success('Success', 'Review Approved.');
        }
        if ($request->status == 0 ) {
            $r->approved = false;
            $r->save();
            // Alert::success('Success', 'Review Disapproved.');
        }

        return back();
    }

    public function allReviewView()
    {

        $data['reviews'] = Review::latest()->get();
        return view('admin.review-manager.all-review', $data);
    }

    public function createServiceView()
    {
        $category = Category::all();
        return view('admin.service-management.create', compact('category'));

    }
    public function allServiceView()
    {
        $data['services'] = Service::all();
        return view('admin.service-management.retrieve', $data);

    }
    public function showServiceView($service)
    {
        $data['service'] = Service::findOrFail($service);
        return view('admin.service-management.view-update', $data);

    }

    public function editService(Request $request, $service)
    {


        if ($request->hasAny(['name', 'description', 'image', 'meta_description', 'meta_title'])) {
            $request->validate([
                'name' => 'nullable|string',
                'description' => 'nullable|string',
                'image' => 'nullable',
                'meta_description' => 'nullable|string',
                'meta_title' => 'nullable|string',
            ]);

            $edit = Service::findOrFail($service);


            if ($request->hasFile('image')) {
                $image = self::imageUploader($request->image, $edit->name , 'Service-images');
            }


            foreach ($request->only(['name', 'description', 'image', 'meta_description', 'meta_title']) as $key => $value) {
                if ($request->hasFile('image')) {
                    $edit->$key = $image;
                }else{
                    $edit->$key = $value;
                }

            }

            $edit->save();

            // Alert::success('Success', 'Service successfully updated.');
            return back();
        }

    }

    public function createService(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            // 'price' => 'required|numeric|min:0',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image= self::imageUploader($request->image, $request->name, 'Service-images');
        }
        // Store the service in the database
        Service::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => 0,
            'is_available' => true, // Default to true or change as needed
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keyword,
            'image'=> $image,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Service created successfully!');
    }

    public function createCategoryView()
    {
        return view('admin.category-management.create');

    }

    public function createCategory(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'description' => 'nullable|string',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255',
        ]);

        // Create a new category
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keyword,
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Category created successfully!');
    }

    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $category = Category::updateOrCreate(
            ['id' => $id],
            ['name' => $request->name, 'description' => $request->description]
        );

        return back();
    }


    public function storeWork(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string',
            'icon'=>'required'
        ]);

        // Save the data
        $work = Work::create([
            'title' => $request->input('title'),
            'summary' => $request->input('summary'),
            'icon' => $request->input('icon'),
        ]);

        // Return a response
        return back();
    }
    public function storeCommitment(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Save the data
        $work = Commitment::create([
            'title' => $request->input('title'),
        ]);

        // Return a response
        return back();
    }
















    public static function imageUploader($fileRequest, $title, $folderName){


        $ext = $fileRequest->getClientOriginalExtension();
        $name = \Str::slug($title).time().".".$ext;
        $file_path = $fileRequest->storeAs('public/'.$folderName, $name);

        $file_name = '/'.'storage/'.$folderName.'/'.$name;
        return $file_name;

    }


}
