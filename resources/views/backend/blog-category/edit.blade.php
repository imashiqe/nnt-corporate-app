@extends('backend.master')

@section('content')

<div class="container-fluid">

    <div class="card card-warning">

        <div class="card-header">
            <h3 class="card-title">
                Edit Category
            </h3>
        </div>

        <form action="{{ route('blog-category.update',$blogCategory->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="mb-3">

                    <label>Name</label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ $blogCategory->name }}">

                </div>

                <div class="mb-3">

                    <label>Meta Title</label>

                    <input type="text"
                           name="meta_title"
                           class="form-control"
                           value="{{ $blogCategory->meta_title }}">

                </div>

                <div class="mb-3">

                    <label>Meta Description</label>

                    <textarea
                        name="meta_description"
                        class="form-control"
                        rows="4">{{ $blogCategory->meta_description }}</textarea>

                </div>

            </div>

            <div class="card-footer">

                <button class="btn btn-warning">
                    Update
                </button>

            </div>

        </form>

    </div>

</div>

@endsection