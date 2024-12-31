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
use RealRashid\SweetAlert\Facades\Alert;

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
        Alert::success('Success', 'Reply sent successfully');
        return back();

    }

    public function updateBookingStatus(Request $request, $booking)
    {

        $update = Booking::findOrFail($booking);
        $update->service_status = $request->service_status;
        $update->save();

        Alert::success('Success', 'Booking status upodated.');
        return back();
    }

    public function allBooking()
    {

        $data['bookings'] = Booking::latest()->paginate(10);
        return view('admin.booking-management.booking', $data);
    }

    public function serviceBooking($service = null)
    {

        $data['service'] =Service::find($service);
        $data['bookings'] = Booking::where('service_id', $service)->latest()->paginate(10);
        return view('admin.booking-management.service-booking', $data);
    }

    public function seenBooking()
    {

        $data['bookings'] = Booking::where('service_status', 'Seen')->latest()->paginate(10);
        return view('admin.booking-management.seen', $data);
    }
    public function doneBooking()
    {

        $data['bookings'] = Booking::where('service_status', 'Done')->latest()->paginate(10);
        return view('admin.booking-management.done', $data);
    }
    public function bookedBooking()
    {

        $data['bookings'] = Booking::where('service_status', 'Booked')->latest()->paginate(10);
        return view('admin.booking-management.booked', $data);
    }

    public function deleteReview($review)
    {

        $r = Review::findOrFail($review);
        $r->delete();
        Alert::success('Success', 'Review Deleted.');
        return back();
    }


    public function statusReview(Request $request, $review)
    {
        $r = Review::findOrFail($review);
        if ($request->status == 1 ) {
            $r->approved = true;
            $r->save();
            Alert::success('Success', 'Review Approved.');
        }
        if ($request->status == 0 ) {
            $r->approved = false;
            $r->save();
            Alert::success('Success', 'Review Disapproved.');
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

            Alert::success('Success', 'Service successfully updated.');
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
        Alert::success('Success', 'Service created successfully!');
        return back();
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
        Alert::success('Success', 'Category created successfully!');
        return back();
    }

    // toast('Your Post as been submited!','success');


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

        Alert::success('Success', 'Category Updated successfully!');
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
        Alert::success('Success', 'Work Updated successfully!');

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
        Alert::success('Success', 'Commitment created successfully!');

        return back();
    }

    public function updateCom(Request $request, $commitment)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $edit = Commitment::find($commitment);

        if (!$edit) {
            Alert::error('Error', 'Commitment not found');
            return back();
        }

        $edit->title = $request->title;
        $edit->save();
        Alert::success('Success', 'Updated');
        return back();
    }

    public function deleteCom($commitment)
    {
        $delete = Commitment::find($commitment);

        if (!$delete) {
            Alert::error('Error', 'Commitment not found');
            return back();
        }

        $delete->delete();
        Alert::success('Success', 'Deleted');
        return back();
    }



    public function updateWork(Request $request, $work)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string',
            'icon' => 'nullable',
        ]);

        $edit = Work::find($work);

        if (!$edit) {
            Alert::error('Error', 'Work not found');
            return back();
        }

        $edit->title = $request->title;
        $edit->summary = $request->summary;
        $edit->icon = $request->icon;

        $edit->save();
        Alert::success('Success', 'Updated');
        return back();
    }

    public function deleteWork($work)
    {
        $delete = Work::find($work);

        if (!$delete) {
            Alert::error('Error', 'Work not found');
            return back();
        }

        if ($delete->icon && file_exists(public_path($delete->icon))) {
            unlink(public_path($delete->icon));
        }

        $delete->delete();
        Alert::success('Success', 'Deleted');
        return back();
    }


    public function workView()
    {
        $data['items'] = Work::latest()->get();
        $data['coms'] = Commitment::latest()->get();
        return view('admin.works-management.index', $data);

    }


















    public static function imageUploader($fileRequest, $title, $folderName){


        $ext = $fileRequest->getClientOriginalExtension();
        $name = \Str::slug($title).time().".".$ext;
        $file_path = $fileRequest->storeAs('public/'.$folderName, $name);

        $file_name = '/'.'storage/'.$folderName.'/'.$name;
        return $file_name;

    }


}
