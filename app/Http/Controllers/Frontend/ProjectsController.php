<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function index()
    {
        $page_tile = 'Sharif Patowary || Projects';
        return view('frontend.projects', compact('page_tile'));
    }
}
