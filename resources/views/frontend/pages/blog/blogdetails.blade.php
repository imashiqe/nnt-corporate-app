@extends('frontend.master')

@section('meta_title', $blog->meta_title ?? $blog->title)

@section('meta_description', $blog->meta_description)

@section('meta_keywords', $blog->meta_keywords)

@section('content')

<section class="inner-hero">
    <div class="container">

        <h1>{{ $blog->title }}</h1>

    </div>
</section>

<section class="section-padding">

    <div class="container">

        <img
            src="{{ asset('storage/'.$blog->image) }}"
            class="img-fluid mb-4"
            alt="{{ $blog->title }}"
        >

        {!! $blog->content !!}

    </div>

</section>

@endsection