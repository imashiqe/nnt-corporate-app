@extends('backend.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">

            <div class="card card-warning card-outline">

                <div class="card-header">
                    <h3 class="card-title">
                        Edit Gallery
                    </h3>
                </div>

                <form action="{{ route('gallery.update',$gallery->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="mb-3">

                            <label class="form-label">
                                Product Name
                            </label>

                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                value="{{ old('title',$gallery->title) }}"
                            >

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Category
                            </label>

                            <select name="category"
                                    class="form-control">

                                <option value="backpack"
                                    {{ $gallery->category=='backpack' ? 'selected' : '' }}>
                                    Backpack
                                </option>

                                <option value="office"
                                    {{ $gallery->category=='office' ? 'selected' : '' }}>
                                    Office Bag
                                </option>

                                <option value="crossbody"
                                    {{ $gallery->category=='crossbody' ? 'selected' : '' }}>
                                    Crossbody Bag
                                </option>

                                <option value="sports"
                                    {{ $gallery->category=='sports' ? 'selected' : '' }}>
                                    Sports Bag
                                </option>

                                <option value="accessory"
                                    {{ $gallery->category=='accessory' ? 'selected' : '' }}>
                                    Accessory Bag
                                </option>

                                <option value="jute"
                                    {{ $gallery->category=='jute' ? 'selected' : '' }}>
                                    Jute Bag
                                </option>

                            </select>

                        </div>

                        <div class="mb-3">

                            <img
                                src="{{ asset('storage/'.$gallery->image) }}"
                                width="150"
                                class="img-thumbnail"
                            >

                        </div>

                        <div class="input-group mb-3">

                            <input
                                type="file"
                                name="image"
                                class="form-control"
                            >

                            <label class="input-group-text">
                                Upload
                            </label>

                        </div>

                    </div>

                    <div class="card-footer">

                        <button class="btn btn-warning">
                            Update
                        </button>

                        <a href="{{ route('gallery.index') }}"
                           class="btn btn-secondary">
                            Back
                        </a>

                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

@endsection