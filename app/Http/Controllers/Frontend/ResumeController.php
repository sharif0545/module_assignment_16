<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{

    public function index()
    {
        $page_title = 'Sharif Patowary || Resume';
        return view('frontend.resume', compact('page_title'));
    }
}
