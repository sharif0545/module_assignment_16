<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page_tile = 'Sharif Patowary || Home';
        return view('frontend.home', compact('page_tile'));
    }
}
