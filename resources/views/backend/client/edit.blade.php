@extends('backend.master')

@section('title', 'Edit Client')

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-8">

            <div class="card card-warning card-outline">

                <div class="card-header">
                    <h3 class="card-title">
                        Edit Client
                    </h3>
                </div>

                <form action="{{ route('client.update',$client->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mb-3">

                            <label class="form-label">
                                Client Name
                            </label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="{{ old('name',$client->name) }}"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Current Logo
                            </label>

                            <br>

                            <img
                                src="{{ asset('storage/'.$client->logo) }}"
                                width="150"
                                class="img-thumbnail"
                                alt="{{ $client->name }}"
                            >

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Change Logo
                            </label>

                            <input type="file"
                                   name="logo"
                                   class="form-control">

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit"
                                class="btn btn-warning">

                            <i class="fas fa-save"></i>
                            Update

                        </button>

                        <a href="{{ route('client.index') }}"
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