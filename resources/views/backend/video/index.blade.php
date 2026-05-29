@extends('backend.master')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">
                Video List
            </h3>

            <div class="card-tools">

                <a href="{{ route('video.create') }}"
                   class="btn btn-primary">

                    Add Video

                </a>

            </div>

        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Video URL</th>
                        <th width="200">
                            Action
                        </th>
                    </tr>

                </thead>

                <tbody>

                @forelse($videos as $video)

                    <tr>

                        <td>
                            {{ $video->id }}
                        </td>

                        <td>
                            {{ $video->title }}
                        </td>

                        <td>

                            <a href="{{ $video->youtube_url }}"
                               target="_blank">

                                View Video

                            </a>

                        </td>

                        <td>

                            <a href="{{ route('video.edit',$video->id) }}"
                               class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form action="{{ route('video.destroy',$video->id) }}"
                                  method="POST"
                                  style="display:inline-block">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete Video?')">

                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4"
                            class="text-center">

                            No Videos Found

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

            {{ $videos->links() }}

        </div>

    </div>

</div>

@endsection