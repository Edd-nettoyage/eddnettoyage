<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
// use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required', // Validation rule for logo
            'name' => 'required|string|max:255', // Validation rule for name
            'link' => 'nullable', // Validation rule for link
        ]);

        $logoPath = self::imageUploader($request->logo, 'Affiliate_company_logos');

        // Create a new company entry in the database
        Company::create([
            'logo' => $logoPath,
            'name' => $request->input('name'),
            'link' => $request->input('link'),
        ]);

        Alert::success('Success', 'Affiliate Updated Successfully.');
        return back();
    }

    public function viewAffiliates()
    {

        $data['items']= Company::latest()->get();
        return view('admin.company-management.index', $data);
    }

    public function updateAffiliate(Request $request, $company)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $edit = Company::find($company);

        if (!$edit) {
            Alert::error('Error', 'Company not found');
            return back();
        }

        $edit->name = $request->name;
        $edit->link = $request->link;

        // Handle logo upload if provided
        if ($request->hasFile('logo')) {
             // Delete old logo if exists
            if ($edit->logo && file_exists(public_path($edit->logo))) {
                unlink(public_path($edit->logo));
            }

            // Upload new logo
            $logoPath = self::imageUploader($request->logo, 'Affiliate_company_logos');
            $edit->logo = $logoPath;
        }

        $edit->save();
        Alert::success('Success', 'Company Updated');
        return back();
    }

    public function deleteAffiliate($company)
    {
        $delete = Company::find($company);

        if (!$delete) {
            Alert::error('Error', 'Company not found');
            return back();
        }

        // Delete logo if exists
        if ($delete->logo && file_exists(public_path($delete->logo))) {
            unlink(public_path($delete->logo));
        }

        $delete->delete();
        Alert::success('Success', 'Company Deleted');
        return back();
    }



















    public static function imageUploader($fileRequest, $folderName){


        $ext = $fileRequest->getClientOriginalExtension();
        $name = \Str::slug('image').time().".".$ext;
        $file_path = $fileRequest->storeAs('public/'.$folderName, $name);

        $file_name = '/'.'storage/'.$folderName.'/'.$name;
        return $file_name;

    }
    public static function videoUploader($fileRequest, $user, $folderName){


        $ext = $fileRequest->getClientOriginalExtension();
        $name = \Str::slug($user->name).time().".".$ext;
        $file_path = $fileRequest->storeAs('public/'.$folderName, $name);

        $file_name = '/'.'storage/'.$folderName.'/'.$name;
        return $file_name;

    }
}
