@extends('backend.master')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">
                Gallery List
            </h3>

            <div class="card-tools">

                <a href="{{ route('gallery.create') }}"
                   class="btn btn-primary btn-sm">
                    Add New
                </a>

            </div>

        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover">

                <thead>
                    <tr>
                        <th width="80">ID</th>
                        <th width="120">Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($galleries as $gallery)

                    <tr>

                        <td>{{ $gallery->id }}</td>

                        <td>
                            <img
                                src="{{ asset('storage/'.$gallery->image) }}"
                                width="80"
                                class="img-thumbnail"
                            >
                        </td>

                        <td>{{ $gallery->title }}</td>

                        <td>
                            {{ ucfirst($gallery->category) }}
                        </td>

                        <td>

                            <a href="{{ route('gallery.edit',$gallery->id) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form
                                action="{{ route('gallery.destroy',$gallery->id) }}"
                                method="POST"
                                style="display:inline-block"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this item?')"
                                >
                                    Delete
                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="5" class="text-center">
                            No Data Found
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

            <div class="mt-3">
                {{ $galleries->links() }}
            </div>

        </div>

    </div>

</div>

@endsection