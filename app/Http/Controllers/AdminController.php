<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
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

}
