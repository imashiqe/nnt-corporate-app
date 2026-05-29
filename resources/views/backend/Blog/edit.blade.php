@extends('backend.master')

@section('content')

<div class="container-fluid">

    <div class="card card-warning">

        <div class="card-header">
            <h3 class="card-title">
                Edit Blog
            </h3>
        </div>

        <form action="{{ route('blog.update',$blog->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="mb-3">
                    <label>Category</label>

                    <select name="blog_category_id"
                            class="form-control"
                            required>

                        @foreach($categories as $category)

                        <option value="{{ $category->id }}"
                            {{ $blog->blog_category_id == $category->id ? 'selected' : '' }}>

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
                           value="{{ $blog->title }}"
                           required>
                </div>

                <div class="mb-3">

                    <label>Current Image</label>

                    <br>

                    <img src="{{ asset('storage/'.$blog->image) }}"
                         width="200"
                         class="img-thumbnail">

                </div>

                <div class="mb-3">
                    <label>Change Image</label>

                    <input type="file"
                           name="image"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Short Description</label>

                    <textarea name="short_description"
                              rows="4"
                              class="form-control"
                              required>{{ $blog->short_description }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Blog Content</label>

                    <textarea id="editor"
                              name="content"
                              class="form-control">{{ $blog->content }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Meta Title</label>

                    <input type="text"
                           name="meta_title"
                           class="form-control"
                           value="{{ $blog->meta_title }}">
                </div>

                <div class="mb-3">
                    <label>Meta Description</label>

                    <textarea name="meta_description"
                              rows="4"
                              class="form-control">{{ $blog->meta_description }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Meta Keywords</label>

                    <textarea name="meta_keywords"
                              rows="3"
                              class="form-control">{{ $blog->meta_keywords }}</textarea>
                </div>

                <div class="mb-3">

                    <label>Status</label>

                    <select name="status"
                            class="form-control">

                        <option value="1"
                            {{ $blog->status == 1 ? 'selected' : '' }}>
                            Published
                        </option>

                        <option value="0"
                            {{ $blog->status == 0 ? 'selected' : '' }}>
                            Draft
                        </option>

                    </select>

                </div>

            </div>

            <div class="card-footer">

                <button type="submit"
                        class="btn btn-warning">

                    Update Blog

                </button>

                <a href="{{ route('blog.index') }}"
                   class="btn btn-secondary">

                    Back

                </a>

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