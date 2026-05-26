@extends('backend.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">

            <div class="card card-primary card-outline">

                <div class="card-header">
                    <h3 class="card-title">Create Gallery Item</h3>
                </div>

                <form action="{{ route('gallery.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label">
                                Product Name
                            </label>

                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                value="{{ old('title') }}"
                                required
                            >

                            @error('title')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Category
                            </label>

                            <select name="category"
                                    class="form-control">

                                <option value="">
                                    Select Category
                                </option>

                                <option value="backpack">Backpack</option>
                                <option value="office">Office Bag</option>
                                <option value="crossbody">Crossbody Bag</option>
                                <option value="sports">Sports Bag</option>
                                <option value="accessory">Accessory Bag</option>
                                <option value="jute">Jute Bag</option>

                            </select>
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
                        <button type="submit"
                                class="btn btn-primary">
                            Save
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