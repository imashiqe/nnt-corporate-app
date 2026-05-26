<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);

        return view(
            'backend.testimonial.index',
            compact('testimonials')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'review'      => 'required',
            'rating'      => 'required|integer|min:1|max:5',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')
                ->store('testimonial', 'public');
        }

        Testimonial::create([
            'name'        => $request->name,
            'designation' => $request->designation,
            'review'      => $request->review,
            'rating'      => $request->rating,
            'image'       => $image,
        ]);

        return redirect()
            ->route('testimonial.index')
            ->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view(
            'backend.testimonial.show',
            compact('testimonial')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view(
            'backend.testimonial.edit',
            compact('testimonial')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'review'      => 'required',
            'rating'      => 'required|integer|min:1|max:5',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $image = $testimonial->image;

        if ($request->hasFile('image')) {

            if ($testimonial->image) {
                Storage::disk('public')
                    ->delete($testimonial->image);
            }

            $image = $request->file('image')
                ->store('testimonial', 'public');
        }

        $testimonial->update([
            'name'        => $request->name,
            'designation' => $request->designation,
            'review'      => $request->review,
            'rating'      => $request->rating,
            'image'       => $image,
        ]);

        return redirect()
            ->route('testimonial.index')
            ->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image) {
            Storage::disk('public')
                ->delete($testimonial->image);
        }

        $testimonial->delete();

        return redirect()
            ->route('testimonial.index')
            ->with('success', 'Testimonial deleted successfully.');
    }
}