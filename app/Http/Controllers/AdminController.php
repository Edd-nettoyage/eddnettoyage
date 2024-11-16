<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function createService()
    {
        return view('admin.service-management.create');

    }
    public function createcategory()
    {
        return view('admin.category-management.create');

    }
}
