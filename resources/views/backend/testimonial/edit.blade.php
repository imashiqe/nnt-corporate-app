@extends('backend.master')

@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-md-8">

            <div class="card card-warning card-outline">

                <div class="card-header">
                    <h3 class="card-title">
                        Edit Testimonial
                    </h3>
                </div>

                <form action="{{ route('testimonial.update',$testimonial->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="mb-3">
                            <label>Name</label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="{{ $testimonial->name }}">
                        </div>

                        <div class="mb-3">
                            <label>Designation</label>

                            <input type="text"
                                   name="designation"
                                   class="form-control"
                                   value="{{ $testimonial->designation }}">
                        </div>

                        <div class="mb-3">
                            <label>Review</label>

                            <textarea name="review"
                                      rows="5"
                                      class="form-control">{{ $testimonial->review }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label>Rating</label>

                            <select name="rating"
                                    class="form-control">

                                @for($i=1;$i<=5;$i++)
                                    <option value="{{ $i }}"
                                        {{ $testimonial->rating == $i ? 'selected' : '' }}>
                                        {{ $i }} Star
                                    </option>
                                @endfor

                            </select>
                        </div>

                        @if($testimonial->image)

                        <div class="mb-3">
                            <img src="{{ asset('storage/'.$testimonial->image) }}"
                                 width="120"
                                 class="img-thumbnail">
                        </div>

                        @endif

                        <div class="mb-3">
                            <label>Photo</label>

                            <input type="file"
                                   name="image"
                                   class="form-control">
                        </div>

                    </div>

                    <div class="card-footer">

                        <button class="btn btn-warning">
                            Update
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