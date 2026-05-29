@extends('backend.master')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">
                Blog List
            </h3>

            <div class="float-end">

                <a href="{{ route('blog.create') }}"
                   class="btn btn-primary">

                    <i class="bi bi-plus-circle"></i>
                    Add Blog

                </a>

            </div>

        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th width="180">Action</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($blogs as $blog)

                    <tr>

                        <td>
                            {{ $blog->id }}
                        </td>

                        <td>

                            <img
                                src="{{ asset('storage/'.$blog->image) }}"
                                width="80"
                                class="img-thumbnail"
                                alt="{{ $blog->title }}"
                            >

                        </td>

                        <td>
                            {{ $blog->category->name ?? 'N/A' }}
                        </td>

                        <td>
                            {{ Str::limit($blog->title, 50) }}
                        </td>

                        <td>

                            @if($blog->status == 1)

                                <span class="badge bg-success">
                                    Published
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Draft
                                </span>

                            @endif

                        </td>

                        <td>
                            {{ $blog->created_at->format('d M Y') }}
                        </td>

                        <td>

                            <a href="{{ route('blog.edit',$blog->id) }}"
                               class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil"></i>

                            </a>

                            <form
                                action="{{ route('blog.destroy',$blog->id) }}"
                                method="POST"
                                style="display:inline-block"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this blog?')"
                                >

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="7"
                            class="text-center">

                            No Blogs Found

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

            <div class="mt-3">

                {{ $blogs->links() }}

            </div>

        </div>

    </div>

</div>

@endsection