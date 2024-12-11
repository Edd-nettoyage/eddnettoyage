<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Coverage;
use Illuminate\Http\Request;

class CoverageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload the image using a static uploader function
        $imagePath = $this->imageUploader($request->file('image'), 'Coverage_images');

        // Save data to the database
        Coverage::create([
            'title' => $request->input('title'),
            'image' => $imagePath,
        ]);

        return back();
    }



















    

    public static function imageUploader($fileRequest, $folderName){


        $ext = $fileRequest->getClientOriginalExtension();
        $name = \Str::slug('image').time().".".$ext;
        $file_path = $fileRequest->storeAs('public/'.$folderName, $name);

        $file_name = '/'.'storage/'.$folderName.'/'.$name;
        return $file_name;

    }
}
