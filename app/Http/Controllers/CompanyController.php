<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

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
