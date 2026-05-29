<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 public function index()
{
    $blogs = Blog::with('category')
        ->latest()
        ->paginate(10);

    return view(
        'backend.Blog.index',
        compact('blogs')
    );
}
    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    $categories = BlogCategory::latest()->get();

    return view(
        'backend.Blog.create',
        compact('categories')
    );
}
    /**
     * Store a newly created resource in storage.
     */


public function store(Request $request)
{
    $image = $request->file('image')
        ->store('blogs','public');

    Blog::create([

        'blog_category_id' =>
            $request->blog_category_id,

        'title' => $request->title,

        'slug' => Str::slug(
            $request->title
        ),

        'image' => $image,

        'short_description' =>
            $request->short_description,

        'content' =>
            $request->content,

        'meta_title' =>
            $request->meta_title,

        'meta_description' =>
            $request->meta_description,

        'meta_keywords' =>
            $request->meta_keywords,

        'status' =>
            $request->status,
    ]);

    return redirect()
        ->route('blog.index')
        ->with('success','Blog Added');
}

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Blog $blog)
{
    $categories = BlogCategory::latest()->get();

    return view(
        'backend.Blog.edit',
        compact(
            'blog',
            'categories'
        )
    );
}

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, Blog $blog)
{
    $request->validate([
        'blog_category_id' => 'required',
        'title' => 'required',
        'short_description' => 'required',
        'content' => 'required',
    ]);

    $image = $blog->image;

    if ($request->hasFile('image')) {

        if ($blog->image) {
            Storage::disk('public')
                ->delete($blog->image);
        }

        $image = $request->file('image')
            ->store('blogs', 'public');
    }

    $blog->update([

        'blog_category_id' => $request->blog_category_id,

        'title' => $request->title,

        'slug' => Str::slug($request->title),

        'image' => $image,

        'short_description' => $request->short_description,

        'content' => $request->content,

        'meta_title' => $request->meta_title,

        'meta_description' => $request->meta_description,

        'meta_keywords' => $request->meta_keywords,

        'status' => $request->status,

    ]);

    return redirect()
        ->route('blog.index')
        ->with('success', 'Blog Updated Successfully');
}
    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Blog $blog)
{
    if ($blog->image) {

        Storage::disk('public')
            ->delete($blog->image);
    }

    $blog->delete();

    return redirect()
        ->route('blog.index')
        ->with('success', 'Blog Deleted Successfully');
}
}
