<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->paginate(10);

        return view(
            'backend.video.index',
            compact('videos')
        );
    }

    public function create()
    {
        return view('backend.video.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'youtube_url' => 'required'
        ]);

        Video::create([
            'title' => $request->title,
            'youtube_url' => $request->youtube_url
        ]);

        return redirect()
            ->route('video.index')
            ->with('success', 'Video Added Successfully');
    }

    public function edit(Video $video)
    {
        return view(
            'backend.video.edit',
            compact('video')
        );
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required',
            'youtube_url' => 'required'
        ]);

        $video->update([
            'title' => $request->title,
            'youtube_url' => $request->youtube_url
        ]);

        return redirect()
            ->route('video.index')
            ->with('success', 'Video Updated Successfully');
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()
            ->route('video.index')
            ->with('success', 'Video Deleted Successfully');
    }
}