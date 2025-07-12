<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        $page_tile = 'Sharif Patowary || Contact';
        return view('frontend.contact', compact('page_tile'));
    }

    public function contact_save(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);
        Log::info('Contact Form Submission:', $validated);
        session()->flash('success', 'Your form has been submitted successfully!');
        return redirect()->route('confirmation')->with('form_data', $validated);
    }
    public function confirmation()
    {
        $page_tile = 'Sharif Patowary || Contact';
        $formData = session('form_data');
        return view('frontend.confirmation', compact('formData', 'page_tile'));
    }
}
