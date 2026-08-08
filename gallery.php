<?php 
include ("admin/db-conn.php");
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gallery | Aradhya Agro Industries</title>
<meta name="description" content="Photos of Aradhya's farms, manufacturing unit, packaging and customers.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Yatra+One&family=Mukta:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="assets/common.css">
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
        <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link " href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link " href="manufacturing.php">Manufacturing</a></li>
        <li class="nav-item"><a class="nav-link " href="products.php">Products</a></li>
        <li class="nav-item"><a class="nav-link " href="quality.php">Quality</a></li>
        <li class="nav-item"><a class="nav-link " href="export.php">Export</a></li>
        <li class="nav-item"><a class="nav-link active" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link " href="contact.php">Contact</a></li>
        <li class="nav-item ms-lg-2"><a class="btn-order" href="contact.php">Order / Export</a></li>
      </ul>
    </div>
  </div>
</nav>
<style>
  .gallery-thumb-wrap{ border-radius:14px; overflow:hidden; height:210px; box-shadow:0 8px 20px rgba(42,33,20,.1); border:1px solid rgba(122,30,43,.08); position:relative; cursor:pointer; }
  .gallery-thumb-wrap img{ width:100%; height:100%; object-fit:cover; transition:transform .4s ease; }
  .gallery-thumb-wrap:hover img{ transform:scale(1.08); }
  .gallery-thumb-wrap::after{ content:"\f52a"; font-family:"bootstrap-icons"; position:absolute; inset:0; display:flex; align-items:center; justify-content:center; background:rgba(42,33,20,0); color:#fff; font-size:1.4rem; opacity:0; transition:.25s ease; }
  .gallery-thumb-wrap:hover::after{ background:rgba(42,33,20,.35); opacity:1; }
  #imgModal .modal-content{ background:transparent; }
  #imgModal img{ width:100%; border-radius:16px; }
</style>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb-trail"><a href="index.php">Home</a> / Gallery</div>
    <p class="eyebrow">Our Gallery</p>
    <h1>Visual Story of Purity</h1>
    <p>Farms, the wooden ghani press, packaging, and the families who trust Aradhya every day.</p>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row g-3">
      
      <?php
      // Fetch ALL images from the gallery table
      $gallery_sql = "SELECT * FROM gallery ORDER BY ID DESC"; // ID DESC taaki nayi images pehle aayein
      $gallery_res = mysqli_query($conn, $gallery_sql);

      if($gallery_res && mysqli_num_rows($gallery_res) > 0) {
          while($img = mysqli_fetch_assoc($gallery_res)) {
              
              // Path properly format kar rahe hain taaki double slash ka issue na aaye
              $full_img_path = rtrim($site, '/') . "/admin/" . $img['image_path'];
              ?>
              
              <div class="col-6 col-md-4 col-lg-3">
                <!-- data-full me image ka path pass karna zaroori hai tabhi click karne par modal me image khulegi -->
                <div class="gallery-thumb-wrap" data-full="<?= $full_img_path; ?>">
                  <img class="gallery-thumb" src="<?= $full_img_path; ?>" alt="<?= htmlspecialchars($img['image_name']); ?>" loading="lazy">
                </div>
              </div>
              
              <?php
          }
      } else {
          echo "<div class='col-12'><p class='text-center'>No images uploaded yet.</p></div>";
      }
      ?>

    </div>
  </div>
</section>

<div class="modal fade" id="imgModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content"><img id="modalImg" src="" alt="Aradhya Agro Industries"></div>
  </div>
</div>

<script>
  document.querySelectorAll('.gallery-thumb-wrap').forEach(function(el){
    el.addEventListener('click', function(){
      document.getElementById('modalImg').setAttribute('src', el.getAttribute('data-full'));
      new bootstrap.Modal(document.getElementById('imgModal')).show();
    });
  });
</script>
<!-- ============================================ -->
<!-- ========== FOOTER ========== -->
<!-- ============================================ -->
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
