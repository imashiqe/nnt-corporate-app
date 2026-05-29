@extends('frontend.master')

@section('content')


<section class="hero-section">
  <div class="swiper hero-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide hero-slide" style="background-image:url('{{ asset('frontend/assets/img/background.jpg') }}')">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
          <div class="row align-items-center min-vh-100">
            <div class="text-center" data-aos="fade-right">
              <span class="eyebrow">Welcome To NNT A Bag Manufacturing Company</span>
              <h1>Smarter Manufacturing. Superior Bags.</h1>
              <p class="text-center">Responsive front-end clone for a bag manufacturing company, built with Bootstrap, jQuery, AOS, Font Awesome and Swiper.</p>
              <a href="custom-bag.html" class="btn btn-theme">Get Free Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
            
          </div>
        </div>
      </div>
      <div class="swiper-slide hero-slide" style="background-image:url('{{ asset('frontend/assets/img/background2.jpg') }}')">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
          <div class="row align-items-center min-vh-100">
            <div class=" text-center" data-aos="fade-right">
              <span class="eyebrow">Custom Bulk Bag Production</span>
              <h1>From Sample Room to Final Delivery.</h1>
              <p >Create school bags, office bags, laptop bags, travel bags and branded gifts for business campaigns.</p>
              <a href="services.html" class="btn btn-theme">Our Services <i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
{{-- brand --}}
<section class="clients-strip light">

    <div class="container text-center"
         data-aos="fade-up">

        <h3 class="mini-title">
            Our Valuable Clients
        </h3>

        <div class="client-grid">

            @forelse($clients as $client)

            <div class="client-logo">

                <img src="{{ asset('storage/'.$client->logo) }}"
                     alt="{{ $client->name }}"
                     class="img-fluid">

                <span>
                    {{ $client->name }}
                </span>

            </div>

            @empty

            <p>No Clients Available</p>

            @endforelse

        </div>

    </div>

</section>
{{-- end brand --}}
<section class="about-preview section-padding">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right"><img class="rounded-img collage-img" src="{{ asset('frontend/assets/img/about-factory.jpg') }}" alt="factory collage"></div>
      <div class="col-lg-6" data-aos="fade-left">
        <span class="section-label"><i class="fa-solid fa-bag-shopping"></i> About Us</span>
        <h2>A Legacy in Bag Factory & Manufacturing</h2>
        <p class="lead-text">This template recreates the visual style of a corporate bag factory site with a bold condensed type system, teal brand color, orange CTAs and clean product presentation.</p>
        <p>Use it to present bulk bag production, material selection, sample development, private label work, corporate gifts and delivery timelines.</p>
        <a href="about.html" class="btn btn-theme">Get Started <i class="fa-solid fa-arrow-right ms-2"></i></a>
      </div>
    </div>
  </div>
</section>
<section class="solutions section-padding bg-soft">
  <div class="container text-center">
    <span class="section-label"><i class="fa-solid fa-layer-group"></i> Why Choose Us</span>
    <h2 class="section-title">We Offer End To End Bag<br>Manufacturing Solution</h2>
    <div class="row g-4 mt-3">
      <div class="col-md-4" data-aos="fade-up"><div class="solution-card"><i class="fa-solid fa-boxes-stacked"></i><h3>Bulk Customization</h3><p>Produce large quantities of branded bags with approved materials, patterns, logo placement and packaging.</p></div></div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100"><div class="solution-card featured"><i class="fa-solid fa-industry"></i><h3>High-Level Production Capability</h3><p>Plan sampling, sourcing, cutting, sewing, finishing and inspection for larger corporate projects.</p></div></div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200"><div class="solution-card"><i class="fa-solid fa-handshake-angle"></i><h3>CM Solution</h3><p>Flexible contract manufacturing for brands that need only production support or full project execution.</p></div></div>
    </div>
  </div>
