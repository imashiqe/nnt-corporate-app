@extends('backend.master')

@section('content')

<div class="container-fluid">

    <div class="card card-warning">

        <div class="card-header">
            <h3 class="card-title">
                Edit Video
            </h3>
        </div>

        <form action="{{ route('video.update',$video->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="mb-3">

                    <label>Video Title</label>

                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ $video->title }}">

                </div>

                <div class="mb-3">

                    <label>YouTube URL</label>

                    <input type="url"
                           name="youtube_url"
                           class="form-control"
                           value="{{ $video->youtube_url }}">

                </div>

            </div>

            <div class="card-footer">

                <button class="btn btn-warning">

                    Update

                </button>

                <a href="{{ route('video.index') }}"
                   class="btn btn-secondary">

                    Back

                </a>

            </div>

        </form>

    </div>

</div>

@endsection