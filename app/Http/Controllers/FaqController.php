<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faq;
// use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{

    public function viewFaq()
    {
        $data['items'] = Faq::latest()->get();
        return view('admin.faq-manager.index', $data);

    }
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        Faq::create($validated);
        Alert::success('Success', 'Faqs added successfully.');
        return back();
    }

    public function updateFaq(Request $request, $faq)
    {

        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $edit = Faq::find($faq);
        $edit->question = $request->question;
        $edit->answer = $request->answer;
        $edit->save();
        Alert::success('Success', 'Updated');
        return back();

    }
    public function deleteFaq($faq)
    {

        $delete = Faq::find($faq);
        $delete->delete();
        Alert::success('Success', 'Deleted');
        return back();

    }
}
