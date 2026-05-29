@extends('frontend.master')

@section('meta_title','Blog')
@section('meta_description','Latest blog posts and insights')
@section('content')

<section class="inner-hero">
    <div class="inner-hero-bg"></div>

    <div class="container position-relative">
        <h1 data-aos="fade-up">Blog</h1>
    </div>
</section>

<section class="section-padding blog-page">

    <div class="container">

        <div class="row g-5">

            <div class="col-lg-8">

                <div class="row g-4">

                    @forelse($blogs as $blog)

                    <div class="col-md-6">

                        <div class="blog-card"
                             data-aos="fade-up">

                            <a href="{{ route('blog.details',$blog->slug) }}"
                               class="blog-thumb">

                                <img
                                    src="{{ asset('storage/'.$blog->image) }}"
                                    alt="{{ $blog->title }}"
                                >

                                <span>
                                    {{ $blog->category->name }}
                                </span>

                            </a>

                            <div class="blog-body">

                                <h3>

                                    <a href="{{ route('blog.details',$blog->slug) }}">
                                        {{ $blog->title }}
                                    </a>

                                </h3>

                                <p>
                                    {{ $blog->short_description }}
                                </p>

                                <a class="read-more"
                                   href="{{ route('blog.details',$blog->slug) }}">

                                    Read More

                                    <i class="fa-solid fa-angle-right"></i>

                                </a>

                            </div>

                            <div class="blog-meta">

                                <i class="fa-regular fa-calendar"></i>

                                {{ $blog->created_at->format('F d, Y') }}

                            </div>

                        </div>

                    </div>

                    @empty

                    <div class="col-12 text-center">
                        No Blog Found
                    </div>

                    @endforelse

                </div>

                <div class="mt-5">
                    {{ $blogs->links() }}
                </div>

            </div>

            <div class="col-lg-4">

                <aside class="blog-sidebar">

                    <div class="widget search-widget">

                        <form action="{{ route('blog') }}"
                              method="GET">

                            <input
                                type="search"
                                name="search"
                                value="{{ request('search') }}"
                                placeholder="Search Blog..."
                            >

                            <button type="submit">
                                Search
                            </button>

                        </form>

                    </div>

                    <div class="widget">

                        <h4>Most Popular</h4>

                        @foreach($popularBlogs as $popular)

                        <a class="popular-post"
                           href="{{ route('blog.details',$popular->slug) }}">

                            <img
                                src="{{ asset('storage/'.$popular->image) }}"
                                alt="{{ $popular->title }}"
                            >

                            <span>

                                {{ $popular->title }}

                                <small>

                                    <i class="fa-regular fa-calendar"></i>

                                    {{ $popular->created_at->format('F d, Y') }}

                                </small>

                            </span>

                        </a>

                        @endforeach

                    </div>

                    <div class="widget">

                        <h4>Browse by Category</h4>

                        <ul class="category-list">

                            @foreach($categories as $category)

                            <li>

                                <a href="?category={{ $category->slug }}">

                                    {{ $category->name }}

                                </a>

                                <b>
                                    ({{ $category->blogs_count }})
                                </b>

                            </li>

                            @endforeach

                        </ul>

                    </div>

                </aside>

            </div>

        </div>

    </div>

</section>

@endsection