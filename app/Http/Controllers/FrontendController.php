<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class FrontendController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();

        return view('frontend.main', compact('galleries'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function customBag()
    {
        return view('frontend.pages.custombag');
    }

    public function blog()
    {
        return view('frontend.pages.blog.blog');
    }

    public function blogDetails($id)
    {
        return view('frontend.pages.blog.blogdetails');
    }
}