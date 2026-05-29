@extends('backend.master')

@section('content')

<div class="container-fluid">

    <div class="card card-primary">

        <div class="card-header">
            <h3 class="card-title">
                Add Blog Category
            </h3>
        </div>

        <form action="{{ route('blog-category.store') }}"
              method="POST">

            @csrf

            <div class="card-body">

                <div class="mb-3">
                    <label>Category Name</label>

                    <input type="text"
                           name="name"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Meta Title</label>

                    <input type="text"
                           name="meta_title"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Meta Description</label>

                    <textarea
                        name="meta_description"
                        class="form-control"
                        rows="4"></textarea>
                </div>

            </div>

            <div class="card-footer">

                <button class="btn btn-primary">
                    Save
                </button>

            </div>

        </form>

    </div>

</div>

@endsection