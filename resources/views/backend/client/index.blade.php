@extends('backend.master')

@section('title', 'Clients')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">
                Client List
            </h3>

            <div class="card-tools">

                <a href="{{ route('client.create') }}"
                   class="btn btn-primary btn-sm">

                    <i class="fas fa-plus"></i>
                    Add Client

                </a>

            </div>

        </div>

        <div class="card-body table-responsive">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered table-hover">

                <thead>
                    <tr>
                        <th width="70">ID</th>
                        <th width="120">Logo</th>
                        <th>Name</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($clients as $client)

                    <tr>

                        <td>{{ $client->id }}</td>

                        <td>

                            <img
                                src="{{ asset('storage/'.$client->logo) }}"
                                width="80"
                                class="img-thumbnail"
                                alt="{{ $client->name }}"
                            >

                        </td>

                        <td>{{ $client->name }}</td>

                        <td>

                            <a href="{{ route('client.edit',$client->id) }}"
                               class="btn btn-warning btn-sm">

                                <i class="fas fa-edit"></i>
                                Edit

                            </a>

                            <form action="{{ route('client.destroy',$client->id) }}"
                                  method="POST"
                                  style="display:inline-block">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this client?')">

                                    <i class="fas fa-trash"></i>
                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="4" class="text-center">
                            No Clients Found
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

            <div class="mt-3">
                {{ $clients->links() }}
            </div>

        </div>

    </div>

</div>

@endsection