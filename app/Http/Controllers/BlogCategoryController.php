<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::latest()
            ->paginate(10);

        return view(
            'backend.blog-category.index',
            compact('categories')
        );
    }

    public function create()
    {
        return view(
            'backend.blog-category.create'
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:blog_categories,name'
        ]);

        BlogCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()
            ->route('blog-category.index')
            ->with('success','Category Created');
    }

    public function edit(BlogCategory $blogCategory)
    {
        return view(
            'backend.blog-category.edit',
            compact('blogCategory')
        );
    }

    public function update(
        Request $request,
        BlogCategory $blogCategory
    )
    {
        $request->validate([
            'name' => 'required'
        ]);

        $blogCategory->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()
            ->route('blog-category.index')
            ->with('success','Category Updated');
    }

    public function destroy(
        BlogCategory $blogCategory
    )
    {
        $blogCategory->delete();

        return back()
            ->with('success','Category Deleted');
    }
}