</section>
<section class="product-types section-padding">
  <div class="container text-center">
    <span class="section-label"><i class="fa-solid fa-tags"></i> Products Listing</span>
    <h2 class="section-title">Types of Bags We Manufacture</h2>
    <div class="swiper bag-type-swiper mt-4">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><div class="bag-type-card"><img src="{{ asset('frontend/assets/img/Manufacture/backpack.jpg') }}" alt="Backpacks"><h3>Backpacks</h3></div></div><div class="swiper-slide"><div class="bag-type-card"><img src="{{ asset('frontend/assets/img/Manufacture/office bag.jpg') }}" alt="Office Bags"><h3>Office Bags</h3></div></div><div class="swiper-slide"><div class="bag-type-card"><img src="{{ asset('frontend/assets/img/Manufacture/crossbody.png') }}" alt="Crossbody Bags"><h3>Crossbody Bags</h3></div></div><div class="swiper-slide"><div class="bag-type-card"><img src="{{ asset('frontend/assets/img/Manufacture/sports bags.png') }}" alt="Sports Bags"><h3>Sports Bags</h3></div></div><div class="swiper-slide"><div class="bag-type-card"><img src="{{ asset('frontend/assets/img/Manufacture/accessory bags.png') }}" alt="Accessory Bags"><h3>Accessory Bags</h3></div></div><div class="swiper-slide"><div class="bag-type-card"><img src="{{ asset('frontend/assets/img/Manufacture/Delivery-Bag.png') }}" alt="Delivery Bags"><h3>Delivery Bags</h3></div></div><div class="swiper-slide"><div class="bag-type-card"><img src="{{ asset('frontend/assets/img/Manufacture/School-Bag.png') }}" alt="School Bags"><h3>School Bags</h3></div></div><div class="swiper-slide"><div class="bag-type-card"><img src="{{ asset('frontend/assets/img/Manufacture/Jute-bag.png') }}" alt="Jute Bags"><h3>Jute Bags</h3></div></div>
      </div>
      <div class="swiper-button-prev"></div><div class="swiper-button-next"></div>
    </div>
  </div>
</section>
<section class="milestones" style="background-image:url('assets/img/factory-bg.svg')">
  <div class="container text-center">
    <span class="section-label"><i class="fa-solid fa-award"></i> Industry Milestones</span>
    <h2 class="section-title text-white">Our Achievements at a Glance</h2>
    <div class="row g-3 mt-4">
      <div class="col-6 col-lg-2" data-aos="zoom-in" data-aos-delay="0"><div class="counter-card"><i class="fa-solid fa-briefcase"></i><strong><span class="counter" data-count="40">0</span>+</strong><p>Years Legacy</p></div></div><div class="col-6 col-lg-2" data-aos="zoom-in" data-aos-delay="70"><div class="counter-card"><i class="fa-solid fa-diagram-project"></i><strong><span class="counter" data-count="1000">0</span>+</strong><p>Projects Done</p></div></div><div class="col-6 col-lg-2" data-aos="zoom-in" data-aos-delay="140"><div class="counter-card"><i class="fa-solid fa-users"></i><strong><span class="counter" data-count="20">0</span>+</strong><p>Corporate Clients</p></div></div><div class="col-6 col-lg-2" data-aos="zoom-in" data-aos-delay="210"><div class="counter-card"><i class="fa-solid fa-building"></i><strong><span class="counter" data-count="3">0</span>+</strong><p>Factories</p></div></div><div class="col-6 col-lg-2" data-aos="zoom-in" data-aos-delay="280"><div class="counter-card"><i class="fa-solid fa-house-chimney"></i><strong><span class="counter" data-count="1">0</span>+</strong><p>Sample House</p></div></div><div class="col-6 col-lg-2" data-aos="zoom-in" data-aos-delay="350"><div class="counter-card"><i class="fa-solid fa-user-gear"></i><strong><span class="counter" data-count="250">0</span>+</strong><p>Skilled Workers</p></div></div>
    </div>
  </div>
</section>
{{-- gallery   --}}
<section class="gallery section-padding bg-soft">
  <div class="container text-center">
    <span class="section-label"><i class="fa-solid fa-images"></i> Product Gallery</span>
    <h2 class="section-title">Bags We've Created</h2>
    <div class="gallery-filter"><button class="filter-btn active" data-filter="all">All</button><button class="filter-btn" data-filter="backpack">Backpack</button><button class="filter-btn" data-filter="office">Office Bags</button><button class="filter-btn" data-filter="crossbody">Crossbody Bags</button><button class="filter-btn" data-filter="sports">Sports Bags</button><button class="filter-btn" data-filter="accessory">Accessory Bags</button><button class="filter-btn" data-filter="jute">Jute Bag</button></div>
    <div class="row g-4 gallery-grid mt-2">
     @forelse($galleries as $gallery)

<div class="col-6 col-md-4 col-lg-3 gallery-item"
     data-category="{{ $gallery->category }}">
     
    <div class="gallery-card">
        <img src="{{ asset('storage/'.$gallery->image) }}"
             alt="{{ $gallery->title }}">

        <div class="gallery-hover">
            <span>{{ ucfirst($gallery->category) }}</span>
            <h3>{{ $gallery->title }}</h3>
        </div>
    </div>

</div>

@empty

<div class="col-12">
    <p class="text-center">No Gallery Items Found</p>
</div>

@endforelse
    </div>
  </div>
</section>
  {{-- gallery end --}}



