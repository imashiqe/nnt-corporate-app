<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function home()
{
    $galleries = Gallery::latest()->get();

    return view('frontend.main', compact('galleries'));
}
    public function index()
    {
        $galleries = Gallery::latest()->paginate(15);

        return view('backend.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('backend.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|image'
        ]);

        $image = $request->file('image')
            ->store('gallery', 'public');

        Gallery::create([
            'title' => $request->title,
            'category' => $request->category,
            'image' => $image
        ]);

        return redirect()
            ->route('gallery.index')
            ->with('success', 'Gallery Added');
    }

    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required'
        ]);

        $image = $gallery->image;

        if ($request->hasFile('image')) {

            Storage::disk('public')->delete($gallery->image);

            $image = $request->file('image')
                ->store('gallery', 'public');
        }

        $gallery->update([
            'title' => $request->title,
            'category' => $request->category,
            'image' => $image
        ]);

        return redirect()
            ->route('gallery.index')
            ->with('success', 'Gallery Updated');
    }

    public function destroy(Gallery $gallery)
    {
        Storage::disk('public')->delete($gallery->image);

        $gallery->delete();

        return back()->with('success', 'Deleted Successfully');
    }
}