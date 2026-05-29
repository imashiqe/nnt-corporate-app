<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Video;
use App\Models\BlogCategory;

class FrontendController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        $testimonials = Testimonial::latest()->get();
        $clients = Client::latest()->get();
        $videos = Video::latest()->get();

        $blogs = Blog::where('status', 1)
            ->latest()
            ->take(3)
            ->get();

        return view(
            'frontend.main',
            compact(
                'galleries',
                'testimonials',
                'clients',
                'videos',
                'blogs'
            )
        );
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
    $query = Blog::with('category')
        ->where('status',1);

    if(request('search'))
    {
        $query->where(
            'title',
            'like',
            '%'.request('search').'%'
        );
    }

    if(request('category'))
    {
        $query->whereHas(
            'category',
            function($q)
            {
                $q->where(
                    'slug',
                    request('category')
                );
            }
        );
    }

    $blogs = $query
        ->latest()
        ->paginate(9);

        

    $popularBlogs = Blog::latest()
        ->take(5)
        ->get();

    $categories = BlogCategory::withCount('blogs')
        ->get();

    return view(
        'frontend.pages.blog.blog',
        compact(
            'blogs',
            'popularBlogs',
            'categories'
        )
    );
}

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        $popularBlogs = Blog::where('status', 1)
            ->latest()
            ->take(5)
            ->get();

        $categories = BlogCategory::withCount('blogs')->get();

        return view(
            'frontend.pages.blog.blogdetails',
            compact(
                'blog',
                'popularBlogs',
                'categories'
            )
        );
    }
}