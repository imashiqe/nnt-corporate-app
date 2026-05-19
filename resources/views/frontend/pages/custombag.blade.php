@extends('frontend.master')
@section('content')
<section class="inner-hero">
  <div class="inner-hero-bg"></div>
  <div class="container position-relative"><h1 data-aos="fade-up">Custom Bag</h1></div>
</section>
<section class="section-padding custom-intro">
  <div class="container">
    <div class="row g-5 align-items-start">
      <div class="col-lg-6" data-aos="fade-right"><h2>Create Bags That You Want</h2><p>Use this section for corporate clients, supplier businesses, retailers, educational institutions, NGOs and government projects. Explain how designs, colors, fabric, logo placement and packaging can be customized.</p><h3>Bulk Orders? No Problem!</h3><p>Present your daily production capacity, quality assurance and timeline promises here.</p><h4>We Ensure</h4><ul class="tick-list"><li>High-quality custom manufacturing</li><li>Tailored designs to your needs</li><li>On-time delivery for bulk orders</li></ul><h3>How to Get a Custom Bag Bulk Free Quotation</h3><p>Invite users to send details, visit the office, contact WhatsApp or schedule an online meeting.</p><div class="action-row"><a class="btn whatsapp" href="#"><i class="fa-brands fa-whatsapp"></i> +8801973697452</a><a class="btn btn-theme" href="#"><i class="fa-solid fa-video"></i> Schedule An Online Meeting</a></div></div>
      <div class="col-lg-6" data-aos="fade-left"><div class="quote-form-card" id="quoteForm"><h2>Get A Free Quotation Online</h2><p>Fill out this form accurately and replace the front-end placeholder with your backend form handler.</p><form class="quote-form"><div class="row g-3"><div class="col-md-6"><label>Full Name *</label><input required type="text" placeholder="Write your name"></div><div class="col-md-6"><label>Email Address *</label><input required type="email" placeholder="Write email"></div><div class="col-md-6"><label>Phone Number *</label><input required type="tel" placeholder="+880 12345678"></div><div class="col-md-6"><label>Bag Type *</label><input required type="text" placeholder="Write Your Bag Type"></div><div class="col-md-6"><label>Bag Quantity *</label><input required min="500" type="number" placeholder="Minimum 500"></div><div class="col-md-6"><label>Company Name *</label><input required type="text" placeholder="Company Name"></div><div class="col-12"><label>Message / More Details *</label><textarea required placeholder="Write your message"></textarea></div><div class="col-12"><button class="btn btn-dark-teal" type="submit">Submit</button><p class="form-note"></p></div></div></form></div></div>
    </div>
  </div>
</section>

<section class="clients-strip">
  <div class="container text-center" data-aos="fade-up">
    <h3 class="mini-title">Our Valuable Clients</h3>
    <div class="client-grid"><div class="client-logo">realme</div><div class="client-logo">MetLife</div><div class="client-logo">LUX</div><div class="client-logo">Rahimafrooz</div><div class="client-logo">Stamford</div><div class="client-logo">ISPAHANI</div><div class="client-logo">Plus Point</div><div class="client-logo">RIMLO</div><div class="client-logo">KONKA</div><div class="client-logo">Tactical</div><div class="client-logo">Chemomics</div><div class="client-logo">KSRM</div><div class="client-logo">ICT Division</div><div class="client-logo">Codelling</div><div class="client-logo">World Vision</div><div class="client-logo">UKaid</div></div>
  </div>
</section>
<section class="section-padding packages bg-soft text-center">
  <div class="container">
    <span class="section-label"><i class="fa-solid fa-gift"></i> Product Gallery</span>
    <h2 class="section-title">Promote Your Business<br>Through Qualityful Gift</h2>
    <div class="row g-4 mt-3">
<div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
  <div class="package-card">
    <img src="assets/img/gift-package.svg" alt="package 1">
    <h3>Package - 01</h3>
    <ul><li>Elegant gift set with diary and pen.</li><li>Premium customizable accessories.</li><li>Ideal for corporate events and campaigns.</li></ul>
    <a class="btn btn-theme w-100" href="#quoteForm">Contact To Us <i class="fa-solid fa-arrow-right ms-2"></i></a>
  </div>
</div>
<div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="80">
  <div class="package-card">
    <img src="assets/img/gift-package.svg" alt="package 2">
    <h3>Package - 02</h3>
    <ul><li>Elegant gift set with diary and pen.</li><li>Premium customizable accessories.</li><li>Ideal for corporate events and campaigns.</li></ul>
    <a class="btn btn-theme w-100" href="#quoteForm">Contact To Us <i class="fa-solid fa-arrow-right ms-2"></i></a>
  </div>
