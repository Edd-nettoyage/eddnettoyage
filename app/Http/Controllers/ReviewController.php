<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:255',
            'review' => 'nullable|string',
            'rating' => 'nullable|integer|min:1|max:5',
            'title' => 'nullable|string|max:255',
        ]);

        $review = Review::create($validated);

        // return response()->json([
        //     'message' => 'Review submitted successfully!',
        //     'data' => $review,
        // ], 201);
        return back();
    }
}