{{-- testimonials --}}
<section class="testimonials section-padding" id="testimonials">
    <div class="container text-center">

        <span class="section-label">
            <i class="fa-solid fa-comments"></i>
            Testimonial
        </span>

        <h2 class="section-title">
            What Our Clients Say?
        </h2>

        <div class="swiper testimonial-swiper mt-4">

            <div class="swiper-wrapper">

                @forelse($testimonials as $testimonial)

                <div class="swiper-slide">

                    <div class="testimonial-card">

                        <div class="stars">

                            @for($i=1; $i<=$testimonial->rating; $i++)
                                <i class="fa-solid fa-star"></i>
                            @endfor

                        </div>

                        <p>
                            {{ $testimonial->review }}
                        </p>

                        @if($testimonial->image)

                        <img
                            src="{{ asset('storage/'.$testimonial->image) }}"
                            class="rounded-circle mb-3"
                            width="70"
                            height="70"
                            alt="{{ $testimonial->name }}"
                        >

                        @endif

                        <h4>
                            {{ $testimonial->name }}
                        </h4>

                        <small>
                            {{ $testimonial->designation }}
                        </small>

                    </div>

                </div>

                @empty

                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <p>No testimonials available.</p>
                    </div>
                </div>

                @endforelse

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </div>
</section>
{{-- testimonials end --}}
<section class="strengths section-padding">
  <div class="container text-center">
    <span class="section-label"><i class="fa-solid fa-chart-simple"></i> Capabilities</span>
    <h2 class="section-title">Our Operational Strengths</h2>
    <div class="row g-4 mt-3">
      <div class="col-md-6 col-lg" data-aos="fade-up" data-aos-delay="0"><div class="strength-card"><i class="fa-solid fa-industry"></i><h3>Modern Factory</h3><p>Updated equipment for smooth production.</p></div></div><div class="col-md-6 col-lg" data-aos="fade-up" data-aos-delay="80"><div class="strength-card"><i class="fa-solid fa-boxes-packing"></i><h3>Large-Scale Production</h3><p>Ready for repeat and large-volume orders.</p></div></div><div class="col-md-6 col-lg" data-aos="fade-up" data-aos-delay="160"><div class="strength-card"><i class="fa-solid fa-pen-ruler"></i><h3>Customized Solutions</h3><p>Patterns and details that match your brief.</p></div></div><div class="col-md-6 col-lg" data-aos="fade-up" data-aos-delay="240"><div class="strength-card"><i class="fa-solid fa-people-group"></i><h3>Experienced Team</h3><p>Skilled people across each production step.</p></div></div><div class="col-md-6 col-lg" data-aos="fade-up" data-aos-delay="320"><div class="strength-card"><i class="fa-solid fa-medal"></i><h3>Quality Assurance</h3><p>Inspection before packing and delivery.</p></div></div>
    </div>
  </div>
</section>
{{-- unique start --}}
<section class="unique-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-7">
                <span class="section-tag">
                    <i class="fa-solid fa-house"></i>
                    Why partner with us for bag manufacturing?
                </span>

                <h2 class="section-title">
                    THINGS THAT MAKE US UNIQUE
                </h2>

                <div class="features-grid">

                    <div class="feature-item">
                        <span class="feature-number">01</span>
                        <h4>Over 40 Years of Industry Legacy</h4>
                        <p>With over four decades of family-owned experience, we bring deep industry knowledge and proven manufacturing excellence to the bag industry.</p>
                    </div>

                    <div class="feature-item">
                        <span class="feature-number">02</span>
                        <h4>Family-Run Expertise</h4>
                        <p>A multi-generational family business where hands-on involvement ensures consistency, accountability and long-term commitment to quality.</p>
                    </div>

                    <div class="feature-item">
                        <span class="feature-number">03</span>
                        <h4>Strong Industry Roots</h4>
                        <p>Our foundation is built on long-standing industry relationships and operational expertise.</p>
                    </div>

                    <div class="feature-item">
                        <span class="feature-number">04</span>
                        <h4>Collaborations with Leading Material Suppliers</h4>
                        <p>We partner with trusted suppliers to ensure superior quality, durability and consistency.</p>
                    </div>

                    <div class="feature-item">
                        <span class="feature-number">05</span>
                        <h4>Extensive Network with Local & Export Bag Factories</h4>
                        <p>Our established network enables scalable production and flexible manufacturing solutions.</p>
                    </div>

                    <div class="feature-item">
                        <span class="feature-number">06</span>
                        <h4>Trusted by Top Brands & Organizations</h4>
                        <p>We are a reliable manufacturing partner trusted by leading brands and organizations.</p>
                    </div>

                    <div class="feature-item">
                        <span class="feature-number">07</span>
                        <h4>Corporate Gift Expertise</h4>
                        <p>We help clients create premium branded gifts and promotional items using our bags.</p>
                    </div>

                    <div class="feature-item">
                        <span class="feature-number">08</span>
                        <h4>Sustainability & Quality Standards</h4>
                        <p>Commitment to responsible manufacturing and long-lasting products.</p>
                    </div>

                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-5">
                <div class="image-wrapper">
                    <img src="{{ asset('frontend/assets/img/What-Makes-Us-Unique.jpg') }}"
                        class="img-fluid"
                        alt="Bag Manufacturing">
                </div>
            </div>

        </div>
    </div>