</div>
<div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="160">
  <div class="package-card">
    <img src="assets/img/gift-package.svg" alt="package 3">
    <h3>Package - 03</h3>
    <ul><li>Elegant gift set with diary and pen.</li><li>Premium customizable accessories.</li><li>Ideal for corporate events and campaigns.</li></ul>
    <a class="btn btn-theme w-100" href="#quoteForm">Contact To Us <i class="fa-solid fa-arrow-right ms-2"></i></a>
  </div>
</div>
<div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
  <div class="package-card">
    <img src="assets/img/gift-package.svg" alt="package 4">
    <h3>Package - 04</h3>
    <ul><li>Elegant gift set with diary and pen.</li><li>Premium customizable accessories.</li><li>Ideal for corporate events and campaigns.</li></ul>
    <a class="btn btn-theme w-100" href="#quoteForm">Contact To Us <i class="fa-solid fa-arrow-right ms-2"></i></a>
  </div>
</div></div>
  </div>
</section>
<section class="gallery section-padding bg-soft">
  <div class="container text-center">
    <span class="section-label"><i class="fa-solid fa-images"></i> Product Gallery</span>
    <h2 class="section-title">Bags We've Created</h2>
    <div class="gallery-filter"><button class="filter-btn active" data-filter="all">All</button><button class="filter-btn" data-filter="backpack">Backpack</button><button class="filter-btn" data-filter="office">Office Bags</button><button class="filter-btn" data-filter="crossbody">Crossbody Bags</button><button class="filter-btn" data-filter="sports">Sports Bags</button><button class="filter-btn" data-filter="accessory">Accessory Bags</button><button class="filter-btn" data-filter="jute">Jute Bag</button></div>
    <div class="row g-4 gallery-grid mt-2"><div class="col-6 col-md-4 col-lg-3 gallery-item" data-category="backpack" data-aos="fade-up"><div class="gallery-card"><img src="assets/img/bag-backpack.svg" alt="St. Gregory School Backpack"><div class="gallery-hover"><span>Backpack</span><h3>St. Gregory School Backpack</h3></div></div></div><div class="col-6 col-md-4 col-lg-3 gallery-item" data-category="backpack" data-aos="fade-up"><div class="gallery-card"><img src="assets/img/bag-school.svg" alt="Stamford Admission Backpack"><div class="gallery-hover"><span>Backpack</span><h3>Stamford Admission Backpack</h3></div></div></div><div class="col-6 col-md-4 col-lg-3 gallery-item" data-category="crossbody" data-aos="fade-up"><div class="gallery-card"><img src="assets/img/bag-crossbody.svg" alt="Akij Crossbody Chest Bag"><div class="gallery-hover"><span>Accessory Bags</span><h3>Akij Crossbody Chest Bag</h3></div></div></div><div class="col-6 col-md-4 col-lg-3 gallery-item" data-category="accessory" data-aos="fade-up"><div class="gallery-card"><img src="assets/img/bag-accessory.svg" alt="Lux Promotional Pouch"><div class="gallery-hover"><span>Accessory Bags</span><h3>Lux Promotional Pouch</h3></div></div></div><div class="col-6 col-md-4 col-lg-3 gallery-item" data-category="sports" data-aos="fade-up"><div class="gallery-card"><img src="assets/img/bag-sports.svg" alt="Plus Point Sports Duffel"><div class="gallery-hover"><span>Sports Bags</span><h3>Plus Point Sports Duffel</h3></div></div></div><div class="col-6 col-md-4 col-lg-3 gallery-item" data-category="travel" data-aos="fade-up"><div class="gallery-card"><img src="assets/img/bag-travel.svg" alt="Konka Travel Bag"><div class="gallery-hover"><span>Travel Bags</span><h3>Konka Travel Bag</h3></div></div></div><div class="col-6 col-md-4 col-lg-3 gallery-item" data-category="jute" data-aos="fade-up"><div class="gallery-card"><img src="assets/img/bag-jute.svg" alt="Sonali Bank Jute Tote"><div class="gallery-hover"><span>Jute Bag</span><h3>Sonali Bank Jute Tote</h3></div></div></div><div class="col-6 col-md-4 col-lg-3 gallery-item" data-category="office" data-aos="fade-up"><div class="gallery-card"><img src="assets/img/bag-office.svg" alt="Corporate Office Laptop Bag"><div class="gallery-hover"><span>Office Bags</span><h3>Corporate Office Laptop Bag</h3></div></div></div></div>
  </div>
</section>
<section class="section-padding tour-section text-center">
  <div class="container">
    <span class="section-label"><i class="fa-solid fa-vr-cardboard"></i> Virtual Tour</span>
    <h2 class="section-title">Live Factory Tour</h2>
    <img class="tour-img" src="assets/img/tour.svg" alt="factory tour" data-aos="zoom-in">
  </div>
</section>

@endsection