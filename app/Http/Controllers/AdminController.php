<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Commitment;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function createServiceView()
    {
        $category = Category::all();
        return view('admin.service-management.create', compact('category'));

    }

    public function createService(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        // Store the service in the database
        Service::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'is_available' => true, // Default to true or change as needed
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keyword,
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


}