</section>
{{-- video part start --}}
<section class="video-section section-padding">

    <div class="container text-center">

        <span class="section-label">
            <i class="fa-solid fa-video"></i>
            Videos
        </span>

        <h2 class="section-title">
            Our Video Gallery
        </h2>

        <div class="row g-4 mt-3">
@php

function getYoutubeId($url)
{
    preg_match(
        '/(?:youtube\.com\/shorts\/|youtube\.com\/watch\?v=|youtu\.be\/)([^&\n?#]+)/',
        $url,
        $matches
    );

    return $matches[1] ?? '';
}

@endphp
            @foreach($videos as $video)

            @php
                $videoId = getYoutubeId($video->youtube_url);
            @endphp

            <div class="col-md-4"
                 data-aos="zoom-in">

                <a class="video-card"
                   data-bs-toggle="modal"
                   data-bs-target="#videoModal"
                   onclick="playVideo('{{ $videoId }}')">

                    <img src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                         alt="{{ $video->title }}">

                    <span>
                        <i class="fa-solid fa-play"></i>
                    </span>

                </a>

            </div>

            @endforeach

        </div>

    </div>

</section>
{{-- video part start --}}

{{-- location start --}}
<section class="visit section-padding bg-soft">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.8367430758212!2d90.40822281190478!3d23.717523378604017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b96252f59bed%3A0xb696da25905175d7!2sNNT%20Bag%20Manufacturer!5e0!3m2!1sen!2sbd!4v1780078110870!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      <div class="col-lg-6" data-aos="fade-left">
        <span class="section-label"><i class="fa-solid fa-location-dot"></i> Visit Now</span>
        <h2>Corporate Client Visit & Professional Sampling Facility</h2>
        <p>Invite corporate clients to review material, inspect stitching quality, approve samples and finalize branding before bulk production.</p>
        <ul class="tick-list"><li>Manufacturing operation walkthrough.</li><li>Assessment of quality, design and durability.</li><li>Collaboration with expert team for custom branding.</li></ul>
        <a class="btn btn-theme" href="/custom-bag">Get Started <i class="fa-solid fa-arrow-right ms-2"></i></a>
      </div>
    </div>
  </div>
</section>
{{-- location end --}}
{{-- BLOG --}}
<section class="blogs section-padding">
  <div class="container text-center">
    <span class="section-label"><i class="fa-solid fa-newspaper"></i> Blogs</span>
    <h2 class="section-title">Read Our Insights</h2>
    <div class="row g-4 mt-3">
       @foreach($blogs as $blog)

<div class="col-md-6">

    <div class="blog-card">

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

        </div>

    </div>

</div>

@endforeach
<div class="blog-card" data-aos="fade-up" data-aos-delay="160">
  <a href="blog-detail.html" class="blog-thumb"><img src="assets/img/blog-3.svg" alt="All Types of Bags Manufacturer - Bulk, Custom &amp; Wholesale Bags"><span>Uncategorized</span></a>
  <div class="blog-body">
    <h3><a href="blog-detail.html">All Types of Bags Manufacturer - Bulk, Custom &amp; Wholesale Bags</a></h3>
    <p>A quick overview of backpacks, office bags, sports bags, delivery bags, jute bags and more.</p>
    <a class="read-more" href="blog-detail.html">Read More <i class="fa-solid fa-angle-right"></i></a>
  </div>
  <div class="blog-meta"><i class="fa-regular fa-calendar"></i> April 9, 2026 <span>-</span> No Comments</div>
</div></div>
    </div>
    <a class="btn btn-theme mt-4" href="blog.html">Read More Blogs <i class="fa-solid fa-arrow-right ms-2"></i></a>
  </div>
</section>


<script>
$('.filter-btn').click(function () {

    $('.filter-btn').removeClass('active');
    $(this).addClass('active');

    let category = $(this).data('filter');

    if(category === 'all'){
        $('.gallery-item').show();
    }else{
        $('.gallery-item').hide();
        $('.gallery-item[data-category="'+category+'"]').show();
    }
});
</script>

@endsection