@extends('backend.master')

@section('title', 'Create Testimonial')

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-8">

            <div class="card card-primary card-outline">

                <div class="card-header">
                    <h3 class="card-title">Create Testimonial</h3>
                </div>

                <form action="{{ route('testimonial.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Client Name --}}
                        <div class="mb-3">
                            <label class="form-label">
                                Client Name <span class="text-danger">*</span>
                            </label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="{{ old('name') }}"
                                   placeholder="Enter client name"
                                   required>
                        </div>

                        {{-- Designation --}}
                        <div class="mb-3">
                            <label class="form-label">
                                Designation / Company
                            </label>

                            <input type="text"
                                   name="designation"
                                   class="form-control"
                                   value="{{ old('designation') }}"
                                   placeholder="Example: CEO, ABC Company">
                        </div>

                        {{-- Review --}}
                        <div class="mb-3">
                            <label class="form-label">
                                Review <span class="text-danger">*</span>
                            </label>

                            <textarea name="review"
                                      rows="5"
                                      class="form-control"
                                      placeholder="Write client review..."
                                      required>{{ old('review') }}</textarea>
                        </div>

                        {{-- Rating --}}
                        <div class="mb-3">
                            <label class="form-label">
                                Rating <span class="text-danger">*</span>
                            </label>

                            <select name="rating"
                                    class="form-select"
                                    required>

                                <option value="">Select Rating</option>

                                <option value="5">⭐⭐⭐⭐⭐ (5 Star)</option>
                                <option value="4">⭐⭐⭐⭐ (4 Star)</option>
                                <option value="3">⭐⭐⭐ (3 Star)</option>
                                <option value="2">⭐⭐ (2 Star)</option>
                                <option value="1">⭐ (1 Star)</option>

                            </select>
                        </div>

                        {{-- Photo --}}
                        <div class="mb-3">
                            <label class="form-label">
                                Client Photo
                            </label>

                            <input type="file"
                                   name="image"
                                   class="form-control"
                                   accept="image/*">
                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit"
                                class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            Save Testimonial
                        </button>

                        <a href="{{ route('testimonial.index') }}"
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