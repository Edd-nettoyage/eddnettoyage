<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Coverage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

        Alert::success('success', 'Added.');
        return back();
    }

    public function updateCoverage(Request $request, $coverage)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $edit = Coverage::find($coverage);

        if (!$edit) {
            Alert::error('Error', 'Coverage not found');
            return back();
        }

        $edit->title = $request->title;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($edit->image && file_exists(public_path($edit->image))) {
                unlink(public_path($edit->image));
            }

            // Upload new image
            $imagePath = $this->imageUploader($request->file('image'), 'Coverage_images');
            $edit->image = $imagePath;
        }

        $edit->save();
        Alert::success('Success', 'Updated');
        return back();
    }

    public function deleteCoverage($coverage)
    {
            $delete = Coverage::find($coverage);

            if (!$delete) {
                Alert::error('Error', 'Coverage not found');
                return back();
            }

            if ($delete->image && file_exists(public_path($delete->image))) {
                unlink(public_path($delete->image));
            }

            $delete->delete();
        Alert::success('Success', 'Deleted');
        return back();
    }


    public function viewCoverage()
    {

        $data['items'] = Coverage::latest()->paginate(10);
        return view('admin.coverage-management.index', $data);
    }

















    public static function imageUploader($fileRequest, $folderName){


        $ext = $fileRequest->getClientOriginalExtension();
        $name = \Str::slug('image').time().".".$ext;
        $file_path = $fileRequest->storeAs('public/'.$folderName, $name);

        $file_name = '/'.'storage/'.$folderName.'/'.$name;
        return $file_name;

    }
}
