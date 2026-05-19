<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NNT Clone - Bag Manufacturer Website</title>
  <meta name="description" content="Static Bootstrap front-end clone template.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Roboto+Condensed:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>
<body>

    <header class="site-header">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-glass">
      <a class="navbar-brand "  href="/" aria-label="NNT home"><img src="{{ asset('frontend/assets/img/logo.png') }}" class="img-fluid" alt="NNT logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/about-us">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="/services">Services</a></li><li class="nav-item"><a class="nav-link" href="/custom-bag">Custom Bag</a></li><li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
        </ul>
        <a class="btn btn-theme btn-sm-pill" href="/custom-bag">Get Free Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
      </div>
    </nav>
  </div>
</header>

@yield('content')



<footer class="footer">
  <div class="footer-main">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6">
          <h4>About NNT</h4>
          <p>NNT is a reliable bag manufacturer template with a long industry legacy. Use this block for your brand story, bulk bag production, corporate client work and custom manufacturing capabilities.</p>
        </div>
        <div class="col-lg-2 col-md-6">
          <h4>About NNT</h4>
          <ul class="footer-links">
            <li><a href="/">Home</a></li><li><a href="/about-us">About Us</a></li><li><a href="/services">Services</a></li><li><a href="#testimonials">Testimonial</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6">
          <h4>Products</h4>
          <ul class="footer-links"><li>Handbags</li><li>Office Bags</li><li>Shopping Bags</li><li>Laptop Bags</li><li>Travel Bags</li></ul>
        </div>
        <div class="col-lg-2 col-md-6">
          <h4>Useful Links</h4>
          <ul class="footer-links"><li>Privacy Policy</li><li>Terms & Conditions</li><li><a href="/blog">Blog</a></li><li>Contact Us</li><li>Client</li></ul>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="contact-row"><span><i class="fa-solid fa-phone"></i></span><div><b>Call Us Anytime</b><p>01973-697452</p></div></div>
          <div class="contact-row"><span><i class="fa-regular fa-envelope"></i></span><div><b>Send Mail</b><p>support@nnt.com.bd</p></div></div>
          <div class="contact-row"><span><i class="fa-solid fa-location-dot"></i></span><div><b>Our Address</b><p>United Tower, 262, Dhaka 1100</p></div></div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center gy-4">
        <div class="col-lg-4 text-lg-start text-center">
          <div class="socials"><a href="#"><i class="fa-brands fa-facebook-f"></i></a><a href="#"><i class="fa-brands fa-tiktok"></i></a><a href="#"><i class="fa-brands fa-linkedin-in"></i></a><a href="#"><i class="fa-brands fa-instagram"></i></a></div>
          <p class="legal">Terms & Conditions . Policies Legal Notice.</p>
        </div>
        <div class="col-lg-4 text-center newsletter-wrap">
          <h3><i class="fa-solid fa-users-viewfinder"></i> Join with 3.5<br>Subscribers</h3>
          <form class="newsletter-form"><input type="email" placeholder="Enter Your Email address" required><button>Join Us</button></form>
        </div>
        <div class="col-lg-4 text-lg-end text-center"><img class="footer-logo" src="{{ asset('frontend/assets/img/logo.svg') }}" alt="logo"><p>Copyrights &copy; <span class="year"></span> NNT<br>All Rights Reserved.</p></div>
      </div>
    </div>
  </div>
</footer>
<div class="chat-widget"><span>Chat with us <i class="fa-regular fa-hand-wave"></i></span><button aria-label="Open chat"><i class="fa-solid fa-comment-dots"></i></button><em>1</em></div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>
</html>
