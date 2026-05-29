@extends('backend.master')

@section('content')

<div class="container-fluid">

    <div class="card card-primary">

        <div class="card-header">
            <h3 class="card-title">Add Blog</h3>
        </div>

        <form action="{{ route('blog.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="card-body">

                <div class="mb-3">
                    <label>Category</label>

                    <select name="blog_category_id"
                            class="form-control"
                            required>

                        <option value="">
                            Select Category
                        </option>

                        @foreach($categories as $category)

                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label>Blog Title</label>

                    <input type="text"
                           name="title"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label>Featured Image</label>

                    <input type="file"
                           name="image"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label>Short Description</label>

                    <textarea name="short_description"
                              rows="4"
                              class="form-control"
                              required></textarea>
                </div>

                <div class="mb-3">
                    <label>Blog Content</label>

                    <textarea id="editor"
                              name="content"
                              class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Meta Title</label>

                    <input type="text"
                           name="meta_title"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Meta Description</label>

                    <textarea name="meta_description"
                              rows="4"
                              class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Meta Keywords</label>

                    <textarea name="meta_keywords"
                              rows="3"
                              class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Status</label>

                    <select name="status"
                            class="form-control">

                        <option value="1">
                            Published
                        </option>

                        <option value="0">
                            Draft
                        </option>

                    </select>
                </div>

            </div>

            <div class="card-footer">

                <button class="btn btn-primary">
                    Save Blog
                </button>

            </div>

        </form>

    </div>

</div>

@endsection

@section('scripts')

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });
</script>

@endsection