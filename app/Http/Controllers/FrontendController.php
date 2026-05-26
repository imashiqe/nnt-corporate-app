<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Testimonial;

class FrontendController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
         $testimonials = Testimonial::latest()->get();
        return view('frontend.main', compact('galleries', 'testimonials'));
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