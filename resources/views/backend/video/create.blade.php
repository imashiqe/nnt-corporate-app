@extends('backend.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Add Video</h3>
    </div>

    <form action="{{ route('video.store') }}" method="POST">
        @csrf

        <div class="card-body">

            <div class="mb-3">
                <label>Video Title</label>
                <input type="text"
                       name="title"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label>YouTube Link</label>
                <input type="url"
                       name="youtube_url"
                       class="form-control"
                       placeholder="https://youtube.com/shorts/xxxx">
            </div>

        </div>

        <div class="card-footer">
            <button class="btn btn-primary">
                Save
            </button>
        </div>

    </form>
</div>

@endsection