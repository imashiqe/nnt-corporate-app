@extends('backend.master')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">
                Testimonial List
            </h3>

            <div class="card-tools">

                <a href="{{ route('testimonial.create') }}"
                   class="btn btn-primary btn-sm">

                    Add New

                </a>

            </div>

        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover">

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Rating</th>
                    <th width="200">Action</th>
                </tr>
                </thead>

                <tbody>

                @forelse($testimonials as $testimonial)

                <tr>

                    <td>{{ $testimonial->id }}</td>

                    <td>

                        @if($testimonial->image)

                        <img src="{{ asset('storage/'.$testimonial->image) }}"
                             width="70"
                             class="img-thumbnail">

                        @endif

                    </td>

                    <td>{{ $testimonial->name }}</td>

                    <td>{{ $testimonial->designation }}</td>

                    <td>
                        @for($i=1;$i<=$testimonial->rating;$i++)
                            ⭐
                        @endfor
                    </td>

                    <td>

                        <a href="{{ route('testimonial.edit',$testimonial->id) }}"
                           class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form action="{{ route('testimonial.destroy',$testimonial->id) }}"
                              method="POST"
                              style="display:inline-block">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="6" class="text-center">
                        No Testimonials Found
                    </td>
                </tr>

                @endforelse

                </tbody>

            </table>

            {{ $testimonials->links() }}

        </div>

    </div>

</div>

@endsection