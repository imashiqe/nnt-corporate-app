@extends('backend.master')

@section('content')

<div class="container-fluid">

    <div class="card card-primary">

        <div class="card-header">
            <h3 class="card-title">Add Client</h3>
        </div>

        <form action="{{ route('client.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="card-body">

                <div class="mb-3">
                    <label>Client Name</label>

                    <input type="text"
                           name="name"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Client Logo</label>

                    <input type="file"
                           name="logo"
                           class="form-control">
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