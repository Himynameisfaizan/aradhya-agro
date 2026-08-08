<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include ("./admin/db-conn.php");
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Premium Cold-Pressed Mustard Oil Exporter | Aradhya Agro Industries</title>
<meta name="description" content="100% pure, cold-pressed Kachchi Ghani mustard oil exported worldwide from Aradhya Agro Industries, India.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Yatra+One&family=Mukta:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="assets/common.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="assets/logo (2).jpeg" width="100" alt="Aradhya Agro Industries"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link " href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link " href="manufacturing.php">Manufacturing</a></li>
        <li class="nav-item"><a class="nav-link " href="products.php">Products</a></li>
        <li class="nav-item"><a class="nav-link " href="quality.php">Quality</a></li>
        <li class="nav-item"><a class="nav-link " href="export.php">Export</a></li>
        <li class="nav-item"><a class="nav-link " href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link " href="contact.php">Contact</a></li>
        <li class="nav-item ms-lg-2"><a class="btn-order" href="contact.php">Order / Export</a></li>
        <li class="nav-item ms-lg-2"><a class="btn-order" target="_blank" href="assets/catalog/company profile.pdf">Catalog</a></li>
      </ul>
    </div>
  </div>
</nav>
<style>
  .heroSwiper{ position:relative; background:var(--cream); overflow:hidden; }
  .swiper-slide-bg{ position:absolute; inset:0; width:100%; height:100%; object-fit:cover; z-index:1; }
  .slide-overlay{ position:absolute; inset:0; background:linear-gradient(90deg, rgba(251,243,222,0.95) 40%, rgba(251,243,222,0.4) 100%); z-index:2; }
  .hero-container{ position:relative; z-index:3; }
  .hero-copy{ padding-top:5rem; padding-bottom:5rem; }
  .hero-copy .eyebrow{ display:flex; align-items:center; gap:.6rem; font-size:.9rem; font-weight:600; color:#6b5b41; }
  .hero-copy .eyebrow::before{ content:""; width:34px; height:2px; background:var(--maroon); display:inline-block; }
  .hero-copy h1{ font-size:clamp(2.4rem,4.4vw,3.6rem); color:var(--maroon-deep); line-height:1.18; margin:.8rem 0 1rem; }
  .hero-copy h1 em{ font-style:normal; color:var(--green); }
  .hero-copy p.lead{ font-size:1.12rem; max-width:34rem; color:#4a3c2a; }
  .hero-stats{ display:flex; gap:2.2rem; margin-top:2.4rem; flex-wrap:wrap; }
  .hero-stats div b{ display:block; font-family:'Yatra One', cursive; font-size:1.7rem; color:var(--maroon); }
  .hero-stats div span{ font-size:.85rem; color:#6b5b41; font-weight:600; }
  .hero-figure{ position:relative; height:100%; min-height:400px; display:flex; align-items:flex-end; justify-content:flex-end; padding-bottom:3rem; }
  .seal{ width:132px; height:132px; border-radius:50%; background:radial-gradient(circle at 35% 30%, #F6D97A 0%, var(--gold-bright) 45%, var(--gold) 100%); border:3px solid #fff; box-shadow:0 8px 24px rgba(122,30,43,.35), 0 0 0 6px rgba(255,255,255,.55) inset; display:flex; align-items:center; justify-content:center; text-align:center; color:var(--maroon-deep); font-family:'Yatra One', cursive; line-height:1.15; position:relative; }
  .seal::before{ content:""; position:absolute; inset:-10px; border-radius:50%; border:2px dashed rgba(122,30,43,.45); }
  .seal small{ display:block; font-family:'Mukta', sans-serif; font-weight:700; font-size:.62rem; letter-spacing:.08em; }
  .heroSwiper .swiper-pagination{ position:absolute; bottom:25px; left:50%; transform:translateX(-50%); z-index:10; display:flex; gap:10px; }
  .heroSwiper .swiper-pagination-bullet{ width:12px; height:12px; background:rgba(122,30,43,0.4); opacity:1; }
  .heroSwiper .swiper-pagination-bullet-active{ background:var(--maroon); width:32px; border-radius:20px; }
  .heroSwiper .swiper-button-next,.heroSwiper .swiper-button-prev{ color:var(--maroon); width:48px; height:48px; background:rgba(255,255,255,0.85); border-radius:50%; box-shadow:0 4px 16px rgba(0,0,0,0.12); z-index:10; }
  @media (max-width:991px){ .slide-overlay{ background:linear-gradient(180deg, rgba(251,243,222,0.95) 60%, rgba(251,243,222,0.8) 100%); } .hero-figure{ min-height:200px; justify-content:center; } .heroSwiper .swiper-button-next,.heroSwiper .swiper-button-prev{ display:none; } .hero-copy{ padding-top:2.5rem; padding-bottom:1.5rem; } }

  .teaser-section{ position:relative; }
  .teaser-img{ border-radius:20px 60px 20px 60px; box-shadow:0 20px 40px rgba(42,33,20,.25); width:100%; }
  .teaser-content{ padding-left: 1rem; }
  .teaser-content h2{ color:var(--maroon-deep); }
  .teaser-content p{ color:#5c4d38; line-height:1.75; font-size:1.02rem; }
  .link-arrow{ font-weight:700; color:var(--maroon); display:inline-flex; align-items:center; gap:6px; }
  .link-arrow:hover{ color:var(--gold); gap:10px; }
  .link-arrow i{ transition:.25s ease; }

  .why-mini-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:1.2rem; }
  @media (max-width:768px){ .why-mini-grid{ grid-template-columns:1fr; } }
  .why-mini{ background:#fff; border-radius:16px; padding:1.5rem; border:1px solid rgba(122,30,43,.06); box-shadow:0 8px 24px rgba(42,33,20,.05); text-align:center; }
  .why-mini i{ font-size:1.8rem; color:var(--gold-bright); margin-bottom:.6rem; display:block; }
  .why-mini h3{ font-family:'Mukta',sans-serif; font-weight:800; font-size:1rem; color:var(--maroon-deep); margin-bottom:.3rem; }
  .why-mini p{ font-size:.85rem; color:#6b5b41; margin:0; }

  .products-strip{ display:flex; gap:1.2rem; overflow-x:auto; padding-bottom:.5rem; }
  .product-mini{ flex:0 0 240px; background:#fff; border-radius:18px; padding:1.3rem; border:1px solid rgba(122,30,43,.06); box-shadow:0 8px 24px rgba(42,33,20,.05); text-align:center; }
  .product-mini img{ height:120px; object-fit:contain; margin-bottom:.8rem; }
  .product-mini h4{ font-size:.95rem; font-weight:800; color:var(--maroon-deep); margin-bottom:.2rem; }
  .product-mini span{ font-size:.78rem; color:#8b7b64; font-weight:600; }

  .gallery-mini{ display:grid; grid-template-columns:repeat(4,1fr); gap:.9rem; }
  @media (max-width:768px){ .gallery-mini{ grid-template-columns:repeat(2,1fr); } }
  .gallery-mini img{ width:100%; height:150px; object-fit:cover; border-radius:14px; box-shadow:0 8px 20px rgba(42,33,20,.1); }
</style>

<header class="hero" id="top">
  <div class="swiper heroSwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="position:relative;">
        <img src="assets/farmer-field.jpg" alt="Farmer in mustard field" class="swiper-slide-bg">
        <div class="slide-overlay"></div>
        <div class="container hero-container">
          <div class="row align-items-center">
            <div class="col-lg-6 hero-copy">
              <p class="eyebrow">Global Exporter · Pure Cold-Pressed · Farm to Table</p>
              <h1>Premium <em>Mustard Oil</em>, Trusted Worldwide</h1>
              <p class="lead">100% pure, cold-pressed (Kachchi Ghani) mustard oil — sourced directly from farmers, free from chemicals.</p>
              <div class="d-flex flex-wrap gap-3 mt-4">
                <a href="products.php" class="btn btn-danger btn-lg rounded-pill px-4" style="background-color:var(--maroon); border:none;">View Products</a>
                <a href="about.php" class="btn btn-outline-dark btn-lg rounded-pill px-4">Our Story</a>
              </div>
              <div class="hero-stats">
                <div><b>15+</b><span>Export Countries</span></div>
                <div><b>100%</b><span>Chemical-Free</span></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hero-figure"><div class="seal">Purity<br><small>100% Guarantee</small></div></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" style="position:relative;">
        <img src="assets/farmer-field.jpg" alt="Traditional wooden ghani" class="swiper-slide-bg">
        <div class="slide-overlay"></div>
        <div class="container hero-container">
          <div class="row align-items-center">
            <div class="col-lg-6 hero-copy">
              <p class="eyebrow">Traditional Methods · Modern Quality</p>
              <h1>Cold-Pressed with <em>Wooden Ghani</em></h1>
              <p class="lead">Our mustard seeds are slow-crushed in traditional wooden churners at low temperatures, preserving all natural goodness.</p>
              <div class="d-flex flex-wrap gap-3 mt-4">
                <a href="manufacturing.php" class="btn btn-danger btn-lg rounded-pill px-4" style="background-color:var(--maroon); border:none;">See Our Process</a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hero-figure"><div class="seal">Kachchi<br><small>Ghani</small></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  // Wait for the DOM to fully load before initializing Swiper
  document.addEventListener('DOMContentLoaded', function () {
    var heroSwiper = new Swiper(".heroSwiper", {
      // Basic Settings
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true, // Makes it loop infinitely
      
      // Auto Play Settings
      autoplay: {
        delay: 5000, // 5 seconds per slide
        disableOnInteraction: false, // Keeps playing after user clicks
        pauseOnMouseEnter: true,
      },
      
      // Pagination (The dots)
      pagination: {
        el: ".heroSwiper .swiper-pagination",
        clickable: true,
      },
      
      // Navigation (The arrows)
      navigation: {
        nextEl: ".heroSwiper .swiper-button-next",
        prevEl: ".heroSwiper .swiper-button-prev",
      },
      
      // Optional but recommended for Hero sections: Fade Effect
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      speed: 800, // Transition speed
    });
  });
</script>

<!-- ABOUT TEASER -->
<section class="section-pad teaser-section" id="about">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <img src="assets/puri-kitchen.jpg" alt="Cooking with Aradhya oil" class="teaser-img">
      </div>
      <div class="col-lg-7 teaser-content">
        <span class="divider-leaf">Our Beginning</span>
        <h2 class="mt-2">From a Health Crisis to a Global Promise</h2>
        <p>A personal health scare revealed a shocking truth — finding genuinely pure mustard oil had become nearly impossible. Aradhya Agro Industries was founded on this revelation, operating on a direct farmer-to-consumer model while now serving international markets with the same rural authenticity.</p>
        <a href="about.php" class="link-arrow">Read our full story <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS TEASER -->
<section class="section-pad teaser-section" id="process" style="background:var(--cream-deep);">
  <div class="container">
    <div class="section-head mx-auto text-center">
      <span class="divider-leaf">Kachchi Ghani Process</span>
      <h2>From Seed to Export Container</h2>
    </div>
    <div class="why-mini-grid">
      <div class="why-mini"><i class="bi bi-flower2"></i><h3>Mustard Harvest</h3><p>Fresh seeds sourced directly from trusted farmers.</p></div>
      <div class="why-mini"><i class="bi bi-gear-wide-connected"></i><h3>Cold Pressing</h3><p>Slow-crushed in traditional wooden churners.</p></div>
      <div class="why-mini"><i class="bi bi-box-seal"></i><h3>Export Packing</h3><p>Hygienic, food-grade, international-standard packaging.</p></div>
    </div>
    <div class="text-center mt-4">
      <a href="manufacturing.php" class="link-arrow">See the full manufacturing process <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- PRODUCTS TEASER -->
<section class="section-pad" id="products">
  <div class="container">
    <div class="section-head mx-auto text-center">
      <span class="divider-leaf">Our Products</span>
      <h2>Perfect Sizes for Every Need</h2>
    </div>
    
    <div class="products-strip">
      <?php
      // Fetch dynamic products from the database (Active status and limit to 4 for the strip)
      $product_sql = "SELECT * FROM products WHERE status = 1 ORDER BY id ASC LIMIT 5";
      $product_res = mysqli_query($conn, $product_sql);

      if(mysqli_num_rows($product_res) > 0) {
          while($row = mysqli_fetch_assoc($product_res)) {
              // Adjust the path to match your folder structure where images are saved
              $img_path = 'uploads/products/' . $row['pro_img']; 
              ?>
              <div class="product-mini">
                <img src="<?= $img_path; ?>" alt="<?= $row['pro_name']; ?>" onerror="this.src='assets/bottle-1l.jpg';">
                <h4><?= $row['pro_name']; ?></h4>
                <span>₹<?= $row['selling_price']; ?></span>
              </div>
              <?php
          }
      } else {
          echo "<p>Products updating soon...</p>";
      }
      ?>
    </div>
    
    <div class="text-center mt-4">
      <a href="products.php" class="link-arrow">View all products &amp; specifications <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- WHY US -->
<section class="section-pad" id="why" style="background:var(--cream-deep);">
  <div class="container">
    <div class="section-head mx-auto text-center">
      <span class="divider-leaf">Why Choose Aradhya</span>
      <h2>What Makes Us the Global Choice</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="info-card"><div class="icon-wrap"><i class="bi bi-shield-check"></i></div><h3>Zero Chemicals</h3><p>No adulteration, no preservatives — just pure, natural mustard oil.</p></div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="info-card"><div class="icon-wrap"><i class="bi bi-people"></i></div><h3>500+ Farmer Partners</h3><p>Direct sourcing, fair prices, no middlemen.</p></div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="info-card"><div class="icon-wrap"><i class="bi bi-award"></i></div><h3>Certified Quality</h3><p>FSSAI, ISO 22000, and Startup India recognised.</p></div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="info-card"><div class="icon-wrap"><i class="bi bi-globe2"></i></div><h3>15+ Countries</h3><p>Experienced in export logistics and documentation.</p></div>
      </div>
    </div>
    <div class="text-center mt-4">
      <a href="quality.php" class="link-arrow">See our certifications <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- GALLERY TEASER -->
<section class="section-pad" id="gallery">
  <div class="container">
    <div class="section-head mx-auto text-center">
      <span class="divider-leaf">Our Gallery</span>
      <h2>Visual Story of Purity</h2>
    </div>
    
    <div class="gallery-mini">
      <?php
      $gallery_sql = "SELECT * FROM gallery LIMIT 4";
      $gallery_res = mysqli_query($conn, $gallery_sql);

      if(mysqli_num_rows($gallery_res) > 0) {
          while($img = mysqli_fetch_assoc($gallery_res)) {
              
              // .env wale $site se aakhiri slash hata kar, usme /admin/ jodenge, 
              // kyunki $img['image_path'] mein pehle se hi 'uploads/gallery/' maujood hai
              $full_img_path = rtrim($site, '/') . "/admin/" . $img['image_path'];
              
              ?>
              <img src="<?= $full_img_path; ?>" alt="<?= $img['image_name']; ?>" loading="lazy">
              <?php
          }
      } else {
          echo "<p>No images found in gallery.</p>";
      }
      ?>
    </div>
    
    <div class="text-center mt-4">
      <a href="gallery.php" class="link-arrow">View full gallery <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- CONTACT CTA -->
<section class="section-pad" style="background:var(--cream-deep);">
  <div class="container">
    <div class="cta-band">
      <h2>Ready to Order or Partner With Us?</h2>
      <p>Whether you need a trial pack, a bulk order, or want to become a distributor — our team responds within 24 hours.</p>
      <a href="contact.php" class="btn-gold">Contact Us <i class="bi bi-arrow-right ms-1"></i></a>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  new Swiper(".heroSwiper", {
    slidesPerView:1, spaceBetween:0, loop:true,
    autoplay:{ delay:5000, disableOnInteraction:false, pauseOnMouseEnter:true },
    pagination:{ el:".heroSwiper .swiper-pagination", clickable:true },
    navigation:{ nextEl:".heroSwiper .swiper-button-next", prevEl:".heroSwiper .swiper-button-prev" },
    effect:'fade', fadeEffect:{ crossFade:true }, speed:800
  });
</script>

<!-- ========== FOOTER ========== -->
<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-4">
          <h5>ARADHYA AGRO</h5>
          <p style="color:#cbbfa4;">Exporting the purest cold-pressed mustard oil from the farms of India to the world. Certified, trusted, and authentic.</p>
          <div class="d-flex gap-3 fs-5 mt-3">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="https://wa.me/919278480163"><i class="bi bi-whatsapp"></i></a>
            <a href="mailto:aradhyaagroindustriespvtltd@gmail.com"><i class="bi bi-envelope"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <h5>Quick Links</h5>
          <ul class="list-unstyled footer-links">
            <li><a href="about.php">About Us</a></li>
            <li><a href="manufacturing.php">Manufacturing</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="quality.php">Quality &amp; Certifications</a></li>
            <li><a href="export.php">Export</a></li>
            <li><a href="gallery.php">Gallery</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Export &amp; Contact</h5>
          <ul class="list-unstyled footer-links">
            <li><i class="bi bi-envelope me-2"></i> aradhyaagroindustriespvtltd@gmail.com</li>
            <li><i class="bi bi-whatsapp me-2"></i> +91 9278480163</li>
            <li><i class="bi bi-geo-alt me-2"></i> Maharajganj, Uttar Pradesh, India</li>
            <li><i class="bi bi-file-text me-2"></i> FSSAI · ISO 22000 · DPIIT</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
      <div>&copy; 2026 Aradhya Agro Industries Private Limited. All rights reserved. | Exporting purity worldwide.</div>
      <div>Designed with <i class="bi bi-heart-fill text-danger"></i> for Indian farmers &amp; global families</div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>